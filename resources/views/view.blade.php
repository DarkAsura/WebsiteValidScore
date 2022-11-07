@extends('template')

@section('title','result')

@section('home')

<div class="container">
    <div class="row">
        <div class="col -md-8 col-md-ffset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Info Siswa</div>
                <div class="panel-body">

                    <div> Nama : {{$name}}</div>
                    <div> Score : {{$score}}</div>
                    @if($score <= 50)
                        <div class="alert alert-danger d-inline-block">
                            Maaf, Nilai anda tidak cukup
                        </div>
                    @elseif(($score > 51) and ($score <=60))
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
    </div>
</div>
@endsection
