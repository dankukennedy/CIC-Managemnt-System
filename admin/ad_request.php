<?php 
 include ('config/app.php'); 
include_once('controllers/ad_AuthenticationController.php');
$data=$authenticated-> authZonalDetail();


include "include/ad_header.php";

include "include/ad_sidebar.php";
include "include/ad_banner.php";


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

<div class="col-lg-6">

    <!-- Default Card Example -->
    <div class="card mb-4">
        <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary"> Contact us</h6>       
        </div>
        <div class="card-body">
        <p class="alert alert-info">Ghana Investment Fund for Electronic Communications<br>

4th Floor, Ministry of Communications Office Complex.

Abdul Diouf Road, Ridge, Accra<br>

P.O. Box CT 5625 Accra, Ghana<br>

Digital Address: GA-079-0539

Telephone: 030 397 5574 </div>
    </div>

    <!-- Collapsable Card Example -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample3" class="d-block card-header py-3" data-toggle="collapse"
            role="button" aria-expanded="true" aria-controls="collapseCardExample3">
            <h6 class="m-0 font-weight-bold text-primary"> Ahafo & Ashanti & Bono & Bono East</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse hide" id="collapseCardExample3">
            <div class="card-body">
          <p class=" alert alert-info">  Ahafo Regional Office
Goaso Community ICT Center
Goaso
GPS: BU-0003-3213
Contact: 0257964759<br>


Ashanti Regional Office
John Agyekum Kufuor Catholic Information and Technology Centre
Nkwantakese
GPS: AF-0276-9647
Contact: 0257960785<br>


Bono Regional Office
Wenchi Community ICT Center
Wenchi
GPS: BW-0002-1423
Contact: 0257962478<br>


Bono East Regional Office
Adjacent Rossana Hotel
Nkoranza
GPS: BO-0022-2132
Contact: 0257964178</p>
            </div>
        </div>
    </div>

</div>

<div class="col-lg-6">

    <!-- Dropdown Card Example -->
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Our Regional Offices</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
       <p class="alert alert-success"> 
       Ahafo Regional Office&nbsp;
       Ashanti Regional Office&nbsp;
       Bono Regional Office&nbsp;
       Bono East Regional Office&nbsp;
       Central Regional Office&nbsp;
       Eastern Regional Office&nbsp;
       North East Regional Office&nbsp;
       Northern Regional Office&nbsp;
       Oti Regional Office&nbsp;
       Savannah Regional Office&nbsp;
       Upper West Regional Office&nbsp;
       Volta Regional Office&nbsp;
       Western Regional Office&nbsp;
       Western North Regional Office&nbsp;
       </p>
        </div>
    </div>

    <!-- Collapsable Card Example -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample5" class="d-block card-header py-3" data-toggle="collapse"
            role="button" aria-expanded="true" aria-controls="collapseCardExample5">
            <h6 class="m-0 font-weight-bold text-primary">Central & Eastern & North East &  Northern</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse hide" id="collapseCardExample5">
            <div class="card-body"><p class="alert alert-secondary">
            Central Regional Office
Assin Fosu Community ICT Center
Assin Fosu
GPS: CR-0000-1780
Contact: 0257964299<br>

Eastern Regional Office
J.B. Danquah Memorial Library
Kyebi
GPS: EE-0020-4765
Contact: 0257961267<br>

North East Regional Office
Walewale Community ICT Center
Walewale
GPS: ND-00011-5343
Contact: 0257959995<br>

Northern Regional Office
Yendi Community ICT Center
Yendi
GPS: NY-0010-6693
Contact: 0257962898</p>
            </div>
        </div>
    </div>

</div>

</div>
</div>



<div class="col-lg-6">

    <!-- Dropdown Card Example -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample6" class="d-block card-header py-3" data-toggle="collapse"
            role="button" aria-expanded="true" aria-controls="collapseCardExample6">
            <h6 class="m-0 font-weight-bold text-primary">Oti & Savannah & Upper West & Volta </h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse hide" id="collapseCardExample6">
            <div class="card-body">
              <p class="alert alert-warning">Oti Regional Office
Jasikan Community ICT Center
Jasikan
GPS: VJ-0008-8810
Contact: 0257962776 /0257961168<br>

Savannah Regional Office
Kpembi Community ICT Center
Kpembi
GPS: N4-00078-4261
Contact: 0257959068<br>

Upper West Regional Office
Lawra Community ICT Center
Lawra
GPS: XL-0002-7697
Contact: 0257964347<br>

Volta Regional Office

Ho Community ICT Center
Ho
GPS: VH-0000-7000
Contact: 0257959126</p>
            </div>
        </div>
    </div>
    <!-- Collapsable Card Example -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample7" class="d-block card-header py-3" data-toggle="collapse"
            role="button" aria-expanded="true" aria-controls="collapseCardExample7">
            <h6 class="m-0 font-weight-bold text-primary"> Western Regional & Western North </h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse hide" id="collapseCardExample7">
            <div class="card-body"><p class="alert alert-danger">
            Western Regional Office
Asankrangua Community ICT Center
Asankrangua
GPS: WY-0044-3840
Contact: 0257957706/0257961257<br>

Western North Regional Office
Juaboso Community ICT Center
Juaboso
GPS: YG-0003-5392
Contact: 0257963174</p>
            </div>
        </div>
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
