<?php 
include 'config.php';

?>
<!-- banner-down-->
			<div class="wthree_banner_grids">
			<div class="container">
				<a href="#" href="#" data-toggle="modal" data-target="#myModal2"><div class="col-md-3 wthree_banner_grid" style="height:104px; margin-bottom:5px">
				<img src="plus.png" />
					<h4>Join a Classroom</h4>
					<div class="clearfix"> </div>
				</div></a>
				
	
				<?php
				$sql = "SELECT * FROM class where code in (SELECT code FROM member where sid='".$_SESSION["sid"]."')";
                $result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
					$_SESSION[$row["code"]]=$row["name"];
					echo '<a href="class_view.php?class='.$row["code"].'" ><div class="col-md-3 wthree_banner_grid" style="height:104px; margin-bottom:5px">
				<i class="fa fa-book" aria-hidden="true"></i>
					<h4>'.$row["name"].'</h4>
					<div class="clearfix"> </div>
				</div></a>';
					}
				} else {
					echo "You Haven't Join any Classes";
				}
				$conn->close();
				
				
				
				
				
				
				
				?>
				
				
				
				<div class="clearfix"> </div>
				</div>
			</div>
<!-- //banner-down-->

<!-- Modal1 -->
													<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	<h3 class="agileinfo_sign">Join A ClassRoom</h3>	
																			<div class="login-form">
																				<form action="join_class.php" method="post">
																					<input type="text" name="code" placeholder="Enter The Class Code" required="">
																	                <div class="tp">
																						<input type="submit" name="submit" value="Join">
																					</div>
																					
																					
																				</form>
																			</div>
																			
	
																		</div>
																</div>
															</div>
														</div>
													</div>
													<!-- //Modal1 -->	