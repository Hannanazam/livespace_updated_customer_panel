<?php include('header.php') ?>

<style>
.account_manage_screen .profile_info {
    margin: 20px;
}

.account_manage_screen .profile_info .large_para select:focus-visible {
    outline: none;
}

.account_manage_screen .profile_info .large_para select {
    width: 100%;
    padding: 10px 0px;
    border: 1px solid #000;
    background: #fff;
}

.account_manage_screen .profile_info .large_para input {
    width: 100%;
}

.account_manage_screen .profile_info .large_para {
    font-size: 15px;
}

.account_manage_screen .profile_info .small_para {
    color: #565656;
    font-size: 13px;
}

.mobile_screen {
    display: none !important;
}

.boxed label {
    border: 1px solid #e6e6e6;
    color: #3a2a2f;
    padding: 6px 16px 7px 16px;
    border-radius: 3px;
    font-size: 14px !important;
    margin-bottom: 30px;
}

.boxed input[type="radio"] {
    display: none;
}

.boxed input[type="radio"]:checked+label {
    box-shadow: 0 0 0 1px #f71b1b;
    border: 1px solid #f71b1b;
    background: rgba(247, 27, 27, .06);
    color: #f71b1b;
    border-radius: 3px;
    font-size: 14px !important;
    margin-bottom: 30px;
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

    .account_manage_screen .profile_info .large_para.number_val {
        padding: 1px 0px;
    }

    /* .account_manage_screen .profile_info .large_para{
    font-size:16px;
} */
}
</style>

<hr>
<div class="bg-color">
    <?php include('sidemenumobile.php') ?>

    <!-- bread-crum -->
    <div class="bread_crum">
        <a href="#">Home</a> <i class="fas fa-chevron-right"></i> <span>My Account</span>
        <i class="fas fa-chevron-right"></i> <span>Edit addresses</span>
    </div>
    <!-- bread-crum -->

    <!-- filter -->
    <div class="d-flex">


        <?php include('sidemenu.php') ?>


        <div class="living_room_layout">
            <div class="living_room_heading">
                <h1>Edit addresses</h1>
            </div>


            <div class="account_manage_screen">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="profile_info">
                            <p class="small_para">Full Name</p>
                            <p class="large_para"><input type="text" class="p-2" value="johndoe"></p>
                        </div>
                        <div class="profile_info">
                            <p class="small_para">Phone Number</p>
                            <p class="large_para"><input type="text" class="p-2" value="3330987700"></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="profile_info">
                            <p class="small_para">Province</p>
                            <p class="large_para">
                                <select>
                                    <option>Karachi</option>
                                    <option>Islamabad</option>
                                </select>
                            </p>
                        </div>
                        <div class="profile_info">
                            <p class="small_para">City</p>
                            <p class="large_para">
                                <select>
                                    <option>Karachi</option>
                                    <option>Islamabad</option>
                                </select>
                            </p>
                        </div>
                        <div class="profile_info">
                            <p class="small_para">Area</p>
                            <p class="large_para">
                                <select>
                                    <option>Karachi</option>
                                    <option>Islamabad</option>
                                </select>
                            </p>
                        </div>
                        <div class="profile_info">
                            <p class="small_para">Address</p>
                            <p class="large_para number_val"><input type="text" class="p-2"
                                    value="h-900/998 kala board"></p>
                        </div>
                        <div class="profile_info">
                            <p class="small_para">Select a label for effective delivery:</p>
                            <p class="large_para">
                            <form class="boxed">
                                <input type="radio" id="android1" name="skills" value="Android Development">
                                <label for="android1">Home</label>

                                <input type="radio" id="ios1" name="skills" value="iOS Development">
                                <label for="ios1">Office</label>
                            </form>
                            </p>
                        </div>
                        <div class="profile_info float-right">
                            <button class="btn btn1">Save</button>
                            <button class="btn btn1">Cancle</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>





    </div>
    <!-- filter -->
</div>

<?php include('footer.php') ?>