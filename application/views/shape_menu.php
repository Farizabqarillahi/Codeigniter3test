<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Perhitungan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Pilih Perhitungan untuk <?php echo ucwords(str_replace('_', ' ', $shape)); ?></h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="list-group">
                    <a href="<?php echo base_url('main/input_form/'.$shape.'/luas'); ?>" class="list-group-item list-group-item-action">Luas</a>
                    <a href="<?php echo base_url('main/input_form/'.$shape.'/keliling'); ?>" class="list-group-item list-group-item-action">Keliling</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>