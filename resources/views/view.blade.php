@extends('common')

@section('content')
<body class="bg-light">
    
    <div class="container mt-1">
        <div class="col">
            <button class="bg-light border-0 fs-5 fw-bold">Select State</button>
           @foreach ($colleges->college as $item)
           <a href="{{route('filter',['states'=>$item->id])}}"><span class="badge bg-primary fs-6"> {{ $item->City->St->s_name }}</span></a>
           @endforeach
           <div class="col">
            <button class="bg-light border-0 fs-5 fw-bold">Select City</button>
           @foreach ($colleges->college as $item)
           <a href="{{route('city_filter',['cities'=>$item->id])}}"><span class="badge bg-primary fs-6"> {{ $item->City->name }}</span></a>
           @endforeach
       </div>
       </div>
        <h2 class="text-center text-uppercase mt-4" style="color: rgb(205, 90, 180)">LIST OF TOP {{ $colleges->c_name}} COLLEGES IN INDIA BASED ON 2021 RANKING</h2>
       <div class="row m-0">
           
            <div class="row mt-4">
                @foreach ($colleges->college as $item)
                <div class="col-3">
                    <div class="card shadow">
                        <img src="{{asset('image/'.$item->image)}}" alt="" class="" width="100%" height="230px">
                        <div class="card-body bg-light m-2 p-0">
                            <h4 class=" text-center text-uppercase text-truncate">{{ $item->name }} College</h4>
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

</body>
@endsection