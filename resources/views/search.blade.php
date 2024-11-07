@extends('layouts/frontLayout/front_design')
@section('content')

    <main class="main">
        @if($results->isEmpty())
        <p>No results found</p>
    @else
        @foreach($results as $result)
            <div>{{ $result}}</div> 
        @endforeach
    @endif
    
    </main>
@endsection('content')
