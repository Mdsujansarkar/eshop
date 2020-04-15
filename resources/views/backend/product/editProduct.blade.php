@extends('backend.master')
@section('home')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <form class="form-horizontal"  action="{{ route( 'update-product' )}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                    <!-- Form Name -->
                    <legend>PRODUCTS</legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_id">Product Name:</label>
                        <div class="col-md-4">
                            <input id="product_name" name="product_name" value="{{ $product->product_name}}" placeholder="Product Name" class="form-control input-md" required="" type="text">
                        </div>
                    </div>
                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_categorie">Select Category</label>
                        <div class="col-md-4">
                            <select id="product_categorie" name="category_id" class="form-control">
                                     <option value="">Select Category</option>
                                @foreach ( $categories as $category)
                                     <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_brand">Select Brand</label>
                        <div class="col-md-4">
                            <select id="product_brand" name="brand_id" class="form-control">
                                <option value="">Select Brands</option>
                                @foreach ( $brands as $brand)
                                     <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_price">Product Price</label>
                        <div class="col-md-4">
                            <input id="product_price" value="{{ $product->product_price}}" name="product_price" placeholder="Product Price" class="form-control input-md" required="" type="text">
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_quantity">Product Quantity</label>
                        <div class="col-md-4">
                            <input id="product_quantity" value="{{ $product->product_quantity}}" name="product_quantity" placeholder="Product Quantity" class="form-control input-md" required="" type="number">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_short_description">Product Short Description </label>
                        <div class="col-md-4">
                            <textarea id="product_short_description" name="product_short_desc" placeholder="Product Short Description" class="form-control input-md" required="">{{ $product->product_short_desc}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_long_description">Product Long Description </label>
                        <div class="col-md-4">
                            <textarea id="product_long_description" name="product_long_desc" placeholder="Product Long Description" class="form-control input-md" required="" >{{ $product->product_long_desc}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                                <label class="col-md-4 control-label" for="filebutton">Main Image</label>
                                <div class="col-md-4">
                                    <input id="filebutton" name="product_image" class="input-file" type="file">
                                </div>
                    </div>
                        <div class="form-group">
                             <label class="col-md-4 control-label" for="product_name_fr">Publication Status</label>
                                <div class="col-md-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="publication_status" {{ $category ->publication_status== 1 ? 'checked' : '' }} value="1" id="inlineRadio1">
                                        <label class="form-check-label" for="inlineRadio1">Publish</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="publication_status" {{ $category ->publication_status== 0 ? 'checked' : '' }} value="0">
                                        <label class="form-check-label" for="inlineRadio2">Unpublish</label>
                                    </div>
                                 </div>
                             </div>
                            <!-- File Button -->
                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="singlebutton">Product Insert</label>
                                <div class="col-md-4">
                                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Product Save</button>
                            </div>
            </form>

        </div>
    </main>
    <script>
     document.forms['editForms'].elements['category_id'].value = '{{ $product -> category_id }}';
     document.forms['editForms'].elements['brand_id'].value    = '{{ $product -> brand_id }}';
    </script>
    @endsection