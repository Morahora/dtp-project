@extends('templates.default')

@php
  $title = 'Data Siswa';
  $preTitle = 'Semua Data';
  
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('students.index') }}" method="post">
                @csrf
                <div class="mb-3">
                <label for="" class="form-label">Nama</label>
              <input type="text" name="name" class="form-control" placeholder="Masukkan nama">
              </div>

            <div class="mb-3">
                <label for="" class="form-label">Alamat</label>
              <input type="text" name="address" class="form-control" placeholder="Masukkan alamat">
              </div>
            
            <div class="mb-3">
                <label for="" class="form-label">No.Telepon</label>
              <input type="text" name="phone_number" class="form-control" placeholder="Masukkan No. Telepon">
              </div>

            <div class="mb-3">
                <label for="" class="form-label">Kelas</label>
              <input type="text" name="class" class="form-control" placeholder="Masukkan Kelas">
              </div>

            <div class="mb-3">
                <input type="submit" value="Simpan" class="btn btn-primary">
        </div>
</form>
    </div>
    @endsection
