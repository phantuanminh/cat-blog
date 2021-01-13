<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class AdminController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}
	protected function newPost(Request $request) {
		$this->create($request);
		return redirect('blog');
	}
	protected function create(Request $request) {
		$data = $request->all();
		DB::table('posts')->insert([
			'title' => $data['title'],
			'subtitle'=> $data['subtitle'],
			'bglink' => $data['bglink'],
			'content' => $data['editor_contents'],
			'author' => Auth::user()->name,
		]);
	}
}
