@extends('side')
@section('content')
<body  style="background-color: #ecf0f1">

<div class="container mt-5" style="background-color: #ecf0f1">
   <h2 class="text-center mb-5" style="color: royalblue">CHOOSE YOUR FUTURE</h2>
     
        <section class="cards">
            <div class="row" >
                @foreach ($categories as $item)
                <div class="col-lg-2 mt-2 p-1" >
                    <div class="card bb border-0" style="background-color: #ecf0f1">
                        <a href="{{route('view',['categories'=>$item->id])}}" class="stretched-link">
                        <img src="{{asset('img/'.$item->img)}}" alt="" class="" width="80" height="70" style="margin-left: 30%; margin-top:10px;">
                    </a>
                        <div class="card-body">
                            <h5 class="text-center text-uppercase">{{$item->c_name}}</h5>
                            <h4 class="text-center">{{count($item->college)}}</h4>
                           
                            </div>
                    </div>
                </div>
                @endforeach
        </div>
        </section>
    </div>
    
</body>
    
@endsection