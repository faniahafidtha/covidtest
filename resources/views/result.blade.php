@extends('layouts.app')

@section('content')
<br>

<div class="row" style="text-align: center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3><strong>Hasil Survey</strong></h3>
            </div>
        </div>
    </div>
   <br>
    <div class="row" style="text-align: center;">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total Jawaban "Ya" : </strong>
                <strong><label id="yes">{{ $survey->yes }}</label></strong>
            </div>
        </div>

        @if($survey->yes>-1 & $survey->yes<8)         
               <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Resiko Terkena Corona : </strong>
                      <strong><label id="status">Rendah</label></strong>
                  </div>
              </div>     
        @elseif($survey->yes>7 & $survey->yes<15)
              <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Resiko Terkena Corona : </strong>
                       <strong><label id="status">Sedang</label></strong>
                    </div>
                </div>     
        @else
            <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Resiko Terkena Corona : </strong>
                      </strong><label id="status">Tinggi</label></strong>
                  </div>
              </div>
        @endif

      

    </div>
@endsection

