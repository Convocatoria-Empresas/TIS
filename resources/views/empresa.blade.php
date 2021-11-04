@extends('layouts.app')

@section('content')
<div class="container">
    <h1>EMPRESA</h1>
    
    @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
    @endif       
    <example-component> </example-component>
</div>
@endsection