
<!-- <?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get the email from the query string (if passed)
$email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';

// Debugging: Check if the email is missing or incorrect
if (!$email) {
    echo "Email parameter missing or invalid!";
}
?> -->

<?php $page = 'home'; require './components/head.php'; ?>
<title>Forgot Password</title>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <?php require './components/top_nav.php'; ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?php require './components/navbar.php'; ?>
    <!-- Navbar End -->

    <!-- Forgot Password Section Start -->
    <div class="container mt-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h1 class="display-5 w-50 mx-auto">Forgot Password</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Reset Password</div>
                    <div class="card-body">
                        <form id="forgotPasswordForm">
                            <div class="form-group mb-3">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Send OTP</button>
                        </form>
                        <div id="message" class="mt-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Forgot Password Section End -->

    <!-- JS Script to handle form submission -->
    <script>
        document.getElementById("forgotPasswordForm").addEventListener("submit", async (event) => {
            event.preventDefault();
            const email = document.getElementById("email").value.trim(); // Trim to avoid extra spaces
            const messageDiv = document.getElementById("message");

            try {
                // Clear previous messages
                messageDiv.innerHTML = "";
                messageDiv.classList.remove("text-danger", "text-success");

                // Send request to backend API
                const response = await fetch("http://localhost:8080/api/v1/users/forgot-password", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({ email }),
                });

                const data = await response.json();

                if (!response.ok) {
                    throw new Error(data.message || "Something went wrong");
                }

                // Redirect to OTP verification page
                messageDiv.classList.add("text-success");
                messageDiv.innerHTML = "OTP sent to your email. Redirecting to the OTP verification page...";
                setTimeout(() => {
                    window.location.href = `./verify-otp.php?email=${encodeURIComponent(email)}`;

                }, 2000); // Redirect after 2 seconds to show the success message
            } catch (error) {
                // Display error message
                messageDiv.classList.add("text-danger");
                messageDiv.innerHTML = error.message || "An error occurred while processing your request.";
            }
        });
    </script>


    <!-- Pricing End -->

    <?php require './components/footer.php' ?>
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>

    <?php require './components/scripts.php' ?>
</body>

</html>