<?php require_once 'datos.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Cards</title>

</head>
<body>
<h1 class="text-center mb-5">Cursos</h1>
<div class="container">
<div class="row g-4">

<?php 
$cursos = datos_productos();
    foreach ($cursos as $curso) {
?>

<div class="col-6">
    <div class="card mb-3 h-100" >
        <div class="row g-0">
            <div class="col-md-4 d-flex align-item-center h-100">
            <img src="<?= $curso["imagen"]?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?= $curso["nombre"]?></h5>
                <p class="card-text"><?= $curso["descripción"]?></p>
                <p class="card-text"><small class="text-body-secondary">USD <?= $curso["precio"]?></small></p>
            </div>
            </div>
        </div>
    </div>
</div>

<?php 
}
?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>