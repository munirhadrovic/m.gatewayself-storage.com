<!DOCTYPE html>
<html>
	<head>
        <title>Gateway Self Storage : Maumelle &amp; NLR Self Storage Facility (501) 758-STOR</title>
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">

		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
            $(function(){
                $('#menu1').slicknav({
                    prependTo:'#navigation-menu-1'
                });
            });
            $(function(){
                $('#menu2').slicknav({
                    prependTo:'#navigation-menu-2'
                });
            });
            $(function(){
                $('#menu3').slicknav({
                    prependTo:'#navigation-menu-3'
                });
            });
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
            $(function(){
                $('#menu-storage').slicknav({
                    prependTo:'#navigation-menu-storage'
                });
            });
            $(function(){
                $('#menu-advantages').slicknav({
                    prependTo:'#navigation-menu-advantages'
                });
            });
			$(function(){
				$('#menu-faq').slicknav({
					prependTo:'#navigation-menu-faq'
				});
			});
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		   
			
			
    	</script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
			
			
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><img src="img/logo.png" alt="LOGO"></h1>
		</div>
        <div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
            <h1 style="font-weight: normal; font-size: 13px;">Powered By <a href="http://mobilegrows.com/" rel="external" style="text-decoration: none;">MobileGrows</a> | <a href="http://www.gatewayself-storage.com/" rel="external" style="text-decoration: none;">  Desktop Site</a></h1>
        </div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/3slide.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/1slide.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/4slide.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
                            <img src="img/slider-images/2slide.jpg" alt="">
                            <!-- <p class="caption">This is a caption</p> -->
                        </li
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn ui-icon-phone ui-btn-icon-left buttons-radius" href="tel:<?php echo $telephone ?>">Call US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0) {

									console.log("Blakberu je prosao ")
									var prostordugme=document.getElementById('findUS');
									var dugme= document.createElement('a');
									dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
									dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									dugme.innerHTML="Find US";
									prostordugme.appendChild(dugme);
									}		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
						
						

					</div>	   
				</fieldset>


						<div data-role="collapsible-set">
							<div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
							   <h3>Why Us?</h3>
							   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#storage" data-transition="<?php echo $transitionefect ?>">Storage</a>
							   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#advantages" data-transition="<?php echo $transitionefect ?>">Advantages</a>
							   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#faq" data-transition="<?php echo $transitionefect ?>">FAQ</a>
						</div>



              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left" href="#online-tour" data-transition="<?php echo $transitionefect ?>">Online Tour</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left" href="#reserve-unit" data-transition="<?php echo $transitionefect ?>">Reserve a Unit</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left" href="#make-payment" data-transition="<?php echo $transitionefect ?>">Make a Payment</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-mail ui-btn-icon-left" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></div>
              </div>
          </div>
        </div>


            <div content="ui-grid-solo" data-theme="<?php echo $theme ?>">
                <div class="ui-block-a">
                    <h2 class="head-two">State-of-the-Art Security</h2>
                    <img src="img/web-design/grid1.jpg" alt="solo-image1" style="margin-left: 20px;"/>
                    <p class="p-description">We offer State-of-the-Art Security features including Individual Door Alarms, Electronic Gate access with individual security code, and 24/Hour access availability.</p>
                 </div>
            </div>

            <div content="ui-grid-solo" data-theme="<?php echo $theme ?>">
                <div class="ui-block-a">
                    <h2 class="head-two">FREE Moving Truck</h2>
                    <img src="img/web-design/grid2.jpg" alt="solo-image2" style="margin-left: 20px;"/>
                    <p class="p-description">Gateway Self Storage offers a FREE Move-In Truck and lock for every new tenant that signs a lease.</p>
                </div>
            </div>

            <div content="ui-grid-solo" data-theme="<?php echo $theme ?>">
                <div class="ui-block-a">
                    <h2 class="head-two">Tour Our Facilities</h2>
                    <img src="img/web-design/grid3.jpg" alt="solo-image3" style="margin-left: 20px;"/>
                    <p class="p-description">Tour our facilities and take a look around the complex to see the many features and benefits that Gateway Self Storage has to offer. <a href="#online-tour" style="font-weight: bold ;">Take a Tour</a> </p>
                </div>
            </div>
            <div content="ui-grid-solo" data-theme="<?php echo $theme ?>">
                <div class="ui-block-a">
                    <h3 class="head-two">501-758-7867</h3>
                    <ul>
                        <li>Computerized Gated Access</li>
                        <li>Moving & Storage Supplies</li>
                        <li>FREE Lock & Moving Truck</li>
                        <li>24-Hour Access Available</li>
                        <li>Individual Door Alarms</li>
                        <li>Climate Controlled</li>
                        <li>Resident Manager</li>
                        <li>Propane Refills</li>
                    </ul>
                </div>
            </div>

        </div>

		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		

        <!-- start page Online Tour ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="online-tour" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-1">
                        <ul id="menu1">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#online-tour" data-transition="<?php echo $transitionefect ?>">Online Tour</a></li>
                            <li><a href="#reserve-unit" data-transition="<?php echo $transitionefect ?>">Reserve a Unit</a></li>
                            <li><a href="#make-payment" data-transition="<?php echo $transitionefect ?>">Make a Payment</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>
                    <h3 class="h-description">Welcome to Gateway Self Storage</h3>
                    <p class="p-description">Thanks for choosing Gateway Self Storage.
                        We realize that you have many options when looking for a self-storage partner in the Maumelle and North Little Rock, Arkansas area, which is why we work hard to make sure you are 100% satisfied with your decision.
                        We are dedicated to providing our customers with the most professional, secure and convenient options.
                        If you are in need of storage because of a move or some other life change, we can help you.
                        We run monthly specials frequently to get the most up-to-date quote, simply call us or send us a quick "no-obligation" note using our contact form. If you have any questions at all, please call us today at 501-758-STOR (7867).</p>


                </div>

            </div>


        </div>
        <!-- end page Online Tour ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <!-- start page Reserve Unit /////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="reserve-unit" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-2">
                        <ul id="menu2">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#online-tour" data-transition="<?php echo $transitionefect ?>">Online Tour</a></li>
                            <li><a href="#reserve-unit" data-transition="<?php echo $transitionefect ?>">Reserve a Unit</a></li>
                            <li><a href="#make-payment" data-transition="<?php echo $transitionefect ?>">Make a Payment</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>
                    <h3 class="h-description">Welcome to Gateway Self Storage</h3><br>
                    <p class="padsc">Click on this<a href="https://www.smdservers.net/SLWebSiteTemplate/ReserveOnly.aspx?sCorpCode=dSVp4Wo3vNBBa759pz81eg==&sLocationCode=F3e81MY3f4IcaovtqM7F3w=="> link</a> to reserve unit.</p>


                </div>

            </div>

        </div>
        <!--end page Reserve Unit /////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <!-- start page Make a Payment /////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="make-payment" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-3">
                        <ul id="menu3">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#online-tour" data-transition="<?php echo $transitionefect ?>">Online Tour</a></li>
                            <li><a href="#reserve-unit" data-transition="<?php echo $transitionefect ?>">Reserve a Unit</a></li>
                            <li><a href="#make-payment" data-transition="<?php echo $transitionefect ?>">Make a Payment</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>
                    <h3 class="h-description">Welcome to Gateway Self Storage</h3><br>
                    <p class="padsc">click on this<a href="https://www.smdservers.net/SLWebSiteTemplate/login.aspx?sCorpCode=dSVp4Wo3vNBBa759pz81eg==&sLocationCode=F3e81MY3f4IcaovtqM7F3w=="> link</a> to make payment.</p>


                </div>

            </div>

        </div>
        <!--end page Make a Payment /////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- contact us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#online-tour" data-transition="<?php echo $transitionefect ?>">Online Tour</a></li>
                                <li><a href="#reserve-unit" data-transition="<?php echo $transitionefect ?>">Reserve a Unit</a></li>
                                <li><a href="#make-payment" data-transition="<?php echo $transitionefect ?>">Make a Payment</a></li>
                                <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
							</ul>
					</section>
					<div>	
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
                            Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
							Message:<br>
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
							<input type="submit" value="Send" name="submit" class="btn" id="input-dugme">
						</form>
					</div>
				</div>
			</div>
		
		</div>
