@extends('common')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 ms-5 me-5">
            <form action="{{route('state.state_insert')}}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
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
                @foreach ($states as $state)
                <tr>
                    <td>{{$state->id}}</td>
                    <td class="text-capitalize">{{$state->name}}</td>
                </tr>
                    
                @endforeach
            </table>
        </div>
    </div>
</div>

    
@endsection