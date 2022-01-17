<?php 
session_start();
// Get `id` from `<script></script>`
  header("Cache-Control: no cache");

$id = $_GET['id'];
$admin = $_GET['admin'];
include('../../backend/connection.php');
?>

<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    			</div>
    			<div class="modal-body text-center">
		  			<div class="" >
						<div class="nav-tabs-custom">
							<div class="tab-content">
								<div class="active tab-pane" id="staff">
									<div class="box box-info">
										<div class="box-header with-border">
											<h3 class="box-title">Enter ID of new director</h3>
										</div>
										<form class="form-horizontal" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>">
											<div class="box-body">
												<div class="form-group">
													<label for="firstname" class="col-sm-3 control-label">Staff ID</label>
													<div class="col-sm-9">
                                                        <input type="hidden" name="id" value="<?php echo $id?>">
                                                        <input type="hidden" name="admin" value="<?php echo $admin?>">
														<input type="text" class="form-control" name="staff_id" id="inputEmail3" placeholder="Staff ID" required>
													</div>
												</div>
											</div>
											<div class="box-body">
												<!-- select -->
												<div class="box-footer">
													<button type="submit" name="change" class="btn btn-info pull-right">Save</button>
												</div>
											<!-- /.box-footer -->
											</div>
										<div>	
									</form>										
									</div>
								</div>
								<!-- /.tab-pane -->
							</div>
							<!-- /.tab-content -->
						</div>
						<!-- /.nav-tabs-custom -->
					</div>
<?php
        include('connection.php');
        if (isset($_POST['change'])) {
            $admin = $_POST['admin'];
            $staff_id = $_POST['staff_id'];
            $dir_id = $_POST['id'];
            $sql = "SELECT Fname, Lname FROM HR_ADMIN WHERE ID = $admin";
            $sql1 = "SELECT Directorate_Head_ID FROM DIRECTORATE WHERE Directorate_ID = $dir_id";
            $query2 = "INSERT INTO `CHANGES`  (`Admin_ID`,`Admin_Fname`,`Admin_Lname`,`change_made_on`,`change_made_on`,`time_occur`)  VALUES ($admin,'$admin_fname','$admin_lname',$id,'$passw');";
            $query = "UPDATE DIRECTORATE SET `Directorate_Head_ID` = $staff_id WHERE `Directorate_ID` = $dir_id";
            $result = mysqli_query($con, $sql);
            $result1 = mysqli_query($con, $sql1);
            $result2 = mysqli_query($con, $query2);
            $query_run = mysqli_query($con,$query);
            $admin_fname ="";
            $staff_change ="";
            $admin_lname ="";
            if ($result) {
            foreach ($result as $row) {
                $admin_fname = $row['Fname'];
                $admin_lname = $row['Lname'];
            }
            foreach ($result1 as $row) {
                $staff_change = $row['Directorate_Head_ID'];
            }
            if ($result) {
                if ($result1) {
                    if ($result2) {
                        if ($query_run) {
                            header("location:directorate.php");
                        }
                    }
                }
            }else {
                echo "UPDATE DIRECTORATE SET `Directorate_Head_ID` = $staff_id WHERE `Directorate_ID` = $dir_id";
            }
        }
    }
?>