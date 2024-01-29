<?php include ('config/app.php'); 


$auth->isLoggedIn();
include ('include/ad_header.php');

?>



<script type="text/javascript">
    var region ={
        Ahafo:["Asunafo North Municipal"," Asunafo South","Asatifi North","Asatifi South","Asatifi South","Tano North Municipal","Tano South Municipal"],
        Ashanti:["Adansi  Asokwa","Adansi North","Adansi South","Afigya Kwabre North","Afigya Kwabre South","Ahafo Ano North Municipal","Ahafo Ano South East","Ahafo Ano South West","Akrofuom","Amansie Central","Amansie West","Amansie South","Asante Akim Central Municipal","Asante Akim North","Asante Akim South Municipal","Asokore Mampong","Asokwa Municipal","Atwima Kwanwoma","Atwima Mponua","Atwima Nwabiagya Municipal","Atwima Nwabiagya North","Bekwai Municipal","Bosome Freho","Bosomtwe","Ejisu Municipal","Ejura Sekyedumase Municipal","New Edubiase","Juaben Municipal","Kumasi Metropolitan","Manhyia North","Manhyia South","Nhyiaeso","Subin","Kwabre East Municipal","Kwadaso Municipal","Mampong Municipal","Obuasi East Municipal","Obuasi Municipal","Offinso Municipal","Offinso North","Oforikrom Municipal","Old Tafo Municipal","Sekyere Afram Plains","Sekyere Central","Sekyere East","Sekyere Kumawu","Sekyere South","Suame Municipal"],
        Bono:["Banda","Berekum East Municipal","Berekum West","Dormaa Central Municipal","Dormaa East District","Dormaa West","Jaman North","Jaman South Municipal","Sunyani Municipal","Sunyani West","Tain","Wenchi Municipal"],
        Bono_East:["Atebubu-Amantin Municipal","Kintampo North Municipal","Kintampo South","Nkoranza North","Nkoranza South Municipal","Pru East","Pru West","Sene East","Sene West","Techiman Municipal","Techiman North"],
        Central:["Abura Asebu Kwamankese","Agona East","Agona West Municipal","Ajumako Enyan Essiam","Asikuma Odoben Brakwa","Assin Central Municipal","Assin North","Assin South","Awutu Senya East Municipal","Awutu Senya West","Cape Coast Metropolitan","Cape Coast South","Effutu Municipal","Ekumfi","Gomoa East","Gomoa Central","Gomoa West","Komenda-Edina-Eguafo-Abirem Municipal","Mfantsiman Municipal","Twifo Atti Morkwa","Twifo/Heman/Lower Denkyira","Upper Denkyira East Municipal","Upper Denkyira West"],
        Eastern:["Abuakwa North Municipal","Abuakwa South Municipal","Achiase","Akuapim North Municipal","Akuapim South","Akyemansa","Asene Manso Akroso","Asuogyaman","Atiwa East","Atiwa West","Ayensuano","Birim Central Municipal","Birim North","Birim South","Denkyembour","Fanteakwa North","Fanteakwa South","Kwaebibirem Municipal","Kwahu Afram Plains North","Kwahu Afram Plains South","Kwahu East","Kwahu South","Kwahu West Municipal","Lower Manya Krobo Municipal","New Juaben North Municipal","New Juaben South Municipal","Nsawam Adoagyire Municipal","Okere","Suhum Municipal","Upper Manya Krobo","Upper West Akim","West Akim Municipal","Yilo Krobo Municipal",],
        Greater_Accra:["Ablekuma Central Municipal","Ablekuma North Municipal","Ablekuma West Municipal","Accra Metropolitan","Odododiodio","Okaikwei Central","Okaikwei South","Ada East","Ada West","Adenta Municipal","Ashaiman Municipal","Ayawaso Central Municipal","Ayawaso East Municipal","Ayawaso North Municipal","Ayawaso West Municipal","Ga Central Municipa","Ga East Municipal","Ga North Municipal","Ga South Municipal","Domeabra-Obom","Ga West Municipal","Korle Klottey Municipal","Kpone Katamanso Municipal","Krowor Municipal","La Dade Kotopon Municipal","La Nkwantanang Madina Municipal","Ledzokuku Municipal","Ningo Prampram","Okaikwei North Municipal","Shai Osudoku","Tema Metropolitan","Tema East","Tema West Municipal","Weija Gbawe Municipal"],
        North_East:["Bunkpurugu Nyankpanduri","Chereponi","East Mamprusi Municipal","Mamprugu Moagduri","West Mamprusi Municipal","Yunyoo-Nasuan"],
        Northern:["Gushegu Municipal","Karaga","Kpandai","Kumbungu","Mion","Nanton","Nanumba North Municipal","Nanumba South","Saboba","Sagnarigu Municipal","Savelugu Municipal","Tamale Metropolitan","Tamale South","Tatale Sanguli","Tolon","Yendi Municipal","Zabzugu"],
        Oti:["Biakoye","Jasikan","Kadjebi","Krachi East Municipal","Krachi Nchumuru","Krachi West","Nkwanta North","Nkwanta South Municipal"],
        Savannah:["Bole","Central Gonja","East Gonja Municipal","North East Gonja","North Gonja","Sawla-Tuna-Kalba","West Gonja Municipal"],
        Upper_East:["Bawku Municipal","Bawku West","Binduri","Bolgatanga East","Bolgatanga Municipal","Bongo","Builsa North Municipal","Builsa South","Garu","Kassena Nankana Municipal","Kassena Nankana West","Nabdam","Pusiga","Talensi","Tempane"],
        Upper_West:["Daffiama Bussie Issa","Jirapa Municipal","Lambussie Karni","Lawra Municipal","Nadowli Kaleo","Nandom Municipal","Sissala East Municipal","Sissala West","Wa East","Wa Municipal","Wa West"],
        Volta:["Adaklu District","Afadzato South","Agotime Ziope","Akatsi North","Akatsi South","Anloga","Central Tongu","Ho Municipal","Ho West","Hohoe Municipal","Keta Municipal","Ketu North Municipal","Ketu South Municipal","Kpando Municipal","North Dayi","North Tongu","South Dayi","South Tongu"],
        Western:["Ahanta West Municipal","Amenfi Central","Amenfi West Municipal","Effia Kwesimintsim Municipal","Kwesimintsim","Ellembelle","Jomoro Municipal","Mpohor","Nzema East Municipal","Prestea-Huni Valley Municipal","Sekondi Takoradi Metropolitan","Sekondi","Takoradi","Shama","Tarkwa-Nsuaem Municipal","Wassa Amenfi East Municipal","Wassa East"],
        Western_North:["Aowin Municipal","Bia East","Bia West","Bibiani Anhwiaso Bekwai Municipal","Bodi","Juaboso","Sefwi Akontombra","Sefwi-Wiawso Municipal","Suaman"]

    }
    function makeSubmenu(value) {
        if (value.length == 0) document.getElementById("categorySelect").innerHTML = "<option></option>";
        else {
            var regionOptions = "";
            for (categoryId in region[value]) {
                regionOptions += "<option>" + region[value][categoryId] + "</option>";
            }
            document.getElementById("categorySelect").innerHTML = regionOptions;
        }
    }

    function displaySelected() {
        var country = document.getElementById("category").value;
        var city = document.getElementById("categorySelect").value;
        alert(country + "\n" + city);
    }

    function resetSelection() {
        document.getElementById("category").selectedIndex = 0;
        document.getElementById("categorySelect").selectedIndex = 0;
    }

   

