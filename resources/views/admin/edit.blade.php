@extends('admin.partials.main')

@section('title', 'Show User')

@section('content')
@include('admin.partials.navbar')
<h1 class="text-center"> Editar al usuario {{$user->name}}</h1>

{!! Form::model($user, array('route' => array('user.update', $user->id))) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', Input::old('name'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', Input::old('email'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password') !!}
        {!! Form::Password('password', array('class' => 'form-control')) !!}
    </div>

    {!! Form::submit('Create Usuario', array('class' => 'btn btn-primary')) !!}
{!! Form::close() !!}
</table>
@endsection