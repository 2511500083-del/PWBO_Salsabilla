<?php

class Pengembalian extends Controller
{
    // Menampilkan semua data pengembalian buku
    public function index()
    {
        $data['judul'] = 'Data Pengembalian Buku';
        $data['pengembalian'] = $this->model('Pengembalian_model')
                                     ->getAllPengembalian();

        $this->view('templates/header', $data);
        $this->view('pengembalian/index', $data);
        $this->view('templates/footer');
    }

    // Menampilkan detail pengembalian buku
    public function detail($id)
    {
        $data['judul'] = 'Detail Pengembalian Buku';
        $data['pengembalian'] = $this->model('Pengembalian_model')
                                     ->getPengembalianById($id);

        $this->view('templates/header', $data);
        $this->view('pengembalian/detail', $data);
        $this->view('templates/footer');
    }

    // Menambahkan data pengembalian buku
    public function tambah()
    {
        if (
            $this->model('Pengembalian_model')
                 ->tambahDataPengembalian($_POST) > 0
        ) {
            Flasher::setFlash(
                'berhasil',
                'ditambahkan',
                'success'
            );
        } else {
            Flasher::setFlash(
                'gagal',
                'ditambahkan',
                'danger'
            );
        }

        header('Location: ' . BASEURL . '/pengembalian');
        exit;
    }

    // Menghapus data pengembalian buku
    public function hapus($id)
    {
        if (
            $this->model('Pengembalian_model')
                 ->hapusDataPengembalian($id) > 0
        ) {
            Flasher::setFlash(
                'berhasil',
                'dihapus',
                'success'
            );
        } else {
            Flasher::setFlash(
                'gagal',
                'dihapus',
                'danger'
            );
        }

        header('Location: ' . BASEURL . '/pengembalian');
        exit;
    }
}
?>