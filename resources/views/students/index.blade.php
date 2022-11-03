@extends('templates.default')

@php
  $title='Data Siswa';
  $pretitle='Semua Data';
@endphp

@push('page-action')
  <a href="{{ route('students.create') }}" class="btn btn-primary">Tambah Data</a>
@endpush

@section('content')
<div class="col-12">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Phone Number</th>
                          <th>Address</th>
                          <th>Class</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{$student->name}}</td>
                                <td class="text-muted">{{$student->phone_number}}</td>
                                <td>{{$student->address}}</td>
                                <td>{{$student->class}}</td>
                                <td>
                                  <a href="{{ route('students.edit', $student->id)}}">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection