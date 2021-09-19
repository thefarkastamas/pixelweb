@extends('layouts.backend.app')

@section('content')
<div class="dashboard">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium odit error eius repudiandae neque vero labore eveniet fugiat nostrum. Architecto dignissimos, cumque ad repellat consectetur maiores itaque dolor explicabo. Repellendus?

    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>
@endsection
