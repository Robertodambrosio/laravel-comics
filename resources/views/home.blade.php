@extends('layouts.base')

@section('pageTitle')
    Home
@endsection

@section('pageContent')
    @foreach ($comic as $item)
        <div class="card">
            <img src="{{$item['thumb']}}" alt="comic-view">
            <h4>{{$item['series']}}</h4>
        </div>
    @endforeach>
@endsection