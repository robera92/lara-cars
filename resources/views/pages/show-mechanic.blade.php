@extends('serviceTemplate.app')

@section('content')
<button class="mt-3 btn btn-primary" onClick="history.back()">Atgal</button>
<hr/>
<h1 class="mt-4">{{ __('Mechaniko informacija') }}</h1>
<ul>
    <li>{{ __('Vardas:')}} {{$mechanic->name}}</li>
    <li>{{ __('Pavarde:')}} {{$mechanic->last_name}}</li>
    <li>{{ __('Specializacija:')}} {{$mechanic->specialization}}</li>
    <li>{{ __('Miestas:')}} {{$mechanic->city}}</li>
    <li>{{ __('Servisas:')}} {{$mechanic->service_id}}</li>
</ul>
<hr/>
<a href="/edit-mechanic/{{ $mechanic->id }}" class="btn btn-success">{{ __('Redaguoti') }}</a>
<a href="/edit-mechanic/{{ $mechanic->id }}/delete" class="btn btn-danger" onClick="confirm('Ar tikrai?');">{{ __('Šalinti') }}</a>
@endsection