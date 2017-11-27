@extends('admin.partials.main')

@section('title', 'Create User')

@section('content')
@include('admin.partials.navbar')
<h1 class="text-center"> Crear Usuario </h1>
@include('flash::message')
@if(Session::has('flash_message'))
{{Session::get('flash_message')}}
@endif
{!! Form::model(array('route' => array('user.create'))) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', Input::old('name'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', Input::old('email'), array('class' => 'form-control')) !!}
    </div>
    <!-- <div class="form-group">
        {!! Form::label('password', 'Password') !!}
        {!! Form::Password('password', array('class' => 'form-control')) !!}
    </div> -->
    {!! Form::submit('Create Usuario', array('class' => 'btn btn-primary')) !!}
{!! Form::close() !!}
</table>
@endsection
