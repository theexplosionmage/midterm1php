@extends('layout')

@section('content')

    <div class="row pad-botm">
        <div class="col-md-12">
            <h4 class="header-line">POSTS</h4>
        </div>
        <a class="btn btn-primary btn-lg" role="button" href="{{ route('posts.create') }}">+ Add Post</a>
    </div>
    <div class="row">

        @foreach($posts as $post)

            <div class="col-md-4 col-sm-4">
                <div class="well well-lg">
                    <h4>
                        <a href="{{ route('posts.show', $post->id ) }}">
                            {{ $post->name }}
                        </a>
                    </h4>
                    <p>
                        {{ $post->body }}
                    </p>
                </div>
            </div>

        @endforeach

    </div>


@endsection
