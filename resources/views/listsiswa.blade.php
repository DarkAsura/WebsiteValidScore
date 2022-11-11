@extends('template')

@section('title','result')

@section('home')

<div class="container">
    <div class="row">
        <div class="col -md-8 col-md-ffset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Info Siswa</h3> </div>
                @foreach($students as $q)
                <div class="card col m-1">
                    <div class="card-body">
                        <h5 class="card-title; card-body-content">Name : {{ $q->name }} </h5>
                        <h5 class="card-subtitle mb-2 text-muted; card-body-content">Score :  {{$q->score}}</h5>
                        <div class="card-body-content">
                            @if($q->score <= 50)
                                <div class="alert alert-danger d-inline-block">
                                    Maaf, Nilai anda tidak cukup
                                </div>
                            @elseif(($q->score > 51) and ($q->score <=60))
                                <div class="alert alert-warning d-inline-block">
                                    Nilai kamu kurang sedikit
                                </div>
                            @else
                                <div class="alert alert-success d-inline-block">
                                    Selamat, nilai kamu lulus
                                </div>
                            @endif
                        </div>
                    </div>
                       </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
