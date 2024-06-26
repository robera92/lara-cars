@extends('serviceTemplate.app')

@section('content')
<button class="mt-3 btn btn-primary" onClick="history.back()">Atgal</button>
<hr/>
<div class="row mt-3">

<h2>{{__('Servisas:')}} {{ $service->title }}</h2>
<ul class="list-group list-group-flush">
    <li class="list-group-item">{{__('Adresas:')}} {{ $service->address }}</li>
    <li class="list-group-item">{{__('Vadovas:')}} {{ $service->manager }}</li>
  </ul>
<hr/>
@if(count($service->mechanics) > 0)
<h3>{{__('Servise dirbantys mechanikai:')}}</h3>
@foreach($service->mechanics as $mechanic)
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
@else
<p>{{__('Mechaniku servise nera, pridekite!')}}</p>
@endif
@if(Auth::check())
<div class="col-12">
<hr/>
<a href="/edit-service/{{ $service->id }}" class="btn btn-success">{{ __('Redaguoti') }}</a>
<a href="/edit-service/{{ $service->id }}/delete" class="btn btn-danger" onClick="confirm('Ar tikrai?');">{{ __('Šalinti') }}</a>
</div>
@endif
</div>
@endsection