<!--contact us///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
 <!-- start page storage ////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="storage" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-storage">
                        <ul id="menu-storage">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#online-tour" data-transition="<?php echo $transitionefect ?>">Online Tour</a></li>
                            <li><a href="#reserve-unit" data-transition="<?php echo $transitionefect ?>">Reserve a Unit</a></li>
                            <li><a href="#make-payment" data-transition="<?php echo $transitionefect ?>">Make a Payment</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>
                    <h3 class="h-description">Gateway Virtual Storage Selection <br><span>for Home & Business</span></h3>
                    <p class="p-description">The below storage sizing guide is offered to help you estimate what size storage unit you may need.
                        In addition, our expert staff will be happy to assist you by showing the various sizes available.<br>
                        We are proud to offer both climate controlled and non-climate controlled units for your convenience.
                        Climate control helps control moisture in the air and reduces dust and dirt for storing fine wood and leather furniture, electronic equipment and computers; keeping long-term storage from getting that "musty" scent.</p>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>UNIT SIZE</th>
                                <th>NON-CLIMATE</th>
                                <th>CLIMATE CONTROL</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>5X5</td>
                            <td>$38</td>
                            <td>$49</td>
                        </tr>
                        <tr>
                            <td>5X10</td>
                            <td>$54</td>
                            <td>$83</td>
                        </tr>
                        <tr>
                            <td>10X10</td>
                            <td>$72</td>
                            <td>$114</td>
                        </tr>
                        <tr>
                            <td>10X15</td>
                            <td>$88</td>
                            <td>$149</td>
                        </tr>
                        <tr>
                            <td>10X20</td>
                            <td>$112</td>
                            <td>$182</td>
                        </tr>
                        <tr>
                            <td>10X25</td>
                            <td>$138</td>
                            <td>$225</td>
                        </tr>
                        <tr>
                            <td>10X30</td>
                            <td>$159</td>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <td>10X35</td>
                            <td>$173</td>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <td>12X15</td>
                            <td>$105</td>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <td>12X20</td>
                            <td>$138</td>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <td>12X30</td>
                            <td>$215</td>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <td>12X35</td>
                            <td>$248</td>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <td>12X45</td>
                            <td>$325</td>
                            <td>N/A</td>
                        </tr>
                        <caption>Storage Unit Sizes & Pricing for Climate & Non-Climate</caption>
                        </tbody>
                    </table>
                </div>

            </div>


        </div>
 <!-- end page storage ///////////////////////////////////////////////////////////////// -->

 <!-- start page advantages ////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="advantages" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-advantages">
                        <ul id="menu-advantages">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#online-tour" data-transition="<?php echo $transitionefect ?>">Online Tour</a></li>
                            <li><a href="#reserve-unit" data-transition="<?php echo $transitionefect ?>">Reserve a Unit</a></li>
                            <li><a href="#make-payment" data-transition="<?php echo $transitionefect ?>">Make a Payment</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>
                    <h3 class="h-description">Gateway Self Storage offers More!</h3>
                    <p class="p-description">Whether you need storage for your personal or business needs, our goal is to deliver clean, secure units at an affordable price. Gateway Self Storage is proud to offer more services and benefits than anyone else.</p>
                    <h3 class="h-description" style="background: none !important;">We make choosing Gateway Self Storage... EASY!</h3>
                    <p class="p-description">Friendly and professional storage specialists are ready to assist you
                        A variety of unit sizes to accommodate your budget and your needs
                        A large selection of moving and packing supplies are available
                        Climate controlled units are available
                        Commercial deliveries are accepted
                        Credit Cards are accepted
                        All units have ground level access
                        Friendly On-site resident manager
                        FREE Move-In Truck
                        Propane Tank Refills.</p>
                    <h3 class="h-description" style="background: none !important;">Gateway Self Storage is safe, secure and professional</h3>
                    <p class="p-description">We offer state-of-the-art facilities
                        Individual Door Alarms
                        Electronic gate access with your individual security code
                        24/Hour access availability.</p>
                    <h3 class="h-description" style="background: none !important;">No matter what your need is... We have SPACE!</h3>
                    <p class="p-description">We provide temporary & long term space
                        Business and commercial storage
                        Storage for your important records
                        More space for your inventory.</p>
                    <h3 class="h-description" style="background: none !important;">Gateway Self Storage offers Climate Controlled Storage.</h3>
                    <p class="p-description">Moisture - Climate-controlled units to reduce humidity & moisture.<br>
                        Mildew - Items are far less likely to develop mildew in climate-controlled space.<br>
                        Odor - Items are far less likely to obtain a "musty" smell.<br>
                        Rust - Electronics, metals, etc. are less susceptible to rust.<br>
                        Heat - Wood furniture finishes and books are less exposed to extended heat.<br>
                        Dust - Climate-controlled units have air filters that reduce the potential for dust blowing into the space.</p>

                </div>

            </div>


            </div>
 <!---- and page advantages/////////////////////////////////////////////////////////////////////////////// -->

