@extends('base')

@section('content')

<h1>
    {{ $student->name }}
</h1>

{{ $student->code }}

<h3>
    {{ $student ->department-> name}}
</h3>

@endsection