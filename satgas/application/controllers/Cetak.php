<?php defined('BASEPATH') OR exit('No direct script access allowed');




class Cetak extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('tgl_indonesia_helper');
        $this->load->helper('terbilang_helper');
        $this->load->model('Model_cetak');
        $this->load->library('word');
      

    }

  
    // CETAK SURAT TUGAS
    public function cetak_st($id = null)
    {        
        $cekPegawai = $this->Model_cetak->count_pegawai_by_surat($id);

        if($cekPegawai > 10){

            $surat = $this->Model_cetak->list_data_by_surat(array('id_surat_tugas' => $id))->row();

            $menimbang = $this->db->get('menimbang')->result();
            $dasar = $this->db->get('dasar')->result();
            

            $data['pageTitle'] = 'Cetak Surat Tugas';
            $data['pegawai'] = $this->Model_cetak->list_pegawai_by_surat($id);    
            // $data['config'] = $config;
            $data['surat'] = $surat;
            $data['menimbang'] = $menimbang;
            $data['dasar'] = $dasar;
            $html = $this->load->view('cetak_lampiran', $data, TRUE);
            $lampiran = $this->load->view('lampiran', $data, TRUE);


        

                  // Create an instance of the class:
            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [220, 330]]);

            $mpdf->SetDisplayMode('fullpage');

            $mpdf->SetTitle('Surat Tugas');
                  // Write some HTML code:
            $mpdf->WriteHTML($html);
            

            $mpdf->AddPage();

            $mpdf->WriteHTML($lampiran);
            

                  // Output a PDF file directly to the browser
            $mpdf->Output('Surat Tugas.pdf', 'I');
        }else{

            $surat = $this->Model_cetak->list_data_by_surat(array('id_surat_tugas' => $id))->row();

            $menimbang = $this->db->get('menimbang')->result();
            $dasar = $this->db->get('dasar')->result();
            

            $data['pageTitle'] = 'Cetak Surat Tugas';
            $data['pegawai'] = $this->Model_cetak->list_pegawai_by_surat($id);    
            // $data['config'] = $config;
            $data['surat'] = $surat;
            $data['menimbang'] = $menimbang;
            $data['dasar'] = $dasar;
            $html = $this->load->view('cetak', $data, TRUE);


        

                  // Create an instance of the class:
            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [220, 330]]);

            
            $mpdf->SetDisplayMode('fullpage');

            $mpdf->SetTitle('Surat Tugas');

                  // Write some HTML code:
            $mpdf->WriteHTML($html);

                  // Output a PDF file directly to the browser
            $mpdf->Output('Surat Tugas.pdf', 'I');

        }      

    }

    public function cetak_st2($id = null)
    {        
        $cekPegawai = $this->Model_cetak->count_pegawai_by_surat($id);
        
        if($cekPegawai > 10){
            
            $surat = $this->Model_cetak->list_data_by_surat(array('id_surat_tugas' => $id))->row();
    
            $menimbang = $this->db->get('menimbang')->result();
            $dasar = $this->db->get('dasar')->result();
            
    
            $data['pageTitle'] = 'Cetak Surat Tugas';
            $data['pegawai'] = $this->Model_cetak->list_pegawai_by_surat($id);    
            // $data['config'] = $config;
            $data['surat'] = $surat;
            $data['menimbang'] = $menimbang;
            $data['dasar'] = $dasar;
           
            $html = $this->load->view('cetak_lampiran2', $data, TRUE);
            $lampiran = $this->load->view('lampiran', $data, TRUE);
            
    
    
                  // Create an instance of the class:
            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [220, 330]]);
    
            
    
            $mpdf->SetDisplayMode('fullpage');
    
            $mpdf->SetTitle('Surat Tugas');
    
                  // Write some HTML code:
            $mpdf->WriteHTML($html);
            
            $mpdf->AddPage();
    
            $mpdf->WriteHTML($lampiran);
    
                  // Output a PDF file directly to the browser
            $mpdf->Output('Surat Tugas.pdf', 'I');
        
        }else{
            
            $surat = $this->Model_cetak->list_data_by_surat(array('id_surat_tugas' => $id))->row();

            $menimbang = $this->db->get('menimbang')->result();
            $dasar = $this->db->get('dasar')->result();
            

            $data['pageTitle'] = 'Cetak Surat Tugas';
            $data['pegawai'] = $this->Model_cetak->list_pegawai_by_surat($id);    
            // $data['config'] = $config;
            $data['surat'] = $surat;
            $data['menimbang'] = $menimbang;
            $data['dasar'] = $dasar;
            $html = $this->load->view('cetak2', $data, TRUE);


        

                  // Create an instance of the class:
            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [220, 330]]);

            
            $mpdf->SetDisplayMode('fullpage');

            $mpdf->SetTitle('Surat Tugas');

                  // Write some HTML code:
            $mpdf->WriteHTML($html);

                  // Output a PDF file directly to the browser
            $mpdf->Output('Surat Tugas.pdf', 'I');
            
        }


    }

    // CETAK SPPD

    public function cetak_sppd($id = null)
    {   
        $sppd = $this->Model_cetak->list_data_sppd_by_pegawai(array('id_pegawai' => $id))->row();
     
        $data['pageTitle'] = 'Cetak Surat Tugas'; 
        $data['sppd'] =  $sppd;  
        // $data['sppd'] =  $this->Model_cetak->get_sppd_pegawai($id);
        $html = $this->load->view('cetak_sppd', $data, TRUE);

      
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [252, 420]]);

        $mpdf->defaultheaderline = 0;
        $mpdf->SetHeader('
          <div style="text-align: left; font-weight: bold; font-size: 12pt;">
          BALAI BESAR PENGAWAS OBAT DAN MAKANAN<br> DI PEKANBARU
          </div>');

              // Write some HTML code:
        $mpdf->WriteHTML($html);
        
        $mpdf->SetTitle('SPPD depan Surat Tugas');
              // Output a PDF file directly to the browser
        $mpdf->Output('SPPD Depan.pdf', 'I');


    }

    //CETAK SPPD KESELURUHAN
    public function sppd_keseluruhan($id = null)
    {
          $this->db->select('nama_wilayah');
          $this->db->join('wilayah', 'surat_tugas.id_wilayah = wilayah.id_wilayah');
          $this->db->where('id_surat_tugas', $id );
          $query = $this->db->get('surat_tugas');
          $result_array = $query->row_array();
          // print_r($result_array); die;

          if($result_array['nama_wilayah'] == 'Pekanbaru' ) {

            $data['pageTitle'] = 'Cetak SPPD Dalam Kota';
            $data['sppd_ks'] = $this->Model_cetak->get_sppd_on_surat($id)->result();
            $html = $this->load->view('cetak_sppd_dalam_kota', $data, TRUE);

            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [252, 420]]);

            $mpdf = new \Mpdf\Mpdf(['orientation' => 'P']);      

                  // Write some HTML code:
            $mpdf->WriteHTML($html);
            
                  // Output a PDF file directly to the browser
            $mpdf->Output('SPPD Depan.pdf', 'I');

            }
            else{

            $data['pageTitle'] = 'Cetak SPPD Luar Kota';
            $data['sppd_ks'] = $this->Model_cetak->get_sppd_on_surat($id)->result();
            $html = $this->load->view('cetak_sppd_ks', $data, TRUE);

          
            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [220, 330]]);

            $mpdf->defaultheaderline = 0;
            // $mpdf->SetHeader('
            //     <div style="text-align: left; font-weight: bold; font-size: 12pt;">
            //     BALAI BESAR PENGAWAS OBAT DAN MAKANAN<br> DI PEKANBARU
            //     </div>');

                    // Write some HTML code:
            $mpdf->WriteHTML($html);

                    // Output a PDF file directly to the browser
            $mpdf->Output('SPPD Depan.pdf', 'I');
            }

          
    }

    // CETAK COVER BELAKANG SURAT TUGAS
    public function cetak_belakang($id = null)
    {   
        $sppd_belakang = $this->Model_cetak->list_data_sppd_belakang(array('id_surat_tugas' => $id))->row();
     
        $data['pageTitle'] = 'SPPD Belakang'; 
        $data['sppd_belakang'] =  $sppd_belakang;  
        // $data['sppd'] =  $this->Model_cetak->get_sppd_pegawai($id);
        $html = $this->load->view('cetak_sppd_belakang', $data, TRUE);

      
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [220, 330]]);

        // $mpdf->defaultheaderline = 0;
        // $mpdf->SetHeader('
        //   <div style="text-align: left; font-weight: bold; font-size: 12pt;">
        //   BALAI BESAR PENGAWAS OBAT DAN MAKANAN<br> DI PEKANBARU
        //   </div>');

              // Write some HTML code:
        $mpdf->WriteHTML($html);
        
        $mpdf->SetTitle('SPPD belakang Surat Tugas');
              // Output a PDF file directly to the browser
        $mpdf->Output('SPPD Belakang.pdf', 'I');

    }
   
   public function word($id = null){

    $surat = $this->Model_cetak->list_data_by_surat(array('id_surat_tugas' => $id))->row();

        $menimbang = $this->db->get('menimbang')->result();
        $dasar = $this->db->get('dasar')->result();
        

        $data['pageTitle'] = 'Cetak Surat Tugas';
        $data['pegawai'] = $this->Model_cetak->list_pegawai_by_surat($id);    
        // $data['config'] = $config;
        $data['surat'] = $surat;
        $data['menimbang'] = $menimbang;
        $data['dasar'] = $dasar;
        $data['pageContent'] = $this->load->view('cetak_st_word', $data, TRUE);

        $this->load->view('template/layout', $data);

   }

    


}