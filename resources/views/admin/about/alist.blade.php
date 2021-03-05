@extends('admin.master')
@section('content')
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">title 01</th>
            <th scope="col">title 02</th>
            <th scope="col">image</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @if(count($abouts) >0 )
            @foreach($abouts as $about)
                <tr>
                    <th scope="row">{{$about->id}}</th>
                    <td>{{$about->title1}}</td>
                    <td>{{$about->title2}}</td>
                    <td>{{$about->description}}</td>
                    <td>
                        <img style="height: 10vh" src="{{url($about->image)}}" alt="image">
                    </td>
                    <td>
                        <div class="row">
                            <div><a href="{{url('/aedit',$about->id)}}" class="btn btn-primary m-2">Edit</a></div>

                        </div>

                        <div class="row">
                            <form action="{{url('/adelete',$about->id)}}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <input type="submit" name="submit" value="Delete" class="btn btn-danger m-2">

                            </form>

                        </div>
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>
    </table>
@endsection



