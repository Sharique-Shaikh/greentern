 <?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Greentern</title>
      <link rel="icon" href="assets/images/favicon.png">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=<?php echo time();?>">
   </head>
   <body class="jqScript">
      <?php include('assets/includes/header.php');?>
      <main>
         <section class="hero-container">
            <div class="container hero-bg px-lg-5">
               <div class="">
                  <div class="row align-items-center ">
                     <div class="col-md-6 ">
                        <div class="hero-content mt-5 mt-md-0">
                           <h1>Technology Adoption Simplified</h1>
                           <p class="py-4">Greentern is a SAAS technology research and consulting company.</p>
                           <div class="btn  hero-btn"><a href="#what-we-do">Know More </a><i class="fas fa-chevron-right"></i></div>
                        </div>
                     </div>
                     <div class="col-md-6 ">
                        <div class="video-section mt-4 mt-md-0 ">
                           <!-- <video muted  autoplay loop preload="none"  >
                              <source src="assets/videos/hero-V8.mp4" type="video/mp4">
                              <source src="assets/videos/hero-V8.ogg" type="video/ogg">
                           </video> -->
                           <lottie-player src="assets/json/hero-section.json" background="#fcfbfd"  speed="1"  style="width: 100%; height:auto;" loop  autoplay></lottie-player>
                           <!-- <div class="w-100 h-100 position-absolute start-0 top-0 load-timer"><img class="w-100 h-100" src="assets/images/loader.gif" alt=""></div> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="bg-light-gray" id="what-we-do">
            <div class="container">
               <div class="equal-padding-T equal-padding-B ">
                  <div class="sectionHeading text-center mb-5">
                     <h6>WHAT WE DO</h6>
                     <h2>We help good businesses meet great products.</h2>
                  </div>
                  <div class="video-section">
                    
                     <lottie-interactive path="assets/json/Top.json"  style="width: 100%; " background="#f110" interaction="play-on-show" play-once  ></lottie-interactive>
                  </div>
                  <div class="text-center mt-5">
                     <p>We have 30+ years combined industry experience. We evaluate 100s of products<br /> every month. We also gather indispensable insights on user-experience, total cost of ownership<br /> and support infrastructure from actual business buyers. 
                     </p>
                  </div>
               </div>
            </div>
         </section>
         <section class="bg-light" id="business">
            <div class="container ">
               <div class="equal-padding-T ">
                  <div class="sectionHeading text-left mb-5">
                     <h6>FOR BUSINESS</h6>
                     <h2>Do you want to solve your business problems <br class="d-md-block d-none"/>with a guaranteed solution ?</h2>
                  </div>
               </div>
            </div>
            <div class="">
               
               
               <lottie-interactive path="assets/json/Business-Section.json"  style="width: 100%;  " background="#f110" interaction="play-on-show" play-once  ></lottie-interactive>
            </div>
         </section>
         <section class="bg-light">
            <div class="container ">
               <div class="equal-padding-T equal-padding-B">
                  <div class="sectionHeading text-center mb-5">
                     <h2>Get started in 3 simple steps</h2>
                  </div>
                  <div class="green-steps " >
                     <div class="row gy-5 gy-md-0">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                           <div class="stepsContent " >
                              <h5>STEP 1</h5>
                              <div class="steps-icons" data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="300" ><img src="assets/images/Icons/Group-1.svg" alt=""></div>
                              <h3>Fill a simple form <br /><a href="#contact">Start Now</a></h3>
                           </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                           <div class="stepsContent" >
                              <h5>STEP 2</h5>
                              <div class="steps-icons" data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="600" ><img src="assets/images/Icons/clock.svg" alt=""></div>
                              <h3>Schedule a call &<br />talk to our expert</h3>
                           </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                           <div class="stepsContent removeStepsarrow" >
                              <h5>STEP 3</h5>
                              <div class="steps-icons" data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="900" ><img src="assets/images/Icons/Calque-2.svg" alt=""></div>
                              <h3>Get an enabler<br />document within 1 week</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="bg-light">
            <div class="container ">
               <div class="equal-padding-T equal-padding-B">
                  <div class="strip bg-black">
                     <h6>TOO GOOD TO BELIEVE ?</h6>
                     <div class="stripContent d-md-flex justify-content-between align-items-center">
                        <h3>Yes, We are a bunch of emthusiastic technology evangelists <br class="d-md-block d-none"/>having 50+ years of tech and business experience.<br class="d-md-block d-none"/> Write to us with confidence.</h3>
                        <div class=" mt-md-0 mt-4"><a  class="btn btn-border-white form-pop" data-bs-toggle="modal" data-bs-target="#exampleModal">Get In Touch</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="bg-light-gray" id="product">
            <div class="container">
               <div class="equal-padding-T equal-padding-B">
                  <div class="row ">
                     <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="sectionHeading  mb-5">
                           <h6>SAAS PRODUCTS</h6>
                           <h2 class="pb-4">Do you have a great product?<br /> Let us hear about it</h2>
                           <p>Write to us if you would like to enter Greentern's SAAS database or to explore the Greentern Sales Engine</p>
                        </div>
                        <div class="owl-carousel owl-theme productSlider">
                           <div class="item">
                              <div class="strip bg-black">
                                 <div class="stripContent">
                                    <h3>A great product wanting to expand globally</h3>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="strip bg-black">
                                 <div class="stripContent">
                                    <h3>A product that can solve new-gen business problems</h3>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="strip bg-black">
                                 <div class="stripContent">
                                    <h3>A giant-killer product that can disrupt the market</h3>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="strip bg-black">
                                 <div class="stripContent">
                                    <h3>A product that transforms traditional business processes.</h3>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-md-0 mt-4">
                        <div class="row">
                           <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="productList">
                                 <div class="productIcon bg-light-green"><img src="assets/images/database.svg" alt=""></div>
                                 <h4>SAAS Database</h4>
                                 <p>Enter our database of evaluated products</p>
                                 <a href="#contact">Know More</a>
                              </div>
                           </div>
                           <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="productList">
                                 <div class="productIcon bg-light-green"><img src="assets/images/consulting.svg" alt=""></div>
                                 <h4>Go-to-market </h4>
                                 <p>Get your Market Entry and GTM strategies perfected </p>
                                 <a href="#contact">Know More</a>
                              </div>
                           </div>
                           <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="productList">
                                 <div class="productIcon bg-light-green"><img src="assets/images/gmt-engineering.svg" alt=""></div>
                                 <h4>Sales as a Service</h4>
                                 <p>Boost your performance with Greentern's Sales Strategy & Execution Engine</p>
                                 <a href="#contact">Know More</a>
                              </div>
                           </div>
                           <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="productList">
                                 <div class="productIcon bg-light-green"><img src="assets/images/talk-to-customers.svg" alt=""></div>
                                 <h4>Consulting</h4>
                                 <p>Work with us to come up with tailor-made technology solutions</p>
                                 <a href="#contact">Know More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section>
            <div class="container">
               <div class="equal-padding-T equal-padding-B ">
                  <div class="button-toggle d-flex justify-content-center">
                     <div class="btn-box click-bg mb-4 mb-sm-0 flex-sm-row flex-column justify-content-center text-sm-start text-center " data-src="assets/json/Execution-Engine.json">
                        <div class="img-icon bg-light-green justify-content-center "><img src="assets/images/Icons/job.svg" alt=""></div>
                        <span>Execution Engine</span>
                     </div>
                     <div class="btn-box mb-4 mb-sm-0 flex-sm-row flex-column justify-content-center text-sm-start text-center" data-src="assets/json/Strategy.json">
                        <div class="img-icon  bg-light-green justify-content-center "><img src="assets/images/Icons/strategy.svg" alt=""></div>
                        <span>Strategy</span>
                     </div>
                  </div>
               </div>
               <div class="">
                  
                  
                  <lottie-interactive path="assets/json/Execution-Engine.json" id="video"  style="width: 100%; " background="#f110" interaction="play-on-show" play-once  ></lottie-interactive>
                  
               </div>
            </div>
         </section>
         <section class="bg-light-gray">
            <div class="container">
               <div class="equal-padding-T equal-padding-B">
                  <div class="strip bg-black">
                     <h6>TOO GOOD TO BELIEVE ?</h6>
                     <div class="stripContent d-md-flex  justify-content-between align-items-center">
                        <h3>Write to us to simply enter our database or explore a sleuth<br class="d-md-block d-none"/> of gtm/sales offering we have to offer.</h3>
                        <div class="mt-md-0 mt-4"><a class="btn btn-border-white form-pop" data-bs-toggle="modal" data-bs-target="#exampleModal">Get In Touch</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="bg-black">
            <div class="container">
               <div class="equal-padding-T equal-padding-B">
                  <div class="sectionHeading  mb-5 text-md-start text-center">
                     <h6>OUR FEATURES</h6>
                     <h2 class="text-white">Why partner with us ?</h2>
                  </div>
                  <div class="row">
                     <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="featureList">
                           <h3 class="counter">150+</h3>
                           <p>DATABASE OF EVALUATED PRODUCTS</p>
                        </div>
                     </div>
                     <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="featureList">
                           <h3 class="counter">50+</h3>
                           <p>YEARS OF TECHNOLOGICAL EXPERIENCE</p>
                        </div>
                     </div>
                     <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="featureList">
                           <h3 class="counter">20+</h3>
                           <p>TECHNOLOGY PARTNERS</p>
                        </div>
                     </div>
                     <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="featureList">
                           <h3 class="counter">100+</h3>
                           <p>NETWORK OF TECH BUYERS</p>
                        </div>
                     </div>
                     <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="featureList">
                           <h3 class="counter">05</h3>
                           <p>PRESENCE IN COUNTRIES</p>
                        </div>
                     </div>
                     <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="featureList">
                           <h3 class="counter">120+</h3>
                           <p>SOLUTIONS PROVIDED</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section>
            <div class="">
               <div class="equal-padding-T ">
                  <div class="sectionHeading text-center mb-5">
                     <h6>OUR SELECTIVE CLIENTS</h6>
                     <h2>You'll be in good company</h2>
                  </div>
                  <div class="owl-carousel owl-theme clientSlider">
                     <div class="item">
                        <div class="clientLogo"><img src="assets/images/clients/itilite.svg" alt="itilite"></div>
                     </div>
                     <div class="item">
                        <div class="clientLogo"><img src="assets/images/clients/kissflow.svg" alt="kissflow"></div>
                     </div>
                     <div class="item">
                        <div class="clientLogo"><img src="assets/images/clients/omnistrada.svg" alt="omnistrada"></div>
                     </div>
                     <div class="item">
                        <div class="clientLogo"><img src="assets/images/clients/shipsy.svg" alt="shipsy"></div>
                     </div>
                     <div class="item">
                        <div class="clientLogo"><img src="assets/images/clients/spurtree.svg" alt="spurtree"></div>
                     </div>
                     <div class="item">
                        <div class="clientLogo"><img src="assets/images/clients/ace-turtle.svg" alt="ace-turtle"></div>
                     </div>
                     <div class="item">
                        <div class="clientLogo"><img src="assets/images/clients/aiektar.svg" alt="aiektar"></div>
                     </div>
                     <div class="item">
                        <div class="clientLogo"><img src="assets/images/clients/daton.svg" alt="daton"></div>
                     </div>
                     <div class="item">
                        <div class="clientLogo"><img src="assets/images/clients/increff.svg" alt="increff"></div>
                     </div>
                     <div class="item">
                        <div class="clientLogo"><img src="assets/images/clients/mogi.svg" alt="mogi"></div>
                     </div>
                     <div class="item">
                        <div class="clientLogo"><img src="assets/images/clients/peoplestrong.svg" alt="peoplestrong"></div>
                     </div>
                     <div class="item">
                        <div class="clientLogo"><img src="assets/images/clients/QASA.svg" alt="QASA"></div>
                     </div>
                     <div class="item">
                        <div class="clientLogo"><img src="assets/images/clients/the-good-business-company.svg" alt="the-good-business-company"></div>
                     </div>
                     <div class="item">
                        <div class="clientLogo"><img src="assets/images/clients/vinculum.svg" alt="vinculum"></div>
                     </div>
                     <div class="item">
                        <div class="clientLogo"><img src="assets/images/clients/zoho.svg" alt="zoho"></div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="form-container hide-on-pop" id="contact">
            <div class="container">
               <div class="equal-padding-T equal-padding-B">
                  <div class="sectionHeading text-center mb-5">
                     <h6>GET STARTED</h6>
                     <h2 class="">Do you have a great product or looking for a <br class="d-md-block d-none"/>
                        business solution ? Let us hear about it.
                     </h2>
                  </div>
                  <div class="form-items  mx-auto">
                     <p>Our expert will reach you for a 30 minute call</p>
                                                <?php include('form.php'); ?>
                 
                  </div>
               </div>
            </div>
         </section>
      </main>
      <footer>
         <section class="footer-container ">
            <div class="container">
               <div class="equal-padding-T equal-padding-B">
                  <div class="footer-heading sectionHeading text-center ">
                     <h2 class="text-white">On top of global SAAS innovation. <br />Hundreds of products evaluated.
                     </h2>
                  </div>
                  <div class="footer-row row">
                     <div class="col-md-6">
                        <div class="footer-about text-md-start text-center">
                           <div class="footer-logo w-25 mb-3 mx-md-0 mx-auto"><img class="w-100" src="assets/images/Greentern_Whitelogo.svg" alt=""></div>
                           <p class=" text-break  " >Greentern is a SAAS technology research and consulting company.</p>
                        </div>
                     </div>
                     <div class="col-md-6 mt-4 mt-md-0">
                        <div class="footer-social justify-content-md-end justify-content-center"><a href=""><i class="fab fa-facebook-f"></i></a><a href=""><i class="fab fa-instagram"></i></a><a href=""><i class="fab fa-twitter"></i></a><a href=""><i class="fab fa-youtube"></i></a></div>
                     </div>
                  </div>
                  <div class="footer-end ">
                     <p class=" text-md-start text-center d-flex justify-content-md-start  flex-column flex-md-row flex-column-reverse">  <span>2020, All rights reserved</span><a href="privacy-policy.php">Privacy Policy</a> </p>
                  </div>
               </div>
            </div>
         </section>
      </footer>
      <!-- Modal -->
      <div class="modal fade hide-form" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-xl">
            <div class="modal-content ">
               <div class="modal-header border-0 pb-0">
                  <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                  <button type="button" class="btn-close form-pop" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <section class="form-container" id="contact">
                  <div class="container">
                     <div class="">
                        <div class="form-items  mx-auto border-0 px-3 pt-0">
                           <div class="sectionHeading text-center  mb-2">
                              <!-- <h6>GET STARTED</h6> -->
                              <h2 class="">Thank you taking out time
                              </h2>
                           </div>
                           <p class="text-center">Our expert will reach you for a 30 minute call</p>
                           <?php include('form.php'); ?>
                          
                        </div>
                     </div>
                  </div>
               </section>
            </div>
         </div>
      </div>
      
