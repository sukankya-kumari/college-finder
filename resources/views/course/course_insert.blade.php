@extends('common')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 ms-5 me-5">
            <form action="{{route('course.course_insert')}}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">fee</label>
                            <input type="text" name="fee" class="form-control" >
                        </div>
                        <div class="mb-2">
                            <label for="">duration</label>
                            <input type="text" name="duration" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label>college</label>
                            <select name="college_id" class="form-control">
                                @foreach($colleges as $col):
                                    <option value="<?= $col['id'];?>"><?= $col['name'];?>,(<?= $col['id'];?>),.. category..(<?= $col['category'];?>),(<?= $col['c_name'];?>)</option>
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
                    <th>fee</th>
                    <th>duration</th>
                    <th>college_id</th>
                </tr>
                @foreach ($courses as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td class="text-uppercase">{{$item->name}}</td>
                        <td>{{$item->fee}}/year</td>
                        <td>{{$item->duration}}years</td>
                        <td>{{$item->college_id}}</td>
                    </tr>
                    
                @endforeach
               
             
            </table>
        </div>
    </div>
</div>

    
@endsection