<!-- start page faq ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div id="faq" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-faq">
							<ul id="menu-faq">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#online-tour" data-transition="<?php echo $transitionefect ?>">Online Tour</a></li>
                                <li><a href="#reserve-unit" data-transition="<?php echo $transitionefect ?>">Reserve a Unit</a></li>
                                <li><a href="#make-payment" data-transition="<?php echo $transitionefect ?>">Make a Payment</a></li>
                                <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
							</ul>
					</section>
                    <h3 class="h-description">Frequently Asked Questions</h3>
                    <p class="p-description">Gateway Self Storage is dedicated to providing you with the best in customer service.</p>
                    <h3 class="h-description" style="background: none !important;">Afraid of commitment?</h3>
                    <p class="p-description">We offer month to month leases, meaning no contracts and no commitment. Additionally, we offer discounts for long term storage, so if you know the amount of time you will be storing you can save by prepaying your rent.</p>
                    <h3 class="h-description" style="background: none !important;">When can I get to my belongings?</h3>
                    <p class="p-description">Access available 7 days a week, 24 hours a day.</p>
                    <h3 class="h-description" style="background: none !important;">Will my belongings be safe?</h3>
                    <p class="p-description">We offer state-of-the-art security that includes on-site manager, individual door alarms, electronic gate access, and good lighting.</p>
                    <h3 class="h-description" style="background: none !important;">Do you offer boxes and packing supplies?</h3>
                    <p class="p-description">Gateway Self Storage offers a wide variety of store merchandise including boxes and packing supplies.</p>
                    <h3 class="h-description" style="background: none !important;">What is a Resident Manager?</h3>
                    <p class="p-description">Our managers live in an apartment on the facility grounds. Most other facilites have no one physically on-site during off hours.</p>
                    <h3 class="h-description" style="background: none !important;">What are climate controlled units?</h3>
                    <p class="p-description">We offer climate controlled units to protect your belongings from extreme weather conditions.</p>
                    <h3 class="h-description" style="background: none !important;">How can I make a payment?</h3>
                    <p class="p-description">Payments can be processed by mail or in person. You may also arrange to have your payment be automatically deducted from your credit card or bank account.</p>
                    <h3 class="h-description" style="background: none !important;">What's the difference between office hours and gate hours?</h3>
                    <p class="p-description">The office hours are the hours of operation for the property when the facility manager will be available to assist you with your storage needs or moving and packing supplies. The gate hours are the hours your rental unit can be accessed using your assigned electronic gate code.</p>
                    <h3 class="h-description" style="background: none !important;">When can I access my unit?</h3>
                    <p class="p-description">You can access your unit from 6 a.m. - 9 p.m. every day.  You can also make arrangements with the manager to have 24 hour gate access.</p>
                    <h3 class="h-description" style="background: none !important;">Do you have moving carts available?</h3>
                    <p class="p-description">Push carts are available with inside units accessed by inside hallways. If you are renting an inside unit and need a push cart, please let the facility manager know and they will be happy to assist you.</p>
                    <h3 class="h-description" style="background: none !important;">How can I reserve the Move In Truck?</h3>
                    <p class="p-description">Please contact the Manager at the location where you will be renting.</p>
                    <h3 class="h-description" style="background: none !important;">What is climate control?</h3>
                    <p class="p-description">Climate controlled units are cooled or heated to protect your stored belongings from the extreme temperatures.</p>
                    <h3 class="h-description" style="background: none !important;">Can I buy boxes and other packing products from GWSS?</h3>
                    <p class="p-description">Yes.  We also offer a variety of boxes and packing supplie</p>
                    <h3 class="h-description" style="background: none !important;">What does "on-site" manager mean?</h3>
                    <p class="p-description">"On-site" manager means that an employee, usually the facility manager, has an apartment on-site as part of the facility.</p>
                    <h3 class="h-description" style="background: none !important;">What does individual door alarms mean?</h3>
                    <p class="p-description">Each of our doors have built in sensors that are linked to your "gate code" only.  When renting a unit, you are assigned your own personal gate code. When keying in your code it "de-activates your door alarm" and when you latch your door, the alarm is re-activated.</p>

                    <h3 class="h-description" style="background: none !important;">Do you accept credit cards?</h3>
                    <p class="p-description">We accept several major credit cards, including MasterCard®, Discover®, Visa®, or American Express®.</p>
                    <h3 class="h-description" style="background: none !important;">What kind of documentation is required to rent a storage unit?</h3>
                    <p class="p-description">One of the following forms of identification; state issued identification card, drivers license, passport, or military ID.</p>
                    <h3 class="h-description" style="background: none !important;">Do I need to give you a notice when I am ready to move out?</h3>
                    <p class="p-description">A 10 day written notice is required prior to vacating the unit.</p>
                    <h3 class="h-description" style="background: none !important;">Do you accept commercial deliveries?</h3>
                    <p class="p-description">Yes, for our business customers, we accept commercial deliveries at no charge.  Simply ask the manager about how to get set-up for that service.</p>
                    <h3 class="h-description" style="background: none !important;">How can renting a store be beneficial to my business?</h3>
                    <p class="p-description">You can keep your retention files stored, keeping your office space neat and organized. Store your office supplies, furniture, and files safely in one of our temporary storage business units while working on a project. We offer a variety of sizes to meet your business storage needs.</p><hr>
                    <p class="pho-paraph">For any additional questions, give us a call at: 501-758-STOR (7867).</p>
                </div>
			</div>
		
		</div>
<!-- end page faq///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
			</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////
	<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->
	</body>
</html>
