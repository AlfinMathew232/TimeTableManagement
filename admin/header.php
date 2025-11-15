    <?php
    session_start();
    include ('../dbcon.php');

    if (isset($_SESSION['sadmin']))
    {

    }
    else
    {
        header("location:login.php");
    }
    $usr=$_SESSION['sadmin'];
    $uname= $_SESSION['uname'];

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <title>Admin Dashboard</title>

    <link rel="shortcut icon" href="assets/img/logo1.png" />

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />

    <link rel="stylesheet" href="assets/plugins/feather/feather.css" />

    <link rel="stylesheet" href="assets/plugins/icons/flags/flags.css" />

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css" />

    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo tt.jpg" alt="Logo" />
                </a>
            </div>

            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>

            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>

            <ul class="nav user-menu">
            <a href="complaint.php" class="dropdown-toggle nav-link header-nav-list">
                    <img src="assets/img/icons/header-icon-05.svg" alt>
                </a>
                <li class="nav-item zoom-screen me-2">
                    <a href="#" class="nav-link header-nav-list win-maximize">
                        <img src="assets/img/icons/header-icon-04.svg" alt />
                    </a>
                </li>

                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31"
                                alt="Ryan Taylor" />
                            <div class="user-text">
                                <h6><?php echo $uname ?></h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="assets/img/profiles/avatar-01.jpg" alt="User Image"
                                    class="avatar-img rounded-circle" />
                            </div>
                            <div class="user-text">
                                <h6><?php echo $uname ?></h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div>
                        <!-- <a class="dropdown-item" href="profile.html">My Profile</a> -->
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="active">
                            <a href="index.php"><i class="feather-grid"></i> <span> Dashboard</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span>
                                <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="students.php">Student List</a></li>
                                <li><a href="add-student.php">Student Add</a></li>
                               
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i>
                                <span> Teachers</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="teachers.php">Teacher List</a></li>
                                <li><a href="add-teacher.php">Teacher Add</a></li>
                               
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-building"></i> <span> Class</span>
                                <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="class.php">Class List</a></li>
                                <li><a href="add-class.php">Add Class</a></li>
                               
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span>
                                <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="subjects.php">Subject List</a></li>
                                <li><a href="add-subject.php">Subject Add</a></li>
                              
                            </ul>
                        </li>


                        
                        
                        <li>
                            <a href="exam.php"><i class="fas fa-clipboard-list"></i>
                                <span>Exams</span></a>
                        </li>
                       
                        <li>
                            <a href="time-table.php"><i class="fas fa-table"></i> <span>Time Table</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
