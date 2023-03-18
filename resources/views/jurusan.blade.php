@extends ('layout.main-layout')

@section('title', 'Jurusan')

@section('content')
<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">
             <h5 class="card-title">Jurusan</h5>
             <table class="table table-borderless">
                <thead>
                   <tr>
                      <th scope="col" width='30px'>No</th>
                      <th scope="col">Jurusan</th>
                   </tr>
                </thead>
                <tbody>
                    @foreach ($ListJurusan as $data)
                   <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td class="w-100"><a href="/jurusan/{{$data->id_jurusan}}">{{$data->nama_jurusan}}</a></td>
                   </tr>
                   @endforeach
                </tbody>
             </table>
          </div>
       </div>
    </div>
 </div>
@endsection