 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/login/style.css" />
</head>

<body>
    <div id="carbonForm">
        @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        
    	<h1>Signup</h1>

        <form action="/insert" method="post" id="signupForm">
            <input type="hidden" name="_token" value="{{csrf_token()}}"><br><br>

            <div class="fieldContainer">

                <div class="formRow">
                    <div class="label">
                        <label for="name">Name:</label>
                    </div>
                    
                    <div class="field">
                        <input type="text" name="name" id="name" placeholder="Enter Username"/>
                    </div>
                </div>
                
                <div class="formRow">
                    <div class="label">
                        <label for="email">Email:</label>
                    </div>
                    
                    <div class="field">
                        <input type="text" name="email" id="email" placeholder="email"/>
                    </div>
                </div>
                
                <div class="formRow">
                    <div class="label">
                        <label for="password">Password:</label>
                    </div>
                    
                    <div class="field">
                        <input type="password" name="password" id="password" placeholder="password"/>
                    </div>
                </div>
                <div class="formRow">
                    <div class="label">
                        <label for="password_confirmation">Confirm Password:</label>
                    </div>
                    
                    <div class="field">
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Retype password" />
                    </div>
                </div>
                <div class="radiobutton">
                    <h3>Select Account Type:</h3>
                    <div class="radio">
                      <label><input type="radio" name="account_type" value="1">Small business</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="account_type" value="2">personal</label>
                    </div> 
                    <div class="radio">
                      <label><input type="radio" name="account_type" value="3">Both</label>
                    </div>
                </div>
            </div> <!-- Closing fieldContainer -->
        
            <div class="signupButton">
                <input type="submit" name="submit" id="submit" value="Signup" />
            </div>

            <a href="login">Already Registered? Login Here</a>
        
        </form>
    </div>
</body>
</html>