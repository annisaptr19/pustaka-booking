<?php
class Tokosepatu extends CI_Controller
{
    public function index()
    {

        $this->load->view('view-form-tokosepatu');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('nama','Nama Pembeli','required|min_length[3]',[
            'required' => 'Nama Pembeli Harus Diisi',
            'min_length' => 'Nama Pembeli Terlalu Pendek'
        ]);
        $this->form_validation->set_rules('nohp','Nomor Handphone','required|min_length[10]',[
            'required' => 'Nomor Handphone Harus Diisi',
            'min_length' => 'Nomor Handphone Terlalu Pendek'
        ]);
        if ($this->form_validation->run() != true){
            $this->load->view('view-form-tokosepatu');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nohp' => $this->input->post('nohp'),
                'merk' => $this->input->post('merk'),
                'size' => $this->input->post('size'),
                'harga' => $this->input->post('harga')
            ];

            if ($this->input->post('merk') == 'Nike') {
                $data['harga'] = 375000;
            } elseif ($this->input->post('merk') == 'Adidas') {
                $data['harga'] = 300000;
            } elseif ($this->input->post('merk') == 'Kickers') {
                $data['harga'] = 250000;
            } elseif ($this->input->post('merk') == 'Eiger') {
                $data['harga'] = 275000;
            } elseif ($this->input->post('merk') == 'Bucherri') {
                $data['harga'] = 400000;
            }

            $this->load->view('view-data-tokosepatu', $data);
        }
    }
}