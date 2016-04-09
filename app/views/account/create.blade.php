@extends('layouts.default')

@section('content')
{{ HTML::script('js/jquery.js') }}
{{ HTML::script('js/JQValidation/jquery.validate.js') }}
{{ HTML::script('js/JQValidation/additional-methods.js') }}

<style>
    label {
    margin-top: 16px;    
    }
</style>


<script>

$(document).ready( function() {
$.noConflict();// this is needed to prevent collision between jquery.js already existing files
$("#accountForm").validate({
  rules: {
    name: {
     required: true,
     minlength: 2
    },
    email: {
      required: true,
      email: true
    },
    reEmail: {
      required: true,
      email: true,
      equalTo: "#email"
    },
    password: {
        required: true,
        minlength: 6
    },
    rePassword: {
        required: true,
        minlength: 6,
        equalTo: "#password"
    },
    secAnswer: {
      required: true  
    },
    phoneNumber: {
        required: true,
        digits: true,
        minlength: 7
    },
    cellPhone: {
        digits: true,
        minlength: 7
    }
    ,
    address: {
        required: true
    }
    ,
    city: {
        required: true
    }
    ,
    state: {
        required: true
    },
    country: {
        required: true
    },
    zipcode: {
        required: true,
        digits: true
    }
  },
  messages: {
    name: "Please specify your name",
    email: {
      required: "We need your email address to contact you",
      email: "Your email address must be in the format of name@domain.com"
    },
    reEmail: {
      equalTo: "It has to be the same email you typed before"  
    },
    rePassword: {
       equalTo: "Type in the same password here please"
        
    }
  },
  success: function (label){
      
  }
});});
</script>


<div class="row">
<div class="small-6 large-2 columns">
<?php foreach ($errors->all() as $val) {
echo '<div id="showErrors" data-alert class="error-alert-box">
  ' . $val . ' 
<a href="#" class="close">&times;</a>
</div>';
}
?>  
</div>

  
  <div class="small-6 large-8 columns small-centered columns">
      <h2>Create an account</h2>
      {{ Form::open(array('url' => 'account/create', 'method' => 'post', 'id' => 'accountForm')) }}
      {{ Form::label('name', 'First  name') }}
      {{ Form::text('name') }}
      {{ Form::label('lname', 'Last name') }}
      {{ Form::text('lname') }}
      {{ Form::label('email', 'E-mail') }}
      {{ Form::email('email') }}
      {{ Form::label('reEmail', 'Repeat email') }}
      {{ Form::email('reEmail') }}
      {{ Form::label('password', 'Password') }}
      {{ Form::password('password') }}
      {{ Form::label('rePassword', 'Type password again') }}
      {{ Form::password('rePassword') }}
      {{ Form::label('securityQuestion','Recovery password question')}}
      {{ Form::select('secQuestion', array('0' => 'What was your childhood nickname? ',
                                           '1' => 'In what city did you meet your spouse/significant other?',
                                           '2' => 'What is the name of your favorite childhood friend?',
                                           '3' => 'What street did you live on in third grade?',
                                           '4' => 'What is your oldest sibling\’s birthday month and year? (e.g., January 1900) ',
                                           '5' => 'What is your oldest sibling\’s birthday month and year? (e.g., January 1900) ',
                                           '6' => 'What is your oldest sibling\'s middle name?',
                                           '7' => 'What school did you attend for sixth grade?',
                                           '8' => 'What was your childhood phone number including area code? (e.g., 000-000-0000)',
                                           '9' => 'What is the first name of the boy or girl that you first kissed?'
                                           ))}}
      {{ Form::label('answer', 'Answer')}}
      {{ Form::text('secAnswer')}}
      {{ Form::label('phone','Phone number')}}
      {{ Form::text('phoneNumber')}}
      {{ Form::label('cellphone','Cellphone number')}}
      {{ Form::text('cellPhone')}}
      {{ Form::label('address','Address')}}
      {{ Form::text('address')}}
      {{ Form::label('city','City')}}
      {{ Form::text('city')}}
      {{ Form::label('State','State')}}
      {{ Form::text('state')}}
      {{ Form::label('country','Country')}}
      {{ Form::text('country')}}
      {{ Form::label('zipcode','Zip code')}}
      {{ Form::text('zipcode')}}
      {{ Form::label('message', 'About yourself') }}
      {{ Form::textarea('message', null, array('style' => "height: 150px;")) }}
      {{ Form::submit('Submit', array('class' => 'button')) }}
	{{ Form::close() }}
  </div>
<div class="small-12 large-2 columns"></div>
</div>

@stop

