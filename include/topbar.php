<?php
include('../include/db.php');
include('../include/select_user.php');

if ($count_admin == 1 || $count_staff == 1) {
?>

  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow bg-gray-900">

    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>

    <a href="http://www.yaranghospital.com/web/index.php">
      <form class=" mr-auto ml-md-3 my-2 my-md-2 mw-100 ">
        <div class="input-group">
          <img class="img-profile rounded-circle" src="../img/logo.jpg" width="45px" height="45px">
      </form>
    </a>
    <form class=" mr-auto ml-md-1 my-2 my-md-2 mw-1 ">
      <div class="sidebar-brand-text mx-2 text-lg text-gray-100">ระบบตัวชี้วัดเพื่อวัดระดับคุณภาพโรงพยาบาลยะรัง</div>
      </div>
    </form>

    <ul class="navbar-nav ml-auto">

      <div class="topbar-divider d-none d-sm-block"></div>

      <li class="nav-item dropdown no-arrow">
        <div class="nav-link dropdown-toggle">
          <?php echo '<span class="mr-2 d-none d-lg-inline text-gray-500 small"> ' . $username . ' </span>'; ?>
        </div>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">

      <div class="topbar-divider d-none d-sm-block"></div>

      <li class="nav-item dropdown no-arrow">
        <a href="../include/logout.php" class="btn btn-secondary align-items-center">
          <span class="text">Logout</span>
        </a>
      </li>
    </ul>

  </nav>

<?php
} else {
?>
  <nav class="navbar navbar-expand navbar-light bg-gray-900 topbar mb-4 static-top shadow">

    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>

    <a href="http://www.yaranghospital.com/web/index.php">
      <form class=" mr-auto ml-md-3 my-2 my-md-2 mw-100 ">
        <div class="input-group">
          <img class="img-profile rounded-circle" src="../img/logo.jpg" width="45px" height="45px">
        </div>
      </form>
    </a>
    <form class=" mr-auto ml-md-1 my-2 my-md-2 mw-1 ">
      <div class="sidebar-brand-text mx-2 text-lg text-gray-100">ระบบตัวชี้วัดเพื่อวัดระดับคุณภาพโรงพยาบาลยะรัง</div>
    </form>

    <ul class="navbar-nav ml-auto">

      <li class="nav-item dropdown no-arrow">
        <a href="home.php" class="btn btn-secondary align-items-center">
          <span class="text">Home</span>
        </a>
      </li>

      <div class="topbar-divider d-none d-sm-block"></div>

      <li class="nav-item dropdown no-arrow">
        <a href="login.php" class="btn btn-secondary align-items-center">
          <span class="text">Login</span>
        </a>
      </li>
    </ul>
  </nav>
<?php
}
?>