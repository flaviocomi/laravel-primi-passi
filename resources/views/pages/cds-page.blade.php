@extends('layouts.base')

@section('content')

<div class="cds-container">


    @foreach ($cdsDB as $item)
    
    <div class="cd">
      <img src="{{ $item['poster'] }}" />
      
      <h3>{{ $item['title'] }}</h3>
      <small>{{ $item['author'] }}</small>
      <strong>{{ $item['year'] }}</strong>
    </div>
    
    @endforeach

</div>


@endsection