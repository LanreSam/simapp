   
                        <ul class="navbar-nav flex-column mt-4">
                            
                            <li class="nav-item"><a href="dashboard.php" class="nav-link text-white p-3 mb-2 current"><img src="img/dashboard.png" width="30" class="mr-3"> Dashboard</a></li>
                            <li class="nav-item"><a href="profile.php" class="nav-link text-white p-3 mb-2 sidebar-link"><img src="img/profile.png" width="30" class="mr-3"> Profile</a></li>
                            <li class="nav-item"><a href="inbox.php" class="nav-link text-white p-3 mb-2 sidebar-link"><img src="img/inbox.png" width="30" class="mr-3"> Inbox</a></li>
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
     
    <!--tables-->
    <section class="mt-5 pt-xl-5">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-xl-10 col-lg-9 col-md-8 col-sm-5 ml-auto">
                    <div class="row align-item-center">
                        <div class="col-xl-12 mb-4 mb-xl-0">
                            <h3 class="text-center text-light mb-4 display-4">User Details</h3>
                            <table class="table  table-hover table-dark table-striped text-center">
                                <thead>
                                    <tr class="text-warning">
                                        <th>#</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Phone number</th>
                                        <th>Date registered</th>
                                        <th>Contact</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Daniel</td>
                                        <td>#150,000</td>
                                        <td>Jun-10-2020</td>
                                        <td>13, Lagos str. Island</td>
                                        <td>08128251336</td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Olamide</td>
                                        <td>#120,000</td>
                                        <td>Jun-10-2020</td>
                                        <td>13, Lagos str. Island</td>
                                        <td>08128251336</td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>Seun</td>
                                        <td>#100,000</td>
                                        <td>Jun-10-2020</td>
                                        <td>13, Lagos str. Island</td>
                                        <td>08128251336</td>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td>Damilare</td>
                                        <td>#100,000</td>
                                        <td>Jun-10-2020</td>
                                        <td>13, Lagos str. Island</td>
                                        <td>08128251336</td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td>Evelyn</td>
                                        <td>#70,000</td>
                                        <td>Jun-10-2020</td>
                                        <td>13, Lagos str. Island</td>
                                        <td>08128251336</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--Pagination-->
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            <span>Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            1
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link py-2 px-3">
                                            2
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            3
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            <span>Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!--end of Pagination-->

                            <!--buttons-->
                            <div class="mt-5 text-center">
                                <button type="button" class="btn btn-danger mr-3"><img src="img/trash.png" width="20" class="mr-2">Delete Database</img></button>
                                <button type="button" class="btn btn-success"><img src="img/user.png" width="20" class="mr-2">Add new user</img></button>
                            </div>
                            <!--end of buttons-->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end of tables-->