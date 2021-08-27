@extends('common')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 ms-5 me-5">
            <form action="{{route('college.college_insert')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">about_college</label>
                            <input type="text" name="about_college" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">ranked</label>
                            <input type="text" name="ranked" class="form-control">
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
                            <label>city</label>
                            <select name="city_id" class="form-control">
                                @foreach($cities as $city):
                                    <option value="<?= $city['id'];?>"><?= $city['name'];?>,(<?= $city['id'];?>)</option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="mb-2">
                            <label>category</label>
                            <select name="category" class="form-control">
                                @foreach($categories as $category):
                                    <option value="<?= $category['id'];?>"><?= $category['c_name'];?>,(<?= $category['id'];?>)</option>
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
                    <th>category</th>
                    <th>city_id</th>
                    <th>state_id</th>
                </tr>
                @foreach ($colleges as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td class="text-uppercase">{{$item->name}}</td>
                        <td>{{$item->category}}</td>
                        <td>{{$item->city_id}}</td>
                        <td>{{$item->state_id}}</td>
                    </tr>
                    
                @endforeach
               
             
            </table>
        </div>
    </div>
</div>

    
@endsection