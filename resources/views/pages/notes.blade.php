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


            <!--Home-->
            <div class="home">
                <div class="home-background-container prlx-parent">
                    <div class="home-background prlx" style="background-image:url(images/courses_background.jpg)"></div>
                </div>
                <div class="home-content">
                    <h1>Jegyzetek</h1>
                </div>
            </div>

            <div class="notes page-section">
                <div class="container">

                    <div class="row">
                        <div class="col">
                            <div class="section-title text-center">
                                <h1>Tárgy 1</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row note-boxes">

                        <div class="col-lg-4 note-box">
                            <div class="card">
                                <img class="card-img-top" src="images/course_1.jpg">
                                <div class="card-body text-center">
                                    <div class="card-title"><a href="#">Jegyzet1</a></div>
                                    <div class="card-text">Rövid leírás</div>
                                </div>
                                <div class="download-box d-flex flex-row align-items-center text-center">
                                    <span>Letöltés</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 note-box">
                            <div class="card">
                                <img class="card-img-top" src="images/course_1.jpg">
                                <div class="card-body text-center">
                                    <div class="card-title"><a href="#">Jegyzet1</a></div>
                                    <div class="card-text">Rövid leírás</div>
                                </div>
                                <div class="download-box d-flex flex-row align-items-center">
                                    <span>Letöltés</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 note-box">
                            <div class="card">
                                <img class="card-img-top" src="images/course_1.jpg">
                                <div class="card-body text-center">
                                    <div class="card-title"><a href="#">Jegyzet1</a></div>
                                    <div class="card-text">Rövid leírás</div>
                                </div>
                                <div class="download-box d-flex flex-row align-items-center">
                                    <span>Letöltés</span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </body>

</html>