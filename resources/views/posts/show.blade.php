@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">

                <h1>{{ $post->name }}</h1>
                <p>{{ $post->body }}</p>
                <div>
                    <a class="btn btn-primary btn-lg" role="button" href="{{ route('posts.edit', [ 'post' => $post ] ) }}">Edit</a>

                    <form role="form" action="{{ route('posts.destroy', [ 'post' => $post->id ] ) }}" method='POST'>
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-primary btn-lg">Delete </button>
                    </form>
                </div>


            </div>
        </div>
    </div>
    <!-- /. ROW  -->

@endsection
