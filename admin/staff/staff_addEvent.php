<?php
include ('config/app.php');
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
    <?php // include('include/message.php'); ?>
    <!-- Content Row -->
    <div class="row">

        <div class="col-md-12">
            <h5 > <i style="color:green; font:200"><?php  include('include/staff_message.php'); ?></i></h5>
            <div class="card">
                <div class="card-header" style="background-color:#0b5ed7 ;">
                    <h5 style="color:white ;">Add Event</h5>
                </div>
                <div class="card-body">
                    <form action="codes/staff_event_code.php" method="POST">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="hidden" name="cicName" value="<?=$data['cicName'];  ?> "  class="form-control" />
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="hidden" name="region"  value="<?=$data['region'];  ?> " class="form-control"  />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
        <textarea  class="form-control"  name="description" rows="10" cols="70" required placeholder="Write The Subject Here">Event Description

        </textarea>
                            </div>

                            <div class="col-sm-6 mb-3 mb-sm-0">
        <textarea class="form-control"  name="title" rows="5" cols="70" required placeholder="Write The Challenges Here"> Enter Event Title

         </textarea>
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="">Enter Start date</label>
                                <input type="date" name="startDate" placeholder="Enter Start date"  class="form-control" />
                            </div>

                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="">Enter End Date</label>
                                <input type="date" name="endDate"  placeholder="Enter End Date" class="form-control"/>
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="save_Event" class="btn btn-outline-info">save Event</button>
                        </div>
                    </form>

                </div>
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
