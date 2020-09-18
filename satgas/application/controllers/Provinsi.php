<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->load->model('Model_provinsi');
          
    }


    //FUNCTION PERTAMA KALI DI LOAD SAAT KELAS ID AKSES
    public function index()
    {   
          
        $data['pageTitle'] = 'DATA PROVINSI';      
        $data['provinsi'] = $this->Model_provinsi->get_provinsi()->result();
        $data['pageContent'] = $this->load->view('data_provinsi', $data, TRUE);

        $this->load->view('template/layout', $data);

    }


    //FUNCTION TAMBAH DATA PROVINSI
    public function insert() 
    {
         if ($this->input->post('submit')) {

          $data = array(
            'id_provinsi'        => $this->input->post(''),                                              
            'nama_provinsi'       => $this->input->post('nama_provinsi')

          );

          $query = $this->Model_provinsi->insert($data);

                // cek jika query berhasil
          if ($this->db->trans_status() === true)  {
            $this->db->trans_commit();
            $message = array('status' => true, 'message' => 'Data provinsi telah ditambahkan');
          }
          else {
            $this->db->trans_rollback();
            $message = array('status' => true, 'message' => 'Data provinsi gagal ditambahkan');
          }

                // simpan message sebagai session
          $this->session->set_flashdata('message', $message);

                // refresh page
          redirect('provinsi', 'refresh');
        }
    }


    //FUCNTION UPDATE DATA PROVINSI
    public function update($id = null)
    {
        if ($this->input->post('submit')) {

          $data = array(                                             
            'nama_provinsi'       => $this->input->post('nama_provinsi')

          );

              // Jalankan function update pada model
          $id = $this->input->post('id');
          $query = $this->Model_provinsi->update($id, $data);



              // cek jika query berhasil
          if ($this->db->trans_status() === true)  {
            $this->db->trans_commit();
            $message = array('status' => true, 'message' => 'Data provinsi telah diupdate');
          }
          else {
            $this->db->trans_rollback();
            $message = array('status' => true, 'message' => 'Data provinsi gagal diupdate');
          }

              // simpan message sebagai session
          $this->session->set_flashdata('message', $message);

              // refresh page
          redirect('provinsi');
        }

    }


    //FUCNTION DELETE PROVINSI
    public function delete($id = null)
    {
        $provinsi = $this->Model_provinsi->get_provinsi_byId($id);

        if (!$provinsi) show_404();

        $query = $this->Model_provinsi->delete($id);

          // cek jika query berhasil
        if ($this->db->trans_status() === true)  {
          $this->db->trans_commit();
          $message = array('status' => true, 'message' => 'Data provinsi telah dihapus');
        }
        else {
          $this->db->trans_rollback();
          $message = array('status' => true, 'message' => 'Data provinsi gagal dihapus');
        }

          // simpan message sebagai session
        $this->session->set_flashdata('message', $message);

        redirect('provinsi', 'refresh');

    }

}