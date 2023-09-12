@extends('layouts.contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')

  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Moje</span>Autobusy
  </h4>
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">Dane tabeli</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
        <tr>
          <th>Nr autobusu</th>
          <th>Akcje</th>
        </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @foreach($vehicles as $vehicle)
          <tr>
            <td>{{ $vehicle->number }}</td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i
                    class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ route("my_bus.show", $vehicle->id) }}"><i type="submit"
                                                                                              class="bx bx-edit-alt me-2"></i>
                    Podgląd</a>
                  <form action="{{ route('my_bus.destroy', $vehicle->id) }}" method="post">
                    @method('DELETE')
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="dropdown-item"><i class="bx bx-trash me-2"></i> Usuń</button>
                  </form>
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

@endsection
