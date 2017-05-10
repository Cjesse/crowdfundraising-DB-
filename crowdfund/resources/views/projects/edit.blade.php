@extends('main')

@section('title', '| Edit Project')

@section('stylesheets')

	{!! Html::style('css/select2.min.css') !!}

	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

	<script>
		tinymce.init({
			selector: 'textarea',
			plugins: 'link code',
			menubar: false
		});
	</script>

@endsection

@section('content')
	<div class="row">
		{!! Form::model($project, ['route' => ['project.update', $project->pid], 'method' => 'PUT']) !!}
		<div class="col-md-8">
			{{ Form::label('pname', 'Title:') }}
			{{ Form::text('pname', null, ["class" => 'form-control input-lg']) }}

			{{ Form::label('tags', 'Tags:', ['class' => 'form-spacing-top']) }}
			{{ Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}
			
			{{ Form::label('description', "Description:", ['class' => 'form-spacing-top']) }}
			{{ Form::textarea('description', null, ['class' => 'form-control']) }}
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($project->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($project->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{{-- {!! Html::linkRoute('project.show', 'Cancel', array($project->pid), array('class' => 'btn btn-danger btn-block')) !!} --}}
						<a href="/user/index" class="btn btn-danger btn-block">Cancel</a>
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
					</div>
				</div>

			</div>
		</div>
		{!! Form::close() !!}
	</div>	<!-- end of .row (form) -->


@endsection

@section('script')

	{!! Html::script('js/select2.min.js') !!}
	<script type="text/javascript">
		$('.select2-multi').select2();
		$('.select2-multi').select2().val({!! ($project->tag()->pluck('content')) !!}).trigger('change');
	</script>
{{-- 
	<script type="text/javascript">
		$('.select2-multi').select2();
		$('.select2-multi').select2().val({!! json_encode($project->tag()->getRelatedIds()) !!}).trigger('change');
	</script> --}}

@endsection