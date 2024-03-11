@extends('backend.master')

@section('title')
    Show Testimonial
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Testimonial</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Show Testimonial</li>
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
                        Showing Testimonial Info
                    </div>
                    <div class="card-body">
                        <table id="" class="table table-hover">
                            <tr>
                                <th>Name: </th>
                                <td>{{$testimonial->name}}</td>
                            </tr>
                            <tr>
                                <th>Avatar: </th>
                                <td>
                                    <img src="{{asset($testimonial->avatar)}}" height="50px" width="50px" alt="testimonial_avatar">
                                </td>
                            </tr>
                            <tr>
                                <th>Review: </th>
                                <td>{!! $testimonial->review !!}</td>
                            </tr>
                        </table>
                        <a href="{{ route('manage.testimonial') }}" type="button" class="btn btn-success">Go
                            Back</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
