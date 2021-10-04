<?php include('header.php') ?>

<style>
.wallet_transaction .wallet_table {
    margin-top: 60px;
}

.wallet_transaction .wallet_table .table tbody {
    background: #fbfbfb;
}

.wallet_transaction .wallet_table .table thead {
    background: #f3f3f3;
}

.wallet_transaction .wallet_table .table tbody td,
.wallet_transaction .wallet_table .table thead th {
    border: none;
    padding: 10px;
    color: #333;
    font-weight: 400;
    font-size: 14px;
    vertical-align: middle;
}

.wallet_transaction .wallet_table .order_table_image {
    max-width: 50px;
    max-height: 50px;
}

.wallet_transaction .wallet_table {
    margin-top: 0px;
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

.personal_profile .modal .modal-footer {
    border: 0px;
    padding: .5rem;
}

.shipping_address {
    font-size: 12px !important;
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

.personal_profile .modal-header {
    padding: .5rem;
    border: 0px;
}

.personal_profile .modal-body {
    padding: .5rem;
}

.personal_profile .modal-content {
    border-radius: 0px;
}

.personal_profile p:first-child a {
    font-size: 13px;
}

.personal_profile p:first-child {
    font-size: 16px;
}

.personal_profile p {
    font-size: 15px;
    color: #565656;
    margin-bottom: 10px;
}

.wallet_section {
    padding: 0px;
}

.col-md-5 {
    padding-right: 0px;
}

.col-md-7 {
    padding-left: 0px;
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

@media (max-width:765px) {


    .living_room_layout.w-100 {
        margin: 0px;
    }

    .col-md-7,
    .col-md-5 {
        padding: 0px 15px;
    }

    .personal_profile.address_option {
        margin: 20px;
    }

    .wallet_transaction .wallet_table {
        overflow: auto;
    }

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
        <i class="fas fa-chevron-right"></i> <span>Manage My Account</span>
    </div>
    <!-- bread-crum -->

    <!-- filter -->
    <div class="d-flex">


        <?php include('sidemenu.php') ?>


        <div class="living_room_layout">
            <div class="living_room_heading">
                <h1>Manage My Account</h1>
            </div>


            <div class="account_manage_screen">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="personal_profile">
                            <div class="main_para">
                                <p>Personal Profile | <a href="editprofilescreen.php">EDIT</a></p>
                                <p>hannanazam</p>
                                <p>hannanazam200@gmail.com</p>

                                <a href="#0" data-toggle="modal" data-target="#staticBackdrop">
                                    Subscribe to our newsletter
                                </a>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <p class="modal-title" id="staticBackdropLabel">Newsletter Subscription
                                                </p>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p> I have read and understood <a href="">Privacy Policy</a></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-1"
                                                    data-dismiss="modal">Cancle</button>
                                                <button type="button" class="btn btn-2">SUBSCRIBE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="personal_profile address_option">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="main_para">
                                        <p>Address Book | <a href="myadresses.php">EDIT</a></p>
                                        <p class="shipping_address">DEFAULT SHIPPING ADDRESS</p>
                                        <p><b>hannanazam</b></p>
                                        <p class="shipping_address">h-77/9 near nishtar square Sindh - Karachi - Malir -
                                            Malir (+92) 3131087811</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="main_para">
                                        <p class="invisible">Address Book | <a href="">EDIT</a></p>
                                        <p class="shipping_address">DEFAULT SHIPPING ADDRESS</p>
                                        <p><b>hannanazam</b></p>
                                        <p class="shipping_address">h-77/9 near nishtar square Sindh - Karachi - Malir -
                                            Malir (+92) 3131087811</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="living_room_layout w-100">
                    <div class="living_room_heading">
                        <h1>Recent Orders</h1>
                    </div>



                    <div class="wallet_section">
                        <div class="wallet_child" id="wallet_transaction">
                            <div class="wallet_transaction wallet_transactions">
                                <div class="wallet_table">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Order # </th>
                                                <th scope="col">Placed On</th>
                                                <th scope="col">Items</th>
                                                <th scope="col" rowspan="2">Total</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">108524379458970</td>
                                                <td>23/10/2019</td>
                                                <td><img src="asset/images/decor-1.jpg"
                                                        class="img-fluid order_table_image" alt=""></td>
                                                <td>Rs. 5,599</td>
                                                <td><a href="manageorder.php" class="ml-3"> Detail</a></td>
                                            </tr>

                                            <tr>
                                                <td colspan="8" style="font-size: 14px;
                              font-weight: 700;
                              color: #999;">no record found</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



                    </div>





                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- </div> -->



                </div>
            </div>
        </div>




    </div>

</div>
<!-- filter -->
</div>

<?php include('footer.php') ?>