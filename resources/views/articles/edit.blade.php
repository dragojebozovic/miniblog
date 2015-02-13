@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Post</div>
					<div class="panel-body">
						
						{!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
								<div class="form-group">
									{!! Form::label('title') !!}
									{!! Form::text('title',null,['class'=>'form-control'],['type'=>'text']) !!}
								</div>
								
								<div class="form-group">
									{!! Form::label('body') !!}
									{!! Form::textarea('body',null,['class'=>'form-control','rows'=>'5']) !!}
								</div>

								<div class="form-group">
									{!! Form::label('excerpt') !!}
									{!! Form::textarea('excerpt',null,['class'=>'form-control','rows'=>'3']) !!}
								</div>
								
								<div class="form-group">
									{!! Form::label('published_at') !!}
									{!! Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control']) !!}
								</div>

								<div class="form-group">
									{!! Form::submit('Update article',['class'=>'btn btn-default form-control']) !!}
								</div>
						{!! Form::close() !!}

							@if ($errors->any())
								<ul class="alert alert-danger">
									@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
							@endif

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
