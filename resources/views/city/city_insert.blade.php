@extends('common')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 ms-5 me-5">
            <form action="{{route('city.city_insert')}}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="">City Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label>State</label>
                            <select name="state_id" class="form-control">
                                @foreach($states as $state):
                                    <option value="<?= $state['id'];?>"><?= $state['s_name'];?>,(<?= $state['id'];?>)</option>
                                @endforeach
                                
                            </select>
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
                    <th>state_id</th>
                </tr>
                @foreach ($cities as $city)
                <tr>
                    <td>{{$city->id}}</td>
                    <td class="text-capitalize">{{$city->name}}</td>
                    <td class="text-capitalize">{{$city->state_id}}</td>
                </tr>
                    
                @endforeach
             
            </table>
        </div>
    </div>
</div>

    
@endsection