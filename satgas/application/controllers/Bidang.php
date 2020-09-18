<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang extends MY_Controller {

    public function __construct()
    {
       parent::__construct();
       $this->cekLogin();
       $this->load->model('Model_bidang');

    }


    //FUNCTION HALAMAN YANG DI LOAD PERTAMA KALI KELAS DI PANGGIL
    public function index()
    {
        $data['pageTitle'] = 'DATA BIDANG';      
        $data['bidang'] = $this->Model_bidang->get_bidang()->result();
        $data['pageContent'] = $this->load->view('data_bidang', $data, TRUE);

        $this->load->view('template/layout', $data);

    }


    //FUNCTION TAMBAH DATA BIDANG
    public function insert() 
    {

         if ($this->input->post('submit')) {

          $data = array(
            'id_bidang'        => $this->input->post(''),                                              
            'kode_bidang'      => $this->input->post('kode_bidang'),
            'nama_bidang'      => $this->input->post('nama_bidang')

          );

          $query = $this->Model_bidang->insert($data);

                        // cek jika query berhasil
          if ($this->db->trans_status() === true)  {
            $this->db->trans_commit();
            $message = array('status' => true, 'message' => 'Data bidang telah ditambahkan');
          }
          else {
            $this->db->trans_rollback();
            $message = array('status' => true, 'message' => 'Data bidang gagal ditambahkan');
          }

                        // simpan message sebagai session
          $this->session->set_flashdata('message', $message);

                        // refresh page
          redirect('bidang', 'refresh');
        }
    }


    //FUNCTION UPDATE DATA BIDANG 
    public function update($id = null)
    {
          if ($this->input->post('submit')) {

            $data = array(                                             
              'kode_bidang'           => $this->input->post('kode_bidang'),
              'nama_bidang'           => $this->input->post('nama_bidang'),

            );

                    // Jalankan function update pada model
            $id = $this->input->post('id');
            $query = $this->Model_bidang->update($id, $data);



                    // cek jika query berhasil
            if ($this->db->trans_status() === true)  {
                $this->db->trans_commit();
                $message = array('status' => true, 'message' => 'Data bidang telah diupdate');
              }
              else {
                $this->db->trans_rollback();
                $message = array('status' => true, 'message' => 'Data bidang gagal diupdate');
              }

                    // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

                    // refresh page
            redirect('bidang');
          }
    }


    //DELETE DATA BIDANG
    public function delete($id = null)
    {
          $bidang = $this->Model_bidang->get_bidang_byId($id);

          if (!$bidang) show_404();

          $query = $this->Model_bidang->delete($id);
          
                // cek jika query berhasil
          if ($this->db->trans_status() === true)  {
            $this->db->trans_commit();
            $message = array('status' => true, 'message' => 'Data bidang telah dihapus');
          }
          else {
            $this->db->trans_rollback();
            $message = array('status' => true, 'message' => 'Data bidang gagal dihapus');
          }
          
                // simpan message sebagai session
          $this->session->set_flashdata('message', $message);

          redirect('bidang', 'refresh');

    }
}
