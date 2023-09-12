@extends('layouts.contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')

  <!-- List group checkbox -->
  <form action="{{ url('my_bus') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="col-lg-6">
      <small class="text-light fw-semibold">Dodaj nowy autobus</small>
      <div class="demo-inline-spacing mt-3">
        <div class="list-group">
          @foreach($vehicles as $vehicle)
            <label class="list-group-item">
              @if(in_array($vehicle, $mySelected->toArray()))
                <input name="selected_items[]" class="form-check-input me-1" type="checkbox" value={{$vehicle}} checked>
              @else
                <input name="selected_items[]" class="form-check-input me-1" type="checkbox" value={{$vehicle}}>
              @endif
              {{$vehicle}}
            </label>
          @endforeach

        </div>
      </div>
    </div>

    <button type="submit" class="btn btn-outline-primary">Zapisz moje autobusy</button>
  </form>
@endsection
