@extends('layouts.default')

@section('content')

    <!-- Intro -->
      <section id="intro" class="main style1 dark fullscreen">
        <div class="content container 75%">
          <header>
            <h2>Welcome</h2>
          </header>
          <p><strong>205Ventures</strong> is a technology company dedicated to helping small businesses with their technical needs.</p>
          <footer>
            <a href="#one" class="button style2 down">More</a>
          </footer>
        </div>
      </section>

    <!-- One -->
      <section id="one" class="main style2 right dark fullscreen">
        <div class="content box style2">
          <header>
            <h2>What We Do</h2>
          </header>
          <p>We help small businesses get noticed on the Internet and <strong>expand</strong> their opportunities 
          by helping them reach more customers in a specific geographic or business area.</p>
        </div>
        <a href="#two" class="button style2 down anchored">Next</a>
      </section>

    <!-- Two -->
      <section id="two" class="main style2 left dark fullscreen">
        <div class="content box style2">
          <header>
            <h2>Who We Are</h2>
          </header>
          <p>We are a small group of tech savies driven by technology, business, and challenges. We founded this company with the sole goal of 
          helping other companies reach their business goals.</p>
        </div>
        <a href="#work" class="button style2 down anchored">Next</a>
      </section>

    <!-- Work -->
      <section id="work" class="main style3 primary">
        <div class="content container">
          <header>
            <h2>Our Work</h2>
            <p><strong>205ventures</strong> has been working with businesses in the New York and New Jersey area. We develop their websites and come up with an optimal Search 
            Optimization campaing so they can be found quickly on Google and Bing search listings.</p>
          </header>

          <div class="box container 75%">
            <ul>
              <li><a href="http://www.passaicvisioncenterllc.com/">passaicvisioncenterllc.com</a></li>
              <li><a href="http://kindcareped.com/app/public/home">kindcareped.com</a></li>
            </ul>
          </div>

          <!-- Lightbox Gallery  -->
            <!--<div class="container 75% gallery">
              <div class="row 0% images">
                <div class="6u 12u(mobile)"><a href="{{ URL::to('/') }}/img/fulls/01.jpg" class="image fit from-left"><img src="{{ URL::to('/') }}/img/thumbs/01.jpg" title="The Anonymous Red" alt="" /></a></div>
                <div class="6u 12u(mobile)"><a href="{{ URL::to('/')}}/img/fulls/passaic.png" class="image fit from-right"><img src="{{ URL::to('/')}}/img/passaic.png" title="Airchitecture II" alt="" /></a></div>
              </div>-->
              <!--<div class="row 0% images">
                <div class="6u 12u(mobile)"><a href="{{URL::to('/')}}/img/fulls/03.jpg" class="image fit from-left"><img src="{{ URL::to('/')}}/img/thumbs/03.jpg" title="Air Lounge" alt="" /></a></div>
                <div class="6u 12u(mobile)"><a href="{{URL::to('/')}}img/fulls/04.jpg" class="image fit from-right"><img src="{{ URL::to('/')}}/img/thumbs/04.jpg" title="Carry on" alt="" /></a></div>
              </div>
              <div class="row 0% images">
                <div class="6u 12u(mobile)"><a href="{{URL::to('/')}}img/fulls/05.jpg" class="image fit from-left"><img src="{{ URL::to('/')}}/img/thumbs/05.jpg" title="The sparkling shell" alt="" /></a></div>
                <div class="6u 12u(mobile)"><a href="{{URL::to('/')}}img/fulls/06.jpg" class="image fit from-right"><img src="{{ URL::to('/')}}/img/thumbs/06.jpg" title="Bent IX" alt="" /></a></div>
              </div>
            </div>-->

        </div>
         <a href="#contact" class="button style2 down anchored">Next</a>
      </section>

    <!-- Contact -->
      <section id="contact" class="main style3 secondary">
        <div class="content container">
          <header>
            <h2>Say Hello</h2>
            <p>If you are interested in what we do and would like to learn more about our company, services and plan options, send us an email.</p>
          </header>
          <div class="box container 75%">

          <!-- Contact Form -->
              <form method="post" action="contact">
                  
                <div class="row 50%">
                {{ Form::open(array('url' => 'contact'))  }}
                  <div class="6u 12u(mobile)">{{ Form::text('name', null, array('placeholder' => 'Name:'))}}</div>
                  <div class="6u 12u(mobile)">{{ Form::text('name', null, array('placeholder' => 'Email:'))}}</div>
                </div>
                <div class="row 50%">
                <div class="12u">{{ Form::textarea('message', null, array('id' => 'message', 'placeholder'=> 'Message'))}}</div>
                </div>
                <div class="row">
                  <div class="12u">
                    <ul class="actions">
                      <li>{{ Form::submit('Submit')}}
                    {{ Form::close() }}</li>
                    </ul>
                  </div>
                </div>
              </form>

          </div>
        </div>
      </section>

@stop