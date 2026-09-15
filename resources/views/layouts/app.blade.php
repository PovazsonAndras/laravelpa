<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
</div>
@extends('layouts.app')

@section('content')

  <h1>Vármegyék</h1>

  @foreach($counties as $county)
      <p>{{ $county->name }}</p>
  @endforeach

@endsection