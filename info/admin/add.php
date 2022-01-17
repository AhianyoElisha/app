    <!-- ######################################################################################################################### -->
<?php require_once('../../backend/addback.php');?>
    <!-- addModal HTML -->
	<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    	<div class="modal-dialog modal-edititem" >
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    			</div>
    			<div class="modal-body text-center">
					<div class="" >
						<div class="nav-tabs-custom">
							<ul class="nav nav-tabs">
							<li class="active"><a href="#staff" data-toggle="tab">Staff</a></li>
							<li><a href="#nss" data-toggle="tab">NSS</a></li>
							<li><a href="#intern" data-toggle="tab">Intern</a></li>
							<li><a href="#training" data-toggle="tab">Training</a></li>
							<li><a href="#promotion" data-toggle="tab">Promotion</a></li>
							<li><a href="#leave" data-toggle="tab">Leave</a></li>
							</ul>
							<div class="tab-content">
								<div class="active tab-pane" id="staff">
									<div class="box box-info">
										<div class="box-header with-border">
											<h3 class="box-title">New Staff</h3>
										</div>
										<?php
										include('../../backend/connection.php');
										$query1a = "SELECT * FROM DIRECTORATE";
										$query_run1a = mysqli_query($con,$query1a);
										$query2a = "SELECT * FROM UNIT";
										$query_run2a = mysqli_query($con,$query2a);
										?>
										<form class="form-horizontal" method="POST" action="../../backend/addback.php">
											<div class="box-body">
												<div class="form-group">
													<label for="firstname" class="col-sm-3 control-label">Staff ID</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" name="staff_id" id="inputEmail3" placeholder="Staff ID" required>
													</div>
												</div>
												<div class="form-group">
													<label for="firstname" class="col-sm-3 control-label">First name</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" name="fname" id="inputEmail3" placeholder="First Name" required>
													</div>
												</div>
												<div class="form-group">
													<label for="middlename" class="col-sm-3 control-label">Middle Name</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" name="mname" id="inputPassword3" placeholder="Middle Name" required>
													</div>
												</div>
												<div class="form-group">
													<label for="lastname" class="col-sm-3 control-label">Last Name</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" name="lname" id="inputPassword3" placeholder="Last Name" required>
													</div>
												</div>
												<div class="form-group">
													<label for="dob" class="col-sm-3 control-label">Date of Birth</label>
													<div class="col-sm-9">
														<input type="text" class="form-control " name="dob" id="datepicker">
													</div>
												</div>
												<div class="form-group">
													<label for="middlename" class="col-sm-3 control-label">Gender</label>
													<div class="col-sm-8">
														<div class="radio col-sm-4">
															<label>
															<input type="radio" name="gender" id="optionsRadios1" value="M">
															Male
															</label>
														</div>
														<div class="radio col-sm-4">
															<label>
															<input type="radio" name="gender" id="optionsRadios2" value="F">
															Female
															</label>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="middlename" class="col-sm-3 control-label">Marital Status</label>
													<div class="col-sm-8">
														<div class="radio col-sm-4">
															<label>
															<input type="radio" name="marital_status" id="optionsRadios1" value="Married">
															Married
															</label>
														</div>
														<div class="radio col-sm-4">
															<label>
															<input type="radio" name="marital_status" id="optionsRadios2" value="Single">
															Single
															</label>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="middlename" class="col-sm-3 control-label">Senior/ Junior</label>
													<div class="col-sm-8">
														<div class="radio col-sm-4">
															<label>
															<input type="radio" name="rank" id="optionsRadios1" value="Senior">
															Senior
															</label>
														</div>
														<div class="radio col-sm-4">
															<label>
															<input type="radio" name="rank" id="optionsRadios2" value="Junior">
															Junior
															</label>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="middlename" class="col-sm-3 control-label">Seconded/ Actual Staff</label>
													<div class="col-sm-8">
														<div class="radio col-sm-4">
															<label>
															<input type="radio" name="seconded" id="optionsRadios1" value=1>
															Seconded Staff
															</label>
														</div>
														<div class="radio col-sm-4">
															<label>
															<input type="radio" name="seconded" id="optionsRadios2" value=0>
															Actual Staff
															</label>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="highest qualification" class="col-sm-3 control-label">Highest Qualification</label>
													<div class="col-sm-9">
														<textarea class="form-control" name="highest_qualification" rows="3" placeholder="Enter Highest Qualification"></textarea>
													</div>
												</div>
											</div>
											<div class="box-body">
													<div class="form-group">
														<label for="dob" class="col-sm-6 control-label">Date of First Appointment</label>
														<div class="col-sm-6">
															<input type="text" name="date_of_first_appointment" class="form-control " id="datepicker1">
														</div>
													</div>
													<div class="form-group">
														<label for="dob" class="col-sm-6 control-label">Date of Present Appointment</label>
														<div class="col-sm-6">
															<input type="text" name="date_of_present_appointment" class="form-control " id="datepicker2">
														</div>
													</div>													
													<div class="form-group">
														<label for="current_grade" class="col-sm-6 control-label">Current Grade</label>
														<div class="col-sm-6">
															<textarea class="form-control" name="current_grade" placeholder="Enter current grade"></textarea>
														</div>
													</div>
												</div>
											<!-- /.box-body -->
											<div class="box-body">
												<!-- select -->
												<div class="form-group">
													<label for="directorate"  class="col-sm-3 control-label">Directorate</label>
													<div class="col-sm-9">
														<select class="form-control" id="mainCat" name="directorate" required>
														<?php
														if ($query_run1a) {
															foreach ($query_run1a as $row) {
														?>
															<option value="<?php echo $row['Directorate_ID']?>"><?php echo $row['Directorate_Name']?></option>
															<?php
																}
															}
															else
																{
																echo "Error ";
																};
															?>
														</select>
													</div>
												</div>

												<!-- select -->

												<div class="form-group">
													<label for="unit" class="col-sm-3 control-label">Unit</label>
													<div class="col-sm-9">
														<select class="form-control" id="expertCat" name="unit" required>
														<?php
														if ($query_run2a) {
															foreach ($query_run2a as $row) {
														?>
															<option value="<?php echo $row['Unit_ID']?>" data-tag='<?php echo $row['DirID']?>'><?php echo $row['Unit_Name']?></option>
															<?php
																}
															}
															else
																{
																echo "Error ";
																};
															?>
														</select>
														</div>
													</div>
													
													<div class="form-group">
														<label for="phone number" class="col-sm-3 control-label">Phone Number</label>
														<div class="col-sm-9">
														<input type="number"  name="phone_number"class="form-control">
														</div>
														<!-- /.input group -->
              										</div>													
												</div>
												<div class="box-footer">
													<button type="submit" name="add_staff" class="btn btn-info pull-right">Save</button>
												</div>
											<!-- /.box-footer -->
											</div>
										<div>	
									</form>										
									</div>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane row" id="nss">
									<div class="col-sm-12">
										<!-- Horizontal Form -->
										<div class="box box-info">
											<div class="box-header with-border">
											<h3 class="box-title"> National Service</h3>
											</div>
											<!-- /.box-header -->
											<!-- form start -->
											<form class="form-horizontal">
												<div class="box-body">
													<div class="form-group">
														<label for="dob" class="col-sm-6 control-label">Date of First Appointment</label>
														<div class="col-sm-6">
															<input type="text" class="form-control " id="datepicker1">
														</div>
													</div>
													<div class="form-group">
														<label for="dob" class="col-sm-6 control-label">Date of Present Appointment</label>
														<div class="col-sm-6">
															<input type="text" class="form-control " id="datepicker2">
														</div>
													</div>													
													<div class="form-group">
														<label for="current_grade" class="col-sm-6 control-label">Current Grade</label>
														<div class="col-sm-6">
															<textarea class="form-control" placeholder="Enter current grade"></textarea>
														</div>
													</div>
												</div>
												<!-- /.box-body -->
												<div class="box-footer">
													<button type="submit" class="btn btn-info pull-right">Save</button>
												</div>
											<!-- /.box-footer -->
											</form>
										</div>	
									</div>  
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" id="intern">
									<div class="box box-info">
										<div class="box-header with-border">
											<h3 class="box-title">Promotion Information</h3>
										</div>
										<form class="form-horizontal">
											<div class="box-body">
												<div class="form-group">
													<label for="promotion_from" class="col-sm-4 control-label">Promotion From</label>
													<div class="col-sm-8">
														<textarea class="form-control" placeholder="Enter grade promoted from"></textarea>
													</div>
												</div>
												<div class="form-group">
													<label for="promotion_to" class="col-sm-4 control-label">Promotion To</label>
													<div class="col-sm-8">
														<textarea class="form-control" placeholder="Enter grade promoted to"></textarea>
													</div>
												</div>
												<div class="form-group">
													<label for="dob" class="col-sm-4 control-label">Promotion Date</label>
													<div class="col-sm-8">
														<input type="text" class="form-control " id="datepicker3">
													</div>
												</div>
												<div class="form-group">
													<label for="dob" class="col-sm-4 control-label">Commencement Date</label>
													<div class="col-sm-8">
														<input type="text" class="form-control " id="datepicker4">
													</div>
												</div>
											</div>
											<!-- /.box-body -->
												<div class="box-footer">
													<button type="submit" class="btn btn-info pull-right">Save</button>
												</div>
											<!-- /.box-footer -->
											</form>										
									</div>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" id="promotion">
									<form class="form-horizontal">
										<div class="form-group">
											<label for="unit" class="col-sm-3 control-label">Training Type</label>
											<div class="col-sm-9">
												<select class="form-control" required>
													<option>option 1</option>
													<option>option 2</option>
													<option>option 3</option>
													<option>option 4</option>
													<option>option 5</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="dob" class="col-sm-3 control-label">Start Date</label>
											<div class="col-sm-9">
												<input type="text" class="form-control " id="datepicker4">
											</div>
										</div>
										<div class="form-group">
											<label for="dob" class="col-sm-3 control-label">End Date</label>
											<div class="col-sm-9">
												<input type="text" class="form-control " id="datepicker5">
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-10">
											<button type="submit" class="btn btn-info pull-right">Save</button>
											</div>
										</div>
									</form>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" id="training">
									<form class="form-horizontal">
										<div class="form-group">
											<label for="unit" class="col-sm-3 control-label">Training Type</label>
											<div class="col-sm-9">
												<select class="form-control" required>
													<option>option 1</option>
													<option>option 2</option>
													<option>option 3</option>
													<option>option 4</option>
													<option>option 5</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="dob" class="col-sm-3 control-label">Start Date</label>
											<div class="col-sm-9">
												<input type="text" class="form-control " id="datepicker4">
											</div>
										</div>
										<div class="form-group">
											<label for="dob" class="col-sm-3 control-label">End Date</label>
											<div class="col-sm-9">
												<input type="text" class="form-control " id="datepicker5">
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-10">
											<button type="submit" class="btn btn-info pull-right">Save</button>
											</div>
										</div>
									</form>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" id="leave">
									<form class="form-horizontal">
										<div class="form-group">
											<label for="unit" class="col-sm-6 control-label">Leave Type</label>
											<div class="col-sm-6">
												<select class="form-control" required>
													<option>option 1</option>
													<option>option 2</option>
													<option>option 3</option>
													<option>option 4</option>
													<option>option 5</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="dob" class="col-sm-6 control-label">Date Applied</label>
											<div class="col-sm-6">
												<input type="text" class="form-control " id="datepicker8">
											</div>
										</div>
										<div class="form-group">
											<label for="dob" class="col-sm-6 control-label">Home Town</label>
											<div class="col-sm-6">
												<input type="text" class="form-control " list="hometown" name="home_town" placeholder="Enter hometown">
												<datalist id="hometown">
													<option value="Accra, Greater Accra">
														<option value="Kumasi, Ashanti">
														<option value="Tamale, Northern">
														<option value="Sekondi-Takoradi, Western">
														<option value="Ashaiman, Greater Accra">
														<option value="Sunyani, Brong-Ahafo">
														<option value="Cape Coast, Central">
														<option value="Obuasi, Ashanti">
														<option value="Teshie, Greater Accra">
														<option value="Tema, Greater Accra">
														<option value="Madina, Greater Accra">
														<option value="Koforidua, Eastern">
														<option value="Wa, Upper West">
														<option value="Techiman, Brong-Ahafo">
														<option value="Ho, Volta">
														<option value="Nungua, Greater Accra">
														<option value="Lashibi, Greater Accra">
														<option value="Dome, Greater Accra">
														<option value="Tema New Town, Greater Accra">
														<option value="Gbawe, Greater Accra">
														<option value="Oduponkpehe, Central">
														<option value="Ejura, Ashanti">
														<option value="Taifa, Greater Accra">
														<option value="Bawku, Upper East">
														<option value="Aflao, Volta">
														<option value="Agona Swedru, Central">
														<option value="Bolgatanga, Upper East">
														<option value="Tafo, Ashanti">
														<option value="Berekum, Brong-Ahafo">
														<option value="Nkawkaw, Eastern">
														<option value="Akim Oda, Eastern">
														<option value="Winneba, Central">
														<option value="Hohoe, Volta">
														<option value="Yendi, Northern">
														<option value="Suhum, Eastern">
														<option value="Kintampo, Brong-Ahafo">
														<option value="Adenta East, Greater Accra">
														<option value="Nsawam, Eastern">
														<option value="Mampong, Ashanti">
														<option value="Konongo, Ashanti">
														<option value="Asamankese, Eastern">
														<option value="Wenchi, Brong-Ahafo">
														<option value="Savelugu, Northern">
														<option value="Agogo, Ashanti">
														<option value="Anloga, Volta">
														<option value="Prestea, Western">
														<option value="Effiakuma, Western">
														<option value="Tarkwa, Western">
														<option value="Elmina, Central">
														<option value="Dunkwa-on-Offin, Central">
														<option value="Begoro, Eastern">
														<option value="Kpandu, Volta">
														<option value="Kintampo, Brong-Ahafo">
														<option value="Navrongo, Upper East">
														<option value="Axim, Western">
														<option value="Apam, Central">
														<option value="Salaga, Northern">
														<option value="Saltpond, Central">
														<option value="Akwatia, Eastern">
														<option value="Shama, Western">
														<option value="Keta, Volta">
														<option value="Nyakrom, Central">
														<option value="Bibiani, Western">
														<option value="Somanya, Eastern">
														<option value="Foso, Central">
														<option value="Nyankpala, Northern">
														<option value="Aburi, Eastern">
														<option value="Mumford, Central">
														<option value="Bechem, Brong Ahafo">
														<option value="Duayaw Nkwanta, Brong Ahafo">
														<option value="Kade, Eastern">
														<option value="Anomabu, Central">
														<option value="Akropong, Eastern">
														<option value="Kete-Krachi, Volta">
														<option value="Kibi, Eastern">
														<option value="Kpandae, Northern">
														<option value="Mpraeso, Eastern">
														<option value="Akim Swedru, Eastern">
														<option value="Aboso, Western">
														<option value="Bekwai, Ashanti">
														<option value="Drobo, Brong-Ahafo">
														<option value="Banda Ahenkro, Brong-Ahafo">
												</datalist>
											</div>
										</div>
										<div class="form-group">

										<div class="form-group">
											<label for="inputName" class="col-sm-6 control-label">Number of days applied for</label>

											<div class="col-sm-6">
											<input type="number" class="form-control" id="inputName" placeholder="Number of days applied for">
											</div>
										</div>
										<div class="form-group">
											<label for="inputName" class="col-sm-6 control-label">Number of days left</label>

											<div class="col-sm-6">
											<input type="number" class="form-control" id="inputName" placeholder="Number of days left">
											</div>
										</div>
										<label for="dob" class="col-sm-6 control-label">Commencement Date</label>
											<div class="col-sm-6">
												<input type="text" class="form-control " id="datepicker7">
											</div>
										</div>
										<div class="form-group">
											<label for="promotion_to" class="col-sm-6 control-label">Leave Address</label>
											<div class="col-sm-6">
												<textarea class="form-control" placeholder="Enter grade promoted to"></textarea>
											</div>
										</div>
										<div class="form-group">
											<label for="unit" class="col-sm-6 control-label">Officer Taking Over</label>
											<div class="col-sm-6">
												<select class="form-control" required>
													<option>option 1</option>
													<option>option 2</option>
													<option>option 3</option>
													<option>option 4</option>
													<option>option 5</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="to" class="col-sm-6 control-label">To</label>
											<div class="col-sm-6">
												<textarea class="form-control" placeholder="Enter to..."></textarea>
											</div>
										</div>
										<div class="form-group">
											<label for="through" class="col-sm-6 control-label">Through</label>
											<div class="col-sm-6">
												<textarea class="form-control" placeholder="Enter through..."></textarea>
											</div>
										</div>
										<div class="box-footer">
												<button type="submit" class="btn btn-info pull-right">Save</button>
										</div>
										<!-- /.box-footer -->
									</form>
								</div>
								<!-- /.tab-pane -->
							</div>
							<!-- /.tab-content -->
						</div>
						<!-- /.nav-tabs-custom -->
					</div>
    			</div>
    		</div>
    	</div>
    </div>



    <!-- ################################################################################################################################## -->
