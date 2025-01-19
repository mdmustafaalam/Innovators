
<?php $page='home'; require './components/head.php'?>
    <title>Otp Verification</title>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
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
    <div class="text-center mb-4">
      <h1>Reset Your Password</h1>
      <p class="text-muted">Enter your email, OTP, and new password to reset your account password.</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center">Password Reset Form</div>
          <div class="card-body">
            <form id="resetPasswordForm">
              <div class="form-group mb-3">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
              </div>
              <div class="form-group mb-3">
                <label for="otp">OTP</label>
                <input type="text" class="form-control" id="otp" placeholder="Enter the OTP" required>
              </div>
              <div class="form-group mb-3">
                <label for="newPassword">New Password</label>
                <input type="password" class="form-control" id="newPassword" placeholder="Enter your new password" required>
              </div>
              <div id="message" class="mb-3"></div>
              <button type="submit" class="btn btn-primary w-100">Reset Password</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


<script>
  document.getElementById("resetPasswordForm").addEventListener("submit", async (event) => {
    event.preventDefault();

    const email = document.getElementById("email").value.trim();
    const otp = document.getElementById("otp").value.trim();
    const newPassword = document.getElementById("newPassword").value.trim();
    const messageDiv = document.getElementById("message");

    try {
        // Clear previous messages
        messageDiv.innerHTML = "";
        messageDiv.classList.remove("text-danger", "text-success");

        // Check if any field is empty
        if (!email || !otp || !newPassword) {
            throw new Error("Email, OTP, and new password are required.");
        }

        // Send request to backend API for OTP verification and password reset
        const response = await fetch("http://localhost:8080/api/v1/users/verify-otp", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({ email, otp, newPassword }),
        });

        const data = await response.json();

        if (!response.ok) {
            throw new Error(data.message || "Something went wrong");
        }

        // Display success message
        messageDiv.classList.add("text-success");
        messageDiv.innerHTML = "Password reset successfully! You will be redirected to the login page.";

        // Redirect to login page after 2 seconds
        setTimeout(() => {
            window.location.href = "./login.php"; // Adjust the URL to your login page path
        }, 2000); // Delay the redirect for 2 seconds to show the success message
    } catch (error) {
        // Display error message
        messageDiv.classList.add("text-danger");
        messageDiv.innerHTML = error.message || "An error occurred while processing your request.";
    }
});

</script>


    <!-- Pricing End -->


    <!-- Footer Start -->
    
    
    <?php require './components/footer.php'?>
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>

    
    <?php require './components/scripts.php'?>
</body>

</html>