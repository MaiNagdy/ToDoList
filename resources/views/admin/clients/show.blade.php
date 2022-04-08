@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.client.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.clients.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.id') }}
                        </th>
                        <td>
                            {{ $client->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.written_at') }}
                        </th>
                        <td>
                            {{ $client->written_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.name') }}
                        </th>
                        <td>
                            {{ $client->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.telephone') }}
                        </th>
                        <td>
                            {{ $client->telephone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.address') }}
                        </th>
                        <td>
                            {{ $client->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.course_required') }}
                        </th>
                        <td>
                            {{ App\Models\Client::COURSE_REQUIRED_RADIO[$client->course_required] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.required_training') }}
                        </th>
                        <td>
                            {{ $client->required_training }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.number_of_days') }}
                        </th>
                        <td>
                            {{ $client->number_of_days }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.amount_paid') }}
                        </th>
                        <td>
                            {{ $client->amount_paid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.remainig_amount') }}
                        </th>
                        <td>
                            {{ $client->remainig_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.amount_total') }}
                        </th>
                        <td>
                            {{ $client->amount_total }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.learn_before') }}
                        </th>
                        <td>
                            {{ App\Models\Client::LEARN_BEFORE_RADIO[$client->learn_before] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.where') }}
                        </th>
                        <td>
                            {{ $client->where }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.how_you_know_us') }}
                        </th>
                        <td>
                            {{ $client->how_you_know_us }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.contract') }}
                        </th>
                        <td>
                            {{ $client->contract }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.clients.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#client_reservations" role="tab" data-toggle="tab">
                {{ trans('cruds.reservation.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#client_incomes" role="tab" data-toggle="tab">
                {{ trans('cruds.income.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="client_reservations">
            @includeIf('admin.clients.relationships.clientReservations', ['reservations' => $client->clientReservations])
        </div>
        <div class="tab-pane" role="tabpanel" id="client_incomes">
            @includeIf('admin.clients.relationships.clientIncomes', ['incomes' => $client->clientIncomes])
        </div>
    </div>
</div>

@endsection