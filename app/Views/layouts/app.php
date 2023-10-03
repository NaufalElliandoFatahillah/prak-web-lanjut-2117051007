<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="<?=base_url("assets/css/mystyle.css")?>" rel="stylesheet" >
    <link href="<?=base_url("assets/css/bootstrap.min.css")?>" rel="stylesheet" >
  </head>
  <body style="background-color: #FFEBCD;">
    <div class="container">
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