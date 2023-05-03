<?php
class Matakuliah extends CI_Controller
{

    public function index()
    {

        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[1]|max_length[5]', array(
            'required' => '%s harus diisi.',
            'min_length' => '%s  minimal 1', 'max_length' => '%s maksimal berjumlah 5'
        ));
        $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|alpha', array('required' => '%s harus diisi', 'alpha' => '%s tidak tersedia saat ini'));
        $this->form_validation->set_rules('sks', 'SKS', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('view-form-matakuliah');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')

            ];
            $this->load->view('view-data-matakuliah', $data);
        }
    }
}