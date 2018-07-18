<?php 
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$record=mysqli_query($con,"SELECT `id`, `name`, `empcatid`, `dob`, `address`, `doj`, `mobile`, `city`, `email` FROM `employee` where id=$id");
	$data=mysqli_fetch_assoc($record);
	
}
if(isset($_POST['name']))
{
	addedit("employee",$_POST,$id);
?>
<script>location.href="index.php?mod=employee&do=list";</script>    
<?php
}

?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Employee</h1>
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
                <div class="form-heading"><h4>Add New Employee</h4></div>
                </div>
                <div class="panel-body">
                	<form role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
               <div class="form-group">
                  <label class="col-lg-4 control-label">Name</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="name" value="<?php if(isset($data['name'])) { echo $data['name']; }?>">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-lg-4 control-label">Select Emp Cat</label>
                  <div class="col-lg-4">
                  <select name="empcatid">
                  <option value="">Select Emp Designation</option>
                  	<?php 
					$emprs=mysqli_query($con,"select id,designation from emp_cat order by id desc");
					$i=1;
					while($empdata=mysqli_fetch_assoc($emprs)){
					?>
                    <option value="<?php echo $empdata['id']?>" <?php if(isset($data['empcatid']) && $data['empcatid']==$empdata['id']) {?>  selected="selected"<?php }?>><?php echo $empdata['designation']?></option>
                    <?php }?>
                    </select>
                    
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-lg-4 control-label">Date of Birth</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="dob" value="<?php if(isset($data['dob'])) { echo $data['dob']; }?>">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-lg-4 control-label">Address</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="address" value="<?php if(isset($data['address'])) { echo $data['address']; }?>">
                  </div>
                </div>
                
                
                <div class="form-group">
                  <label class="col-lg-4 control-label">Date of Joining</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="doj" value="<?php if(isset($data['doj'])) { echo $data['doj']; }?>">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-lg-4 control-label">Mobile</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="mobile" value="<?php if(isset($data['mobile'])) { echo $data['mobile']; }?>">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-lg-4 control-label">City</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="city" value="<?php if(isset($data['city'])) { echo $data['city']; }?>">
                  </div>
                </div>
                
                
                <div class="form-group">
                  <label class="col-lg-4 control-label">Email</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="email" value="<?php if(isset($data['email'])) { echo $data['email']; }?>">
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