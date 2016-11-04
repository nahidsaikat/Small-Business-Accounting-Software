 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

<link rel="stylesheet" type="text/css" href="css/login/logstyle.css" />

</head>

<body>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div id="carbonForm">
        <h1>Login</h1>
        <form action="authenticated" method="post" id="signupForm">
            <input type="hidden" name="_token" value="{{csrf_token()}}"><br><br>

            <div class="fieldContainer">

                <div class="formRow1">

                    <div class="label1">
                        <label for="name">User Name:</label>
                    </div>
                    
                    <div class="field">
                        <input type="text" name="name" id="name" placeholder="User Name"/>
                    </div>
                </div>

                <div class="formRow">

                    <div class="label">
                        <label for="password">Password:</label>
                    </div>
                    
                    <div class="field">
                        <input type="password" name="password" id="password" placeholder="password" />
                    </div>
                </div>                
            </div> <!-- Closing fieldContainer -->
            
            <div class="signupButton">
                <input type="submit" name="submit" id="submit" value="submit" placeholder="Signup"/>                
            </div>

            <h3 id="footer"><a href="registrationform">Register New User</a></h3> 

        </form>           
    </div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>

</body>
</html>