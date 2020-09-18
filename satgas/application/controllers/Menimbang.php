<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menimbang extends MY_Controller {

	public function __construct()
    {
       parent::__construct();
       $this->cekLogin();
       $this->load->model('Model_menimbang');
    }

    //FUNCTION YANG PERTAMA KALI DI LOAD SAAT KELAS DI AKSES
    public function index()
    {
        $data['pageTitle'] = 'DATA MENIMBANG';      
        $data['menimbang'] = $this->Model_menimbang->get_menimbang()->result();
        $data['pageContent'] = $this->load->view('data_menimbang', $data, TRUE);

        $this->load->view('template/layout', $data);
    }

 //FUNCTION TAMBAH DATA MAKASUD TUGAS
    public function insert() 
    {
        if ($this->input->post('submit')) {

            $data = array(
                'id_menimbang'     => $this->input->post(''),                        
                'isi_menimbang'  => $this->input->post('isi_menimbang')                
            );


            $this->Model_menimbang->insert($data);
            $id_menimbang = $this->db->insert_id();

                        // cek jika query berhasil
            if ($this->db->trans_status() === true)  {
                $this->db->trans_commit();
                $message = array('status' => true, 'message' => 'Data menimbang telah di tambahkan');
            }
            else {
                $this->db->trans_rollback();
                $message = array('status' => true, 'message' => 'Data menimbang gagal ditambahkan');
            }

                        // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

                        // refresh page
            redirect('menimbang', 'refresh');
        }

    }

    //FUNCTION UPDATE DATA MAKASUD TUGAS
    public function update($id = null)
    {
        if ($this->input->post('submit')) {
            $id = $this->input->post('id');
            $data = array(                       
                'isi_menimbang'  => $this->input->post('isi_menimbang')              
            );
            
                // Jalankan function update pada model

            $query = $this->Model_menimbang->update($id, $data);



                // cek jika query berhasil
            if ($query) $message = array('status' => true, 'message' => 'Data menimbang telah di perbaharui');
            else $message = array('status' => true, 'message' => 'Data Menimbang gagal di perbaharui');
            
                // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

                // refresh page
            redirect('menimbang');
        }

    }


    //FUNCTION DELETE DATA MAKASUD TUGAS
    public function delete($id = null)
    {
        $menimbang = $this->Model_menimbang->get_menimbang_byId($id);

        if (!$menimbang) show_404();

        $query = $this->Model_menimbang->delete($id);
        
            // cek jika query berhasil
        if ($query) $message = array('status' => true, 'message' => 'Data menimbang telah dihapus');
        else $message = array('status' => true, 'message' => 'Data menimbang  gagal dihapus');
        
            // simpan message sebagai session
        $this->session->set_flashdata('message', $message);

        redirect('menimbang', 'refresh');

    }


}