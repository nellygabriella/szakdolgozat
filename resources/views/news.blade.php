<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MEduline</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/news.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
    </head>

    <body>
        <div class="super-container">

            <!--Home-->

            <div class="home">
                <div class="home-background-container prlx-parent">
                    <div class="home-background prlx" style="background-image:url(images/news_background.jpg)"></div>
                </div>
                <div class="home-content">
                    <h1>Hírek/Események</h1>
                </div>
            </div>

            <!--News-->
            <div class="news">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8">

                            <div class="news-posts">

                                <!--News Post-->
                                <div class="news-post">
                                    <div class="news-post-image">
                                        <img src="images/news_1.jpg">
                                    </div>
                                    <div class="news-post-top d-flex flex-column flex-sm-row">
                                        <div class="news-post-date-container">
                                            <div class="news-post-date d-flex flex-column align-items-center justify-content-center">
                                                <div>18</div>
                                                <div>dec</div>
                                            </div>
                                        </div>
                                        <div class="news-post-title-container">
                                            <div class="news-post-title">
                                                <a href="#">Cím</a>
                                            </div>
                                            <div class="news-post-meta">
                                                <span class="news-post-author"><a href="#">Szerző</a></span>
                                                <span>|</span>
                                                <span class="news-post-comments"><a href="#">3 Comments</a></spn>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-post-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nunc risus, fringilla at orci in, maximus porttitor ipsum. Sed eget ipsum odio. Vestibulum mollis purus ac mauris elementum, id tempor quam commodo. Suspendisse potenti.</p>
                                    </div>
                                    <div class="news-post-button text-center trans_200">
                                        <a href="#">Több</a>
                                    </div>
                                    
                                </div>

                                <div class="news-post">
                                    <div class="news-post-image">
                                        <img src="images/news_1.jpg">
                                    </div>
                                    <div class="news-post-top d-flex flex-column flex-sm-row">
                                        <div class="news-post-date-container">
                                            <div class="news-post-date d-flex flex-column align-items-center justify-content-center">
                                                <div>18</div>
                                                <div>dec</div>
                                            </div>
                                        </div>
                                        <div class="news-post-title-container">
                                            <div class="news-post-title">
                                                <a href="#">Cím</a>
                                            </div>
                                            <div class="news-post-meta">
                                                <span class="news-post-author"><a href="#">Szerző</a></span>
                                                <span>|</span>
                                                <span class="news-post-comments"><a href="#">3 Comments</a></spn>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-post-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nunc risus, fringilla at orci in, maximus porttitor ipsum. Sed eget ipsum odio. Vestibulum mollis purus ac mauris elementum, id tempor quam commodo. Suspendisse potenti.</p>
                                    </div>
                                    <div class="news-post-button text-center trans_200">
                                        <a href="#">Több</a>
                                    </div>
                                    
                                </div>

                                <div class="news-post">
                                    <div class="news-post-image">
                                        <img src="images/news_1.jpg">
                                    </div>
                                    <div class="news-post-top d-flex flex-column flex-sm-row">
                                        <div class="news-post-date-container">
                                            <div class="news-post-date d-flex flex-column align-items-center justify-content-center">
                                                <div>18</div>
                                                <div>dec</div>
                                            </div>
                                        </div>
                                        <div class="news-post-title-container">
                                            <div class="news-post-title">
                                                <a href="#">Cím</a>
                                            </div>
                                            <div class="news-post-meta">
                                                <span class="news-post-author"><a href="#">Szerző</a></span>
                                                <span>|</span>
                                                <span class="news-post-comments"><a href="#">3 Comments</a></spn>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-post-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nunc risus, fringilla at orci in, maximus porttitor ipsum. Sed eget ipsum odio. Vestibulum mollis purus ac mauris elementum, id tempor quam commodo. Suspendisse potenti.</p>
                                    </div>
                                    <div class="news-post-button text-center trans_200">
                                        <a href="#">Több</a>
                                    </div>
                                    
                                </div>

                            </div>

                            <!--Page Nav-->
                            <div class="news-page-nav">
                                <ul>
                                    <li class="active text-center trans_200"><a href="#">1</a></li>
                                    <li class="text-center trans_200"><a href="#">2</a></li>
                                    <li class="text-center trans_200"><a href="#">3</a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-4">
                            <div class="sidebar">

                                <div class="sidebar-section">
                                    <div class="sidebar-section-title">
                                        <h3>Archives</h3>
                                    </div>
                                    <ul class="sidebar-list">
                                        <li class="sidebar-list-item"><a href="#">Design Courses</a></li>
                                        <li class="sidebar-list-item"><a href="#">Design Courses</a></li>
                                        <li class="sidebar-list-item"><a href="#">Design Courses</a></li>
                                        <li class="sidebar-list-item"><a href="#">Design Courses</a></li>
                                        <li class="sidebar-list-item"><a href="#">Design Courses</a></li>
                                    </ul>
                                </div>

                                <div class="sidebar-section">
                                    <div class="sidebar-section-title">
                                        <h3>Latest posts</h3>
                                    </div>

                                    <div class="latest_posts">

                                        <div class="latest-post">
                                            <div class="latest-post-image">
                                                <img src="images/latest_1.jpg">
                                            </div>
                                            <div class="latest-post-title"><a href="#">Cím</a></div>
                                            <div class="latest-post-meta">
                                                <span class="latest_post_author"><a href="#">By Christian Smith</a></span>
                                                <span>|</span>
                                                <span class="latest_post_comments"><a href="#">3 Comments</a></span>
                                            </div>
                                        </div>

                                        <div class="latest-post">
                                            <div class="latest-post-image">
                                                <img src="images/latest_1.jpg">
                                            </div>
                                            <div class="latest-post-title"><a href="#">Cím</a></div>
                                            <div class="latest-post-meta">
                                                <span class="latest_post_author"><a href="#">By Christian Smith</a></span>
                                                <span>|</span>
                                                <span class="latest_post_comments"><a href="#">3 Comments</a></span>
                                            </div>
                                        </div>

                                        <div class="latest-post">
                                            <div class="latest-post-image">
                                                <img src="images/latest_1.jpg">
                                            </div>
                                            <div class="latest-post-title"><a href="#">Cím</a></div>
                                            <div class="latest-post-meta">
                                                <span class="latest_post_author"><a href="#">By Christian Smith</a></span>
                                                <span>|</span>
                                                <span class="latest_post_comments"><a href="#">3 Comments</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebar-section">
                                    <div class="sidebar-section-title">
                                        <h3>Tags</h3>
                                    </div>
                                    <div class="tags d-flex flex-row flex-wrap">
                                        <div class="tag"><a href="#">Course</a></div>
                                        <div class="tag"><a href="#">Course</a></div>
                                        <div class="tag"><a href="#">Course</a></div>
                                        <div class="tag"><a href="#">Course</a></div>
                                        <div class="tag"><a href="#">Course</a></div>
                                        <div class="tag"><a href="#">Course</a></div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                   
                </div>

            </div>

        </div>
    </body>