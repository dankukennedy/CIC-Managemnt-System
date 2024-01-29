<?php
include ('config/app.php');

include_once('controllers/ad_paymentController.php');
include_once('controllers/ad_AuthenticationController.php');
$data=$authenticated-> authZonalDetail();


include "include/ad_header.php";

include "include/ad_sidebar.php";
include "include/ad_banner.php";


?>

<div class="container-fluid ">

    <!-- Page Heading -->
    <!--<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>-->



    <!-- Content Row -->
    <div class="row">

        <div class="col-md-12">
            <h5 > <i style="color:green; font:200"><?php  include('include/ad_message.php'); ?></i></h5>
            <div class="card">
                <div class="card-header" style="background-color: #3b5998 ;">
                    <h5 style="color:white ;">View Training</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Region</th>
                                <th>CIC Name</th>
                                <th>Managers Name</th>
                                <th>E-mail</th>
                                <th>Account</th>
                                <th>subDivision</th>
                                <th>accountNumber</th>
                                <th>accountName</th>
                                <th>bankBranch</th>
                                <th>number</th>

                                <th>Edit</th>
                                <th>Deleted</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i=1;
                            $region= $data['region'];
                            $payment_Qry="SELECT * FROM payments WHERE region='$region' ";
                            $result=$db->conn->query($payment_Qry);
                            if($result)
                            {
                                while ($row=$result->fetch_assoc())
                                {

                                    ?>
                                    <tr id="<?= $row['id'] ?>">
                                        <td> <?php echo $i++; ?></td>
                                        <td><?= $row['region'] ?></td>
                                        <td><?= $row['cicName'] ?></td>
                                        <td><?= $row['fName'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['account'] ?></td>
                                        <td><?= $row['subDivision'] ?></td>
                                        <td><?= $row['accountNumber'] ?></td>
                                        <td><?= $row['accountName'] ?></td>
                                        <td><?= $row['bankBranch'] ?></td>
                                        <td><?= $row['number'] ?></td>

                                        <td>
                                            <a href="ad_editPayment.php?id=<?= $row['id'] ?>" class="btn btn-info"> Edit</a>
                                        <td>
                                            <form action="codes/ad_payment_code.php" method="POST">
                                                <button type="submit" name="deletePayment" class="btn btn-danger"  value="<?= $row['id'] ?>">Delete </button>
                                            </form>   </td>

                                    </tr>
                                    <?php
                                }

                            } else
                            {
                                echo " No Records Found ";
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>



            </div>
        </div>






    </div>








</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
include "include/ad_footer.php";


?>













