@extends('admin_template')

@section('content')

  <div class="row">
    <div class="col-xs-12">
      <div class="box box-info">
        <div class="box-header">
          <h3 class="box-title">{{ $head_title or "Head Title" }}</h3>
        </div>
        <div class="box-body">
          <div>
              <a href="{{ url('/master/wilayah/add') }}" class="btn btn-xs btn-primary">
              <i class="fa fa-plus-circle"></i> Add</a>
          </div>
          <br>
          <table class="table table-bordered table-hover" id="wilayah-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama Wilayah</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection

@push('scripts')
<script>
$(function() {
    $('#wilayah-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('wilayah.data') !!}',
        columns: [
            { data: 'regions_id', name: 'regions_id' },
            { data: 'regions_name', name: 'regions_name' },
            { data: 'image', name: 'image' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ],
        columnDefs: [
             { "visible": false, "targets": 0 }
        ]
    });
});
</script>
@endpush