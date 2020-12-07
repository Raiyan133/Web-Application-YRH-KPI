<?php
include('../include/db.php');
include('../include/select_user.php');

if ($count_admin == 1) {
?>

<!-- admin_sidebar -->
<ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion " id="accordionSidebar">

  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
    <div class="sidebar-brand-text mx-3">KPI YRH</div>
  </a>

  <hr class="sidebar-divider my-0">

  <li class="nav-item">
    <a class="nav-link" href="home.php">
      <i class="fas fa-fw fa-home"></i>
      <span>หน้าแรก</span>
    </a>
  </li>

  <hr class="sidebar-divider my-0">

  <li class="nav-item">
    <a class="nav-link" href="managehome.php">
      <i class="fas fa-fw fa-cog"></i>
      <span>จัดการหน้าแรก</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="managegraph.php">
      <i class="fas fa-fw fa-list"></i>
      <span>จัดการกราฟ</span>
    </a>
  </li>

  <hr class="sidebar-divider">

  <div class="sidebar-heading">
    สมาชิก
  </div>

  <li class="nav-item">
    <a class="nav-link" href="staff.php">
      <i class="fas fa-fw fa-user"></i>
      <span>จัดการสมาชิก</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="team.php">
      <i class="fas fa-fw fa-users"></i>
      <span>จัดการทีม</span>
    </a>
  </li>

  <hr class="sidebar-divider">

  <div class="sidebar-heading">
    ตัวชี้วัด
  </div>

  <li class="nav-item">
    <a class="nav-link" href="ind.php">
      <i class="fas fa-fw fa-list"></i>
      <span>จัดการตัวชี้วัด</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="insert.php">
      <i class="fas fa-fw fa-edit"></i>
      <span>ป้อนข้อมูลตัวชี้วัด</span>
    </a>
  </li>

  <hr class="sidebar-divider">

  <div class="sidebar-heading">
    กราฟ
  </div>

  <li class="nav-item">
    <a class="nav-link" href="compare.php">
      <i class="fas fa-fw fa-chart-line"></i>
      <span>เปรียบเทียบกราฟ</span>
    </a>
  </li>

  <hr class="sidebar-divider">

  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>

<?php   
} else if ($count_staff == 1) {
?>

<!-- staff_sidebar -->
<ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion " id="accordionSidebar">

<a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
  <div class="sidebar-brand-text mx-3">KPI YRH</div>
</a>

<hr class="sidebar-divider my-0">

<li class="nav-item">
  <a class="nav-link" href="home.php">
    <i class="fas fa-fw fa-home"></i>
    <span>หน้าแรก</span></a>
</li>

<hr class="sidebar-divider  my-0">

<li class="nav-item">
    <a class="nav-link" href="managegraph.php">
      <i class="fas fa-fw fa-list"></i>
      <span>จัดการกราฟ</span>
    </a>
  </li>

  <hr class="sidebar-divider">

<div class="sidebar-heading">
    ตัวชี้วัด
  </div>

  <li class="nav-item">
    <a class="nav-link" href="ind.php">
      <i class="fas fa-fw fa-list"></i>
      <span>จัดการตัวชี้วัด</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="insert.php">
      <i class="fas fa-fw fa-edit"></i>
      <span>ป้อนข้อมูลตัวชี้วัด</span>
    </a>
  </li>

<hr class="sidebar-divider">

<div class="sidebar-heading">
    กราฟ
  </div>

  <li class="nav-item">
    <a class="nav-link" href="compare.php">
      <i class="fas fa-fw fa-chart-line"></i>
      <span>เปรียบเทียบกราฟ</span>
    </a>
  </li>


<hr class="sidebar-divider">

<div class="sidebar-heading">
    บัญชีผู้ใช้
  </div>

<li class="nav-item">
  <a class="nav-link" href="account.php">
    <i class="fas fa-fw fa-user"></i>
    <span>ข้อมูลของฉัน</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link" href="change_password.php">
    <i class="fas fa-fw fa-unlock"></i>
    <span>เปลี่ยนรหัสผ่าน</span>
  </a>
</li>

<hr class="sidebar-divider">

<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>

<?php
} else {


}
?>