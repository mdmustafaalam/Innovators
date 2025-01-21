<?php
$page = 'service';
require './components/head.php';
?>
<title>Service - Find Your Services</title>
</head>
<style>
    body {
      background-color: #f8f9fa;
    }
    .form-card {
      max-width: 700px;
      margin: auto;
      background: white;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    .form-header {
      background-color: #007bff;
      color: white;
      padding: 15px;
      text-align: center;
      border-radius: 10px 10px 0 0;
    }
    .btn-primary {
      background-color: #007bff;
      border: none;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
    .form-footer {
      text-align: center;
      margin-top: 15px;
    }
  </style>
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
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Page Name</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="./service.php">Services</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Page Name</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <div class="container py-5">
    <div class="form-card">
      <div class="form-header">
        <h4>Add Crop Details</h4>
      </div>
      <form id="cropForm" class="p-3">
        <!-- Farmer ID -->
        

        <!-- Crop Name -->
        <div class="mb-3">
          <label for="cropName" class="form-label">Crop Name</label>
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-seedling"></i></span>
            <input type="text" class="form-control" id="cropName" name="cropName" placeholder="Enter Crop Name" required>
          </div>
        </div>

        <!-- Category -->
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-select" id="category" name="category" required>
            <option value="" disabled selected>Select Category</option>
            <option value="Grains">Grains</option>
            <option value="Vegetables">Vegetables</option>
            <option value="Fruits">Fruits</option>
            <option value="Pulses">Pulses</option>
            <option value="Others">Others</option>
          </select>
        </div>

        <!-- Quantity -->
        <div class="mb-3">
          <label for="quantity" class="form-label">Quantity (kg)</label>
          <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity in kg" required>
        </div>

        <!-- Price Per Kg -->
        <div class="mb-3">
          <label for="pricePerKg" class="form-label">Price Per Kg</label>
          <input type="number" class="form-control" id="pricePerKg" name="pricePerKg" placeholder="Enter Price Per Kg" required>
        </div>


        <!-- Status -->
        <div class="mb-3">
          <label for="status" class="form-label">Status</label>
          <select class="form-select" id="status" name="status">
            <option value="Available" selected>Available</option>
            <option value="Sold">Sold</option>
            <option value="Pending">Pending</option>
          </select>
        </div>

        <!-- Description -->
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Crop Description"></textarea>
        </div>

        <!-- Images -->
        <div class="mb-3">
          <label for="images" class="form-label">Images</label>
          <input type="file" class="form-control" id="image" name="image" multiple>
          <small class="text-muted">You can upload multiple images.</small>
        </div>

        <!-- Submit Button -->
        <div class="form-footer">
          <button type="submit" class="btn btn-primary w-100">Submit</button>
        </div>
      </form>
    </div>
  </div>



  <script>
document.getElementById("cropForm").addEventListener("submit", async (e) => {
    e.preventDefault();

    const formData = new FormData(e.target);

    try {
    // Retrieve the accessToken from localStorage
    const accessToken = localStorage.getItem("accessToken");

    // Check if accessToken exists
    if (!accessToken) {
        // If no token is found, redirect to login page or show an error
        alert("Please log in to add a crop.");
        window.location.href = "./login.php";  // Replace with your login page URL
        return;  // Stop further execution
    }

    // Send a POST request to add the crop with the accessToken in the Authorization header
    const response = await fetch("http://localhost:8080/api/v1/crops/add-crops", {
        method: "POST",
        headers: {
            "Authorization": `Bearer ${accessToken}`,  // Add the access token here
        },
        body: formData,  // Assuming `formData` is already prepared
    });

    const result = await response.json();

    if (response.ok) {
        // Handle success - Crop added successfully
        alert("Crop added successfully!");
        // Reset the form fields after successful submission
        document.getElementById("cropForm").reset();
    } else {
        // Handle failure - Error message from the API
        alert(result.message || "Failed to add crop.");
    }
} catch (error) {
    // Catch any other errors (e.g., network issues, etc.)
    alert("An error occurred while adding the crop.");
    console.error(error);
}
});




    

    </script>


    <?php require './components/footer.php' ?>





    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>


    <?php require './components/scripts.php' ?>
</body>

</html>