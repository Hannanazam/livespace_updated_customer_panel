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

.personal_profile .main_para .cards .card-body {
    padding-top: 0px;
    padding-bottom: 0px;
}

.personal_profile .modal .modal-footer .btn.btn-1 {
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

.personal_profile .modal .modal-footer .btn.btn-2,
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

.personal_profile.order_invoice .main_para {
    display: flex;
    justify-content: space-between;
}

.personal_profile.order_invoice {
    margin: 0px;
    min-height: auto;
}

.personal_profile.order_invoice .main_para .float-right span {
    font-size: 18px;
}

.personal_profile.order_invoice .main_para .float-right {
    font-size: 18px;
}

.personal_profile.order_invoice .main_para span {
    font-size: 13px
}

.personal_profile.order_invoice .main_para p {
    font-size: 13px;
    color: #000;
    margin-bottom: 10px;
}

.wallet_section {
    padding: 0px;
}

.personal_profile.address_option {
    margin: 20px 20px 0px 0px;
}

.personal_profile {
    background-color: #fbfbfb;
    padding: 10px;
    margin: 20px;
    min-height: 200px;
}

.mobile_screen {
    display: none !important;
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
}
</style>

<hr>
<div class="bg-color">
    <?php include('sidemenumobile.php') ?>

    <!-- bread-crum -->
    <div class="bread_crum">
        <a href="#">Home</a> <i class="fas fa-chevron-right"></i> <span>My Account</span>
        <i class="fas fa-chevron-right"></i> <span>Order Details</span>
    </div>
    <!-- bread-crum -->

    <!-- filter -->
    <div class="d-flex">


        <?php include('sidemenu.php') ?>


        <div class="living_room_layout">
            <div class="living_room_heading">
                <h1>Order Details</h1>
            </div>


            <div class="account_manage_screen">
                <div class="personal_profile order_invoice">
                    <div class="main_para">
                        <p>Order #108524379458970 <br><span class="color-light">Placed on 23 Oct 2019 16:34:15</span>
                        </p>
                        <p class="float-right"><span class="color-light">Total:</span> Rs. 5,599</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="personal_profile set_height">
                            <div class="main_para">
                                <div class="cards mb-3">
                                    <div class="row no-gutters flex-nowrap">
                                        <div class="col-md-4">
                                            <img src="asset/images/decor-1.jpg" class="img-fluid order_table_image"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-text">Original BM 800 Condenser Microphone Best Quality
                                                    HD Condenser Microphone High Quality</p>
                                                <p class="card-text"><small class="text-muted">No Warranty</small></p>
                                                <p class="card-text">Rs. 5,500</p>
                                                <p class="card-text">Qty: 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="personal_profile set_height">
                            <div class="main_para">
                                <p>Shipping Address</p>
                                <p class="shipping_address">Sindh, Karachi - Malir, Malir, h-77/9 near nishtar square
                                </p>
                            </div>
                        </div>
                        <div class="personal_profile set_height">
                            <div class="main_para">
                                <p>Billing Address</p>
                                <p class="shipping_address">Sindh, Karachi - Malir, Malir, h-77/9 near nishtar square
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="personal_profile set_height">
                            <div class="main_para">
                                <p>Total Summary</p>
                                <p class="shipping_address">Subtotal <span class="float-right">Rs. 5,500</span></p>
                                <p class="shipping_address">Shipping Fee <span class="float-right">Rs. 99</span></p>
                                <hr>
                                <p class="shipping_address">Total <span class="float-right"><strong>Rs.
                                            5,599</strong></span></p>
                                <p class="my-3 shipping_address">
                                    Paid by Cash on Delivery
                                </p>
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