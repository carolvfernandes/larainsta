<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
class CommentsController extends Controller
{
    public function CreateComment(Request $data) {        
        $comments = Comentarios::create([
            'user_id' => auth()->id(),
 
            'Comentario' => request('Comentario'),
 
            'likesComentario' => 0 
 
        ])->save();
    }

    public function ShowComment(){
        $comments =  DB::table('Comments')->select('comentario')->get();
       echo "oi";
        return view('posts.list')->with('posts', $comments);

    }
    public function DeleteComments(Request $request){
        $idEvento = $request->query('deletar_evento');
        Comentarios::destroy($request->idPost);
        
        return redirect()->route('listEvent');
    }
}