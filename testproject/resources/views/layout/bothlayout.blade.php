<html>
<head>
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/assets/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/assets/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/assets/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/assets/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/assets/plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datatable.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
<!--     @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" id="menu-toggle" >
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-toggle="collapse">
                    Sara
                        <span class="caret"></span>
                    </button>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li id="small"><a href="/layout">Small Business</a></li>
                        <li id="personal"><a href="/personal">Personal</a></li>
                    </ul>
                </div>

             <!--    <div class="selectdiv">
                    <select class="opts">
                        <option value="Small">Small business</option>
                        <option value="Personal">Personal</option>
                    </select>

                </div> -->
            </div>

            <div class="buttons">
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Settings
                        <span class="caret"></span>
                    </button>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="/personal">Profile</a></li>
                        <li><a href="#">Account</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>

                <button onclick="window.location='{{ url("logout") }}'" type="button" class="btn btn-info">Sign Out</button>               
            </div>
        </div>
    </nav>

    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">  
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="/account">Account</a>
                </li>
                <li>
                    <a href="#">party</a>
                </li>
                <li>
                    <a href="#">Product</a>
                </li>
                <li>
                    <a href="#">Inventory</a>
                </li>
                <li>
                    <a href="#">Purchase Order</a>
                </li>
                <li>
                    <a href="#">Sale Order</a>
                </li>
                <li>
                    <a href="#">Income</a>
                </li>
                 <li>
                    <a href="#">Expense</a>
                </li>
                 <li>
                    <a href="#">Invoice</a>
                </li> <li>
                    <a href="#">Report</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        @yield('content')
        
    </div>

<script src="js/jquery.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Menu Toggle Script -->

<script>
    $(document).ready(function() {

        var menu = ["Dashboard", "Account","party","Product","Inventory","Purchase Order","Sale Order","Invoice","Report"]
        var turnOff = []
        function renderMenu(items) {
            var menuStr = "";

            for(var i = 0; i<items.length; i++) {
                menuStr += "<li><a href='/" + items[i].toLowerCase() + "'>" + items[i] + "</a></li>"
            }

            $('.sidebar-nav').html(menuStr)
        }

        renderMenu(menu)
        $('#personal').click(function (e) {
            e.preventDefault()
            personalmenu = ["Dashboard","Account","Income","Expense","Invoice","Report"]
            renderMenu(personalmenu)
        })

         $('#small').click(function (e) {
            e.preventDefault()
            renderMenu(menu)
        })
    })

    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

</script>

</body>
</html>