@extends('blog.layout')

@section('head-tags') 

<title>{{ $post->title }} &nbsp;&#124;&nbsp rustedchip &nbsp;&#124;&nbsp blog</title>
<meta name="author" content="@if(isset($post->author->name)) {{ $post->author->name }}  @endif">
<meta name="description" content="{{$post->meta_description}}">
<meta name="keywords" content="{{$post->meta_keywords}}">


@endsection

@section('content')

<div class="col-md-9 p-3 border-left border-right">

<h2 class="h2 font-italic font-weight-bold"><a class="text-dark" href="{{route('post',$post->slug)}}">{{ $post->title }}</a></h2>


<p>
@if(isset($post->created_at)) Created {{ date( "M d, Y", strtotime($post->created_at)) }} @endif 
@if(isset($post->author->name))by <a href="{{route('author',$post->author_id)}}"><i class="fas fa-user"></i> {{ $post->author->name }}</a> @endif 
@if(isset($post->category->name))in <a href="{{route('category',$post->category->id)}}"><i class="fas fa-layer-group"></i> {{ $post->category->name }}</a> @endif
</p>
<p class="small">{{ $post->excerpt }}</p>

<img class="img-fluid" src="{{ Voyager::image( $post->image ) }}" >
<div class="border-top border-bottom pt-4 pb-4 text-justify ">
{!! $post->body !!}
</div>

               
</div>

@endsection