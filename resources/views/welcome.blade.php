@extends('serviceTemplate.app')

@section('content')
<div class="row mt-3">
<h1>{{__('Visi mechanikai')}}</h1>
<hr>
@foreach($mechanics as $mechanic)
<div class="col-md-3">
<div class="card">
  <img src="{{asset('/storage/app/public/'.$mechanic->img_path)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $mechanic->name }} {{ $mechanic->last_name }}</h5>
    <p class="card-text">{{ $mechanic->specialization }}</p>
    <p class="card-text">{{ $mechanic->city }}</p>
    <a href="/mechanic/{{ $mechanic->id }}" class="btn btn-primary">{{__('Perziureti')}}</a>
  </div>
  <div class="card-footer">
        <small class="text-muted d-flex justify-content-between"><span>{{__('Patiktuku:')}} {{count($mechanic->likes)}}</span> <a href="/like/{{$mechanic->id}}">{{__('Patinka')}}</a></small>
  </div>
</div>
</div>
@endforeach
</div>
@endsection