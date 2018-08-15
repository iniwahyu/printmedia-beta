<!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand -->
                <a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                <div class="brand-text d-none d-lg-inline-block"><span>Print</span><strong> Media</strong></div>
                </a>
              
                <!-- Toggle Button-->
                <a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>

              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">              
              
                <!-- Logout    -->
                <li class="nav-item">
                  <a href="<?php echo base_url('welcome/'); ?>" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">            
            <div class="title">
              <h1 class="h4">Bugi Setiawan</h1>
              <p>bugisetiawan98@gmail.com</p>
            </div>
          </div>

          <!-- Sidebar Navidation Menus-->          
          <ul class="list-unstyled">                      
            <li class="<?php if ( $this->uri->uri_string() == 'welcome/member' ){ echo 'active'; } ?>">
                <a href="<?php echo base_url('welcome/member'); ?>"> <i class="fa fa-history"></i>HISTORY</a>
            </li>

            <li class="<?php if ( $this->uri->uri_string() == 'welcome/upload' ){ echo 'active'; } ?>">
                <a href="<?php echo base_url('welcome/upload'); ?>"> <i class="fa fa-upload"></i>UPLOAD</a>
            </li>      

            <li class="<?php if ( $this->uri->uri_string() == 'welcome/profile' ){ echo 'active'; } ?>">
                <a href="<?php echo base_url('welcome/profile'); ?>"> <i class="icon-user"></i>My Profile</a>
            </li>                    
        </nav>