<?php

namespace App\Http\Services;

class GdanskApiBusesService
{
  public function get()
  {
    return json_decode(file_get_contents(config('app.api_gdansk_buses')));
  }
}
