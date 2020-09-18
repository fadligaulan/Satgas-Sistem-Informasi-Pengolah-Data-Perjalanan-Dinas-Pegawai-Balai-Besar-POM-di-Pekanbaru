<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
    public function cekLogin()
    {
        if (!$this->session->userdata('username')) {
                redirect('auth/login');
        }
    }

    public function getUserData()
    {
        // Ambil semua data session
        $userData = $this->session->userdata();

        
    
        // Return userdata
        return $userData;

    }
    
    public function isAdmin()
    {
        // Mengambil data session
        $userData = $this->getUserData();
    
        // Jika level user tidak sesuai
        // maka redirect ke halaman 404
        if ($userData['level'] !== '4') show_404();
    }

    public function isKepala()
    {
        // Mengambil data session
        $userData = $this->getUserData();
    
        // Jika level user tidak sesuai
        // maka redirect ke halaman 404
        if ($userData['level'] !== '3') show_404();
    }

    public function isPpk()
    {
        // Mengambil data session
        $userData = $this->getUserData();
    
        // Jika level user tidak sesuai
        // maka redirect ke halaman 404
        if ($userData['level'] !== '2') show_404();
    }

    public function isBidang()
    {
        // Mengambil data session
        $userData = $this->getUserData();
    
        // Jika level user tidak sesuai
        // maka redirect ke halaman 404
        if ($userData['level'] !== '1') show_404();
    }    

    // public function isOpeOrOpd()
    // {
    //     // Mengambil data session
    //     $userData = $this->getUserData();
    
    //     // Jika level user tidak sesuai
    //     // maka redirect ke halaman 404
    //     if ($userData['level'] === '7' || $userData['level'] === '11')
    //     {

    //     }
    //     else
    //     {
    //         show_404();
    //     }
    // }
}