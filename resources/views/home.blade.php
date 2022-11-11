@extends('template')

@section('title', 'Homepage')

@section('home')
<div class="container">
    <div class="row">
        <div class="col -md-8 col-md-ffset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Input Siswa</h3></div>

                <div class="panel-body">
                    <form action="/insert" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label name="name" id="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nama Siswa">
                            <label name="score" id="score">Score</label>
                            <input type="text" name="score" id="score" class="form-control" placeholder="Nilai Siswa">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success ">Sent</button>
                        </div>

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $err)
                                        <li> {{$err}} </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
