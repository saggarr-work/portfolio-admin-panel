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
            <div class="text-success text-center">{{ Session('msg') }}</div>
            <div class="text-danger text-center">{{ Session('error') }}</div>
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
                                <td>{{ $testimonial->review }}</td>
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
