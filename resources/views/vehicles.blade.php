@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-12">
            <table class="table-responsive table-bordered table-striped table-hover thead-dark">
                <tr>
                    <th>vehiclemodel</th>
                    <th>manufacturer</th>
                    <th>type</th>
                    <th>usage</th>
                    <th>license_plate</th>
                    <th>weight_category</th>
                    <th>no_seats</th>
                    <th>has_boot</th>
                    <th>has_trailer</th>
                    <th>owner_name</th>
                    <th>owner_company</th>
                    <th>owner_profession</th>
                    <th>transmission</th>
                    <th>colour</th>
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
                    <td>{{$vehicle->vehiclemodel->vehiclemodel}}</td>
                    <td>{{$vehicle->manufacturer->manufacturer}}</td>
                    <td>{{$vehicle->type}}</td>
                    <td>{{$vehicle->usage}}</td>
                    <td>{{$vehicle->license_plate}}</td>
                    <td>{{$vehicle->weight_category}}</td>
                    <td>{{$vehicle->no_seats}}</td>
                    <td>{{$vehicle->has_boot}}</td>
                    <td>{{$vehicle->has_trailer}}</td>
                    <td>{{$vehicle->owner->name}}</td>
                    <td>{{$vehicle->owner->company}}</td>
                    <td>{{$vehicle->owner->profession}}</td>
                    <td>{{$vehicle->transmission}}</td>
                    <td>{{$vehicle->colour->colour}}</td>
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
@endsection
