<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="container" style="width:50vw;">
<main class="form-signin w-100 m-auto">
  <form method="POST" action="<?= base_url('/user/' . $user['id']) ?>" enctype="multipart/form-data">
    <h1 class="h3 mt-1 mb-3 fw-normal">Edit Absensi</h1>
    <div class="form-floating">
      <input type="text" class="form-control mt-2 <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Nama" name="nama" value="<?= $user['nama'] ?>">
      <label for="floatingName">Nama</label>
    </div>
    
    <div class="form-floating">
      <input type="number" class="form-control mt-2 <?= session('validation') ? 'is-invalid' : '' ?>" id="floatingNpm" placeholder="NPM" name="npm" value="<?= $user['npm'] ?>">
      <label for="floatingNpm">NPM</label>
    </div>
    <div class="form-floating">
      <select class="form-select mt-2" aria-label="Default select example" name="kelas">
        <option value="" selected disabled>Pilih Kelas</option>
        <?php
        foreach ($kelas as $item) {
        ?>
          <option value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : '' ?>><?= $item['nama_kelas'] ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-floating">
      <div class="foto py-3">
        <img src="<?= $user['foto'] ?? 'https://avatars.githubusercontent.com/u/34159640?v=4' ?>" alt="" width="200" height="200">
      </div>
      <div class="">
        <label for="formFileSm" class="form-label">Foto</label>
        <input class="form-control form-control-sm" id="formFileSm" type="file" name="foto">
      </div>
    </div>
    <input type="hidden" name="_method" value="PUT">
    <?= csrf_field() ?>

    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Insert it</button>
  </form>
</main>
        </div>
<?= $this->endSection('content') ?>