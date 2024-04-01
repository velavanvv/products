<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../products/css/register.css">
     
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   <title>Responsive Regisration Form </title>
</head>
<body>
    <div class="container">
        <header>Registration</header>

        <form action="database.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span><hr>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" name="username" placeholder="Enter your name" required>
                        </div>

                       

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>

                      

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Identity Details</span><hr>

                    <div class="fields">
                     
                     
                    <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="text" name="number" placeholder="Enter mobile number" required>
                        </div>
                      

                        <div class="input-field">
                            <label>Adress</label>
                            <textarea type="text" name="adress" placeholder="Enter Adress" required></textarea>
                        </div>

                        <div class="input-field">
                            <label>Issued Date</label>
                            <input type="date" name="date" placeholder="Enter your issued date" required>
                        </div>

                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

          

            </div>
        </form>
 	
</div>
    <script src="../products/js/register.js"></script>
</body>
</html>