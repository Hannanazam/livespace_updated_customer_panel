<?php include('header.php') ?>

<style>
.account_manage_screen .profile_info {
    margin: 20px;
}

.account_manage_screen .profile_info .large_para select:focus-visible {
    outline: none;
}

.account_manage_screen .profile_info .large_para select {
    width: 50%;
    padding: 5px 0px;
    border: 1px solid #fff;
    background: #f3f3f3;
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

    .account_manage_screen .profile_info .large_para input {
        width: 100%;
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
        <i class="fas fa-chevron-right"></i> <span>Edit profile</span>
    </div>
    <!-- bread-crum -->

    <!-- filter -->
    <div class="d-flex">


        <?php include('sidemenu.php') ?>


        <div class="living_room_layout">
            <div class="living_room_heading">
                <h1>Edit profile</h1>
            </div>


            <div class="account_manage_screen">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="profile_info">
                            <p class="small_para">Full Name</p>
                            <p class="large_para"><input type="text" class="p-2" value="johndoe"></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="profile_info">
                            <p class="small_para">Email Address | <a href="emailverify.php">Change</a></p>
                            <p class="large_para">johndoe100@gmail.com</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="profile_info">
                            <p class="small_para">Mobile | <a href="emailverify.php">Change</a></p>
                            <p class="large_para">+92 *******811</p>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="profile_info">
                            <p class="small_para">Birthday</p>
                            <p class="large_para d-flex">
                                <select>
                                    <option class="d-none">Month</option>
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                                <select>
                                    <option class="d-none">Day</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                </select>
                                <select>
                                    <option class="d-none">Year</option>
                                    <option>2021</option>
                                    <option>2020</option>
                                    <option>2019</option>
                                    <option>2018</option>
                                    <option>2017</option>
                                    <option>2016</option>
                                    <option>2015</option>
                                    <option>2014</option>
                                    <option>2013</option>
                                    <option>2012</option>
                                    <option>2011</option>
                                    <option>2010</option>
                                    <option>2009</option>
                                    <option>2008</option>
                                    <option>2007</option>
                                    <option>2006</option>
                                    <option>2005</option>
                                    <option>2004</option>
                                    <option>2003</option>
                                    <option>2002</option>
                                    <option>2001</option>
                                    <option>2000</option>
                                    <option>1999</option>
                                    <option>1998</option>
                                    <option>1997</option>
                                    <option>1996</option>
                                    <option>1995</option>
                                    <option>1994</option>
                                    <option>1993</option>
                                    <option>1992</option>
                                    <option>1991</option>
                                    <option>1990</option>
                                    <option>1989</option>
                                    <option>1988</option>
                                    <option>1987</option>
                                    <option>1986</option>
                                    <option>1985</option>
                                    <option>1984</option>
                                    <option>1983</option>
                                    <option>1982</option>
                                    <option>1981</option>
                                    <option>1980</option>
                                    <option>1979</option>
                                    <option>1978</option>
                                    <option>1977</option>
                                    <option>1976</option>
                                    <option>1975</option>
                                    <option>1974</option>
                                    <option>1973</option>
                                    <option>1972</option>
                                    <option>1971</option>
                                    <option>1970</option>
                                    <option>1969</option>
                                    <option>1968</option>
                                    <option>1967</option>
                                    <option>1966</option>
                                    <option>1965</option>
                                    <option>1964</option>
                                    <option>1963</option>
                                    <option>1962</option>
                                    <option>1961</option>
                                    <option>1960</option>
                                </select>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">

                        <div class="profile_info">
                            <p class="small_para">Gender</p>
                            <p class="large_para">
                                <select>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="profile_info my-5">
                    <a href="#0" data-toggle="modal" data-target="#staticBackdrop">
                        Subscribe to our newsletter
                    </a>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="modal-title" id="staticBackdropLabel">Newsletter Subscription</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p> I have read and understood <a href="">Privacy Policy</a></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-1" data-dismiss="modal">Cancle</button>
                                    <button type="button" class="btn btn-2">SUBSCRIBE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="profile_info">
                        <button type="button" class="btn btn1">Edit Profile</button>
                        <button type="button" class="btn btn1">Change Password</button>
                    </div>
                </div>
            </div>
        </div>





    </div>
    <!-- filter -->
</div>

<?php include('footer.php') ?>