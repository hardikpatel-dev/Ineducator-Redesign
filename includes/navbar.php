<!-- Navbar content  -->
<style>


</style>
<div class="nav-social py-3 d-flex justify-content-between">
    <div class="social-contact">
        <a href="mailto:cs@ineducator.com">
            <i class="fa-solid fa-envelope"></i>
            <span class="d-none d-md-inline-block"> cs@ineducator.com</span>
        </a>
        <a href="tel:++1-(833) 568-8254" class="ms-3">
            <i class="fa-solid fa-phone"></i>
            <span class="d-none d-md-inline-block"> +1-(833) 568-8254</span>
        </a>
    </div>
    <div class="user-action">
        <a href="#" data-bs-toggle="modal" data-bs-target="#callback" class="ms-3">
            <i class="fa-solid fa-headset"></i>
            <span class="d-none d-md-inline-block"> Request Callback</span>

        </a>
        <a href="#" class="ms-3">
            <i class="fa-solid fa-cart-shopping"><span class="cart-item-count">0</span></i>
            <span class="d-none d-md-inline-block">My Cart</span>
        </a>
        <a href="#" class="ms-3">
            <i class="fa-solid fa-user"></i>
            <span class="d-none d-md-inline-block">My Dashboard</span>
        </a>
        <a href="login.php" class="ms-3 fill-btn">Login</a>
    </div>


</div>

<!-- request callback modal -->
<div class="modal fade" id="callback" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header-div text-center">
                <h3 class="modal-title p-3" id="staticBackdropLabel">Request Callback</h3>
                <a data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-circle-xmark"></i>
                </a>
            </div>
            <div class="modal-body">
                <fieldset>
                    <label for="email">Name<span>*</span>
                        <input type="text" name="name" placeholder="Enter name" required="">
                    </label>
                    <label for="email">Email<span>*</span>
                        <input type="text" name="email" placeholder="Enter Email" required="">
                    </label>
                    <label for="email">Phone<span>*</span>
                        <input type="text" name="" placeholder="Enter phone" required="">
                    </label>

                    <label>
                        Prefered Date and Time
                        <input type="datetime-local">
                    </label>

                    <label for="email">Your Query<span>*</span>
                        <textarea class="form-control" placeholder="Write your query here..." id="exampleFormControlTextarea1" rows="3"></textarea>
                    </label>
                </fieldset>
                <div class="cta my-3">
                    <a class="main-btn d-block">Submit Request</a>
                </div>

            </div>

        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="images/ineducator-logo.png" alt="Logo" class="logo-img img-fluid">
        </a>
        <button class="navbar-toggler shadow-none border-0 ms-auto" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class=""><i class="fa-solid fa-bars-staggered"></i></span>
        </button>
        <div class="sidebar offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <!-- sidebar header  -->
            <div class="offcanvas-header">
                <!-- <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                    <span class="text-white">Menu</span>
                </h5> -->
                <span type="button" class=" shadow-none border-0" data-bs-dismiss="offcanvas" aria-label="Close"><i
                        class="fa-solid fa-x"></i></span>
            </div>
            <!-- sidebar body  -->
            <div class="offcanvas-body">
                <ul class="navbar-nav ms-md-auto gap-2 ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Browse Courses</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="">All</a></li>
                            <li><a class="dropdown-item" href="">Live Webinar</a></li>
                            <li><a class="dropdown-item" href="">On-Demand Webinar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item search-icon">
                        <a class="nav-link" href="#" id="searchIcon">
                            <i class="fa fa-search"></i>
                        </a>
                        <div class="search-top" id="searchTop">
                            <form action="" accept-charset="utf-8" class="search-form" method="get">
                                <input type="text" name="q" id="q" value="" placeholder="Search here">
                                <button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>



<!-- search toggle -->
<script>
document.getElementById('searchIcon').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default anchor behavior
    var searchTop = document.getElementById('searchTop');

    if (searchTop.style.display === 'none' || searchTop.style.display === '') {
        searchTop.style.display = 'block';
    } else {
        searchTop.style.display = 'none';
    }
});
</script>