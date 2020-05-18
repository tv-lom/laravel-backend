@extends('backend.layouts.app')

@section('content')
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<div class="card card-primary card-outline">
					<div class="card-header">
						<h3 class="card-title py-1">Form Inputs 
							<small>
								(Link to Example: 
								<a href="https://adminlte.io/themes/v3/pages/forms/general.html" target="_blank">General form</a>, 
								<a href="https://adminlte.io/themes/v3/pages/forms/advanced.html" target="_blank">Advaned form</a>,
								<a href="https://adminlte.io/themes/v3/pages/forms/editors.html" target="_blank">Editors</a>,
								<a href="https://adminlte.io/themes/v3/pages/forms/validation.html" target="_blank">Validation</a>
								)
							</small>
						</h3>
					</div>
					<div class="card-body">
						<div class="form-group row">
							<label for="name" class="col-sm-2 col-form-label text-lg-right">Input <span class="text-danger">*</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="name" id="name" placeholder="Input">
							</div>
						</div>

						<div class="form-group row">
							<label for="name" class="col-sm-2 col-form-label text-lg-right">Textarea <span class="text-danger">*</span></label>
							<div class="col-sm-6">
								<textarea class="form-control" id="" rows="3"></textarea>
							</div>
						</div>

						<div class="form-group row">
							<label for="name" class="col-sm-2 col-form-label text-lg-right">TinyMCE</label>
							<div class="col-sm-6">
								<textarea class="form-control" id="tinymce_textarea" rows="20"></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@include('backend.scripts.tinymce')

@push('after-scripts')
<script>
	var editor_config = {
	    path_absolute : "/",
	    selector: "textarea#tinymce_textarea",
	    plugins: [
	      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
	      "searchreplace wordcount visualblocks visualchars code fullscreen",
	      "insertdatetime media nonbreaking save table contextmenu directionality",
	      "emoticons template paste textcolor colorpicker textpattern"
	    ],
	    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
	    relative_urls: false,
	    file_browser_callback : function(field_name, url, type, win) {
	      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
	      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

	      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
	      if (type == 'image') {
	        cmsURL = cmsURL + "&type=Images";
	      } else {
	        cmsURL = cmsURL + "&type=Files";
	      }

	      tinyMCE.activeEditor.windowManager.open({
	        file : cmsURL,
	        title : 'Filemanager',
	        width : x * 0.8,
	        height : y * 0.8,
	        resizable : "yes",
	        close_previous : "no"
	      });
	    }
	  };

	  tinymce.init(editor_config);
</script>
@endpush