<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<head>
<meta charset="utf-8"/>
<title>NiceLoop Factory</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>


<!-- my custom area -->
<link rel="stylesheet" type="text/css" href="assets/css/pages/search.css">
<link href="assets/css/pages/blog.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>


<link rel="shortcut icon" href="favicon.ico"/>
</head>

<body class="page-header-fixed page-sidebar-closed">
<div class="header navbar navbar-fixed-top">
	<div class="header-inner">
		<a class="navbar-brand" href="index.html">
			<img src="assets/img/logo.png" alt="logo" class="img-responsive"/>
		</a>
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="assets/img/menu-toggler.png" alt=""/>
		</a>
		<ul class="nav navbar-nav pull-right">
			
		</ul>
	</div>
</div>
<div class="clearfix">
</div>
<div class="page-container">
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<ul class="page-sidebar-menu">
				<li class="start">
					<a href="index.php">
						<i class="fa fa-home"></i>
						<span class="title">
							Timeline
						</span>
						<span class="selected">
						</span>

					</a>
				</li>
				<li>
					<a href="album.php">
						<i class="fa fa-table"></i>
						<span class="title">
							Album
						</span>
					</a>
				</li>
				<li class="start active">
					<a href="#">
						<i class="fa fa-cogs"></i>
						<span class="title">
							Admin
						</span>
						<span class="selected">
						</span>
					</a>
				</li>
				
			</ul>
		</div>
	</div>

	<div class="page-content-wrapper">
		<div class="page-content">
			
			<div class="row">
				<div class="col-md-12">
					<h3 class="page-title">
					Admin <small> manage tag and images</small>
					</h3>
				</div>
			</div>
			<!-- main -->
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue">
						<div class="visual">
							<i class="fa fa-comments"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php
						  			$con=mysqli_connect("mysql1.000webhost.com","a7310273_db","feay091088141","a7310273_db");
				        			// Check connection
									if (mysqli_connect_errno())
									{
									  echo "Failed to connect to MySQL: " . mysqli_connect_error();
									}
									$result = mysqli_query($con,"SELECT COUNT(*) AS count FROM Image");
									while($row = mysqli_fetch_array($result))
									{
										echo $row['count'];
									}
						  		?>	
							</div>
							<div class="desc">
								 Images
							</div>
						</div>
						<a class="more" href="#">
							 View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?php
						  			$con=mysqli_connect("mysql1.000webhost.com","a7310273_db","feay091088141","a7310273_db");
				        			// Check connection
									if (mysqli_connect_errno())
									{
									  echo "Failed to connect to MySQL: " . mysqli_connect_error();
									}
									$result = mysqli_query($con,"SELECT COUNT(*) AS count FROM Gallary");
									while($row = mysqli_fetch_array($result))
									{
										echo $row['count'];
									}
						  		?>
							</div>
							<div class="desc">
								 Albums
							</div>
						</div>
						<a class="more" href="#">
							 View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?php
						  			$con=mysqli_connect("mysql1.000webhost.com","a7310273_db","feay091088141","a7310273_db");
				        			// Check connection
									if (mysqli_connect_errno())
									{
									  echo "Failed to connect to MySQL: " . mysqli_connect_error();
									}
									$result = mysqli_query($con,"SELECT COUNT(*) AS count FROM Tag");
									while($row = mysqli_fetch_array($result))
									{
										echo $row['count'];
									}
						  		?>
							</div>
							<div class="desc">
								 Tags
							</div>
						</div>
						<a class="more" href="#">
							 View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat yellow">
						<div class="visual">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?php
						  			$con=mysqli_connect("mysql1.000webhost.com","a7310273_db","feay091088141","a7310273_db");
				        			// Check connection
									if (mysqli_connect_errno())
									{
									  echo "Failed to connect to MySQL: " . mysqli_connect_error();
									}
									$result = mysqli_query($con,"SELECT date FROM Image ORDER BY date DESC");
									while($row = mysqli_fetch_array($result))
									{
										echo date("D j, M", strtotime($row['date']));
										break;
									}
						  		?>
							</div>
							<div class="desc">
								 Lastest Image
							</div>
						</div>
						<a class="more" href="#">
							 View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
			</div>
			<!-- tag & album -->
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="portlet box purple tasks-widget">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-check"></i>Album
							</div>
							<div class="actions">
								<a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#createAlbumModal">
									 Create New Album</i>
								</a>
								<a class="btn btn-danger btn-xs" id="deleteAllBtnA">
									 Delete
									<span class="badge badge-important" id="selectedNumA">
										 0
									</span>
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="task-content">
								<div class="scroller" style="height: 305px;" data-always-visible="1" data-rail-visible1="1">
									<!-- START TASK LIST -->
									<ul class="task-list">
										<?php
								  			$con=mysqli_connect("mysql1.000webhost.com","a7310273_db","feay091088141","a7310273_db");
						        			// Check connection
											if (mysqli_connect_errno())
											{
											  echo "Failed to connect to MySQL: " . mysqli_connect_error();
											}
											$result = mysqli_query($con,"SELECT * FROM Gallary");
											while($row = mysqli_fetch_array($result))
											{
												echo '<li>
														<div class="task-checkbox">
															<input type="checkbox" class="liChildA" value="'.$row['name'].'"/>
														</div>
														<div class="task-title">
															<span class="task-title-sp">'.
																 $row['name']." (".$row['image_num'].")".
															'</span>
														</div>
														<div class="task-config">
															<div class="task-config-btn btn-group">
																<a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
																	<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
																</a>
																<ul class="dropdown-menu pull-right">
																	<li>
																		<a href="#" class="editBtnA" name="'.$row['name'].'">
																			<i class="fa fa-pencil"></i> Edit
																		</a>
																	</li>
																	<li>
																		<a href="#" class="deleteBtnA" name="'.$row['name'].'">
																			<i class="fa fa-trash-o"></i> Delete
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</li>';
											}
								  		?>	
										
									</ul>
									<!-- END START TASK LIST -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="portlet box green tasks-widget">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-check"></i>Tags
							</div>
							<div class="actions">
								<a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#createTagModal">
									 Create New Tag</i>
								</a>
								<a class="btn btn-danger btn-xs" id="deleteAllBtnA">
									 Delete
									<span class="badge badge-important" id="selectedNumA">
										 0
									</span>
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="task-content">
								<div class="scroller" style="height: 305px;" data-always-visible="1" data-rail-visible1="1">
									<!-- START TASK LIST -->
									<ul class="task-list">
										<?php
								  			$con=mysqli_connect("mysql1.000webhost.com","a7310273_db","feay091088141","a7310273_db");
						        			// Check connection
											if (mysqli_connect_errno())
											{
											  echo "Failed to connect to MySQL: " . mysqli_connect_error();
											}
											$result = mysqli_query($con,"SELECT * FROM Tag");
											while($row = mysqli_fetch_array($result))
											{
												echo '<li>
														<div class="task-checkbox">
															<input type="checkbox" class="liChild" value="'.$row['name'].'"/>
														</div>
														<div class="task-title">
															<span class="task-title-sp">'.
																 $row['name'].
															'</span>
														</div>
														<div class="task-config">
															<div class="task-config-btn btn-group">
																<a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
																	<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
																</a>
																<ul class="dropdown-menu pull-right">
																	<li>
																		<a href="#" class="editBtn" name="'.$row['name'].'">
																			<i class="fa fa-pencil"></i> Edit
																		</a>
																	</li>
																	<li>
																		<a href="#" class="deleteBtn" name="'.$row['name'].'">
																			<i class="fa fa-trash-o"></i> Delete
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</li>';
											}
								  		?>	
										
									</ul>
									<!-- END START TASK LIST -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="createTagModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body">
			      	<h3>Tag Name <small>no more than 64 letters</small></h3>
			        <input id="tag_name" Galtype="text" class="form-control" placeholder="Text input">
			        
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button id="saveBtn_createTagModal" type="button" class="btn btn-primary">Save changes</button>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="modal fade" id="createAlbumModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body">
			      	<h3>Album Name <small>no more than 64 letters</small></h3>
			        <input id="album_name" Galtype="text" class="form-control" placeholder="Text input">
			        
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button id="saveBtn_createAlbumModal" type="button" class="btn btn-primary">Save changes</button>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="modal fade" id="editTagModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body">
			      	<h3>Edit Tag's Name <small>no more than 64 letters</small></h3>
			        <input id="tag_editname" Galtype="text" class="form-control" placeholder="Text input">
			        
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button id="saveBtn_editTagModal" type="button" class="btn btn-primary" old-name="">Save changes</button>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="modal fade" id="editAlbumModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body">
			      	<h3>Edit Tag's Name <small>no more than 64 letters</small></h3>
			        <input id="album_editname" Galtype="text" class="form-control" placeholder="Text input">
			        
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button id="saveBtn_editAlbumModal" type="button" class="btn btn-primary" old-name="">Save changes</button>
			      </div>
			    </div>
			  </div>
			</div>
			</div>
		</div>
	</div>
