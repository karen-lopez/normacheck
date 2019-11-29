<?php use \App\Http\Controllers\CheckListsController; ?>
@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 my-5 pt-4 shadow">
      <div class="modal-dialog text-justify" >
        <div class="modal-content profile">
          <div class="col-sm-12 container">
            <p>
              <img src="../statics/img/avatar1.png" width="100" class="float-left rounded-circle mr-2">
              <h1 class="sansserif text-white">{{$user->name}}</h1>
              <h4 class="serif">{{$user->email}}</h4>
            </p>
            <p>
              <strong>
                @if(isset($lists))
                <h3>Tus check lists</h3>
              </strong>
                @foreach ($lists as $list)
                  <p>{{ $list->name}}</p>
                @endforeach
              @endif
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<form class="form" action="{{action('CheckListsController@addList')}}" method="POST">
  @csrf
  <label for="name">Escriba un nombre para la lista</label>
  <input type="name" name="nameList">
  <input type="submit" value="Agregar"/>
</form>
@endsection
