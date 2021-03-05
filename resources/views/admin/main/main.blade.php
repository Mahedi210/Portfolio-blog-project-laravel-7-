@extends('admin.master')

@section('content')
    <form action="{{url('/update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('post')}}
        <div class="row">
            <div class="form-group col-md-3 mt-3">
                <h3>Background Image</h3>
                <img style="height: 50vh"  src="{{url($main->bc_image)}}" class="img-thumbnail">
                <input class="mt-3" type="file" id="bc_image" name="bc_image">

            </div>
            <div class="form-group col-md-4 mt-3">
                <div class="mb-3">
                    <label for="title"><h4>Title</h4></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$main->title}}">
                </div>

                <div class="mb-5">

                    <label for="sub_title"><h4>SUB Title</h4></label>
                    <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{$main->sub_title}}">
                </div>

                <div>
                    <h4>Uplode Resume</h4>
                    <input class="mt-2" type="file" id="resume" name="resume">
                </div>


            </div>


        </div>
        <input type="submit" name="submit" class="btn btn-primary ">
    </form>
@endsection