</div>
<div class="footer">
	<div class="footer-inner">
		 2014 &copy; NiceLoop Factory.
	</div>
	<div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>



<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="assets/scripts/core/app.js"></script>
<script>
jQuery(document).ready(function() {    
   App.init();
});


</script>
<script type="text/javascript">
	var selected_number = 0;
	var selected_numberA = 0;
	// 

	$(".liChild").click(function(){
		if($(this).is(':checked')){
			selected_number+=1;
			$("#selectedNum").text(selected_number);
		}
		else{
			selected_number-=1;
			$("#selectedNum").text(selected_number);
		}
		
	})

	$("#deleteAllBtn").click(function(){
		$(".liChild").each(function () {
			if($(this).is(':checked')){
				var name = $(this).attr("value");
				$.ajax({
				    type: 'POST',
				    url: 'deleteTag.php',
				    data: { 
				        'name': name
				    },
				    success: function(result){			
				    	location.reload();		
				    }
				});
			}
			
		})
		
	})

	$(".deleteBtn").click(function(){
		var name = $(this).attr("name");
		$.ajax({
		    type: 'POST',
		    url: 'deleteTag.php',
		    data: { 
		        'name': name
		    },
		    success: function(msg){
				alert("The tag is deleted.");
				location.reload();
		    }
		});
	})
	$(".editBtn").click(function(){
		var name = $(this).attr("name");
		$("#tag_editname").val(name);
		$("#saveBtn_editTagModal").attr("old-name", name);
		$("#editTagModal").modal('toggle')
	})
	$("#saveBtn_editTagModal").click(function(){
   		var name = $(this).attr('old-name');
   		var new_name = $("#tag_editname").val();
   		$.ajax({
		    type: 'POST',
		    url: 'editTag.php',
		    data: { 
		        'name': name,
		        'new_name' : new_name
		    },
		    success: function(msg){
		    	$('#saveBtn_editTagModal').modal('hide');
				alert("The tag is modified.");
				location.reload();
		    }
		});
		
		
   })
	$("#saveBtn_createTagModal").click(function(){
   		var name = $("#tag_name").val();
   		$.ajax({
		    type: 'POST',
		    url: 'createTag.php',
		    data: { 
		        'name': name
		    },
		    success: function(msg){
		    	$('#createTagModal').modal('hide');
				alert("The tag is created.");
				location.reload();
		    }
		});
		
		
   })

	//// Album
	$(".liChildA").click(function(){
		if($(this).is(':checked')){
			selected_numberA+=1;
			$("#selectedNumA").text(selected_numberA);
		}
		else{
			selected_numberA-=1;
			$("#selectedNumA").text(selected_numberA);
		}
		
	})
	$(".editBtnA").click(function(){
		var name = $(this).attr("name");
		$("#album_editname").val(name);
		$("#saveBtn_editAlbumModal").attr("old-name", name);
		$("#editAlbumModal").modal('toggle')
	})
	$("#saveBtn_editAlbumModal").click(function(){
   		var name = $(this).attr('old-name');
   		var new_name = $("#album_editname").val();
   		$.ajax({
		    type: 'POST',
		    url: 'editAlbum.php',
		    data: { 
		        'name': name,
		        'new_name' : new_name
		    },
		    success: function(msg){
		    	$('#saveBtn_editAlbumModal').modal('hide');
				alert("The album is modified.");
				location.reload();
		    }
		});
		
		
    })
	$(".deleteBtnA").click(function(){
		var name = $(this).attr("name");
		$.ajax({
		    type: 'POST',
		    url: 'deleteAlbum.php',
		    data: { 
		        'name': name
		    },
		    success: function(msg){
				alert("The album is deleted.");
				location.reload();
		    }
		});
	})
	$("#deleteAllBtnA").click(function(){
		$(".liChildA").each(function () {
			if($(this).is(':checked')){
				var name = $(this).attr("value");
				$.ajax({
				    type: 'POST',
				    url: 'deleteAlbum.php',
				    data: { 
				        'name': name
				    },
				    success: function(result){			
				    	location.reload();		
				    }
				});
			}
			
		})
		
	})

	$("#saveBtn_createAlbumModal").click(function(){
		var name = $("#album_name").val();
   		$.ajax({
		    type: 'POST',
		    url: 'createAlbum.php',
		    data: { 
		        'name': name
		    },
		    success: function(msg){
		    	$('#createAlbumModal').modal('hide');
				alert("The album is created.");
				location.reload();
		    }
		});
	})

</script>
</body>
</html>