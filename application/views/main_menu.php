<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Geometri</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Kalkulator Geometri</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="list-group">
                    <a href="<?php echo base_url('main/shape_menu/lingkaran'); ?>" class="list-group-item list-group-item-action">Lingkaran</a>
                    <a href="<?php echo base_url('main/shape_menu/persegi_panjang'); ?>" class="list-group-item list-group-item-action">Persegi Panjang</a>
                    <a href="<?php echo base_url('main/shape_menu/sama_kaki'); ?>" class="list-group-item list-group-item-action">Segitiga Sama Kaki</a>
                    <a href="<?php echo base_url('main/shape_menu/siku_siku'); ?>" class="list-group-item list-group-item-action">Segitiga Siku-Siku</a>
                    <a href="<?php echo base_url('main/shape_menu/sama_sisi'); ?>" class="list-group-item list-group-item-action">Segitiga Sama Sisi</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>