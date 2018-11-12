@extends('main')

@section('title','|Forum')
    
    @section('stylesheets')
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/questions.css" />
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/index.css" />
    @endsection

    <body>
        <div class="super-container">

            
            @section('hometitle','Kérdések')

            @section('content')
            <div class="questions">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8">

                            <!--Search-->
                            <div class="search-form-container mx-auto">
                                <form action="post">
                                    <div class="search-form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
                                        <input id="search_name" class="search-name" type="text" required="required">
                                        <button id="search_submit" type="submit" class="search-submit-btn trans_300" value="Submit">Keresés</button>
                                    </div>
                                </form>
                            </div>

                            <!--Questions-->
                            <div class="questions-posts">

                                <!--Question-->
                                <div class="questions-post">
                                    <div class="questions-post-top d-flex flex-column flex-sm-row">
                                        <div class="questions-post-answer-container">
                                            <div class="questions-post-answer d-flex flex-column align-items-center justify-content-center">
                                                <div>6</div>
                                                <div>válasz</div>
                                            </div>
                                        </div>
                                        <div class="questions-post-title-container">
                                            <div class="questions-post-title">
                                                <a href="#">Kérdés</a>
                                            </div>
                                            <div class="questions-post-meta">
                                                <span class="questions-post-vote"><a href="#">10 értékelés</a></span>
                                                <span>|</span>
                                                <span class="questions-post-tags"><a href="#">C#</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="questions-post-text">
                                        <p>Praesent nibh erat, sollicitudin vel laoreet non, elementum luctus massa. Vivamus tristique elit sem. Aliquam erat volutpat. Curabitur in nisl ac orci sodales dictum. Nunc in turpis orci. Vestibulum neque purus, semper in ullamcorper ac, eleifend vel felis. Proin et placerat diam. In pretium eget dolor ac scelerisque.</p>
                                    </div>
                                    <div class="questions-post-button text-center trans_200">
                                        <a href="#">Több</a>
                                    </div>
                                </div>

                                <div class="questions-post">
                                    <div class="questions-post-top d-flex flex-column flex-sm-row">
                                        <div class="questions-post-answer-container">
                                            <div class="questions-post-answer d-flex flex-column align-items-center justify-content-center">
                                                <div>6</div>
                                                <div>válasz</div>
                                            </div>
                                        </div>
                                        <div class="questions-post-title-container">
                                            <div class="questions-post-title">
                                                <a href="#">Kérdés</a>
                                            </div>
                                            <div class="questions-post-meta">
                                                <span class="questions-post-vote"><a href="#">10 értékelés</a></span>
                                                <span>|</span>
                                                <span class="questions-post-tags"><a href="#">C#</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="questions-post-text">
                                        <p>Praesent nibh erat, sollicitudin vel laoreet non, elementum luctus massa. Vivamus tristique elit sem. Aliquam erat volutpat. Curabitur in nisl ac orci sodales dictum. Nunc in turpis orci. Vestibulum neque purus, semper in ullamcorper ac, eleifend vel felis. Proin et placerat diam. In pretium eget dolor ac scelerisque.</p>
                                    </div>
                                    <div class="questions-post-button text-center trans_200">
                                        <a href="#">Több</a>
                                    </div>
                                </div>

                                <div class="questions-post">
                                    <div class="questions-post-top d-flex flex-column flex-sm-row">
                                        <div class="questions-post-answer-container">
                                            <div class="questions-post-answer d-flex flex-column align-items-center justify-content-center">
                                                <div>6</div>
                                                <div>válasz</div>
                                            </div>
                                        </div>
                                        <div class="questions-post-title-container">
                                            <div class="questions-post-title">
                                                <a href="#">Kérdés</a>
                                            </div>
                                            <div class="questions-post-meta">
                                                <span class="questions-post-vote"><a href="#">10 értékelés</a></span>
                                                <span>|</span>
                                                <span class="questions-post-tags"><a href="#">C#</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="questions-post-text">
                                        <p>Praesent nibh erat, sollicitudin vel laoreet non, elementum luctus massa. Vivamus tristique elit sem. Aliquam erat volutpat. Curabitur in nisl ac orci sodales dictum. Nunc in turpis orci. Vestibulum neque purus, semper in ullamcorper ac, eleifend vel felis. Proin et placerat diam. In pretium eget dolor ac scelerisque.</p>
                                    </div>
                                    <div class="questions-post-button text-center trans_200">
                                        <a href="#">Több</a>
                                    </div>
                                </div>

                            </div>

                            <div class="questions-page-nav">
                                <ul>
                                    <li class="active text-center trans_200"><a href="#">01</a></li>
                                    <li class="text-center trans_200"><a href="#">02</a></li>
                                    <li class="text-center trans_200"><a href="#">03</a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-4">
                            <div class="sidebar">

                                <div class="new-question-button">
                                    <div class="button new-question text-center trans_200"><a href="#">Új kérdés</a></div>
                                </div>

                                <div class="sidebar-section">
                                    <div class="sidebar-section-title">
                                        <h3>Népszerű kérdések</h3>
                                    </div>
                                    <ul class="sidebar-list">
                                        <li class="sidebar-list-item"><a href="#">Kérdés1</a></li>
                                        <li class="sidebar-list-item"><a href="#">Kérdés2</a></li>
                                        <li class="sidebar-list-item"><a href="#">Kérdés3</a></li>
                                        <li class="sidebar-list-item"><a href="#">Kérdés4</a></li>
                                        <li class="sidebar-list-item"><a href="#">Kérdés5</a></li>
                                    </ul>
                                </div>

                                <div class="sidebar-section">
                                    <div class="sidebar-section-title">
                                        <h3>Tags</h3>
                                    </div>
                                    <div class="tags d-flex flex-row flex-wrap">
                                        <div class="tag"><a href="#">C#</a></div>
                                        <div class="tag"><a href="#">Java</a></div>
                                        <div class="tag"><a href="#">JavaScript</a></div>
                                        <div class="tag"><a href="#">Phyton</a></div>
                                        <div class="tag"><a href="#">C</a></div>
                                        <div class="tag"><a href="#">Matlab</a></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>

@endsection