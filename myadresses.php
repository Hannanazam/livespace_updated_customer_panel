<?php include('header.php') ?>

<style>
.small_text {
    color: #565656 !important;
    font-size: 13px !important;
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

.wallet_transaction .wallet_table {
    margin-top: 20px;
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

@media (max-width:765px) {
    .wallet_transaction .wallet_table {
        overflow: auto;
    }

    .wallet_section {
        padding: 10px;
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
        <i class="fas fa-chevron-right"></i> <span>My addresses</span>
    </div>
    <!-- bread-crum -->

    <!-- filter -->
    <div class="d-flex">


        <?php include('sidemenu.php') ?>


        <div class="living_room_layout">
            <div class="living_room_heading">
                <h1>My addresses</h1>
            </div>

            <div class="wallet_section">
                <div class="wallet_child" id="wallet_transaction">
                    <div class="wallet_transaction wallet_transactions">
                        <div class="wallet_table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Full name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Region</th>
                                        <th scope="col" rowspan="2">Phone Number</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">hannanazam</td>
                                        <td>h-77/9 near nishtar square</td>
                                        <td>Sindh - Karachi - Malir - Malir</td>
                                        <td>3131087811</td>
                                        <td class="small_text">Default Shipping Address <br> Default Billing Address
                                        </td>
                                        <td><a href="editaddressscreen.php" class="ml-3"> EDIT</a></td>
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


            <!-- <div class="text-center order_section">
      <div class="position-relative">
        <svg focusable="false" width="46" height="46" class="icon icon--address" viewBox="0 0 46 45" role="presentation">
            <g transform="translate(1 1)" stroke="currentColor" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square">
              <path d="M38 9.5L44 8v30l-16 4-12-4-16 4V12l6-1.5"></path>
              <path d="M32 10c0 6.172-10 16.25-10 16.25S12 16.172 12 10c0-6.328 5.168-10 10-10s10 3.672 10 10z"></path>
              <circle cx="22" cy="10" r="3"></circle>
            </g>
          </svg>
        <span class="position-absolute text-white top-0 start-100 translate-middle badge rounded-pill bg-danger">
          0
        </span>
      </div>
      <p>No addresses yet</p>
      <button class="btn">Add your first address</button>
</div> -->





        </div>

    </div>
    <!-- filter -->
</div>

<?php include('footer.php') ?>