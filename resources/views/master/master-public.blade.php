<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('cv.page_name').' '.config('cv.name') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}"/>
</head>
<body>
@include('component.navigation.public')

@yield('section_accueil')

<script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</body>
</html>