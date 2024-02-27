@extends('backend.master')

@section('title')
    Show service Info
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Service</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Show Service</li>
            </ol>
            <div class="row">
                <div class="card mb-4">
                    <div class="card-header mt-2">
                        <i class="fas fa-table me-1"></i>
                        Showing service data
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Service</th>
                                    <th>Heading</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Frontend</td>
                                    <td>Responsive</td>
                                    <td>I offer exactly pixel perfect and responsive design</td>
                                    <td>
                                        <button class="btn btn-success">Edit</button>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Frontend</td>
                                    <td>unique design</td>
                                    <td>i offer unique ui ux design</td>
                                    <td>
                                        <button class="btn btn-success">Edit</button>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Backend</td>
                                    <td>database</td>
                                    <td>i offer database design </td>
                                    <td>
                                        <button class="btn btn-success">Edit</button>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
