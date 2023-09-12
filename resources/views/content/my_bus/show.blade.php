@extends('layouts.contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')
  <link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Mój ulubiony o nr: {{ $routeShortName }}
  </h4>

  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">Dane tabeli</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
        <tr>
          <th>Nr boczny pojazdu</th>
          <th>Kierunek</th>
          <th>Prędkość</th>
          <th>Opóźnienie</th>
          <th>Położenie</th>
        </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @foreach($vehicles as $vehicle)
          <tr>
            <td>{{ $vehicle->vehicleCode }}</td>
            <td>{{ $vehicle->headsign }}</td>
            <td>{{ $vehicle->speed }}</td>
            <td>{{ $vehicle->delay }} sekund</td>
            <td><a target="_blank" href="https://www.google.com/maps/place/{{ $vehicle->lat }},{{ $vehicle->lon }}">{{ $vehicle->lat }},{{ $vehicle->lon }}</a></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i
                    class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                </div>
              </div>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>


    </div>
  </div>
  <!--/ Basic Bootstrap Table -->
  <script src = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
@endsection
