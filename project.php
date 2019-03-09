<?php $currentPage = 'project'; include 'header.php'; ?>
                    <!--  Content -->
                    <style type="text/css">
                       .content h3{color: #818380 !important;}
                       .content h4{color: #818380 !important;}
                       #myImg {
                                border-radius: 5px;
                                cursor: pointer;
                                transition: 0.3s;
                                display: block;
                                margin-left: auto;
                                margin-right: auto
                            }
                            
                            #myImg:hover {opacity: 0.7;}
                            
                            /* The Modal (background) */
                            .modal {
                                display: none; /* Hidden by default */
                                position: fixed; /* Stay in place */
                                z-index: 1; /* Sit on top */
                                padding-top: 100px; /* Location of the box */
                                left: 0;
                                top: 0;
                                width: 100%; /* Full width */
                                height: 100%; /* Full height */
                                overflow: auto; /* Enable scroll if needed */
                                background-color: rgb(0,0,0); /* Fallback color */
                                background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
                            }
                            
                            /* Modal Content (image) */
                            .modal-content {
                                margin: auto;
                                display: block;
                                width: 75%;
                                //max-width: 75%;
                            }
                            
                            /* Caption of Modal Image */
                            #caption {
                                margin: auto;
                                display: block;
                                width: 80%;
                                max-width: 700px;
                                text-align: center;
                                color: #ccc;
                                padding: 10px 0;
                                height: 150px;
                            }
                            
                            /* Add Animation */
                            .modal-content, #caption {
                                -webkit-animation-name: zoom;
                                -webkit-animation-duration: 0.6s;
                                animation-name: zoom;
                                animation-duration: 0.6s;
                            }
                            
                            .out {
                              animation-name: zoom-out;
                              animation-duration: 0.6s;
                            }
                            
                            @-webkit-keyframes zoom {
                                from {-webkit-transform:scale(1)}
                                to {-webkit-transform:scale(2)}
                            }
                            
                            @keyframes zoom {
                                from {transform:scale(0.4)}
                                to {transform:scale(1)}
                            }
                            
                            @keyframes zoom-out {
                                from {transform:scale(1)}
                                to {transform:scale(0)}
                            }
                            
                            /* The Close Button */
                            .close {
                                position: absolute;
                                top: 15px;
                                right: 35px;
                                color: #f1f1f1;
                                font-size: 40px;
                                font-weight: bold;
                                transition: 0.3s;
                            }
                            
                            .close:hover,
                            .close:focus {
                                color: #bbb;
                                text-decoration: none;
                                cursor: pointer;
                            }
                            
                            /* 100% Image Width on Smaller Screens */
                            @media only screen and (max-width: 700px){
                                .modal-content {
                                    width: 100%;
                                }
                            }
                             #ascrail2001{
                                position: unset !important;
                            }
                            .fixed-info-container{
                                overflow-y: auto !important;
                                overflow-x: hidden !important;
                            }

                            .nicescroll-rails.nicescroll-rails-vr{
                                display: none !important;
                            }

