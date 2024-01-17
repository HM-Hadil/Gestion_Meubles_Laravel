@extends('welcome')
@section('content')
<!-- the contect of home section -->
<section>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height:30rem">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="https://i.pinimg.com/originals/21/60/94/2160941c9a2ad1674005e8428ad517cb.jpg" class="d-block w-100" alt="..." style="height:30rem" >

    </div>
    <div class="carousel-item">
      <img src="https://th.bing.com/th/id/OIP.LYalzx4yBBs9Je-W3UdAegHaF7?rs=1&pid=ImgDetMain" class="d-block w-100" alt="..." style="height:30rem">
    </div>
    <div class="carousel-item">
      <img src="https://th.bing.com/th/id/R.57e6b412ab23c70ab2a5e692a90c4839?rik=sfsK4rftrXf5kg&riu=http%3a%2f%2fpadovani.it%2fres%2fimg%2fshowroom%2fProducts%2fP.rovscurelac02.jpg&ehk=12bhpYplvNoRxSer834YeJUGN9S9Em9AuynrtEih0v4%3d&risl=&pid=ImgRaw&r=0" class="d-block w-100" alt="..." style="height:30rem">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
</section>

<section>

<div class="row row-cols-1 row-cols-md-3">
    @foreach($meublesData as $meuble)
        <div class="col mb-4">
            <div class="card h-100">
                <img src="{{ asset('uploads/meubles/' . $meuble->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $meuble->name }}</h5>
                    <p class="card-text">{{ $meuble->color }}</p>
                    <p>{{ $meuble->qte }}</p> <span>{{ $meuble->price }}</span>
                </div>
            </div>
        </div>
    @endforeach
</div>


</div>
</section>

@endsection
