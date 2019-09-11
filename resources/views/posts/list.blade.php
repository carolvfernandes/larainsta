@extends('layouts.app')

@section('content')
<div class="container">

   <div class="row justify-content-center">

       <div class="col-md-8">
           @foreach ($posts as $post)

               <div class="card mt-4">
              <div class="card-body"> <a>@</a>{{$post->name}}</div>
                   <img class="card-img-top" src="{{$post->image_path}}" alt="Card image cap">
                   
                   <div class="card-body">{{$post->description}}</div>
                    @if ($post->likes == 0)
                        <a class="btn btn-success" href="{{route('like', ['idPost' => $post->id])}}">Like</a>
                    @else
                        <span>{{$post->likes}} likes</span>
                    @endif

                                        @foreach ($posts as $post)

                                        <div class="card-body">
                                        <strong> <a>@</a>{{$post->name}} </strong> {{$post->comentario}}
                                        </div>  
                                    @endforeach
                                    
                                    <form method="POST" enctype="multipart/form-data" action="/posts">
                                    Comentário: 
                                    <br>
                                    <textarea type="text" name="description"></textarea>
                                    <br>
                                    <button type="submit" class="btn btn-success" href="{{route('comment', ['idPost' => $post->id])}}">Enviar</button>
                                    </form>
                   
               </div>   
              
           @endforeach

       </div>
       
   </div>

</div>

@endsection