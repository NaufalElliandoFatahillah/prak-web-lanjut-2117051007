<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #728FCE;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .profile-card {
            background-color: #2F539B;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            color: #fff;
        }

        .profile-image {
            border-radius: 50%;
            border: 4px solid #fff;
            width: 200px;
            height: 200px;
            margin: 0 auto 20px;
            display: block;
        }

        .profile-name {
            font-size: 32px;
            font-weight: bold;
        }

        .profile-info {
            margin-top: 20px;
        }

        .profile-info p {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .profile-label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-card">
            <img src="<?=base_url();?>image/ppcisco.jpeg" class="rounded-circle profile-image" alt="Profile Image">
            <h1 class="profile-name"><?=$nama?></h1>
            <div class="profile-info">
                <p class="profile-label">NPM:</p>
                <p><?=$npm?></p>
                <p class="profile-label">Kelas:</p>
                <p><?=$kelas?></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
