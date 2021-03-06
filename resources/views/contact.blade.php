<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MEduline</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/contact.css" />
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
                    <h1>Kapcsolat</h1>
                </div>
            </div>

            <div class="contact">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8">

                            <div class="contact-form">
                                <div class="contact-title">Írj üzenetet</div>

                                <div class="contact-form-container">
                                    <form action="post">
                                        <input id="contact_form_name" class="input-field contact-form-name" type="text" placeholder="Név" required="required" data-error="Kötelező kitölteni!">
                                        <input id="contact_form_email" class="input-field contact-form-email" type="email" placeholder="E-mail" required="required" data-error="Hibás email cím!">
                                        <textarea id="contact_form_message" class="text-field contact-form-message" name="message" placeholder="Üzenet" required="required" data-error="Hagyj üzenetet."></textarea>
                                        <button id="contact_send_btn" class="contact-send-btn trans_200" type="button" value="Submit">Küldés</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="about">
                                <div class="about-title">Csatlakozz az oldalhoz</div>
                                <p class="about-text">In a volutpat elit. Quisque vitae ante at orci porta pulvinar quis nec augue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas tincidunt non dolor id rhoncus. Etiam in mattis purus. Ut egestas aliquam eros, ac aliquam nunc posuere nec. Morbi ultricies neque ligula, vitae feugiat lacus bibendum vitae.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

        </div>
    </body>