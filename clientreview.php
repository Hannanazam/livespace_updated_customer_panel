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

.personal_profile .main_para .cards .card-body .card_main {
    display: flex;
    flex-wrap: wrap-reverse;
}

.personal_profile .main_para .cards .card-body .review_date {
    font-size: 13px;
    color: #666;
    margin-left: 10px;
}

.personal_profile .main_para .cards .card-body .store_name {
    color: #f71b1b;
    font-weight: 500;
    font-size: 20px;
    margin-left: 10px;
    /* vertical-align: text-top; */
}


/* Rating Star Widgets Style */
.rating-stars ul {
    list-style-type: none;
    padding: 0;
    margin: 10px 0px;
    -moz-user-select: none;
    -webkit-user-select: none;
}

.rating-stars ul>li.star {
    display: inline-block;
    cursor: pointer;
}

/* Idle State of the stars */
.rating-stars ul>li.star>i.fas {
    font-size: 1.5em;
    /* Change the size of the stars */
    color: #ccc;
    /* Color on idle state */
}

/* Hover state of the stars */
.rating-stars ul>li.star.hover>i.fas {
    color: #FFCC36;
}

/* Selected state of the stars */
.rating-stars ul>li.star.selected>i.fas {
    color: #FFCC36;
}

.personal_profile .main_para .cards .card-body .btn.btn2 {
    background-color: #535353 !important;
}

.personal_profile .main_para .cards .card-body .btn.btn2,
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
    width: 30%;
    margin-top: 10px;
}

/* .personal_profile .main_para .cards .modal .modal-header .close {
    color: #fff;
    opacity: 1;
} */
/* 
.personal_profile .main_para .cards .modal .modal-header {
    border-width: 0px;
    padding: 0px;
}

.personal_profile .main_para .cards .modal .modal-body {
    padding: 5px 0px;
}

.personal_profile .main_para .cards .modal .modal-content {
    background: transparent;
    border-width: 0px;
} */

.personal_profile .main_para .cards .modal .order_table_image {
    border-radius: 0%;
    width: 100%;
    height: 100%;
}

.personal_profile .main_para .cards .order_table_image {
    border-radius: 50%;
    width: 40px;
    height: 40px;
    cursor: pointer;
}

.personal_profile .main_para .cards .card-body .store_description {
    font-weight: 400;
    font-size: 13px;
    color: #565656;
    float: left;
}

.personal_profile .main_para .cards .card-body {
    padding: 0px;
}

.account_manage_screen .col-lg-6.col-md-6.col-sm-12:nth-child(odd) {
    padding-right: 0px;
}

.account_manage_screen .col-lg-6.col-md-6.col-sm-12:nth-child(even) {
    padding-left: 0px;
}

.personal_profile {
    background-color: #fbfbfb;
    padding: 10px;
    margin: 20px;
    min-height: 200px;
}

.personal_profile .main_para .cards .col-md-4 {
    margin: auto;
}

.mobile_screen {
    display: none !important;
}

.font_size_set {
    font-size: 13px;
}

