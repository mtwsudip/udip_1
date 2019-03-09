
<!DOCTYPE HTML>
<html lang="en">
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Amphi Properties</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.html">
        <style type="text/css">
            .menu ul li a{color: #818380 !important;}
            form button span{color: #818380 !important;}
        </style>
    </head>
    <body>
        <div class="loader">
            <div class="tm-loader">
                <div id="circle"></div>
            </div>
        </div>
        <!--================= main start ================-->
        <div id="main">
            <!--=============== header For Web ===============-->
            <header id="web">
                    <div class="row">
                        <div class="logo">
                            <a href="index.php" class=""><img src="images/logo.png" class="header_logo" alt=""></a>
                        </div>
                        <div class="menu">
                            <ul>
                                <li><a href="index.php" class="ajax index <?php if($currentPage =='/'){echo 'active';} ?>">Home</a></li>
                                <li><a href="about.php" class="ajax about <?php if($currentPage =='about'){echo 'active';} ?>">About </a></li>
                                <li><a href="project.php" class="ajax project <?php if($currentPage =='project'){echo 'active';} ?>">Project</a></li>
                              <!--   <li><a href="services.php" class="ajax services <?php if($currentPage =='services'){echo 'active';} ?>">Services</a></li> -->
                                <li><a href="contact.php" class="ajax contact <?php if($currentPage =='contact'){echo 'active';} ?>">Contact</a></li>
                                <li><a href="Brochures/IVORY 3 Bedroom Homes.pdf" target="_blank">Brochure</a></li>
                            </ul>
                        </div>

                       <!--  <div class="show-share isShare">
                            <span>
                                <form method="get" action="Brochures/IVORY 3 Bedroom Homes.pdf">
                                       <button type="submit" target="_blank" class="asText"><a href=""><span style="text-decoration:none;">Download Brochure</span></a></button> 
                                </form>
                            </span>
                        </div> -->
                    </div>
                <!-- share  end-->				
            </header>
            <!-- Header   end-->
            <!--=============== header For Mobile ===============-->
            <header id="mobile">
                   
                    <div class="nav-button">
                        <span  class="nos"></span>
                        <span class="ncs"></span>
                        <span class="nbs"></span>
                    </div>
                
                    <div class="logo-holder">
                        <a href="index.html" class="ajax"><img src="images/logo.png" alt=""></a>
                    </div>
                  
                    <div class="header-title">
                        <h2><a class="ajax" href="#"></a></h2>
                    </div>
                  
<!--                     <div class="show-share isShare">
                        <span>
                            <form method="get" action="Brochures/IVORY 3 Bedroom Homes.pdf">
                               <button type="submit" target="_blank" class="asText brochure"><a href=""><span>Download Brochure</span></a></button> 
                            </form>
                        </span>          
                    </div> -->
                        
            </header>
            <!-- Header   end-->
            <!--=============== wrapper ===============-->
            <div id="wrapper">
                <!--=============== content-holder ===============-->
                <div class="content-holder elem scale-bg2 transition3">
                    <!-- Page title -->
                    <div class="dynamic-title">
                        <?php 
                            if($currentPage =='/')
                            {
                                echo 'Home';
                            }
                            elseif($currentPage =='about')
                            {
                                echo 'About';
                            } 
                            elseif($currentPage =='services')
                            {
                                echo 'Services';
                            }
                            elseif($currentPage =='project')
                            {
                                echo 'Project';
                            }
                            elseif($currentPage =='contact')
                            {
                                echo 'Contact';
                            }
                            else
                            {
                            
                            }    
                        ?>            
                    </div>
                    <!-- Page title  end--> 
                    <!--  Navigation --> 
                    <div class="nav-overlay"></div>
                    <div class="nav-inner isDown">
                        <nav>
                            <ul>
                                <li><a href="index.php" class="ajax <?php if($currentPage =='/'){echo 'active';} ?>">Home</a></li>
                                <li><a href="about.php" class="ajax <?php if($currentPage =='about'){echo 'active';} ?>"> About </a></li>
                                <li><a href="project.php" class="ajax <?php if($currentPage =='project'){echo 'active';} ?>">Project</a></li>
                               <!--  <li><a href="services.php" class="ajax <?php if($currentPage =='services'){echo 'active';} ?>">Services</a></li> -->
                                <li><a href="contact.php" class="ajax <?php if($currentPage =='contact'){echo 'active';} ?>">Contact</a></li>
                                <li>
                                    <a href="Brochures/IVORY 3 Bedroom Homes.pdf" target="_blank">Brochure</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!--  Navigation end --> 