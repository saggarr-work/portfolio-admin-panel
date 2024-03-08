@extends('backend.master')

@section('title')
    Edit Service
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Service</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit Service</li>
            </ol>
            <div class="text-success text-center">{{ Session('msg') }}</div>
            <div class="text-danger text-center">{{ Session('error') }}</div>
            <div class="row">
                <form class="row g-3" action="{{ route('update.service', ['id' => $service->id]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-6">
                        <label for="field_of_service" class="form-label">Field of Service</label>
                        <input type="text" name="fieldOfService" class="form-control" id="field_of_service"
                            value="{{ $service->fieldOfService }}" required>
                            <span class="text-danger">{{ $errors->has('fieldOfService') ? $errors->first('fieldOfService') : '' }}</span>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Update Service</button>
                        <a class="btn btn-danger" href="{{ route('manage.service') }}">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
