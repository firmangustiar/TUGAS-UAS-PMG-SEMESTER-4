<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            background: linear-gradient(45deg, #1a2a6c, #b21f1f, #fdbb2d);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
        }
        @keyframes gradientBG {
            0% {background-position: 0% 50%;}
            50% {background-position: 100% 50%;}
            100% {background-position: 0% 50%;}
        }
        .card {
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.1);
            border: none;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }
        .alert {
            background-color: rgba(255, 255, 255, 0.2);
            border: none;
        }
        .btn-primary {
            background-color: #4a69bd;
            border: none;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #1e3799;
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card text-light animate__animated animate__fadeInDown">
            <div class="card-header">
                <h3><i class="fas fa-bell animate__animated animate__swing animate__infinite"></i> Notifikasi</h3>
            </div>
            <div class="card-body">
                <div class="alert alert-info animate__animated animate__pulse">
                    <h4 class="alert-heading">Notifikasi Terkirim!</h4>
                    <p class="animate__animated animate__fadeIn animate__delay-1s"><?= $message; ?></p>
                </div>
                <a href="/dosen" class="btn btn-primary animate__animated animate__bounceIn animate__delay-2s">
                    <i class="fas fa-arrow-left"></i> Kembali ke Data Dosen
                </a>
            </div>
        </div>
    </div>

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>