<?php
include "./header.php";

$animal = (object) $_GET;


?>

<div id="animal-template" class="row py-5 my-5">
    
    <div class="col">
        <img src="<?= $animal->image_link ?>" class="img-fluid" alt="<?= $animal->name ?>">
    </div>
    <div class="col">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Description</th>
                    <th scope="col">Data</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($_GET as $key => $Value): ?>
                <tr>
                    <td><?=$key?></td>
                    <td><?=$Value ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</div>

<?php include "./footer.php" ?>