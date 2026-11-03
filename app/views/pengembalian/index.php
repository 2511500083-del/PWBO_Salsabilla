
<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <button type="button"
                    class="btn btn-primary tombolTambahData"
                    data-toggle="modal"
                    data-target="#formModal">
                Tambah Data Pengembalian
            </button>

            <h3>Daftar Pengembalian Buku</h3>

            <ul class="list-group">
                <?php foreach ($data['pengembalian'] as $p) : ?>
                    <li class="list-group-item">
                        <div class="row align-items-center">

                            <!-- Kode Pengembalian -->
                            <div class="col-6">
                                <?= htmlspecialchars($p['Kd_Kembali083']); ?>
                            </div>

                            <!-- Tombol Hapus -->
                            <div class="col-3 text-center">
                                <a href="<?= BASEURL; ?>/pengembalian/hapus/<?= urlencode($p['Kd_Kembali083']); ?>"
                                   class="badge badge-danger"
                                   onclick="return confirm('Yakin ingin menghapus data pengembalian ini?');">
                                    Hapus
                                </a>
                            </div>

                            <!-- Tombol Detail -->
                            <div class="col-3 text-right">
                                <a href="<?= BASEURL; ?>/pengembalian/detail/<?= urlencode($p['Kd_Kembali083']); ?>"
                                   class="badge badge-primary">
                                    Detail
                                </a>
                            </div>

                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal Tambah Data Pengembalian -->
<div class="modal fade" id="formModal" tabindex="-1"
     role="dialog" aria-labelledby="judulModal" aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">
                    Tambah Data Pengembalian
                </h5>

                <button type="button" class="close"
                        data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="<?= BASEURL; ?>/pengembalian/tambah" method="post">

                    <div class="form-group">
                        <label for="kd_kembali">Kode Pengembalian</label>
                        <input type="text" class="form-control"
                               id="kd_kembali" name="kd_kembali" required>
                    </div>

                    <div class="form-group">
                        <label for="nim_mhs">NIM Mahasiswa</label>
                        <input type="text" class="form-control"
                               id="nim_mhs" name="nim_mhs" required>
                    </div>

                    <div class="form-group">
                        <label for="nm_mhs">Nama Mahasiswa</label>
                        <input type="text" class="form-control"
                               id="nm_mhs" name="nm_mhs" required>
                    </div>

                    <div class="form-group">
                        <label for="nm_buku">Nama Buku</label>
                        <input type="text" class="form-control"
                               id="nm_buku" name="nm_buku" required>
                    </div>

                    <div class="form-group">
                        <label for="jum_buku">Jumlah Buku</label>
                        <input type="number" class="form-control"
                               id="jum_buku" name="jum_buku"
                               min="1" required>
                    </div>

                    <div class="form-group">
                        <label for="tgl_kembali">Tanggal Kembali</label>
                        <input type="date" class="form-control"
                               id="tgl_kembali" name="tgl_kembali" required>
                    </div>

                    <div class="form-group">
                        <label for="denda">Denda</label>
                        <input type="number" class="form-control"
                               id="denda" name="denda"
                               min="0" required>
                    </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">
                    Close
                </button>

                <button type="submit" class="btn btn-primary">
                    Tambah Data
                </button>
            </div>

                </form>
        </div>
    </div>
</div>
