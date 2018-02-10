<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Comercializadora Vimolamex</title>

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
        <section class="landing">
          <div class="container-fill">
            <div class="fill"></div>
            <div class="background">
              <div class="hidden-md-down"></div>
              <div class="fill-background"></div>
              <div class="hidden-md-down"></div>
            </div>
          </div>
          <div class="background" id="particles-js"></div>
          <div class="container">
            <div class="header">
            <nav class="menu hidden-md-down">
              <div class="company">
                <span><i class="fa fa-globe">&nbsp;</i>Comercializadora</span>
                <span>Vimolamex</span>
              </div>
              <div class="links-container">
                <a class="active-menu" href="#">Inicio</a>
                <a href="#">Servicios</a>
                <a href="#">Sucursales</a>
                <a href="#">Contacto</a>
                <a class="btn btn-outline-primary" href="#">Iniciar Sesión</a>
              </div>
            </nav>
            <div class="messages-container">
              <h1 class="title">EL SERVICIO Y LA CALIDAD SON PARTE DE NOSOTROS</h1>
              <div class="row">
                <div class="col-12 col-lg-4"></div>
                <div class="col-12 col-lg-6">
                  <h4 class="text-contain">Comercializadora Vimolamex cuenta con un servicio especializado en el sumistro y colocación de cristal.</h4>
                  <h4 class="text-contain rectangle-container">
                    <span class="rectangle"></span>
                    <span class="rectangle-min"></span>
                    &nbsp;08/18
                  </h4>
                </div>
                <div class="col-2"></div>
              </div>
            </div>
            <div class="social-container">
              <a href=""><i class="fa fa-facebook-f" aria-hidden="true"></i></a>
              <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
          </div>
          </div>
        </section>
        <section class="cards-service">
          <div class="container">
            <div class="row justify-content-center align-items-center">
              <div class="col-1 box-secondary">
                <div class="fill-card"></div>
              </div>
              <div class="col-3 text-center box-primary">
                <img src="{{asset('/img/sphere-aluminio.png')}}" alt="">
                <h6><strong>Aluminio</strong></h6>
                <p>Suministro e Instalación</p>
              </div>
              <div class="col-4 text-center box-primary">
                <img src="{{asset('/img/sphere-vidrio.png')}}" alt="">
                <h6><strong>Vidrio</strong></h6>
                <p>Fabricación, Suministro e Instalación</p>
                <p>Contamos con una amplia variedad de servicios que utilizan vidrio como su componente principal, sin embargo nos adaptamos a tus necesidades  de acuerdo a los materiales, medidas, colores, texturas y marcas que tu nos solicites.</p>
                <a href="#">
                  <button class="btn btn-primary">Cotizar</button>
                </a>
              </div>
              <div class="col-3 text-center box-primary">
                <img src="{{asset('/img/sphere-herreria.png')}}" alt="">
                <h6><strong>Herreria</strong></h6>
                <p>Suministro e Instalación</p>
              </div>
              <div class="col-1 box-secondary">
                <div class="fill-card"></div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <br>
          <br>
          <br>
          <br>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem consequatur atque aliquid quibusdam ad in maiores modi debitis. Pariatur, ipsam, facere? Aliquid distinctio rem laudantium, sequi ratione quasi dolores provident?
          <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum perferendis sunt optio iste officia in voluptas magnam nesciunt quae quos. Corrupti incidunt iste, tempore natus aperiam corporis quasi distinctio vero.</div>
          <div>Totam consectetur, quasi assumenda, voluptate blanditiis possimus, rerum incidunt ipsa dignissimos obcaecati nesciunt vero autem sapiente quod placeat quae sequi. Fugiat, eaque, doloremque ipsam earum voluptatem quas optio vero eos!</div>
          <div>Aut recusandae ex quam error suscipit, obcaecati, reprehenderit, tenetur doloribus cum unde nesciunt! Dicta saepe eum laudantium recusandae numquam odio repellendus, magni natus error, illo dignissimos, eius, consequuntur optio expedita?</div>
          <div>Sunt, alias! Odit placeat odio aut minus similique tenetur commodi sit architecto natus beatae voluptas earum quis mollitia, vero soluta aspernatur voluptates aliquam dolores, quam atque optio, neque alias laborum!</div>
          <div>Adipisci accusamus quod itaque, sit repudiandae animi enim atque sint unde odio maxime cupiditate, cum modi autem corporis. Ducimus tempora numquam placeat, aperiam tempore atque dolores praesentium. Nobis, delectus est?</div>
          <div>Facilis dolorum incidunt sint autem dolore, magnam, placeat, explicabo expedita id neque quos enim debitis harum nam. Soluta assumenda sunt aliquam, laudantium quam alias iste consectetur cum perspiciatis repellendus amet!</div>
          <div>Esse beatae sunt neque, provident sit labore error inventore harum eius officia nemo reiciendis hic atque itaque aliquid tempora id, ut praesentium necessitatibus numquam magnam repellat, et optio architecto maxime.</div>
          <div>Minima voluptates, consequuntur impedit quaerat voluptate similique, iste ea doloremque perspiciatis deleniti officia? Earum quasi accusantium praesentium, nulla ea accusamus animi eveniet quibusdam dolorem voluptatibus facere id consequatur sit voluptatum.</div>
          <div>Culpa praesentium quaerat mollitia minus, ex odit ab esse possimus? Ad magnam eos, ex illo nostrum commodi eum veniam esse eveniet obcaecati blanditiis eligendi, voluptas doloremque debitis sed perferendis aspernatur.</div>
          <div>Voluptate, incidunt illum! Praesentium sapiente atque obcaecati perspiciatis non aliquam illum nam eos suscipit fuga esse, ab, dolores, est sint laborum debitis. Consequuntur, at sequi dolorem laudantium quas incidunt laboriosam.</div>
        </section>
      </div>
      <script src="{{mix('js/app.js')}}"></script>
    </body>
</html>
