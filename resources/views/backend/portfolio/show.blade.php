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
                                <td>{!! $portfolio->title !!}</td>
                            </tr>
                            <tr>
                                <th>Github Link: </th>
                                <td>
                                    <a href="{{ $portfolio->githubLink }}" target="blank">{{ $portfolio->githubLink }}</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Live Demo: </th>
                                <td>
                                    <a href="{{ $portfolio->liveDemo }}" target="blank">{{ $portfolio->liveDemo }}</a>
                                </td>
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
