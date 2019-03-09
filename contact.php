<?php $currentPage = 'contact'; include 'header.php'; ?>
<style type="text/css">
input.error {
    background: red;
    color: white;
}
label.error {
    color: red;
}
label {
    /* Other styling.. */
    text-align: right;
    clear: both;
    float:left;
    margin-right:15px;
}
section a{background: #818380 !important;border-color: #818380 !important;}
section h3{color: #818380 !important;}
    
</style>

        <!--  Content -->
        <div class="content full-height">
            <!--  wrapper-inner  --> 
            <div class="wrapper-inner">
                <!--  align-content  --> 
                <div class="align-content">
                    <section>
                        <div class="container small-container">
                            <h3 class="dec-text">Contact</h3>
                            <ul class="contact-list">
                                <li><span>Address </span>
                                    <p>Amphi Properties, Opp Urvashi Apartments, Near Pantaloons Lawgarden, Mithakali-Navrangpura, Ahmedabad</p>
                                </li>
                                <li><span>Phone</span>
                                    <p>+91 079 4899 8111, +91 98258 84231</p>
                                </li>
                                <li>
                                    <span>E-mail </span>
                                    <p>info@amphiproperties.com</p>
                                </li>
                                <li>
                                    gujrera.gujarat.gov.in<br>
                                    PR/GJ/AHMEDABAD/AHMEDABAD CITY/AUDA/RAA04293/101218
                                </li>
                            </ul>
                            <a href="#" class=" btn  trans-btn   transition  fl-l showform"><span>Write us</span></a>
                        </div>
                    </section>
                </div>
                <!--  align-content  end--> 
                <!--  contact-form-holder  --> 
                <div class="contact-form-holder">
                    <span class="close"><input type="hidden" name="" onclick="closediv();"></span><div class="close-contact"></div>
                    <div class="align-content">
                        <section>
                            <div id="contact-form">
                               
                                <form action="contect_form_store.php" name="contactform" id="contactform" method="POST" enctype="multipart/form-data">
                                   <!--  <input name="name" type="text" id="name" placeholder="Name" data-error="">
                                    <input name="email" type="text" id="email" placeholder="E-mail"> -->
                                    <div class="form-group">
                                        <div>
                                            <input type="text" name="name" id="name" placeholder="Name" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <input type="text" name="email" id="email" placeholder="Email" required="">
                                        </div>
									</div>
                                    <div class="form-group">
                                        <div>
                                            <input type="text" name="phone" id="phone" placeholder="Phone" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <textarea name="comments" id="comments" rows="2" placeholder="Message" required=""></textarea>
                                        </div>
                                    </div>
                                   <!--  <div class="form-group">
                                       <div class="verify-wrap">
                                            <div class="g-recaptcha" data-sitekey="6LfIvIcUAAAAAJokQiskXUK16GYBF7s1UCEx0q9i"></div>
                                        </div>  
                                        <script src='https://www.google.com/recaptcha/api.js'></script>
                                    </div> -->
                                    <br><br><br>
									<button type="submit" id="submit" name="submit"><span>Submit </span> <i class="fa fa-long-arrow-right"></i></button> 
                                </form>
                                <br><br>
                                 <div id="message">
                              
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!--  contact-form-holder end -->
            </div>
            <!--  fixed-column -->
            <div class="fixed-column">
                <div class="map-box">
                    <div  id="map-canvas"></div>
                </div>
            </div>
            <!--  fixed-column end-->  
        </div>
<?php include 'footer.php';?>
                  
<script type="text/javascript">
    $("#contactform").validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email:true
            },
            phone: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10
            },
            comments: {
                required: true
            },
        },
        errorPlacement: function(error, element) 
        {
          var placement = $(element).data('error');
          if (placement) 
          {
            $(placement).append(error)
          } else 
          {
            error.insertAfter(element);
          }
        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').removeClass('has-success');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
            $(element).closest('.form-group').addClass('has-success');
        }
    });

    function closediv(){
        $('.contact-form-holder').removeClass('visform');
    }
        
</script>                  