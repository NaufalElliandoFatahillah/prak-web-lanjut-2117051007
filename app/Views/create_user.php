<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="<?=base_url("assets/css/bootstrap.min.css")?>" rel="stylesheet">
    
    <style>
      body {
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;
      }

      .container {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        margin: 0 auto;
        margin-top: 30px;
      }

      .form-group {
        margin-bottom: 20px;
      }

      label {
        font-weight: bold;
        color: #333;
      }

      input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      button.btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
      }

      button.btn-primary:hover {
        background-color: #0056b3;
      }

      .container h1 {
        text-align: center;
        color: #007bff;
      }

      .container p {
        text-align: center;
        margin-top: 20px;
        color: #555;
      }

      input[type="text"] {
        background-color: #f5f5f5;
        color: #333;
        border: 1px solid #007bff;
      }

      input[type="text"]:focus {
        background-color: #fff;
        border: 1px solid #007bff;
      }

      button.btn-primary {
        background-color: #98AFC7;
      }

      button.btn-primary:hover {
        background-color: #778899;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Form Absen</h1>
      <form action="<?=base_url('/user/store')?>" method="POST">
        <div class="form-group">
          <label for="nama">Nama :</label>
          <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
          <label for="npm">NPM :</label>
          <input type="text" class="form-control" name="npm" placeholder="Masukkan NPM">
        </div>
        <div class="form-group">
          <label for="kelas">Kelas :</label>
          <select class="form-control" name="kelas" id="kelas">
            <?php 
            foreach ($kelas as $item){
              ?>
                  <option value="<?= $item['id'] ?>">
                  <?= $item['nama_kelas'] ?>
                  </option>
                <?php
            }
            ?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <p>Silakan isi formulir absen di atas</p>
    </div>
    <script src="<?=base_url("assets/js/bootstrap.bundle.min.js")?>"></script>
  </body>
</html>
