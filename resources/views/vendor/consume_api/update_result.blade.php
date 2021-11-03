@extends('template')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Hasil Update Data</div>
            <div class="card-body">
                <div class="col-md-4 mb-5">
                        <a href="/baca" class="btn btn-primary">Kembali ke Seluruh Data</a>
                </div>
                <form action="{{ url('tambah_data') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="userId">Id</label>
                        <input type="number" name="userId" id="userId" class="form-control" readonly value="{{ $data['userId'] }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Judul Baru</label>
                        <input type="text" name="title" id="title" class="form-control" readonly value="{{ $data['title'] }}">
                    </div>
                    <div class="form-group">
                        <label for="body">Body Baru</label>
                        <input type="text" name="body" id="body" class="form-control" readonly value="{{ $data['body'] }}">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<footer-component></footer-component>
@endsection
