<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="<?=base_url("assets/css/mystyle.css")?>" rel="stylesheet" >
    <link href="<?=base_url("assets/css/bootstrap.min.css")?>" rel="stylesheet" >
    <style>
      
      </style>
  </head>
  <body style="background-color: #FFEBCD;">
  <nav class="navbar navbar-expand-lg" style="background:rgb(255,255,255,0.5);">
  <div class="d-flex justify-content-center " style="width:100%;font-weight:bold;font-size:20px;">
    <div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-primary" aria-current="page" href="<?= base_url('/user') ?>">List User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" href="<?= base_url('/kelas') ?>">List Kelas</a>
        </li>
      </ul>
    </div>
  </div>
</div>
</nav>
    <div class="container-fluid" style="background:#FFEBCD">
    <?= $this->renderSection('content') ?>
    </div>
    <script src="<?=base_url("assets/js/bootstrap.bundle.min.js")?>" ></script>
    <script>
        setTimeout(function() {
            document.getElementById('myAlert').style.display = 'none';
        }, 3000); // Menghilangkan alert setelah 2 detik (2000 milidetik)
    </script>
    </body>
</html>