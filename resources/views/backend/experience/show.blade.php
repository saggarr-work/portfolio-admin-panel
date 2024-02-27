@extends('backend.master')

@section('title')
    Show experience Info
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Experience</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Show Experience</li>
            </ol>
            <div class="row">
                <div class="card mb-4">
                    <div class="card-header mt-2">
                        <i class="fas fa-table me-1"></i>
                        Showing Experience & details
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Experience</th>
                                    <th>Language or Tools</th>
                                    <th>Level of Experience</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Frontend</td>
                                    <td>Html</td>
                                    <td>Experienced</td>
                                    <td>
                                        <button class="btn btn-success">Edit</button>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Frontend</td>
                                    <td>CSS</td>
                                    <td>Basic</td>
                                    <td>
                                        <button class="btn btn-success">Edit</button>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Backend</td>
                                    <td>PHP</td>
                                    <td>Experienced</td>
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
