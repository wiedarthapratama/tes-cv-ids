@extends('layouts.templates')
@section('title', 'Tugas 1')
@section('content')
<br>
<center>
    <a href="{{url('/tugas-2')}}" class="btn btn-primary">Tugas 2</a>
</center>
<div class="container">
    @php
    $no = 1;
    @endphp
    @foreach($groupByTahun as $key => $data)
    @if($loop->iteration>1)
    <br>
    @endif
    <h3>{{$key}}</h3>
    @foreach($data as $d)
    <div class="accordion" id="accordionExample{{$d['id']}}">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button {{$no==1?'':'collapsed'}}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$d['id']}}" aria-expanded="{{$no==1?true:false}}" aria-controls="collapse{{$d['id']}}">
                    {{$d['school_name']}}
                </button>
            </h2>
            <div id="collapse{{$d['id']}}" class="accordion-collapse collapse {{$no==1?'show':''}}" data-bs-parent="#accordionExample{{$d['id']}}">
                <div class="accordion-body">
                    {{$d['title']}}
                </div>
            </div>
        </div>
    </div>
    @php
    $no++;
    @endphp
    @endforeach
    @endforeach
</div>
@endsection