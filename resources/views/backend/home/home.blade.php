@extends('backend.master')

@section('title')
    Home
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div
                        class="card bg-{{ $countFieldOfService <= 2 ? 'danger' : ($countFieldOfService > 2 && $countFieldOfService <= 4 ? 'warning' : ($countFieldOfService >= 5 ? 'success' : '')) }} text-white mb-4">
                        <div class="card-body">Total Field of Service</div>
                        <div class="card-body">{{ $countFieldOfService }}</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('manage.service') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div
                        class="card bg-{{ $countPortfolio <= 4 ? 'danger' : ($countPortfolio > 4 && $countPortfolio <= 8 ? 'warning' : ($countPortfolio >= 9 ? 'success' : '')) }} text-white mb-4">
                        <div class="card-body">Total Portfolio</div>
                        <div class="card-body">{{ $countPortfolio }}</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('manage.portfolio') }}">View
                                Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div
                        class="card bg-{{ $countPortfolio <= 2 ? 'danger' : ($countTestimonial > 2 && $countTestimonial <= 4 ? 'warning' : ($countTestimonial >= 5 ? 'success' : '')) }} text-white mb-4">
                        <div class="card-body">Total Testimonial</div>
                        <div class="card-body">{{ $countTestimonial }}</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('manage.testimonial') }}">View
                                Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
