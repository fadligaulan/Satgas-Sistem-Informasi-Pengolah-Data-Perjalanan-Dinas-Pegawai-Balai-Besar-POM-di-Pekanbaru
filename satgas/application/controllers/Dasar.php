<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasar extends MY_Controller {

	public function __construct()
    {
     parent::__construct();
     $this->cekLogin();
     $this->load->model('Model_dasar');
    }


    //FUNCTION TAMBAH DATA BIDANG
    public function index()
    {
        $data['pageTitle'] = 'DATA DASAR';      
        $data['dasar'] = $this->Model_dasar->get_dasar()->result();
        $data['pageContent'] = $this->load->view('data_dasar', $data, TRUE);

        $this->load->view('template/layout', $data);
    }

    //FUNCTION TAMBAH DATA DASAR
    public function insert() 
    {
       if ($this->input->post('submit')) {

            $data = array(
                'id_dasar'     => $this->input->post(''),                        
                'isi_dasar'  => $this->input->post('isi_dasar')                
            );


            $this->Model_dasar->insert($data);
            $id_dasar = $this->db->insert_id();

                        // cek jika query berhasil
            if ($this->db->trans_status() === true)  {
                $this->db->trans_commit();
                $message = array('status' => true, 'message' => 'Isi dasar telah di tambahkan');
            }
            else {
                $this->db->trans_rollback();
                $message = array('status' => true, 'message' => 'Isi dasar gagal ditambahkan');
            }

                        // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

                        // refresh page
            redirect('dasar', 'refresh');
        }

    }

    //FUNCTION UPDATE DATA DASAR
    public function update($id = null)
    {
        if ($this->input->post('submit')) {
            $id = $this->input->post('id');
            $data = array(                       
                'isi_dasar'  => $this->input->post('isi_dasar')              
            );

            // Jalankan function update pada model

            $query = $this->Model_dasar->update($id, $data);



            // cek jika query berhasil
            if ($query) $message = array('status' => true, 'message' => 'Data dasar telah di perbaharui');
            else $message = array('status' => true, 'message' => 'Data Dasar gagal di perbaharui');

            // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

            // refresh page
            redirect('dasar');
        }

    }


    //FUNCTION DELETE DATA DASAR
    public function delete($id = null)
    {
        $dasar = $this->Model_dasar->get_dasar_byId($id);

        if (!$dasar) show_404();

        $query = $this->Model_dasar->delete($id);

        // cek jika query berhasil
        if ($this->db->trans_status() === true)  {
            $this->db->trans_commit();
            $message = array('status' => true, 'message' => 'Data dasar telah dihapus');
        }
        else {
            $this->db->trans_rollback();
            $message = array('status' => true, 'message' => 'Data dasar gagal dihapus');
        }

        // simpan message sebagai session
        $this->session->set_flashdata('message', $message);

        redirect('dasar', 'refresh');

    }


}