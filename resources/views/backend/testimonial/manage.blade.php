@extends('backend.master')

@section('title')
    Manage testimonials
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Testimonials</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Manage testimonials</li>
            </ol>
            <div class="text-success">{{ Session('msg') }}</div>
            <div class="text-danger">{{ Session('error') }}</div>
            <div class="row">
                <div class="card mb-4">
                    <div class="card-header mt-2">
                        <i class="fas fa-table me-1"></i>
                        Manage testimonial data
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Avatar</th>
                                    <th>Review</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonials as $testimonial)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $testimonial->name }}</td>
                                        <td>
                                            <img src="{{ asset($testimonial->avatar) }}" height="50px" width="50px"
                                                alt="testimonial_avatar">
                                        </td>
                                        <td>{{ substr($testimonial->review, 0, 10) }}...</td>
                                        <td>
                                            <a class="btn btn-success"
                                                href="{{ route('edit.testimonial', ['id' => $testimonial->id]) }}">Edit</a>
                                            <a class="btn btn-primary"
                                                href="{{ route('show.testimonial', ['id' => $testimonial->id]) }}">view</a>
                                            <form action="{{route('delete.testimonial', ['id' => $testimonial->id])}}" method="POST">
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
