
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Zonal Manager Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                      <!-- Computer Basics Card Example -->
                      <div class="col-xl-3 col-md-6 mb-4">
                          <div class="card border-left-warning shadow h-100 py-2">
                              <div class="card-body">
                                  <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"> 
                                              Training ( IT Basics)</a></div>
                                          <div class="h5 mb-0 font-weight-bold text-gray-800">  <a  href="<?= base_url('ad_train.php')?>"style="text-decoration:blink;color:#2f4f4f;">Computer Basics</a></div>
                                      </div>
                                      <div class="col-auto">
                                      <a   href="<?= base_url('ad_train.php')?>" style="text-decoration:blink;color:#2f4f4f;"><i class="fas fa-desktop fa-2x text-yellow-300"> </a></i>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                        <!--   Reports (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Reports (Monthly)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a  href="<?= base_url('ad_reports.php')?>"style="text-decoration:blink;color:#2f4f4f;">Services Reports</a></div>
                                        </div>
                                        <div class="col-auto">
                                        <a  href="<?= base_url('ad_reports.php')?>" style="text-decoration:blink;color:#2f4f4f;">  <i class="fas fa-book fa-2x text-green-300"></a></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Activities (Daily) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Activities (Daily)
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">  <a  href="<?= base_url('ad_activity.php')?>" style="text-decoration:blink;color:#2f4f4f;">50%</a></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <a href="<?= base_url('ad_activity.php')?>" style="text-decoration:blink;color:#2f4f4f;"> <i class="fas fa-clipboard-list fa-2x text-blue-300"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--   Inventory (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                              Inventory (Monthly)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">  <a  href="<?= base_url('ad_inventory.php')?>" style="text-decoration:blink;color:#2f4f4f;">Assets</a></div>
                                        </div>
                                        <div class="col-auto">
                                        <a   href="<?= base_url('ad_inventory.php')?>" style="text-decoration:blink;color:#2f4f4f;">  <i class="fas fa-fax fa-2x text-blue-300"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                      <!--   Staff (NSS & Intenship) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                  <div class="card border-left-info shadow h-100 py-2">
                                      <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                          <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                              Staff (NSS & Intenship)</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">  <a  href="<?= base_url('ad_staff.php')?>" style="text-decoration:blink;color:#2f4f4f;">Active staff</a></div>
                                                </div>
                                              <div class="col-auto">
                                              <a href="<?= base_url('ad_staff.php')?>" style="text-decoration:blink;color:#2f4f4f;"><i class="fas fa-users fa-2x text-green-300"></i></a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>


                        <!-- UpComing Event (Training) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">UpComing Event (Training)
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">  <a  href="<?= base_url('ad_event.php')?>" style="text-decoration:blink;color:#2f4f4f;">Peak 70%</a></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm progress-striped active ">
                                                          <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                            aria-valuemax="100"> <span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <a   href="<?= base_url('ad_event.php')?>" style="text-decoration:blink;color:#2f4f4f;"> <i class="fas fa-rocket fa-2x text-blue-300"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Request & Help Card Example -->
                      <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          Request & Help </div>
                                          <div class="h5 mb-0 font-weight-bold text-gray-800">  <a  href="<?= base_url('ad_request.php')?>" style="text-decoration:blink;color:#2f4f4f;">Call Head Office</a></div>
                                      </div>
                                          <div class="col-auto">
                                          <a  href="<?= base_url('ad_request.php')?>" style="text-decoration:blink;color:#2f4f4f;"><i class="fas fa-phone fa-2x text-blue-300"></i></a>
                                        </div>
                                </div>
                              </div>
                        </div>
                      </div>

                        <!-- Payment ( For Training) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                              <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                  <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                          Payment (For Training)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">  <a  href="<?= base_url('ad_payment.php')?>" style="text-decoration:blink;color:#2f4f4f;">Payments</a></div>
                                                </div>
                                              <div class="col-auto">
                                              <a  href="<?= base_url('ad_payment.php')?>" style="text-decoration:blink;color:#2f4f4f;"> <i class="fas fa-credit-card fa-2x text-yellow-300"></i></a>
                                          </div>
                                        </div>
                                  </div>
                            </div>
                      </div>

                        <!-- Payment ( For Training) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                              <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                  <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          Messages (For CIC Mgrs)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">  <a  href="<?= base_url('ad_messages.php')?>" style="text-decoration:blink;color:#2f4f4f;">Inbox Messages</a></div>
                                                </div>
                                              <div class="col-auto">
                                              <a   href="<?= base_url('ad_messages.php')?>" style="text-decoration:blink;color:#2f4f4f;"> <i class="fas fa-envelope fa-2x text-yellow-300"></i></a>
                                          </div>
                                        </div>
                                  </div>
                            </div>
                      </div>

                          <!-- Online Chatting ( For Training) Card Example -->
                  <!--  <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                              <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                  <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                      Online Chat (CICs Mgrs)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">  <a  href="<?= base_url('chat.php')?>" style="text-decoration:blink;color:#2f4f4f;"> Online Chatting</a></div>
                                                </div>
                                              <div class="col-auto">
                                              <a  href="#" style="text-decoration:blink;color:#2f4f4f;"> <i class="fas fa-comments fa-2x text-yellow-300"></i></a>
                                          </div>
                                        </div>
                                  </div>
                            </div>
                      </div>-->


                      
                        <!-- CIC Pics (Pictiures) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                              <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                  <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                          CIC State (With Pictures)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">  <a  href="<?= base_url('ad_cicinfo.php')?>" style="text-decoration:blink;color:#2f4f4f;">CIC Informations</a></div>
                                                </div>
                                              <div class="col-auto">
                                              <a   href="<?= base_url('ad_cicinfo.php')?>" style="text-decoration:blink;color:#2f4f4f;"> <i class="fas fa-image fa-2x text-yellow-300"></i></a>
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