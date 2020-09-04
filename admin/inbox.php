<?php $page_name = 'Inbox';?>
<?php $current_page = 'Inbox';?>

<?php include('includes/admin-header.php');?>

                        <ul class="navbar-nav flex-column mt-4">
                            
                            <li class="nav-item"><a href="dashboard.php" class="nav-link text-white p-3 mb-2 sidebar-link"><img src="img/dashboard.png" width="30" class="mr-3"> Dashboard</a></li>
                            <li class="nav-item"><a href="profile.php" class="nav-link text-white p-3 mb-2 sidebar-link"><img src="img/profile.png" width="30" class="mr-3"> Profile</a></li>
                            <li class="nav-item"><a href="inbox.php" class="nav-link text-white p-3 mb-2 current"><img src="img/inbox.png" width="30" class="mr-3"> Inbox</a></li>
                            <li class="nav-item"><a href="../register.php" class="nav-link text-white p-3 mb-2 sidebar-link"><img src="img/user-reg.png" width="30" class="mr-3"> Register New User</a></li>
                            <li class="nav-item"><a href="statistics.php" class="nav-link text-white p-3 mb-2 sidebar-link"><img src="img/chart.png" width="30" class="mr-3"> Statistics</a></li>
                            <li class="nav-item"><a href="logout.php" class="nav-link text-white p-3 mb-2 sidebar-link"><img src="img/logout.png" width="30" class="mr-3"> Logout</a></li>
                        </ul>
                    </div>
                    <!-- end of Sidebar -->
                </div>
            </div>
        </div>
    </nav>

<?php include('includes/admin-footer.php');?>