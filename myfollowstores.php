<?php include('header.php') ?>

<style>
.color-light {
    color: #565656;
}

.badge {
    left: auto;
}

.icon {
    margin-left: 0px;
}

.order_section {
    margin: 100px;
}

.personal_profile.set_height .main_para p.shipping_address {
    font-size: 13px;
}

.personal_profile.set_height .main_para p {
    margin-bottom: 6px;
}

.personal_profile.set_height {
    min-height: auto;
}

.personal_profile .main_para .cards .card-body .card-text {
    margin-bottom: 0px;
    font-size: 12px;
}

.personal_profile .main_para .cards .card-body .store_name {
    color: #f71b1b;
    font-weight: 500;
    font-size: 15px;
}

.personal_profile .main_para .cards .card-body .btn.btn1 {
    padding: 0 22px;
    line-height: 30px;
    border-radius: 2px;
    text-align: center;
    font-weight: bold;
    font-size: 13px;
    cursor: pointer;
    background-color: #f71b1b;
    color: #fff;
    transition: background 0.25s ease-in-out, color 0.25s ease-in-out, box-shadow 0.25s ease-in-out;
    width: 50%;
    margin-top: 10px;
}

.personal_profile .main_para .cards .order_table_image {
    border-radius: 20px;
}

.personal_profile .main_para .cards .card-body .store_description {
    font-weight: 400;
    font-size: 13px;
    margin-top: 10px;
    color: #565656;
}

.personal_profile .main_para .cards .card-body {
    padding-top: 0px;
    padding-bottom: 0px;
}

.account_manage_screen .col-lg-6.col-md-6.col-sm-12:nth-child(odd){
    padding-right: 0px;
}
.account_manage_screen .col-lg-6.col-md-6.col-sm-12:nth-child(even){
    padding-left: 0px;
}
.personal_profile {
    background-color: #fbfbfb;
    padding: 10px;
    margin: 20px;
    min-height: 200px;
}
.personal_profile .main_para .cards .col-md-4{
        margin: auto;
    }
.mobile_screen {
    display: none !important;
}

@media (max-width:765px) {

    .wallet {
        display: none !important;
    }
    .personal_profile .main_para .cards .card-body .btn.btn1 {
        width: 100%;
    }
    .personal_profile .main_para .cards .card-body{
        padding-right:5px;
    }
    .account_manage_screen .col-lg-6.col-md-6.col-sm-12:nth-child(odd){
    padding-right: 15px;
}
.account_manage_screen .col-lg-6.col-md-6.col-sm-12:nth-child(even){
    padding-left: 15px;
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
        <i class="fas fa-chevron-right"></i> <span>My Follow Stores</span>
    </div>
    <!-- bread-crum -->

    <!-- filter -->
    <div class="d-flex">


        <?php include('sidemenu.php') ?>


        <div class="living_room_layout">
            <div class="living_room_heading">
                <h1>My Follow Stores</h1>
            </div>


            <div class="account_manage_screen">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="personal_profile set_height">
                            <div class="main_para">
                                <div class="cards">
                                    <div class="row no-gutters flex-nowrap">
                                        <div class="col-md-4">
                                            <img src="asset/images/decor-1.jpg" class="img-fluid order_table_image"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-text store_name">Store Name</p>
                                                <p class="card-text store_description">Store Description (Lorem ipsum
                                                    dolor sit amet consectetur adipisicing elit. Repudiandae, nemo!
                                                    Corporis)</p>
                                                <button class="btn btn1">Follow</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="personal_profile set_height">
                            <div class="main_para">
                                <div class="cards">
                                    <div class="row no-gutters flex-nowrap">
                                        <div class="col-md-4">
                                            <img src="asset/images/feature-product-1.jpg"
                                                class="img-fluid order_table_image" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-text store_name">Store Name</p>
                                                <p class="card-text store_description">Store Description (Lorem ipsum
                                                    dolor sit amet consectetur adipisicing elit. Repudiandae, nemo!
                                                    Corporis)</p>
                                                <button class="btn btn1">Follow</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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