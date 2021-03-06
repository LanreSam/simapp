
                        <div class="ml-auto">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link" href="index.php">Home </a></li>
                                <li class="nav-item active"><a class="nav-link" href="register.php">Register <span class="sr-only">(current)</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="admin/dashboard.php">Admin</a></li>
                            </ul>
                        </div><!--m-auto div-->
                        
                    </div><!--collapse div-->  
                </nav><!--nav div-->
                
            </div><!--Doing  nothing-->
            
        </header><!--end of header-->





<div class="mb-5" id="space"></div>


    <div class="container">
        <form action="" class="p-5 m-5 shadow" style="background-color: white;">
            <p>Please NOTE: All fields are <span class="text-danger">required*</span></p>
            <div class="form-group">
                <label for="firstname">Firstname: </label>
                <input type="text" class="form-control" id="" placeholder="enter firstname.." required autofocus>
            </div>
            <div class="form-group">
                <label for="lastname">Lastname: </label>
                <input type="text" class="form-control" id="" placeholder="enter lastname.." required>
            </div>
            <div class="form-group">
                <label for="surname">Surname: </label>
                <input type="text" class="form-control" id="" placeholder="enter surname.." required>
            </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" class="form-control" id="email" placeholder="enter email.." required>
            </div>

            <select name="" id="">
                <option value="select">Item 1</option>
                <option value="Item 2">Item 1</option>
            </select>

            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" class="form-control" id="password" placeholder="enter password.." required>
            </div>
            <div class="form-group">
                <label for="comfirm-password">Confirm Password: </label>
                <input type="password" class="form-control" id="password" placeholder="Confirm password.." required>
            </div>
            
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="check">
                <label for="check">I agree to the <a href="#">Terms and condition</a> and I've successfully read the <a href="#">Privacy Policy</a> of using this system.</label>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
