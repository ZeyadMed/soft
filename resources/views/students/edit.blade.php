@extends('base')

@section('content')
    

<form action="{{ route ('students.update' , $student->id ) }}" method="POST" >
    @csrf
    @method('PUT')

    <div>
       <label>Name</label>
       <input class="form-control" type="text" name ="name" value="{{$student->name}}">  
    </div>

     <div>
       <label>Code</label>
       <input class="form-control" type="text" name ="code" value="{{$student->code}}"> 
    </div>

    <div>
        <label>Email</label>
        <input class="form-control" type="text" name ="email" value="{{$student->email}}"> 
     </div>

     <div>
        <label>Password</label>
        <input class="form-control" type="password" name ="password" value="{{$student->password}}"> 
     </div>

    <div>
        <label>Department </label>

        <select name="department_id" class="form-select">
         @foreach ($departments as $department)
            <option value="{{ $department->id }}">
            {{ $department -> name}}
            </option>
         @endforeach
         </select>
        {{-- <input class="form-control" type="text" name ="department_id" value="{{$student->department_id}}">  --}}
     </div>

     <div>
        <label>Semester</label>
        <input class="form-control" type="text" name ="semester" value="{{$student->semester}}"> 
     </div>

     <button type="submit" class="btn btn-success">Submit</button>

</form>

@endsection
