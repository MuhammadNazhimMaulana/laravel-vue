@extends('template')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Seluruh Data</div>
                    <div class="col-md-4 mt-4 mb-2">
                        <a href="tambah_data/" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Body</th>
                                <th scope="col">Action</th>
                               </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                  <tr>
                                    <th scope="row">{{ $item['id'] }}</th>
                                    <td>{{ $item['title'] }}</td>
                                    <td>{{ $item['body'] }}</td>
                                    <td class="col-5">
                                        <a class="btn btn-primary" href="/baca/{{ $item['id'] }}">View</a>
                                        <a  class="btn btn-warning" href="/update_data/{{ $item['id'] }}">Update</a>
                                        <a  class="btn btn-danger" href="/delete/{{ $item['id'] }}">Delete</a>
                                    </td>
                                  </tr>
                                @endforeach
                                </tbody>
                              </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <footer-component></footer-component>
@endsection
        


