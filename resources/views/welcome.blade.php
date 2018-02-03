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
        <link rel="stylesheet" href="{{ mix('css/app.css')}}">
    </head>
    <body>
      <div id="app">
        <section class="landing">
          <div class="fill"></div>
          <div class="background">
            <div></div>
            <div class="fill-background"></div>
            <div></div>
          </div>
          <div class="background" id="particles-js"></div>
          <div class="container">
            <div class="header">
            <nav class="menu">
              <div class="company">
                <span><i class="fa fa-globe">&nbsp;</i>Comercializadora</span>
                <span>Vimolamex</span>
              </div>
              <div class="links-container">
                <a class="active-menu" href="https://laravel.com/docs">Inicio</a>
                <a href="https://laracasts.com">Servicios</a>
                <a href="https://laravel-news.com">Sucursales</a>
                <a href="https://forge.laravel.com">Contacto</a>
                <a class="btn btn-outline-primary" href="https://github.com/laravel/laravel">Iniciar Sesión</a>
              </div>
            </nav>
            <div class="messages-container">
              <h1 class="title">EL SERVICIO Y LA CALIDAD SON PARTE DE NOSOTROS</h1>
              <div class="row">
                <div class="col-4"></div>
                <div class="col-6">
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
        <section>
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
