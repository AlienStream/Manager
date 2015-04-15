@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {!! Form::open(['url' => 'community', 'files' => 'true','class' => 'form-horizontal']) !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">Create A New Community</div>
                        <div class="panel-body">
                                <div class="form-group">
                                    {!! Form::label('name', 'Name:', ['class' => 'col-sm-2']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('description', 'Description:', ['class' => 'col-sm-2']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('thumbnail', 'Thumbnail:', ['class' => 'col-sm-2']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::file('thumbnail', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                        </div>
                        <div class="panel-footer">
                            {!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}
                            <a href="/community/" class="btn btn-default">Cancel</a>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
