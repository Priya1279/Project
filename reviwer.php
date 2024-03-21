
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB </title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                
                <div class="sidebar-brand-text mx-3"><img src="image/mznjd.jpg" style="width:100%; height:60px;"></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="blank.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="buttons.html">Post</a>
                        <a class="collapse-item" href="table.php">Files</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.php">Login</a>
                        <a class="collapse-item" href="signup.php">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                       
                    </div>
                </div>
            </li>

            

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Priyanka 😊</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

               <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="technology-1">
    <div class="container">
        <div class="col-md-10 ">
            <div class="business">
                <div class="design-bottom">

                    <div class="business-right">
                        <h2>Reviewer Registration Form</h2>
                        <p style="border-top: 3px solid #2196f3;width: 20%;margin-bottom: 13px;margin-top: 10px;"></p>

                    </div>

                    <hr>
                    <form method="POST" action="process.php" enctype="multipart/form-data" class="form-reviewer" style="background-color: #f9f6f6; padding: 20px; border: 1px solid #dcdcdc; ">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="control-label" for="name" style="font-size: 13px; font-weight: 500;">Full Name:</label>
                                <div class=" inline-group">
                                   <!-- <select name="prefix" type="text">
                                        <option value="Prof.">Prof.</option>
                                        <option value="Dr.">Dr.</option>
                                        <option value="Mr.">Mr.</option>
                                        <option value="Mrs.">Mrs.</option>
                                        <option value="Miss.">Miss.</option>
                                    </select>-->
                                    <input type="text" class="form-control" required name="name" id="name" placeholder="Title">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="email" style="font-size: 13px; font-weight: 500;">Email:</label>

                                <input type="email" class="form-control" required name="email" id="email" placeholder="Email">

                            </div>
                            <div class="form-group">
                                <label class="control-label" for="phone" style="font-size: 13px; font-weight: 500;">Phone :</label>

                                <input type="text" class="form-control" required name="phone" id="phone" placeholder="Phone (Residence/Office/Work)">

                            </div>
                            <div class="form-group">
                                <label class="control-label" for="mob" style="font-size: 13px; font-weight: 500;">Mobile :</label>

                                <input type="text" class="form-control" required name="mobile" id="mob" placeholder="Mobile No (Enter without Country Code)">

                            </div>


                            <div class="form-group">
                                <label class="control-label" for="dob" style="font-size: 13px; font-weight: 500;">Date of Birth :</label>

                                <input type="date" class="form-control" required name="dob" id="dob">

                            </div>

                            <div class="form-group">
                                <label class="control-label" for="dob" style="font-size: 13px; font-weight: 500;">Postal Address :</label>
                                <textarea name="address" id="address" class="form-control" required placeholder="Address" cols="30" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="dob" style="font-size: 13px; font-weight: 500;">State :</label>
                                <input type="text" class="form-control" required name="state" id="state" placeholder="State">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="dob" style="font-size: 13px; font-weight: 500;">Country :</label>
                                <input type="text" class="form-control" list="country_list" required name="country" id="country" placeholder="Country">
                                <datalist id="country_list">


                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-leste">Timor-leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                    <option value="other">other</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                </datalist>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="dob" style="font-size: 13px; font-weight: 500;">Branch :</label>
                                <select class="form-control" name="branch" id="branch">
                                    <option value="">Please select</option>
                                    <option value="Acoustical Engineering">Acoustical Engineering</option>
                                    <option value="Aeronautical Engineering">Aeronautical Engineering </option>
                                    <option value="Aeronautics">Aeronautics</option>
                                    <option value="Aerospace Engineering">Aerospace Engineering </option>
                                    <option value="Agricultural Engineering">Agricultural Engineering </option>
                                    <option value="Agriculture Science">Agriculture Science</option>
                                    <option value="Applied Engineering">Applied Engineering</option>
                                    <option value="Applied sciences"> Applied sciences</option>
                                    <option value="Architecture & Planning"> Architecture & Planning </option>
                                    <option value="Architecture Engineering">Architecture Engineering </option>
                                    <option value="Audio Engineering">Audio Engineering</option>
                                    <option value="Automation & Robotics Engineering">Automation & Robotics Engineering </option>
                                    <option value="Automobile Engineering">Automobile Engineering</option>
                                    <option value="Automotive Electronics">Automotive Electronics</option>
                                    <option value="Automotive Engineering"> Automotive Engineering </option>
                                    <option value="Bio Engineering">Bio Engineering</option>
                                    <option value="Bio Mechanical & Bio Medical Engineering">Bio Mechanical & Bio Medical Engineering </option>
                                    <option value="Bio Technology">Bio Technology</option>
                                    <option value="Bio-molecular Engineering">Bio-molecular Engineering</option>
                                    <option value="Biochemical Engineering">Biochemical Engineering</option>
                                    <option value="Biochemistry">Biochemistry</option>
                                    <option value="Bioinformatics">Bioinformatics</option>
                                    <option value="Biological & Bio system Engineering">Biological & Bio system Engineering </option>
                                    <option value="Biomedical Engineering">Biomedical Engineering</option>
                                    <option value="Building & Construction Engineering">Building & Construction Engineering</option>
                                    <option value="Ceramic Engineering">Ceramic Engineering</option>
                                    <option value="Ceramic Technology">Ceramic Technology</option>
                                    <option value="Chassis Engineering"> Chassis Engineering </option>
                                    <option value="Chemical Engineering">Chemical Engineering </option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Civil Engineering">Civil Engineering </option>
                                    <option value="Communication Engineering">Communication Engineering</option>
                                    <option value="Communication Systems">Communication Systems</option>
                                    <option value="Computer Engineering">Computer Engineering </option>
                                    <option value="Computer Network">Computer Network</option>
                                    <option value="Computer Science">Computer Science</option>
                                    <option value="Computer Science and Engg.">Computer Science and Engg.</option>
                                    <option value="Construction Technology">Construction Technology</option>
                                    <option value="Construction Technology & Management">Construction Technology & Management</option>
                                    <option value="Control and Automation">Control and Automation</option>
                                    <option value="Corrosion Engineering">Corrosion Engineering</option>
                                    <option value="Cryogenics">Cryogenics</option>
                                    <option value="Dairy Technology">Dairy Technology</option>
                                    <option value="Earthquake engineering">Earthquake engineering</option>
                                    <option value="Economic, logistic and governance">Economic, logistic and governance</option>
                                    <option value="Education">Education</option>
                                    <option value="Electrical Engineering">Electrical Engineering</option>
                                    <option value="Electronics & Communication Engineering">Electronics & Communication Engineering</option>
                                    <option value="Electronics & Media Technology">Electronics & Media Technology</option>
                                    <option value="Electronics and Communication">Electronics and Communication</option>
                                    <option value="Electronics Engineering">Electronics Engineering</option>
                                    <option value="Embedded systems">Embedded systems</option>
                                    <option value="Energy Engineering">Energy Engineering</option>
                                    <option value="Engineering Chemistry">Engineering Chemistry</option>
                                    <option value="Engineering Education">Engineering Education</option>
                                    <option value="Engineering Management">Engineering Management </option>
                                    <option value="Engineering Mathematics">Engineering Mathematics </option>
                                    <option value="Engineering Mechanics">Engineering Mechanics</option>
                                    <option value="Engineering Physics">Engineering Physics</option>
                                    <option value="Engineering Sciences">Engineering Sciences</option>
                                    <option value="Engineering Technology">Engineering Technology</option>
                                    <option value="Environment Engineering">Environment Engineering</option>
                                    <option value="Environmental Engineering">Environmental Engineering</option>
                                    <option value="Environmental Science">Environmental Science</option>
                                    <option value="Fashion & Apparel Engineering">Fashion & Apparel Engineering </option>
                                    <option value="Fashion Technology">Fashion Technology</option>
                                    <option value="Fiber Technology">Fiber Technology</option>
                                    <option value="Food Engineering">Food Engineering </option>
                                    <option value="Food Science"> Food Science</option>
                                    <option value="Food Technology">Food Technology</option>
                                    <option value="Forensic Engineering">Forensic Engineering</option>
                                    <option value="Forensic Science and Technology">Forensic Science and Technology</option>
                                    <option value="Forestry Engineering"> Forestry Engineering </option>
                                    <option value="Gas Engineering"> Gas Engineering </option>
                                    <option value="Geo Informatics">Geo Informatics</option>
                                    <option value="Geo Technical Engineering">Geo Technical Engineering </option>
                                    <option value="Geo-sciences & Remote Sensing">Geo-sciences & Remote Sensing</option>
                                    <option value="Geological Engineering"> Geological Engineering </option>
                                    <option value="Industrial Design">Industrial Design</option>
                                    <option value="Industrial Engineering"> Industrial Engineering </option>
                                    <option value="Information & Communication Technology">Information & Communication Technology</option>
                                    <option value="Information & Technology">Information & Technology</option>
                                    <option value="Information Engineering">Information Engineering</option>
                                    <option value="Information Science">Information Science</option>
                                    <option value="Instrument Technology">Instrument Technology</option>
                                    <option value="Instrumentation & Control Engineering">Instrumentation & Control Engineering</option>
                                    <option value="Instrumentation Technology">Instrumentation Technology</option>
                                    <option value="Integrated Engineering"> Integrated Engineering </option>
                                    <option value="Irrigation Engineering">Irrigation Engineering</option>
                                    <option value="Landuse & Urban Planning">Landuse & Urban Planning</option>
                                    <option value="Leather Technology">Leather Technology</option>
                                    <option value="Library and Information Science">Library and Information Science</option>
                                    <option value="Machine Engineering">Machine Engineering</option>
                                    <option value="Manufacturing Engineering">Manufacturing Engineering </option>
                                    <option value="Marine Engineering">Marine Engineering</option>
                                    <option value="Materials Engineering"> Materials Engineering </option>
                                    <option value="Materials Science & Technology">Materials Science & Technology</option>
                                    <option value="Materials Sciences"> Materials Sciences</option>
                                    <option value="Mathematics"> Mathematics</option>
                                    <option value="Measurement Science">Measurement Science</option>
                                    <option value="Mechanical Engineering">Mechanical Engineering </option>
                                    <option value="Mechatronics Engineering">Mechatronics Engineering</option>
                                    <option value="Medical Electronics">Medical Electronics</option>
                                    <option value="Military Engineering">Military Engineering</option>
                                    <option value="Mineral & Metallurgical Engineering"> Mineral & Metallurgical Engineering </option>
                                    <option value="Mineral Engineering">Mineral Engineering</option>
                                    <option value="Mining Engineering"> Mining Engineering </option>
                                    <option value="Model Engineering">Model Engineering </option>
                                    <option value="Molecular Engineering">Molecular Engineering</option>
                                    <option value="Nanotechnology">Nanotechnology</option>
                                    <option value="Natural Sciences, Humanities"> Natural Sciences, Humanities </option>
                                    <option value="Naval Architectural Engineering"> Naval Architectural Engineering </option>
                                    <option value="Naval Engineering">Naval Engineering</option>
                                    <option value="Nuclear Engineering">Nuclear Engineering </option>
                                    <option value="Ocean Engineering">Ocean Engineering </option>
                                    <option value="Oil & Paint Technology">Oil & Paint Technology</option>
                                    <option value="Oil Engineering"> Oil Engineering </option>
                                    <option value="Optical Engineering">Optical Engineering</option>
                                    <option value="Others">Others</option>
                                    <option value="Packaging Technology">Packaging Technology</option>
                                    <option value="Paint Technology">Paint Technology</option>
                                    <option value="Petrochemical Engineering">Petrochemical Engineering</option>
                                    <option value="Petroleum Engineering"> Petroleum Engineering </option>
                                    <option value="Pharmaceutical Technology">Pharmaceutical Technology</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Planning Engineering">Planning Engineering</option>
                                    <option value="Plastic Engineering">Plastic Engineering</option>
                                    <option value="Polymer Science">Polymer Science</option>
                                    <option value="Polymer Technology">Polymer Technology</option>
                                    <option value="Power electronics engineering">Power electronics engineering</option>
                                    <option value="Power Engineering">Power Engineering</option>
                                    <option value="Precision Engineering">Precision Engineering</option>
                                    <option value="Printing Technology">Printing Technology</option>
                                    <option value="Process Engineering">Process Engineering</option>
                                    <option value="Product Design Technology">Product Design Technology</option>
                                    <option value="Production Engineering">Production Engineering</option>
                                    <option value="Pulp & Paper Technology">Pulp & Paper Technology</option>
                                    <option value="Railway Engineering">Railway Engineering</option>
                                    <option value="Rubber Technology">Rubber Technology</option>
                                    <option value="Safety & Fire Engineering">Safety & Fire Engineering</option>
                                    <option value="Seismology">Seismology</option>
                                    <option value="Signal Processing">Signal Processing</option>
                                    <option value="Silk Technology">Silk Technology</option>
                                    <option value="Software Engineering"> Software Engineering </option>
                                    <option value="Software Technology">Software Technology</option>
                                    <option value="Sound Engineering"> Sound Engineering </option>
                                    <option value="Space Engineering">Space Engineering </option>
                                    <option value="Sports Engineering">Sports Engineering</option>
                                    <option value="Structural Engineering"> Structural Engineering</option>
                                    <option value="Sugar Technology">Sugar Technology</option>
                                    <option value="System Engineering">System Engineering</option>
                                    <option value="Systems Engineering">Systems Engineering</option>
                                    <option value="Telecommunication Engineering">Telecommunication Engineering</option>
                                    <option value="Textile Engineering">Textile Engineering</option>
                                    <option value="Textile Technology">Textile Technology</option>
                                    <option value="Thermal Engineering">Thermal Engineering</option>
                                    <option value="Tool Engineering">Tool Engineering</option>
                                    <option value="Transportation Engineering">Transportation Engineering</option>
                                    <option value="Utility Engineering">Utility Engineering</option>
                                    <option value="Vehicle Engineering">Vehicle Engineering</option>
                                    <option value="VLSI and Embedded Systems Design">VLSI and Embedded Systems Design</option>
                                    <option value="Water Engineering">Water Engineering</option>
                                    <option value="Water Resource Engineering"> Water Resource Engineering </option>
                                    <option value="Wireless Communication">Wireless Communication </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="dob" style="font-size: 13px; font-weight: 500;">Qualification :</label>
                                <select name="qualification" required class="form-control">
                                    <option value="">Please select</option>
                                    <option value="B. Tech">B. Tech</option>
                                    <option value="M. E">M. E</option>
                                    <option value="M. Tech">M. Tech</option>
                                    <option value="M.Phil">M.Phil</option>
                                    <option value="M.Sc">M.Sc.</option>
                                    <option value="MCA">MCA</option>
                                    <option value="Ph. D">Ph. D</option>
                                    <option value="Post Doctorates">Post Doctorates</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="dob" style="font-size: 13px; font-weight: 500;"> Affiliation (University/College/Company) :</label>
                                <input type="text" class="form-control" required name="affiliation" id="affiliation" placeholder="Affiliation (University/College/Company)">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="dob" style="font-size: 13px; font-weight: 500;">Designation :</label>
                                <select name="designation" id="designation" class="form-control">
                                    <option value="">Please select</option>
                                    <option value="Assistant Professor">Assistant Professor</option>
                                    <option value="Professor">Professor</option>
                                    <option value="H.O.D">H.O.D</option>
                                    <option value="Principal">Principal</option>
                                    <option value="Associate Professor">Associate Professor</option>
                                    <option value="Lecturer">Lecturer</option>
                                    <option value="Technical Assistant">Technical Assistant</option>
                                    <option value="Laboratory Technician">Laboratory Technician</option>
                                    <option value="Jr. Scientist">Jr. Scientist</option>
                                    <option value="Sr. Scientist">Sr. Scientist</option>
                                    <option value="Scientist">Scientist</option>
                                    <option value="Director">Director</option>
                                    <option value="Professional (Researcher">Professional (Researcher)</option>
                                    <option value="Researcher">Researcher</option>
                                    <option value="Dean">Dean</option>
                                    <option value="CTO">CTO</option>
                                    <option value="Senior Lecturer">Senior Lecturer</option>
                                    <option value="Postdoctoral Fellow">Postdoctoral Fellow</option>
                                    <option value="Technology Researcher">Technology Researcher</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="dob" style="font-size: 13px; font-weight: 500;"> Total Academic Experience (in years): :</label>
                                <select name="experience" required class="form-control">
                                    <option value="">Please Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10+</option>
                                    <option value="15">15+</option>
                                    <option value="20">20+</option>
                                </select>
                            </div>
                           <!-- <div class="form-group">
                                <label class="control-label" for="dob" style="font-size: 13px; font-weight: 500;"> Specialization(Enter Multiple by Comma/Newline):</label>
                                <textarea name="specialization" id="specialization" class="form-control" required placeholder="Enter Multiple by Comma/Newline" cols="30" rows="4"></textarea>
                            </div>-->
                            <div class="form-group">
                                <label class="control-label" for="dob" style="font-size: 13px; font-weight: 500;"> Resume:</label>
                                <input type="file" class="form-control" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"  required id="resume" name="resume">
                            </div>
                        <!--  <div class="form-group">
                                <label class="control-label" for="dob" style="font-size: 13px; font-weight: 500;"> Latest Qualification Certificate:</label>
                                <input type="file" class="form-control"  accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"  required id="qualification_certificate" name="qualification_certificate">
                            </div>-->
                        </div>
                            <br>
                            <!--<div class="col-md-1 ">
                                <a href="" class="btn btn-danger">Cancel </a>
                            </div>-->
                            <div class="col-md-1 ">
                                <button type="submit" name="submit" class="btn btn-primary">Submit </button>
                            </div>

                        
                        <hr>
                        <p>For any query, send an email at <a href=""> iisuniversity@iisuniv.ac.in </a></p>
                        <div class="clearfix"></div>
                    </form>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        
        <!-- technology-right -->

        <!-- technology-right -->
    </div>
</div>

                    <!-- Content Row -->
                  
                    <!-- Content Row -->

                 </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>