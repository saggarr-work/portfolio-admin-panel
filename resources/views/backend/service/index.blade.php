@extends('backend.master')

@section('title')
    Add Service
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Service</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Add Service</li>
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
                <form class="row g-3" action="{{ route('add.service') }}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="field_of_service" class="form-label">Field of Service</label><span class="text-danger"><b> * </b></span>
                        <input type="text" name="fieldOfService" class="form-control" id="field_of_service" value="" required>
                        <span class="text-danger">{{ $errors->has('fieldOfService') ? $errors->first('fieldOfService') : '' }}</span>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Add Service</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
