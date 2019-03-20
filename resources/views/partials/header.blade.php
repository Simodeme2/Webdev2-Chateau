<!-- Start Top Bar -->
<div class="top-bar">
    <div class="row">
        <div class="top-bar-left">
            <ul class="menu" role="menubar">
                <li class="@if(Route::is('home')) is-active @endif" role="menuitem">
                  <a href="{{ route('home') }}">
                    Home
                  </a>
                </li>
                <li class="@if(Route::is('clients')) is-active @endif" role="menuitem">
                  <a href="{{ route('clients') }}">
                    Klanten
                  </a>
                </li>
                <li class="@if(Route::is('reservations')) is-active @endif" role="menuitem">
                  <a href="{{ route('reservations') }}">
                    Reservaties
                  </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Top Bar -->
