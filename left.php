<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    <a class="navbar-brand" href="index.php">Payroll System</a> </div>
  <!-- /.navbar-header -->
  
  
  <!-- /.navbar-top-links -->
  <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
      <ul class="nav" id="side-menu">
        <!--<li class="sidebar-search">
          <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
        </li>-->
        <?php
		if(isset($_SESSION['payroll_admin'])){
		 ?>
        <li> <a href="index.php?mod=emp_cat&do=list"><i class="fa fa-dashboard fa-fw"></i> Employee Designation</a> </li>
        
        <li> <a href="index.php?mod=working&do=list"><i class="fa fa-table fa-fw"></i> Working Duration</a> </li>
                        <li> <a href="index.php?mod=leave&do=list"><i class="fa fa-dashboard fa-fw"></i> Leaves</a> </li>

                <li> <a href="index.php?mod=employee&do=list"><i class="fa fa-dashboard fa-fw"></i> Employee</a> </li>
                <li> <a href="index.php?mod=attendance&do=list"><i class="fa fa-dashboard fa-fw"></i> Attendance</a> </li>
                <li> <a href="index.php?mod=payment&do=list"><i class="fa fa-dashboard fa-fw"></i> Payment</a> </li>
        <li> <a href="index.php?mod=login&do=logout"><i class="fa fa-edit fa-fw"></i> Logout</a> </li><?php }
		?>
      </ul>
    </div>
    <!-- /.sidebar-collapse --> 
  </div>
  <!-- /.navbar-static-side --> 
</nav>