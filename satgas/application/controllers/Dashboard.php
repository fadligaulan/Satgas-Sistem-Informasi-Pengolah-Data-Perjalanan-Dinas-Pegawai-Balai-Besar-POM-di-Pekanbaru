<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->cekLogin();        
        $this->load->model('Model_dashboard');
        // $this->load->model('Model_takmir');
        //  $this->load->model('Model_masjid');

    }

    public function index()
    {
        $data['pageTitle'] = 'DASHBOARD';      
        $data['pegawai'] = $this->Model_dashboard->count_pegawai();
        $data['bidang'] = $this->Model_dashboard->count_bidang();
        $data['surat_tugas'] = $this->Model_dashboard->count_surat_tugas();
        $data['sppd'] = $this->Model_dashboard->count_sppd();

        //count surat tugas by bidang
        $data['surat_by_bidang'] = $this->Model_dashboard->count_surat_tugas_by_bidang();
        //count sppd by bidang
        $data['sppd_by_bidang'] = $this->Model_dashboard->count_sppd_by_bidang();
        // $data['audio_byid'] = $this->Model_dashboard->count_AudioById();
        // $data['video_byid'] = $this->Model_dashboard->count_VideoById();
        // $data['streaming_byid'] = $this->Model_dashboard->count_StreamingById();
        // $data['masjid'] = $this->Model_masjid->getByID()->result();
        $data['pageContent'] = $this->load->view('dashboard', $data, TRUE);

        $chart['pegawai'] = $this->Model_dashboard->count_pegawai();
        $chart['bidang'] = $this->Model_dashboard->count_bidang();
        $chart['surat_tugas'] = $this->Model_dashboard->count_surat_tugas();
        $chart['sppd'] = $this->Model_dashboard->count_sppd();


        $chart2['pegawai'] = $this->Model_dashboard->count_pegawai();
        $chart2['bidang'] = $this->Model_dashboard->count_bidang();
        $chart2['surat_by_bidang'] = $this->Model_dashboard->count_surat_tugas_by_bidang();
        $chart2['sppd_by_bidang'] = $this->Model_dashboard->count_sppd_by_bidang();
        

        //chart admin
        $data['donutChart'] = $chart;

        //chart bidang
        $data['donutChart2'] = $chart2;

        $this->load->view('template/layout', $data);
        
    }

 

    
    
}