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
                <a class="nav-link active" href="setting-account.php">ชื่อผู้ใช้งาน</a>
                <a class="nav-link" href="setting-financial.php">ธุรกรรมทางการเงิน</a>
            </nav>
            <hr class="mt-0 mb-4" />
            <div class="row">
                <div class="col-lg-4">
                    <!-- Change password card-->
                    <div class="card mb-4">
                        <div class="card-header">เปลี่ยนชื่อผู้ใช้งาน</div>
                        <div class="card-body">
                                <div class="mb-3">
                                    <label class="small mb-1" for="currentPassword">ชื่อผู้ใช้งานเดิม</label>
                                    <input class="form-control" value="55" disabled/>
                                </div>
                            <form>
                                <!-- Form Group (current password)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="currentPassword">Current Password</label>
                                    <input class="form-control" id="currentPassword" type="password" placeholder="Enter current password" />
                                </div>
                                <!-- Form Group (new password)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="newPassword">New Password</label>
                                    <input class="form-control" id="newPassword" type="password" placeholder="Enter new password" />
                                </div>
                                <!-- Form Group (confirm password)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="confirmPassword">Confirm Password</label>
                                    <input class="form-control" id="confirmPassword" type="password" placeholder="Confirm new password" />
                                </div>
                                <button class="btn btn-primary shadow lift" type="submit" name="btn-name">บันทึก</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Change password card-->
                    <div class="card mb-4">
                        <div class="card-header">เปลี่ยนรหัสผ่าน</div>
                        <div class="card-body">
                            <form>
                                <!-- Form Group (current password)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="currentPassword">รหัสผ่านเดิม</label>
                                    <input class="form-control" id="currentPassword" type="password" placeholder="Enter current password" />
                                </div>
                                <!-- Form Group (new password)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="newPassword">รหัสผ่านใหม่</label>
                                    <input class="form-control" id="newPassword" type="password" placeholder="Enter new password" />
                                </div>
                                <!-- Form Group (confirm password)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="confirmPassword">ยืนยันรหัสผ่านใหม่</label>
                                    <input class="form-control" id="confirmPassword" type="password" placeholder="Confirm new password" />
                                </div>
                                <button class="btn btn-primary shadow lift" type="submit" name="btn-pass">บันทึก</button>
                            </form>
                        </div>
                    </div>
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