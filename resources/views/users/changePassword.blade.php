@extends('layout')

@section('content')
    <form id="form" method="post"  action="/updatePassword" onSubmit = "return checkPassword(this)">
        @csrf
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Hasło</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label">Powtórz hasło</label>
            <input type="password" class="form-control" id="repeat" name="repeat">
        </div>
        <button type="submit" value="submit" class="btn btn-primary">Submit</button>
    </form>

    <script>
        // Function to check Whether both passwords
        // is same or not.
        function checkPassword(form) {
            password = form.password.value;
            repeat = form.repeat.value;

            // If password not entered
            if (password == '')
                alert("Please enter Password");

            // If confirm password not entered
            else if (repeat == '')
                alert("Please enter confirm password");

            // If Not same return False.    
            else if (password != repeat) {
                alert("\nPassword did not match: Please try again...")
                return false;
            }

            // If same return True.
            else {
                return true;
            }
        }
    </script>
@endsection
