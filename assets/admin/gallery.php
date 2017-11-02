
<?php
session_start();
if(!isset($_SESSION["admin_id"]) && $_SESSION["admin_id"]==""){
		session_destroy();
		header('Location:index.php?logout=logout');
	}
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Normal Tables | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Preloader Css -->
    <link href="plugins/material-design-preloader/md-preloader.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
    <script>
function check(str)
{
    var a=str;
    if (confirm("Are You Sure, You Want To Delete This Description ?") == true) {
        window.location = 'delete_gallery.php?id=' + a;
    } else {
        x = "You pressed Cancel!";
    }
}
    
//function check_update(str)
//{
//    var a=str;
//     window.location = 'update_slider.php?upload=upload;
//  
//}
</script>

</head>

<body class="theme-deep-orange">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="md-preloader pl-size-md">
                <svg viewbox="0 0 75 75">
                    <circle cx="37.5" cy="37.5" r="33.5" class="pl-deep-orange" stroke-width="4" />
                </svg>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <?php 
     include_once 'top-bar.php';
        ?>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
<!--
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.3
                </div>
            </div>
-->
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
      
    </section>

    <section class="content">
          
                <!--POPUP-->
                <?php
                if(isset($_GET['add']))
                {
                ?>
                <div class="row">
                    <div class="col-lg-12" style="margin-top: 10px">
                    <div class="panel panel-default">
                        <div class="panel-heading">Add Gallery                       </div>
                    <div class="panel-body">
                        <form action="add_gallery.php" method="post" enctype="multipart/form-data">
      
                        
     <div class="col-md-4">
          <label>Photo :</label>
<!--          <input type="file"  name="files1" id="files" required="required" placeholder="Enter Faculty Experience">-->
         <input type="file" id="photo" name="photo"  value="Upload" >
								
          </div>
       
                            
    
<!--          <div class="col-md-4"><label>Select File :</label><input type="file"  name="file" class="form-control" required="required" />
          </div>-->
      
      <div class="col-md-4" style="margin-top: 24px;">
          
        <button type="submit" class="btn btn-primary">ADD</button>
        <a href="gallery.php" type="button" class="btn btn-primary">Back</a>
      </div>
        </form> 
                        </div>
                        </div>
                   </div>
                </div>
                <?php }?>
        
                <!---POPUP END--->
        
        
        
        <?php
//               $popup_analysis=$_GET['chart'];
//               
//               if($popup_analysis == 'chart')
//               {
                   
               
               
               ?> 
                <!--Analysis POPUP
-->                <div class="modal fade" id="analysis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
        <form action="upload/file_upload_code.php" method="post">
      <div class="modal-body">
          <input type="file" name="upload"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Upload</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
        </form>
    </div>
  </div>
</div><!--
                -Analysis POPUP END--->
               
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
                                    <?php
                                    if(!isset($_GET['add']) && !isset($_GET['update']))
                                    {
                                    ?>
                                    <div class="panel-heading">Gallery <a href="gallery.php?add=add" type="button" class="btn btn-primary" >
                                     Add</a>
                                    </div>
                                   
                                    <?php }?>
					<div class="panel-body">
<!--						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">-->
                                                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						    <thead>
						    <tr>
						        <th>Sr No</th>
						        <th>Photo</th>
                                
                                
<!--                                                        <th>Update</th>-->
                                                        <th><center>Delete</th>
<!--                                <th></th>-->
						    </tr>
						    </thead>
                                                    <tbody>
                                                        <?php
//                                                        $st_date=date('01-m-Y');
//                                                        $start_date=  strtotime($st_date);
//                                                        
//                                                        $td=date('d-m-Y');
//                                                        $today=  strtotime($td);
                                                       
                                                         $i=1;
                                                        
                                                        //$query=  mysqli_query($con, "select * from projects where teacher_id='$id'");
                                                        //$no= mysqli_affected_rows($con);
                                                        
                                                        
                                                        $query11=  mysqli_query($con, "select * from gallery");
                                                        while($result=  mysqli_fetch_array($query11))
                                                        {
                                                               
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            
                                                            <td><a href="gallery/<?php echo $result['photo']; ?>"><img src="gallery/<?php echo $result['photo']; ?>" weidth="50px" height="50px"/></a></td>
                                                            
<!--
                                                            <td>
                                                                <a href="announcement.php?id=<?php echo $result['announcement_id'];?>&update=update"><svg class="glyph stroked pencil" style="color: black;height: 21px;width: 31px;"><use xlink:href="#stroked-pencil"/></svg></a>
                                                                </td>
-->
                                                                <td>
                                                                    <center><a href="#" onclick="check(<?php echo $result['gallery_id'];?>)" ><i class="material-icons">delete_sweep</i></a></center>
                                                            </td>
                                                          </tr>
                                                        <?php $i++; }?>
                                                    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
		
								
		
	

		
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>