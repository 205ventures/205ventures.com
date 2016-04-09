@extends('layouts.default')

@section('content')
<link rel="stylesheet" type="text/css" href="css/global.css">
<?php
if (Session::has('message')) {
  $message = Session::get('message');
     echo '<div class="row"><div data-alert class="alert-box error-alert-box radius">' . $message . '</div></div>';
}
?>

<div class="row">
  <div class="small-12 large-centered large-6 columns">
  <h1>Log In</h1>
    {{ Form::open(array('url' => 'login')) }}
      {{ Form::label('email', 'E-mail:') }}
      {{ Form::text('email') }}
      {{ Form::label('password', 'Password:') }}
      {{ Form::password('password') }}
      {{ Form::submit('Log In', array('class' => 'button')) }}
	{{ Form::close() }}
  </div>
</div>

@stop