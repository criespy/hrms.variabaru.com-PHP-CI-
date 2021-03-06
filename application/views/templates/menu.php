<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php foreach ($user_status as $row): echo base_url().$row['picture'];?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $row['firstname'].' '.$row['lastname']; endforeach;?></p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">Have a nice day!</li>
      <li class="active">
        <a href="<?php echo base_url(); ?>index.php/home/statistic">
          <i class="fa fa-laptop"></i>
          <span>General Status</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>index.php/home/salesbilling">
          <i class="fa fa-file"></i>
          <span>Acumatica Request</span>
        </a>
      </li>
      <li>
        <a href+"<?php echo base_url();?>index.php/home/inventory">
          <i class="fa fa-qrcode"></i>
          <span>Inventory</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url();?>index.php/barcode">
          <i class="fa fa-barcode"></i>
          <span>Barcode Maker</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-wrench"></i> <span>Settings</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url(); ?>index.php/users/view/all">Users</a></li>
          <li><a href="#">Link in level 2</a></li>
        </ul>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
