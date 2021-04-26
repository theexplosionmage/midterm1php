@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Create Post
                </div>
                <div class="panel-body">
                    <form role="form" action="{{ route('posts.store') }}" method='POST'>
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name='name'/>
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                            <textarea class="form-control" rows="3" name='body'></textarea>
                        </div>


                        <button type="submit" class="btn btn-info">Create </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/.ROW-->

@endsection
