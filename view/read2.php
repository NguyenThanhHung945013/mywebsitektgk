<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
     <meta name="viewport" container="width=device-width, initial-scale=1.0"> 
    <title>Anime</title>
    <link rel="stylesheet" type="text/css" href="../css/test.css">
    <link rel="stylesheet" type="text/css" href="../css/view.css">    
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css" />
    <link rel="icon" type="image/x-icon" href="../images/logoo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
  
    </style>
    </head>
    <body>
      <header>
        <div class="logo">
        <img  src="../images/icon123.png" alt="">
        <h1>
           
            WIBU.anime 
         </h1>
        </div>
        <div class="search-container">
          <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
        <div class="login">
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

          <div id="id01" class="modal">
            
            <form class="modal-content animate" action="/action_page.php" method="post">
              <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="../images/tokyo.jpg" alt="Avatar" class="avatar">
              </div>

              <div class="container">
                <label for="usname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                  
                <button type="submit">Login</button>
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
              </div>

              <div class="container" style="background-color:#f1f1f1">
                <button style="width: auto;padding: 8px 18px;background-color: #f44336;" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
              </div>
            </form>
        </div>
        <div class="sign_up">
          <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button>

          <div id="id02" class="modal">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            <form class="modal-content" action="/action_page.php">
              <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
          
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
          
                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                
                <label>
                  <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>
          
                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
          
                <div class="clearfix">
                  <button type="button" onclick="document.getElementById('id02').style.display='none'" style="width: 50%;padding: 8px 18px;background-color: #f44336;">Cancel</button>
                  <button type="submit" class="signupbtn">Sign Up</button>
                </div>
              </div>
            </form>
            
          </div>
          
          
        </div>
        <script>
      
          // Get the modal
          var modal2 = document.getElementById('id02');
          
          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
            if (event.target == modal) {
              modal.style.display = "none";
            }
          }
         
        // Get the modal
            var modal1 = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
              }
            }
        </script>
        </div>
        <div class="w3-dropdown-hover">
           <strong>
            <button type="button" class="btn btn-outline-danger">Setting</button>

            <div class="w3-dropdown-content w3-card-4">
                <a href="#" class="w3-bar-item w3-button">Acount</a>
                <a href="#" class="w3-bar-item w3-button">Change Password</a>
                <a href="#" class="w3-bar-item w3-button">Tải xuống</a>
                <a href="#" class="w3-bar-item w3-button">Lịch sử</a>
                <a href="#" class="w3-bar-item w3-button">log out</a>
            </div>
          </strong>
    </div>
    </header>

    
<!-- <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script> -->
<nav style="height: 40px;">
        <div class="w3-bar w3-light-grey">
          <a href="index.php?page=home" class="w3-bar-item w3-button"  style="margin-left: 10%; width: 7%;   background: rgb(221, 13, 13);"><strong>HOME</a>
          <a href="index.php?page=hot" class="w3-bar-item w3-button" style="width: 10%;">ANIME HOT</a>
          <a href="index.php?page=hay" class="w3-bar-item w3-button" style="width: 10%;">ANIME HAY</a> 
          

                <div class="w3-dropdown-hover">
                  <button class="w3-button" style="width: 100%; padding: 9px 30px 0px 30px;">THỂ LOẠI</button>
                  
                 
                        <div class="dropdown-content">
                                  <div class="column">
                                    <a href="#">MANGA</a>
                                    <a href="#">PHIÊU LƯA</a>
                                    <a href="#">HÀNH ĐỘNG</a>
                                    <a href="#">GAME</a>

                                  </div>
                                  <div class="column">
                                    <a href="#">TÌNH CẢM</a>
                                    <a href="#">HAREM</a>
                                    <a href="#">TUỔI 18</a>
                                    <a href="#">CÔNG CHÚA</a>

                                  </div>
                                  <div class="column">
                                    <a href="#">KINH DỊ</a>
                                    <a href="#">VÕ THUẬT</a>
                                    <a href="#">ANIME</a>
                                    <a href="#">SHOUNEN</a>
          
                                  </div>
                          </div>
                  </div>
          
          <!-- <div class="w3-dropdown-hover">
            <button class="w3-button" style="width: 100%; padding: 9px 30px 0px 30px;">QUỐC GIA</button>

            <div class="w3-dropdown-content w3-card-4">
                <a href="#" class="w3-bar-item w3-button">JAPAN</a>
                <a href="#" class="w3-bar-item w3-button">CHINA</a>
                <a href="#" class="w3-bar-item w3-button">KOREA</a>
            </div>
          </div> -->


          <a href="index.php?page=japan" class="w3-bar-item w3-button" style="width: 8%;">JAPAN</a> 
          <a href="index.php?page=china" class="w3-bar-item w3-button" style="width: 8%;">CHINA</a> 
          <a href="index.php?page=korea" class="w3-bar-item w3-button" style="width: 8%;">KOREA</a> 
          <a href="index.php?page=american" class="w3-bar-item w3-button" style="width: 8%;">AMERICAN</a> 
          <a href="index.php?page=xephang" class="w3-bar-item w3-button" style="width: 8%;">XẾP HẠNG</a> 

          <a href="https://www.facebook.com/groups/462914797417282" class="w3-bar-item w3-button" style="width: 8%;">GROUP</a> 
          </strong>
        </div>
      </div>
      </div>
    </nav>
    <h2>CHAPTER 1032 - One Piece</h2>
    <div class="hhh">
    <button type="button" class="btn btn-outline-primary"><a href="./"><-Chap trước</a></button>
    <button type="button" class="btn btn-outline-primary"><a href="read.php">Chap sau-></a></button>
    </div>
     <div>
    <img src="../images/0001.jpg" alt="0001" style="width:60% ; margin-left:20%;margin-right:20%;">
    <div>
    <img src="../images/0002.jpg" alt="0002"style="width:60% ; margin-left:20%;margin-right:20%;">
    </div>
    <div>
    <img src="../images/0003.jpg" alt="0003" style="width:60% ; margin-left:20%;margin-right:20%;">
     </div> 
     <div>
    <img src="../images/0004.jpg" alt="0004" style="width:60% ; margin-left:20%;margin-right:20%;">
     </div> 
     <div>
    <img src="../images/0005.jpg" alt="0005" style="width:60% ; margin-left:20%;margin-right:20%;">
     </div> 
     <div>
    <img src="../images/0005.jpg" alt="0006" style="width:60% ; margin-left:20%;margin-right:20%;">
     </div> 
     <div>
    <img src="../images/0006.jpg" alt="0007" style="width:60% ; margin-left:20%;margin-right:20%;">
     </div> 
     <div>
    <img src="../images/0007.jpg" alt="0008" style="width:60% ; margin-left:20%;margin-right:20%;">
     </div> 
     <div>
    <img src="../images/0008.jpg" alt="0009" style="width:60% ; margin-left:20%;margin-right:20%;">
     </div> 
     <div>
    <img src="../images/0009.jpg" alt="0010" style="width:60% ; margin-left:20%;margin-right:20%;">
     </div> 
     <div>
    <img src="../images/0010.jpg" alt="003" style="width:60% ; margin-left:20%;margin-right:20%;">
     </div> 
     <div class="aaa">
    <button type="button" class="btn btn-outline-primary"><a href="./"><-Chap trước</a></button>
    <button type="button" class="btn btn-outline-primary"><a href="./">Chap sau-></a></button>
    </div>
 </body>
</html>