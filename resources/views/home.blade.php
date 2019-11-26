@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="container">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    //example of add component
                    <div class="container">
                      <div class="card text-center">
                        <h5>Nueva lista de chequeo</h5>
                        <button type="button" name="button" class="button w-25">+</button>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
