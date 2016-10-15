@extends('admin.partials.main')

@section('title', 'All User')

@section('content')
@include('admin.partials.navbar')
    <h1 class="text-center"> Todos los Usuarios</h1>
@include('flash::message')
@if(Session::has('flash_message'))
{{Session::get('flash_message')}}
@endif
<table class="table text-center table-striped table-bordered table table-hover" >
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($user as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td> 
            <td>
                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('user/' . $value->id) }}">Mostrar Usuario</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection