<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title','Inicio') Comercializadora Vimolamex</title>

        <!-- Fonts -->

        <!-- Styles -->
        <style>.cube-folding{width:50px;height:50px;display:inline-block;-moz-transform:rotate(45deg);-ms-transform:rotate(45deg);-webkit-transform:rotate(45deg);transform:rotate(45deg);font-size:0}.cube-folding span{position:relative;width:25px;height:25px;-moz-transform:scale(1.1);-ms-transform:scale(1.1);-webkit-transform:scale(1.1);transform:scale(1.1);display:inline-block}.cube-folding span::before{content:'';background-color:#fff;position:absolute;left:0;top:0;display:block;width:25px;height:25px;-moz-transform-origin:100% 100%;-ms-transform-origin:100% 100%;-webkit-transform-origin:100% 100%;transform-origin:100% 100%;-moz-animation:folding 2.5s infinite linear both;-webkit-animation:folding 2.5s infinite linear both;animation:folding 2.5s infinite linear both}.cube-folding .leaf2{-moz-transform:rotateZ(90deg) scale(1.1);-ms-transform:rotateZ(90deg) scale(1.1);-webkit-transform:rotateZ(90deg) scale(1.1);transform:rotateZ(90deg) scale(1.1)}.cube-folding .leaf2::before{-moz-animation-delay:.3s;-webkit-animation-delay:.3s;animation-delay:.3s;background-color:#f2f2f2}.cube-folding .leaf3{-moz-transform:rotateZ(270deg) scale(1.1);-ms-transform:rotateZ(270deg) scale(1.1);-webkit-transform:rotateZ(270deg) scale(1.1);transform:rotateZ(270deg) scale(1.1)}.cube-folding .leaf3::before{-moz-animation-delay:.9s;-webkit-animation-delay:.9s;animation-delay:.9s;background-color:#f2f2f2}.cube-folding .leaf4{-moz-transform:rotateZ(180deg) scale(1.1);-ms-transform:rotateZ(180deg) scale(1.1);-webkit-transform:rotateZ(180deg) scale(1.1);transform:rotateZ(180deg) scale(1.1)}.cube-folding .leaf4::before{-moz-animation-delay:.6s;-webkit-animation-delay:.6s;animation-delay:.6s;background-color:#e6e6e6}@-moz-keyframes folding{0%,10%{-moz-transform:perspective(140px) rotateX(-180deg);transform:perspective(140px) rotateX(-180deg);opacity:0}25%,75%{-moz-transform:perspective(140px) rotateX(0);transform:perspective(140px) rotateX(0);opacity:1}100%,90%{-moz-transform:perspective(140px) rotateY(180deg);transform:perspective(140px) rotateY(180deg);opacity:0}}@-webkit-keyframes folding{0%,10%{-webkit-transform:perspective(140px) rotateX(-180deg);transform:perspective(140px) rotateX(-180deg);opacity:0}25%,75%{-webkit-transform:perspective(140px) rotateX(0);transform:perspective(140px) rotateX(0);opacity:1}100%,90%{-webkit-transform:perspective(140px) rotateY(180deg);transform:perspective(140px) rotateY(180deg);opacity:0}}@keyframes folding{0%,10%{-moz-transform:perspective(140px) rotateX(-180deg);-ms-transform:perspective(140px) rotateX(-180deg);-webkit-transform:perspective(140px) rotateX(-180deg);transform:perspective(140px) rotateX(-180deg);opacity:0}25%,75%{-moz-transform:perspective(140px) rotateX(0);-ms-transform:perspective(140px) rotateX(0);-webkit-transform:perspective(140px) rotateX(0);transform:perspective(140px) rotateX(0);opacity:1}100%,90%{-moz-transform:perspective(140px) rotateY(180deg);-ms-transform:perspective(140px) rotateY(180deg);-webkit-transform:perspective(140px) rotateY(180deg);transform:perspective(140px) rotateY(180deg);opacity:0}}.cube-wrapper{position:fixed;left:50%;top:50%;margin-top:-50px;margin-left:-50px;width:100px;height:100px;text-align:center}.cube-wrapper:after{content:'';position:absolute;left:0;right:0;bottom:-20px;margin:auto;width:90px;height:6px;background-color:rgba(0,0,0,.1);-webkit-filter:blur(2px);filter:blur(2px);-moz-border-radius:100%;-webkit-border-radius:100%;border-radius:100%;z-index:1;-moz-animation:shadow .5s ease infinite alternate;-webkit-animation:shadow .5s ease infinite alternate;animation:shadow .5s ease infinite alternate}.cube-wrapper .loading{font-size:12px;letter-spacing:.1em;display:block;color:#fff;position:relative;top:25px;z-index:2;-moz-animation:text .5s ease infinite alternate;-webkit-animation:text .5s ease infinite alternate;animation:text .5s ease infinite alternate}@-moz-keyframes text{100%{top:35px}}@-webkit-keyframes text{100%{top:35px}}@keyframes text{100%{top:35px}}@-moz-keyframes shadow{100%{bottom:-18px;width:100px}}@-webkit-keyframes shadow{100%{bottom:-18px;width:100px}}@keyframes shadow{100%{bottom:-18px;width:100px}}body,html{min-height:100%}body{overflow:hidden}.loader-page{position:fixed;z-index:999999999;min-width:100vw;min-height:100vh;width:100%;height:100%;background: -webkit-linear-gradient(to left,#004E9A,#0072ff);background:linear-gradient(to left,#004E9A,#0072ff)}.loading-title{font-family:Lora,serif;color:#fff;font-weight:400;font-size:12px;text-align:center;padding-bottom:20px}</style>
        <link rel="stylesheet" href="{{ mix('css/app.css')}}">
    </head>
    <body>
      <div class="loader-page">
        <div class="cube-wrapper">
          <h2 class="loading-title" data-name="Comercializadora Vimolamex">Comercializadora Vimolamex</h2>
          <div class="cube-folding">
            <span class="leaf1"></span>
            <span class="leaf2"></span>
            <span class="leaf3"></span>
            <span class="leaf4"></span>
          </div>
          <span class="loading" data-name="Loading">Cargando</span>
        </div>
      </div>
      <div id="app">
        @yield('define')
      </div>
      <script src="{{mix('js/app.js')}}"></script>
    </body>
</html>
