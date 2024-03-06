@extends('backend.master')

@section('title')
    Add Service Details
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Service Details</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Add Service Details</li>
            </ol>
            <div class="text-success text-center">{{ Session('msg') }}</div>
            <div class="text-danger text-center">{{ Session('error') }}</div>
            <div class="row">
                <form class="row g-3" action="{{ route('add.details.service') }}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="select_service" class="form-label">Select Service</label>
                        <select class="form-select" name="service_id" aria-label="Default select example">
                            <option selected disabled>Select Service</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->fieldOfService }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="heading" class="form-label">Heading</label>
                        <input type="text" name="heading" class="form-control" id="heading" value="" required>
                    </div>
                    <div class="col-md-12">
                        <label for="details" class="form-label">Description</label>
                        <textarea class="form-control" name="description" placeholder="Write some words about given service" id="details"
                            style="height: 100px" required></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Add Service Details</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
