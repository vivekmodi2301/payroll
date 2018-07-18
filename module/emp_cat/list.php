<?php 

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	deleteRecord("emp_cat",$id);
}
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Designation</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"> <a href="index.php?mod=emp_cat&do=addEdit">Add new designation</a> </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Designation</th>
                                            <th>Edit</th>
						                    <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
									$rs=mysqli_query($con,"select id,designation from emp_cat order by id desc");
									$i=1;
									while($data=mysqli_fetch_assoc($rs)){
									?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $i++;?></td>
                                            <td><?php echo $data['designation']?></td>
		                                    <td><a href="index.php?mod=emp_cat&do=addEdit&id=<?php echo $data['id']?>">Edit</a></td>
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
		  location.href="index.php?mod=emp_cat&do=list&id="+val;
	}
	}
  </script> 
