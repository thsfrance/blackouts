@extends('layouts.blackouts')
@section('content')
<div class='row'>
    @if(!empty($users))
    <div class='callout'>
        <div class="input-group">
        <span class="input-group-label">$</span>
        <input class="input-group-field" type="number">
        <div class="input-group-button">
          <input type="submit" class="button" value="Submit">
        </div>
      </div>
        <table class='hover'>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th></th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td></td>
            </tr>
            @endforeach
        </table>
    </div>
    @else
    <div class='callout alert'>
        <i class='fi-x-circle'></i> Não há usuários cadastrados.
    </div>
    @endif
</div>
@stop