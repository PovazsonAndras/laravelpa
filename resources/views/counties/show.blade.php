@extends('layouts.app')
  @section('title', __('Vármegye megtekintése'))
  @section('content')

  <h1>{{ $entity->name }}</h1>

  <p>ID: {{ $entity->id }}</p>
  <p>Név: {{ $entity->name }}</p>

  <h2>{{ __('Városok') }}</h2>
  @if($entity->cities->isEmpty())
    <p>{{ __('Nincs város ebben a vármegyében.') }}</p>
  @else
    <ul>
      @foreach($entity->cities as $city)
        <li>
          {{ $city->name }}
        </li>
      @endforeach
    </ul>
  @endif

  <a href="{{ route('counties.index') }}">
    {{ __('Vissza a listához') }}
  </a>

  @endsection