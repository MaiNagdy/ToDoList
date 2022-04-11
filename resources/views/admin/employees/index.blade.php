@extends('layouts.admin')
@section('content')
@can('employee_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.employees.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.employee.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.employee.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Employee">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.email') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.phone') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.working_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.working_days') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.from') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.to') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.working_days_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.from_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.to_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.working_days_2') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.from_2') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.to_3') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.working_day_3') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.from_3') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.to_4') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.working_days_4') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.from_4') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.to_5') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.working_days_5') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.from_5') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.to_6') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.salary') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.contract_percentage') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.commission') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('employee_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.employees.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.employees.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'name', name: 'name' },
{ data: 'email', name: 'email' },
{ data: 'phone', name: 'phone' },
{ data: 'working_name', name: 'working_name' },
{ data: 'working_days', name: 'working_days' },
{ data: 'from', name: 'from' },
{ data: 'to', name: 'to' },
{ data: 'working_days_1', name: 'working_days_1' },
{ data: 'from_1', name: 'from_1' },
{ data: 'to_1', name: 'to_1' },
{ data: 'working_days_2', name: 'working_days_2' },
{ data: 'from_2', name: 'from_2' },
{ data: 'to_3', name: 'to_3' },
{ data: 'working_day_3', name: 'working_day_3' },
{ data: 'from_3', name: 'from_3' },
{ data: 'to_4', name: 'to_4' },
{ data: 'working_days_4', name: 'working_days_4' },
{ data: 'from_4', name: 'from_4' },
{ data: 'to_5', name: 'to_5' },
{ data: 'working_days_5', name: 'working_days_5' },
{ data: 'from_5', name: 'from_5' },
{ data: 'to_6', name: 'to_6' },
{ data: 'salary', name: 'salary' },
{ data: 'contract_percentage', name: 'contract_percentage' },
{ data: 'commission', name: 'commission' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-Employee').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection