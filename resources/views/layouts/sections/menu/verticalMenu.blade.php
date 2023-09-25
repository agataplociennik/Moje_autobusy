<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  <!-- ! Hide app brand if navbar-full -->
  <div class="app-brand demo">
    <a href="{{ route('login') }}" class="app-brand-link">
      <span class="app-brand-logo demo">
            <img src="{{ asset('storage/logo.png') }}" width="200px" id="icon" />
      </span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-autod-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">

    <!-- Przycisk Moje autobusy -->
    <li class="menu-item">
      <a href="{{ action(\App\Http\Controllers\MyBusController::class.'@index') }}" class="menu-link">
        <i class='bx bx-bus'></i>
        <div>Moje autobusy</div>
      </a>
    </li>
    <!-- Przycisk Dodaj autoubus -->
    <li class="menu-item">
      <a href="{{ action(\App\Http\Controllers\MyBusController::class.'@create') }}" class="menu-link">
        <i class="bx bx-plus-circle"></i>
        <div>Dodaj autobus</div>
      </a>
    </li>


{{--  @foreach ($menuData[0]->menu as $menu)--}}

{{--    --}}{{-- adding active and open class if child is active --}}

{{--    --}}{{-- menu headers --}}
{{--    @if (isset($menu->menuHeader))--}}
{{--    <li class="menu-header small text-uppercase">--}}
{{--      <span class="menu-header-text">{{ $menu->menuHeader }}</span>--}}
{{--    </li>--}}

{{--    @else--}}

{{--    --}}{{-- active menu method --}}
{{--    @php--}}
{{--    $activeClass = null;--}}
{{--    $currentRouteName = Route::currentRouteName();--}}

{{--    if ($currentRouteName === $menu->slug) {--}}
{{--    $activeClass = 'active';--}}
{{--    }--}}
{{--    elseif (isset($menu->submenu)) {--}}
{{--    if (gettype($menu->slug) === 'array') {--}}
{{--    foreach($menu->slug as $slug){--}}
{{--    if (str_contains($currentRouteName,$slug) and strpos($currentRouteName,$slug) === 0) {--}}
{{--    $activeClass = 'active open';--}}
{{--    }--}}
{{--    }--}}
{{--    }--}}
{{--    else{--}}
{{--    if (str_contains($currentRouteName,$menu->slug) and strpos($currentRouteName,$menu->slug) === 0) {--}}
{{--    $activeClass = 'active open';--}}
{{--    }--}}
{{--    }--}}

{{--    }--}}
{{--    @endphp--}}

{{--    --}}{{-- main menu --}}
{{--    <li class="menu-item {{$activeClass}}">--}}
{{--      <a href="{{ isset($menu->url) ? url($menu->url) : 'javascript:void(0);' }}" class="{{ isset($menu->submenu) ? 'menu-link menu-toggle' : 'menu-link' }}" @if (isset($menu->target) and !empty($menu->target)) target="_blank" @endif>--}}
{{--        @isset($menu->icon)--}}
{{--        <i class="{{ $menu->icon }}"></i>--}}
{{--        @endisset--}}
{{--        <div>{{ isset($menu->name) ? __($menu->name) : '' }}</div>--}}
{{--      </a>--}}

{{--      --}}{{-- submenu --}}
{{--      @isset($menu->submenu)--}}
{{--      @include('layouts.sections.menu.submenu',['menu' => $menu->submenu])--}}
{{--      @endisset--}}
{{--    </li>--}}
{{--    @endif--}}
{{--    @endforeach--}}
{{--  </ul>--}}

</aside>
