@extends('layouts.base')

@section('pageTitle')
    Home
@endsection

@section('pageContent')
<div class="hero">
</div>
 <div class="container">
          <h2>CURRENT SERIES</h2>
          <div class="comic-container">
                @foreach ($comic as $item)
                    <div class="card">
                        <img src="{{$item['thumb']}}" alt="comic-view">
                        <p>{{$item['series']}}</p>
                    </div>
                @endforeach
                </div>
          <button class="btn-content">Load more</button>
      </div>

@endsection