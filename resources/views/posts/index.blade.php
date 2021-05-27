@extends('layouts.app')
@section('content')

    @foreach ($posts  as $post)
        <p>{{$post->content}}</p>
        <br>
        <div class="d-flex align-items">
        <form action="{{ route('posts.like')}}" id="form-js">
            <div id="count-js">{{$post->likes()->count()}} Like(s)</div>
            <input id="post-id-js" type="hidden" value="{{$post->id}}">
            <button type="submit" class="btn btn-link btn-sm">J'aime</button>
        </form>
        </div>
    @endforeach

@endsection