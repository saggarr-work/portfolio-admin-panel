@extends('backend.master')

@section('title')
    Show About Info
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Header</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Show About</li>
            </ol>
            <div class="text-success text-center">{{ Session('msg') }}</div>
            <div class="text-danger text-center">{{ Session('error') }}</div>
            <div class="row">
                <div class="card mb-4">
                    <div class="card-header mt-2">
                        <i class="fas fa-table me-1"></i>
                        Showing About Info
                    </div>
                    <div class="card-body">
                        <table id="" class="table table-hover">
                            <tr>
                                <th>Total Years of Experience: </th>
                                <td>{{ $about->experience }} Years</td>
                            </tr>
                            <tr>
                                <th>Total Clients: </th>
                                <td>{{ $about->client }} Clients</td>
                            </tr>
                            <tr>
                                <th>Total Projects: </th>
                                <td>{{ $about->project }} Projects</td>
                            </tr>
                            <tr>
                                <th>Photo: </th>
                                <td>
                                    <img src="{{ asset($about->photo) }}" width="50px" height="50px" alt="about_photo">
                                </td>
                            </tr>
                            <tr>
                                <th>Description: </th>
                                <td>{!! $about->description !!}</td>
                            </tr>
                        </table>
                        <a href="{{ route('manage.about') }}" type="button" class="btn btn-success">Go
                            Back</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
