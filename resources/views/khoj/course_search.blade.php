@extends('side')

@section('content')
    <div class="row mt-5">
        @foreach ($data_state as $item)
        <div class="col-3">
            <div class="card">
                <img src="{{asset('image/'.$item->image)}}" alt="" class="" width="100%" height="144px">
                <div class="card-body">
                    <h4>Colllge Name : {{ $item->name }}</h4>
                    <a href="{{route('course',['colleges'=>$item->id])}}">Courses & Fees</a>
                </div>
            </div>
        </div>
        @endforeach
       
    </div>
@endsection