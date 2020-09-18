<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppk extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->load->model('Model_ppk');
    }


    //FUNCTION YANG PERTAMA KALI DI LOAD SAAT KELAS DI AKSES
    public function index()
    {   
        $data['pageTitle'] = 'DATA PPK';      
        $data['ppk'] = $this->Model_ppk->get_ppk()->result();
        $data['pageContent'] = $this->load->view('data_ppk', $data, TRUE);

        $this->load->view('template/layout', $data);

    }

    //FUNCTION TAMBAH DATA PPK
    public function insert() 
    {
         if ($this->input->post('submit')) {

          $data = array(
            'id_ppk'                => $this->input->post(''),
            'nip_ppk'               => $this->input->post('nip_ppk'),                                              
            'nama_ppk'              => $this->input->post('nama_ppk')

          );

          $query = $this->Model_ppk->insert($data);

                // cek jika query berhasil
          if ($this->db->trans_status() === true)  {
            $this->db->trans_commit();
            $message = array('status' => true, 'message' => 'Data ppk telah ditambahkan');
          }
          else {
            $this->db->trans_rollback();
            $message = array('status' => true, 'message' => 'Data ppk gagal ditambahkan');
          }

                // simpan message sebagai session
          $this->session->set_flashdata('message', $message);

                // refresh page
          redirect('ppk', 'refresh');

          }
      }


    //FUNCTION UPDATE DATA PPK
    public function update($id = null)
    {
        if ($this->input->post('submit')) {

          $data = array(                                             

            'nip_ppk'       => $this->input->post('nip_ppk'),
            'nama_ppk'       => $this->input->post('nama_ppk')

          );

                // Jalankan function update pada model
          $id = $this->input->post('id');
          $query = $this->Model_ppk->update($id, $data);



                // cek jika query berhasil
          if ($this->db->trans_status() === true)  {
            $this->db->trans_commit();
            $message = array('status' => true, 'message' => 'Data ppk telah diupdate');
          }
          else {
            $this->db->trans_rollback();
            $message = array('status' => true, 'message' => 'Data ppk gagal diupdate');
          }

                // simpan message sebagai session
          $this->session->set_flashdata('message', $message);

                // refresh page
          redirect('ppk');
        }

    }

    //FUNCTION DELETE DATA PPK
    public function delete($id = null)
    {
        $ppk = $this->Model_ppk->get_ppk_byId($id);

        if (!$ppk) show_404();

        $query = $this->Model_ppk->delete($id);

          // cek jika query berhasil
        if ($this->db->trans_status() === true)  {
          $this->db->trans_commit();
          $message = array('status' => true, 'message' => 'Data ppk telah dihapus');
        }
        else {
          $this->db->trans_rollback();
          $message = array('status' => true, 'message' => 'Data ppk gagal dihapus');
        }

          // simpan message sebagai session
        $this->session->set_flashdata('message', $message);

        redirect('ppk', 'refresh');

    }

}