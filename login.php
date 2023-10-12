<?php include './layout/header.php'; ?>
<div class="container">
    <h2 class="mt-4">Login</h2>
    <form action="<?= $base_url?>logic/login.php" method="post" class="mt-3">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" name="username" id="username" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <!-- Signup link pointing to signin.php -->
    <div class="mt-3">
        Don't have an account? <a href="<?= $base_url?>signin.php">Sign up</a>
    </div>
</div>
