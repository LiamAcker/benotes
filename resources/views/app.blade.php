<!doctype html>
<html lang="en" class="min-h-full">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PlanSync</title>
    <link href="/css/inter.css" type="text/css" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="/logo_144x144.png" />
    <link rel="manifest" href="/manifest.json">
</head>

<body class="h-full">
    <div id="app" class="h-full">
        <div class="w-full mx-auto h-full">
            <router-view></router-view>
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>