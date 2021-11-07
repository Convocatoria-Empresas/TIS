@extends('layouts.app')

@section('content')
<div class="container">
    <h1>ALGO</h1>
    
    @if($state == 'index')      
                <empresa> </empresa>
    @elseif ($state == 'create')
                <empresa-create> </empresa-create>
    @endif       
    
</div>
@endsection