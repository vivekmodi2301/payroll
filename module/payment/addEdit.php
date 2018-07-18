<?php 
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$record=mysqli_query($con,"SELECT `id`, `empid`, `rupees`, `date` FROM `payment` where id=$id");
	$data=mysqli_fetch_assoc($record);
	
}
if(isset($_POST['empid']))
{
	addedit("payment",$_POST,$id);
?>
<script>location.href="index.php?mod=payment&do=list";</script>    
<?php
}

?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Payment</h1>
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
                <div class="form-heading"><h4>Add New Payment</h4></div>
                </div>
                <div class="panel-body">
                	<form role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
               <div class="form-group">
                  <label class="col-lg-4 control-label">Rupees</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="rupees" value="<?php if(isset($data['rupees'])) { echo $data['rupees']; }?>">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-lg-4 control-label">Select Emp Name</label>
                  <div class="col-lg-4">
                  <select name="empid">
                  <option value="">Select Employee</option>
                  	<?php 
					$emprs=mysqli_query($con,"SELECT `id`, `name` FROM `employee`");
					$i=1;
					while($empdata=mysqli_fetch_assoc($emprs)){
					?>
                    <option value="<?php echo $empdata['id']?>"<?php if(isset($data['empid']) && $data['empid']==$empdata['id']){?> selected="selected" <?php }?>><?php echo $empdata['name']?></option>
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