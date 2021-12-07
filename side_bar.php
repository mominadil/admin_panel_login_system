<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user (optional) -->


  <!-- SidebarSearch Form -->
  <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <a href="Index.php" class="nav-link">
      <p>Home</p>
    </a>
  </nav>
  <a href="register.php" class="nav-link">
    <p>Register</p>
  </a>
  <a href="emp_form.php" class="nav-link">
    <p>Employee Form</p>
  </a>


 <?php if(!isset($_SESSION["login"])){  ?>
  <a href="login.php" class="nav-link">
    
    <p>Login</p>
  </a>
 <?php } ?>

  <?php if(isset($_SESSION["login"])){  ?>

    <a href="logout.php" class="nav-link"><p>Logout</p></a>
 <?php } ?>
    



   <a href="data_table.php" class="nav-link">
    
    <p>User Info</p>
  </a>
  <!-- /.sidebar-menu -->

</div>



