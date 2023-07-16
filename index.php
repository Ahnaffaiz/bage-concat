<?php
require 'function.php';

$looping = new Looping();

if(isset($_POST["repeat"])) {
    $result = $looping->looping($_POST["repeat"]);
    $_SESSION["repeat"] = $_POST["repeat"];
    $_SESSION["result"] = $result;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bage Concate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="m-5">
        <form action="index.php" method="POST">
            <div class="row row-cols-lg-auto g-3 align-items-end">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div>
                        <label for="repeat" class="form-label">Jumlah Perulangan</label>
                        <input type="number" class="form-control" id="repeat" placeholder="Masukkan Jumlah Perulangan" name="repeat">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <div class="mx-5">
        <h3>Hasil Looping</h3>
        <h4>Jumlah Perulangan : <?= isset($_SESSION["repeat"]) ? $_SESSION["repeat"] : ""; ?></h4>
        <?php
        if(isset($_SESSION["result"])) {
            foreach ($_SESSION["result"] as $result) {
                echo "<h4>$result</h4>";
            }
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>