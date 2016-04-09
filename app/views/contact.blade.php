@extends('layouts.default')

@section('content')

<section id="contact" class="home-section text-center">
  <div class="heading-contact">
	<h1>How can we help?</h1>
  </div>
  <div class="container">
   <div class="row">
     <div class="col-lg-8" >
       <div class="boxed-grey"> 
         <form class="contact-form"> 
            <div class="row"> 
                <div class="col-md-6">  
                  {{ Form::open(array('url' => 'contact', 'id' => 'contactForm'))  }}
                    <div class="form-group" >
                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name', null, array('class' => 'form-control'))}}
                    </div><!--end of name group-->
                    <div class="form-group"> 
                    {{ Form::label('email', 'Email:' ) }}
                    {{ Form::text('email', null, array('class' => 'form-control'))}}
                    </div><!--end of email group-->
                    <div class="form-group">
                      <label for="subject">Subject</label>
                      <select id="subject" name="subject" class="form-control"
                      required="required">
                        <option value="na" selected="">Choose One:</option>
                        <option value="service">Customer Service</option>
                        <option value="suggestions">Suggestions</option>
                        <option value="product">Product Support</option>
                      </select>
                    </div>
                  </div><!--end of md-6-->
                  <div class="col-md-6">
                    <div class="form-group"> 
                    {{ Form::label('message', 'Message:') }}
                    {{ Form::textarea('message', null, array('class' => "form-control", 'id' => 'message'))}}
                    </div><!--end of message text area-->
                  </div>
                  <div class="col-md-12"> 
                    {{ Form::submit('Submit', array('class' => 'btn btn-skin pull-right', 'id' => 'btnContactUs')) }}
              	    {{ Form::close() }}
                  </div>
             </div><!--end of inner row-->
           </form>
        </div><!--endo of boxed gray-->
    </div><!--end of lg-8--> 
  
    <div class="col-lg-4">
      <div class="widget">
        <img src="{{ URL::to('/') }}/img/contact_callperson.jpg">
      </div>
      <address>
          <strong>We're on social networks</strong><br>
                        <ul class="company-social">
                            <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul> 
        </address>
    </div>
  </div><!--end of row-->
</section>

@stop