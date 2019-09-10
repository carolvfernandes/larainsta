<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
        if (Auth::check()){            
            return redirect('home');
        }
        return view('welcome');        
    }
    public function home(){
        //$posts = Post::all();
        $posts = Post::select('*')->join('users', 'posts.user_id', '=', 'users.id')->get();
        return view('home')->with('posts', $posts);
    }
}