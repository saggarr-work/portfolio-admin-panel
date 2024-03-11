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
            
            @if (Session::has('msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span>{{ Session('msg') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span>{{ Session('error') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

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
                                <td>
                                    <a href="{{ $header->githubLink }}" target="blank">{{ $header->githubLink }}</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Facebook Link: </th>
                                <td>
                                    <a href="{{ $header->facebookLink }}" target="blank">{{ $header->facebookLink }}</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Instagram Link: </th>
                                <td>
                                    <a href="{{ $header->instagramLink }}" target="blank">{{ $header->instagramLink }}</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Whatsapp Link: </th>
                                <td>
                                    <a href="{{ $header->whatsappLink }}" target="blank">{{ $header->whatsappLink }}</a>
                                </td>
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
