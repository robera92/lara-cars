@extends('serviceTemplate.app')

@section('content')
<h1 class="mt-4">{{ __('Pridėti naują mechanika') }}</h1>
@include('serviceTemplate/_partials/errors')
<div class="row">
<form method="POST" action="/add-mechanic/store"  enctype="multipart/form-data">
       @csrf
      <div class="mb-3">
      <label for="name" class="form-label">{{__('Vardas')}}</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
      </div>
      <div class="mb-3">
      <label for="code" class="form-label">{{__('Pavarde')}}</label>
        <input type="text" class="form-control" id="code" name="last_name" value="{{ old('last_name') }}">
      </div>
      <div class="mb-3">
      <label for="vatCode" class="form-label">{{__('Specializacija')}}</label>
        <input type="text" class="form-control" id="vatCode" name="specialization" value="{{ old('specialization') }}">
      </div>
      <div class="mb-3">
        <label for="adress" class="form-label">{{__('Miestas')}}</label>
        <input type="text" class="form-control" id="adress" name="city" value="{{ old('city') }}">
      </div>
      <div class="mb-3">
      <label for="phone" class="form-label">{{__('Servisas')}}</label>
        <select name="service_id" class="form-control">
          <option value="">{{__('Pasirinkite servisa')}}</option>
          @foreach ($services as $service)
          <option value="{{$service->id}}">{{$service->title}}</option>
          @endforeach
      </select>
      </div>
      <div class="mb-3">
        <label for="adress" class="form-label">{{__('Nuotrauka')}}</label>
        <input type="file" class="form-control" id="adress" name="image" accept="image/*"/>
      </div>
      <button type="submit" name="save" class="btn btn-primary">Pridėti</button>
    </form>
</div>
@endsection