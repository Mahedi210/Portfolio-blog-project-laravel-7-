@extends('admin.master')

@section('content')
    <form action="{{url('/save')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">

            <div class="form-group col-md-4 mt-3">
                <div class="mb-3">
                    <label for="icon"><h4>Font awsam icon</h4></label>
                    <input type="text" class="form-control" id="icone" name="icone" >
                </div>


                <div class="mb-5">
                    <label for="title"><h4>Title</h4></label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="mb-5">
                    <label for="description"><h4>Description</h4></label>
                    <textarea type="text" class="form-control" id="description" name="description"></textarea>
                </div>

            </div>


        </div>
        <input type="submit" name="submit" class="btn btn-primary ">
    </form>
@endsection
