<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Input <?php echo ucwords($calculation); ?> <?php echo ucwords(str_replace('_', ' ', $shape)); ?></h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="<?php echo base_url('main/calculate'); ?>" method="post">
                    <input type="hidden" name="shape" value="<?php echo $shape; ?>">
                    <input type="hidden" name="calculation" value="<?php echo $calculation; ?>">
                    
                    <?php if ($shape == 'lingkaran'): ?>
                        <div class="form-group">
                            <label for="radius">Radius:</label>
                            <input type="number" class="form-control" id="radius" name="radius" required step="0.01">
                        </div>
                    <?php elseif ($shape == 'persegi_panjang'): ?>
                        <div class="form-group">
                            <label for="panjang">Panjang:</label>
                            <input type="number" class="form-control" id="panjang" name="panjang" required step="0.01">
                        </div>
                        <div class="form-group">
                            <label for="lebar">Lebar:</label>
                            <input type="number" class="form-control" id="lebar" name="lebar" required step="0.01">
                        </div>
                    <?php elseif ($shape == 'sama_kaki' || $shape == 'siku_siku'): ?>
                        <div class="form-group">
                            <label for="alas">Alas:</label>
                            <input type="number" class="form-control" id="alas" name="alas" required step="0.01">
                        </div>
                        <div class="form-group">
                            <label for="tinggi">Tinggi:</label>
                            <input type="number" class="form-control" id="tinggi" name="tinggi" required step="0.01">
                        </div>
                    <?php elseif ($shape == 'sama_sisi'): ?>
                        <div class="form-group">
                            <label for="sisi">Sisi:</label>
                            <input type="number" class="form-control" id="sisi" name="sisi" required step="0.01">
                        </div>
                    <?php endif; ?>
                    
                    <button type="submit" class="btn btn-primary">Hitung</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>