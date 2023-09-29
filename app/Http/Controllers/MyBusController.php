<?php

namespace App\Http\Controllers;

use App\Http\Services\BusApiService;
use App\Models\MyBus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyBusController extends Controller
{
  private BusApiService $busApiService;

  public function __construct(BusApiService $busApiService)
  {
    $this->busApiService = $busApiService;
  }

  public function index()
  {
    $mySelected = MyBus::where('user_id', Auth::user()->id)->get();

    return view('content.my_bus.index',
      [
        'vehicles' => $mySelected
      ]);
  }

  public function create()
  {
    $mySelected = MyBus::where('user_id', Auth::user()->id)->get();
    $list = $this->busApiService->get();
    return view('content.my_bus.create',
      [
        'mySelected' => $mySelected ? $mySelected->pluck('number') : [],
        'vehicles' => $list['vehicles']
      ]);
  }

  public function store(Request $request)
  {
    $selectedItems = $request->get('selected_items');

    $myBus = MyBus::where('user_id', Auth::user()->id)->get();
    foreach ($myBus as $bus) {
      $bus->delete();
    }


    foreach ($selectedItems as $item) {
      $newMyBuses = new MyBus();
      $newMyBuses->number = $item;
      $newMyBuses->user_id = Auth::user()->id;
      $newMyBuses->save();
    }

    return redirect()->route('my_bus.index')->with('success', 'thank you');
  }

  public function show(string $id)
  {
    $vehicle = MyBus::where([
      'id' => $id,
      'user_id' => Auth::user()->id
    ])->first();
    $routeShortName = $vehicle->number;
    return view('content.my_bus.show',
      [
        'routeShortName' => $routeShortName,
        'vehicles' => $this->busApiService->getDataByRouteShortName($routeShortName)
      ]);
  }

  public function edit()
  {
    /**
     * @info tutaj pokaże dane wybranego z listy autobusu (z listy index())
     */
  }

  public function update()
  {
    /**
     * @info tutaj pokaże dane wybranego z listy autobusu (z listy index())
     */
  }

  public function destroy(string $id)
  {
    $vehicle = MyBus::find($id); //TODO: secure for sqlinjection
    $vehicle->delete();

    return redirect(route('my_bus.index'))->with('success', 'Usunięto ulubiony pojazd.');
  }
}
