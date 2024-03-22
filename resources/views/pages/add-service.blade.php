@extends('serviceTemplate.app')

@section('content')
<h1 class="mt-4">{{ __('Pridėti naują servisa') }}</h1>
@include('serviceTemplate/_partials/errors')
<div class="row">
<form method="POST" action="/add-service/store">
       @csrf
      <div class="mb-3">
      <label for="name" class="form-label">{{__('Pavadinimas')}}</label>
        <input type="text" class="form-control" id="name" name="title" value="{{ old('title') }}">
      </div>
      <div class="mb-3">
      <label for="code" class="form-label">{{__('Adresas')}}</label>
        <input type="text" class="form-control" id="code" name="address" value="{{ old('address') }}">
      </div>
      <div class="mb-3">
      <label for="vatCode" class="form-label">{{__('Vadovas')}}</label>
        <input type="text" class="form-control" id="vatCode" name="manager" value="{{ old('manager') }}">
      </div>
      <button type="submit" name="save" class="btn btn-primary">{{__('Pridėti')}}</button>
    </form>
</div>
@endsection