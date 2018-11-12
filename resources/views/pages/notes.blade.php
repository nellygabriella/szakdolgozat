@extends('main')

@section('title','| Jegyzetek')

     @section('stylesheets')
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/notes.css" />
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/index.css" />
     @endsection

    <body>
        <div class="super-container">


            <!--Home-->
            
            @section('hometitle','Jegyzetek')

            @section('content')
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

@endsection