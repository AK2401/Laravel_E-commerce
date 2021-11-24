
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/dashboard" class="nav-link <?php echo e(Request::is('dashboard') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <a href="/add" class="nav-link <?php echo e(Request::is('add') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Add Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <a href="/view" class="nav-link <?php echo e(Request::is('view') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
           View Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <a href="/profile" class="nav-link <?php echo e(Request::is('profile') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
            Profile
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <a href="/orderview" class="nav-link <?php echo e(Request::is('orderview') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
            Order View
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <a href="/userprofile" class="nav-link <?php echo e(Request::is('orderview') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
      User`s Profile
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          
         
        </ul>
      </nav>
      <!-- /.sidebar-menu --><?php /**PATH C:\Users\admin\Desktop\Shppoing\resources\views/components/back/sidebar.blade.php ENDPATH**/ ?>