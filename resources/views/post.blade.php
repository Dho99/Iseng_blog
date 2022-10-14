@extends('layouts/main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->title}}</h2>
                    <p>By.<a href="/blog?author={{ $post->author->username }}"> {{ $post->author->name }}</a> in <a href="/blog?categories={{ $post->category->name }}">{{ $post->category->name }}</a> division</p>

                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">

                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>


                    <a href="/blog">Back to Posts</a>
            </div>
        </div>
    </div>
    
    

@endsection