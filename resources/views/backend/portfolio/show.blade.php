@extends('backend.master')

@section('title')
    Show Portfolio
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Portfolio</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Show Portfolio</li>
            </ol>
            <div class="text-success text-center">{{ Session('msg') }}</div>
            <div class="text-danger text-center">{{ Session('error') }}</div>
            <div class="row">
                <div class="card mb-4">
                    <div class="card-header mt-2">
                        <i class="fas fa-table me-1"></i>
                        Showing Portfolio Info
                    </div>
                    <div class="card-body">
                        <table id="" class="table table-hover">
                            <tr>
                                <th>Thumbnail: </th>
                                <td>
                                    <img src="{{ asset($portfolio->thumbnail) }}" height="50px" width="50px"
                                        alt="portfolio_thumbnail">
                                </td>
                            </tr>
                            <tr>
                                <th>Title: </th>
                                <td>{{ $portfolio->title }}</td>
                            </tr>
                            <tr>
                                <th>Github Link: </th>
                                <td>{{ $portfolio->githubLink }}</td>
                            </tr>
                            <tr>
                                <th>Live Demo: </th>
                                <td>{{ $portfolio->liveDemo }}</td>
                            </tr>
                        </table>
                        <a href="{{ route('manage.portfolio') }}" type="button" class="btn btn-success">Go
                            Back</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
