@extends('layouts.default')

@section('content')

<div class="row">
  <h1>Edit Log In Information</h1>
  <p>If you don't want to change your password, don't enter anything in the password fields.</p>
  <?php foreach ($errors->all() as $val) {
    echo '<div id="showErrors" data-alert class="error-alert-box alert-box radius">' . $val . '</div>';
  }
  ?>  
  
  <div class="large-6 columns">
    {{ Form::open(array('url' => 'update_login_information')) }}
      {{ Form::label('email', 'E-mail:') }}
      {{ Form::text('email', $email) }}
      {{ Form::label('old_password', 'Old password:') }}
      {{ Form::password('old_password') }}
      {{ Form::label('password', 'New password:') }}
      {{ Form::password('password') }}
      {{ Form::label('password_confirmation', 'Password confirmation:') }}
      {{ Form::password('password_confirmation') }}
      {{ Form::submit('Update', array('class' => 'button')) }}
	{{ Form::close() }} 
	<?php echo link_to_route('cancel', 'Cancel'); ?>
  </div>
</div>

@stop