</script>




<body style="background-image: url(img/logo.png);">

    <div class="container">
    <form> <a class="medium" href="<?= base_url('../../index.php') ;?> " style="text-decoration:none;"><button type="submit" class="btn btn-primary" >Back To Home</button></a>
         </form>
        <div class="card o-hidden border-0 shadow-lg my-5" >
            <div class="card-body p-0" >
                <!-- Nested Row within Card Body -->
                <div class="row" >
                    <div class="col-lg-5 d-none d-lg-block " style="background-image: url(img/logo.png);background-repeat: repeat-y;" ></div>
                    <div class="col-lg-7">                     
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account as CIC Zonal Manager</h1>
                                <h6 class="h4 text-gray-900 mb-4" > <?php  include('include/ad_message.php'); ?></h6>

                                 
                            </div> 
                            <form class="user" action="" method="POST"> 
                            

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="fName"
                                            id="fNameId" placeholder="Enter First Name Here">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="lastName"
                                            id="lastNameId" placeholder="Enter Last Name Here">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"name="otherName" id="otherNameId"
                                        placeholder="Enter Other Names Here">
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" class="form-control form-control-user" name="contact"
                                            id="contactId" placeholder="Enter Contact Here">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="nia"
                                            id="exampleRepeatPassword" placeholder="ID (NIA) GHA-123489909-5 Optional">
                                    </div>
                                </div>

                                <!--<div class="form-group">
                                    <label class="form control" style="color:black;"> Profile Picture</label>
                                    <input type="file"  class="  form-control-file border "placeholder="Upload Pic" name="imageName" id="mageNameId"
                                      >
                                </div>-->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                       
                                    <select name="field" class="form-control " id="fieldId"  required>
                                            <option value="Field Of Study"   disabled selected>Field Of Study</option>
                                            <option value="Information Technology" >Information Technology</option>
                                            <option value="Administration" >Administration</option>
                                            <option value="Accounting" >Accounting</option>
                                            <option value="Others" >Others</option>
                                           
                                        </select>
                                    </div>
                                    <div class="col-sm-6">

                                    <select name="qualification" class="form-control " id="qualifictaionId"  required>
                                            <option value="Qualification"   disabled selected>Qualification</option>
                                            <option value="Certificate" >Certificate</option>
                                            <option value="Deploma" >Deploma</option>
                                            <option value="Deploma" >HND</option>
                                            <option value="Degree" >Degree</option>
                                            <option value="Masters" >Masters</option>
                                            <option value="Others" >Others</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="emailId" name="email" required
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        
                                    <select name="gender" class="form-control " id="genderId"  required>
                                            <option value="GENDER"   disabled selected>Gender</option>
                                            <option value="Male" >Male</option>
                                            <option value="Female" >Female</option>
                                           
                                        </select>
                                   </div>
                                    <div class="col-sm-6">
                                        
                                    <select name="working" class="form-control " id="workingId"  required>
                                            <option value="WORKING"   disabled selected>Working As</option>
                                            <option value="CIC Manager" >CIC Manager</option>
                                            <option value="CIC Manageress" >CIC Manageress</option>
                                            <option value="National Service" >National Service</option>
                                            <option value="Attachment" >Attachment</option>
                                            <option value="Voluntary" >Voluntary Service</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            id="cicName" placeholder="Enter CIC Name" name="cicName">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user"
                                            id="cicGps" name="cicGps" placeholder="Enter CIC's GPS ">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    
                                            <select id="category" class="form-control" name="region" size="1" onchange="makeSubmenu(this.value)">
                                                <option value="" disabled selected>Region</option>
                                                <option>Ahafo</option>
                                                <option>Ashanti</option>
                                                <option>Bono</option>
                                                <option>Bono_East</option>
                                                <option>Central</option>
                                                <option>Eastern</option>
                                                <option>Greater_Accra</option>
                                                <option>North_East</option>
                                                <option>Northern</option>
                                                <option>Oti</option>
                                                <option>Savannah</option>
                                                <option>Upper_East</option>
                                                <option>Upper_West</option>
                                                <option>Volta</option>>
                                                <option>Western</option>
                                                <option>Western_North</option>

                                            </select>
                                    </div>
                                    <div class="col-sm-6">                            
                                        <select id="categorySelect" class="form-control" name="SubDivision" size="1">
                                            <option value="" disabled selected>Metro/Municipal/District</option>
                                            <option></option>
                                        </select>
                                        <!-- <button onclick="displaySelected()">show selected</button>-->
                                    </div>
                                </div>

                                <div class="form-group row">
                                <div class="col-sm-6">
                                        
                                        <select name="securityQsn" class="form-control " id="securityQsn"  required>
                                                <option value="Security Question"   disabled selected>Security Question</option>
                                                <option value="What is your dream Country !" >What is your dream Country !</option>
                                                <option value="What is your favorite Food !" >What is your favorite Food !</option>
                                                <option value="What is your nickname !" >What is your nickname !</option>
                                                <option value="What is the name of your favorite Pet !" >What is the name of your favorite Pet !</option>
                                                <option value="Attachment What is the name of your best friend !" >Attachment What is the name of your best friend !</option>
                                                <option value="What is the name of your last school you Attended !" >What is the name of your last school you Attended !</option>
                                            </select>
                                        </div>
                           

                                <div class="col-sm-6">
                                <input type="text" class="form-control "
                                            id="answere" name="answer" placeholder=" Answere Here !" required>
                                       
                                        </div>
                                </div>

                                <div class="form-group">
                                    <input type="date" class="form-control"name="dateOfBirth" id="dateOfBirth" required>
                                </div>
                               

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="userPassword" name="password" placeholder="Password" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="userPasswordRepeat" name="repassword" placeholder="Repeat user Password" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-user btn-block"  id="registerId" name="register">Register Account </button>
                                </div>
                             <!--   <a href="#" name="register" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a>-->
                          
                               <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>-->
                            </form>
                            <hr>
                            <!--<div class="text-center">
                                <a class="medium" style="color:orange;" href="<?= base_url('ad_forgetPassword.php')?>" style="text-decoration:none;">Forgot Password?</a>
                            </div>-->
                            <div class="text-center">
                                <a class="medium" style="color:green;" href="<?php base_url('ad_login.php') ?>" style="text-decoration:none;">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include "include/ad_footer.php";
    
?>