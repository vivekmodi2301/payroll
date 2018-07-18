<?php
if(isset($_POST['username']))
{
	$username=$_POST['username'];
	$pwd=$_POST['password'];
	if(trim($username) && trim($pwd))
	{
		$data=mysqli_query($con,"select id,username,password from login where username='$username' and password='$pwd'");
		
		
		if(mysqli_num_rows($data)==0)
			$_SESSION['messages']="Please enter correct user name or password.";
		else
		{
			
			$_SESSION['payroll_admin']=mysqli_fetch_array($data);
			//echo $_SESSION['username'];exit;
			?>
			 <script>location.href="index.php?mod=emp_cat&do=list";</script>
			<?php
			
		}
	}else{
		$_SESSION['messages']="Please enter user name or password.";
	}
}
?>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="User Name" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                
                                <div class="form-group">
                                    <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->					       </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

