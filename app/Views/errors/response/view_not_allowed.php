<?php

$this->extend("layouts/layout_main");
$this->section("contents");

navbar_before_login($nav_title);
?>

<div class="container">
    <!-- start content here -->
    <div class="grid ">
        <div class="row d-flex flex-column flex-justify-center h-vh-50 mt-10">
            <div class="cell-5 mx-auto block-shadow">
                <h1><small><span class="icon mif-blocked"></span> Error 405: Not Allowed</small></h1>
                <hr class="thin" />
                <p class="remark alert text-center">
                    Maaf, Sedang terjadi Kesalahan dalam mengakses Layanan(Services)! <br />
                    Kontak <strong>Administrator</strong>
                </p>
            </div>
        </div>
    </div>
    <!-- end content here -->
</div>

<?php
$this->endSection();
