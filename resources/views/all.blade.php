<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Font awesome -->
        <script src="https://kit.fontawesome.com/a8584b7729.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/5.2.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            .navbar-cust, .navbar-fake{
                padding: 10px;
                height: 60px;
            }

            .cart-icon{
                font-size: 20px;
                color: white;
            }

            .cart-icon:hover{
                color: blue;
            }

            *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background-color: rgb(246, 249, 255);
            
            height: 100vh;
        }

        .bo{
            display: flex;
            height: 100%;
        }

        .sidebar{
            height: 100%;
            width: 18%;
            background-color: gainsboro;
            padding: 20px 20px;
            position: fixed;
            float: left;
        }

        .sidebar i {
            display: block;
            width: 18px;
            margin-right: 20px;
        }

        .sidebar .nav-link{
            display: flex;
            align-items: center;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .sidebar .nav-link:hover{
            background-color: azure;
            cursor: pointer;
        }

        .main-right{
            display: flex;
            flex-direction: column;
            width: 82%;
            margin-left: 18%;
        }

        

        .main-content{
            padding: 1rem 1.5rem;
        }

        .navbar-brand{
            display: flex;
            justify-content: center;
            align-items: center;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            height: 5rem;
            background-color: blue;
            margin-bottom: 1rem;
        }

        .content-title{
            font-size: 22px;
            font-weight: bold;
        }

        .navbar{
            display: flex;
            justify-content: end;
            align-items: center;
            width: 100%;
            height: 4rem;
            padding: 0 1.5rem;
            background-color: paleturquoise;
        }

        .card{
            margin-bottom: 1.5rem;
        }

        .card-header{
            font-weight: bold;
        }

        .tt{
            display: flex;
            justify-content: space-between;
        }

        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap');
            
        </style>
        @yield('css')
    </head>

    <body>
        <div class="bo">
            <div class="sidebar">
                <a class="navbar-brand" href="#">
                    Edu Logo
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="fa-solid fa-house"></i>
                            Homepage
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="fa-solid fa-bars"></i>
                            Courses
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="fa-regular fa-calendar"></i>
                            Timetable
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="fa-regular fa-message"></i>
                            Forum
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link">
                            <i class="fa-solid fa-graduation-cap"></i>
                            Grades
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="fa-solid fa-graduation-cap"></i>
                            Role
                        </a>
                    </li>
                </ul>
            </div>
    
            <!-- Main Content -->
            <div class="main-right">
                <div class="top-nav">
                    <nav class="navbar navbar-expand-lg">
                        <ul class="navbar-nav end-nav">
                            <li class="nav-item">
                                <a class="nav-link">
                                    <i class="fa-regular fa-bell"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">
                                    <i class="fa-regular fa-envelope"></i>
                                </a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">
                                    <span class="profile-name">Chin Chee Onn</span>
                                    <img class="img-profile rounded-circle" style="max-width: 48px; max-height: 48px"
                                            src="p.png">
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="c">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>

</html>