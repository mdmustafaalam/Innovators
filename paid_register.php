
<?php $page='home'; require './components/head.php'?>
    <title>Register</title>
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
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">User Registration Form</div>
                <div class="card-body">
                    <form id="registrationForm" method="POST" action="/api/v1/user/register">
                        <!-- Full Name -->
                        <div class="form-group mb-3">
                            <label for="fullname">Full Name</label>
                            <input type="text" class="form-control" id="fullname" name="name" placeholder="Enter your full name" required>
                        </div>

                        <!-- Avatar (File Upload) -->
                        <div class="form-group mb-3">
                            <label for="avatar">Avatar</label>
                            <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*">
                        </div>

                        <!-- Gender -->
                        <div class="form-group mb-3">
                            <label for="gender">Gender</label>
                            <select class="form-control" id="gender" name="gender" required>
                                <option value="" disabled selected>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <!-- Email -->
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>

                        <!-- Password -->
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                        </div>

                        <!-- Aadhaar ID -->
                        <div class="form-group mb-3">
        <label for="aadhaarId">Aadhaar ID</label>
        <input type="number" class="form-control" id="aadhaarId" name="aadhaarId" placeholder="Enter your Aadhaar ID" required>
    </div>

                        <!-- Address Fields -->
                        <div class="form-group mb-3">
                            <label for="village">Village</label>
                            <input type="text" class="form-control" id="village" name="address[village]" placeholder="Enter your village">
                        </div>
                        <div class="form-group mb-3">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="address[city]" placeholder="Enter your city">
                        </div>
                        <div class="form-group mb-3">
                            <label for="state">State</label>
                            <input type="text" class="form-control" id="state" name="address[state]" placeholder="Enter your state">
                        </div>
                        <div class="form-group mb-3">
                            <label for="pincode">Pincode</label>
                            <input type="text" class="form-control" id="pincode" name="address[pinCode]" placeholder="Enter your pincode">
                        </div>
                        <div class="form-group mb-3">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" id="country" name="address[country]" placeholder="Enter your country">
                        </div>

                        <!-- Mobile Number -->
                        

                        <!-- Submit Button -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary w-100">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Pricing End -->

    <script>
   // Handle form submission
   document.getElementById("registrationForm").addEventListener("submit", async (e) => {
    e.preventDefault(); // Prevent default form submission

    const form = e.target;
    const formData = new FormData(form);

    try {
        const response = await fetch("http://localhost:8080/api/v1/users/register", {
            method: "POST",
            body: formData,
        });

        const result = await response.json();
        

        if (response.ok) {
            // Success: Handle success response
            alert("User registered successfully!");
            console.log("Success:", result);
            form.reset();
        } else {
            // Handle error response
            if (result.message) {
                // Display the error message from the backend
                alert(result.message);
                console.log( result.message);
            } else {
                // Generic error message
                alert("Registration failed. Please try again.");
            }
            console.error("Error:", result);
        }
    } catch (error) {
        // Handle network or unexpected errors
        alert("An error occurred while connecting to the server. Please try again later.");
        console.log("Error:", error);
    }
});




</script>
    <!-- Footer Start -->
    
    
    <?php require './components/footer.php'?>
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>

    
    <?php require './components/scripts.php'?>
</body>

</html>