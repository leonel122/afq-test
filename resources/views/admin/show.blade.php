@extends('admin.partials.main')

@section('title', 'User..')

@section('content')
@include('admin.partials.navbar')
<h1 class="text-center">Mostrando al usuario {{$user->name}}</h1>
<br>
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
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>
               <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('user/' . $user->id . '/edit') }}">Editar Usuario</a>
                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <a class="btn btn-small btn-danger" href="{{ URL::to('user/' . $user->id . '/delete') }}">Eliminar Usuario</a>

            </td>
        </tr>
    </tbody>
</table>
@endsection