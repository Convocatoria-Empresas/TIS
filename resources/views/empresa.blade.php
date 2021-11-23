@extends('layouts.app')

@section('content')
<div class="container">
    
    @if($state == 'index')      
                <empresa> </empresa>
    @elseif ($state == 'create')
                <empresa-create></empresa-create>
    @endif       
    
</div>
@endsection