@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')

<h1>Editing Post</h1>

  <form method="POST" action="/posts/{{ $post->id }}">
     {{ csrf_field() }}
     <input type="hidden" name="_method" value="PUT">
     <div class="form-group">
        <label for="exampleInputPassword1">Title</label>
        <input type="text" class="form-control" 
                           aria-describedly="emailHelp" 
                           name="title" 
                           value="{{ $post->title}}">
     </div>
     <div class="form-group">
         <label for="exampleInputPassword1">Content</label>
         <textarea class="form-control"
                   name="content">{{ $pst->content }}</textarea>
     </div>
     <button type="submit" class="btn btn-outline-primary">Submit</button>
  </form>
  
 <a href="/posts/{{ $post->id}}">Show</a>
 <a href="/posts">Back</a>
 
 @endsection