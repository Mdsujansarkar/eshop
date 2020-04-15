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
                                    <th>Product Name</th>
                                    <th>Product Long Description</th>
                                    <th>Product Short Description</th>
                                    <th>Product Image</th>
                                    <th>Product Price</th>
                                    <th>Product Quantity</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Product Name</th>
                                    <th>Product Long Description</th>
                                    <th>Product Short Description</th>
                                    <th>Product Image</th>
                                    <th>Product Price</th>
                                    <th>Product Quantity</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            @php( $i = 0)
                                @foreach( $products as $product)
                                <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $product               -> product_name }}</td>
                                <td>{{ $product               -> product_long_desc }}</td>
                                <td>{{ $product               -> product_short_desc }}</td>
                                <td>
                                <img src="{{asset( $product   ->product_image )}}" height="100" width="100" />
                                </td>
                                <td>{{ $product               -> product_price }}</td>
                                <td>{{ $product               -> product_quantity }}</td>
                                <td>{{ $product               -> publication_status == 1 ? 'Publish' : 'Unpublish' }}</td>
                                <td>
                                        @if( $product         -> publication_status == 1 )
                                        <button class="btn btn-outline-primary"> <a href="{{ route( 'unpublish-product', [ 'id' => $product -> id ] ) }}"><i class="fas fa-chevron-up"></i></a></button>
                                        @else
                                        <button class="btn btn-outline-success"><a href="{{ route( 'publish-product',   [ 'id' => $product -> id ] ) }}"><i class="fas fa-chevron-down"></i></a></button>
                                        @endif
                                        <button class="btn btn-outline-warning"><a href="{{ route( 'edit-product',     [ 'id' => $product -> id ] ) }}"><i class="far fa-edit"></i></a></button>
                                        <button class="btn btn-outline-danger"><a href="{{ route(  'delete-product',   [ 'id' => $product -> id ] ) }}"><i class="far fa-trash-alt"></i></a></button>
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