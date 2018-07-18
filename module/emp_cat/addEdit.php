<?php 
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$record=mysqli_query($con,"select id,designation from emp_cat where id=$id");
	$data=mysqli_fetch_assoc($record);
	
}
if(isset($_POST['designation']))
{
	addedit("emp_cat",$_POST,$id);
?>
<script>location.href="index.php?mod=emp_cat&do=list";</script>    
<?php
}

?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Designation</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

<div class="row">
    <div class="col-lg-12">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            
            <div class="panel panel-default">
            	<div class="panel-heading">
                <div class="form-heading"><h4>Add New Designation</h4></div>
                </div>
                <div class="panel-body">
                	<form role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
               <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Designation</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" id="name" name="designation" value="<?php if(isset($data['designation'])) { echo $data['designation']; }?>">
                  </div>
                </div>
               <div class="form-group">
                  <div class="col-lg-4  col-lg-offset-4">
                    <input type="submit" value="Save" class="btn btn-primary">
                  </div>
                </div>
              </form>
                </div>
            </div>
              
            </div>
        </div>
      </div>
    </div>
  </div>
  </div>
    </div>