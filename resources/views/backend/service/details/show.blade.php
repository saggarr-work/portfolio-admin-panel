@extends('backend.master')

@section('title')
    Show Service Details
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Service</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Show Service Details</li>
            </ol>
            <div class="text-success text-center">{{ Session('msg') }}</div>
            <div class="text-danger text-center">{{ Session('error') }}</div>
            <div class="row">
                <div class="card mb-4">
                    <div class="card-header mt-2">
                        <i class="fas fa-table me-1"></i>
                        Showing Service Info
                    </div>
                    <div class="card-body">
                        <table id="" class="table table-hover">
                            {{-- <tr>
                                <th>SL: </th>
                                <td>{{ $serviceDetail->id }}</td>
                            </tr> --}}
                            <tr>
                                <th>Field Of Service: </th>
                                <td>{{ $serviceDetail->service->fieldOfService }}</td>
                            </tr>
                            <tr>
                                <th>Heading: </th>
                                <td>{{ $serviceDetail->heading }}</td>
                            </tr>
                            <tr>
                                <th>Description: </th>
                                <td>{{ $serviceDetail->description }}</td>
                            </tr>
                        </table>
                        <a href="{{ route('manage.details.service') }}" type="button" class="btn btn-success">Go
                            Back</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
