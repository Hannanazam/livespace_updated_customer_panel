<style>
.mobile_screen {
    display: none !important;
}

@media (max-width:765px) {

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



<div class="mobile_screen">
    <div class="toggle_button">
        <button class="btn toggle_btn">My Wallet <i class="fas fa-chevron-down float-right mt-1"></i></button>
    </div>
</div>