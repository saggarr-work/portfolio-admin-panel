@extends('backend.master')

@section('title')
    Edit Service Details
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Service Details</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit Service Details</li>
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
                <form class="row g-3" action="{{route('update.details.service', ['id' => $serviceDetail->id])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-6">
                        <label for="select_service" class="form-label">Select Service</label>
                        <select class="form-select" name="service_id" aria-label="Default select example">
                            <option disabled>Select Service</option>
                            @foreach ($services as $ser)
                                <option {{$serviceDetail->service_id == $ser->id ? 'selected' : ''}} value="{{$ser->id}}">{{$ser->fieldOfService}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">{{ $errors->has('service_id') ? $errors->first('service_id') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="heading" class="form-label">Heading</label>
                        <input type="text" name="heading" class="form-control" id="heading" value="{{$serviceDetail->heading}}" required>
                        <span class="text-danger">{{ $errors->has('heading') ? $errors->first('heading') : '' }}</span>
                    </div>
                    <div class="col-md-12">
                        <label for="details" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="summernote">{{$serviceDetail->description}}</textarea>
                        <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : '' }}</span>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Update Service Details</button>
                        <a class="btn btn-danger" href="{{ route('manage.details.service') }}">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
