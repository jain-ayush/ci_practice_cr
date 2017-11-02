
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
        window.location = 'delete_achievements.php?id=' + a;
    } else {
        x = "You pressed Cancel!";
    }
}
        function checkactive(str)
{
    var a=str;
    if (confirm("Are You Sure?") == true) {
        window.location = 'status.php?id=' + a;
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
  <?php 
     include_once 'top-bar.php';
        ?>
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
                { $id=$_GET['id'];
                 $query11=  mysqli_query($con, "SELECT * FROM achievements_year where achievements_year_id='$id'");
                 while($result=  mysqli_fetch_array($query11))
                    { //echo $result['month'];
                     //echo  $result['year'];
                    
                ?>
                <div class="row">
                    <div class="col-lg-12" style="margin-top: 10px">
                    <div class="panel panel-default">
                        <div class="panel-heading">Add Achievements Description                        </div>
                    <div class="panel-body">
                        <form action="add_achievements.php" method="post" enctype="multipart/form-data">
                            <div class="col-md-4">
          <div class="form-group">
                                    <div class="form-line">
            <label>Month :</label>
                           
          <input type="text"  name="month" id="month" class="form-control" required="required" placeholder="Enter Achievements Title" value="<?php echo $result['month']; ?> - <?php echo $result['year']; ?>" readonly>
              </div></div></div>
                           

      <div class="col-md-4">
          <div class="form-group">
                                    <div class="form-line">
          <label>Achievements Title :</label>
          <input type="text"  name="title" id="title" class="form-control" required="required" placeholder="Enter Achievements Title">
              </div></div></div>
           <div class="col-md-4">
               <div class="form-group">
                                    <div class="form-line">
          <label>Achievements Count :</label>
          <input type="text"  name="count" id="count" class="form-control" required="required" placeholder="Enter Count">
                   </div></div></div>
                            <input type="hidden"  name="achievements_year_id" id="achievements_year_id" class="form-control" value="<?php echo $id; ?>">
<!--             <div class="col-md-4">-->
                 
<!--                                    <div class="form-line">-->
               

     
       
                            
    
<!--          <div class="col-md-4"><label>Select File :</label><input type="file"  name="file" class="form-control" required="required" />
          </div>-->
      
      <div class="col-md-4" style="margin-top: 24px;">
          
        <button type="submit" class="btn btn-primary">ADD</button>
        <a href="achievements.php" type="button" class="btn btn-primary">Back</a>
      </div>
        </form> 
                        </div>
                        </div>
                   </div>
                </div>
                <?php } } ?>
        
                <!---POPUP END--->
        
        
        <?php
                if(isset($_GET['update']))
                { $id=$_GET['id'];
                 // $_SESSION['faculty_id']=$id;
                    $q1=  mysqli_query($con, "SELECT m.name as month,a.month as m_id ,a.`event` as event, a.`count`, a.`year`, a.achievements_id  FROM achievements a JOIN month m ON a.month = m.month_id where achievements_id='$id'");
                   // $f1=  mysqli_fetch_array($q1);
                  while($result=  mysqli_fetch_array($q1))
                                                        {
                                                            
                ?>
                <div class="row">
                    <div class="col-lg-12" style="margin-top: 10px">
                    <div class="panel panel-default">
                        <div class="panel-heading">Update Achievements                        </div>
                    <div class="panel-body">
                        <form action="update_achievements.php" method="post" enctype="multipart/form-data">
      <div class="col-md-4">
          <div class="form-group">
                                    <div class="form-line">
          <label>Achievements Title :</label>
          <input type="text"  name="title" id="title" class="form-control" required="required" placeholder="Enter Title" value="<?php echo $result['event']; ?>">
              </div></div></div>
                            <div class="col-md-4">
          <div class="form-group">
                                    <div class="form-line">
                                <label>Count :</label>
          <input type="text"  name="count" id="count" class="form-control" required="required" placeholder="Enter Count" value="<?php echo $result['count']; ?>">
          </div>
                                </div></div>
                        
         <div class="col-md-4">
             <div class="form-group">
                                    <div class="form-line">
          <label>Month :</label>
          <input type="text"  name="month" id="month" class="form-control" required="required" placeholder="Enter Month" value="<?php echo $result['month']; ?>" readonly>
          <input type="hidden"  name="m_id" id="m_id" class="form-control" required="required" placeholder="Enter Month" value="<?php echo $result['m_id']; ?>" readonly>
                 </div></div></div>
                        
        <div class="col-md-4">
            <div class="form-group">
                                    <div class="form-line">
          <label>Year :</label>
          <input type="text"  name="year" id="year" class="form-control" required="required" placeholder="Enter Year" value="<?php echo $result['year']; ?>">
                </div></div></div>
        
    
                
     <input type="hidden"  name="achievements_id" id="achievements_id" value="<?php echo $id ?>"/>
       
                            
    
<!--          <div class="col-md-4"><label>Select File :</label><input type="file"  name="file" class="form-control" required="required" />
          </div>-->
      
      <div class="col-md-4" style="margin-top: 24px;">
          
        <button type="submit" class="btn btn-primary">UPDATE</button>
        <a href="achievements.php" type="button" class="btn btn-primary">Back</a>
      </div>
        </form> 
                        </div>
                        </div>
                   </div>
                </div>
                <?php }
                }?>
        
        
            <!--POPUP-->
                <?php
                if(isset($_GET['month']))
                {
                ?>
                <div class="row">
                    <div class="col-lg-12" style="margin-top: 10px">
                    <div class="panel panel-default">
                        <div class="panel-heading">Add Achievements Month                        </div>
                    <div class="panel-body">
                        <form action="add_achievements_month.php" method="post" enctype="multipart/form-data">
     <label>Month :</label>
                            <?php
                                                       
                                                         $i=1;
                                                        $query11=  mysqli_query($con, "select * from month");
                      echo "<select name='month' value=''><option>Select</option>";  
                                                        while($result=  mysqli_fetch_array($query11))
                                                        {
                                                            
                                                            echo "<option value=".$result['month_id'].">".$result['name']."</option>";
//                                                            echo "<input type='hidden' name='none' id='none' class='form-control' required='required'' placeholder='Enter Highlight Content'>";
                                                        }
                    echo "</script>";
                                                        ?>
                              <input type='hidden' name='none' id='none' class='form-control' required='required' placeholder='Enter Highlight Content'>
                        
                         <div class="col-md-2">
          <label>Year :</label>
                  <select id="year" name="year">
  <script name="year">
  var myDate = new Date();
  var year = myDate.getFullYear();
  for(var i = 2010; i < year+1; i++){
	  document.write('<option value="'+i+'">'+i+'</option>');
  }
  </script>
</select>
       
          </div> 
<!--
           <div class="col-md-4">
               <div class="form-group">
                                    <div class="form-line">
          <label>Achievements Count :</label>
          <input type="text"  name="count" id="count" class="form-control" required="required" placeholder="Enter Count">
                   </div></div></div>
-->
                            
<!--             <div class="col-md-4">-->
                 
<!--                                    <div class="form-line">-->
               

     
       
                            
    
<!--          <div class="col-md-4"><label>Select File :</label><input type="file"  name="file" class="form-control" required="required" />
          </div>-->
      
      <div class="col-md-4" style="margin-top: 24px;">
          
        <button type="submit" class="btn btn-primary">ADD</button>
        <a href="achievements.php" type="button" class="btn btn-primary">Back</a>
      </div>
        </form> 
                        </div>
                        </div>
                   </div>
                </div>
                <?php }?>
        
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
                                    if(!isset($_GET['add']) && !isset($_GET['update']) && !isset($_GET['since']))
                                    {
                                    ?>
                                    <div class="panel-heading">Achievements Description <a href="achievements.php?add=add" type="button" class="btn btn-primary" >
                                     Add</a>
                                        <a href="achievements.php?month=month" type="button" class="btn btn-primary" >Add Achievement Month</a>
                                    </div>
                                   
                                    <?php }?>
                    
					<div class="panel-body">
<!--						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">-->
                                                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						    <thead>
						    <tr>
						        <th>Sr No</th>
<!--						        <th><center>Delete Month<th>-->
<!--                                <th>De</th>-->
                                <th>Date</th>
                                <th>Status</th>
<!--                                <th>Count</th>-->
                                
<!--                                                        <th>Update</th>-->
                                                        <th><center>View</th>
                                <th><center>Delete</th>
<!--                                <th>Update</th>-->
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
                                                        
                                                        
                                                        $query11=  mysqli_query($con, "SELECT `achievements_year_id`, `month`, `year`, `status` FROM `achievements_year`");
                                                        while($result=  mysqli_fetch_array($query11))
                                                        {
                                                               $status=$result['status'];
                                                            //echo $status;
                                                            if($status==0)
                                                            {
                                                                
                                                                $active=" not Active";
                                                            }
                                                            else
                                                            {
                                                                 $active=" Active";
                                                            }
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><a href="achievements.php?add=add && id=<?php echo $result['achievements_year_id'];?>"><?php echo $result['month']; ?>- <?php echo $result['year']; ?></a></td>
<!--                                                             <td></td>-->
                                                            
                                                            <td><a href="#" onclick="checkactive(<?php echo $result['achievements_year_id'];?>)" ><?php  echo $active;?></a></td>
                                                            
<!--
                                                            <td>
                                                                <a href="announcement.php?id=<?php echo $result['achievements_year_id'];?>&update=update"><svg class="glyph stroked pencil" style="color: black;height: 21px;width: 31px;"><use xlink:href="#stroked-pencil"/></svg></a>
                                                                </td>
-->
                                                            <td><center><a href="achievements.php?view=view && id=<?php echo $result['achievements_year_id'];?>"><i class="material-icons">create</i></a></center></td>
                                                                <td>
                                                                    <center><a href="#" onclick="check(<?php echo $result['achievements_year_id'];?>)" ><i class="material-icons">delete_sweep</i></a></center>
                                                            </td>
<!--                                                            <td><center><a href="pworkshops.php?update=update && id=<?php echo $result['workshops_id'];?>"><i class="material-icons">create</i></a></center></td>-->
                                                            </tr>
                                                        <?php $i++; }?>
                                                    </tbody>
						</table>
					</div>
				
                    
                    <?php
                if(isset($_GET['view']))
                { $id=$_GET['id'];
                 // $_SESSION['faculty_id']=$id;
                    $q1=  mysqli_query($con, "SELECT m.month as month,m.month as year,m.achievements_year_id as year_id,a.year as m_id ,a.`event` as event, a.`count`, a.`year`, a.achievements_id  FROM achievements a JOIN achievements_year m ON a.year = m.achievements_year_id where achievements_id='$id'");
                   // $f1=  mysqli_fetch_array($q1);
                  while($result=  mysqli_fetch_array($q1))
                                                        {
                                                            
                ?>
                    	<div class="panel-body">
<!--						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">-->
                                                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						    <thead>
						    <tr>
						        <th>Sr No</th>
<!--						        <th><center>Delete Month<th>-->
<!--                                <th>De</th>-->
                                <th>Date</th>
                                <th>Title</th>
<!--                                <th>Count</th>-->
                                
<!--                                                        <th>Update</th>-->
                                                        <th><center>Count</th>
                                <th><center>Delete</th>
<!--                                <th>Update</th>-->
						    </tr>
						    </thead>
                                                    <tbody>
                                                        
                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><a href="achievements.php?add=add && id=<?php echo $result['year_id'];?>"><?php echo $result['month']; ?>- <?php echo $result['year']; ?></a></td>
<!--                                                             <td></td>-->
                                                            
                                                            <td<?php echo $result['event'];?></td>
                                                            
<!--
                                                            <td>
                                                                <a href="announcement.php?id=<?php echo $result['achievements_year_id'];?>&update=update"><svg class="glyph stroked pencil" style="color: black;height: 21px;width: 31px;"><use xlink:href="#stroked-pencil"/></svg></a>
                                                                </td>
-->
                                                            <td><center><a href="achievements.php?view=view && id=<?php echo $result['achievements_year_id'];?>"><i class="material-icons">create</i></a></center></td>
                                                                <td>
                                                                    <center><a href="#" onclick="check(<?php echo $result['achievements_year_id'];?>)" ><i class="material-icons">delete_sweep</i></a></center>
                                                            </td>
<!--                                                            <td><center><a href="pworkshops.php?update=update && id=<?php echo $result['workshops_id'];?>"><i class="material-icons">create</i></a></center></td>-->
                                                            </tr>
                                                       
                                                    </tbody>
						</table>
					</div>
                    
				 <?php }
                }?>
                    
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