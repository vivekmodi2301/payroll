<?php 

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	deleteRecord("payment",$id);
}
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Payment</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"> <a href="index.php?mod=payment&do=addEdit">Add new payment</a> </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Employee Name</th>
                                            <th>Rupees</th>
                                            <th>Edit</th>
						                    <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
									$rs=mysqli_query($con,"SELECT `id`, `empid`, `rupees`, `date` FROM `payment` order by id desc");
									$i=1;
									while($data=mysqli_fetch_assoc($rs)){
									?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $i++;?></td>
                                            <td>
											<?php 
											$empname=getValue("employee","name",$data['empid']);
											echo $empname?></td>
                                            <td><?php echo $data['rupees']?></td>
		                                    <td><a href="index.php?mod=payment&do=addEdit&id=<?php echo $data['id']?>">Edit</a></td>
        						            <td><a href="#" onclick="del(<?php echo $data['id']?>)">Delete</a></td>
                                        </tr>
                                        <?php 
									}?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <script>
        function del(val)
  {
	  if(confirm("Do you want to delete this record ?"))
	  {
		  location.href="index.php?mod=payment&do=list&id="+val;
	}
	}
  </script> 
