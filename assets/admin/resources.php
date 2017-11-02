
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
        window.location = 'delete_resources.php?id=' + a;
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
  <script src="plugins/jquery/jquery-3.1.1.min.js"></script>
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
   <?php 
     include_once 'top-bar.php';
        ?>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.html">ADMINBSB - MATERIAL DESIGN</a>
            </div>
        </div>
    </nav>
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
                        <div class="panel-heading">Add Resources Details                        </div>
                    <div class="panel-body">
<!--                        <form action="add_resources.php" method="post" enctype="multipart/form-data">-->
                         <form action="add_resources.php" method="post" enctype="multipart/form-data">
      <div class="col-md-4">
          <div class="form-group">
          <div class="form-line">
          <label>Title :</label>
          <input type="text"  name="title" id="title" class="form-control" required="required" placeholder="Enter Resources Title">
          </div></div>
        </div>
                        
     <div class="col-md-4">
         <div class="form-group">
           <div class="form-line">
          <label> Image :</label>
<!--          <input type="file"  name="files1" id="files" required="required" placeholder="Enter Faculty Experience">-->
         <input type="file" id="image" name="image"  value="Upload" required="required" >
             </div></div>
          </div>
                            
        
          <!-- CKEditor -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <center><label>Content</label></center>
                    <div class="card">
                        <div class="header">
                            
<!--
                            <h2>
                                CKEDITOR
                                <small>CKEditor is a ready-for-use HTML text editor designed to simplify web content creation. Taken from <a href="http://ckeditor.com/" target="_blank">ckeditor.com</a></small>
                            </h2>
-->
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                         <div class="body">
                            <textarea id="ckeditor" >

                            </textarea >
                                                            <script>
                                    function ckvalue()
                                    { alert("Content saved");
                                      var data = CKEDITOR.instances.ckeditor.getData();
                                  
                                      $("#display").text(data);   
                                        
                                    }
                                                               
                                    </script>
                             <button type="button" name="content" class="btn btn-primary" onclick="ckvalue();" >Save Content</button>
<!--
                            <div id="display">
                            
                            </div>
-->
                            <textarea id="display" name="content" style="visibility:hidden;" required="required"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CKEditor -->
            
     
       
                            
    
