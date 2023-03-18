@extends('layout.main-layout')

@section('title', 'Data Kandidat')

@section('content')
<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">
             <h5 class="card-title">Data Kandidat</h5>
             <table class="table datatable">
                <a href="" class="btn btn-success"><i class='bx bx-plus'></i>Tambah Data</a>
                <thead>
                   <tr>
                      <th scope="col">No</th>
                      <th scope="col">Organisasi</th>
                      <th scope="col">No Urut</th>
                      <th scope="col">Nama Kandidat</th>
                      <th scope="col">Foto Kandidat</th>
                      <th scope="col">Visi Misi Kandidat</th>
                      <th scope="col">Aksi</th>
                   </tr>
                </thead>
                <tbody>
                  @foreach ($kandidatList as $data)
                   <tr>
                        <th scope="row">{{$loop->first}}</th>
                        <td>{{$data->organisasi}}</td>
                      <td>{{$data->no_urut}}</td>
                      <td>{{$data->nama_calon}}</td>
                      <td>{{$data->foto_calon}}</td>
                      <td>{{$data->visimisi_calon}}</td>
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