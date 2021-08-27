@extends('common')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 ms-5 me-5">
            <form action="{{route('category.insert')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="">Name</label>
                            <input type="text" name="c_name" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">img</label>
                            <input type="file" name="img" class="form-control">
                        </div>
                        <div class="mb-2">
                            <input type="submit" class="btn btn-success form-control">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-6 ms-5">
            <table class="table border">
                <tr>
                    <th>id</th>
                    <th>name</th>
                </tr>
                @foreach ($categories as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td class="text-capitalize">{{$item->c_name}}</td>
                </tr>
                    
                @endforeach
            </table>
        </div>
    </div>
</div>

    
@endsection