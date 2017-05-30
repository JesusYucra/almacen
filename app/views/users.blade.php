@extends('layout')
@section('content')
    <table class="table">
        <tr>
            <td> #</td>
            <td> Nombre</td>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td> {{$user->name }}</td>
            </tr>
        @endforeach
    </table>
@stop