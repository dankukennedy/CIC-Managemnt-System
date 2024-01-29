<?php
include ('config/app.php');
include_once('controllers/staff_MessageController.php');
include_once('controllers/staff_AuthenticationController.php');
$data=$authenticated-> authAdminDetail();


include "include/staff_header.php";

include "include/staff_sidebar.php";
include "include/staff_banner.php";


?>


<div class="container-fluid">

    <!-- Page Heading -->
    <!--<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>-->
    <?php  include('include/staff_message.php'); ?>
    <!-- Content Row -->
    <div class="row">


        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div class="card">
                                <div class="boxs mail_listing">
                                    <div class="inbox-body no-pad">
                                        <section class="mail-list">
                                            <?php
                                            $message=new MessageController;
                                            $result=$message->Index();
                                            if($result)
                                            {
                                                while ($row=$result->fetch_assoc())
                                                {

                                                    ?>

                                                    <?php
                                                    echo ' 
 <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">'.$row['subject'] .' </h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" ">
                                    <div class="card-body">
                                        '.$row['msg'] .'  <br> <strong style="color: seagreen">Created On: '.$row['created_at'] .' </strong>
                                  <a href="ad_editMessage.php?id='. $row['id'] .' " class="btn btn-outline-info" >Edit Event </a> <i> <form action="codes/ad_messages_code.php" method="POST">
                           <button type="submit" name="deleteMessage" value="'.$row['id'].' " class="btn btn-outline-danger">Delete</button></i>
                           </form>  </div>
                                      
                      
                                </div>
                            </div>
                            

                                            ';

                                                }
                                                ?>
                                                <?php
                                            } else
                                            {
                                                echo " No Records Found ";
                                            }
                                            ?>

                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>





</div>








</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
include "include/staff_footer.php";


?>
