 <?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>
<div class="container mt-5">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle mr-2"></i>
            <strong><?= session()->getFlashdata('pesan'); ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <h1 class="text-center mb-4">Data Absensi Mahasiswa</h1>
    <a href="<?= base_url('/user/create'); ?>" class="btn btn-primary mb-3"><i class="fas fa-user-plus mr-2"></i>Create User</a>
    <div class="table-responsive">
        <table class="table rounded-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kelas</th>
                    <th>Kapasitas Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
        
                <?php $no = 1; ?>
                <?php foreach ($kelas as $kelas) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $kelas['nama_kelas']; ?></td>
                        <td><?= $kelas['kapasitas']; ?></td>
                        <td class="d-flex flex-row ">
                            <a class="btn btn-primary mx-1" href="<?= base_url('kelas/' . $kelas['id']) ?>">Detail</a>
                            <a class="btn btn-warning mx-1" href="<?= base_url('kelas/' . $kelas['id'] . '/edit') ?>">Edit</a>
                            <form action="<?= base_url('kelas/' . $kelas['id']) ?>" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <?= csrf_field() ?>
                                <button class="btn btn-danger mx-1">
                                <i class="fas fa-trash text-dark me-2" aria-hidden="true"></i>
                                Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    <!-- Modal for Delete Confirmation -->

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>