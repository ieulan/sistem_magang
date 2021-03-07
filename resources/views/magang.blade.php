@extends('layout.default')

@section('title', 'SIMOTIF - Magang')

@section('container')
	<div class="right_col" role="main">
    <div class="row">
      <div class="col-md-6">
          <div class="x_panel">
              <div class="x_title">
                  <h2>Daftar</h2>
                  <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Settings 1</a>
                              <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                  </ul>
                  <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <form class="" action="" method="post" novalidate>
                      <p>Isilah form berikut untuk mengikuti kegiatan magang!</p>
                      <span class="section">Personal Info</span>
                      <div class="field item form-group">
                          <label class="col-form-label col-md-3 col-sm-3  label-align">Nama<span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6">
                              <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="ex. John f. Kennedy" required="required" />
                          </div>
                      </div>
                      <div class="field item form-group">
                          <label class="col-form-label col-md-3 col-sm-3  label-align">NIM <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6">
                              <input class="form-control" type="nim" class='number' name="number" data-validate-minmax="10,100" required='required'></div>
                      </div>
                      <div class="field item form-group">
                          <label class="col-form-label col-md-3 col-sm-3  label-align">Prodi<span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6">
                              <input class="form-control" class='optional' name="prodi" data-validate-length-range="5,15" type="text" /></div>
                      </div>
                      <div class="field item form-group">
                          <label class="col-form-label col-md-3 col-sm-3  label-align">email<span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6">
                              <input class="form-control" name="email" class='email' required="required" type="email" /></div>
                      </div>
                      
                      
                      <div class="field item form-group">
                          <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal<span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6">
                              <input class="form-control" class='date' type="date" name="date" required='required'></div>
                      </div>
                      <div class="field item form-group">
                          <label class="col-form-label col-md-3 col-sm-3  label-align">Time<span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6">
                              <input class="form-control" class='time' type="time" name="time" required='required'></div>
                      </div>

                      <div class="ln_solid">
                          <div class="form-group">
                              <div class="col-md-6 offset-md-3">
                                  <button type='submit' class="btn btn-primary">Submit</button>
                                  <button type='reset' class="btn btn-success">Reset</button>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>

      <div class="col-md-6">
        <div class="x_panel">
          <div class="x_title">
            <h2>Tugas dan Jadwal</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Settings 1</a>
                    <a class="dropdown-item" href="#">Settings 2</a>
                  </div>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
              Add content to the page ...
          </div>
        </div>
      </div>

    </div>        
  </div>
@endsection
