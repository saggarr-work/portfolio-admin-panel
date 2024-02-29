@extends('backend.master')

@section('title')
    Manage Service Details
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Service Details</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Manage Service Details</li>
            </ol>
            <div class="row">
                <div class="card mb-4">
                    <div class="card-header mt-2">
                        <i class="fas fa-table me-1"></i>
                        Manage Service Details
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Field of Service</th>
                                    <th>Heading</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($serviceDetails as $serviceDetail)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$serviceDetail->service->fieldOfService}}</td>
                                        <td>{{$serviceDetail->heading}}</td>
                                        <td>{{substr($serviceDetail->description, 0, 10)}}...</td>
                                        <td>
                                            <a class="btn btn-success" href="{{route('edit.details.service', ['id' => $serviceDetail->id])}}">Edit</a>
                                            <a class="btn btn-primary" href="{{route('show.details.service', ['id' => $serviceDetail->id])}}">Show</a>
                                            <form action="{{route('delete.details.service', ['id' => $serviceDetail->id])}}" method="POST">
                                                @csrf
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
