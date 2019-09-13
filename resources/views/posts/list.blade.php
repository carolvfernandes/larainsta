@extends('layouts.app')

@section('content')
<div class="container">

   <div class="row justify-content-center">

       <div class="col-md-8">
           @foreach ($posts as $post)

           <div class="card mt-4">
              <div class="card-body"> <a>@</a>{{$post->name}}</div>
                   <img class="card-img-top" src="{{$post->image_path}}" alt="Card image cap">


                <div class="likedeslike">
                   <div class="card-body">{{$post->description}}</div>
                   <a class=" btn btn-success col-md-2" href="{{route('like', ['idPost' => $post->id])}}">like</a>
                        <a class="btn btn-danger col-md-2" href="{{route('deslike', ['idPost' => $post->id])}}">deslike</a>
                        <br>
                        <span>{{$post->likes}} curtiram essa foto</span>

        
                                    
                                    <form method="POST" enctype="multipart/form-data" action="/posts">
                                    Comentário: 
                                    <br>
                                    <textarea type="text" name="description"></textarea>
                                    <br>
                                    <button type="submit" class="btn btn-success" href="{{route('comment', ['idPost' => $post->id])}}">Enviar</button>
                                    </form>
                </div>
                   
               </div>   
              
           @endforeach

       </div>
       
   </div>

</div>


@endsection