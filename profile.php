<?php include('header.php') ?>

<style>
.account_manage_screen .profile_info {
    margin: 20px;
}

.account_manage_screen .profile_info .large_para {
    font-size: 15px;
}

.account_manage_screen .profile_info .small_para {
    color: #565656;
    font-size: 13px;
}

.badge {
    left: auto;
}

.icon {
    margin-left: 0px;
}


.profile_info .modal .modal-footer .btn.btn-1 {
    color: #f71b1b;
    border-color: #bfbfbf;
    font-size: 12px;
    display: block;
    text-transform: capitalize;
    padding: 0 22px !important;
    line-height: 35px;
    border-radius: 2px;
    font-weight: bold;
    transition: background .25s ease-in-out, color .25s ease-in-out, box-shadow .25s ease-in-out;
    margin: 10px;
    box-shadow: none;
}

.profile_info .modal .modal-footer {
    border: 0px;
    padding: .5rem;
}

.shipping_address {
    font-size: 12px !important;
}

.account_manage_screen .profile_info .btn.btn1 {
    margin-top: 10px;
    width: 100%;
}

.account_manage_screen .profile_info .btn.btn1,
.profile_info .modal .modal-footer .btn.btn-2,
.order_section .btn {
    padding: 0 22px;
    line-height: 35px;
    border-radius: 2px;
    text-align: center;
    font-weight: bold;
    font-size: 13px;
    cursor: pointer;
    background-color: #f71b1b;
    color: #fff;
    transition: background 0.25s ease-in-out, color 0.25s ease-in-out, box-shadow 0.25s ease-in-out;
}

.profile_info .modal-header {
    padding: .5rem;
    border: 0px;
}

.profile_info .modal-body {
    padding: .5rem;
}

.profile_info .modal-content {
    border-radius: 0px;
}

@media (max-width:765px) {

    .wallet {
        display: none !important;
    }
}
</style>

<hr>
<div class="bg-color">
    <?php include ('sidemenumobile.php') ?>
    <!-- bread-crum -->
    <div class="bread_crum">
        <a href="#">Home</a> <i class="fas fa-chevron-right"></i> <span>My Account</span>
        <i class="fas fa-chevron-right"></i> <span>My profile</span>
    </div>
    <!-- bread-crum -->

    <!-- filter -->
    <div class="d-flex">


        <?php include('sidemenu.php') ?>


        <div class="living_room_layout">
            <div class="living_room_heading">
                <h1>My profile</h1>
            </div>


            <div class="account_manage_screen">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="profile_info">
                            <p class="small_para">Full Name</p>
                            <p class="large_para">johndoe</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="profile_info">
                            <p class="small_para">Email Address | <a href="emailverify.php">Change</a></p>
                            <p class="large_para">johndoe100@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="profile_info">
                            <p class="small_para">Mobile | <a href="emailverify.php">Change</a></p>
                            <p class="large_para">+92 *******891</p>
                        </div>

                    </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="profile_info">
                                <p class="small_para">Birthday</p>
                                <p class="large_para">Please enter your birthday
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                       
                            <div class="profile_info">
                                <p class="small_para">Gender</p>
                                <p class="large_para">Please enter your gender
                                </p>
                            </div>
                        </div>
                    </div>
                       <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="profile_info my-5">
                            <a href="#0" data-toggle="modal" data-target="#staticBackdrop">
                                Subscribe to our newsletter
                            </a>

                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <p class="modal-title" id="staticBackdropLabel">Newsletter Subscription</p>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p> I have read and understood <a href="">Privacy Policy</a></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-1" data-dismiss="modal">Cancle</button>
                                            <button type="button" class="btn btn-2">SUBSCRIBE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile_info">
                            <button type="button" class="btn btn1">Edit Profile</button>
                            <button type="button" class="btn btn1">Change Password</button>
                        </div>
                        </div>
                   

                  
                </div>

            </div>
        </div>




    </div>

</div>
<!-- filter -->
</div>

<?php include('footer.php') ?>