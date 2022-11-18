<?php
require './header.php'; 


    $data =json_decode(file_get_contents('./api_data/about_us.json'));
  

?>
     <div class="container my-5 py-5">
        <div class="row">
            <div class="col">
                <!-- <img src="./assets/images/about-us.jpg" alt="about_us"> -->
            </div>
            <?php foreach ($data as $item) : ?>
            <div class="col">
                <h2><?= $item->title ?></h2>
                <p><?= $item->data ?></p>
                
            </div>
            <?php endforeach; ?>
        </div>
    </div> 

<?php require './footer.php'; ?>