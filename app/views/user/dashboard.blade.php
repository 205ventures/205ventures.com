@extends('layouts.default')

@section('content')

<?php
if (Session::has('message')) {
	$message = Session::get('message');
  	 echo '<div class="row"><div data-alert class="alert-box success radius">' . $message . '</div></div>';
}
?>

<div class="row">
	<header>
		<h1>My Websites</h1>
	</header>
	<?php
	if (count($websites) == 0)
		echo 'No websites';
	else {
	?>
	<ul>
		<?php
			foreach ($websites as $website)
				echo '<li>' . link_to_route('edit_website', $website->name, array('id' => $website->id), null) . '</li>';
	}?>
	</ul>
</div>

<div class="row">
	<header>
		<h1>Log In Information</h1>
	</header>
	<p>Email: <?php echo $email; ?></p>
	<p>Password: ******</p>
	<p><?php echo link_to_route('edit_login_info', 'Edit'); ?></p>
</div>

<!--<div class="row">
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="P34CMJW3BC64C">
	<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
  </form>
</div>-->

@stop