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


<link rel="shortcut icon" href="favicon.ico"/>
</head>
<style type="text/css">
	
    #page-wrap { width: 600px; margin: 15px auto; }
    #main { width: 390px; float: left; }
    #sidebar { width: 190px; float: right;}

    .selectedImage {
    	border-color: red;
    	border-width: 2px;
    }
    .comment-size{
    	height: 22px;
    	overflow:hidden; 
    }
    .imageTag{
    	height: 22px;
    	overflow: hidden;
    }
    .thumbnail {
    position:relative;
    overflow:hidden;
	}
	 
	.caption {
	    position:absolute;
	    top:-100%;
	    right:0;
	    /*background:rgba(66, 139, 202, 0.75);*/
	    width:100%;
	    height:100%;
	    padding:2%;
	    text-align:center;
	    color:#ffffff !important;
	    z-index:2;
	    -webkit-transition: all 0.5s ease-in-out;
	    -moz-transition: all 0.5s ease-in-out;
	    -o-transition: all 0.5s ease-in-out;
	    -ms-transition: all 0.5s ease-in-out;
	    transition: all 0.5s ease-in-out;
	}
	.thumbnail:hover .caption {
	    top:0%;
	}


</style>
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
				<li class="start active">
					<a href="#">
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
				<li class="start ">
					<a href="admin.php">
						<i class="fa fa-cogs"></i>
						<span class="title">
							Admin
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
					Timeline <small> keep up to date with the recent uploaded images</small>
					</h3>
				</div>
			</div>

			<!-- editModal and image slider-->
			<div id="editModal" class="modal fade">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body">
			        <img src="assets/img/search/1.jpg" class="img-responsive" alt="">
			        <br>
					
			        <form role="form">
					  <div class="form-group">
					    <label for="exampleInputPassword1">Image Name</label>
					    <input type="text" class="form-control" placeholder="Text input">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Comment</label>
						<textarea class="form-control" rows="3"></textarea>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Comment</label>
						<textarea class="form-control" rows="3"></textarea>
					  </div>
					  
					  <div class="form-group">
					      <label for="exampleInputPassword1">Tags <small>check a box to add or remove a tag</small></label>					      
					  </div>
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
								echo '<div class="checkbox">';
								echo  '<label>';
								echo    '<input type="checkbox" value="">';
								echo    	$row['name'];
								echo  '</label>';
							    echo'</div>';
							}
		        		?>
					  <button type="button" class="btn btn-primary btn-lg btn-block">Save</button>
					  <button type="button" class="btn btn-danger btn-lg btn-blocks">Delete</button>
					</form>
			      </div>
			    </div>
			  </div>
			</div>

			<!-- main -->
			

			
			<div class="row">
				<!-- image content -->
				<div class="col-md-10">
					<?php
						$con=mysqli_connect("mysql1.000webhost.com","a7310273_db","feay091088141","a7310273_db");
	        			// Check connection
						if (mysqli_connect_errno())
						{
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
						$result = mysqli_query($con,"SELECT * FROM Image ORDER BY date DESC");
						$date = 0;
						$first_time = true;
						$check_row = 0;
						while($row = mysqli_fetch_array($result))
						{
							if($date != $row['date']){
								if($first_time){
									$first_time = false;
								}
								else{
									$check_row = 0;
									echo '</div>';
								}
								$date = $row['date'];
								
								echo '<blockquote class="page-breadcrumb breadcrumb">
										  <p>'.date("j M Y", strtotime($row['date'])).'</p>
										</blockquote>';
								echo '<div class="row">';
							}
							echo '<div class="col-md-2" >
									<div class="thumbnail" value="'.$row['name'].'">
										<img src="images/'.$row['name'].'"  style="height:200px; width:100%;">
										<p class="comment-size">'.$row['comment'].'</p>
										<div class=" caption" mode="unselected">
										<ul class="list-inline sidebar-tags imageTag">';
										$image_name = $row['name'];
										$tags = mysqli_query($con,"SELECT * FROM ImageTag WHERE image_name = '$image_name'");

										if (mysqli_num_rows($tags) == 0){
											echo '<li name="">
													<a href="#">
													</a>
												</li>';
										}
										else{
											while($tag = mysqli_fetch_array($tags))
											{
												echo '<li name="'.$tag['tag_name'].'">
													<a href="#">
														<i class="fa fa-tags"></i>'.$tag['tag_name'].
													'</a>
												</li>';
											}
										}
										
							echo		'</ul>
										<p><button class="btn label label-primary zoomBtn" name="'.$row['name'].'" comment="'.$row['comment'].'" date="'.$row['date'].'">Zoom </button></p>
										<p><button class="btn label label-danger editBtn" name="'.$row['name'].'" comment="'.$row['comment'].'" date="'.$row['date'].'">Edit </button>
										</p><p><button class="btn label label-success selectBtn" mode="unselected">Select</button></p>
										</div>
										
									</div>
								</div>';
							$check_row +=1;
							if ($check_row == 6) {

								echo "</div><div class='row'>";
								$check_row = 0;
							}
						}
						if ($check_row == 0){
							echo '</div></div>';
						}
						else{
							echo "</div>";
						}

						
					?>
				</div>
				<!-- right side bar -->
				<div class="col-md-2">
					<div id="sidebar">
						<a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addImageToAlbumModal">Add to Album <span class="badge badge-important" id="selectedNum">
										 0
						</span></a>
						<a href="#" id="deleteImageBtn" class="btn btn-danger btn-block">Delete Image <span class="badge badge-important" id="selectedNumD">
										 0
						</span></a>
						<h3>Tags</h3>
					  	<ul class="list-inline sidebar-tags">
					  		<li>
					  			<a href="#" class="tagBtn" name="all">
					  				<i class='fa fa-tags'></i> All
					  			</a>
					  		</li>	
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
											<a href="#" class="tagBtn" name="'.$row['name'].'">
												<i class="fa fa-tags"></i>'.$row['name'].
											'</a>
										</li>';
								}
					  		?>
						</ul>
					</div>
				</div>
			</div>

			<!-- Add image to album modal -->
			<div class="modal fade" id="addImageToAlbumModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body">
			        <h3>Gallary</h3>
			        <select class="form-control" id="gallary_list">
			        		<?php
			        			$con=mysqli_connect("mysql1.000webhost.com","a7310273_db","feay091088141","a7310273_db");
								if (mysqli_connect_errno())
								{
								  echo "Failed to connect to MySQL: " . mysqli_connect_error();
								}
								$result = mysqli_query($con,"SELECT * FROM Gallary");
								while($row = mysqli_fetch_array($result))
								{
									echo '<option>';
									echo $row['name'];
									echo '</option>';
								}
								mysqli_close($con);
			        		?>
					</select>  
					<img id="progressAITAM" style='display:none;'src='images/ajax-loader.gif'/>
			      </div>
			      <div class="modal-footer">
			      	<button id="saveBtn_addImageToAlbumModal" type="button" class="btn btn-primary">Save changes</button>
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>

			<!-- edit modal -->
			<div class="modal fade" id="editImageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-full">
			    <div class="modal-content">
			      <div class="row modal-body">
				      	<div class="col-md-6">
				      		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							  <div class="carousel-inner">
						        <div class="item active">
						          <img data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide">
						        </div>
						        <div class="item">
						          <img data-src="holder.js/900x500/auto/#666:#444/text:Second slide" alt="Second slide">
						        </div>
						        <div class="item">
						          <img data-src="holder.js/900x500/auto/#555:#333/text:Third slide" alt="Third slide">
						        </div>
						      </div>
							  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left"></span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right"></span>
							  </a>
							</div>
				      	</div>
				      	<div class="col-md-6">
				      		<h3>Comment</h3>
					        <textarea id="commentEditModal" class="form-control" rows="3" old-comment=""></textarea>
					        <h3>Tags</h3>
					        <div id="tag_list">
							</div>
							<img id="progressEM" style='display:none;'src='images/ajax-loader.gif'/>
							<div class="pull-right">
								<button id="saveBtn_editImageModal" type="button" class="btn btn-primary">Save changes</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
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
	var select_number = 0;
	// to check the clicked button is zoom or edit
	var clicked_btn_class;
	$('.tagCheck[value="1"]').attr("checked", true);
	var te = "Bangkok"
	var image_list = ""
	var carousel_postion = "";
	$("#deleteImageBtn").click(function(){
		if(select_number > 0 ){
			var r=confirm("Press OK Button To Confirm!");
			if (r==true)
			  {
			  	$(".selectedImage").each(function() {
		   
				   var image_name = $(this).attr("value");
				   $(this).attr("class", "mix-inner")
				   $.ajax({
					    type: 'POST',
					    url: 'deleteImage.php',
					    data: { 
					        'name': image_name 
					    },
					    success: function(msg){
					    	location.reload();

					    }
					});
				});
			  }
			else
			  {

			  }
			}
		
	})
	// Zoom & Edit button
	$(".editBtn, .zoomBtn").click(function(){
		var date = $(this).attr("date");
		var name = $(this).attr("name");
		var comment = $(this).attr("comment")
		clicked_btn_class = $(this).attr("class");
		$("#saveBtn_editImageModal").attr("name", name);
		$("#commentEditModal").val(comment);
		$("#commentEditModal").attr("disabled", false);
		$("#saveBtn_editImageModal").show();
		$("#commentEditModal").attr("old-comment", comment);
		$('.tagCheck[value="1"]').attr("checked", true);
		getImageTag(name, clicked_btn_class);
		//get image by date
		image_list = "";
		$(".editBtn").each(function() {
			if($(this).attr("date") == date){
				image_list += $(this).attr("name")+"&"+$(this).attr("comment")+"$";
			}
		});

		// check if zoonBtn is clicked
		if(clicked_btn_class == "btn label label-primary zoomBtn"){
			$("#commentEditModal").attr("disabled", true);
			$("#saveBtn_editImageModal").hide();
		}

		// add images to slide
		$(".carousel-inner").empty();
		var image_list_split = image_list.split("$");
		for(var j=0;j<image_list_split.length-1; j++){
			var image = image_list_split[j].split("&");
			if(image[0] == name){
				carousel_postion = j;
				$(".carousel-inner").append("<div class='item active'>"+
				          						"<img src='images/"+image[0]+"' class='img-responsive' style='width:100%;'>"+
				        						"</div>");
			}
			else{
				$(".carousel-inner").append("<div class='item'>"+
				          					"<img src='images/"+image[0]+"' class='img-responsive' style='width:100%;'>"+
				        				"</div>");
			}
			
		}
		$("#editImageModal").modal("show");
		
	})
	
	
	// confirm button before edit image's attributes
	$("#saveBtn_editImageModal").click(function(){
		var name = $("#saveBtn_editImageModal").attr("name");
		var old_comment = $("#commentEditModal").attr("old-comment");
		var new_comment = $("#commentEditModal").val();
		
		if( new_comment != old_comment){
			displayProgressBarEM();
			$.ajax({
			    type: 'POST',
			    url: 'editComment.php',
			    data: { 
			    	'name': name,
			        'comment': new_comment
			    },
			    success: function(msg){
			    	// $('#progressEM').hide();
			    	location.reload();
			    	
			    }
			});
		}
		
		$("#tag_list input").each(function() {
			if($(this).is(':checked') && $(this).attr("old_value") == "false"){
				displayProgressBarEM();
				var tag_name = $(this).attr("value");
				$.ajax({
				    type: 'POST',
				    url: 'addTagToImage.php',
				    data: { 
				    	'image_name': name,
				        'tag_name': tag_name
				    },
				    success: function(msg){
				    	// $('#progressEM').hide();
				    	location.reload();
				    }
				});
			}
			else if(!$(this).is(':checked') && $(this).attr("old_value") == "true"){
				displayProgressBarEM();
				var tag_name = $(this).attr("value");
				$.ajax({
				    type: 'POST',
				    url: 'deleteTagFromImage.php',
				    data: { 
				    	'image_name': name,
				        'tag_name': tag_name
				    },
				    success: function(msg){
				    	// $('#progressEM').hide();
				    	location.reload();
				    }
				});
			}
			

		})
		
	})

	// confirm button and send images to the selected album
	$("#saveBtn_addImageToAlbumModal").click(function(){
		var gallary_name = $("#gallary_list :selected").text();
		
		$(".selectedImage").each(function() {
		   
		   var image_name = $(this).attr("value");
		   $(this).attr("class", "mix-inner")
		   displayProgressBarAITAM();
		   $.ajax({
			    type: 'POST',
			    // make sure you respect the same origin policy with this url:
			    // http://en.wikipedia.org/wiki/Same_origin_policy
			    url: 'addImageToGallary.php',
			    data: { 
			        'gallary_name': gallary_name, 
			        'image_name': image_name // <-- the $ sign in the parameter name seems unusual, I would avoid it
			    },
			    success: function(msg){
			    	

			    	
			    	hideProgressBarAITAM();
			    	location.reload();

			    }
			});
		});  
		
	})
	// click listener handlering image selection feature
	$(".selectBtn").click(function(){
		var parent = $(this).parent().parent().parent();
		if($(this).attr("mode") == "unselected"){
			$(this).attr("mode", "selected");
			parent.attr("class", "thumbnail selectedImage");
			select_number+=1;
			
		}
		else{
			$(this).attr("mode", "unselected");
			parent.attr("class", "thumbnail");
			select_number-=1;
			
		}	
		$("#selectedNum").text(select_number);
			$("#selectedNumD").text(select_number);
		
	})
	

	// filter images by tag
	$(".tagBtn").click(function(){
		var selectedTag = $(this).attr("name");
		if(selectedTag == "all"){
			jQuery('.imageTag').each(function() {
				$(this).children('li').each(function () {
					var currentElement = $(this);
					currentElement.parent().parent().parent().parent().show();
				})
			})	
		}
		else{
			jQuery('.imageTag').each(function() {
			    var currentElement = $(this);

			    var checkExist = false
			    $(this).children('li').each(function () {
			    	var currentElement = $(this);
				    if(currentElement.attr("name")+"" == selectedTag+""){
				    	currentElement.parent().parent().parent().parent().show();
				    	checkExist = true;
				    }
				    else if(checkExist == false){
				    	currentElement.parent().parent().parent().parent().hide();
				    }
				});
			    
			    
			});
		}
	})

	function displayProgressBarEM(){
		$('#progressEM').show();
			$('#progressEM').css("display","block");
			$('#progressEM').css("margin-right","auto");
			$('#progressEM').css("margin-left","auto");
	}
	function displayProgressBarAITAM(){
		$('#progressAITAM').show();
			$('#progressAITAM').css("display","block");
			$('#progressAITAM').css("margin-right","auto");
			$('#progressAITAM').css("margin-left","auto");
	}
	function hideProgressBarAITAM(){
		$('#progressAITAM').hide();
	}

	// right side bar's animation code
	$(function() {
            var offset = $("#sidebar").offset();
            var topPadding = 80;
            $(window).scroll(function() {
                if ($(window).scrollTop() > offset.top) {
                    $("#sidebar").stop().animate({
                        marginTop: $(window).scrollTop() - offset.top + topPadding
                    });
                } else {
                    $("#sidebar").stop().animate({
                        marginTop: 0
                    });
                };
            });
        });
	// init image slider
	$('.carousel').carousel({
	  interval: false
	})
	// left button of slider click listener
	$('.carousel-control.left').click(function() {
	 	if(carousel_postion == 0){
	  		carousel_postion = image_list.split("$").length-2;
	  	}
	  	else{
	  		carousel_postion -= 1;
	  	}
	  	var current_image_list = image_list.split("$")[carousel_postion];
	  	var current_image = current_image_list.split("&");
 		$("#saveBtn_editImageModal").attr("name", current_image[0]);
		$("#commentEditModal").val(current_image[1]);
		$("#commentEditModal").attr("old-comment", current_image[1]);
		$('.tagCheck[value="1"]').attr("checked", true);
		getImageTag(current_image[0], clicked_btn_class);
	});
	// right button of slider clikc listener
	$('.carousel-control.right').click(function() {
		
	  	if(carousel_postion < image_list.split("$").length-2){
	  		carousel_postion+=1;
	  	}
	  	else{
	  		carousel_postion = 0;
	  	}
	  	var current_image_list = image_list.split("$")[carousel_postion];
	  	var current_image = current_image_list.split("&");
 		$("#saveBtn_editImageModal").attr("name", current_image[0]);
		$("#commentEditModal").val(current_image[1]);
		$("#commentEditModal").attr("old-comment", current_image[1]);
		$('.tagCheck[value="1"]').attr("checked", true);
		getImageTag(current_image[0], clicked_btn_class);
		
	});
	function getImageTag(name, clicked_btn_class){
		$.ajax({
			    type: 'POST',
			    url: 'getImageTag.php',
			    data: { 
			        'name': name
			    },
			    success: function(result){
			    	image_carousel = result;
			    	var a = result.split(',');
			    	$("#tag_list").empty();
			    	for (var i = 0; i < a.length-1; i++) {
			    		b = a[i].split(" ");
			    		if(b[1] == b[0]){
			    			if(clicked_btn_class == "btn label label-primary zoomBtn"){
			    				$("#tag_list").append("<div class='checkbox'><label><input checked='true' disabled type='checkbox'"+
			    								"value='"+b[0]+"' old_value='true'><i class='fa fa-tags'></i>"+b[0]+
			    								"</label></div>");
			    			}
			    			else{
			    				$("#tag_list").append("<div class='checkbox'><label><input checked='true' type='checkbox'"+
			    								"value='"+b[0]+"' old_value='true'><i class='fa fa-tags'></i>"+b[0]+
			    								"</label></div>");
			    			}
			    			
			    		}
			    		else{
			    			if(clicked_btn_class == "btn label label-primary zoomBtn"){
			    				$("#tag_list").append("<div class='checkbox'><label><input disabled type='checkbox'"+
			    								"value='"+b[0]+"' old_value='false'><i class='fa fa-tags'></i>"+b[0]+
			    								"</label></div>");
			    			}
			    			else{
			    				$("#tag_list").append("<div class='checkbox'><label><input type='checkbox'"+
			    								"value='"+b[0]+"' old_value='false'><i class='fa fa-tags'></i>"+b[0]+
			    								"</label></div>");
			    			}
			    			
			    		}
					}
			    }
			});
	}
</script>
</body>
</html>