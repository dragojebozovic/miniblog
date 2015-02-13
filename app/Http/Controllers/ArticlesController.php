<?php namespace Miniblog\Http\Controllers;

use Miniblog\Http\Requests;
use Miniblog\Article;
use Miniblog\Http\Controllers\Controller;
use Request;
use Auth;
use Carbon\Carbon;
use Miniblog\Http\Requests\ArticleRequest;

class ArticlesController extends Controller {

	public function index(){	
		$articles = Article::latest('published_at')->published()->get();
		return view('articles.index',compact('articles','user'));

	}

	public function show($id){

		$article = Article::find($id);
		if (is_null($article)){
			
			abort(404);
		}

		return view('articles.single')->with('article', $article);
		// return view('articles.single',compact('article'));
	}

	public function create(){
	
		return view('articles.create');

	}

	public function store(ArticleRequest $request){

		
		$input = Request::all();

		$user = Auth::id();
		$input = array_add($input, 'user_id', $user);
		// $input['published_at'] = Carbon::now();
		
		Article::create($input);
		return redirect('articles');
	}

	public function edit($id){

		$article = Article::find($id);

		return view('articles.edit')->with('article', $article);
	}

	public function update($id, ArticleRequest $request){

		$article = Article::find($id);

		$article->update($request->all());

		return redirect('articles');
	}
}