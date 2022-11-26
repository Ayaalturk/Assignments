<?php require './header.php'; ?>
<div class="container text-center d-flex justify-content-around align-items-around  my-4">
  <div class="row">
    <form class="w-50" style="margin-left: 9rem;" action="./validation.php" method="POST">
      <div class="row">
        <div class="col-6">
          <label for="first_name" class="form-label my-3">First name</label>
          <input type="text" class="form-control" placeholder="First name" id=first_name name="first_name">
        </div>
        <div class="col-6">
          <label for="last_name" class="form-label my-3">Last name</label>
          <input type="text" class="form-control" placeholder="Last name" id="last_name" name="last_name">
        </div>
        <div class="row">
        <div class="col-6">
          <label for="Summary" class="form-label my-3">Summary</label>
          <input type="text" class="form-control" placeholder="Summary" id="Summary" name="Summary">
        </div>
        <div class="col-6">
          <label for="phone" class="form-label my-3">phone</label>
          <input type="text" class="form-control" placeholder="phone" id="phone" name="phone">
        </div>
        </div>
        <div class="row">
        <div class="col-6">
          <label for="email" class="form-label my-3">email</label>
          <input type="email" class="form-control" placeholder="email" id="email" name="email">
        </div>
        <div class="col-6">
          <label for="city_name" class="form-label my-3">city_name</label>
          <input type="city_name" class="form-control" placeholder="city_name" id="city_name" name="city_name">
        </div>
        </div>
        <div class="row">
        <div class="col-12">
          <label for="skils">skils</label>
          <textarea class="form-control" id="skils" name="skils"></textarea>
        </div>
        </div>
        <div class="row">
        <div class="col-12">
          <label for="education">personel_profile</label>
          <textarea class="form-control" id="personel_profile" name="personel_profile"></textarea>
        </div>
        </div>

        <div class="row">
        <div class="col-12">
          <label for="education">education</label>
          <textarea class="form-control" id="education" name="education"></textarea>
        </div>
        </div>
        <div class="row">
        <div class="col-12">
          <label for="experiences">experiences</label>
          <textarea class="form-control" id="experiences" name="experiences"></textarea>
        </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary my-5">Create</button>

    </form>
  </div>
  <div class="row">
    <div class="col-12">
      <img src="./aseets/img/Capture.PNG" width="100%" height="100%">
    </div>

  </div>
</div>


<!-- <?php require './footer.php'; ?> -->