<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MEduline</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/notes.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
    </head>
    <body>
    
    <div class="super-container">

        <!-- Header -->
        <header class="header d-flex flex-row">
            <div class="header-content d-flex flex-row align-items-center">

                <!-- Logo -->
                <div class="logo-container">
                    <div class="logo">
                        <img src="images/logo.png" alt="">
                        <span>MEduline</span>
                    </div>
                </div> 

                <!-- Main Navigation -->
                <nav class="navbar navbar-expand-sm">
                    <div class="main-nav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="#">Hírek/Események</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Jegyzetek</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Projektek</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Munkák</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Kérdések</a></li>
                        </ul>
                    </div>
                </nav>   
                
            </div>
        </header>

        <!-- Home -->

        <div class="home">
            <div class="slider-container">
                <div class="slider owl-carousel">

                    <!-- Slide -->
                    <div class="slide">
                        <div class="slide-background" style="background-image:url(images/slider_background.jpg)"><div>
                        <div class="slide-container d-flex flex-column align-items-center justify-content-center">
                            <div class="slide-content text-center">
                                <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today! </h1>
                            </div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="slide-background" style="background-image:url(images/slider_background.jpg)"><div>
                        <div class="slide-container d-flex flex-column align-items-center justify-content-center">
                            <div class="slide-content text-center">
                                <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today! </h1>
                            </div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="slide-background" style="background-image:url(images/slider_background.jpg)"><div>
                        <div class="slide-container d-flex flex-column align-items-center justify-content-center">
                            <div class="slide-content text-center">
                                <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today! </h1>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="slider-left slider-nav trans_200"><span class="trans_200">prev</span></div>
                <div class="slider-right slider-nav trans_200"><span class="trans_200">next</span></div>
            </div>
        </div>

        <div class="boxes">
            <div class="boxes-inner">
                <div class="boxes-container">
                    <div class="row">

                         <div class="col-lg-4 box-col">
                             <div class="box d-flex flex-row align-items-center justify-content-start">
                                 <img src="images/earth-globe.svg" class="svg" alt=" ">
                                 <div class="box-content">
                                     <h2 class="box-title">Online Courses</h2>
                                     <a href="courses.html" class="box-link">view more</a>
                                 </div>
                             </div>
                         </div>

                         <div class="col-lg-4 box-col">
                             <div class="box d-flex flex-row align-items-center justify-content-start">
                                 <img src="images/earth-globe.svg" class="svg" alt=" ">
                                 <div class="box-content">
                                     <h2 class="box-title">Online Courses</h2>
                                     <a href="courses.html" class="box-link">view more</a>
                                 </div>
                             </div>
                         </div>

                         <div class="col-lg-4 box-col">
                             <div class="box d-flex flex-row align-items-center justify-content-start">
                                 <img src="images/earth-globe.svg" class="svg" alt=" ">
                                 <div class="box-content">
                                     <h2 class="box-title">Online Courses</h2>
                                     <a href="courses.html" class="box-link">view more</a>
                                 </div>
                             </div>
                         </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="popular page-section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title text-center">
                            <h1>Népszerű jegyzetek</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 popular-box">
                    <div class="card">
                        <img class="card-img-top" src="images/course_1.jpg">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="courses.html">A complete guide to design</a></div>
                            <div class="card-text">>Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                    </div>
                </div>
            

                <div class="col-lg-4 popular-box">
                    <div class="card">
                        <img class="card-img-top" src="images/course_1.jpg">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="courses.html">A complete guide to design</a></div>
                            <div class="card-text">>Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                    </div>
                </div>
            
            
                <div class="col-lg-4 popular-box">
                    <div class="card">
                        <img class="card-img-top" src="images/course_1.jpg">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="courses.html">A complete guide to design</a></div>
                            <div class="card-text">>Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                    </div>
                </div>
                
        </div>

        <!--Events-->
        <div class="events page-section">
            <div class="container">
                
                <div class="row">
                    <div class="col">
                        <div class="section-title text-center">
                            <h1>Események</h1>
                        </div>
                    </div>
                </div>

                <div class="event-items">

                    <div class="row event-item">
                        <div class="col">
                            <div class="row d-flex flex-row align-items-end">

                                <div class="col-lg-2 order-lg-1 order-2">
                                    <div class="event-date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event-day">07</div>
                                        <div class="event-month">January</div>
                                    </div>
                                </div>

                                <div class="col-lg-6 order-lg-2 order-3">
                                    <div class="event-content">
                                        <div class="event-name"><a class="trans_200" href="#">Student Festival</a></div>
                                        <div class="event-location">Grand Central Park</div>
                                        <p>Aenean id varius dui. Integer vel turpis id nisi bibendum dignissim. Aliquam at nunc orci. Donec elementum, odio ac malesuada tempor, enim velit aliquet magna, tristique fermentum est orci sagittis augue. Curabitur ultrices turpis quis nulla sodales convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam elementum ac libero in vulputate. Sed in blandit erat. Etiam malesuada cursus tortor, ac interdum diam. Nam posuere lobortis ante ac semper. Integer metus sapien, iaculis rhoncus tortor ut, volutpat mattis enim. Nunc sit amet nisl dapibus, posuere felis ac, auctor mauris.</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 order-lg-3 order-1">
                                    <div class="event-image">
                                        <img src="images/event_1.jpg">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row event-item">
                        <div class="col">
                            <div class="row d-flex flex-row align-items-end">

                                <div class="col-lg-2 order-lg-1 order-2">
                                    <div class="event-date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event-day">07</div>
                                        <div class="event-month">January</div>
                                    </div>
                                </div>

                                <div class="col-lg-6 order-lg-2 order-3">
                                    <div class="event-content">
                                        <div class="event-name"><a class="trans_200" href="#">Student Festival</a></div>
                                        <div class="event-location">Grand Central Park</div>
                                        <p>Aenean id varius dui. Integer vel turpis id nisi bibendum dignissim. Aliquam at nunc orci. Donec elementum, odio ac malesuada tempor, enim velit aliquet magna, tristique fermentum est orci sagittis augue. Curabitur ultrices turpis quis nulla sodales convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam elementum ac libero in vulputate. Sed in blandit erat. Etiam malesuada cursus tortor, ac interdum diam. Nam posuere lobortis ante ac semper. Integer metus sapien, iaculis rhoncus tortor ut, volutpat mattis enim. Nunc sit amet nisl dapibus, posuere felis ac, auctor mauris.</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 order-lg-3 order-1">
                                    <div class="event-image">
                                        <img src="images/event_1.jpg">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row event-item">
                        <div class="col">
                            <div class="row d-flex flex-row align-items-end">

                                <div class="col-lg-2 order-lg-1 order-2">
                                    <div class="event-date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event-day">07</div>
                                        <div class="event-month">January</div>
                                    </div>
                                </div>

                                <div class="col-lg-6 order-lg-2 order-3">
                                    <div class="event-content">
                                        <div class="event-name"><a class="trans_200" href="#">Student Festival</a></div>
                                        <div class="event-location">Grand Central Park</div>
                                        <p>Aenean id varius dui. Integer vel turpis id nisi bibendum dignissim. Aliquam at nunc orci. Donec elementum, odio ac malesuada tempor, enim velit aliquet magna, tristique fermentum est orci sagittis augue. Curabitur ultrices turpis quis nulla sodales convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam elementum ac libero in vulputate. Sed in blandit erat. Etiam malesuada cursus tortor, ac interdum diam. Nam posuere lobortis ante ac semper. Integer metus sapien, iaculis rhoncus tortor ut, volutpat mattis enim. Nunc sit amet nisl dapibus, posuere felis ac, auctor mauris.</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 order-lg-3 order-1">
                                    <div class="event-image">
                                        <img src="images/event_1.jpg">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container">

                <div class="newsletter">
                    <div class="row">
                        <div class="col">
                            <div class="section-title text-center">
                                <h1>Feliratkozás hírlevélre</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-center">
                            <div class="newsletter-form-container mx-auto">
                                <form action="post">
                                    <div class="newsletter-form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
                                        <input id="newsletter_email" class="newsletter-email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
                                        <button id="newsletter_submit" type="submit" class="newsletter-submit-btn trans_300" value="Submit">Feliratkozás</button>
                                    </div>
                                </form>    
                            </div>
                        </div>
                    </div>

                </div>

                <div class="footer-content">
                    <div class="row">

                        <div class="col-lg-3 footer-col">

                            <div class="logo-conatiner">
                                <div class="logo">
                                    <img src="images/logo.png" alt="">
                                    <span>MEduline</span>
                                </div>
                            </div>

                            <p class="footer-about-text">Nulla eleifend, tellus ut tempus venenatis, enim erat rutrum eros, quis cursus urna mauris a ante. Ut ante tellus, scelerisque tristique eros sit amet, sollicitudin ornare lectus.</p>
                        </div>

                        <div class="col-lg-3 footer-col">
                            <div class="footer-column-title">Menu</div>
                            <div class="footer-column-content">
                                <ul>
                                    <li class="footer-list-item"><a href="#">Home</a></li>
                                    <li class="footer-list-item"><a href="#">Home</a></li>
                                    <li class="footer-list-item"><a href="#">Home</a></li>
                                    <li class="footer-list-item"><a href="#">Home</a></li>
                                    <li class="footer-list-item"><a href="#">Home</a></li>
                                    <li class="footer-list-item"><a href="#">Home</a></li> 
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 footer-col">
                            <div class="footer-column-title">Useful Links</div>
                            <div class="footer-column-content">
                                <ul>
                                    <li class="footer-list-item"><a href="#">Testimonials</a></li>
                                    <li class="footer-list-item"><a href="#">FAQ</a></li>
                                    <li class="footer-list-item"><a href="#">Community</a></li>
                                    <li class="footer-list-item"><a href="#">Campus Pictures</a></li>
                                    <li class="footer-list-item"><a href="#">Tuitions</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 footer-col">
                            <div class="footer-column-title">Contact</div>
                            <div class="footer-column-content">
                                <ul>
                                    <li class="footer-contact-item">
                                        <div class="footer-contact-icon">
                                            <img src="images/placeholder.svg">Blvd Libertad, 34 m05200 Arévalo
                                        </div>
                                    </li>
                                    <li class="footer-contact-item">
                                        <div class="footer-contact-icon">
                                            <img src=src="images/smartphone.svg">0034 37483 2445 322
                                        </div>
                                    </li>
                                    <li class="footer-contact-item">
                                        <div class="footer-contact-icon">
                                            <img src="images/envelope.svg">hello@company.com
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> 

                    </div>
                </div>
            </div>
        </footer>

    </div>



        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    </body>
</html>
