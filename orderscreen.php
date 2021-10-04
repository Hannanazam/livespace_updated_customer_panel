<?php include('header.php') ?>

<style>
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
    <div class="mobile_screen">
        <div class="toggle_button">
            <button class="btn toggle_btn">My Order <i class="fas fa-chevron-down float-right"></i></button>
        </div>
    </div>
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
                <h1>My orders</h1>
            </div>

            <div class="text-center order_section">
                <div class="position-relative">
                    <svg focusable="false" width="46" height="46" class="icon icon--package" viewBox="0 0 46 46"
                        role="presentation">
                        <g stroke="currentColor" stroke-width="2" fill="none" fill-rule="evenodd">
                            <path d="M11 8l24 14m10-6L25 28 1 14m24 14v16"></path>
                            <path stroke-linecap="square" d="M45 16v14L25 44 1 30V14L21 2z"></path>
                        </g>
                    </svg>
                    <span
                        class="position-absolute text-white top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        0
                    </span>
                </div>
                <p>No orders yet</p>
                <button class="btn">Make your first order</button>
            </div>





        </div>

    </div>
    <!-- filter -->
</div>



<?php include('footer.php') ?>