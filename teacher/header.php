<?php
session_start();
include "../dbcon.php";
if (isset($_SESSION['steacher'])) {
} else {
    header("location:login.php");
}
$tid = $_SESSION['steacher'];
$name = $_SESSION['tname'];
$role = "teacher";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <title>TimeTable Management</title>

    <link rel="shortcut icon" href="assets/img/logo1.png" />



    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />

    <link rel="stylesheet" href="assets/plugins/feather/feather.css" />

    <link rel="stylesheet" href="assets/plugins/icons/flags/flags.css" />

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css" />

    <link rel="stylesheet" href="assets/plugins/simple-calendar/simple-calendar.css" />

    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="index.php" class="logo">
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
                <li class="nav-item zoom-screen me-2">
                    <a href="#" class="nav-link header-nav-list">
                        <img src="assets/img/icons/header-icon-04.svg" alt />
                    </a>
                </li>
                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor" />
                            <div class="user-text">
                                <h6><?php echo $name ?></h6>
                                <p class="text-muted mb-0">Teacher</p>
                            </div>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle" />
                            </div>
                            <div class="user-text">
                                <h6><?php echo $name ?></h6>
                                <p class="text-muted mb-0">Teacher</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="profile.php">My Profile</a>
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
                            <a href="index.php"><i class="fas fa-home"></i>
                                <span>Home</span></a>
                        </li>
                        <li>
                            <a href="exam.php"><i class="fas fa-clipboard-list"></i>
                                <span>Exam list</span></a>
                        </li>
                        <li>
                            <a href="students.php"><i class="fas fa-clipboard-list"></i>
                                <span>Students</span></a>
                        </li>
                        <li>
                            <a href="teachers.php"><i class="fas fa-clipboard-list"></i>
                                <span>Teachers</span></a>
                        </li>
                        <!-- <li>
                            <a href="time-table.php"><i class="fas fa-table"></i> <span>Time Table</span></a>
                        </li> -->
                        <li>
                            <a href="complaint.php"><i class="fas fa-columns"></i> <span>Complaints</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>