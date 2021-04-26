@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Edit Post
                </div>
                <div class="panel-body">
                    <form role="form" action="{{ route('posts.update', $post->id) }}" method='POST'>

                        {{ csrf_token() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name='name' value="{{ $post->name }}"/>
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                            <textarea class="form-control" rows="3" name='body'>{{ $post->body }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-info">Update </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/.ROW-->

@endsection
