<?php $page = 'home';
require './components/head.php' ?>
<title>Login</title>

<style>
    #hero h1 {
        margin: 0;
        font-size: 48px;
        font-weight: 700;
        line-height: 56px;
        color: white;
    }

    #hero h2 {
        color: #ffe69b;
        margin: 10px 0 30px 0;
        font-size: 24px;
    }

    hr {
        margin: .5rem 0 !important;
    }

    .card {
        height: 100%;
    }

    #profile_data .row .col:first-child {
        font-weight: 500;
    }

    #profile_data .row {
        background: #fffce5;
        margin: 8px 0;
        padding: 8px;
        border-radius: 8px;
    }


    .card {
        margin-bottom: 20px;
    }

    .card-body {
        padding: 20px;
    }

    .card-body h6 {
        margin-top: 0;
        margin-bottom: 20px;
    }
</style>

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


    <section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row" id="profile_data">
            <div class="col-lg-4 ">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img id="avatar" src="" alt="avatar" class="profile-image mb-3">
                        <h5 id="userName" class="profile-name"></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 ">
                <div class="card mb-4">
                    <div class="card-body profile-card-body">
                        <div class="row">
                            <div class="col">
                                <p class="mb-0">Name</p>
                            </div>
                            <div class="col">
                                <p class="text-muted mb-0" id="fullName"></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <p class="mb-0">Gender</p>
                            </div>
                            <div class="col">
                                <p class="text-muted mb-0" id="gender"></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col">
                                <p class="text-muted mb-0" id="email"></p>
                            </div>
                        </div>

                       
                        <button id="logoutButton" class="btn btn-danger">Logout</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-2">
                <div class="card mb-4">
                    <div class="card-body profile-card-body">
                        <div class="row">
                            <div class="col">
                                <p class="mb-0">Aadhaar Number</p>
                            </div>
                            <div class="col">
                                <p class="text-muted mb-0" id="aadhaarNumber"></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <p class="mb-0">Village</p>
                            </div>
                            <div class="col">
                                <p class="text-muted mb-0" id="village"></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <p class="mb-0">City</p>
                            </div>
                            <div class="col">
                                <p class="text-muted mb-0" id="city"></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <p class="mb-0">State</p>
                            </div>
                            <div class="col">
                                <p class="text-muted mb-0" id="state"></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <p class="mb-0">Pin Code</p>
                            </div>
                            <div class="col">
                                <p class="text-muted mb-0" id="pinCode"></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <p class="mb-0">Country</p>
                            </div>
                            <div class="col">
                                <p class="text-muted mb-0" id="country"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
       const userData = JSON.parse(localStorage.getItem('user'));

// Check if data exists
if (userData) {
    // Populate the profile page with the retrieved user data
    document.getElementById('userName').innerText = userData.name;
    document.getElementById('fullName').innerText = userData.name;
    document.getElementById('gender').innerText = userData.gender;
    document.getElementById('email').innerText = userData.email;
   
    document.getElementById('aadhaarNumber').innerText = userData.aadhaarId;
    document.getElementById('village').innerText = userData.address.village;
    document.getElementById('city').innerText = userData.address.city;
    document.getElementById('state').innerText = userData.address.state;
    document.getElementById('pinCode').innerText = userData.address.pinCode;
    document.getElementById('country').innerText = userData.address.country;
    document.getElementById('avatar').src = userData.avatar;
} else {
    console.error("User data not found in localStorage.");
}


const logoutButton = document.getElementById('logoutButton');

// Add event listener to handle the logout action
logoutButton.addEventListener('click', function() {
    // Clear the user data from localStorage
    localStorage.removeItem('user');
    localStorage.removeItem('accessToken');
    
    
    
    // Redirect the user to the login page (or any page you want)
    window.location.href = "./index.php"; 
});
</script>

    <?php require './components/footer.php' ?>
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>

    <?php require './components/scripts.php' ?>
</body>

</html>