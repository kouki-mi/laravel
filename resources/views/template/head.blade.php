@section('head')
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$title}}</title>
  <link href="https://unpkg.com/nes.css@latest/css/nes.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
@show