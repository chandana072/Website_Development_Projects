<!DOCTYPE HTML>
<html>
    
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
    <style>
         @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
*{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}
body{
    height: 100vh;
    background-image: url(https://i.pinimg.com/originals/33/ba/21/33ba21ccda561739ab950d66e5616b82.gif);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
.filter{
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background-color: rgba(0,0,0,.3);
}
.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;

     background-color: rgba(0,0,0,.7);
    box-shadow: 0 0 10px rgba(255,255,255,.3);
}
.container h1{
    text-align: left;
    color: #fafafa;
    margin-bottom: 25px;
    text-transform: uppercase;
    border-bottom: 4px solid #2979ff;
   

}

.container form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #2979ff;
    color: #fff;
    font-size: 20px;
}
.container label{
    text-align: left;
    color: #90caf9;
}
.container form input::placeholder{
    color: #e2e2e2;
}
.container form button{
    width: 100%;
    padding: 5px 0;
    border: none;
    background-color:#2979ff;
    font-size: 18px;
    color: #fafafa;
}
.container form a{
    color: gray;
}
    </style>
    <body>
        <div class="filter"></div>
        <div class="container">
           <h1>Login</h1>
            <form action="processlogin.php" method="post">
                <label>Username</label><br>
                <input type="text" name="user_name"><br>
                <label>Password</label><br>
                <input type="password" name="user_password"><br>
               <label>Select User:</label>
               <select name="usertype">
                	<option value="admin">ADMIN</option>
                	<option value="user">USER</option>
                </select><br>
                <button>Log in</button>
                <center><a href="registration.php">Register</a></center>
            </form>
        </div>
        
    </body>
    
</html>