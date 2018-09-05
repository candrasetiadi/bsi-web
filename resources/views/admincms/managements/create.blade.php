@extends('admincms.layouts.default')
@section('content')
<div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-edit"></i>Tambah Baru Nama Anggota Pengurus RW</div>
                  <div class="card-body">
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Nama Lengkap</label>
                        <div class="col-md-9">
                          <input class="form-control" id="text-input" type="text" name="name" placeholder="Nama Lengkap">
                          <!-- <span class="help-block">This is a help text</span> -->
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select1">Posisi</label>
                        <div class="col-md-9">
                          <select class="form-control"  name="position">
                            <option value="0">Pilih Posisi</option>
                            @foreach($positions as $key => $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="area-input">Biografi</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="biography" rows="9" placeholder="Biografi.."></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="file-input">Unggah Foto</label>
                        <div class="col-md-9">
                          <input id="file-input" type="file" name="image">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="textarea-input">Alamat</label>
                        <div class="col-md-9">
                          <textarea class="form-control"  name="address" rows="9" placeholder="Alamat.."></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="email-input">Periode Mulai</label>
                        <div class="col-md-9">
                          <input class="form-control datepickers" type="text" name="periode_start" placeholder="Periode Mulai">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="email-input">Periode Selesai</label>
                        <div class="col-md-9">
                          <input class="form-control datepickers" type="text" name="periode_end" placeholder="Periode Akhir">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="password-input">Status</label>
                        <div class="col-md-9">
                         <label class="switch switch-pill switch-success">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                          </label>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
@endsection