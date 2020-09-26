<?php

function navbar_before_login($nav_title)
{ ?>
    <div data-role="appbar" data-expand-point="md">
        <a href="<?= base_url(); ?>" class="brand no-hover">
            <span style="width: 75px;">
                <strong><span class="icon mif-list"></span> E-RAPAT</strong>
            </span>
        </a>
        <ul class="app-bar-menu">
            <?php if ($nav_title == 'calendar') : ?>
                <li><a href="<?= base_url(); ?>" class="text-upper active text-bolds"><span class="icon mif-calendar"></span> calendar</a></li>
                <li><a href="<?= base_url('documentation'); ?>" class=" text-upper"><span class="icon mif-file-empty"></span> Documentation</a></li>
            <?php else : ?>
                <li><a href="<?= base_url(); ?>" class="text-upper"><span class="icon mif-calendar"></span> calendar</a></li>
                <li><a href="<?= base_url('documentation'); ?>" class=" text-upper active text-bolds"><span class="icon mif-file-empty"></span> Documentation</a></li>
            <?php endif; ?>
        </ul>
        <div class="app-bar-container ml-auto d-none d-flex-md">
            <a href="<?= base_url('login'); ?>" class="button button-outline-transparent text-upper" style="margin-right: 30px;"><span class="icon mif-fingerprint"></span> login</a>
        </div>
    </div>
<?php
}

function navbar_after_login()
{ ?>
    <div data-role="appbar" data-expand-point="md">
        <a href="<?= base_url(); ?>" class="brand no-hover">
            <span style="width: 75px;">
                <strong><span class="icon mif-list"></span> E-RAPAT</strong>
            </span>
        </a>
        <ul class="app-bar-menu">
            <li>
                <a href="#" class="dropdown-toggle text-upper"><span class="icon mif-cabinet"></span> Master Data</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="#"> Data Akun</a></li>
                    <li class="divider bg-lightGray"></li>
                    <li><a href="#"> Data Sekretariat</a></li>
                    <li><a href="#"> Data Bagian</a></li>
                    <li><a href="#"> Skype</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown-toggle text-upper"><span class="icon mif-file-empty"></span> Management</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="#"> Data Akun</a></li>
                    <li class="divider bg-lightGray"></li>
                    <li><a href="#"> Data Sekretariat</a></li>
                    <li><a href="#"> Data Bagian</a></li>
                    <li><a href="#"> Skype</a></li>
                </ul>
            </li>
            <li><a href="#" class=" text-upper">Documentation</a></li>
        </ul>
        <div class="app-bar-container ml-auto d-none d-flex-md">
            <a href="#" class="dropdown-toggle text-upper" style="margin-right: 30px;"><span class="icon mif-user-check"></span> Ivandi Djoh Gah</a>
            <ul class="d-menu" data-role="dropdown">
                <li><a href="#"> Profil</a></li>
                <li class="divider bg-lightGray"></li>
                <li><a href="#"> Ganti Password</a></li>
                <li><a href="#"> Logout</a></li>
            </ul>
        </div>
    </div>
<?php
}

?>