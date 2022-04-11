@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('employee_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.employees.create') }}">
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
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Employee">
                            <thead>
                                <tr>
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
                            <tbody>
                                @foreach($employees as $key => $employee)
                                    <tr data-entry-id="{{ $employee->id }}">
                                        <td>
                                            {{ $employee->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $employee->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $employee->email ?? '' }}
                                        </td>
                                        <td>
                                            {{ $employee->phone ?? '' }}
                                        </td>
                                        <td>
                                            {{ $employee->working_name ?? '' }}
                                        </td>
                                        <td>
                                            <span style="display:none">{{ $employee->working_days ?? '' }}</span>
                                            <input type="checkbox" disabled="disabled" {{ $employee->working_days ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            {{ $employee->from ?? '' }}
                                        </td>
                                        <td>
                                            {{ $employee->to ?? '' }}
                                        </td>
                                        <td>
                                            <span style="display:none">{{ $employee->working_days_1 ?? '' }}</span>
                                            <input type="checkbox" disabled="disabled" {{ $employee->working_days_1 ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            {{ $employee->from_1 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $employee->to_1 ?? '' }}
                                        </td>
                                        <td>
                                            <span style="display:none">{{ $employee->working_days_2 ?? '' }}</span>
                                            <input type="checkbox" disabled="disabled" {{ $employee->working_days_2 ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            {{ $employee->from_2 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $employee->to_3 ?? '' }}
                                        </td>
                                        <td>
                                            <span style="display:none">{{ $employee->working_day_3 ?? '' }}</span>
                                            <input type="checkbox" disabled="disabled" {{ $employee->working_day_3 ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            {{ $employee->from_3 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $employee->to_4 ?? '' }}
                                        </td>
                                        <td>
                                            <span style="display:none">{{ $employee->working_days_4 ?? '' }}</span>
                                            <input type="checkbox" disabled="disabled" {{ $employee->working_days_4 ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            {{ $employee->from_4 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $employee->to_5 ?? '' }}
                                        </td>
                                        <td>
                                            <span style="display:none">{{ $employee->working_days_5 ?? '' }}</span>
                                            <input type="checkbox" disabled="disabled" {{ $employee->working_days_5 ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            {{ $employee->from_5 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $employee->to_6 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $employee->salary ?? '' }}
                                        </td>
                                        <td>
                                            {{ $employee->contract_percentage ?? '' }}
                                        </td>
                                        <td>
                                            {{ $employee->commission ?? '' }}
                                        </td>
                                        <td>
                                            @can('employee_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.employees.show', $employee->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('employee_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.employees.edit', $employee->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('employee_delete')
                                                <form action="{{ route('frontend.employees.destroy', $employee->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>
                                            @endcan

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('employee_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.employees.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
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

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Employee:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection