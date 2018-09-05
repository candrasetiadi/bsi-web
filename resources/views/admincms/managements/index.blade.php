@extends('admincms.layouts.default')
@section('content')
<div class="row">
            <h2>Struktur RW</h2>
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <a href="{{ route('management.create') }}"><button class="btn btn-sm btn-success" type="button">Tambah Baru</button></a>
                  <div class="card-body">
                    <table id="dataTable" class="table table-responsive-sm table-bordered table-striped table-sm">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Posisi</th>
                          <th>Biograpy</th>
                          <th>Foto</th>
                          <th>Alamat</th>
                          <th>Periode Awal</th>
                          <th>Periode Akhir</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $key=>$value)
                        <tr>
                          <td>{{ $value->name }}</td>
                          <td>{{ $value->position }}</td>
                          <td>{{ $value->image }}</td>
                          <td>{{ $value->address }}</td>
                          <td>{{ $value->periode_start }}</td>
                          <td>{{ $value->periode_end }}</td>
                          <td>{{ $value->status }}</td>
                          <td>
                            <span class="badge badge-success">Active</span>
                          </td>
                          <td>&nbsp;</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <nav>
                      <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link" href="#">Prev</a>
                        </li>
                        <li class="page-item active">
                          <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
@endsection
@section('js-extra')
<script type="text/javascript">
  $(document).ready(function() {
    $('#dataTable').DataTable();
} );
</script>
@endsection