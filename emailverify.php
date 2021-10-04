<?php include('header.php') ?>

<style>
.account_manage_screen .para_text p {
    margin-bottom: 6px;
}

.account_manage_screen .para_text {
    font-size: 15px;
    color: #565656;
}

.mobile_screen {
    display: none !important;
}

.account_manage_screen .verify_buttons .btn.btn2 i,
.account_manage_screen .verify_buttons .btn.btn1 i {
    font-weight: 500;
    font-size: 15px;
}

.account_manage_screen .verify_buttons .btn.btn1 {
    color: #f71b1b;
    border-color: #bfbfbf;
    font-size: 13px;
    display: block;
    text-transform: capitalize;
    padding: 0 22px !important;
    line-height: 35px;
    border-radius: 2px;
    font-weight: bold;
    transition: background .25s ease-in-out, color .25s ease-in-out, box-shadow .25s ease-in-out;
    margin: 10px;
    margin: auto;
    margin-top: 10px;
    margin-bottom: 10px;
    width: 30%;
    box-shadow: none;
}

.account_manage_screen .verify_buttons .btn.btn2 {
    padding: 0 22px;
    line-height: 35px;
    border-radius: 2px;
    text-align: center;
    font-weight: bold;
    font-size: 13px;
    width: 30%;
    cursor: pointer;
    background-color: #f71b1b;
    color: #fff;
    transition: background 0.25s ease-in-out, color 0.25s ease-in-out, box-shadow 0.25s ease-in-out;
}


@media (max-width:765px) {

    .wallet {
        display: none !important;
    }

    .account_manage_screen .verify_buttons .btn.btn2,
    .account_manage_screen .verify_buttons .btn.btn1 {
        width: 70%;
    }

    .bg-color {
        margin-top: 150px;
    }

    .filter_name {
        width: 100%;
        overflow-y: hidden;
        display: none;
    }

    .filter_names {
        width: 100%;
        height: max-content;
        position: absolute;
        bottom: -500px;
    }

    .mobile_screen {
        display: block !important;
    }

    .mobile_screen .toggle_button {
        padding: 14px 20px;
    }

    .mobile_screen .toggle_button button {
        width: 100%;
        text-align: left;
        box-shadow: none;
    }
}
</style>

<hr>
<div class="bg-color">
    <?php include('sidemenumobile.php') ?>

    <!-- bread-crum -->
    <div class="bread_crum">
        <a href="#">Home</a> <i class="fas fa-chevron-right"></i> <span>My Account</span>
        <i class="fas fa-chevron-right"></i> <span>Security Verification</span>
    </div>
    <!-- bread-crum -->

    <!-- filter -->
    <div class="d-flex">


        <?php include('sidemenu.php') ?>


        <div class="living_room_layout">
            <div class="living_room_heading">
                <h1>Security Verification</h1>
            </div>


            <div class="account_manage_screen my-5 text-center">
                <div class="main_img">
                    <img src="asset/images/security.png" width="100" class="img-fluid my-3">
                </div>
                <div class="para_text">
                    <p>To protect your account security, we need to verify your identity</p>
                    <p>Please choose a way to verify:</p>
                </div>
                <div class="verify_buttons mt-4">
                    <button type="button" class="btn btn1"><i class="fal fa-envelope mr-2"></i>Verify through
                        Email</button>
                    <button type="button" class="btn btn2"><i class="fal fa-mobile-android mr-2"></i>Verify through SMS
                        Code</button>
                </div>
            </div>
        </div>





    </div>
    <!-- filter -->
</div>

<?php include('footer.php') ?>