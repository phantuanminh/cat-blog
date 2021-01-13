<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;

 
class LogoutController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
        
    public function getLogout() {
        Auth::logout();
        return redirect('/');
    }
}