@media (max-width:765px) {

    .wallet {
        display: none !important;
    }

    .personal_profile .main_para .cards .card-body .btn.btn1 {
        width: 100%;
    }

    .personal_profile .main_para .cards .card-body {
        padding-right: 5px;
    }

    .account_manage_screen .col-lg-6.col-md-6.col-sm-12:nth-child(odd) {
        padding-right: 15px;
    }

    .account_manage_screen .col-lg-6.col-md-6.col-sm-12:nth-child(even) {
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
        <i class="fas fa-chevron-right"></i> <span>Client Reviews</span>
    </div>
    <!-- bread-crum -->

    <!-- filter -->
    <div class="d-flex">


        <?php include('sidemenu.php') ?>


        <div class="living_room_layout">
            <div class="living_room_heading">
                <h1>Client Reviews</h1>
            </div>


            <div class="account_manage_screen">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="personal_profile set_height">
                            <div class="main_para">
                                <div class="cards">
                                    <div class="row no-gutters flex-nowrap">

                                        <div class="col-md-12">
                                            <div class="card-body">
                                                <div class="card_main">
                                                    <img src="asset/images/feature-product-3.jpg"
                                                        class="img-fluid order_table_image" alt="...">
                                                    <div class="sub">
                                                        <p class="card-text store_name">Muhammad Hannan</p>
                                                        <p class="card-text review_date">13/04/2000</p>
                                                    </div>
                                                </div>



                                                <div class='rating-widget'>

                                                    <!-- Rating Stars Box -->
                                                    <div class='rating-stars'>
                                                        <ul id='stars'>
                                                            <li class='star' title='Poor' data-value='1'>
                                                                <i class='fas fa-star fa-fw'></i>
                                                            </li>
                                                            <li class='star' title='Fair' data-value='2'>
                                                                <i class='fas fa-star fa-fw'></i>
                                                            </li>
                                                            <li class='star' title='Good' data-value='3'>
                                                                <i class='fas fa-star fa-fw'></i>
                                                            </li>
                                                            <li class='star' title='Excellent' data-value='4'>
                                                                <i class='fas fa-star fa-fw'></i>
                                                            </li>
                                                            <li class='star' title='WOW!!!' data-value='5'>
                                                                <i class='fas fa-star fa-fw'></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>



                                                <p class="card-text store_description">Review Description ( Recently
                                                    moved to our new house and on recommendation of my friend i tried
                                                    Rennovate. I must say these guys did a great job and im very much
                                                    satisfied )</p>
                                                <a href="#0" class="font_size_set" data-toggle="modal"
                                                    data-target="#exampleModal1">Edit Review</a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal1" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title">Edit Review</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class='rating-widget'>

                                                                    <!-- Rating Stars Box -->
                                                                    <div class='rating-stars'>
                                                                        <ul id='stars'>
                                                                            <li class='star' title='Poor'
                                                                                data-value='1'>
                                                                                <i class='fas fa-star fa-fw'></i>
                                                                            </li>
                                                                            <li class='star' title='Fair'
                                                                                data-value='2'>
                                                                                <i class='fas fa-star fa-fw'></i>
                                                                            </li>
                                                                            <li class='star' title='Good'
                                                                                data-value='3'>
                                                                                <i class='fas fa-star fa-fw'></i>
                                                                            </li>
                                                                            <li class='star' title='Excellent'
                                                                                data-value='4'>
                                                                                <i class='fas fa-star fa-fw'></i>
                                                                            </li>
                                                                            <li class='star' title='WOW!!!'
                                                                                data-value='5'>
                                                                                <i class='fas fa-star fa-fw'></i>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlTextarea1">Edit
                                                                        Review</label>
                                                                    <textarea class="form-control"
                                                                        id="exampleFormControlTextarea1"
                                                                        rows="3">Review Description ( Recently moved to our new house and on recommendation of my friend i tried Rennovate. I must say these guys did a great job and im very much satisfied )</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn1">Save
                                                                    changes</button>
                                                                <button type="button" class="btn btn2"
                                                                    data-dismiss="modal">Close</button>
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
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="personal_profile set_height">
                            <div class="main_para">
                                <div class="cards">
                                    <div class="row no-gutters flex-nowrap">

                                        <div class="col-md-12">
                                            <div class="card-body">
                                                <div class="card_main">
                                                    <img src="asset/images/feature-product-2.jpg"
                                                        class="img-fluid order_table_image" alt="...">
                                                    <div class="sub">
                                                        <p class="card-text store_name">Adeel Ahmed</p>
                                                        <p class="card-text review_date">26/11/2010</p>
                                                    </div>
                                                </div>


                                                <div class='rating-widget'>

                                                    <!-- Rating Stars Box -->
                                                    <div class='rating-stars'>
                                                        <ul id='stars'>
                                                            <li class='star' title='Poor' data-value='1'>
                                                                <i class='fas fa-star fa-fw'></i>
                                                            </li>
                                                            <li class='star' title='Fair' data-value='2'>
                                                                <i class='fas fa-star fa-fw'></i>
                                                            </li>
                                                            <li class='star' title='Good' data-value='3'>
                                                                <i class='fas fa-star fa-fw'></i>
                                                            </li>
                                                            <li class='star' title='Excellent' data-value='4'>
                                                                <i class='fas fa-star fa-fw'></i>
                                                            </li>
                                                            <li class='star' title='WOW!!!' data-value='5'>
                                                                <i class='fas fa-star fa-fw'></i>
                                                            </li>
                                                        </ul>
                                                    </div>



                                                </div>
                                                <p class="card-text store_description">Review Description ( I got a
                                                    dining table and 3 seater sofa made from renovate. I loved the
                                                    quality and their service. )</p>
                                                <a href="#0" class="font_size_set" data-toggle="modal"
                                                    data-target="#exampleModal">Edit Review</a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title">Edit Review</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                             <div class="modal-body">
                                                                <div class='rating-widget'>

                                                                    <!-- Rating Stars Box -->
                                                                    <div class='rating-stars'>
                                                                        <ul id='stars'>
                                                                            <li class='star' title='Poor'
                                                                                data-value='1'>
                                                                                <i class='fas fa-star fa-fw'></i>
                                                                            </li>
                                                                            <li class='star' title='Fair'
                                                                                data-value='2'>
                                                                                <i class='fas fa-star fa-fw'></i>
                                                                            </li>
                                                                            <li class='star' title='Good'
                                                                                data-value='3'>
                                                                                <i class='fas fa-star fa-fw'></i>
                                                                            </li>
                                                                            <li class='star' title='Excellent'
                                                                                data-value='4'>
                                                                                <i class='fas fa-star fa-fw'></i>
                                                                            </li>
                                                                            <li class='star' title='WOW!!!'
                                                                                data-value='5'>
                                                                                <i class='fas fa-star fa-fw'></i>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlTextarea1">Edit
                                                                        Review</label>
                                                                    <textarea class="form-control"
                                                                        id="exampleFormControlTextarea1"
                                                                        rows="3">Review Description ( I got a dining table and 3 seater sofa made from renovate. I loved the quality and their service. )</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn1">Save
                                                                    changes</button>
                                                                <button type="button" class="btn btn2"
                                                                    data-dismiss="modal">Close</button>
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

            </div>
        </div>




    </div>

</div>
<!-- filter -->
</div>


<script>
$(document).ready(function() {

    /* 1. Visualizing things on Hover - See next part for action on click */
    $('#stars li').on('mouseover', function() {
        var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

        // Now highlight all the stars that's not after the current hovered star
        $(this).parent().children('li.star').each(function(e) {
            if (e < onStar) {
                $(this).addClass('hover');
            } else {
                $(this).removeClass('hover');
            }
        });

    }).on('mouseout', function() {
        $(this).parent().children('li.star').each(function(e) {
            $(this).removeClass('hover');
        });
    });


    /* 2. Action to perform on click */
    $('#stars li').on('click', function() {
        var onStar = parseInt($(this).data('value'), 10); // The star currently selected
        var stars = $(this).parent().children('li.star');

        for (i = 0; i < stars.length; i++) {
            $(stars[i]).removeClass('selected');
        }

        for (i = 0; i < onStar; i++) {
            $(stars[i]).addClass('selected');
        }

        // JUST RESPONSE (Not needed)
        var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
        var msg = "";
        if (ratingValue > 1) {
            msg = "Thanks! You rated this " + ratingValue + " stars.";
        } else {
            msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
        }
        responseMessage(msg);

    });


});


function responseMessage(msg) {
    $('.success-box').fadeIn(200);
    $('.success-box div.text-message').html("<span>" + msg + "</span>");
}
</script>
<?php include('footer.php') ?>