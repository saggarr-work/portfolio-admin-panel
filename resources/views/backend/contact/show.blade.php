@extends('backend.master')

@section('title')
    Show Contact Info
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Contact</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Show Contact</li>
            </ol>
            <div class="row">
                <div class="card mb-4">
                    <div class="card-header mt-2">
                        <i class="fas fa-table me-1"></i>
                        Showing data of contact info
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Email Address</th>
                                    <th>Direct Email</th>
                                    <th>Messenger Username</th>
                                    <th>Direct Messenger</th>
                                    <th>Whatsapp Username</th>
                                    <th>Direct Whatsapp</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>sagar@gmail.com</td>
                                    <td>email.me.aslfsfsolfjsf</td>
                                    <td>sagar biswas</td>
                                    <td>messenger.me.safgdsfssf</td>
                                    <td>sagar biswas</td>
                                    <td>whatsapp.me.sfsfsf</td>
                                    <td>
                                        <button class="btn btn-success">Edit</button>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        {{-- <table id="datatablesSimple">
                            <tr>
                                <th>Email Username:</th>
                                <td class="ps-3">sddfsfdsf</td>
                            </tr>
                            <tr>
                                <th>Direct Email Link:</th>
                                <td class="ps-3">sdffd sdffd sdffdsdffd sdffd sdffdsdffd sdffd sdffdsdffd sdffd sdffdsdffd
                                    sdffd sdffdsdffd sdffd sdffdsdffd sdffd sdffdsdffd sdffd sdffdsdffd sdffd sdffd</td>
                            </tr>
                            <tr>
                                <th>Messenger Username:</th>
                                <td class="ps-3">sddfsfdsf</td>
                            </tr>
                            <tr>
                                <th>Direct Messenger Link:</th>
                                <td class="ps-3">sdffd sdffd sdffdsdffd sdffd sdffdsdffd sdffd sdffdsdffd sdffd sdffdsdffd
                                    sdffd sdffdsdffd sdffd sdffdsdffd sdffd sdffdsdffd sdffd sdffdsdffd sdffd sdffd</td>
                            </tr>
                            <tr>
                                <th>Whatsapp Username:</th>
                                <td class="ps-3">sddfsfdsf</td>
                            </tr>
                            <tr>
                                <th>Direct Whatsapp Link:</th>
                                <td class="ps-3">sdffd sdffd sdffdsdffd sdffd sdffdsdffd sdffd sdffdsdffd sdffd sdffdsdffd
                                    sdffd sdffdsdffd sdffd sdffdsdffd sdffd sdffdsdffd sdffd sdffdsdffd sdffd sdffd</td>
                            </tr>
                            <tr>
                                <th>Actions</th>
                                <td class="ps-3">
                                    <button class="btn btn-success">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        </table> --}}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
