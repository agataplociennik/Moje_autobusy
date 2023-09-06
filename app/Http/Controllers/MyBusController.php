<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyBusController extends Controller
{
  public function index()
  {
    /**
     * @info TODO tutaj pokaze liste moich autobusow ten widok
     */
    }

  public function create()
  {
    /**
     * @info tutaj pokaze formularz wyboru nowego autobusu z listy dostpencyh
     */
    }

  public function add()
  {
    /**
     * tutaj POST metoda obsluzy dane z formualrza wyzej z widoku metody create()
     */
    }

  public function show()
  {
    /**
     * @info tutaj pokaże dane wybranego z listy autobusu (z listy index())
     */
    }

  public function delete()
  {
    /**
     * @info usuwanie autobusu z listy (w widoku w index() lub (show() )
     */
    }
}
