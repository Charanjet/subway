<?php include './layout/header.php'; ?>
<div class="container">
        <!-- Header Section -->
        <header class="mt-4">
            <h1>User Profile</h1>
            <!-- Add user's profile picture here -->
            <img src="profile_picture.jpg" alt="Profile Picture" class="img-fluid rounded-circle mt-3" style="max-width: 200px;">
        </header>

        <!-- Personal Info Section -->
        <section class="mt-4">
            <h2>Personal Information</h2>
            <p><strong>Name:</strong> John Doe</p>
            <p><strong>Email:</strong> john.doe@example.com</p>
            <p><strong>Location:</strong> New York City, USA</p>
        </section>

        <!-- About Section -->
        <section class="mt-4">
            <h2>About Me</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel consectetur mauris. Quisque et ipsum vitae tortor maximus laoreet eget et enim.</p>
        </section>

        <!-- Interests Section -->
        <section class="mt-4">
            <h2>Interests</h2>
            <ul>
                <li>Reading</li>
                <li>Hiking</li>
                <li>Photography</li>
            </ul>
        </section>

        <!-- Social Media Links -->
        <section class="mt-4">
            <h2>Social Media</h2>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                </li>
            </ul>
        </section>
    </div>
<?php include './layout/footer.php'; ?>
