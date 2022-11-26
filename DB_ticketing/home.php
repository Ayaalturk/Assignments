<?php
include "./header.php";
?>


<div class="row my-5 py-5">

    <?php foreach (get_seats() as $seat) :
       
        if ($seat->is_available) { ?>
            <a href="./seat_reservation.php?id=<?= $seat->id ?>" class="ts-seat col-2 m-3 d-flex justify-content-center align-items-center <?= $seat->is_available ? "available_seat" : 'unavailable_seat' ?>">
                <?= $seat->seat_num ?>
            </a>
            <?php
        } else {
          
            if ($seat->user_id == $_SESSION['user']['user_id']) {
              
            ?>
                <a href="./seat_reservation.php?id=<?= $seat->id ?>" class="ts-seat col-2 m-3 d-flex justify-content-center align-items-center <?= $seat->is_available ? "available_seat" : 'unavailable_seat' ?>">
                    <?= $seat->seat_num ?>
                </a>
            <?php
            } else {
                
            ?>
                <div class="ts-seat col-2 m-3 d-flex justify-content-center align-items-center <?= $seat->is_available ? "available_seat" : 'unavailable_seat' ?>">
                    <?= $seat->seat_num ?>
                </div>
    <?php
            }
        }
    endforeach; ?>


</div>


<?php include "./footer.php" ?>