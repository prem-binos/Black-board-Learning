<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-99823617-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-99823617-1');
</script>

        <!-- title -->
        <title>Data Science Bootcamp - Data Science Courses in Coimbatore | Black Board Learning</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
         <meta name="author" content="Karthik Veer">
        <meta name="description" content="Become an industry � ready Data Scientist with our flagship analytics program.Learn the statistics fundamentals with easy � to � understand implementation in excel. Explore & infer insights from the visualizations made using Business Intelligence tool Tableau. Grasp the coding skills required for Data Science in both R & Python to advanced level of implementing MC models. Know to handle & extract the needed with top Big data tools like Hadoop with basics of SQL.">
        <meta name="keywords" content=" Data analytics courses in chennai,Data analytics coures in coimbatore,business analytics course, data analytics r, data analytics python, machine learning, data analytics courses, data science course, data science certification,big data course,data science online course,big data certification,data analytics certification,best data science courses,learn data science,big data analytics courses,analytics courses,machine learning">

        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="stylesheet" href="css/animate.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/et-line-icons.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/swiper.min.css">
        <link rel="stylesheet" href="css/bootsnav.css">
        <link rel="stylesheet" href="css/magnific-popup.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/responsive.css" />


    </head>
    <body>

        <?php include("header - Copy.php"); ?>
        <section id="home" class="p-0 parallax mobile-height wow fadeIn" data-stellar-background-ratio="0.5" style="background-image: url(&quot;images/unleash.jpg&quot;); visibility: visible; animation-name: fadeIn; background-position: 0px 0px;">
            <div class="opacity-extra-medium"></div>
            <div class="container position-relative full-screen" style="min-height: 374px;">
                <div class="slider-typography text-center">
                    <div class="slider-text-middle-main sm-padding-15px-lr">
                        <div class="slider-text-middle">
                            <!--<img src="images/text.png" alt="" data-no-retina="">-->
                        </div>
                    </div>
                </div>
            </div>
        </section>

 <section id="contact" class="wow fadeIn p-0 bg-extra-dark">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 padding-five-tb padding-six-lr md-padding-eleven-all text-center sm-padding-15px-lr wow fadeIn">
                    <div class="text-medium-gray alt-font text-small text-uppercase margin-5px-bottom sm-margin-three-bottom">for course brochure and more details</div>
                    <h5 class="margin-55px-bottom text-white-2 alt-font font-weight-600 text-uppercase md-margin-30px-bottom sm-margin-15px-bottom fonarto" >Leave us a Message</h5>
                    <div>
                        
                        <form id="project-contact-form" action="javascript:void(0)" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div id="success-project-contact-form" class="mx-0"></div>
                                </div>
                                <div class="col-12">
                                    <input type="text"  name="name" id="name" placeholder="Enter Name *" class="big-input  border-color-medium-dark-gray medium-input">
                                </div>
                                <div class="col-12">
                                    <input type="text" name="phone" id="phone" placeholder="Phone *" class=" border-color-medium-dark-gray medium-input" >
                                </div>
                                <div class="col-12">
                                    <input type="text" name="email" id="email" placeholder="Enter Mail Id *" class=" border-color-medium-dark-gray medium-input" >
                                </div>
                               
                                <div class="col-12">
                                    <textarea name="message" id="message" placeholder="Enter your Messege" rows="2" class="big-textarea   border-color-medium-dark-gray  "></textarea>
                                </div>
                                <div class="col-12 " style="color: #FFFFFF;">
                                *Please complete all fields correctly
                                </div>
                                <div id="ajaxDivv"></div>
                                <div class="col-12 text-center">
                                    <input  type="button" onclick="mail()" class="btn btn-deep-pink btn-medium margin-15px-top" value="send message ">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-6 padding-five-tb padding-six-lr md-padding-eleven-all text-center sm-padding-5px-lr wow fadeIn">
                    <img src="images/business analytics expert.jpg" class="img-responsive">
                </div>
            </div>
        </div>
    </section>
    <style type="text/css">
    ::placeholder {
  color: #000;
}
    </style>
    <script>

            function mail()
            {
                console.log("inside function")
                var ajaxRequest;  // The variable that makes Ajax possible!

                try {
                    // Opera 8.0+, Firefox, Safari
                    ajaxRequest = new XMLHttpRequest();
                } catch (e) {
                    // Internet Explorer Browsers
                    try {
                        ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                    } catch (e) {
                        try {
                            ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                        } catch (e) {
                            // Something went wrong
                            alert("Your browser broke!");
                            return false;
                        }
                    }
                }

                // Create a function that will receive data 
                // sent from the server and will update
                // div section in the same page.

                ajaxRequest.onreadystatechange = function () {
                    if (ajaxRequest.readyState == 4) {

                        var ajaxDisplay = document.getElementById("ajaxDivv");
                        ajaxDisplay.innerHTML = ajaxRequest.responseText;
                    }
                }

                // Now get the value from user and pass it to
                // server script.    form-autocomplete1



                var field = document.getElementById("name").value;
                var queryString = "?cname=" + field;

                var field = document.getElementById("phone").value;
                var queryString = queryString + "&cphone=" + field;

                var field = document.getElementById("email").value;
                var queryString = queryString + "&cemail=" + field;

                var field = document.getElementById("course").value;
                var queryString = queryString + "&ccourse=" + field;

                var field = document.getElementById("message").value;
                var queryString = queryString + "&cmessage=" + field;

                //alert(queryString);
                ajaxRequest.open("GET", "php/enquiry.php" + queryString, true);

                ajaxRequest.send(null);
            }
        </script> 
 
  <section class="bg-black wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <div class="container">
                <div class="row mb20">
                    <div class="col-12 text-center">
                        <p class="alt-font margin-5px-bottom text-uppercase text-small"></p>
                        <h5 class="text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 md-width-100"><span class="text-white">what Will</span> you Learn</h5>
                        <span class="separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px"></span>
                    </div>
                </div>
                <div class="row">
                    <!-- feature box item-->
                    <div class="col-12 col-md-4 sm-margin-five-bottom last-paragraph-no-margin wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="feature-box">
                            <div class="content">
                                <i class="icon-browser text-medium-gray icon-large margin-25px-bottom md-margin-15px-bottom"></i>
                                <div class="text-medium alt-font text-capitalize text-white margin-10px-bottom md-margin-5px-bottom">BUSINESS INTELLIGENCE</div>
                                <p class="width-85 mx-auto md-width-100">Master your skills in creating dashboards, data models and data transformations with Tableau and PowerBI.</p>
                            </div>        
                        </div>
                    </div>
                    <!-- end feature box item-->
                    <!-- feature box item-->
                    <div class="col-12 col-md-4 sm-margin-five-bottom last-paragraph-no-margin wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="feature-box">
                            <div class="content">
                                <i class="icon-book-open text-medium-gray icon-large margin-25px-bottom md-margin-15px-bottom"></i>
                                <div class="text-medium alt-font text-capitalize text-white margin-10px-bottom md-margin-5px-bottom">DATA SCIENCE FUNDAMENTALS</div>
                                <p class="width-85 mx-auto md-width-100">Learn the basics of ststistics, build complex analysis, statistics approaches and Hypothesis testing with R .</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item-->
                    <!-- feature box item-->
                    <div class="col-12 col-md-4 sm-margin-five-bottom last-paragraph-no-margin wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="feature-box">
                            <div class="content">
                                <i class="icon-wallet text-medium-gray icon-large margin-25px-bottom md-margin-15px-bottom"></i>
                                <div class="text-medium alt-font text-capitalize text-white margin-10px-bottom md-margin-5px-bottom">PREDICTIVE MODELLING</div>
                                <p class="width-85 mx-auto md-width-100">Build your predictive modelling skills with R & Python in different supervised and unsupervised ML models.</p>
                            </div>   
                        </div>
                    </div>
                    <!-- end feature box item-->
                </div>
                <div class="row">
                    <!-- feature box item-->
                    <div class="col-12 col-md-4 sm-margin-five-bottom last-paragraph-no-margin wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="feature-box">
                            <div class="content">
                                <i class="icon-browser text-medium-gray icon-large margin-25px-bottom md-margin-15px-bottom"></i>
                                <div class="text-medium alt-font text-capitalize text-white margin-10px-bottom md-margin-5px-bottom">ADVANCED MACHINE LEARNING</div>
                                <p class="width-85 mx-auto md-width-100">Learn advanced deep learning techniques with Tensorflow 2.0 and build complex ML algorithms from scratch. </p>
                            </div>        
                        </div>
                    </div>
                    <!-- end feature box item-->
                    <!-- feature box item-->
                    <div class="col-12 col-md-4 sm-margin-five-bottom last-paragraph-no-margin wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="feature-box">
                            <div class="content">
                                <i class="icon-book-open text-medium-gray icon-large margin-25px-bottom md-margin-15px-bottom"></i>
                                <div class="text-medium alt-font text-capitalize text-white margin-10px-bottom md-margin-5px-bottom">DATA ENGINEERING</div>
                                <p class="width-85 mx-auto md-width-100">Equip yourself with essential data engineering skills to manage relational databases by ETL in data projects </p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item-->
                    <!-- feature box item-->
                    <div class="col-12 col-md-4 sm-margin-five-bottom last-paragraph-no-margin wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="feature-box">
                            <div class="content">
                                <i class="icon-wallet text-medium-gray icon-large margin-25px-bottom md-margin-15px-bottom"></i>
                                <div class="text-medium alt-font text-capitalize text-white margin-10px-bottom md-margin-5px-bottom">INTERVIEW PREPARATION</div>
                                <p class="width-85 mx-auto md-width-100">A complete guide on landing data analyst job: Github project portfolio, resume building and interview calls.</p>
                            </div>   
                        </div>
                    </div>
                    <!-- end feature box item-->
                </div>
            </div>
        </section>
    <section class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-xl-5 col-md-6 mx-auto margin-three-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                    <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small"></div>
                    <h5 class="alt-font text-extra-dark-gray font-weight-700 fonarto" style="color:#222;">HAPPY LEARNING MOMENTS</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12 p-0">
                    <div class="swiper-container black-move blog-slider swiper-four-slides swiper-pagination-bottom">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide padding-15px-lr team-block text-left team-style-1 wow fadeInUp">
                                <figure>
                                    <div class="team-image sm-width-100">
                                        <img src="images/gallery/data analytics course coimbatore.jpg" alt="" data-no-retina="">
                                    </div>
                                </figure>
                            </div>
                            <div class="swiper-slide padding-15px-lr team-block text-left team-style-1 wow fadeInUp swiper-slide-next" data-wow-delay="0.2s" style="width: 292.5px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                <figure>
                                    <div class="team-image sm-width-100">
                                        <img src="images/gallery/machine learning in coimbatore.jpg" alt="" data-no-retina="">
                                    </div>
                                </figure>
                            </div>
                            <div class="swiper-slide padding-15px-lr team-block text-left team-style-1 md-margin-40px-bottom wow fadeInUp" data-wow-delay="0.4s" style="width: 292.5px; visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                <figure>
                                    <div class="team-image sm-width-100">
                                        <img src="images/gallery/data science online course.jpg" alt="" data-no-retina="">
                                    </div>
                                </figure>
                            </div>
                            <div class="swiper-slide padding-15px-lr team-block text-left team-style-1 md-margin-40px-bottom wow fadeInUp" data-wow-delay="0.6s" style="width: 292.5px; visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                <figure>
                                    <div class="team-image sm-width-100">
                                        <img src="images/gallery/best data science courses in the world.jpg" alt="" data-no-retina="">
                                    </div>
                                </figure>
                            </div>
                          
                            <div class="swiper-slide padding-15px-lr team-block text-left team-style-1 md-margin-40px-bottom wow fadeInUp" data-wow-delay="0.6s" style="width: 292.5px; visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                <figure>
                                    <div class="team-image sm-width-100">
                                        <img src="images/gallery/excel data analysis course.jpg" alt="" data-no-retina="">
                                    </div>
                                </figure>
                            </div>
                        </div>   
                        <div class="swiper-pagination swiper-pagination-four-slides"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>


        <section class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <img src="images/R, Tableau, Excel, python.png" alt="" data-no-retina="">
                        <div class="bg-extra-light-gray separator-line-horrizontal-full d-inline-block margin-45px-tb sm-margin-30px-tb"></div>
                    </div>
                </div>

 
                      
                <div class="row">
                    <div class="col-12 col-lg-6 md-margin-50px-bottom sm-margin-30px-bottom wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <h6 class="alt-font text-black text-uppercase font-weight-600">Become an industry ready Data Scientist with our flagship analytics program.</h6>
                        <p class="text-black text-large" >Learn the statistics fundamentals with easy to understand implementation in excel. Explore & infer insights from the visualizations made using Business Intelligence tool Tableau. Grasp the coding skills required for Data Science in both R & Python to advanced level of implementing MC models. Know to handle & extract the needed with top Big data tools like Hadoop with basics of SQL.</p>

                    </div>
                    <div class="col-lg-4 offset-lg-2 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <ul class="list-style-8 margin-twelve-left">
                           
                            <li class="text-extra-dark-gray"><span class="d-block text-extra-large  text-black  font-weight-500 line-height-22">PRE-REQUISITE</span><a href="index.html" class="text-large text-extra-dark-gray">12th grade Mathematics knowledge</a></li>
                            <li class="text-extra-dark-gray"><span class="d-block text-extra-large  text-black  font-weight-500 line-height-22">DATE</span><a href="index.html" class="text-large text-extra-dark-gray">22nd January 2022 </a></li>
                            <li class="text-extra-dark-gray"><span class="d-block text-extra-large  text-black  font-weight-500 line-height-22">HIGHLIGHTS</span><a href="index.html" class="text-large text-extra-dark-gray">22 Cases | 7 Mini-Projects | 1 Capstone project</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

 
  
        <section class="bg-black wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <div class="container">
                <div class="row mb20">
                    <div class="col-12 text-center">
                      <h5 class="text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 md-width-100"> <span class="text-white">Why Learn</span><span class="text-extra-dark-grey"> With us</span></h5>
                        <span class="separator-line-horrizontal-medium-light2 text-black bg-deep-pink d-table mx-auto width-100px"></span>
                    </div>
                </div>
                <div class="row">
                    <!-- start feature box item -->
                    <div class="col-12 col-md-4 feature-box-1 sm-margin-30px-bottom wow fadeIn last-paragraph-no-margin" style="visibility: visible; animation-name: fadeIn;">
                        <div class="d-flex align-items-center margin-15px-bottom alt-font">
                            <h3 class="char-value text-deep-pink letter-spacing-minus-1 text-medium-gray font-weight-600 mb-0">01.</h3>
                            <span class="text-large text-extra-dark-gray line-height-22 padding-20px-left width-100">Real Time.<br> Hands On Sessions.</span>
                        </div>
                        <p class="width-90 md-width-100">Bored of PPT lectures in classroom?? Yeah.. We too.. Come fall in love with our simplified ways of teaching with complete hands-on sessions & real time datasets.</p>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-12 col-md-4 feature-box-1 sm-margin-30px-bottom wow fadeIn last-paragraph-no-margin" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                        <div class="d-flex align-items-center margin-15px-bottom alt-font">
                            <h3 class="char-value text-deep-pink letter-spacing-minus-1 text-medium-gray font-weight-600 mb-0">02.</h3>
                            <span class="text-large text-extra-dark-gray line-height-22 padding-20px-left width-100">Mentorship .<br> Support.</span>
                        </div>
                        <p class="width-90 md-width-100">Scared of programming?? Coding, syntax errors, logical errors haunts you??  Fear not. Utilize our free One on One mentorship support with complete guidance.</p>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-12 col-md-4 feature-box-1 wow fadeIn last-paragraph-no-margin" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                        <div class="d-flex align-items-center margin-15px-bottom alt-font">
                            <h3 class="char-value text-deep-pink letter-spacing-minus-1 text-medium-gray font-weight-600 mb-0">03.</h3>
                            <span class="text-large text-extra-dark-gray line-height-22 padding-20px-left width-100">Internship .<br> Assistance.</span>
                        </div>
                        <p class="width-90 md-width-100">Tired of hearing the same phrase?? But this is for real. Leverage our strategic tie ups with 22 Data Analytics Companies and 100+ AI and ML start-ups.</p>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div>
        </section>

        <section class="p-0 wow fadeIn bg-gray" id="services">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-12 col-lg-6 position-relative md-height-550px sm-height-350px cover-background wow slideInLeft" data-wow-duration="900ms" style="background-image: url('images/me.jpg');"></div>
                    <div class="col-12 col-lg-6 padding-seven-tb padding-eight-lr md-padding-nine-tb md-padding-twelve-lr sm-padding-30px-tb sm-padding-50px-lr text-center text-lg-left wow slideInRight last-paragraph-no-margin" data-wow-duration="900ms">
                        
                        <h5 class="alt-font text-black">KARTHIK VEER <span class="text-large"> B.Tech MBA PGPBA </span></h5>
                        <h6 class="alt-font text-light-gray">FOUNDER & CHIEF LEARNER</h6>
                        <p class="text-black width-80 lg-width-100">Karthik Veer is a seasoned Data Scientist, passionate to travel the world on providing business solutions through Data Analytics. He possesses rich experience in providing Big Data Analytics solutions to companies like Delta Airlines, Co-cola, National Geographic etc. as a consultant analyst. He is a visiting professor at some of the reputed colleges like Christ University, Jain University, LIBA, XIME etc. <br>Karthik is a proud alumnus of Illinois Institute of Technology, Chicago(US) with a Post Graduate Program in Business Analytics and Business Analytics & Business Intelligence PG program from Great Lakes Institute of Management, Chennai. He has done his management education at Christ University, Bangalore and an engineer from Amrita School of Engineering, Coimbatore..</p>
                                           </div>
                </div>
            </div>
        </section>


 <!-- start icon with text style 11 section -->
        <section class="wow animate__fadeIn bg-light-gray">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
                        <div class="position-relative overflow-hidden w-100">
                            <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase">Icon With Text Style 10</span>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
                    <!-- start features box item -->
                    <div class="col md-margin-50px-bottom sm-margin-30px-bottom wow animate__fadeInRight last-paragraph-no-margin">
                        <div class="feature-box-6 position-relative">
                            <i class="icon-tools icon-extra-medium text-deep-pink"></i>
                            <div class="alt-font text-extra-dark-gray font-weight-600 line-height-20">Powerful Options</div>
                            <p class="line-height-20">Shortcode subtitle</p>
                        </div>
                    </div>  
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col md-margin-50px-bottom sm-margin-30px-bottom wow animate__fadeInRight last-paragraph-no-margin" data-wow-delay="0.2s">
                        <div class="feature-box-6 position-relative">
                            <i class="icon-heart icon-extra-medium text-deep-pink"></i>
                            <div class="alt-font text-extra-dark-gray font-weight-600 line-height-20">Made with Love</div>
                            <p class="line-height-20">Shortcode subtitle</p>
                        </div>
                    </div>  
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col xs-margin-30px-bottom wow animate__fadeInRight last-paragraph-no-margin" data-wow-delay="0.4s">
                        <div class="feature-box-6 position-relative">
                            <i class="icon-layers icon-extra-medium text-deep-pink"></i>
                            <div class="alt-font text-extra-dark-gray font-weight-600 line-height-20">Visual Page Builder</div>
                            <p class="line-height-20">Shortcode subtitle</p>
                        </div>
                    </div>  
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col wow animate__fadeInRight last-paragraph-no-margin" data-wow-delay="0.6s">
                        <div class="feature-box-6 position-relative">
                            <i class="icon-expand icon-extra-medium text-deep-pink"></i>
                            <div class="alt-font text-extra-dark-gray font-weight-600 line-height-20">User Experience</div>
                            <p class="line-height-20">Shortcode subtitle</p>
                        </div>
                    </div>  
                    <!-- end features box item -->
                </div>
            </div>
        </section>
        <!-- end icon with text style 11 section -->  

        
      <section class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <div class="container">
                <div class="row mb20">
                    <div class="col-12 text-center">
                        <p class="alt-font margin-5px-bottom text-uppercase text-small"></p>
                        <h5 class="text-uppercase alt-font text-black margin-20px-bottom font-weight-700 md-width-100">  FAQ's</h5>
                        <span class="separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px"></span>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <!-- start accordion -->
                        <div class="panel-group accordion-style1" id="accordion-design">
                            <!-- start accordion item -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-design" href="#design1" class="collapsed" aria-expanded="false"><div class="panel-title font-weight-500  text-black text-uppercase">WHY BLACK BOARD LEARNING?<span class="float-right"><i class="ti-minus"></i></span></div></a>
                                </div>
                                <div id="design1" class="panel-collapse collapse show" data-parent="#accordion-design" aria-expanded="false" role="tablist">
                                    <div class="panel-body">
                                       Just a very simple reason, We are not just trainers on Analytics, We are consultants who actually do analyticd on real-time basis, day on 4 day out. So learn from the actual practitioners of Data Science rather than just theory teaching trainers. 
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-design" href="#design2" class="collapsed" aria-expanded="false"><div class="panel-title font-weight-500  text-black text-uppercase">IS THIS ONLINE OR BLENDED COURSE?<span class="float-right"><i class="ti-plus"></i></span></div></a>
                                </div>
                                <div id="design2" class="panel-collapse collapse" data-parent="#accordion-design" aria-expanded="false" role="tablist">
                                    <div class="panel-body">
                                  We strongly believe in bootcamp model teaching. So all our sessions are regular classroom, hand-on sessions. That means we dont or teach with PPT's. We solve analytics problems with real datasets. Online we use it for doubts - clearing sessions.
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-design" href="#design3" class="collapsed" aria-expanded="false"><div class="panel-title font-weight-500  text-black text-uppercase">HOW WILL I BENEFIT FROM THIS PROGRAM?<span class="float-right"><i class="ti-plus"></i></span></div></a>
                                </div>
                                <div id="design3" class="panel-collapse collapse" data-parent="#accordion-design" aria-expanded="false" role="tablist">
                                    <div class="panel-body">
                                        Since all our programs are bootcamp sessions, you really learn the subject & concepts very clearly with strong fundamentals. So all the concepts you have real - time experience & you can showcase with projects in  your resume.

                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-design" href="#design4" class="collapsed" aria-expanded="false"><div class="panel-title font-weight-500  text-black text-uppercase">DO YOU OFFER PLACEMENT AFTER THE COURSE?<span class="float-right"><i class="ti-plus"></i></span></div></a>
                                </div>
                                <div id="design4" class="panel-collapse collapse" data-parent="#accordion-design" aria-expanded="false" role="tablist">
                                    <div class="panel-body">
                                        Yes we do offer placement support but not exactly placement, we will share your resume to our hiring oartners after you successfully finish our course. Though there is no guarantee for placement, what we have seen in our past students, most of them have easily cleared the interviews & got selected by analytics companies.

                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-design" href="#design5" class="collapsed" aria-expanded="false"><div class="panel-title font-weight-500  text-black text-uppercase">WILL I GET ANY REAL PROJECTS TO WORK?<span class="float-right"><i class="ti-plus"></i></span></div></a>
                                </div>
                                <div id="design5" class="panel-collapse collapse" data-parent="#accordion-design" aria-expanded="false" role="tablist">
                                    <div class="panel-body">
                                       Ofcourse yes. That is what differentiates us from others. Through our analytics consulting division, we get real analytics projects, which can try your hands with your learning knowledge, We don't just make you do the default over - used datasets, we get you real projects & a very good chance to get internship on analytics projects if you do well. 
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                        </div>
                        <!-- end accordion -->
                    </div>
                </div>
            </div>
        </section>


        <?php include("footer.php"); ?>



        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="fas fa-arrow-up"></i></a>
        <!-- end scroll to top -->
        <!-- javascript libraries -->
        <!-- javascript -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootsnav.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <script type="text/javascript" src="js/hamburger-menu.js"></script>
        <script type="text/javascript" src="js/theme-vendors.min.js"></script>
        <!-- setting -->
           <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootsnav.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <script type="text/javascript" src="js/hamburger-menu.js"></script>
        <script type="text/javascript" src="js/theme-vendors.min.js"></script>

        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/skrollr.min.js"></script>
        <script type="text/javascript" src="js/smooth-scroll.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <script type="text/javascript" src="js/bootsnav.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/swiper.min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="js/jquery.stellar.js"></script>
        <script type="text/javascript" src="js/classie.js"></script>
        <script type="text/javascript" src="js/hamburger-menu.js"></script>
        <script type="text/javascript" src="js/counter.js"></script>
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="js/skill.bars.jquery.js"></script> 
        <script type="text/javascript" src="js/instafeed.min.js"></script>
        <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript">

</script>
    </body>
</html>