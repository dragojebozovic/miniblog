@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Published Articles</div>
				<div class="panel-body">
					
						@foreach ($articles as $article)
						<h2><a href="/articles/{{$article->id}}">{{$article->title}}</a></h2>
						<!-- <div>{{$article->body}}</div> -->
						<div>{{$article->excerpt}}</div>
						<div>{{$article->user_id}}</div>
						@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
