@extends('side')

@section('content')
    <div class="row mt-5">
        @foreach ($data_colleges as $item)
        <div class="col-3">
            <div class="card">
                <img src="{{asset('image/'.$item->image)}}" alt="" class="" width="100%" height="144px">
                <div class="card-body">
                    <h4>Colllge Name : {{ $item->college->name }}</h4>
                    <p>Type : {{ $item->c_name }}</p>
                    <a href="{{route('course',['colleges'=>$item->id])}}">Courses & Fees</a>
                </div>
            </div>
        </div>
        @endforeach
       
    </div>
@endsection