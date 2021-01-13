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

class BlogController extends Controller
{
	protected function listPost(){
		$posts = DB::table('posts')->orderBy('id', 'desc')->get();
		return view('blog', compact('posts'));
	}
	protected function viewPost($name, $date){
		$post = DB::table('posts')->where('title', $name)->where('date_posted', $date)->first();
		return view('post', compact('post'));
	}
	protected function newSubscriber(Request $request){
		$data = $request->all();
		DB::table('subscribers')->insert([
			'email' => $data['email'],
		]);
		return redirect()->back();
	}
	protected function newMessage(Request $request){
		$data = $request->all();
		DB::table('messages')->insert([
			'name' => $data['name'],
			'email' => $data['email'],
			'phone' => $data['phone'],
			'message' => $data['message']
		]);
		return redirect()->back();
	}
}