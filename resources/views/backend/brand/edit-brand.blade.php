@extends('backend.master')
@section('home')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <form action="{{ route('update-brand') }}" class="form-horizontal" method="POST">
                {{ csrf_field() }}
                <!-- Form Name -->
                <legend class="text-center">
                    <h3>brand</h3>
                </legend>
                <h3 class="text-center">{{ Session::get('message') }}</h3>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="brand_name">brand Name</label>
                    <div class="col-md-4">
                        <input id="brand_name" name="brand_name" placeholder="brand Name" class="form-control input-md" required="" value="{{$brand-> brand_name }}" type="text">
                        <input type="hidden" name="brand_id" value="{{$brand->id}}">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="brand_description">brand Description</label>
                    <div class="col-md-4">
                        <textarea name="brand_description" placeholder="brand Description" cols="30" rows="10" class="form-control input-md" required="">{{ $brand-> brand_description}}</textarea>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="product_name_fr">Publication Status</label>
                    <div class="col-md-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="publication_status" {{ $brand ->publication_status== 1 ? 'checked' : '' }} value="1" id="inlineRadio1">
                            <label class="form-check-label" for="inlineRadio1">Publish</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="publication_status" {{ $brand ->publication_status== 0 ? 'checked' : '' }} value="0">
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