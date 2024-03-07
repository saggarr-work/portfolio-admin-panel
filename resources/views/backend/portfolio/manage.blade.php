@extends('backend.master')

@section('title')
    Manage Portfolio
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Portfolio</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Manage Portfolio</li>
            </ol>
            <div class="text-success text-center">{{ Session('msg') }}</div>
            <div class="text-danger text-center">{{ Session('error') }}</div>
            <div class="row mt-3">
                <div class="card mb-4">
                    <div class="card-header mt-2">
                        <i class="fas fa-table me-1"></i>
                        Manage portfolio data
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Image/Thumbnail</th>
                                    <th>Title</th>
                                    <th>Github Link</th>
                                    <th>Live Demo</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portfolios as $portfolio)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset($portfolio->thumbnail) }}" height="50px" width="50px"
                                                alt="portfolio_thumbnail">
                                        </td>
                                        <td>{!! substr($portfolio->title, 0, 10) !!}...</td>
                                        <td>{{ $portfolio->githubLink }}</td>
                                        <td>{{ $portfolio->liveDemo }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a class="btn btn-success"
                                                    href="{{ route('edit.portfolio', ['id' => $portfolio->id]) }}">Edit</a>
                                                <a class="btn btn-primary ms-2"
                                                    href="{{ route('show.portfolio', ['id' => $portfolio->id]) }}">View</a>
                                                <form action="{{ route('delete.portfolio', ['id' => $portfolio->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button class="btn btn-danger ms-2" onclick="return confirm('Delete this portfolio ?')">Delete</button>
                                                </form>
                                            </div>
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
