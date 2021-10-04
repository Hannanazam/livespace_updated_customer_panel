<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Housology</title>
    <link rel="stylesheet" href="asset/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<style>
.personal_profile {
    border: 1px solid #f3f3f3;
}

@media (max-width:765px) {

    .bread_crum {
        display: none;
    }
}
</style>

<body>
    <section id="listing">
        <section id="home">

            <!-- navbar  -->
            <header id="main_header">
                <div class="smallheader">
                    <a href="">Covid 19 Update - Deliveries May Get Affected.</a>
                </div>
                <div class="largeheader">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-3">
                            <div class="main-logo d-flex">
                                <div class="hamburger-menu">
                                    <div class="bar"></div>
                                </div>

                                <img src="asset/images/logo.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control shadow-none hide-at-small"
                                    placeholder="Search...">
                                <select class="form-select shadow-none hide-at-small hide-at-medium"
                                    aria-label="Default select example">
                                    <option selected>All categories</option>
                                    <option value="Appliances">Appliances</option>
                                    <option value="Appliances Combo">Appliances Combo</option>
                                    <option value="Bathware">Bathware</option>
                                    <option value="Bed Frames and Headboards">Bed Frames and Headboards</option>
                                    <option value="Beds with Storage">Beds with Storage</option>
                                    <option value="Beds without Storage">Beds without Storage</option>
                                    <option value="Bench">Bench</option>
                                    <option value="Chairs/Seating">Chairs/Seating</option>
                                    <option value="Curtains">Curtains</option>
                                    <option value="Decals">Decals</option>
                                    <option value="Decor">Decor</option>
                                    <option value="Decorative Lighting">Decorative Lighting</option>
                                    <option value="Decoratives">Decoratives</option>
                                    <option value="Dining Tables">Dining Tables</option>
                                    <option value="Fans">Fans</option>
                                    <option value="General Lighting">General Lighting</option>
                                    <option value="Geysers">Geysers</option>
                                    <option value="Home Linen">Home Linen</option>
                                    <option value="Kicten Appliances">Kicten Appliances</option>
                                    <option value="Kids' Beds">Kids' Beds</option>
                                    <option value="Kitchen Appliances">Kitchen Appliances</option>
                                    <option value="Kitchen Fixture">Kitchen Fixture</option>
                                    <option value="Kitchen Fixtures">Kitchen Fixtures</option>
                                    <option value="Make your own Sectional Sofas">Make your own Sectional Sofas</option>
                                    <option value="Mattresses &amp; Pillows">Mattresses &amp; Pillows</option>
                                    <option value="Mirrors">Mirrors</option>
                                    <option value="Organizer">Organizer</option>
                                    <option value="Recliner">Recliner</option>
                                    <option value="Rugs &amp; Carpets">Rugs &amp; Carpets</option>
                                    <option value="Smart Lighting">Smart Lighting</option>
                                    <option value="Sofa">Sofa</option>
                                    <option value="Sofas">Sofas</option>
                                    <option value="Storage">Storage</option>
                                    <option value="Table">Table</option>
                                    <option value="Tables">Tables</option>
                                    <option value="Towels">Towels</option>
                                    <option value="Wall Accents">Wall Accents</option>
                                    <option value="Wall Decor">Wall Decor</option>
                                </select>
                                <button class="hide-at-small">
                                    <span class="input-group-text"><i class="fal fa-search"></i></span>
                                </button>
                                <div class="dropdown px-2 hide-at-large show-at-small">
                                    <a class="dropdown-toggle-search" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="input-group-text"><i class="fal fa-search"></i></span>
                                    </a>
                                    <div class="dropdown-menu-search" aria-labelledby="dropdownMenuLink">
                                        <input type="text" class="form-control shadow-none" placeholder="Search...">

                                        <button>
                                            <span class="input-group-text"><i class="fal fa-search"></i></span>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-4">
                            <div class="icons">
                                <div class="d-flex">
                                    <span class="hide-at-large show-at-medium">
                                        <div class="dropdown px-2">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="far fa-user"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <div class="login-form">
                                                    <div class="headings">
                                                        <h5 class="text-center">Login to my account</h5>
                                                        <h4 class="text-center">Enter your e-mail and password:</h4>
                                                    </div>

                                                    <div class="container">
                                                        <form>

                                                            <div class="group">
                                                                <input type="email" required>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Email</label>
                                                            </div>

                                                            <div class="group">
                                                                <input type="password" required>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Password</label>
                                                            </div>

                                                            <button class="btn loginbutton w-100">Login</button>

                                                            <div class="text-center other">
                                                                <p>New customer? <a href="#0" style="font-weight: normal;
                                                            color: #f71b1b !important;
                                                            font-size: 12px !important;" class="create_account">Create
                                                                        your account</a></p>
                                                                <p>Lost password? <a href="#0" style="font-weight: normal;
                                                            color: #f71b1b !important;
                                                            font-size: 12px !important;"
                                                                        class="recover_password">Recover password</a>
                                                                </p>
                                                            </div>

                                                        </form>



                                                    </div>

                                                </div>

                                                <div class="login-form-1">
                                                    <div class="headings">
                                                        <h5 class="text-center">Create my account</h5>
                                                        <h4 class="text-center">Please fill in the information below:
                                                        </h4>
                                                    </div>

                                                    <div class="container">
                                                        <form>

                                                            <div class="group">
                                                                <input type="text" required>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>First Name</label>
                                                            </div>
                                                            <div class="group">
                                                                <input type="text" required>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Last Name</label>
                                                            </div>

                                                            <div class="group">
                                                                <input type="email" required>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Email</label>
                                                            </div>

                                                            <div class="group">
                                                                <input type="password" required>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Password</label>
                                                            </div>

                                                            <button class="btn loginbutton w-100">Create my
                                                                account</button>

                                                            <div class="text-center other">
                                                                <p>Already have an account? <a href="#0" style="font-weight: normal;
                                                            color: #f71b1b !important;
                                                            font-size: 12px !important;" class="login_here">Login
                                                                        here</a></p>
                                                            </div>

                                                        </form>



                                                    </div>

                                                </div>


                                                <div class="login-form-2">
                                                    <div class="headings">
                                                        <h5 class="text-center">Recover password</h5>
                                                        <h4 class="text-center">Enter your email:</h4>
                                                    </div>

                                                    <div class="container">
                                                        <form>

                                                            <div class="group">
                                                                <input type="email" required>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Email</label>
                                                            </div>

                                                            <button class="btn loginbutton w-100">Recover</button>

                                                            <div class="text-center other">
                                                                <p>Remembered your password? <a href="#0" style="font-weight: normal;
                                                            color: #f71b1b !important;
                                                            font-size: 12px !important;" class="back_to_login">Back to
                                                                        login</a></p>
                                                            </div>

                                                        </form>



                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </span>
                                    <div class="dropdown px-2 hide-at-medium">

                                        Login / Signup <br>
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            My account <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <div class="login-form">
                                                <div class="headings">
                                                    <h5 class="text-center">Login to my account</h5>
                                                    <h4 class="text-center">Enter your e-mail and password:</h4>
                                                </div>

                                                <div class="container">
                                                    <form>

                                                        <div class="group">
                                                            <input type="email" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Email</label>
                                                        </div>

                                                        <div class="group">
                                                            <input type="password" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Password</label>
                                                        </div>

                                                        <button class="btn loginbutton w-100">Login</button>

                                                        <div class="text-center other">
                                                            <p>New customer? <a href="#0" style="font-weight: normal;
                                                        color: #f71b1b !important;
                                                        font-size: 12px !important;" class="create_account">Create your
                                                                    account</a></p>
                                                            <p>Lost password? <a href="#0" style="font-weight: normal;
                                                        color: #f71b1b !important;
                                                        font-size: 12px !important;" class="recover_password">Recover
                                                                    password</a></p>
                                                        </div>

                                                    </form>



                                                </div>

                                            </div>

                                            <div class="login-form-1">
                                                <div class="headings">
                                                    <h5 class="text-center">Create my account</h5>
                                                    <h4 class="text-center">Please fill in the information below:</h4>
                                                </div>

                                                <div class="container">
                                                    <form>

                                                        <div class="group">
                                                            <input type="text" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>First Name</label>
                                                        </div>
                                                        <div class="group">
                                                            <input type="text" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Last Name</label>
                                                        </div>

                                                        <div class="group">
                                                            <input type="email" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Email</label>
                                                        </div>

                                                        <div class="group">
                                                            <input type="password" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Password</label>
                                                        </div>

                                                        <button class="btn loginbutton w-100">Create my account</button>

                                                        <div class="text-center other">
                                                            <p>Already have an account? <a href="#0" style="font-weight: normal;
                                                        color: #f71b1b !important;
                                                        font-size: 12px !important;" class="login_here">Login here</a>
                                                            </p>
                                                        </div>

                                                    </form>



                                                </div>

                                            </div>


                                            <div class="login-form-2">
                                                <div class="headings">
                                                    <h5 class="text-center">Recover password</h5>
                                                    <h4 class="text-center">Enter your email:</h4>
                                                </div>

                                                <div class="container">
                                                    <form>

                                                        <div class="group">
                                                            <input type="email" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Email</label>
                                                        </div>

                                                        <button class="btn loginbutton w-100">Recover</button>

                                                        <div class="text-center other">
                                                            <p>Remembered your password? <a href="#0" style="font-weight: normal;
                                                        color: #f71b1b !important;
                                                        font-size: 12px !important;" class="back_to_login">Back to
                                                                    login</a></p>
                                                        </div>

                                                    </form>



                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <span class="hide-at-large show-at-medium">
                                        <a href="" class="px-2">
                                            <i class="fal fa-heart"></i>
                                        </a>
                                    </span>
                                    <span>
                                        <a href="" class="px-2 border hide-at-medium">
                                            <i class="fal fa-heart"></i> Wish list
                                        </a>
                                    </span>
                                    <span class="hide-at-large show-at-medium">
                                        <a class="dropdown-toggle-cart" href="#" role="button" id="dropdownMenuLink"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fal fa-shopping-cart"></i>
                                        </a>
                                        <div class="dropdown-menu-cart" aria-labelledby="dropdownMenuLink">
                                            <div class="cart_items">
                                                <div class="cart_section_items">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="cards mb-3">
                                                            <div class="row no-gutters">
                                                                <div class="col-md-4">
                                                                    <img src="asset/images/living1.jpg"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <a href="#0">
                                                                            <p class="card-title">BOINGG</p>
                                                                        </a>
                                                                        <a href="#0">
                                                                            <p class="card-text">Melody Kids Chair</p>
                                                                        </a>
                                                                        <p class="card-text-mute">Rs. 24,500.00
                                                                            <span>Rs. 24,500.00</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <nav class=" my-auto">
                                                            <ul class="pagination">
                                                                <li class="page-item"><a class="page-link" href="#0"><i
                                                                            class="far fa-minus"></i></a></li>
                                                                <li class="page-item active" aria-current="page">
                                                                    <p class="page-link">1</p>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#0"><i
                                                                            class="far fa-plus"></i></a></li>
                                                            </ul>
                                                            <div class="text-center">
                                                                <a href="">Remove</a>
                                                            </div>
                                                        </nav>
                                                        <div class="total_price my-auto">

                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="cart_section_items">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="cards mb-3">
                                                            <div class="row no-gutters">
                                                                <div class="col-md-4">
                                                                    <img src="asset/images/living1.jpg"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <a href="#0">
                                                                            <p class="card-title">BOINGG</p>
                                                                        </a>
                                                                        <a href="#0">
                                                                            <p class="card-text">Melody Kids Chair</p>
                                                                        </a>
                                                                        <p class="card-text-mute">Rs. 24,500.00
                                                                            <span>Rs. 24,500.00</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <nav class=" my-auto">
                                                            <ul class="pagination">
                                                                <li class="page-item"><a class="page-link" href="#0"><i
                                                                            class="far fa-minus"></i></a></li>
                                                                <li class="page-item active" aria-current="page">
                                                                    <p class="page-link">1</p>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#0"><i
                                                                            class="far fa-plus"></i></a></li>
                                                            </ul>
                                                            <div class="text-center">
                                                                <a href="">Remove</a>
                                                            </div>
                                                        </nav>
                                                        <div class="total_price my-auto">

                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>

                                            <div class="total_amount">
                                                <div class="total_heading">
                                                    <p>Total <span class="float-right">Rs. 42,489.00
                                                        </span></p>
                                                    <div class="saved_amount">
                                                        <p>You saved Rs. 18,209.00!</p>
                                                    </div>
                                                    <div class="buttons_group">
                                                        <button class="btn btn1">View cart</button>
                                                        <button class="btn btn2">Checkout</button>
                                                    </div>
                                                    <div class="share_options">
                                                        <p>Share your cart</p>
                                                        <div class="icons">
                                                            <i class="fab fa-whatsapp" title="Share on whatsapp"></i>
                                                            <i class="fal fa-copy" title="Copy link"></i>
                                                            <i class="far fa-envelope" title="Send by email"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>





                                            <div class="cart_main">
                                                <div class="cart_detail text-center">
                                                    <i class="fal fa-shopping-cart"></i>
                                                    <h1>Your cart is empty</h1>
                                                </div>
                                                <div class="cart_btn text-center">
                                                    <button class="btn">Shop Our Products</button>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                    <div class="dropdown px-2 hide-at-medium">
                                        <a class="dropdown-toggle-cart" href="#" role="button" id="dropdownMenuLink"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fal fa-shopping-cart"></i> Cart
                                        </a>
                                        <div class="dropdown-menu-cart" aria-labelledby="dropdownMenuLink">
                                            <div class="cart_items">
                                                <div class="cart_section_items">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="cards mb-3">
                                                            <div class="row no-gutters">
                                                                <div class="col-md-4">
                                                                    <img src="asset/images/living1.jpg"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <a href="#0">
                                                                            <p class="card-title">BOINGG</p>
                                                                        </a>
                                                                        <a href="#0">
                                                                            <p class="card-text">Melody Kids Chair</p>
                                                                        </a>
                                                                        <p class="card-text-mute">Rs. 24,500.00
                                                                            <span>Rs. 24,500.00</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <nav class=" my-auto">
                                                            <ul class="pagination">
                                                                <li class="page-item"><a class="page-link" href="#0"><i
                                                                            class="far fa-minus"></i></a></li>
                                                                <li class="page-item active" aria-current="page">
                                                                    <p class="page-link">1</p>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#0"><i
                                                                            class="far fa-plus"></i></a></li>
                                                            </ul>
                                                            <div class="text-center">
                                                                <a href="">Remove</a>
                                                            </div>
                                                        </nav>
                                                        <div class="total_price my-auto">

                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="cart_section_items">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="cards mb-3">
                                                            <div class="row no-gutters">
                                                                <div class="col-md-4">
                                                                    <img src="asset/images/living1.jpg"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <a href="#0">
                                                                            <p class="card-title">BOINGG</p>
                                                                        </a>
                                                                        <a href="#0">
                                                                            <p class="card-text">Melody Kids Chair</p>
                                                                        </a>
                                                                        <p class="card-text-mute">Rs. 24,500.00
                                                                            <span>Rs. 24,500.00</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <nav class=" my-auto">
                                                            <ul class="pagination">
                                                                <li class="page-item"><a class="page-link" href="#0"><i
                                                                            class="far fa-minus"></i></a></li>
                                                                <li class="page-item active" aria-current="page">
                                                                    <p class="page-link">1</p>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#0"><i
                                                                            class="far fa-plus"></i></a></li>
                                                            </ul>
                                                            <div class="text-center">
                                                                <a href="">Remove</a>
                                                            </div>
                                                        </nav>
                                                        <div class="total_price my-auto">

                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>

                                            <div class="total_amount">
                                                <div class="total_heading">
                                                    <p>Total <span class="float-right">Rs. 42,489.00
                                                        </span></p>
                                                    <div class="saved_amount">
                                                        <p>You saved Rs. 18,209.00!</p>
                                                    </div>
                                                    <div class="buttons_group">
                                                        <button class="btn btn1">View cart</button>
                                                        <button class="btn btn2">Checkout</button>
                                                    </div>
                                                    <div class="share_options">
                                                        <p>Share your cart</p>
                                                        <div class="icons">
                                                            <i class="fab fa-whatsapp" title="Share on whatsapp"></i>
                                                            <i class="fal fa-copy" title="Copy link"></i>
                                                            <i class="far fa-envelope" title="Send by email"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="cart_main">
                                                <div class="cart_detail text-center">
                                                    <i class="fal fa-shopping-cart"></i>
                                                    <h1>Your cart is empty</h1>
                                                </div>
                                                <div class="cart_btn text-center">
                                                    <button class="btn">Shop Our Products</button>
                                                </div>
                                            </div>
                                        </div>
                                        </span>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>








                <div class="over-menu"></div>
                <div class="over-menu"></div>
                <div id="wrap">
                    <header class="header" id="header-sroll">
                        <div class="container-fluid" style="padding-left: 0px;">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="desk-menu">
                                        <nav class="box-menu ml-auto">
                                            <div class="menu-container">
                                                <div class="menu-header-container">
                                                    <ul id="cd-primary-nav" class="menu">
                                                        <li class="menu-item menu-item-has-children">
                                                            <a href="#">living room<i
                                                                    class="fas fa-chevron-down"></i></a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item menu-item-has-children">
                                                                    <a href="#">sofa and sectionals<i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-item">
                                                                            <a href="#">all sofas</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">single seater</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">2 seater sofas</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">3 seater sofas</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">sectional sofas</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">recliners</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">day beds & chaises</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>

                                                                <li class="menu-item menu-item-has-children">
                                                                    <a href="#">chairs and ottomans<i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-item">
                                                                            <a href="#">all chairs</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">dining chairs</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">kids chairs</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">study chairs</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">ottomans</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">benches</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">bar stools</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">bean bags</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">outdoor chairs</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>


                                                                <li class="menu-item menu-item-has-children">
                                                                    <a href="#">tables<i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-item">
                                                                            <a href="#">all tables</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">coffee tables</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">side/end tables</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">console tables</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">outdoor tables</a>
                                                                        </li>

                                                                    </ul>
                                                                </li>

                                                                <li class="menu-item menu-item-has-children">
                                                                    <a href="#">storages<i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-item">
                                                                            <a href="#">all storages</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#"><span>TV</span> units</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">Bookshelves</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">wallshelves</a>
                                                                        </li>

                                                                    </ul>
                                                                </li>

                                                                <li class="menu-item">
                                                                    <a href="#">sofa cum bed</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="h#">swing</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="h#">home temple</a>
                                                                </li>
                                                            </ul>
                                                        </li>

                                                        <li class="menu-item menu-item-has-children">
                                                            <a href="#">bedroom<i class="fas fa-chevron-down"></i></a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item menu-item-has-children">
                                                                    <a href="#">beds<i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-item">
                                                                            <a href="#">all beds</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">beds with storage</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">beds without storage</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">king size beds</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">queen size beds</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">single beds</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">kids beds</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>

                                                                <li class="menu-item menu-item-has-children">
                                                                    <a href="#">bed frames and headboards<i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-item">
                                                                            <a href="#">king bed frames</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">queen/compact queen bed
                                                                                frames</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">king headboards</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">queen/compact queen
                                                                                headboards</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>

                                                                <li class="menu-item">
                                                                    <a href="#">wardrobs</a>
                                                                </li>

                                                                <li class="menu-item menu-item-has-children">
                                                                    <a href="#">storages<i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-item">
                                                                            <a href="#">all storages</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#"><span>TV</span> units</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">Bookshelves</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">wallshelves</a>
                                                                        </li>

                                                                        <li class="menu-item">
                                                                            <a href="#">chest of drawers</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">bedside tables</a>
                                                                        </li>

                                                                    </ul>
                                                                </li>


                                                                <li class="menu-item menu-item-has-children">
                                                                    <a href="#">kids bedroom<i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-item">
                                                                            <a href="#">kids bed</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">bunk beds</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">kids storage</a>
                                                                        </li>

                                                                    </ul>
                                                                </li>

                                                                <li class="menu-item menu-item-has-children">
                                                                    <a href="#">mattress & pillows<i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-item">
                                                                            <a href="#">king mattress</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">queen mattress</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">mattress protectors</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">mattress toppers</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">pillows</a>
                                                                        </li>

                                                                    </ul>
                                                                </li>

                                                            </ul>
                                                        </li>

                                                        <li class="menu-item menu-item-has-children">
                                                            <a href="#">dining<i class="fas fa-chevron-down"></i></a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item">
                                                                    <a href="#">dining sets</a>
                                                                </li>
                                                                <li class="menu-item menu-item-has-children">
                                                                    <a href="#">dining tables<i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-item">
                                                                            <a href="#">4 seating dining tables</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">6 seating dining tables</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="h#">dining chairs</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="h#">benches</a>
                                                                </li>
                                                                <li class="menu-item menu-item-has-children">
                                                                    <a href="#">storages<i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-item">
                                                                            <a href="#">crockery units</a>
                                                                        </li>

                                                                    </ul>
                                                                </li>



                                                            </ul>
                                                        </li>


                                                        <li class="menu-item menu-item-has-children">
                                                            <a href="#">kids<i class="fas fa-chevron-down"></i></a>
                                                            <ul class="sub-menu">

                                                                <li class="menu-item menu-item-has-children">
                                                                    <a href="#">kids beds<i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-item">
                                                                            <a href="#">kids single bed</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">kids queen beds</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">bunk beds</a>
                                                                        </li>

                                                                    </ul>
                                                                </li>
                                                                <li class="menu-item menu-item-has-children">
                                                                    <a href="#">storages<i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                    <ul class="sub-menu">

                                                                        <li class="menu-item">
                                                                            <a href="#">Bookshelves</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">wallshelves</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">kids wardrobs</a>
                                                                        </li>

                                                                    </ul>
                                                                </li>
                                                                <li class="menu-item menu-item-has-children">
                                                                    <a href="#">Kids tables & chairs<i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-item">
                                                                            <a href="#">Kids tables</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">Kids chairs</a>
                                                                        </li>

                                                                    </ul>
                                                                </li>

                                                            </ul>
                                                        </li>

                                                        <li class="menu-item menu-item-has-children">
                                                            <a href="#">study<i class="fas fa-chevron-down"></i></a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item">
                                                                    <a href="#">study tables</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="h#">study chairs</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="h#">study sets</a>
                                                                </li>
                                                            </ul>
                                                        </li>


                                                        <li class="menu-item menu-item-has-children">
                                                            <a href="#">decor & lighting<i
                                                                    class="fas fa-chevron-down"></i></a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item menu-item-has-children">
                                                                    <a href="#">decorative lights<i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-item">
                                                                            <a href="#">ceiling lamps</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">floor lamps</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">wall lamps</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">chandeliers</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">pandants</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">table lamps</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>

                                                                <li class="menu-item menu-item-has-children">
                                                                    <a href="#">general lights<i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-item">
                                                                            <a href="#">downlighters</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">lighting accessories</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">panel lights</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">spot lights</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">strip lights</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">surface mounted lights</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">track lights</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>



                                                                <li class="menu-item menu-item-has-children">
                                                                    <a href="#">smart lights<i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-item">
                                                                            <a href="#">smart bulbs</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">smart tubelights</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">smart downlihters</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">smart spot lights</a>
                                                                        </li>

                                                                        <li class="menu-item">
                                                                            <a href="#">smart strip lights</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">smart panel lights</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">smart pendant lights</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">smart table lamps</a>
                                                                        </li>

                                                                    </ul>
                                                                </li>

                                                                <li class="menu-item">
                                                                    <a href="#">curtain</a>
                                                                </li>

                                                                <li class="menu-item menu-item-has-children">
                                                                    <a href="#">home furnishings<i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-item">
                                                                            <a href="#">curtains</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">rugs & carpets</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">home linen</a>
                                                                        </li>

                                                                    </ul>
                                                                </li>

                                                                <li class="menu-item">
                                                                    <a href="#">mirrors</a>
                                                                </li>
                                                                <li class="menu-item menu-item-has-children">
                                                                    <a href="#">wall decor<i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-item">
                                                                            <a href="#">decals</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">wall clocks</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">accent wall decor</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">art college sets</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">wall art</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">wall hooks</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">wall plates</a>
                                                                        </li>

                                                                    </ul>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="#">decorative</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="#">organizer</a>
                                                                </li>

                                                            </ul>
                                                        </li>

                                                        <li class="menu-item menu-item-has-children">
                                                            <a href="#">appliances<i
                                                                    class="fas fa-chevron-down"></i></a>
                                                            <ul class="sub-menu">

                                                                <li class="menu-item menu-item-has-children">
                                                                    <a href="#">kitchen appliances<i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-item">
                                                                            <a href="#">hob</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">chimney</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">dishwashers</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">oven</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">microwave</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">others</a>
                                                                        </li>

                                                                    </ul>
                                                                </li>
                                                                <li class="menu-item menu-item-has-children">
                                                                    <a href="#">kitchen fixtures<i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                    <ul class="sub-menu">

                                                                        <li class="menu-item">
                                                                            <a href="#">kitchen sinks</a>
                                                                        </li>

                                                                    </ul>
                                                                </li>
                                                                <li class="menu-item menu-item-has-children">
                                                                    <a href="#">fans<i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-item">
                                                                            <a href="#">smart fans</a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="#">decorative fans</a>
                                                                        </li>

                                                                    </ul>
                                                                </li>

                                                            </ul>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <!-- <div class="menu-foot">
                                        <div class="social">
                                          <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                          <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                            <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                                          <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                          <a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                          <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                      </div>
                                      <hr/>
                                      <address>
                                          <span class="tel"><i class="icon-telephone"></i> +55 31 3333-3333</span>
                                          <span class="email"><i class="icon-mail"></i> email@email.com</span>
                                          <span class="end"><i class="icon-location"></i> Rua tal, 44, Lugar nenhum</span>
                                      </address>
                                    </div> -->
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                </div>









            </header>

            <!-- navbar  -->