<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        @if(\Illuminate\Support\Facades\Auth::user()->getRole() == 'ADMIN')
            @include('includes.menu.admin')
        @else
        @endif
    </div>
</div>