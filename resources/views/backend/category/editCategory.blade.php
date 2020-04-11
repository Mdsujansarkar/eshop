@extends('backend.master')
@section('home')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <form action="{{ route('update-category') }}" class="form-horizontal" method="POST">
                {{ csrf_field() }}
                <!-- Form Name -->
                <legend class="text-center">
                    <h3>CATEGORY</h3>
                </legend>
                <h3 class="text-center">{{ Session::get('message') }}</h3>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="category_name">Category Name</label>
                    <div class="col-md-4">
                        <input id="category_name" name="category_name" placeholder="Category Name" class="form-control input-md" required="" value="{{$category-> category_name }}" type="text">
                        <input type="hidden" name="category_id" value="{{$category->id}}">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="category_description">Category Description</label>
                    <div class="col-md-4">
                        <textarea name="category_description" placeholder="Category Description" cols="30" rows="10" class="form-control input-md" required="">{{ $category-> category_description}}</textarea>
                    </div>
                </div>

                <!-- Text input-->
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
                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton">Submit</label>
                    <div class="col-md-4">
                        <input type="submit" name="btn" class="btn btn-success" value="update">
                    </div>
                </div>
            </form>

        </div>
    </main>
    @endsection