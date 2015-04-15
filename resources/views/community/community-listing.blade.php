@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Communities
                        <a href="/community/create" class="btn btn-primary pull-right">Create Community</a>
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        @foreach ($communities as $community)
                            <tr>
                                <td>{{$community->name}}</td>
                                <td class="actions">
                                    <a href="/community/{{$community->id}}/edit">Edit</a>
                                    <a href="/community/{{$community->id}}/delete">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
