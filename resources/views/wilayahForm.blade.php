@extends('admin_template')

@section('content')
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">{{ $head_title or "Head Title" }}</h3>
            </div>
            <form class="form-horizontal" name="formWilayah" method="post" action="{{ url($url) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <input type="hidden" id="regions_id" name="regions_id"  value="{{ isset($regions_id) ? $regions_id : '' }}"/>
              <div class="box-body">
                <div class="form-group">
                  <label for="regions_name" class="col-sm-2 control-label">Nama Wilayah</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="regions_name" name="regions_name" placeholder="Nama Wilayah" value="{{ isset($regions_name) ? $regions_name : '' }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="image" class="col-sm-2 control-label">Image Wilayah</label>
                  <div class="col-sm-5">
                    <input type="file" id="image" name="image">
                    <p class="help-block">
                      {{ isset($image) ? 'Current file : ' . $image : 'Example : picture.jpg, picture.jpeg or picture.png .' }}
                    </p>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <center>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class="btn btn-danger" href="{{ url('master/wilayah') }}">Cancel</a>
                  <center><b>{{ Session::get('message') }}</b></center>
                </center>
              </div>
            </form>
          </div>
    </div>
  </div>
@endsection

@push('scripts')
<script>
$(function() {
    
});
</script>
@endpush