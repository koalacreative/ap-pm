@extends('admin_template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Form Dosen</div>
                <div class="panel-body">
                    <form class="form-horizontal" name="formDosen" method="post" action="{{ url($url) }}">
                      <div class="box-body">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="col-sm-3 control-label" for="kode">Kode Dosen</label>
                            <div class="col-sm-7">
                              {{ csrf_field() }}
                              <input id="user_id" name="user_id" class="form-control" value="{{ isset($user_id) ? $user_id : '' }}" type="hidden">
                              <input id="kode" name="kode" class="form-control" type="text" value="{{ isset($kode) ? $kode : '' }}" placeholder="Kode Dosen">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Nama</label>
                            <div class="col-sm-7">
                              <input id="name" name="name" class="form-control" type="text" value="{{ isset($name) ? $name : '' }}" placeholder="Nama">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="col-sm-3 control-label" for="address">Alamat</label>
                            <div class="col-sm-7">
                                <textarea id="address" name="address" class="form-control">{{ isset($address) ? $address : '' }}</textarea>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="col-sm-3 control-label" for="email">Email</label>
                            <div class="col-sm-7">
                              <input id="email" name="email" class="form-control" type="text" value="{{ isset($email) ? $email : '' }}" placeholder="Email">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="col-sm-3 control-label" for="phone">No. Hp</label>
                            <div class="col-sm-7">
                                <input id="phone" name="phone" class="form-control" type="text" value="{{ isset($phone) ? $phone : '' }}" placeholder="No. HP">
                            </div>
                          </div>
                        </div>
                       </div>
                      <div class="box-footer">
                        <div class="col-md-6">
                          <input class="btn btn-primary pull-right" type="submit" value="Process"></input>
                        </div>
                        <div class="col-md-6">
                          <a class="btn btn-danger pull-left" href="{{ url('/dosen') }}">Cancel</a>
                        </div>
                        <div class="col-md-12">
                            <center><b>{{ Session::get('message') }}</b></center>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
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