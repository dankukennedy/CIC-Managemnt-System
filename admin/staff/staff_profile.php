<?php 
include('config/app.php');

include_once('controllers/staff_AuthenticationController.php');
$authenticated=new  staffAuthenticationController;
$data=$authenticated-> authAdminDetail();


include ('include/staff_header.php');
include ('include/staff_sidebar.php');
include ('include/staff_banner.php');



?>

<style>
body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>

<?php ?>
              <!-- Begin Page Content -->
              <div class="container-fluid">


              <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post" id="form" class="form" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                       
                        <div class="profile-img">
                            <?php 
                           
                             $id=$data['id'];
                            $image=$data['profile_img'];
                            ?>
                        
                           <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>-->
                            <img src="uploaded/images/profiles/<?=$data['profile_img']?>" style="width:235x;height:200px;">
                            <div class="file btn btn-lg btn-primary">
                              Change Photo
                                <input type="hidden" name="id" value=" <?php echo $id; ?> " />
                                <input type="hidden" name="name" value="<?php echo $name;  ?> "/>
                                <input type="file" id="image" name="image" accept=".jpg, .png, .jpeg"/>
                                <i class="fa fa-camera" style="color:#fff"></i>
                            </div>
                                 <script type="text/javascript">
                                  document.getElementById("image").onchange=function(){
                                    document.getElementById('form').submit();
                                  }
                                    </script>
                                    <?php
                                    if(isset($_FILES['image']['name']))
                                    {
                                         // print_r($_FILES);
                                        $id=$_POST['id'];
                                        $name=$_POST['name'];


                                        $imageName=$_FILES['image']['name'];
                                        $imageSize=$_FILES['image']['size'];
                                        $tmpName=$_FILES['image']['tmp_name'];

                                        $validImageExtension=['jpg','jpeg','png'];
                                        $imageExtension=explode('.',$imageName);
                                        $imageExtension=strtolower(end($imageExtension));

                                        if(!in_array($imageExtension,$validImageExtension))
                                        {
                                          echo " <script>
                                          alert('invalid image Extension');
                                          document.location.href='staff_profile.php';
                                          </script>";
                                        } 
                                        elseif($imageSize>1200000)
                                            {
                                                echo "  <script>
                                          alert('invalid image too Large');
                                          document.location.href='staff_profile.php';
                                          </script>";
                                            }
                                             else
                                             {
                                                $newImageName=$imageName."-".date("Y.m.d")."-".date("h.i.sa");
                                                $newImageName.=".".$imageExtension;
                                                $managerUpdateQuery=" UPDATE zonal_managers SET profile_img='$newImageName'  WHERE id='$id' ";
                                                $result=$db->conn->query($managerUpdateQuery);
                                               
                                                 move_uploaded_file($tmpName,'uploaded/images/profiles/'.$newImageName);
                                                 echo "  <script>
                                                 alert('Profile Image Successfully Updated');
                                                 document.location.href='staff_profile.php';
                                                 </script>";
                                                 if($result){
                                                    return true;
                                                }
                                             }

                                    }
                                 
                                    ?>                            

                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                    <?=$data['fName'].' '.$data['otherName'].' '.$data['lastName'];?>
                                    </h5> 
                                    
                                    <h4 class="alert alert-primary">
                                    <?=$data['working'];?>
                                    </h4>
                                  
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="<?php base_url('staff_editProfile.php') ;?>?id=<?=$data['id'];?>"><i class="btn btn-info">Edit Profile</i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p><h6 class=" alert alert-primary">Region Of Work</h6></p>
                            <p> <i class="alert alert-success"><?=$data['region'];?></i></p>
                            <p ><h6 class=" alert alert-primary">Metro / Municipal /District</h6></p>
                            <p><i class="alert alert-success"> <?=$data['subDivision'];?></i></p>
                            <p> <h6 class=" alert alert-primary">CIC Name</h6> </p>
                            <p><i class="alert alert-success"> <?=$data['cicName'];?></i></p>
                           <p><h6 class=" alert alert-primary"> Registration Date</h6></p>
                            <p><i class="alert alert-success"> <?= date('d-m-Y',strtotime( $data['created_at']));?></i></p>
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>First Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$data['fName'];?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Last Name </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$data['lastName'];?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Other Names </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$data['otherName'];?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$data['email'];?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$data['contact'];?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$data['gender'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Field Studied</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$data['field'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>NIA</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$data['nia'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Qualification</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$data['qualification'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Working</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$data['working'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Age</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$data['dateOfBirth'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Security Question</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$data['securityQsn'].' Qns is '.$data['answer'];?></p>
                                            </div>
                                        </div>
                                        

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>


                  <!-- Page Heading -->
                <!--  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                      <h1 class="h3 mb-0 text-gray-800">Manager Dashboard</h1>
                      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                              class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                  </div>-->

                  <!-- Content Row -->
                  <div class="row">
            
        
              </div>
              
              
              </div>
              <!-- /.container-fluid -->

          </div>
          <!-- End of Main Content -->
         

  

<?php
            include ('include/staff_footer.php');


            ?>
