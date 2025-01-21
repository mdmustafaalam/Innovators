<?php $page = 'home';
require './components/head.php' ?>
<title>Login</title>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->
    <!-- Topbar Start -->
    <?php require './components/top_nav.php' ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?php require './components/navbar.php' ?>





    <!-- pricing Start -->
    <div class="container mt-5">
    <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
        <h1 class="display-5 w-50 mx-auto">Login</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Login Form</div>
                <div class="card-body">
                    <form id = "loginForm">
                        <div class="form-group mb-3">
                            <label for="email">Username</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>

                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password">
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <a href="./forgot-password.php" class="text-decoration-none text-primary">Forgot Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Pricing End -->

    <script>
    document.getElementById("loginForm").addEventListener("submit", async (e) => {
    e.preventDefault();  // Prevent default form submission

    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    const loginButton = e.target.querySelector("button[type='submit']");
    loginButton.disabled = true; // Disable button to prevent multiple submissions

    try {
        // Send a POST request to the login endpoint
        const response = await fetch("http://localhost:8080/api/v1/users/login", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({ email, password }),
            // Remove credentials: 'include' since we're not using cookies
        });

        const result = await response.json();

        if (response.ok) {
            // Store user info and accessToken in localStorage
            localStorage.setItem("user", JSON.stringify(result.data.user));
            localStorage.setItem("accessToken", result.data.accessToken);  // Store accessToken

            // Redirect to a protected route or home page
            window.location.href = "./profile.php";  // Adjust as needed
        } else {
            // Show the error message to the user
            alert(result.message || "Login failed. Please try again.");
        }
    } catch (error) {
        alert("An error occurred. Please try again.");
        console.error("Error during login:", error);
    } finally {
        loginButton.disabled = false; // Re-enable the login button
    }
});


    </script>




    </script>

    <?php require './components/footer.php' ?>
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>

    <?php require './components/scripts.php' ?>
</body>

</html>