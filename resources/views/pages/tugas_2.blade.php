@extends('layouts.templates')
@section('title', 'Tugas 2')
@section('content')
<br>
<center>
    <a href="{{url('/')}}" class="btn btn-primary">Tugas 1</a>
</center>
<div class="container">
    <div class="row">
        @foreach($data as $d)
        <div class="col-4 mt-3">
            <div class="card" style="height: 200px;">
                <img src="{{$d->images[0]}}" class="card-img-top" alt="Gambar">
                <div class="card-body">
                    <h5 class="card-title">{{$d->title}} - {{$d->category->name}}</h5>
                    <p class="card-text">{{$d->description}}</p>
                    <p class="card-text" style="color: blue">${{number_format($d->price)}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection