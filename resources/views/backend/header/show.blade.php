@extends('backend.master')

@section('title')
    Show Header
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Header/Footer</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Show Infoes</li>
            </ol>
            <div class="text-success text-center">{{ Session('msg') }}</div>
            <div class="text-danger text-center">{{ Session('error') }}</div>
            <div class="row">
                <div class="card mb-4">
                    <div class="card-header mt-2">
                        <i class="fas fa-table me-1"></i>
                        Showing Header & Footer Info
                    </div>
                    <div class="card-body">
                        <table id="" class="table table-hover">
                            <tr>
                                <th>Name: </th>
                                <td>{{ $header->fullName }}</td>
                            </tr>
                            <tr>
                                <th>Designation: </th>
                                <td>{{ $header->designation }}</td>
                            </tr>
                            <tr>
                                <th>CV: </th>
                                <td>
                                    <embed src="{{ asset($header->cv) }}" width="50px" height="50px" alt="header_cv">
                                </td>
                            </tr>
                            <tr>
                                <th>Photo: </th>
                                <td>
                                    <img src="{{ asset($header->photo) }}" width="50px" height="50px" alt="header_photo">
                                </td>
                            </tr>
                            <tr>
                                <th>Github Link: </th>
                                <td>{{ $header->githubLink }}</td>
                            </tr>
                            <tr>
                                <th>Facebook Link: </th>
                                <td>{{ $header->facebookLink }}</td>
                            </tr>
                            <tr>
                                <th>Instagram Link: </th>
                                <td>{{ $header->instagramLink }}</td>
                            </tr>
                            <tr>
                                <th>Whatsapp Link: </th>
                                <td>{{ $header->whatsappLink }}</td>
                            </tr>
                        </table>
                        <a href="{{ route('manage.header') }}" type="button" class="btn btn-success">Go
                            Back</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
