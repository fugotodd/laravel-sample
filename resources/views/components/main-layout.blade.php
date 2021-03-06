<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="{{mix('assets/css/app.css')}}" />
    {{$exCss ?? ''}}
    <title>購物車範例</title>
</head>
<body>
    {{$slot}}

    <script src="{{mix('assets/js/app.js')}}"></script>
    {{$exJs ?? ''}}
</body>
</html>
