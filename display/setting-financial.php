<?php
include('../backend/connect.php');
include('header.php');
?>
<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-xl px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="user"></i></div>
                                ตั้งค่าผู้ใช้งาน - ความปลอดภัย
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-4">
            <!-- Account page navigation-->
            <nav class="nav nav-borders">
                <a class="nav-link" href="setting-account.php">ชื่อผู้ใช้งาน</a>
                <a class="nav-link active" href="setting-financial.php">ธุรกรรมทางการเงิน</a>
            </nav>
            <hr class="mt-0 mb-4" />
            <div class="row">
                <div class="col-lg-8">
                    <!-- Email notifications preferences card-->
                    <div class="card card-header-actions mb-4">
                        <div class="card-header">
                            Email Notifications
                            <div class="form-check form-switch">
                                <input class="form-check-input" id="flexSwitchCheckChecked" type="checkbox" checked />
                                <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <!-- Form Group (default email)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputNotificationEmail">Default notification email</label>
                                    <input class="form-control" id="inputNotificationEmail" type="email" value="name@example.com" disabled />
                                </div>
                                <!-- Form Group (email updates checkboxes)-->
                                <div class="mb-0">
                                    <label class="small mb-2">Choose which types of email updates you receive</label>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" id="checkAccountChanges" type="checkbox" checked />
                                        <label class="form-check-label" for="checkAccountChanges">Changes made to your account</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" id="checkAccountGroups" type="checkbox" checked />
                                        <label class="form-check-label" for="checkAccountGroups">Changes are made to groups you're part of</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" id="checkProductUpdates" type="checkbox" checked />
                                        <label class="form-check-label" for="checkProductUpdates">Product updates for products you've purchased or starred</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" id="checkProductNew" type="checkbox" checked />
                                        <label class="form-check-label" for="checkProductNew">Information on new products and services</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" id="checkPromotional" type="checkbox" />
                                        <label class="form-check-label" for="checkPromotional">Marketing and promotional offers</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="checkSecurity" type="checkbox" checked disabled />
                                        <label class="form-check-label" for="checkSecurity">Security alerts</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">+เพิ่มธนาคาร</button>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer-admin mt-auto footer-light">
        <div class="container-xl px-4">
            <div class="row">
                <div class="col-md-6 small">Copyright &copy; Your Website 2021</div>
                <div class="col-md-6 text-md-end small">
                    <a href="#!">Privacy Policy</a>
                    &middot;
                    <a href="#!">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
<?php include('footer.php'); ?>