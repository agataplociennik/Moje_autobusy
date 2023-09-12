<?php

namespace App\Http\Services;

use Illuminate\Support\Collection;

class BusApiService
{
  private GdanskApiBusesService $apiBusesService;

  public function __construct(GdanskApiBusesService $apiBusesService)
  {
    $this->apiBusesService = $apiBusesService;
  }

  public function get(): array
  {
    $busesUniqueSort = $this->getAllBuses()->unique('routeShortName')->pluck('routeShortName')->sort();


    return [
      'vehicles' => $busesUniqueSort->toArray(),
    ];
  }

  public function getDataByRouteShortName(string $number): Collection
  {
    $buses = $this->getAllBuses();

    $toFilter = $buses->map(function ($item) use ($number) {
      return $item->routeShortName === $number ? $item : [];
    });
    return $toFilter ? $toFilter->filter() : collect([]);
  }

  private function getAllBuses(): Collection
  {
    $buses = $this->apiBusesService->get();
    $vehiclesUnsorted = $buses->vehicles;
    return collect($vehiclesUnsorted);
  }

}
