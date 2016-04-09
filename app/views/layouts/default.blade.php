<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{URL::to('/')}}/img/favicon.ico" type="image/x-icon">
    <title>205ventures | {{ $subtitle }}</title>

    
    <meta name="description" content="" />
    <!--bootstrap css files-->
    {{ HTML::style('css/bootstrap.css') }}
    
    <!--fonts -->
    {{ HTML::style('css/font-awesome/css/font-awesome.min.css') }}
    
    <!--template css--> 
    {{ HTML::style('css/main.css')}}
    @yield('scripts')
    @yield('styles')
  </head>
  <body>
    
  <div id="preloader">
    <div id="load"></div>
  </div>
  <!-- Header and Nav -->
  <header id="header">
    <h1 id="logo" >205Ventures</h1>
    <nav id="nav">
      <ul>
        <li><a href="#intro">Home</a></li>
        <li><a href="#one">What We Do</a></li>
        <li><a href="#two">Who We Are</a></li>
        <li><a href="#work">Our Work</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul> 
    </nav>
  </header>
  <!-- End Header and Nav -->

  @yield('content')

  <!-- Footer -->
  <footer id="footer">
  <!-- Icons -->
          <!--<ul class="actions">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
            <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
            <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
          </ul>-->

  <!-- Menu -->
          <ul class="menu">
            <li>&copy; 205Ventures</li><li>Design By: <a href="http://html5up.net">HTML5 UP</a></li>
            <li>&copy; Content Provided By: 205Ventures</li>
          </ul>
  
  </footer>    
    {{ HTML::script('js/jquery.min.js') }}
    {{ HTML::script('js/jquery.poptrox.min.js')}}
    {{ HTML::script('js/jquery.scrollex.min.js')}}
    {{ HTML::script('js/jquery.scrolly.min.js')}}
    {{ HTML::script('js/skel.min.js')}}
    {{ HTML::script('js/util.js')}}
    {{ HTML::script('js/main.js')}}
    {{ HTML::script('js/costum.js')}}

    
    @yield('slickJS')
  </body>
</html>
