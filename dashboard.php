<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #f8f9fa;
            width: 250px;
            padding-top: 20px;
        }
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            display: block;
            color: #000;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .sidebar a:hover {
            background-color: #007bff;
            color: white;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .card-deck .card {
            margin-bottom: 15px;
        }
        .badge-custom {
            font-size: 0.85rem;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h4 class="text-center">Dashboard</h4>
    <a href="#">Dashboard</a>
    <a href="#">Orders</a>
    <a href="#">Profile</a>
    <a href="#">Settings</a>
    <a href="#">Wishlist</a>
    <a href="#">Notifications</a>
    <a href="#">Support</a>
    <a href="#">Logout</a>
</div>

<!-- Main Content -->
<div class="main-content">
    <div class="container">
        <h1>Welcome, John Doe</h1>
        <p class="text-muted">Your personal dashboard to manage your account and orders.</p>

        <!-- User Overview -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Account Overview</h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Membership: <strong>Gold</strong></li>
                            <li>Loyalty Points: <strong>120</strong></li>
                            <li>Total Orders: <strong>15</strong></li>
                            <li>Total Spent: <strong>$1200</strong></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Recent Orders -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Recent Orders</h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Order #12345 - $200 - <span class="badge bg-success badge-custom">Shipped</span></li>
                            <li>Order #12346 - $50 - <span class="badge bg-warning badge-custom">Processing</span></li>
                            <li>Order #12347 - $120 - <span class="badge bg-danger badge-custom">Pending</span></li>
                        </ul>
                        <a href="#" class="btn btn-link">View all orders</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Order History and Wishlist -->
        <div class="row">
            <!-- Order History -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Order History</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Order #</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#12340</td>
                                    <td>01/12/2025</td>
                                    <td><span class="badge bg-success badge-custom">Completed</span></td>
                                    <td>$250</td>
                                </tr>
                                <tr>
                                    <td>#12339</td>
                                    <td>29/11/2025</td>
                                    <td><span class="badge bg-danger badge-custom">Cancelled</span></td>
                                    <td>$100</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="#" class="btn btn-link">View full history</a>
                    </div>
                </div>
            </div>

            <!-- Wishlist -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Your Wishlist</h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Product #1 - $50 - <a href="#" class="btn btn-sm btn-outline-primary">Add to Cart</a></li>
                            <li>Product #2 - $30 - <a href="#" class="btn btn-sm btn-outline-primary">Add to Cart</a></li>
                            <li>Product #3 - $80 - <a href="#" class="btn btn-sm btn-outline-primary">Add to Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Profile Settings and Notifications -->
        <div class="row mt-4">
            <!-- Profile Settings -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Profile Settings</h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Email: john.doe@example.com</li>
                            <li>Phone: +123456789</li>
                            <li>Address: 123 Main St, City, Country</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>

            <!-- Notifications -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Notifications</h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>New product added to your wishlist - <span class="text-muted">5 minutes ago</span></li>
                            <li>Your order #12345 has been shipped - <span class="text-muted">2 hours ago</span></li>
                            <li>Flash sale ends soon! - <span class="text-muted">1 day ago</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Support Section -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Support</h5>
                    </div>
                    <div class="card-body">
                        <p>If you have any questions or issues, please feel free to <a href="mailto:support@ecommerce.com">contact our support team</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
