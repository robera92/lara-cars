@extends('serviceTemplate.app')

@section('content')
<div class="row mt-3">

@foreach($mechanics as $mechanic)
<div class="col-md-3">
<div class="card">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $mechanic->name }} {{ $mechanic->last_name }}</h5>
    {{ $mechanic->img_path }}
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">{{__('Perziureti')}}</a>
  </div>
</div>
</div>
@endforeach
</div>
@endsection