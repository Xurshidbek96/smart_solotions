<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Smart Solutions</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="description" lang="hu" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <link type="text/css" href="{{asset('assets/media/images/favicon.png')}}" rel="shortcut icon">
    <link type="text/css" href="{{asset('assets/media/css/app-c0dcc802d9.min.css')}}" rel="stylesheet">
</head>

<body class="fooldal">
    <header class="header v2">
        <h1 class="header-logo">
            <a href="/"><img src="assets/media/images/loogogo.svg" alt="Basilicon Consulting"></a>
        </h1>

        <nav class="header-fomenu">
            <div class="header-fomenu-bal" role="navigation">
                <a href="#who-we-are" class="header-fomenupont" role="menuitem">{{$header['h1']}}</a>
                <a href="#what-we-do" class="header-fomenupont" role="menuitem">{{$header['h2']}}</a>
            </div>
            <div class="header-fomenu-jobb" role="navigation">
                <a href="#references" class="header-fomenupont" role="menuitem">{{$header['h3']}}</a><a
                    href="#contact" class="header-fomenupont" role="menuitem">{{$header['h4']}}</a>
            </div>

            <div class="header-lang-select">
                <a href="#" onclick="addCookie('uz')" title="Magyar" class="header-lang-select-link {{$uzbek}}" lang="uz">uz</a>
                <a href="#" onclick="addCookie('en')" title="English" class="header-lang-select-link {{$english}}" lang="en">en</a>
            </div>

            <svg class="header-fomenu-toggle menu-close visible-xs" xmlns="http://www.w3.org/2000/svg"
                viewbox="0 0 60 60">
                <line x1="4" y1="4" x2="56" y2="56" stroke-width="6" stroke="#fff"></line>
                <line x1="4" y1="56" x2="56" y2="4" stroke-width="6" stroke="#fff"></line>
            </svg>
        </nav>

        <svg class="header-fomenu-toggle menu-open visible-xs" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 60 60">
            <line x1="0" y1="3" x2="60" y2="3" stroke-width="6" stroke="#0db1a0"></line>
            <line x1="0" y1="30" x2="60" y2="30" stroke-width="6" stroke="#0db1a0"></line>
            <line x1="0" y1="57" x2="60" y2="57" stroke-width="6" stroke="#0db1a0"></line>
        </svg>
    </header>

    <section class="fooldal-carousel fooldal-section">
        <header class="fooldal-carousel-header">
            <h1 class="fooldal-carousel-title">{{$header['h5']}}<br> {{$header['h6']}}</h1>
            <a href="#who-we-are" class="fooldal-carousel-btn btn btn-lg">{{$header['h7']}}</a>
        </header>
        <div class="fooldal-carousel-item" style="background: url('assets/media/images/tover.png')"></div>
        <div class="fooldal-carousel-item" style="background: url('assets/media/images/registan.png')"></div>
        <div class="fooldal-carousel-item" style="background: url('assets/media/images/hilton.png')"></div>
        <div class="fooldal-carousel-item" style="background: url('assets/media/images/tover.png')"></div>
        <div class="fooldal-carousel-item" style="background: url('assets/media/images/registan.png')"></div>
        <div class="fooldal-carousel-item" style="background: url('assets/media/images/hilton.png')"></div>
    
    </section>

    <section id="who-we-are" class="section who-we-are fooldal-section">
        <div class="container">
            <header>
                <h1 class="section-title">{{$header['h1']}}</h1>
            </header>

            <div class="row">
                <div class="col-sm-6">
                    @foreach ($about as $a)
                        {!!$a->$info!!}
                    @endforeach
                </div>



            </div>
        </div>

    </section>

    <section id="what-we-do" class="section what-we-do parallaxie-section fooldal-section">
        <div class="container">
            <header>
                <h1 class="section-title">{{$header['h2']}}</h1>
            </header>

            <div class="whatwedo-categories">
                <div class="whatwedo-category">
                    <img src="./assets/media/images/icons/4aded8870dc5c375819fbb9ed1e52da5890894ae.png"
                        alt="SMEs &amp;amp; Midcaps" class="whatwedo-category-img">
                    <h2 class="whatwedo-category-name">{{$wwd1['w1']}}</h2>

                    <a href="#" class="whatwedo-service-link">{{$wwd1['w2']}}</a>
                    <a href="#"
                        class="whatwedo-service-link">{{$wwd1['w3']}}</a>
                    <a
                        href="#" class="whatwedo-service-link">{{$wwd1['w4']}}</a>
                    
                    <a
                        href="#" class="whatwedo-service-link">{{$wwd1['w6']}}</a>
                    
                </div>
                <div class="whatwedo-category">
                    <img src="./assets/media/images/icons/7dc814aa4aead856df65a5524d564effa35fec59.png"
                        alt="Funds &amp;amp; Corporations" class="whatwedo-category-img">
                    <h2 class="whatwedo-category-name">{{$wwd2['w1']}}</h2>

                    <a href="#" class="whatwedo-service-link">{{$wwd2['w2']}}</a>
                    <a
                        href="#" class="whatwedo-service-link">{{$wwd2['w3']}}</a>
                    <a href="#" class="whatwedo-service-link">{{$wwd2['w4']}}</a>
                    <a
                        href="#" class="whatwedo-service-link">{{$wwd2['w5']}}</a>
                    <a href="#"
                        class="whatwedo-service-link">{{$wwd2['w6']}}</a>
                    <a href="#"
                        class="whatwedo-service-link">{{$wwd2['w7']}}</a>
                    
                </div>
                <div class="whatwedo-category">
                    <img src="./assets/media/images/icons/72d842fbbff222338bd7bd6f351ffcf11fba5d02.png"
                        alt="International Organisations &amp;amp; Public Bodies" class="whatwedo-category-img">
                    <h2 class="whatwedo-category-name">{{$wwd3['w1']}}</h2>

                    <a href="#" class="whatwedo-service-link">{{$wwd3['w2']}}</a><a
                        href="#" class="whatwedo-service-link">{{$wwd3['w3']}}</a><a
                        href="#" class="whatwedo-service-link">{{$wwd3['w4']}}</a><a href="#"
                        class="whatwedo-service-link">{{$wwd3['w5']}}</a><a
                        href="#" class="whatwedo-service-link">{{$wwd3['w6']}}</a>
                </div>
                <div class="whatwedo-category">
                    <img src="./assets/media/images/icons/5c9229a944a9e9598c47d0f1d4fb983b3a812224.png"
                        alt="Family Offices &amp;amp; Individuals" class="whatwedo-category-img">
                    <h2 class="whatwedo-category-name">{{$wwd4['w1']}}</h2>

                    <a href="#" class="whatwedo-service-link">{{$wwd4['w2']}}</a><a href="#"
                        class="whatwedo-service-link">{{$wwd4['w3']}}</a><a
                        href="#" class="whatwedo-service-link">{{$wwd4['w4']}}</a><a href="#"
                        class="whatwedo-service-link">{{$wwd4['w5']}}</a><a
                        href="#"
                        class="whatwedo-service-link">{{$wwd4['w6']}}</a><a
                        href="#" class="whatwedo-service-link">{{$wwd4['w7']}}</a>
                </div>
                <div class="whatwedo-category">
                    <img src="./assets/media/images/icons/763615af6ebe4751599b316d7c1dbc771b03a440.png"
                        alt="Knowledge Management" class="whatwedo-category-img">
                    <h2 class="whatwedo-category-name">{{$wwd5['w1']}}</h2>

                    <a href="#" class="whatwedo-service-link">{{$wwd5['w2']}}</a>
                    <a href="#"
                        class="whatwedo-service-link">{{$wwd5['w3']}}</a>
                    <a
                        href="#" class="whatwedo-service-link">{{$wwd5['w4']}}</a>
                    <a href="#"
                        class="whatwedo-service-link">{{$wwd5['w5']}}</a>
                    <a
                        href="#" class="whatwedo-service-link">{{$wwd5['w6']}}</a>
                </div>
            </div>
        </div>
    </section>

    <section id="references" class="section references fooldal-section">
        <div class="container">
            <header>
                <h1 class="section-title">{{$header['h3']}}</h1>
            </header>

            <p class="references-lead">{{$wwa['w1']}}:</p>

            <br>

            <div class="row">
                <div class="col-md-6 references-list">
                    
                    <span class="reference">{{$wwa['w3']}}</span>
                    <span class="reference">{{$wwa['w4']}}</span>
                    <span class="reference">{{$wwa['w5']}}</span>
                    <span class="reference">{{$wwa['w6']}}</span>
                    <span class="reference">{{$wwa['w7']}}</span>
                    <span class="reference">{{$wwa['w8']}}</span>
                    <span class="reference">{{$wwa['w9']}}</span>
                    <span class="reference">{{$wwa['w10']}}</span>
                    <span class="reference">{{$wwa['w11']}}</span>
                    <span class="reference">{{$wwa['w12']}}</span>
                    <span class="reference">{{$wwa['w13']}}</span>

                </div>
            </div>
        </div>

    </section>

    <section id="contact" class="section contacts fooldal-section">
        <div class="container">
            <header>
                <h1 class="section-title">{{$foot['f1']}}</h1>
            </header>

            <div class="row">
                <div class="col-sm-4 contact" >
                    <h3 class="contact-name">Smart it solution team LTD</h3>

                    <address class="contact-address">
                        {{$foot['f2']}}<br>
                        {{$foot['f3']}}<br>
                        {{$foot['f4']}} </address>

                    <dl class="contact-data dl-horizontal">
                        <dt>{{$foot['f5']}}</dt>
                        <dd><a class="emaill" href="sayidjakhon.khasanov@europe.com">sayidjakhon.khasanov@europe.com</a></dd>
                        <dt>{{$foot['f6']}}</dt>
                        <dd>+998946711776</dd>
                        <dt>{{$foot['f7']}}</dt>
                        <dd>www.smart-solutions.uz/</dd>
                    </dl>
                </div>
                <div class="col-sm-4 contact aktiv">
                    <h3 class="contact-name">Basilicon Global HQ</h3>

                    <address class="contact-address">
                        7 Bell Yard<br>
                        WC2A 2JR London<br>
                        UK </address>

                    <dl class="contact-data dl-horizontal">
                        <dt>{{$foot['f5']}}</dt>
                        <dd><a href="mailto:info@basilicon.co.uk">info@basilicon.co.uk</a></dd>
                        <dt>{{$foot['f6']}}</dt>
                        <dd>+44 7935 573919<br>+44 7712 228221</dd>
                        <dt>{{$foot['f7']}}</dt>
                        <dd>www.basilicon.co.uk</dd>
                    </dl>
                </div>
                <div class="col-sm-4 buttons_wrapper">
                    <a href="{{url('/about')}}" class="contact-name button_link">{{$foot['f8']}}</a>
                    <a href="#" class="button_link">{{$foot['f9']}}</a>


                </div>
            </div>
        </div>

       <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d748.6931952972149!2d69.19602867260984!3d41.35729761656299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8c2641b5d9c7%3A0x5ad53bc9b3d13df2!2zNyBRYW1hcm5pc28ga28nY2hhc2ksINCi0L7RiNC60LXQvdGCLCBVemJla2lzdGFu!5e0!3m2!1sen!2s!4v1653447139222!5m2!1sen!2s"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <footer class="footer">

        <h4 class="footer-copyright">Smart IT Solutions Team LTD</h4>

    </footer>

    <script type="text/javascript" src="{{asset('assets/media/js/all-b88d170299.min.js')}}"></script>
    <script src="{{asset('assets/maps/api/js?key=AIzaSyAg1_KZ5M4qw-z_zfu1P4QTOQSCupVKKeg&callback=initMap&language=en')}}"></script>
    <script>
function addCookie(lan) {
    document.cookie = `lang=${lan}`;
    var url = window.location.href;
    window.location.reload(url);
    }
</script>
</body>

</html>