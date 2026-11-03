
<div class="container mt-4">
    <div class="card" style="width: 18rem;">
        <div class="card-body">

            <h5 class="card-title">
                <?= htmlspecialchars($data['pengembalian']['Kd_Kembali083']); ?>
            </h5>

            <h6 class="card-subtitle mb-2 text-muted">
                NIM:
                <?= htmlspecialchars($data['pengembalian']['NimMhs083']); ?>
            </h6>

            <p class="card-text">
                Nama Mahasiswa:
                <?= htmlspecialchars($data['pengembalian']['NmMhs083']); ?>
            </p>

            <p class="card-text">
                Nama Buku:
                <?= htmlspecialchars($data['pengembalian']['NmBuku083']); ?>
            </p>

            <p class="card-text">
                Jumlah Buku:
                <?= htmlspecialchars($data['pengembalian']['JumBuku083']); ?>
            </p>

            <p class="card-text">
                Tanggal Kembali:
                <?= htmlspecialchars($data['pengembalian']['TglKembali083']); ?>
            </p>

            <p class="card-text">
                Denda:
                <?= htmlspecialchars($data['pengembalian']['Denda083']); ?>
            </p>

            <a href="<?= BASEURL; ?>/pengembalian"
               class="card-link">
                Kembali
            </a>

        </div>
    </div>
</div>
