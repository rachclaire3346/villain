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

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                color: #b4dbc0;
                font-size: 84px;
                padding-top: 170px;
            }

            .subtitle {
                font-size: 48px;
                font-weight: bold;
                color: #b56357;
            }

            .links > a {
                color: #b56357;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .mainpage {
                background-color: #eae3ea;
                border: #a7b3a5;
                height: 500px;
                width: 900px;
                border-style: solid;
                border-width: 15px;
            }


        </style>
</head>
<body>


@extends('layouts.app')

@section('content')
<div class="container">
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
                            <button class="btn btn-xs btn-default space-right" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                            @if ($message->is_starred) 
                                <strong>&#9734;</strong>
                            @endif
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



