<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Biodata extends CI_Controller
{

    public function biodataku()
    {
        $this->load->view('biodata');
    }

    public function penjumlahan($nilai1, $nilai2)
    {
        $data['nilai1'] = $nilai1;
        $data['nilai2'] = $nilai2;
        $data['hasil'] = $this->Model_aritmatika->penjumlahan($nilai1, $nilai2);
        $this->load->view('view-latihan', $data);
    }
}
