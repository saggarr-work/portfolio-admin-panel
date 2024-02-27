@extends('backend.master')

@section('title')
    Show header Info
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Header</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Show Header</li>
            </ol>
            <div class="row">
                <div class="card mb-4">
                    <div class="card-header mt-2">
                        <i class="fas fa-table me-1"></i>
                        Showing Header & Footer Info
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Full Name</th>
                                    <th>Designation</th>
                                    <th>CV</th>
                                    <th>Photo</th>
                                    <th>Github Link</th>
                                    <th>Facebook Link</th>
                                    <th>instagram Link</th>
                                    <th>whatsapp Link</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Sagar Biswas</td>
                                    <td>Web Developer</td>
                                    <td>cv.pdf</td>
                                    <td>img.jpg</td>
                                    <td>www.github.afsfsdfsdf</td>
                                    <td>www.facebook.afsfsdfsdf</td>
                                    <td>www.instagram.afsfsdfsdf</td>
                                    <td>www.whatsapp.afsfsdfsdf</td>
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
