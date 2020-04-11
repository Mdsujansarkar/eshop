<!-- php artisan make:controller categoryController
php artisan make:migration creat_categories_table --create=categories
php artisan make:model Category -m
php artisan migrate -->
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
                                    <th>Category Name</th>
                                    <th>Category Description</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Category Name</th>
                                    <th>Category Description</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @php( $i = 0)
                                @foreach( $categories as $category)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $category -> category_name }}</td>
                                    <td>{{ $category -> category_description }}</td>
                                    <td>{{ $category -> publication_status == 1 ? 'Publish' : 'Unpublish' }}</td>
                                    <td>
                                        @if( $category -> publication_status == 1 )
                                        <button class="btn btn-outline-primary"><a href="{{ route('unpublish-category', [ 'id' => $category -> id ] ) }}"><i class="fas fa-chevron-up"></i></a></button>
                                        @else
                                        <button class="btn btn-outline-success"><a href="{{ route('publish-category',   [ 'id' => $category -> id ] ) }}"><i class="fas fa-chevron-down"></i></a></button>
                                        @endif
                                        <button class="btn btn-outline-warning"><a href="{{ route('edit-category',      [ 'id' => $category -> id ] ) }}"><i class="far fa-edit"></i></a></button>

                                        <button class="btn btn-outline-danger"><a href="{{ route('delete-category',     [ 'id' => $category -> id ] ) }}"><i class="far fa-trash-alt"></i></a></button>

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