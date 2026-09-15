@extends('layouts.app')

@section('title', __('Megye módosítása'))

@section('content')
<h1>{{ __('Megye módosítása') }}</h1>

  @include('layouts.flash')

  <form action="{{ route('counties.update', $entity->id) }}" method="POST">
      @csrf
      @method('PUT')

      <label for="name">{{ __('Megye neve') }}</label>
      <input type="text" name="name" id="name" value="{{ old('name', $entity->name) }}" required>
      @error('name')
          <div class="error">{{ $message }}</div>
      @enderror

      <button type="submit">{{ __('Mentés') }}</button>
      <a href="{{ route('counties.index') }}">{{ __('Mégse') }}</a>
  </form>
@endsection