/*                            #ascrail2009 {
                                display: none !important;
                            }

                            .nicescroll-cursors {
                                display: none !important;
                            }

                            #ascrail2009.nicescroll-rails .nicescroll-rails-vr
                            {
                                display: none !important;
                            }*/

                    </style>
                 
                    <div class="content full-height no-padding">
                        <!--  fixed-info-container -->  
                        <div class="fixed-info-container" style="overflow: scroll !important;">						
                            <h3 style="font-family: inherit;">I V O R Y</h3>
                            <div class="separator"></div>
                            <div class="clearfix"></div>
                            <p>Amphi properties believes in designing homes which brings people closer to nature by practical designs and high quality materials, we give alot of importance to open spaces and natural lighting.</p>
                            <h4 style="font-size: 22px;">Amenities</h4>
                            <ul class="project-details">
                                <li><span><i class="fa fa-shield" style="color:#818380;" aria-hidden="true"></i></span> 24x7 Security </li>
                                <li><span><i class="fa fa-child" style="color:#818380;" aria-hidden="true"></i></span>  Children's Play Area </li>
                                <li><span><i class="fa fa-tree" style="color:#818380;" aria-hidden="true"></i></span> Landscaped Garden </li>
                                <li><span><i class="fa fa-building" style="color:#818380;" aria-hidden="true"></i></span>  Lift </li>
                            </ul>
                            <h4 style="font-size: 22px; font-family: inherit;">Specifications</h4>
                            <ul class="project-details">
                                <li><h4 style="font-family: inherit;">STRUCTURE:</h4></li>
                                <li>Earthquake resistant R.C.C. frame structure with brick walls </li>
                                <li><h4>WALL FINISH:</h4></li>
                                <li>External: Double coat mala plaster with texture/paint/cladding </li>
                                <li>Internal: Mala plaster with putty finish </li>
                                <li><h4>DOOR AND WINDOWS:</h4></li>
                                <li>External: Double coat mala plaster with texture/paint/cladding </li>
                                <li><h4>DOOR AND WINDOWS:</h4></li>
                                <li>Internal: Mala plaster with putty finish </li>
                                <li>Main door will be polished with natural veneer </li>
                                <li>Internal doors with laminate finish/paint </li>
                                <li>High quality aluminum windows for maximum light & ventilation </li>
                                <li>Granite jambs for all windows </li>
                                <li><h4>FLOORING</h4></li>
                                <li>Vitrified tiles</li>
                                <li>Anti skid tiles for balconies</li>
                                <li><h4>KITCHEN</h4></li>
                                <li>Polished granite counters</li>
                                <li>Stainless steel sinks with drain board</li>
                                <li>Ceramic tile dado</li>
                                <li>Kota stone shelves in storeroom</li>
                                <li><h4>UTILITY</h4></li>
                                <li>Ceramic tile dado</li>
                                <li>Kota stone counter</li>
                                <li>Washing machine provision</li>
                                <li><h4>BATHROOM</h4></li>
                                <li>Ceramic tile flooring & dado</li>
                                <li>Jaquar or equivalent C.P. fittings</li>
                                <li>Cera or equivalent sanitary ware</li>
                                <li><h4>ELEVATOR</h4></li>
                                <li>High speed elevator (Omega/Otis/equivalent</li>
                                <li><h4>ELECTRICAL</h4></li>
                                <li>All electrical wiring is concealed with PVC fire resistant insulation</li>
                                <li>High quality modular switches</li>
                                <li>Split AC piping in bedrooms, drawing room & dining area</li>
                                <li>Provision for video door phones</li>
                                <li><h4>PARKING</h4></li>
                                <li>Two car parks for each apartment & two wheeler parking</li>
                            </ul>
                            <p>gujrera.gujarat.gov.in <br>PR/GJ/AHMEDABAD/AHMEDABAD CITY/AUDA/RAA04293/101218</p>
                            <form method="get" action="Brochures/IVORY 3 Bedroom Homes.pdf">
                                <a href="Brochures/IVORY 3 Bedroom Homes.pdf" target="_blank" class="btn trans-btn transition fl-l">Brochure</a>
                            </form>
                          
                            
                        </div>
                        <!--  fixed-info-container end-->
                        <!--  resize-carousel-holder-->
                        <div class="resize-carousel-holder vis-info gallery-horizontal-holder">
                            
                            <!--  gallery_horizontal-->
                            <div id="gallery_horizontal" class="gallery_horizontal owl_carousel">
                                <!-- gallery Item-->
                
                                <div class="horizontal_item">
                                    <a class="zoomimage" hidden=""><img src="images/ivory/02.jpg" class="intense" alt="" id="image2"><i class="fa fa-expand"></i></a>
                                    <!-- <img src="images/ivory/01.jpg" alt=""> -->
                                    <a href="#" onclick="zoom(2);"><img src='images/ivory/02.jpg' alt=""></a>
                                </div>
                                <!-- gallery item end-->
                                 <!-- gallery Item-->
                                <div class="horizontal_item">
                                    <div class="zoomimage" hidden=""><img src="images/ivory/03.jpg" class="intense" alt="" id="image3"><i class="fa fa-expand"></i></div>
                                    <a href="#" onclick="zoom(3);"><img src="images/ivory/03.jpg" alt=""></a>
                                    
                                </div>
                                <!-- gallery item end-->
                                <div class="horizontal_item">
                                    <div class="zoomimage" hidden=""><img src="images/ivory/04.jpg" class="intense" id="image4" alt=""><i class="fa fa-expand"></i></div>
                                    <a href="#" onclick="zoom(4);"><img src="images/ivory/04.jpg" alt=""></a>
                                </div>
                                <!-- gallery Item-->
                                <div class="horizontal_item">
                                    <div class="zoomimage" hidden=""><img src="images/ivory/05.jpg" class="intense" id="image5" alt=""><i class="fa fa-expand"></i></div>
                                    <a href="#" onclick="zoom(5);"><img src="images/ivory/05.jpg" alt=""></a>
                                </div>
                                <!-- gallery item end-->
                                <!-- gallery Item-->
                                <div class="horizontal_item">
                                    <div class="zoomimage" hidden=""><img src="images/ivory/06.jpg" class="intense" id="image6" alt=""><i class="fa fa-expand"></i></div>
                                    <a href="#" onclick="zoom(6);"><img src="images/ivory/06.jpg" alt=""></a>
                                </div>
                                <!-- gallery item end-->
                                <!-- gallery Item-->
                                <div class="horizontal_item">
                                    <div class="zoomimage" hidden=""><img src="images/ivory/07.jpg" class="intense" id="image7" alt=""><i class="fa fa-expand"></i></div>
                                    <a href="#" onclick="zoom(7);"><img src="images/ivory/07.jpg"  alt=""></a>
                                </div>
                                <!-- gallery item end-->
                                <!-- gallery Item-->
                                <div class="horizontal_item">
                                    <div class="zoomimage" hidden=""><img src="images/ivory/08.jpg" class="intense" id="image8" alt=""><i class="fa fa-expand"></i></div>
                                    <a href="#" onclick="zoom(8);"><img src="images/ivory/08.jpg" alt=""></a>
                                </div>
                                <!-- gallery item end-->
                                <!-- gallery Item-->
                                <div class="horizontal_item">
                                    <div class="zoomimage" hidden=""><img src="images/ivory/09.jpg" class="intense" id="image9" alt=""><i class="fa fa-expand"></i></div>
                                    <a href="#" onclick="zoom(9);"><img src="images/ivory/09.jpg"  alt=""></a>
                                </div>
                                <!-- gallery item end-->
                               <div class="horizontal_item">
                                    <div class="zoomimage" hidden=""><img src="images/ivory/10.jpg" class="intense image10" id="image10" alt=""><i class="fa fa-expand"></i></div>
                                    <a href="#" onclick="zoomsss();"><img src="images/ivory/10.jpg"  alt=""></a>
                                </div>
                           
                                <div class="horizontal_item">
                                    <div class="zoomimage" hidden=""><img src="images/ivory/11.jpg" class="intense image11" id="image11" alt=""><i class="fa fa-expand"></i></div>
                                    <a href="#" onclick="zoomss();"><img src="images/ivory/11.jpg"  alt=""></a>
                                </div>
                                <!-- gallery item end-->
                                <!-- gallery Item-->
                                <div class="horizontal_item">
                                    <div class="zoomimage" hidden=""><img src="images/ivory/12.jpg" class="intense image12" id="image12" alt=""><i class="fa fa-expand"></i></div>
                                    <a href="#" onclick="zooms();"><img src="images/ivory/12.jpg"  alt=""></a>
                                </div>
                            </div>
                            <!--  resize-carousel-holder-->
                            <!--  navigation -->

                            <div class="customNavigation">
                                 <a class="prev-slide transition">Previous<!-- <i class="fa fa-angle-left"></i> --></a>
                                <a class="next-slide transition">Next<!-- <i class="fa fa-angle-right"></i> --></a>

                            </div>
                            <!--  navigation end-->
                        </div>
                        <!--  gallery_horizontal end-->
                    </div>
                    <!--  Content  end -->
<?php include 'footer.php';?>

<script type="text/javascript">
    function zoom(input) {
            $('#image'+input).trigger('click');
    }
     function zooms() {
            $('.image12').trigger('click');
    }
    function zoomss() {
            $('.image11').trigger('click');
    }
    function zoomsss() {
            $('.image10').trigger('click');
    }
</script>
