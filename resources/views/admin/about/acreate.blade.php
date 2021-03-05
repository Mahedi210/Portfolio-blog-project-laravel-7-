@extends('admin.master')

@section('content')
    <form action="{{url('/asave')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <div class="row">
            <div class="form-group col-md-3 mt-3">
                <h3>Image</h3>
                <img style="height: 50vh"  src="" class="img-thumbnail">
                <input class="mt-3" type="file"  name="image">

            </div>

            <div class="form-group col-md-4 mt-3">
                <div class="mb-3">
                    <label for="title"><h4>Title 1</h4></label>
                    <input type="text" class="form-control" id="title1" name="title1" value="">
                </div>

                <div class="mb-5">

                    <label for="sub_title"><h4>Title 2</h4></label>
                    <input type="text" class="form-control" id="title2" name="title2" value="">
                </div>

            </div>
            <div class="form-group col-md-6 mt-3">
                <h3>Description</h3>
                <textarea class="form-control" name="description" rows="5"></textarea>


            </div>

        </div>
        <input type="submit" name="submit" class="btn btn-primary my-5">
    </form>
@endsection


