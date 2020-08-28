@extends('blog.layout')

@section('head-tags') 

<title>@if(isset($home)) {{$home}} @endif &nbsp;&#124;&nbsp; rustedchip &nbsp;&#124;&nbsp; blog </title>

@endsection
@section('content')

  <div class="col-md-9 p-3 border-left border-right">
  
  @if(isset($home))<p class="text-muted">{{$home}}</p> @endif
  
  @foreach($posts as $post)
        <div class="p-3 mt-2  shadow-sm  border-bottom">
            <div class="row">
                <div class="col-md">
                    <h2 class="h2 font-italic font-weight-bold"><a class="text-dark" href="{{route('post',$post->slug)}}">{{ $post->title }}</a></h2>
                    <p>{{ $post->excerpt }}</p>
                    <p>
                        @if(isset($post->created_at)) Created {{ date( "M d, Y", strtotime($post->created_at)) }} @endif 
                        @if(isset($post->author->name))by <a href="{{route('author',$post->author_id)}}"><i class="fas fa-user"></i> {{ $post->author->name }}</a> @endif 
                        @if(isset($post->category->name))in <a href="{{route('category',$post->category->id)}}"><i class="fas fa-layer-group"></i> {{ $post->category->name }}</a> @endif
                    </p>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" src="{{ Voyager::image( $post->image ) }}" >
                </div>
            </div>

        </div>
    @endforeach
    {{$posts->links()}}
  </div>



 @endsection