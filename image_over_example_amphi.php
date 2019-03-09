linear-gradient(rgba(255,0,0,0.5), rgba(255,0,0,0.5)),

background-position center

background-size cover

height 100
width 100




'background:linear-gradient(rgba(255,0,0,0.5), rgba(255,0,0,0.5)), url(images/ivory/home.jpg); height: 100%; width: 100%; background-position:center; background-size:cover;'

background-image:url(images/ivory/home.jpg);



<?php $currentPage = '/'; include 'header.php'; ?>
     <style type="text/css">
      /* section a{background: #818380 !important;border-color: #818380 !important;}
       section h3{color: #818380 !important;}*/

    .work-text-content {
      position: absolute;
      color: #818380;
      left: 0;
      top: 25%;
      right: 0;
      bottom: 0;
      font-size: 24px;
      text-align: center;
      opacity: 1;
    }
    .work-text-content p{
        text-align: center;
    }
    .fixed-column1 {
    position:fixed;
    top:60px;
    left:0;
    bottom:50px;
    width:100%;
    }

.bghome {
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    opacity: 1.7 !important;
    background: #818380;
    z-index:2;
    background-size: cover;
    background-attachment: scroll;
    background-position: center;
    background-repeat:repeat;
    background-origin: content-box;

}


    </style>
    <!--  Content -->
    <div class="content full-height">
        <!--  fixed-column -->
        <div class="fixed-column1">
            <div class="bghome" style="background:linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(images/ivory/home.jpg); height: 100%; width: 100%; background-position:center; background-size:cover;"></div>
                <div class="work-text-content">
                    <div class="container small-container" style="justify-content: center;">
                        <h3 class="dec-text" style="text-align: center !important;">Welcome to Amphi Properties</h3>
                        <p style="text-align: center !important; color: white; font-family: inherit;">A personification of luxury through simplicity in design. IVORY enjoys a peaceful environment and a location that is in the heart of the city. An icon for a perfect lifestyle.</p>
                        <a href="project.php" class="ajax btn  trans-btn   transition" target="_blank"><span style="color: white;">Our project</span></a>
                    </div>
                </div>
        </div>
        <!--  fixed-column end-->
    </div>
      <!--  Content  end --> 
<?php include 'footer.php';?>