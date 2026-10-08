<?php
require 'dati.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I migliori film USA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 30px 0;
        }
        .card {
            height: 100%;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        .card img {
            height: 400px;
            object-fit: cover;
        }
        h1 {
            margin-bottom: 40px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Film USA Imperdibili</h1>
        
        <div class="row">
            <?php foreach($film as $f) : ?>
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card">
                        <img src="immagini/<?php echo $f['img']; ?>" class="card-img-top" alt="<?php echo $f['titolo']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $f['titolo']; ?></h5>
                            <p class="card-text text-muted">Anno: <?php echo $f['anno']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
