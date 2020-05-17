@extends('backend.master')
@section('home')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example</div>
                <h3>{{ Session::get('message')}}</h3>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Brand Name</th>
                                    <th>Brand Description</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Brand Name</th>
                                    <th>Brand Description</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @php( $i = 0)
                                @foreach( $brands as $brand)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $brand -> brand_name }}</td>
                                    <td>{{ $brand -> brand_description }}</td>
                                    <td>{{ $brand -> publication_status == 1 ? 'Publish' : 'Unpublish' }}</td>
                                    <td>
                                        @if( $brand -> publication_status == 1 )
                                        <button class="btn btn-outline-primary">
                                            <a href="{{ route('unpublish-brand', [ 'id' => $brand -> id ] ) }}">
                                                <i class="fas fa-chevron-up"></i>
                                            </a>
                                        </button>
                                        @else
                                        <button class="btn btn-outline-success">
                                            <a href="{{ route('publish-brand',   [ 'id' => $brand -> id ] ) }}">
                                                <i class="fas fa-chevron-down"></i>
                                            </a>
                                        </button>
                                        @endif
                                        <button class="btn btn-outline-warning">
                                            <a href="{{ route('edit-brand',      [ 'id' => $brand -> id ] ) }}">
                                                <i class="far fa-edit"></i>
                                            </a>
                                        </button>

                                        <button class="btn btn-outline-danger">
                                            <a href="{{ route('delete-brand',     [ 'id' => $brand -> id ] ) }}">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </button>

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