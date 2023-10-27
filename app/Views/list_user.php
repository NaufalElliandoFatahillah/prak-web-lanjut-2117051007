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
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($user as $u) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $u['nama']; ?></td>
                        <td><?= $u['npm']; ?></td>
                        <td><?= $u['nama_kelas']; ?></td>
                        <td class="d-flex">
                            <a class="btn btn-primary mx-1" href="<?= base_url('user/' . $u['id']) ?>">Detail</a>
                            <a class="btn btn-warning mx-1" href="<?= base_url('user/' . $u['id'].'/edit') ?>">Edit</a>
                            <form action="<?= base_url('user/delete/' . $u['id']) ?>" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <?= csrf_field() ?>
                            <button class="btn btn-danger mx-1" type="submit">Delete</button>
                        </form>
                        </td>
                    </tr>
                    <!-- Modal for Delete Confirmation -->
                    <div class="modal fade" id="deleteModal<?= $u['npm']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this user?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <a href="/user/delete/<?= $u['npm']; ?>" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>