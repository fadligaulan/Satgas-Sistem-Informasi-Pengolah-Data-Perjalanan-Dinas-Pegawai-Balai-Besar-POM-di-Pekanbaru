<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tanda_tangan extends MY_Controller {

	public function __construct()
    {
       parent::__construct();
       $this->cekLogin();
       $this->load->model('Model_tanda_tangan');
    }

    //FUNCTION YANG PERTAMA KALI DI LOAD SAAT KELAS DI AKSES
    public function index()
    {
        $data['pageTitle'] = 'DATA TANDA TANGAN';      
        $data['tanda_tangan'] = $this->Model_tanda_tangan->get_tanda_tangan()->result();
        $data['pageContent'] = $this->load->view('data_tanda_tangan', $data, TRUE);

        $this->load->view('template/layout', $data);
    }

    //FUNCTION TAMBAH DATA TANDA TANGAN
    public function insert() 
    {
        if ($this->input->post('submit')) {

            $data = array(
                'id_tandatangan'    => $this->input->post(''),                        
                'nip_pejabat'        => $this->input->post('nip_pejabat'),
                'nama_pejabat'       => $this->input->post('nama_pejabat'),
                'jabatan1'          => $this->input->post('jabatan1'),
                'jabatan2'          => $this->input->post('jabatan2'),
                'jabatan3'          => $this->input->post('jabatan3'),
                'jabatan4'          => $this->input->post('jabatan4'),
                'jabatan5'          => $this->input->post('jabatan5'),                
            );


            $this->Model_tanda_tangan->insert($data);
            $id_tanda_tangan = $this->db->insert_id();

                // cek jika query berhasil
            if ($this->db->trans_status() === true)  {
                $this->db->trans_commit();
                $message = array('status' => true, 'message' => 'Tanda tangan telah ditambahkan');
            }
            else {
                $this->db->trans_rollback();
                $message = array('status' => true, 'message' => 'Tanda tangan gagal ditambahkan');
            }

                // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

                // refresh page
            redirect('tanda-tangan', 'refresh');
        }
    }


    //FUNCTION UPDATE DATA TANDA TANGAN
    public function update($id = null)
    {
        if ($this->input->post('submit')) {
            $id = $this->input->post('id');
            $data = array(                       
                'nip_pejabat'  => $this->input->post('nip_pejabat'),
                'nama_pejabat' => $this->input->post('nama_pejabat'),
                'jabatan1'   => $this->input->post('jabatan1'),
                'jabatan2'   => $this->input->post('jabatan2'),
                'jabatan3'   => $this->input->post('jabatan3')                 
            );
            
                // Jalankan function update pada model

            $query = $this->Model_tanda_tangan->update($id, $data);



                // cek jika query berhasil
            if ($query) $message = array('status' => true, 'message' => 'Tanda tangan telah di perbaharui');
            else $message = array('status' => true, 'message' => 'Tanda tangan gagal di perbaharui');
            
                // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

                // refresh page
            redirect('tanda-tangan');
        }
    }


    //FUNCTION DELETE DATA TANDA TANGAN
    public function delete($id = null)
    {
        $tanda_tangan = $this->Model_tanda_tangan->get_tanda_tangan_byId($id);

        if (!$tanda_tangan) show_404();

        $query = $this->Model_tanda_tangan->delete($id);
        
            // cek jika query berhasil
        if ($query) $message = array('status' => true, 'message' => 'Tanda tangan telah dihapus');
        else $message = array('status' => true, 'message' => 'Tanda tangan gagal dihapus');
        
            // simpan message sebagai session
        $this->session->set_flashdata('message', $message);

        redirect('tanda-tangan', 'refresh');

    }


}