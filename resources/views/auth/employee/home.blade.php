@extends('admin.main_master')

@section('logout')
<a href="javascript:void(0)">
    <div>
        <a class="dropdown-item" href="{{ route('employee.logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
        <form id="logout-form" action="{{ route('employee.logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</a>
@endsection

@section('content')
@include('admin.index')
@endsection

