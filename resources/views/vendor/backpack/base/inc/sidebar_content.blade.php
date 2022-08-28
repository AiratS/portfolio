{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('dashboard') }}">
        <i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('personal') }}">
        <i class="nav-icon las la-male"></i> {{ trans('admin.personal.personal') }}
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('quality') }}">
        <i class="nav-icon las la-list"></i> {{ trans('admin.quality.qualities') }}
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('historical-point') }}">
        <i class="nav-icon las la-history"></i> {{ trans('admin.historical_point.historical_points') }}
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('image') }}">
        <i class="nav-icon las la-camera"></i> {{ trans('admin.image.images') }}
    </a>
</li>
