<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="dist/logo.png" alt="AdminLTE Logo" class="brand-image"
           style="opacity: .8">
      <span class="brand-text font-weight-light">PNP Pasay</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION["username"]; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">MENU ITEMS</li>
          <li class="nav-item">
            <a href="new-applicant.php" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                New Application
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pending-applicant.php" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Pending Applications
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="verified-applicant.php" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Verified Applications
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="paid-applicant.php" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Paid Applications
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-archives"></i>
              <p>
                Archives
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
