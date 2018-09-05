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
                        <label class="col-md-3 col-form-label" for="email-input">Email Input</label>
                        <div class="col-md-9">
                          <input class="form-control datepickers" type="text" name="email-input" placeholder="Enter Email">
                          <span class="help-block">Please enter your email</span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="password-input">Password</label>
                        <div class="col-md-9">
                          <input class="form-control" id="password-input" type="password" name="password-input" placeholder="Password">
                          <span class="help-block">Please enter a complex password</span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="disabled-input">Disabled Input</label>
                        <div class="col-md-9">
                          <input class="form-control" id="disabled-input" type="text" name="disabled-input" placeholder="Disabled" disabled="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select1">Select</label>
                        <div class="col-md-9">
                          <select class="form-control" id="select1" name="select1">
                            <option value="0">Please select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select2">Select Large</label>
                        <div class="col-md-9">
                          <select class="form-control form-control-lg" id="select2" name="select2">
                            <option value="0">Please select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select3">Select Small</label>
                        <div class="col-md-9">
                          <select class="form-control form-control-sm" id="select3" name="select3">
                            <option value="0">Please select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="disabledSelect">Disabled Select</label>
                        <div class="col-md-9">
                          <select class="form-control" id="disabledSelect" disabled="">
                            <option value="0">Please select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="multiple-select">Multiple select</label>
                        <div class="col-md-9">
                          <select class="form-control" id="multiple-select" name="multiple-select" size="5" multiple="">
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                            <option value="4">Option #4</option>
                            <option value="5">Option #5</option>
                            <option value="6">Option #6</option>
                            <option value="7">Option #7</option>
                            <option value="8">Option #8</option>
                            <option value="9">Option #9</option>
                            <option value="10">Option #10</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Radios</label>
                        <div class="col-md-9 col-form-label">
                          <div class="form-check">
                            <input class="form-check-input" id="radio1" type="radio" value="radio1" name="radios">
                            <label class="form-check-label" for="radio1">Option 1</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="radio2" type="radio" value="radio2" name="radios">
                            <label class="form-check-label" for="radio2">Option 2</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="radio3" type="radio" value="radio2" name="radios">
                            <label class="form-check-label" for="radio3">Option 3</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Inline Radios</label>
                        <div class="col-md-9 col-form-label">
                          <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" id="inline-radio1" type="radio" value="option1" name="inline-radios">
                            <label class="form-check-label" for="inline-radio1">One</label>
                          </div>
                          <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" id="inline-radio2" type="radio" value="option2" name="inline-radios">
                            <label class="form-check-label" for="inline-radio2">Two</label>
                          </div>
                          <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" id="inline-radio3" type="radio" value="option3" name="inline-radios">
                            <label class="form-check-label" for="inline-radio3">Three</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Checkboxes</label>
                        <div class="col-md-9 col-form-label">
                          <div class="form-check checkbox">
                            <input class="form-check-input" id="check1" type="checkbox" value="">
                            <label class="form-check-label" for="check1">Option 1</label>
                          </div>
                          <div class="form-check checkbox">
                            <input class="form-check-input" id="check2" type="checkbox" value="">
                            <label class="form-check-label" for="check2">Option 2</label>
                          </div>
                          <div class="form-check checkbox">
                            <input class="form-check-input" id="check3" type="checkbox" value="">
                            <label class="form-check-label" for="check3">Option 3</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Inline Checkboxes</label>
                        <div class="col-md-9 col-form-label">
                          <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" id="inline-checkbox1" type="checkbox" value="check1">
                            <label class="form-check-label" for="inline-checkbox1">One</label>
                          </div>
                          <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" id="inline-checkbox2" type="checkbox" value="check2">
                            <label class="form-check-label" for="inline-checkbox2">Two</label>
                          </div>
                          <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" id="inline-checkbox3" type="checkbox" value="check3">
                            <label class="form-check-label" for="inline-checkbox3">Three</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="file-multiple-input">Multiple File input</label>
                        <div class="col-md-9">
                          <input id="file-multiple-input" type="file" name="file-multiple-input" multiple="">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
@endsection