<?php
require './header.php'; ?>

<div class="container my-5 py-5">
    <h1 class="text-center">Countact Us</h1>
    <hr class="w-50 m-auto mb-5">

    <div class="my-5 d-flex justify-content-center align-items-center">
        <?php if (!empty($_SESSION) && isset($_SESSION['error'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $_SESSION['error'] ?>
            </div>
        <?php endif; ?>
    </div>

    <form class="w-50 m-auto" method="POST" action="./contact_data.php">
        <div class="mb-3">
            <label for="user-name" class="form-label">User Name</label>
            <input type="text" class="form-control" id="user-name" name="user_name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="course-description" name="description" required></textarea>
        </div>
       
        <button type="submit" class="btn btn-primary mt-3">Contact</button>
    </form>
</div>

<?php require './footer.php'; ?>