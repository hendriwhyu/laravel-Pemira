@extends('layout.main-layout')

@section('title', 'Data Pemilih')

@section('content')
<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">
             <h5 class="card-title">Data Pemilih</h5>
             <table class="table datatable">
                <a href="" class="btn btn-success"><i class='bx bx-plus'></i>Tambah Data</a>

                <thead>
                   <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Pemilih</th>
                      <th scope="col">Jurusan</th>
                      <th scope="col">Username</th>
                      <th scope="col">Email</th>
                      <th scope="col">Aksi</th>
                   </tr>
                </thead>
                <tbody>
                  @foreach ($ListPemilih as $data)
                   <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$data->nama_pengguna}}</td>
                      <td>{{$data->jurusan}}</td>
                      <td>{{$data->username}}</td>
                      <td>{{$data->email}}</td>
                      <td class="d-flex justify-content-evenly"><a href=""><i class='bx bx-edit' ></i></a> <br> <a href="" class="text-danger"><i class='bx bxs-trash' ></i></a> </td>
                   </tr>
                   @endforeach
                </tbody>
             </table>
          </div>
       </div>
    </div>
 </div>
@endsection