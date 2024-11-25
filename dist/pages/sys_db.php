<?php
/*
*******************************************************************************************************************
* Warning!!!, Tidak untuk diperjual belikan!, Cukup pakai sendiri atau share kepada orang lain secara gratis
*******************************************************************************************************************
* Dibuat oleh @Maizil https://t.me/maizil41
*******************************************************************************************************************
* © 2024 Mutiara-Net By @Maizil
*******************************************************************************************************************
*/
require './auth.php';
include './data/backup.php';
include './data/radius_log.php';
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>RadiusMonitor | Database</title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"><!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="../../dist/css/adminlte.css"><!--end::Required Plugin(AdminLTE)--><!-- apexcharts -->
    <link rel="stylesheet" href="../../dist/css/logo.css">
    <link rel="stylesheet" href="../../dist/css/bootstrap.css">
    <link rel="icon" href="../../dist/assets/img/favicon.svg" />
</head> <!--end::Head--> <!--begin::Body-->

        <?php include ("layout/header.php"); ?>
        <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
            <div class="sidebar-brand"><a href="./index.php" class="brand-link"><img src="../../dist/assets/img/mutiara.svg" alt="Logo" class="brand-image opacity-75 shadow"><span class="brand-text fw-light">Radius Monitor</span></a></div>
            <div class="sidebar-wrapper">
                <nav class="mt-2"> <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                        <li class="nav-item"> <a href="./index.php" class="nav-link"> <i class="nav-icon bi tabler--device-laptop"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi fa6-solid--user-large"></i>
                                <p>
                                    Users
                                    <i class="nav-arrow bi iconoir--nav-arrow-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="./list_user.php" class="nav-link"> <i class="nav-icon bi mdi--user-group"></i>
                                        <p>All User</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./mac_binding.php" class="nav-link"> <i class="nav-icon bi eos-icons--role-binding-outlined"></i>
                                        <p>Mac Binding</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./online_user.php" class="nav-link"> <i class="nav-icon bi gis--globe-user"></i>
                                        <p>Online User</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi ic--baseline-add-card"></i>
                                <p>
                                    Billing
                                    <i class="nav-arrow bi iconoir--nav-arrow-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="./list_plan.php" class="nav-link"> <i class="nav-icon bi mdi--scheduled-payment"></i>
                                        <p>Plans</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./list_bandwidth.php" class="nav-link"> <i class="nav-icon bi mdi--invoice-schedule"></i>
                                        <p>Bandwidth</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi payment"></i>
                                <p>
                                    Payment
                                    <i class="nav-arrow bi iconoir--nav-arrow-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="./billing/admin.php" class="nav-link"> <i class="nav-icon bi payment-clock"></i>
                                        <p>Request</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./billing/balance.php" class="nav-link"> <i class="nav-icon bi wallet"></i>
                                        <p>Balance</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi mdi--printer"></i>
                                <p>
                                    Print
                                    <i class="nav-arrow bi iconoir--nav-arrow-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="./print_user.php" class="nav-link"> <i class="nav-icon bi mingcute--user-add-fill"></i>
                                        <p>User</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./list_batch.php" class="nav-link"> <i class="nav-icon bi material-symbols--group-add"></i>
                                        <p>Batch</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./print_setting.php" class="nav-link"> <i class="nav-icon bi print-settings"></i>
                                        <p>Setting</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link active"> <i class="nav-icon bi mdi--gear"></i>
                                <p>
                                    System
                                    <i class="nav-arrow bi iconoir--nav-arrow-right"></i>
                                </p>
                            </a>
                             <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="./sys_info.php" class="nav-link"> <i class="nav-icon bi mdi--server-outline"></i>
                                        <p>Information</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./sys_db.php" class="nav-link active"> <i class="nav-icon bi material-symbols--database"></i>
                                        <p>Database</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./client_tester.php" class="nav-link"> <i class="nav-icon bi ep--connection"></i>
                                        <p>Client Tester</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../../../phpmyadmin" target="_blank" class="nav-link"><i class="nav-icon bi phpmyadmin"></i>
                                        <p>Php Admin</p>
                                    </a> </li>
                                </ul>
                            </li>
                        </ul> <!--end::Sidebar Menu-->
                    </nav>
                </div> <!--end::Sidebar Wrapper-->
            </aside> <!--end::Sidebar--> 
        <main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
<section class="content">
<div class="container-fluid"> <!--begin::Row-->
<h3 class="mb-0">System Database</h3>
</div> <!--end::Row-->
</div> <!--end::Container-->
<!-- Popup Overlay -->
<div id="overlay" class="overlay"></div>
<!-- Popup Alert -->
<div id="alertPopup" class="confirm-popup">
    <p id="alertMessage">Pesan alert</p>
    <button id="alertOk">OK</button>
</div>
<!-- Popup Konfirmasi -->
<div id="confirmPopup" class="confirm-popup">
    <p id="confirmMessage"></p>
    <button id="confirmYes">Yes</button>
    <button id="confirmNo" class="cancel">No</button>
</div>
<div class='col-sm-12'>
    <div class='panel panel-hovered mb20 panel-primary'>
        <div class='panel-heading'>Database Management</div>
        <div class='panel-body'>
            <div class='md-whiteframe-z1 mb20 text-center' style='padding: 15px'>
                <!-- Menggunakan Flexbox untuk menempatkan elemen secara bersebelahan -->
                <div style='display: flex; gap: 10px; justify-content: center; align-items: center;'>
                    <!-- Formulir untuk restore -->
                    <form id="restoreForm" action="sys_db.php" method="post" enctype="multipart/form-data">
                        <input type="file" class="form-control" id="sqlFile" name="sqlFile" accept=".sql">
                    </form>
                    <!-- Tombol restore -->
                    <form id="restoreForm" action="sys_db.php" method="post" enctype="multipart/form-data">
                        <button type="button" class="btn btn-success" onclick="handleRestore()">RESTORE</button>
                    </form>
                    <!-- Tombol backup -->
                    <form action="sys_db.php" method="post">
                        <input type="hidden" name="action" value="download">
                        <button type="submit" class="btn btn-success">BACKUP</button>
                    </form>
                </div>
            </div>

            <!-- Tabel untuk menampilkan data -->
            <div class='table-responsive'>
                <table class='table table-bordered table-condensed table-striped table_mobile'>
                    <thead>
                        <tr>
                            <th>Radius Logs</th> <!-- Header tabel -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="logs-container">
                                <pre><?php echo nl2br($logString); ?></pre>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</main>
<footer class="app-footer"> <!--begin::To the end-->
<div class="float-end d-none d-sm-inline">Themes by <a href="https://adminlte.io" target="_blank" class="text-decoration-none">AdminLTE.io</a></div>
Radius Monitor by 
<a href="https://github.com/Maizil41" target="_blank" class="text-decoration-none">Maizil41</a>
</strong>
<!--end::Copyright-->
</footer> <!--end::Footer-->
</div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
<script src="../../dist/js/adminlte.js"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
<script>
function handleRestore() {
    var fileInput = document.getElementById('sqlFile');
    if (!fileInput.files.length) {
        showAlertPopup('File tidak ada. Harap pilih file terlebih dahulu.');
    } else {
        showConfirmPopup('Apakah Anda yakin ingin mengganti database dengan file yang dipilih?', function() {
            document.getElementById('restoreForm').submit();
        });
    }
}

function showAlertPopup(message) {
    document.getElementById('alertMessage').innerText = message;
    document.getElementById('overlay').classList.add('show');
    document.getElementById('alertPopup').classList.add('show');
}

function closeAlertPopup() {
    document.getElementById('overlay').classList.remove('show');
    document.getElementById('alertPopup').classList.remove('show');
}

document.getElementById('alertOk').onclick = function() {
    closeAlertPopup();
};

function showConfirmPopup(message, onConfirm) {
    document.getElementById('confirmMessage').innerText = message;
    document.getElementById('overlay').classList.add('show');
    document.getElementById('confirmPopup').classList.add('show');

    document.getElementById('confirmYes').onclick = function() {
        closeConfirmPopup();
        onConfirm();
    };

    document.getElementById('confirmNo').onclick = function() {
        closeConfirmPopup();
    };
}

function closeConfirmPopup() {
    document.getElementById('overlay').classList.remove('show');
    document.getElementById('confirmPopup').classList.remove('show');
}
</script>
</body>
</html>