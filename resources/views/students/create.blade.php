@extends('base')

@section('content')
    

<form action="/students" method="POST" >
    @csrf

    <div>
       <label>Name</label>
       <input class="form-control" type="text" name ="name" value="{{old('name')}}"> 
       
       @error('name')
         <div class="alert alert-danger">
            {{$message}}
         </div>
           
       @enderror

    </div>

     <div>
       <label>Code</label>
       <input class="form-control" type="text" name ="code"  value="{{old('code')}}"> 

       @error('code')
       <div class="alert alert-danger">
       {{$message}}
       </div>
       @enderror
     </div>

    <div>
        <label>Email</label>
        <input class="form-control" type="text" name ="email"  value="{{old('email')}}"> 
            @error('email')
            <div class="alert alert-danger">
               {{$message}}
            </div>
            @enderror
     </div>

     <div>
        <label>Password</label>
        <input class="form-control" type="password" name ="password"  value="{{old('password')}}">
            @error('password')
            <div class="alert alert-danger">
               {{$message}}
            </div> 
            @enderror
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
     </div>

     <div>
        <label>Semester</label>
        <input class="form-control" type="text" name ="semester"  value="{{old('semester')}}"> 
            @error('semester')
            <div class="alert alert-danger">
               {{$message}}
            </div>
            @enderror
     </div>

     <button type="submit">Submit</button>

</form>

@endsection
