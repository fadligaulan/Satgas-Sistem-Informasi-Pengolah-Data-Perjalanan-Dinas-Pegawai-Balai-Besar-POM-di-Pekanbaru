<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function cekAkun()
    {
        //Memanggil model_users
        $this->load->model('Model_users');

        //Memanggil data dari form login dengan method POST
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        //Jalankan function cekakun pada model_users
        $query = $this->Model_users->cekAkun($username, $password);

        //Jika query gagal maka return false 

        if(!$query) {

        // Mengatur pesan orror validasi  data

            $this->form_validation->set_message('cekAkun', 'Nama Pengguna atau Kata Sandi yang Anda masukan salah!');


            return FALSE;

        //Jika berhasil maka set user session dan return true 
        } else {

        //data user dalam bentuk array 

        $userData = array(
            'username' => $query->username,
            'id_group' => $query->id_group,
            'first_name' => $query->first_name,            
            'last_name' => $query->last_name,
            'level' => $query->level,
            'logged_in' => TRUE

        );

        // set session untuk user 
        $this->session->set_userdata($userData);


        return TRUE;

        }

    }

    public function login()
    {
        //Jika user telah login, redirect ke base_url 
        if($this->session->userdata('logged_in')) redirect('dashboard');

        //Jika form di submit jalankan blok kode ini 
        if($this->input->post('submit')) {

        //Mengatur validasi data username,
        //required = tidak boleh kosong 
        $this->form_validation->set_rules('username', 'Username', 'required');

        //Mengatur validasi data password,
        //required = tidak boleh kosong 
        //calback cekAkun = menjalankan function cekAkun()
        $this->form_validation->set_rules('password', 'Password', 'required|callback_cekAkun');

        //Mengatur pesan error validasi data
        $this->form_validation->set_message('required', '% tidak boleh kosong! ');

        //Menjalankan validasi data jika semua benar maka redirect ke contrroler dashboard 
        if($this->form_validation->run() === TRUE) {
            redirect('dashboard');

        } 

        }
        // Jalankan view auth/login.php
        $this->load->view('login2');
    }

    public function logout()
    {
        //Hapus semua data pada session 
        $this->session->sess_destroy(); 

        //redirect ke halaman login 
        redirect('auth/login','refresh');
    }

    
}