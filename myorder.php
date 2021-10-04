<?php include('header.php') ?>
<style>
.personal_profile .main_para .cards .card-body .card-text {
    margin-bottom: 6px;
    /* font-size:12px; */
}

.personal_profile .main_para .cards .card-body {
    padding-top: 0px;
    padding-bottom: 0px;
}

.personal_profile {
    background-color: #fbfbfb;
    padding: 10px;
    min-height: 200px;
}

.personal_profile.order_invoice .main_para {
    display: flex;
    justify-content: space-between;
}

.personal_profile.order_invoice {
    margin: 0px;
    min-height: auto;
    background: #f3f3f3;
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
    margin-bottom: 0px;
}

.order_section {
    margin: 100px;
}

.order_section .btn {
    padding: 0 30px;
    line-height: 48px;
    border-radius: 2px;
    text-align: center;
    font-weight: bold;
    font-size: 14px;
    cursor: pointer;
    background-color: #f71b1b;
    color: #fff;
    transition: background 0.25s ease-in-out, color 0.25s ease-in-out, box-shadow 0.25s ease-in-out;
}

.badges {
    height: 25px;
    width: 20px;
}

.wallet_section {
    padding: 30px;
}

.wallet_main_heading {
    display: flex;
}

.wallet_main_heading p {
    margin-left: 10px;
    font-size: 28px;
    color: #333333;
    font-weight: 600;
    margin-bottom: 0rem;
}

.wallet_links {
    margin-top: 35px;
    border-bottom: 1px solid #E1E1E1;
}

.wallet_links a {
    font-weight: 700;
    color: #555;
    padding: 5px 15px;
    font-size: 14px;
    border-bottom: 3px solid transparent;
    margin-bottom: 5px;
}

.wallet_links a.active {
    color: #333;
    border-bottom: 3px solid #F56951;
}

.icon {
    margin-left: 0px;
}

@media (max-width:765px) {
    .order_section {
        margin: 100px 0px;
    }

    .icon {
        margin-left: 0px;
    }

    .wallet_section {
        padding: 10px
    }

}
</style>

<hr>
<div class="bg-color">
    <?php include ('sidemenumobile.php') ?>

    <!-- bread-crum -->
    <div class="bread_crum">
        <a href="#">Home</a> <i class="fas fa-chevron-right"></i> <span>My Account</span>
        <i class="fas fa-chevron-right"></i> <span>My Orders</span>
    </div>
    <!-- bread-crum -->

    <!-- filter -->
    <div class="d-flex">

        <?php include('sidemenu.php') ?>


        <div class="living_room_layout">
            <div class="living_room_heading">
                <h1>My Orders</h1>
            </div>

            <div class="wallet_section">
                <!-- <div class="wallet_main_heading">
         <img src="asset/images/wallet-logo.png" alt=""><p>Your Wallet</p>
     </div> -->
                <div class="wallet_links">
                    <div class="d-flex">
                        <a href="#0" class="wallet_parent" data-id="wallet_status">All</a>
                        <a href="#0" class="wallet_parent" data-id="wallet_transaction">To Pay</a>
                        <a href="#0" class="wallet_parent" data-id="refund_request">To Ship</a>
                        <a href="#0" class="wallet_parent" data-id="wallet_transfer">To Receive</a>
                    </div>
                </div>
                <div class="wallet_child" id="wallet_status">
                    <div class="account_manage_screen">
                        <div class="personal_profile order_invoice">
                            <div class="main_para">
                                <p>Order #108524379458970 <br><span class="color-light">Placed on 23 Oct 2019
                                        16:34:15</span></p>
                                <p class="float-right"><span class="color-light">Total:</span> Rs. 5,599</p>
                            </div>
                        </div>
                        <div class="personal_profile set_height">
                            <div class="main_para">
                                <div class="cards mb-3">
                                    <div class="row no-gutters flex-nowrap">
                                        <div class="col-md-2">
                                            <img src="asset/images/decor-1.jpg" class="img-fluid order_table_image"
                                                alt="...">
                                        </div>
                                        <div class="col-md-10">
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
                    </div>
                </div>
                <div class="wallet_child" id="wallet_transaction">
                    <div class="text-center order_section">
                        <div class="position-relative">
                            <svg focusable="false" width="46" height="46" class="icon icon--address" viewBox="0 0 46 45"
                                role="presentation">
                                <g transform="translate(1 1)" stroke="currentColor" stroke-width="2" fill="none"
                                    fill-rule="evenodd" stroke-linecap="square">
                                    <path d="M38 9.5L44 8v30l-16 4-12-4-16 4V12l6-1.5"></path>
                                    <path
                                        d="M32 10c0 6.172-10 16.25-10 16.25S12 16.172 12 10c0-6.328 5.168-10 10-10s10 3.672 10 10z">
                                    </path>
                                    <circle cx="22" cy="10" r="3"></circle>
                                </g>
                            </svg>
                            <span
                                class="position-absolute text-white top-0 start-100 translate-middle badges rounded-pill bg-danger">
                                0
                            </span>
                        </div>
                        <p>There are no orders placed yet.</p>
                        <button class="btn">Continue Shopping</button>
                    </div>
                </div>

                <div class="wallet_child" id="refund_request">
                    <div class="text-center order_section">
                        <div class="position-relative">
                            <svg focusable="false" width="46" height="46" class="icon icon--address" viewBox="0 0 46 45"
                                role="presentation">
                                <g transform="translate(1 1)" stroke="currentColor" stroke-width="2" fill="none"
                                    fill-rule="evenodd" stroke-linecap="square">
                                    <path d="M38 9.5L44 8v30l-16 4-12-4-16 4V12l6-1.5"></path>
                                    <path
                                        d="M32 10c0 6.172-10 16.25-10 16.25S12 16.172 12 10c0-6.328 5.168-10 10-10s10 3.672 10 10z">
                                    </path>
                                    <circle cx="22" cy="10" r="3"></circle>
                                </g>
                            </svg>
                            <span
                                class="position-absolute text-white top-0 start-100 translate-middle badges rounded-pill bg-danger">
                                0
                            </span>
                        </div>
                        <p>There are no orders placed yet.</p>
                        <button class="btn">Continue Shopping</button>
                    </div>
                </div>

                <div class="wallet_child" id="wallet_transfer">
                    <div class="text-center order_section">
                        <div class="position-relative">
                            <svg focusable="false" width="46" height="46" class="icon icon--address" viewBox="0 0 46 45"
                                role="presentation">
                                <g transform="translate(1 1)" stroke="currentColor" stroke-width="2" fill="none"
                                    fill-rule="evenodd" stroke-linecap="square">
                                    <path d="M38 9.5L44 8v30l-16 4-12-4-16 4V12l6-1.5"></path>
                                    <path
                                        d="M32 10c0 6.172-10 16.25-10 16.25S12 16.172 12 10c0-6.328 5.168-10 10-10s10 3.672 10 10z">
                                    </path>
                                    <circle cx="22" cy="10" r="3"></circle>
                                </g>
                            </svg>
                            <span
                                class="position-absolute text-white top-0 start-100 translate-middle badges rounded-pill bg-danger">
                                0
                            </span>
                        </div>
                        <p>There are no orders placed yet.</p>
                        <button class="btn">Continue Shopping</button>
                    </div>
                </div>
            </div>





        </div>

    </div>
    <!-- filter -->
</div>












<?php include('footer.php') ?>