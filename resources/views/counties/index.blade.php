@extends('layouts.app')

@section('title', __('Megyék listája'))

@section('content')
<h1>{{ __('Megyék') }}</h1>

@include('layouts.toolbar', [
      'isAuthenticated' => $isAuthenticated,
      'routes' => [
          'create' => route('counties.create'),
          'csv' => '#',
          'pdf' => '#',
          'mail' => '#',
      ]
  ])

  @include('layouts.flash')

  <table>
      <thead>
      <tr>
          <th>#</th>
          <th>{{ __('Név') }}</th>
          <th>{{ __('Műveletek') }}</th>
      </tr>
      </thead>
      <tbody>
      @forelse($entities as $maker)
          <tr>
              <td>{{ $maker->id }}</td>
              <td>{{ $maker->name }}</td>
              <td>
                  <a href="{{ route('counties.show', $maker->id) }}">{{ __('Megtekintés') }}</a>
                  @if($isAuthenticated)
                      <a href="{{ route('counties.edit', $maker->id) }}">{{ __('Szerkesztés') }}</a>
                      <form action="{{ route('counties.destroy', $maker->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit">{{ __('Törlés') }}</button>
                      </form>
                  @endif
              </td>
          </tr>
      @empty
          <tr>
              <td colspan="3">{{ __('Nincs megye a rendszerben.') }}</td>
          </tr>
      @endforelse
      </tbody>
  </table>
@endsection