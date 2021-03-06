<!DOCTYPE html>
<html>
<head>
    <title></title>

    <style>
            html, body {
                background-color: #eae3ea;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
/*
            .bigone {
                background-color: #eae3ea;
            }*/


        </style>
</head>
<body>


@extends('layouts.app')

@section('content')
<div class="container bigone">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="col-md-10">Dashboard</div>
                    <button class="btn btn-xs btn-default space-right" type="submit"> <i class="fa fa-envelope-o" aria-hidden="true"></i> New Message</button>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                    <tr>
                        <th></th>
                        <th>From</th>
                        <th>Subject</th>
                        <th>Date</th>
                    </tr>
                    @foreach ($messages as $message)
                    <tr>
                        <td>
                            <form method="post" action="/home">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                            <button class="btn btn-xs btn-default space-right" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                            @if ($message->is_starred) 
                                <strong>&#9734;</strong>
                            @endif
                            </form>
                        </td>
                        <td>{{ $message->sender->name }}</td>
                        <td>{{ $message->subject }}</td>
                        <td>{{ Carbon\Carbon::parse($message->created_at)->format('d-m-Y') }}</td>
                    </tr>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</body>
</html>



