<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maksud extends MY_Controller {

	public function __construct()
    {
       parent::__construct();
       $this->cekLogin();
       $this->load->model('Model_maksud');
    }

    //FUNCTION YANG PERTAMA KALI DI LOAD SAAT KELAS DI AKSES
    public function index()
    {
        $data['pageTitle'] = 'DATA MAKSUD TUGAS';      
        $data['maksud'] = $this->Model_maksud->get_maksud()->result();
        $data['maksud_by_bidang'] = $this->Model_maksud->get_maksud_tugas_by_bidang()->result();
        $data['pageContent'] = $this->load->view('data_maksud', $data, TRUE);

        $this->load->view('template/layout', $data);
    }

    //FUNCTION TAMBAH DATA MAKASUD TUGAS
    public function insert() 
    {
         if ($this->input->post('submit')) {

            $id_group = $this->session->userdata('id_group');
            $data = array(
                'id_maksud'     => $this->input->post(''),                        
                'mata_anggaran'  => $this->input->post('mata_anggaran'),
                'tahun_anggaran' => $this->input->post('tahun_anggaran'),
                'maksud_tugas'   => $this->input->post('maksud_tugas'),
                'id_user'        => $id_group               
            );


            $this->Model_maksud->insert($data);
            $id_maksud = $this->db->insert_id();

                // cek jika query berhasil
            if ($this->db->trans_status() === true)  {
                $this->db->trans_commit();
                $message = array('status' => true, 'message' => 'Maksud telah ditambahkan');
            }
            else {
                $this->db->trans_rollback();
                $message = array('status' => true, 'message' => 'Maksud gagal ditambahkan');
            }

                // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

                // refresh page
            redirect('maksud', 'refresh');
        }
    }

    //FUNCTION UPDATE DATA MAKASUD TUGAS
    public function update($id = null)
    {
        if ($this->input->post('submit')) {
            $id = $this->input->post('id');
            $data = array(                       
            'mata_anggaran'  => $this->input->post('mata_anggaran'),
            'tahun_anggaran' => $this->input->post('tahun_anggaran'),
            'maksud_tugas'   => $this->input->post('maksud_tugas')                
            );
            
                // Jalankan function update pada model

            $query = $this->Model_maksud->update($id, $data);



                // cek jika query berhasil
            if ($query) $message = array('status' => true, 'message' => 'Data maksud telah di perbaharui');
            else $message = array('status' => true, 'message' => 'Data Maksud gagal di perbaharui');
            
                // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

                // refresh page
            redirect('Maksud');
        }
    }


    //FUNCTION DELETE DATA MAKASUD TUGAS
    public function delete($id = null)
    {
        $maksud = $this->Model_maksud->get_maksud_byId($id);

        if (!$maksud) show_404();

        $query = $this->Model_maksud->delete($id);

        // cek jika query berhasil
        if ($query) $message = array('status' => true, 'message' => 'Maksud telah dihapus');
        else $message = array('status' => true, 'message' => 'Maksud gagal dihapus');

        // simpan message sebagai session
        $this->session->set_flashdata('message', $message);

        redirect('maksud', 'refresh');
    }


}