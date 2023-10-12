<?php include './layout/header.php'; ?>
<div class="container">
    <h2 class="mt-4">Signup Form</h2>
    <form action="<?= $base_url?>logic/signup.php" method="post" class="mt-3">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" name="username" id="username" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>

        <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
    <div class="mt-3">
        Already have an account? <a href="<?= $base_url?>login.php">Login</a>
    </div>
</div>
