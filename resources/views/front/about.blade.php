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
            <a href="{{url('/')}}"><img src="assets/media/images/loogogo.svg" alt="Basilicon Consulting"></a>
        </h1>

        <nav class="header-fomenu">
            <div class="header-fomenu-bal" role="navigation">
                <a href="{{url('/')}}#who-we-are" class="header-fomenupont">{{$header['h1']}}</a>
                <a href="{{url('/')}}#what-we-do" class="header-fomenupont">{{$header['h2']}}</a>
            </div>
            <div class="header-fomenu-jobb" role="navigation">
                <a href="{{url('/')}}#references" class="header-fomenupont">{{$header['h3']}}</a>
                <a href="{{url('/')}}#contact" class="header-fomenupont">{{$header['h4']}}</a>
                
            </div>

            <div class="header-lang-select">
                <a href="#" title="Magyar" class="header-lang-select-link" lang="uzb">ru</a>
                <a href="#" title="English" class="header-lang-select-link active" lang="en">en</a>
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

    <section id="team" class="team team-bg py-5">
        <div class="container">
  
          <div class="section-title">
            <p class="main-team-subheading text-center">{{$about}}</p>
          </div>
  
            <div class="container padding-custom">
          <div class="row">
            
            @foreach($team as $tm)
            <div class="col-12">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="{{URL::to($tm->img)}}" class="img-responsive" alt=""></div>
                <div class="member-info">
                  <p class="member-heading">{{$tm->$name}}</p>
                  <span>{{$tm->$position}}</span>
                  <p class="member-para">{{$tm->$info}}</p>
                </div>
              </div>
            </div>
            @endforeach
  
          </div>
        </div>
  
        </div>
      </section>

    <footer class="footer">

        <h4 class="footer-copyright"> Smart IT Solutions Team LTD</h4>

    </footer>

    <script type="text/javascript" src="{{asset('assets/media/js/all-b88d170299.min.js')}}"></script>
    <script src="{{asset('assets/maps/api/js?key=AIzaSyAg1_KZ5M4qw-z_zfu1P4QTOQSCupVKKeg&callback=initMap&language=en')}}"></script>
</body>

</html>