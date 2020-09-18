<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wilayah extends MY_Controller {

    public function __construct()
    {
         parent::__construct();
         $this->cekLogin();
         $this->load->model('Model_wilayah');
         $this->load->model('Model_provinsi');
         $this->load->model('Model_kabupaten');
    }

    //FUNCTION YANG PERTAMA KALI DILOAD SAAT KELAS DI AKSES
    public function index()
    {

        $data['pageTitle'] = 'DATA WILAYAH';
        $data['kabupaten'] = $this->Model_kabupaten->get_kabupaten()->result();
        $data['provinsi'] = $this->Model_provinsi->get_provinsi()->result();      
        $data['wilayah'] = $this->Model_wilayah->get_wilayah()->result();
        $data['pageContent'] = $this->load->view('data_wilayah', $data, TRUE);

        $this->load->view('template/layout', $data);
    }


    //FUNCTION TAMBAH DATA WILAYAH
    public function insert() 
    {
       if ($this->input->post('submit')) {

            $data = array(
                'id_wilayah'               => $this->input->post(''),                                             
                'id_provinsi'              => $this->input->post('id_provinsi'),
                'id_kabupaten'             => $this->input->post('id_kabupaten'),
                'nama_wilayah'             => $this->input->post('nama_wilayah')               
            );

            $query = $this->Model_wilayah->insert($data);

                // cek jika query berhasil
            if ($this->db->trans_status() === true)  {
                $this->db->trans_commit();
                $message = array('status' => true, 'message' => 'Data wilayah telah ditambahkan');
            }
            else {
                $this->db->trans_rollback();
                $message = array('status' => true, 'message' => 'Data wilayah gagal ditambahkan');
            }

                    // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

                    // refresh page
            redirect('wilayah', 'refresh');
        }
    
    }

    //FUNCTION UPDATE DATA WILAYAH
    public function update($id = null)
    {
        if ($this->input->post('submit')) {

            $id = $this->input->post('id');
            $data = array(                       
                'id_provinsi'           => $this->input->post('id_provinsi'),
                'id_kabupaten'            => $this->input->post('id_kabupaten'),
                'nama_wilayah'           => $this->input->post('nama_wilayah'),              
            );
            
                // Jalankan function update pada model

            $query = $this->Model_wilayah->update($id, $data);



                // cek jika query berhasil
            if ($this->db->trans_status() === true)  {
                $this->db->trans_commit();
                $message = array('status' => true, 'message' => 'Data wilayah telah diupdate');
              }
              else {
                $this->db->trans_rollback();
                $message = array('status' => true, 'message' => 'Data wilayah gagal diupdate');
              }
            
                // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

                // refresh page
            redirect('wilayah');
        }
    }


    //FUNCTION DELETE DATA WILAYAH
    public function delete($id = null)
    {
            $wilayah = $this->Model_wilayah->get_wilayah_byId($id);

            if (!$wilayah) show_404();

            $query = $this->Model_wilayah->delete($id);
            
                // cek jika query berhasil
            if ($this->db->trans_status() === true)  {
                $this->db->trans_commit();
                $message = array('status' => true, 'message' => 'Data wilayah telah didelete');
            }
            else {
                $this->db->trans_rollback();
                $message = array('status' => true, 'message' => 'Data wilayah gagal didelete');
            }
            
                // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

            redirect('wilayah', 'refresh');

    }

}