<!--thank you modal-->
<div class="modal fade" id="thankyou-mdal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered ">
	  <div class="modal-content rounded-0">
		<div class="modal-header border-0 pb-0 ">
		  <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body text-center">
			<div class="col-sm-9  mx-auto pop-content ">
				<div class="equal-padding-B">
				<div class="pop-icon pb-5"><img src="assets/images/success.png" alt=""></div>
				<h5 class="fw-normal fs-3 mb-4">Thank you</h5>
				<p class="para-color mb-0">Your submission has been received.</p>
				<p class="para-color">We will be in touch and contact you soon.</p>
			<button type="button" class="btn btn-bg text-white w-100 mt-4">Back to safe</button>
			</div>
		</div>
		</div>
		
	  </div>
	</div>
  </div>
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
      <script async src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@16.1.0/dist/lazyload.min.js"></script>

      <script type="text/javascript" src="https://unpkg.com/lottie-interactive@latest/dist/lottie-interactive.js"></script>

	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>



      <script type="text/javascript" src="assets/js/main.js"></script>
      <script>
         window.lazyLoadOptions = {
           elements_selector: ".lazy"
         };
         
 $.validator.addMethod("email", function (value, element) {
        return /^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i.test(value) //email
    }, "Please enter valid email");

    $.validator.addMethod("mobileValidation", function (value, element) {
        return !/^\d{8}$|^\d{10}$/.test(value) ? false : true;
    }, "Mobile number invalid");
    
$("form[name='greentern-enquiry']").validate({
    rules: {
      name:{
          required:true,
          minlength: 3,
      },
       phoneno:{
          required:true,
          minlength: 10,
          maxlength: 10,
          number: true,
         mobileValidation: true
      },
       companyname:{
          required:true,
          minlength: 3,
      },
       email:{
          required:true,
          email:true,
          
      },
      type:{
        required:true
      },
      message:{
        required:true,
        minlength: 10
      },

    },
     errorPlacement: function(error, element) {
        error.insertAfter(element.parent('.fields'));
    },
      
    submitHandler: function(form) {
     // form.submit();
         $.ajax({
                url:"process.php",
                type: "POST",
                dataType: "json",
                data: $("form[name='greentern-enquiry']").serialize(),
                success: function (response) {
                    
                    if(response==1){
                        $('#thankyou-mdal').modal('show');
                    }
                    else{
                        alert("something is wrong");
                    }
                        $("form[name='greentern-enquiry']").html("");

                      
                },
            }); // AJAX Get Jquery statment
    }
  });

      </script>
   </body>
</html>