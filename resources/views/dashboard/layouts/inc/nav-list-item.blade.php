<li class="nav-item {{ implode(' ', isset($classes) ? $classes : []) }}">
    <a href="{{ route($route) }}" class="nav-link {{ request()->routeIs($route) ? "active" : '' }}">
        <i class="{{ $icon ?? 'far fa-circle' }} nav-icon"></i>
        <p>{{ $title }}</p>
    </a>
</li>
