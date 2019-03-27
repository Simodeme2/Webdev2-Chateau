<!-- Start Top Bar -->
<div class="top-bar">
    <div class="row">
        <div class="top-bar-left">
            <ul class="menu" role="menubar">
                <li class="@if(Route::is('pages.home')) is-active @endif" role="menuitem">
                  <a href="{{ route('pages.home') }}">
                    Home
                  </a>
                </li>
                <li class="@if(Route::is('clients')) is-active @endif" role="menuitem">
                  <a href="{{ route('clients.index') }}">
                    Klanten
                  </a>
                </li>
                <li class="@if(Route::is('reservations')) is-active @endif" role="menuitem">
                  <a href="{{ route('reservations.index') }}">
                    Reservaties
                  </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Top Bar -->
