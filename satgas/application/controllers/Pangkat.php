<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pangkat extends MY_Controller {

    public function __construct()
    {
       parent::__construct();
       $this->cekLogin();
       $this->load->model('Model_pangkat');

    }


    //HALAMAN PERTAMA KALI DI LOAD SAAT KELAS DI AKSES
    public function index()
    {
        $data['pageTitle'] = 'DATA PANGKAT';      
        $data['pangkat'] = $this->Model_pangkat->get_pangkat()->result();
        $data['pageContent'] = $this->load->view('data_pangkat', $data, TRUE);

        $this->load->view('template/layout', $data);

    }


    //FUNCTION TAMBAH DATA PANGKAT
    public function insert() 
    {
         if ($this->input->post('submit')) {

            $data = array(
              'id_pangkat'        => $this->input->post(''),                                              
              'pangkat'           => $this->input->post('pangkat'),
              'golongan'          => $this->input->post('golongan'),

            );

            $query = $this->Model_pangkat->insert($data);

                  // cek jika query berhasil
            if ($this->db->trans_status() === true)  {
              $this->db->trans_commit();
              $message = array('status' => true, 'message' => 'Data pangkat telah ditambahkan');
            }
            else {
              $this->db->trans_rollback();
              $message = array('status' => true, 'message' => 'Data pangkat gagal ditambahkan');
            }

                  // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

                  // refresh page
            redirect('pangkat', 'refresh');
        }
    }


    //FUNCTION UPDATE DATA PANGKAT
    public function update($id = null)
    {
        if ($this->input->post('submit')) {

          $data = array(                                             
            'pangkat'           => $this->input->post('pangkat'),
            'golongan'          => $this->input->post('golongan'),

          );

              // Jalankan function update pada model
          $id = $this->input->post('id');
          $query = $this->Model_pangkat->update($id, $data);



              // cek jika query berhasil
          if ($this->db->trans_status() === true)  {
            $this->db->trans_commit();
            $message = array('status' => true, 'message' => 'Data pangkat telah diupdate');
          }
          else {
            $this->db->trans_rollback();
            $message = array('status' => true, 'message' => 'Data pangkat gagal diupdate');
          }

              // simpan message sebagai session
          $this->session->set_flashdata('message', $message);

              // refresh page
          redirect('pangkat','refresh');
        }
    }


    //FUNCTION DELETE DATA PANGKAT
    public function delete($id = null)
    {
          $pangkat = $this->Model_pangkat->get_pangkat_byId($id);

          if (!$pangkat) show_404();

          $query = $this->Model_pangkat->delete($id);
          
              // cek jika query berhasil
          if ($this->db->trans_status() === true)  {
            $this->db->trans_commit();
            $message = array('status' => true, 'message' => 'Data pangkat telah dihapus');
          }
          else {
            $this->db->trans_rollback();
            $message = array('status' => true, 'message' => 'Data pangkat gagal dihapus');
          }
          
              // simpan message sebagai session
          $this->session->set_flashdata('message', $message);

          redirect('pangkat', 'refresh');

    }

}