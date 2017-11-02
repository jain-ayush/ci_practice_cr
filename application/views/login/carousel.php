
<!DOCTYPE html>
<html>

<head>
    <?php
    include("css_top_links.php")
    ?>
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="md-preloader pl-size-md">
                <svg viewbox="0 0 75 75">
                    <circle cx="37.5" cy="37.5" r="33.5" class="pl-red" stroke-width="4" />
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
    include("topbar.php");
    ?>
    <!-- #Top Bar -->
    <?php
    include("sidebar.php");
    ?>
    
      <!--  <?php if(isset($_GET['error'])) {?>
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert"><i class="fa fa-remove"></i></button>
              <h4>Warning!</h4>
              <p>Image size you inserted is not Appropriate. Image Size should be of 1400*951 pixels </p>
            </div>
            <?php }?>
            <?php if(isset($_GET['updated'])) {?>
            <div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert"><i class="fa fa-remove"></i></button>
              <h4>Success!</h4>
              <p>Your Details Has Been Successfully Uploaded</p>
            </div>
            <?php }?>

            ?> -->
<!-- <?php
print_r($images);

?> -->
<?php
if(isset($_GET['update']))
{ 
    $id = $_GET['id'];
    $update = mysqli_query($conn,"SELECT * FROM carousel WHERE c_id='$id'");
    while($f_update = mysqli_fetch_array($update))
    {
        ?>
        <section class="content">
            <div class="container-fluid">
            <!-- <div class="block-header">
                <h2>BASIC FORM ELEMENTS</h2>
            </div> -->
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                             Edit Here
                             <!-- <small>Different sizes and widths</small> -->
                         </h2>

                     </div>
                    <!--  <div class="body">
                        <form action="update_carousel.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="hidden_id" value="<?php echo $f_update['c_id'];?>">
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Title(maxlength-70):</label>
                                            <input type="text" class="form-control" maxlength="70" name="title" value="<?php echo $f_update['title'];?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label style="padding:7px;">Image(1400x951):</label>
                                            <input type="file" name="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Existing Image:</label>
                                            <img src="carousel_image/<?php echo $f_update['image'];?>" height="100" width="200">
                                            <input type="hidden" name="existing_image" id="existing_image" value="<?php echo $f_update['image'];?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">                                
                                       <input type="submit" value="Submit" name="" class="btn btn-danger waves-effect">
                                       <a href="carousel.php"> <input type="button" value="Back" name="" class="btn btn-danger waves-effect"></a>

                                   </div>
                               </div>
                           </div>
                       </form>
                   </div> -->
               </div>
           </div>
       </div>


   </div>
</section>
<?php } }?>


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Carousel Images</h2>
        </div>

        <?php
        if(isset($_SESSION['error'])){

          if(($_SESSION['error'])=='added') {?>
          <div class="alert bg-green alert-dismissible">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></i></button>
              <h4>Success!</h4>
              <p>Your Details Has Been Successfully Added</p>
          </div>
          <?php }
          unset($_SESSION['added']);
          ?>
          <?php if(($_SESSION['error'])=='not_added') {?>
          <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></i></button>
              <h4>Warning!</h4>
              <p>Image you inserted is not Appropriate.</p>
          </div>
          <?php }
          unset($_SESSION['not_added']);
          ?>
          <?php if(isset($_GET['updated'])) {?>
          <div class="alert bg-green alert-dismissible">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></i></button>
              <h4>Success!</h4>
              <p>Your Details Has Been Successfully Uploaded</p>
          </div>
          <?php } }?>
          <!-- Basic Table -->
            <!-- <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BASIC TABLES
                                <small>Basic example without any additional modification classes</small>
                            </h2>
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
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>FIRST NAME</th>
                                        <th>LAST NAME</th>
                                        <th>USERNAME</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Larry</td>
                                        <td>Jellybean</td>
                                        <td>@lajelly</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Larry</td>
                                        <td>Kikat</td>
                                        <td>@lakitkat</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- #END# Basic Table -->
            <!-- Striped Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Carousel Images
                                <small>You can edit carousel images here</small>
                            </h2>
                           <!--  <ul class="header-dropdown m-r--5">
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
                            </ul> -->
                        </div>
                        <div>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#myModal"><i class="material-icons">Add</i>
                            </button>
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">

                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Modal Header</h4>
                                  </div>
                                  <div class="modal-body">
                                   <div class="body">
                                    <!-- <form action="update_carousel.php" method="POST" enctype="multipart/form-data"> -->
                                    <?php echo form_open_multipart('admin/add_carousel',['id'=>'sign_in']);?>
                                    <!--   <input type="hidden" name="hidden_id" value=""> -->
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label>Title(maxlength-70):</label>
                                                    <?php echo form_input(['name'=>'title','placeholder'=>'Enter Title','class'=>'form-control','required'=>'required'])?>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label style="padding:7px;">Image(1400x951):</label>
                                                    <?php echo form_upload(['name'=>'file','class'=>'form-control'])?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">                                
                                               <input type="submit" value="Submit" name="" class="btn btn-danger waves-effect">
                                               <a href="carousel.php"> <input type="button" value="Back" name="" class="btn btn-danger waves-effect"></a>

                                           </div>
                                       </div>
                                   </div>
                               </form>
                           </div>
                       </div>
                       <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                  </div>

              </div>
          </div>
      </div>
      <div class="body table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Sr No</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Add</th>
                </tr>
            </thead>
            <tbody>
             <?php
             $i=0;
             if(count($images))
             {
                 foreach($images as $image){
                    $i++;
                                   	//print_r($image);
                    ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $image['images'];?></td>
                        <td><?php echo $image['title'];?></td>
                        <td><button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#myModal<?php echo $image['c_id'];?>"><i class="material-icons">Update</i>
                        </button>
                        <div class="modal fade" id="myModal<?php echo $image['c_id'];?>" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Modal Header</h4>
                              </div>
                              <div class="modal-body">
                              <?php echo form_open_multipart('admin/update_carousel',['id'=>'sign_in']);?>
                               <!--   <input type="hidden" name="hidden_id" value=""> -->
                               <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Title(maxlength-70):</label>
                                           
                                            <input type="text" name="title" class="form-control" required="required" value="<?php echo $image['title'];?>">
                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label style="padding:7px;">Image(1400x951):</label>
                                            <?php echo form_upload(['name'=>'file','class'=>'form-control'])?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">    
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                             <input type="submit" value="Submit" name="" class="btn btn-danger waves-effect">
                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                         </div>
                     </form>
                 </div>

             </div>

         </div>
     </div>

 </td>
</div>
</div>

</div>
</div>


</tr>
<?php } }
else
    { ?>
<tr>
  <td colspan="4">
     No Records Found
 </td>
</tr>
<?php }
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
<!-- #END# Striped Rows -->
<!-- Bordered Table -->
         <!--    <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BORDERED TABLE
                                <small>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</small>
                            </h2>
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
                        <div class="body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>FIRST NAME</th>
                                        <th>LAST NAME</th>
                                        <th>USERNAME</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Larry</td>
                                        <td>Jellybean</td>
                                        <td>@lajelly</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Larry</td>
                                        <td>Kikat</td>
                                        <td>@lakitkat</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- #END# Bordered Table -->
            <!-- Hover Rows -->
         <!--    <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                HOVER ROWS
                                <small>Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</small>
                            </h2>
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
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>FIRST NAME</th>
                                        <th>LAST NAME</th>
                                        <th>USERNAME</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Larry</td>
                                        <td>Jellybean</td>
                                        <td>@lajelly</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Larry</td>
                                        <td>Kikat</td>
                                        <td>@lakitkat</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- #END# Hover Rows -->
            <!-- Condensed Table -->
        <!--     <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CONDENSED TABLE
                                <small>Add <code>.table-condensed</code> to make tables more compact by cutting cell padding in half.</small>
                            </h2>
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
                        <div class="body table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>FIRST NAME</th>
                                        <th>LAST NAME</th>
                                        <th>USERNAME</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Larry</td>
                                        <td>Jellybean</td>
                                        <td>@lajelly</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Larry</td>
                                        <td>Kikat</td>
                                        <td>@lakitkat</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- #END# Condensed Table -->
            <!-- Contextual Classes -->
          <!--   <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CONTEXTUAL CLASSES
                                <small>Use contextual classes to color table rows or individual cells.</small>
                            </h2>
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
                        <div class="body table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>FIRST NAME</th>
                                        <th>LAST NAME</th>
                                        <th>USERNAME</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="active">
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr class="success">
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr class="info">
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr class="warning">
                                        <th scope="row">4</th>
                                        <td>Larry</td>
                                        <td>Jellybean</td>
                                        <td>@lajelly</td>
                                    </tr>
                                    <tr class="danger">
                                        <th scope="row">5</th>
                                        <td>Larry</td>
                                        <td>Kikat</td>
                                        <td>@lakitkat</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- #END# Contextual Classes -->
            <!-- With Material Design Colors -->
       <!--      <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                WITH MATERIAL DESIGN COLORS
                                <small>You can use material design colors which examples are <code>.bg-pink</code></small>
                            </h2>
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
                        <div class="body table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>FIRST NAME</th>
                                        <th>LAST NAME</th>
                                        <th>USERNAME</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-pink">
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr class="bg-cyan">
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr class="bg-teal">
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr class="bg-orange">
                                        <th scope="row">4</th>
                                        <td>Larry</td>
                                        <td>Jellybean</td>
                                        <td>@lajelly</td>
                                    </tr>
                                    <tr class="bg-purple">
                                        <th scope="row">5</th>
                                        <td>Larry</td>
                                        <td>Kikat</td>
                                        <td>@lakitkat</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- #END# With Material Design Colors -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <?php
    include('js_bottom_links.php')
    ?>
</body>

</html>