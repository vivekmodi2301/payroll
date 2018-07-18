<?php 
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$record=mysqli_query($con,"SELECT `id`, `empcatid`, `leavesday` FROM `leaves` where id=$id");
	$data=mysqli_fetch_assoc($record);
}
if(isset($_POST['leavesday']))
{
	addedit("leaves",$_POST,$id);
?>
<script>location.href="index.php?mod=leave&do=list";</script>    
<?php
}

?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Leaves</h1>
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
                <div class="form-heading"><h4>Add New Leaves</h4></div>
                </div>
                <div class="panel-body">
                	<form role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
               <div class="form-group">
                  <label class="col-lg-4 control-label">Leaves</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="leavesday" value="<?php if(isset($data['leavesday'])) { echo $data['leavesday']; }?>">
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
                    <option value="<?php echo $empdata['id']?>" <?php if(isset($data['empcatid']) && $data['empcatid']==$empdata['id']){?> selected="selected" <?php }?>><?php echo $empdata['designation']?></option>
                    <?php }?>
                    </select>
                    
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