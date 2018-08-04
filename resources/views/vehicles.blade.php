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
                    <table border="1">
                        <tr>
                            <th>model_id</th>
                            <th>manufacturer_id</th>
                            <th>type</th>
                            <th>usage</th>
                            <th>license_plate</th>
                            <th>weight_category</th>
                            <th>no_seats</th>
                            <th>has_boot</th>
                            <th>has_trailer</th>
                            <th>owner_id</th>
                            <th>transmission</th>
                            <th>colour_id</th>
                            <th>is_hgv</th>
                            <th>no_doors</th>
                            <th>sunroof</th>
                            <th>has_gps</th>
                            <th>no_wheels</th>
                            <th>engine_cc</th>
                            <th>fuel_type</th>
                        </tr>
                    @foreach ($vehicles as $vehicle)
                        <tr>
                            <td>{{$vehicle->model_id}}</td>
                            <td>{{$vehicle->manufacturer_id}}</td>
                            <td>{{$vehicle->type}}</td>
                            <td>{{$vehicle->usage}}</td>
                            <td>{{$vehicle->license_plate}}</td>
                            <td>{{$vehicle->weight_category}}</td>
                            <td>{{$vehicle->no_seats}}</td>
                            <td>{{$vehicle->has_boot}}</td>
                            <td>{{$vehicle->has_trailer}}</td>
                            <td>{{$vehicle->owner_id}}</td>
                            <td>{{$vehicle->transmission}}</td>
                            <td>{{$vehicle->colour_id}}</td>
                            <td>{{$vehicle->is_hgv}}</td>
                            <td>{{$vehicle->no_doors}}</td>
                            <td>{{$vehicle->sunroof}}</td>
                            <td>{{$vehicle->has_gps}}</td>
                            <td>{{$vehicle->no_wheels}}</td>
                            <td>{{$vehicle->engine_cc}}</td>
                            <td>{{$vehicle->fuel_type}}</td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
