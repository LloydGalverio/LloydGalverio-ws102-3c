<!DOCTYPE html>
<html lang="en">
<head>

    <title>Personal Information</title>
</head>
<body>

<h2>Personal Information Form</h2>

        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif
    <form action="/info" method="POST">
        @csrf

       <label>First Name </label>
       <input type="text" name="first_name" value="{{old('first_name')}}">
       @error('first_name')
       <p style="color:red;">{{$message}}</p>
       @enderror
       <br>    
        
       
       <label>Last Name </label>
       <input type="text" name="last_name" value="{{old('last_name')}}">
       @error('last_name')
       <p style="color:red;">{{$message}}</p>
       @enderror
       <br>

       <label>Sex </label>
       <input type="radio" name="sex" value="Male" {{ old('sex') == 'Male' ? 'checked' : '' }}> Male
       <input type="radio" name="sex" value="Female" {{ old('sex') == 'Female' ? 'checked' : '' }}> Female
       @error('sex')
       <p style="color:red;">{{$message}}</p>
       @enderror
       <br>

       <label>Mobile number  </label>
       <input type="text" name="mobile_number" value="{{old('mobile_number')}}">
       @error('mobile_number')
       <p style="color:red;">{{$message}}</p>
       @enderror
       <br>

       <label>Telephone number  </label>
       <input type="text" name="telephone_number" value="{{old('telephone_number')}}">
       @error('telephone_number')
       <p style="color:red;">{{$message}}</p>
       @enderror
       <br>

       <label>Birth date </label>
       <input type="text" name="birth_date" value="{{old('birth_date')}}">
       @error('birth_date')
       <p style="color:red;">{{$message}}</p>
       @enderror
       <br>

       <label>Email  </label>
       <input type="text" name="email" value="{{old('email')}}">
       @error('email')
       <p style="color:red;">{{$message}}</p>
       @enderror
       <br>

       <label>Website  </label>
       <input type="text" name="website" value="{{old('website')}}">
       @error('website')
       <p style="color:red;">{{$message}}</p>
       @enderror
       <br>

    <button type="submit">Submit</button>

    </form>

</body>
</html>
