@extends('common')

@section('content')
<body class="bg-light">
    
    <div class="container mt-5">
            <div class="row mt-5">
                @foreach ($colleges as $item)
                <div class="col-3">
                    <div class="card shadow">
                        <img src="{{asset('image/'.$item->image)}}" alt="" class="" width="100%" height="230px">
                        <div class="card-body bg-light m-0 p-0">
                            <h4 class=" text-center text-uppercase">{{ $item->name }} College</h4>
                            <p class=" text-center text-capitalize">{{ $item->Cat->c_name }}</p>
                            <p class=" text-center text-capitalize">Address : {{ $item->City->name }} {{ $item->City->St->s_name }}</p>
            
                            <a href="{{route('course',['colleges'=>$item->id])}}"><p class="text-dark text-center text-capitalize ">Courses & fee</p></a>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
    </div>
       </div>
    </div>

</body>
@endsection