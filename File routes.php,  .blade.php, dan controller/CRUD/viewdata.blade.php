@extends('layouts.app')

@section('content')
    @if (count($datas) > 0)
        <div class="container" style="margin-top: 25px">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kode Matkul</th>
                                    <th scope="col">Nama Matkul</th>
                                    <th scope="col">Jam Matkul</th>
                                    <th scope="col">Ruang Matkul</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                    <tr>
                                        <td scope="col">{{ $data->id }}</td>
                                        <td scope="col">{{ $data->kode_matkul }}</td>
                                        <td scope="col">{{ $data->nama_matkul }}</td>
                                        <td scope="col">{{ $data->jam_matkul }}</td>
                                        <td scope="col">{{ $data->ruang_matkul }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @else
        {
        <h1 style="font-weight: bolder" class="text-center">Tidak ada data yang tersedia</h1>
        }
    @endif
@endsection
