<?php include('header.php') ?>
<style>
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

.wallet_price {
    margin-top: 60px;
}

.wallet_price h1 {
    font-size: 48px;
    font-weight: 500;
    color: #333;
}

.wallet_price h1 span {
    font-size: 14px;
    font-weight: 700;
    color: #555555;
    font-style: italic;
}

.pricing {
    padding: 0% 7%;
}

.pricing .input-group {
    margin-top: 25px;
}

.pricing .input-control label {
    color: #000;
}

.pricing .input-control input {
    border: 1px solid #000;
    margin-bottom: 5px;
    border-radius: 0px !important;
    box-shadow: none;
}

.pricing .input-group .input-group-text {
    font-weight: 400;
    line-height: 1.5;
    font-size: 25px;
    color: #000;
    text-align: center;
    white-space: nowrap;
    background-color: transparent !important;
    border: 1px solid #000;
    border-right: 0px;
    border-radius: 0px !important;
}

.pricing .input-group .form-control {
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 25px;
    line-height: 1.5;
    color: #000;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #000;
    border-radius: 0;
    box-shadow: none;
}

.pricing .btn {
    background-color: #F56951;
    padding: 12px 22px;
    border-radius: 2px;
    margin: 10px 0px 50px 0px;
    cursor: pointer;
    color: #fff;
}

.wallet_transaction .wallet_table {
    margin-top: 60px;
}

.wallet_transaction .wallet_table .table tbody td,
.wallet_transaction .wallet_table .table thead th {
    border: none;
    padding: 10px;
    color: #333;
    font-weight: 400;
    font-size: 14px;
}

@media (max-width:765px) {


    .wallet_transaction .wallet_table {
        overflow: auto;
    }

    .wallet_section {
        padding: 10px;
    }

}
</style>

<hr>
<div class="bg-color">
    <?php include ('sidemenumobile.php') ?>

    <!-- bread-crum -->
    <div class="bread_crum">
        <a href="#">Home</a> <i class="fas fa-chevron-right"></i> <span>My Account</span>
        <i class="fas fa-chevron-right"></i> <span>My Wallet</span>
    </div>
    <!-- bread-crum -->

    <!-- filter -->
    <div class="d-flex">

        <?php include('sidemenu.php') ?>


        <div class="living_room_layout">
            <div class="living_room_heading">
                <h1>My Wallet</h1>
            </div>

            <div class="wallet_section">
                <div class="wallet_main_heading">
                    <img src="asset/images/wallet-logo.png" alt="">
                    <p>Your Wallet</p>
                </div>
                <div class="wallet_links">
                    <div class="d-flex">
                        <a href="#0" class="wallet_parent" data-id="wallet_status">Wallet Status</a>
                        <a href="#0" class="wallet_parent" data-id="wallet_transaction">Wallet Transaction History</a>
                        <a href="#0" class="wallet_parent" data-id="refund_request">Refund Request</a>
                        <a href="#0" class="wallet_parent" data-id="wallet_transfer">Wallet Transfer History</a>
                    </div>
                </div>
                <div class="wallet_child" id="wallet_status">
                    <div class="wallet_status">
                        <div class="wallet_price">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <h1>Rs. 0.00 <span>Your Current Wallet Balance</span></h1>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="wallet_links">
                                        <div class="d-flex">
                                            <a href="#0" class="wallet_parent_money" data-id="add_money">Add Money</a>
                                            <a href="#0" class="wallet_parent_money" data-id="transfer_money">Transfer
                                                Amount</a>
                                        </div>
                                    </div>
                                    <div class="pricing wallet_child_money" id="add_money">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rs.</span>
                                            <input type="number" class="form-control" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </div>
                                        <button class="btn" disabled>Add Money</button>
                                    </div>
                                    <div class="pricing wallet_child_money" id="transfer_money">
                                        <div class="input-control mb-3">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rs.</span>
                                            <input type="number" class="form-control" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </div>
                                        <button class="btn" disabled>Transfer Money</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wallet_child" id="wallet_transaction">
                    <div class="wallet_transaction wallet_transactions">
                        <div class="wallet_table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Order Id</th>
                                        <th scope="col">Date & Time</th>
                                        <th scope="col">Amount Added</th>
                                        <th scope="col">Amount Spend</th>
                                        <th scope="col">Amount Refunded</th>
                                        <th scope="col">Transaction Type</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">3</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
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

                <div class="wallet_child" id="refund_request">
                    <div class="wallet_transaction refund_request">
                        <div class="wallet_table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Request Id</th>
                                        <th scope="col">Order Id</th>
                                        <th scope="col">Date & Time</th>
                                        <th scope="col">Requested Amount</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">3</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
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

                <div class="wallet_child" id="wallet_transfer">
                    <div class="wallet_transaction wallet_transfer">
                        <div class="wallet_table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Transfer By</th>
                                        <th scope="col">Transfer To</th>
                                        <th scope="col">Transferred Amount</th>
                                        <th scope="col">Date & Time</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">3</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
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





        </div>

    </div>
    <!-- filter -->
</div>












<?php include('footer.php') ?>