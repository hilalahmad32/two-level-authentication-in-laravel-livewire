<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <meta name="robots" content="noindex, follow">
</head>

<body>
    <input id="slider" class="customSlider" type="checkbox">
    <label for="slider"></label>
    <div class="wrapper">
        <div class="profile">
            <img src="https://images.unsplash.com/photo-1484186139897-d5fc6b908812?ixlib=rb-0.3.5&s=9358d797b2e1370884aa51b0ab94f706&auto=format&fit=crop&w=200&q=80%20500w"
                class="thumbnail">
            <div class="check"><i class="fas fa-check"></i></div>
           
            {{ $slot }}
        </div>
    </div>
 
</body>

</html>