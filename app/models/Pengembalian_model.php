
<?php

class Pengembalian_model
{
    private $table = '2511500083_pengembalian';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    // Mengambil semua data pengembalian
    public function getAllPengembalian()
    {
        $this->db->query("SELECT * FROM " . $this->table);

        return $this->db->resultSet();
    }

    // Mengambil data pengembalian berdasarkan kode
    public function getPengembalianById($id)
    {
        $this->db->query(
            "SELECT * FROM " . $this->table . " 
             WHERE Kd_Kembali083 = :id"
        );

        $this->db->bind(':id', $id);

        return $this->db->single();
    }

    // Menambahkan data pengembalian
    public function tambahDataPengembalian($data)
    {
        $query = "INSERT INTO $this->table
                    (Kd_Kembali083, NimMhs083, NmMhs083, 
                     NmBuku083, JumBuku083, TglKembali083, Denda083)
                  VALUES
                    (:kd_kembali, :nim_mhs, :nm_mhs, 
                     :nm_buku, :jum_buku, :tgl_kembali, :denda)";

        $this->db->query($query);

        $this->db->bind(':kd_kembali', $data['kd_kembali']);
        $this->db->bind(':nim_mhs', $data['nim_mhs']);
        $this->db->bind(':nm_mhs', $data['nm_mhs']);
        $this->db->bind(':nm_buku', $data['nm_buku']);
        $this->db->bind(':jum_buku', $data['jum_buku']);
        $this->db->bind(':tgl_kembali', $data['tgl_kembali']);
        $this->db->bind(':denda', $data['denda']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // Menghapus data pengembalian
    public function hapusDataPengembalian($id)
    {
        $query = "DELETE FROM $this->table 
                  WHERE Kd_Kembali083 = :id";

        $this->db->query($query);
        $this->db->bind(':id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
?>
