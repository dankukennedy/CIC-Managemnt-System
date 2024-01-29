<?php 
include ('config/app.php');
include "include/header.php";

include "include/sidebar.php";
include "include/banner.php";


?>


<div class="container-fluid">

<!-- Page Heading -->
<!--<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>-->
<?php  include('include/message.php'); ?>
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

                                 $message_Qry="SELECT * FROM zonal_messages LIMIT 5";
                           $result=$db->conn->query($message_Qry);
                           if(!$result)
                   {
                        echo "Something Went Wrong";
                        } else
                    {
                         while ($row=$result->fetch_assoc())
                     {

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
                                   </div>
                                      
                      
                                </div>
                            </div>
                            

                                            ';
                                   }
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
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
            include "include/footer.php";


            ?>
