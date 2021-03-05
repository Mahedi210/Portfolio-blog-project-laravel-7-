@extends('admin.master')

@section('content')
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">title</th>
            <th scope="col">sub title</th>
            <th scope="col">Big image</th>
            <th scope="col">small image</th>
            <th scope="col">Description</th>
            <th scope="col">Client</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @if(count($portfolios) >0 )
            @foreach($portfolios as $portfolio)
                <tr>
                    <th scope="row">{{$portfolio->id}}</th>
                    <td>{{$portfolio->title}}</td>
                    <td>{{$portfolio->sub_title}}</td>
                    <td>{{$portfolio->description}}</td>
                    <td>
                        <img style="height: 10vh" src="{{url($portfolio->big_image)}}" alt="big_image">
                    </td>
                    <td>
                        <img style="height: 10vh" src="{{url($portfolio->small_image)}}" alt="small_image">
                    </td>
                    <td>{{$portfolio->client}}</td>
                    <td>{{$portfolio->category}}</td>
                    <td>
                        <div class="row">
                            <div><a href="{{url('/pedit',$portfolio->id)}}" class="btn btn-primary m-2">Edit</a></div>

                        </div>

                        <div class="row">
                            <form action="{{url('/pdelete',$portfolio->id)}}" method="POST" >
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