<!--          <div class="col-md-4"><label>Select File :</label><input type="file"  name="file" class="form-control" required="required" />
          </div>-->
      
      <div class="col-md-4" style="margin-top: 24px;">
         
        <button type="submit" class="btn btn-primary">ADD</button>
        <a href="resources.php" type="button" class="btn btn-primary">Back</a>
      </div>
        </form> 
                        </div>
                        </div>
                   </div>
                </div>
                <?php }?>
        
                <!---POPUP END--->
        
        
        <?php
                if(isset($_GET['update']))
                { $id=$_GET['id'];
                 // $_SESSION['faculty_id']=$id;
                    $q1=  mysqli_query($con, "select * from resources where resources_id='$id'");
                   // $f1=  mysqli_fetch_array($q1);
                  while($result=  mysqli_fetch_array($q1))
            { $Rcontent=$result['description']; 
                                                            
                ?>
                <div class="row">
                    <div class="col-lg-12" style="margin-top: 10px">
                    <div class="panel panel-default">
                        <div class="panel-heading">Update Resources                        </div>
                    <div class="panel-body">
                        <form action="update_resources.php" method="post" enctype="multipart/form-data">
      <div class="col-md-4">
          <div class="form-group">
                                    <div class="form-line">
          <label>Title :</label>
          <input type="text"  name="title" id="title" class="form-control" required="required" placeholder="Enter Resources Title" value="<?php echo $result['title']; ?>">
              </div></div></div>
                
                            <div class="col-md-4">
          <label>Existing Image :</label>
          <img src="resourcesimg/<?php echo $result['image']; ?>" width="50px" height="50px"/>
           <input type="hidden" id="uphoto" name="photo"  value="<?php echo $result['image']; ?>" />
          </div>
                                                    
     <div class="col-md-4">
         <div class="form-group">
                                    <div class="form-line">
          <label> Photo :</label>
<!--          <input type="file"  name="files1" id="files" required="required" placeholder="Enter Faculty Experience">-->
         <input type="file" id="Uimage" name="Uimage"  value="Upload" >
         <input type="hidden" id="resources_id" name="resources_id"  value="<?php echo $id; ?>" />
             </div></div>
								
          </div>
                            
          
<!--          <label>Content :</label>-->
                <!-- CKEditor -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <center><label>Content</label></center>
                    <div class="card">
                        <div class="header">
                            
<!--
                            <h2>
                                CKEDITOR
                                <small>CKEditor is a ready-for-use HTML text editor designed to simplify web content creation. Taken from <a href="http://ckeditor.com/" target="_blank">ckeditor.com</a></small>
                            </h2>
-->
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            
                            <textarea id="ckeditor" ><?php echo $Rcontent;?>
  
                            </textarea >
                                            <script>
                                    function ckvalue()
                                    {  alert("Content saved");
                                      var data = CKEDITOR.instances.ckeditor.getData();
                                   //alert(data);
                                      $("#display").text(data);   
                                        
                                    }
                                                               
                                    </script>
                             <button type="button" name="content" class="btn btn-primary" onclick="ckvalue();" >Save Content</button>
<!--
                            <div id="display">
                            
                            </div>
-->
                            <textarea id="display" name="content" style="visibility:hidden;"><?php echo $Rcontent;?></textarea>
                            
<!--                                <input type="button" onclick="ckvalue();" value="send">-->
<!--
                            <div id="display">
                            
                            </div>
-->
<!--                            <textarea id="display"></textarea>-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CKEditor -->
<!--          <input type="text"  name="content" id="content" class="form-control" required="required" placeholder="Enter Content" value="<?php echo $result['content']; ?>">-->
              
    
       
                            
    
<!--          <div class="col-md-4"><label>Select File :</label><input type="file"  name="file" class="form-control" required="required" />
          </div>-->
      
      <div class="col-md-4" style="margin-top: 24px;">
          
        <button type="submit" class="btn btn-primary">UPDATE</button>
        <a href="resources.php" type="button" class="btn btn-primary">Back</a>
      </div>
        </form> 
                        </div>
                        </div>
                   </div>
                </div>
                <?php }
                }?>
        
        
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
                                    <div class="panel-heading">Resources Description <a href="resources.php?add=add" type="button" class="btn btn-primary" >
                                     Add</a>
                                    </div>
                                   
                                    <?php }?>
					<div class="panel-body">
<!--						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">-->
                                                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						    <thead>
						    <tr>
						        <th>Sr No</th>
						        <th>Title</th>
                                <th>Image</th> 
                                <th>Description</th>
                                
                                
<!--                                                        <th>Update</th>-->
<th><center>Delete</th>
                                <th><center>Update</th>
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
                                                        
                                                        
                                                        $query11=  mysqli_query($con, "select * from resources order by `resources_id` DESC;");
                                                        while($result=  mysqli_fetch_array($query11))
                                                        {
                                                               
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo $result['title']; ?></td>
                                                            
                                                            <td><a href="resourcesimg/<?php echo $result['image']; ?>"><img src="resourcesimg/<?php echo $result['image']; ?>" weidth="50px" height="50px"/></a></td>
                                                            <td><?php echo $result['description']; ?></td>
<!--
                                                            <td>
                                                                <a href="announcement.php?id=<?php echo $result['announcement_id'];?>&update=update"><svg class="glyph stroked pencil" style="color: black;height: 21px;width: 31px;"><use xlink:href="#stroked-pencil"/></svg></a>
                                                                </td>
-->
                                                                <td>
                                                                    <center><a href="#" onclick="check(<?php echo $result['resources_id'];?>)" ><i class="material-icons">delete_sweep</i></a></center>
                                                            </td>
                                                            <td><center><a href="resources.php?update=update && id=<?php echo $result['resources_id'];?>"><i class="material-icons">create</i></a></center></td>
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
<script src="js/pages/forms/editors.js"></script>
    
    
    <!-- Ckeditor -->
    <script src="plugins/ckeditor/ckeditor.js"></script>
    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>