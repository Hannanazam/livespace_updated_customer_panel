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
}
</style>

<hr>
<div class="bg-color">
    <?php include ('sidemenumobile.php') ?>

    <!-- bread-crum -->
    <div class="bread_crum">
        <a href="#">Home</a> <i class="fas fa-chevron-right"></i> <span>My Account</span>
        <i class="fas fa-chevron-right"></i> <span>My Return</span>
    </div>
    <!-- bread-crum -->

    <!-- filter -->
    <div class="d-flex">

        <?php include('sidemenu.php') ?>


        <div class="living_room_layout">
            <div class="living_room_heading">
                <h1>My Return</h1>
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
                    <p>There are no return yet.</p>
                    <button class="btn">Continue Shopping</button>
                </div>
            </div>

        </div>





    </div>

</div>
<!-- filter -->
</div>












<?php include('footer.php') ?>