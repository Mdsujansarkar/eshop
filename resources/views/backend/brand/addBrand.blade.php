@extends('backend.master')
@section('home')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <form action="{{ route('new-brand') }}" class="form-horizontal" method="POST">
                {{ csrf_field() }}
                <!-- Form Name -->
                <legend class="text-center">
                    <h3>Brand</h3>
                </legend>
                <h3 class="text-center">{{ Session::get('message') }}</h3>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="brand_name">Brand Name</label>
                    <div class="col-md-4">
                        <input id="brand_name" name="brand_name" placeholder="Brand Name" class="form-control input-md" required="" type="text">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="brand_description">Brand Description</label>
                    <div class="col-md-4">
                        <textarea name="brand_description" placeholder="brand Description" cols="30" rows="10" class="form-control input-md" required="" type="text"></textarea>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="product_name_fr">Publication Status</label>
                    <div class="col-md-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="publication_status" checkd value="1" id="inlineRadio1">
                            <label class="form-check-label" for="inlineRadio1">Publish</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="publication_status" value="0">
                            <label class="form-check-label" for="inlineRadio2">Unpublish</label>
                        </div>

                    </div>
                </div>
                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton">Submit</label>
                    <div class="col-md-4">
                        <input type="submit" name="btn" class="btn btn-success" value="save info">
                    </div>
                </div>
            </form>

        </div>
    </main>
    @endsection