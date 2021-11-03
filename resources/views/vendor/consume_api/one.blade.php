
@extends('template')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Satu Data</div>
    
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
                                  <tr>
                                    <th scope="row">{{ $data['id'] }}</th>
                                    <td>{{ $data['title'] }}</td>
                                    <td>{{ $data['body'] }}</td>
                                    <td><a href="/baca">Kembali</a></td>
                                  </tr>
                                </tbody>
                              </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <footer-component></footer-component>
@endsection
        


