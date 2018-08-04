<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>xDesign Vehicles</title>

        <!-- Fonts -->
        
        <!-- Styles -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    @foreach ($vehicles as $vehicle)
                    This is vehicle {{ $vehicle['license_plate'] }}<br>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
