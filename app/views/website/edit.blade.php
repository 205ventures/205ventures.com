@extends('layouts.default')

@section('content')

<div class="row">
	<header>
		<h1>Pages</h1>
	</header>
	<?php
	if (count($pages) == 0)
		echo 'No pages';
	else {
	?>
	<ul>
		<?php
			foreach ($pages as $page)
				echo '<li>' . link_to_route('edit_page', $page->title, array('website_id' => $website->id, 'page_id' => $page->id), null) . '</li>';
	}?>
	</ul>
	<?php echo link_to_route('dashboard', "Back"); ?>
</div>

@stop