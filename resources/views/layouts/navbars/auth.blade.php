<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('paper') }}/img/favicon.png">
            </div>
        </a>
        <a href="#" class="simple-text logo-normal">
            {{ __('Auto Culture') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'dashboard') }}">
                    <i class="nc-icon nc-layout-11"></i>
                    <p>{{ __('Tableau de bord') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'profile' ? 'active' : '' }}">
                <a href="{{ route('profile.edit') }}">
                    <i class="nc-icon nc-circle-10"></i>
                    <p>{{ __('Profile') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
