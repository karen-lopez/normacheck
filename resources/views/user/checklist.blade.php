@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-12 my-5 pt-4 shadow">
      <div class="modal-dialog text-justify" >
        <div class="modal-content profile">
          <div class="col-sm-12 container">
            <p>
              <h1 class="sansserif text-white">{{$user->name}}</h1>
            </p>
            <p>
              <strong>
                @if(isset($checklist))
                <h3>Tus listas: </h3>
              </strong>
                @foreach ($checklist as $list)
                  <p>{{ $list->name}}
                  <button type="button" class="btn btn-sm" value="{{$list->id}}" onclick="{{action('CheckListsController@show')}}" method="POST">
                    ver</button>
                  </p>
                @endforeach
              @endif
            </p>
          </div>
            <form class="form" action="{{action('CheckListsController@addList')}}" method="POST">
              @csrf
              <label for="name">Escriba un nombre para la lista</label>
              <input type="name" name="nameList">
              <input type="submit" value="Agregar"/>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
