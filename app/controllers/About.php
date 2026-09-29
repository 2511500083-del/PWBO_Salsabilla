<?php

class About extends Controller {
    public function index($nama = 'Edward', $pekerjaan = 'Pelawak')
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'Home';
        $this->view('templates/header');
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'Home';
        $this->view('templates/header');
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
?>