<div class="container-fluid topbar-top bg-primary">
    <div class="container">
        <div class="d-flex justify-content-between topbar py-2">
            <div class="d-flex align-items-center flex-shrink-0 topbar-info">
                <a href="tel:+918927254686" class="me-4 text-secondary"><i
                        class="fas fa-phone-alt me-2 text-dark"></i>+918927254686</a>
            </div>
            <div class="text-end pe-4 me-4 border-end border-dark search-btn">
                <div class="search-form">
                    <form action="./search_action.php" method="GET" onsubmit="return search()">
                        <div class="form-group">
                            <div class="d-flex">
                                <input type="text" class="form-control border-0 rounded-pill" name="search_input"
                                    value="" placeholder="Search Here Any Kind Of Service" required="" />
                                <button type="submit" value="Search Now!" class="btn"><i
                                        class="fa fa-search text-dark"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center topbar-icon">
    <!-- Register Link -->
    <a href="./paid_register.php" class="me-4 text-dark d-flex gap-2 align-items-center">
        <i class="fa-solid fa-user-plus"></i> Register
    </a>

    <!-- Login Link (Visible if user is NOT logged in) -->
    <a id="loginLink" href="./login.php" class="me-4 text-dark d-flex gap-2 align-items-center" style="display:none;">
        <i class="fa-solid fa-right-to-bracket"></i> Login
    </a>

    <!-- Profile Link (Visible if user is logged in) -->
    
</div>

            <div class="d-flex align-items-center justify-content-center topbar-icon">
                <div id="google_translate_element" class="translate-widget top-0 end-0 p-2"></div>
            </div>
        </div>
    </div>
</div>
