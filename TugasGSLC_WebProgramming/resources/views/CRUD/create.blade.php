@extends('layouts.app')

@section('title', 'Create Data')

@section('content')
    <div class="container">
        <div style="margin-right: 25%; margin-left: 25%" class="mt-2">
            <div class="text-left"
                style="padding-top: .5rem; padding-bottom: .5rem; font-size: 20px; font-weight: bold; text-align: center;">
                Form Penambahan Mata Kuliah</div>

            <form method="post" action="{{ route('add') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="kode_matkul" class="form-label">Kode Mata Kuliah</label>
                    <input type="text" class="form-control" name="kode_matkul" placeholder="Kode Matkul" required>
                    @error('kode_matkul')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nama_matkul" class="form-label">Nama Mata Kuliah</label>
                    <input type=text"" class="form-control" name="nama_matkul" placeholder="Nama Matkul" required>
                </div>
                <div class="mb-3">
                    <label for="jam_matkul" class="form-label">Jam Mata Kuliah</label>
                    <select class="form-select" aria-label="Default select example" name="jam_matkul" required>
                        <option selected value="">Select</option>
                        <option value="07:20 - 08:50">07:20 - 08:50</option>
                        <option value="09:20 - 10:50">09:20 - 10:50</option>
                        <option value="11:20 - 12:50">11:20 - 12:50</option>
                        <option value="13:20 - 14:50">13:20 - 14:50</option>
                        <option value="15:20 - 16:50">15:20 - 16:50</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="ruang_matkul" class="form-label">Ruang Kelas</label>
                    <input type="integer" class="form-control" name="ruang_matkul" placeholder="Ruang Matkul" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection
