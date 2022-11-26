<?php require './header.php';
$cv_id = isset($_GET['id']) ? $_GET['id'] : null;
if (empty($cv_id))
    die("you are trying to access directly");

$cvs = json_decode(file_get_contents('./cvs.json'));
$cvs_arr = array_filter($cvs, function ($item) use ($cv_id) {
    return $item->id == $cv_id;
});
$cv = !empty($cvs_arr) ? $cvs_arr[array_key_first($cvs_arr)] : null;

if (empty($cv))
    die("no cv was found");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./aseets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <title></title>
</head>

<body>
<div class="continer w-75 m-auto my-5">
    <header class="border">
        <div class="first">
            <!-- <img id="img1" src="img/aya.jpeg" width="60vh" height="60vh"> -->
            <h1><?= $cv->first_name ."  ".$cv->last_name?></h1>
            <h3><?=$cv->Summary?></h3>
        </div>
        <nav class="list">
            <ul class="first">
                <li><?=$cv->email?></li>
                
                
            </ul>
        </nav>
    </header>
    <main class="contant">
        <section class="pading">
            <div>
                <h3>personal Profile</h3>
                <p>
                <?=$cv->personel_profile?>
                </p>
            </div>

        </section>
        <hr>
        <section class="pading">
            <div>
                <h3>experiences</h3>
                <p>
                <?=$cv->experiences?>
                </p>
            </div>

        </section>
        <hr>
        <section class="pading">

            <div>
                <h3>Education </h3>
                <p>
                <?=$cv->education?>
                </p>
                
            </div>
        </section>
        <hr>
        <section class="pading">
            <div>
                <h3>Skils</h3>
                <p>
                <?=$cv->skils?>
                </p>
            </div>
        </section>
    </main>
</div>
<!-- <?php require '../footer.php'; ?> -->

</body>

</html>
