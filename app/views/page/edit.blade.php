@extends('layouts.default')
@section('styles')
<style>
    textarea {
        height: 150px !important;
    }
    h1, h2 {
        font-weight: 500;
    }
    iframe {
        height: 600px;
        border: none;
    }
</style>
@stop
@section('scripts')
{{ HTML::script('js/jsonReader.js') }}
{{ HTML::script('js/jquery.js') }}
@stop
@section('content')


<script> 
    $(document).ready( function () {
        JSONReadData("<?php echo  URL::asset('/JSON/' . $website->name . '/' .$page->json_file_name); ?>"); //loads JSON file which has the same name as the page is loading into
    })
</script> 
<div class="row">
	<header class="row" >
		<h1 class="small-12 columns">Page Content</h1>
<?php foreach ($errors->all() as $val) {
echo '<div id="showErrors" data-alert class="error-alert-box alert-box radius">
  ' . $val . ' </div>';
}
?>  
	</header>
        {{ Form::open(array('url' => 'page/edit_page/{website_id}/{page_id}', 'method' => 'post', 'id' => 'page_edit_form')) }}
       	<div class="row">
            <iframe class="small-12 columns" src="http://{{ $website->name }}" ></iframe>           
        </div><br><hr>
	<?php
        $count = 0;
		foreach ($sections as $section) {
                if($count % 2 == 0) { echo '<div class="row">'; }
                        echo '<div class="large-6 columns">';
			echo '<h2>' . $section->name . '</h2>';
			echo '<textarea class="' . $section->name. ' editable" name="' . $section->name . '">' . $section->content . '</textarea>';
                        echo '</div>';
                if($count %2 == 1) { echo '</div>'; }
                $count++;
		}
	?>
	
        {{ Form::hidden('pathToJson', public_path() . '/JSON/' . $website->name . '/' .$page->json_file_name) }}
        {{ Form::hidden('callingUrl', 'page/edit_page/' . $website->id . '/' . $page->id) }} 
        {{ Form::hidden('remoteJson', $website->location ) }}
        {{ Form::hidden('ftpUser', $website->ftp_username ) }}
        {{ Form::hidden('ftpPassword', $website->ftp_password ) }}
        {{ Form::hidden('pathToRemoteJson', '/home/users/web/b2909/ipg.poondocom/' . $website->name . '/JSON/' . $page->json_file_name ) }}
        {{ Form::submit('Submit changes', array('class' => 'button')) }}
        {{ Form::close() }}
	<?php echo link_to_route('edit_website', "Cancel", array('id' => $website->id)); ?>
</div>

@stop