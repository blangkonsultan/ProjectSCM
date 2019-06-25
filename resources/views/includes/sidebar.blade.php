<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        @if(\Illuminate\Support\Facades\Auth::user()->getRole() == 'ADMIN')
            @include('includes.menu.admin')
        @elseif(\Illuminate\Support\Facades\Auth::user()->getRole() == 'SUPPLIER')
            @include('includes.menu.supplier')
        @elseif(\Illuminate\Support\Facades\Auth::user()->getRole() == 'PETANI')
            @include('includes.menu.petani')
        @endif
    </div>
</div>