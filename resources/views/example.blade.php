@extends('admin_template')

@section('content')

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Hover Data Table</h3>
        </div>
        <div class="box-body">
          <div>
              <a href="{{ url('/datatables/add') }}" class="btn btn-xs btn-primary">
              <i class="fa fa-plus-circle"></i> Add</a>
          </div>
          <br>
          <table class="table table-bordered table-hover" id="users-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Updated At</th>
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
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'aaa', name: 'bbb' },
            { data: 'bbb', name: 'bbb' },
            { data: 'ccc', name: 'cc' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });
});
</script>
@endpush