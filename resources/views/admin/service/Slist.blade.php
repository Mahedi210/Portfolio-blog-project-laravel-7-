@extends('admin.master')

@section('content')
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Icon</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @if(count($services) >0 )
            @foreach($services as $service)
                <tr>
                    <th scope="row">{{$service->id}}</th>
                    <td>{{$service->icone}}</td>
                    <td>{{$service->title}}</td>
                    <td>{{$service->description}}</td>
                    <td>
                        <div class="row">
                            <div class="col-sm-2"><a href="{{url('/Sedit',$service->id)}}" class="btn btn-primary">Edit</a></div>

                        </div>
                        <div class="row">
                            <form action="{{url('/Sdelete',$service->id)}}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <input type="submit" name="submit" value="Delete" class="btn btn-danger">

                            </form>

                        </div>
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>
    </table>
@endsection

