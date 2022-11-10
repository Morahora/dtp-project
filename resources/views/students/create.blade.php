@extends('templates.default')

@php
  $title = 'Tambahkan Data';
  $preTitle = 'Data Siswa';
@endphp
  
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('students.store') }}" class="" method="post">
                @csrf
                <div class="mb-3">
                <label for="" class="form-label">Nama</label>
                  <input type="text" name="name" class="form-control @error('name')is-invalid @enderror"
                    name="example-text-input" placeholder="Masukkan Nama" value={{ old ('name') }}>
                @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Alamat</label>
                <input type="text" name="address" class="form-control @error('address')is-invalid @enderror"
                    name="example-text-input" placeholder="Masukkan Alamat" value={{ old ('address') }}>

                      @error('address')

                    <span class="invalid-feedback">{{ $message }}</span>

                      @enderror
              </div>
            
            <div class="mb-3">
                <label for="" class="form-label">No.Telepon</label>
                <input type="text" name="phone_number" class="form-control @error('phone_number')is-invalid @enderror"
                name="example-text-input" placeholder="Masukkan No. Telepon" value={{ old ('phone_number') }}>

                  @error('phone_number')
                <span class="invalid-feedback">{{ $message }}</span>

                  @enderror
              </div>

            <div class="mb-3">
                <label for="" class="form-label">Kelas</label>
                <input type="text" name="class" class="form-control @error('class')is-invalid @enderror"
                name="example-text-input" placeholder="Masukkan Kelas" value={{ old ('class') }}>

                  @error('class')
                <span class="invalid-feedback">{{ $message }}</span>

                  @enderror              
              </div>

            <div class="mb-3">
                <input type="submit" value="Simpan" class="btn btn-primary">
        </div>
</form>
    </div>
    @endsection
