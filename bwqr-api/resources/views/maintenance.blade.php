@extends('layouts.app')

@section('styles')
    <style>
        html {
            overflow: hidden;
        }

        h1, h2, h3, h4, h5, h6, p {
            font-family: 'Open Sans', sans-serif;
        }

        h1 {
            font-size: 64px;
            font-weight: 400;
            color: white;
            margin-bottom: 1em;
        }

        p {
            color: #d5d5d5;
            font-size: 30px;
        }

        #cover {
            position: relative;
            height: 100vh;
            width: 100vw;
            background-image: url('https://source.unsplash.com/1920x1080?yacht');
        }

        .is-overlay {
            background-color: rgba(0, 0, 0, .4);
        }

        #description {
            position: absolute;
            z-index: 10;
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-flow: column;
        }
    </style>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
@endsection

@section('content')
    <div id="cover">
        <div class="is-overlay"></div>
        <div id="description">
            <h1>We will be back soon </h1>
            <p>{{env('APP_NAME')}} - Under Maintenance</p>
        </div>
    </div>
@endsection