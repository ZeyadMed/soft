@extends('base')

@section('content')

    @if (session ('status'))
        <div class="alert alert-success">

        {{ session ('status') }}    
        </div>
    @endif

<h2>
    <a href="{{ route ('students.create')}}">
        Add a new student
    </a>
</h2>




@foreach ($students as $student)
    <div class="d-felx justify-content-between">
        <div>
            <a href="{{ route ('students.show' , $student->id)}}">
                {{ $student -> name }}
            </a>
        </div>

        <div>
            <a href="{{ route ('students.edit' , $student->id)}}">
                 Edit
            </a>

            <form action="{{ route('students.destroy' , $student->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-link">
                    Delete
                </button>

            </form>
        </div>
    </div>
@endforeach


    {{-- {{ $students ->links() }} --}}
@endsection