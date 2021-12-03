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
    <link rel="stylesheet" type="text/css" href="./css/test.css">
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css" />
    <link rel="icon" type="image/x-icon" href="./images/logoo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
  
    </style>
  
    </head>
    <body>
      <header>
        <div class="logo">
        <img  src="./images/icon123.png" alt="">
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
                <img src="./images/fb5.png" alt="Avatar" class="avatar">
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
        <!-- Right Side -->
        <!-- <div class="btn-group float-end">
               
                <i class="bi bi-person-circle"></i>
                <span><button type="button" class="btn btn-outline-warning">Acount/PassWord</button></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a href="#" class="dropdown-item"><i class="bi bi-lock-fill"></i> Change Password</a></li>
                    <li><a href="#" class="dropdown-item"><i class="bi bi-gear-fill"></i> Admin Setion</a></li>
                    <li><a href="#" class="dropdown-item"><i class="bi bi-gear-wide-connected"></i> IMAP Settings</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a href="#" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Sign out</a></li>
                </ul>
            </div>
        </div>
    </div> -->
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
            <!-- <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div> -->
</div>
  
      </header>

    
    <!-- <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script> -->
    <nav style="height: 40px;">
        <div class="w3-bar w3-light-grey">
          <a href="index.php?page=home" class="w3-bar-item w3-button"  style="margin-left: 10%; width: 7%;   background: rgb(221, 13, 13);"><strong>HOME</a>
          <a href="index.php?page=hot" class="w3-bar-item w3-button" style="width: 8%;">ANIME HOT</a>
          <a href="index.php?page=hay" class="w3-bar-item w3-button" style="width: 8%;">ANIME HAY</a> 
          

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
          
          <div class="w3-dropdown-hover">
            <button class="w3-button" style="width: 100%; padding: 9px 30px 0px 30px;">QUỐC GIA</button>

            <div class="w3-dropdown-content w3-card-4">
                <a href="#" class="w3-bar-item w3-button">JAPAN</a>
                <a href="#" class="w3-bar-item w3-button">CHINA</a>
                <a href="#" class="w3-bar-item w3-button">KOREA</a>
            </div>
          </div>
          <a href="#" class="w3-bar-item w3-button" style="width: 8%;">XẾP HẠNG</a> 
          <a href="index.php?page=boy" class="w3-bar-item w3-button" style="width: 8%;">CON TRAI</a> 
          <a href="index.php?page=girl" class="w3-bar-item w3-button" style="width: 8%">CON GÁI</a> 
          <a href="#" class="w3-bar-item w3-button" style="width: 7%;">VIDEO</a> 
          <a href="https://www.facebook.com/groups/462914797417282" class="w3-bar-item w3-button" style="width: 8%;">GROUP</a> 
          </strong>
        </div>
      </div>
      </div>
      
    </nav>
    <section class="section">
      <div class="w3-content w3-display-container">
        <img class="mySlides" src="./images/anime.jpg" style="width:100% ;height: 400px;">
        <img class="mySlides" src="./images/slide1.png" style="width:100% ;height: 400px; ">
        <img class="mySlides" src="./images/dragon-ball-super-21448-715x402.jpg" style="width:100% ;height: 400px;">
        <img class="mySlides" src="./images/slide.jpg" style="width:100% ;height: 400px; ">
        <img class="mySlides" src="./images/slideonepiece.jpg" style="width:100% ;height: 400px; ">
        <img class="mySlides" src="./images/borutoo.png" style="width:100% ;height: 400px; ">
        <img class="mySlides" src="./images/10.png" style="width:100% ;height: 400px; ">
        <img class="mySlides" src="./images/yaiba.png" style="width:100% ;height: 400px; ">
        
        
        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
      </div>
      <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
          showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length} ;
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
            }
            x[slideIndex-1].style.display = "block";
          }
          var slideIndex = 0;
          carousel();
          function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > x.length) {slideIndex = 1}
            x[slideIndex-1].style.display = "block";
            setTimeout(carousel, 5000); // Change image every 2 seconds
          }
        </script>
    </section>
    <div class="main">
      
      
      <?php
          if(isset($_GET['page'])){
            // $currentPage = $_GET['page'];
            // echo "<h1>{$currentPage}<h1>";
            $pagePath = "./section/{$_GET['page']}.php";
            // echo $pagePath;
            include_once($pagePath);
          }
          else
           include_once './section/home.php' ;
        ?>
   
     
      <article id="right">
        <div class="menu_right">
        <h3><i><strong>Bảng Xếp Hạng All</strong></i></h3>
           <ul>
            <div class="r_c_wrap">
              <span class="r_c"style="background-color: #d31a1a ">01</span>
            </div>
            <img src="images/onepiece.png" alt="" style="width:60px ;">
            <div ><a href=""> <b> One Piece<br> </b>Chapter 1033/???
              <span><br>Lượt xem:2,7934</span></a>
            </div>
            <div class="r_c_wrap">
              <span class="r_c"style="background-color: #37c21b ">02</span>
            </div>
            <img src="images/daragon.jpg" alt=""  style="width:60px ;">
            <div><a href=""><b> Boruto</b><br>Chapter 1033</a></div>
            <div class="r_c_wrap">
              <span class="r_c"style="background-color: #390f82 ">03</span>
            </div>
            <img src="images/onepusman.png" alt=""  style="width:60px ;">
            <div><a href=""><b> One Piece</b> <br>Chapter 1033</a></div>
            
              <div class="r_c_wrap" >
              <span class="r_c">06</span>
            </div>
            <img src="images/naruto.png" alt=""  style="width:60px ;">
            <div><a href=""><b> One Piece </b><br>Chapter 1033</a></div>
           
            <div class="r_c_wrap">
              <span class="r_c">08</span>
            </div>
            <img src="images/pokemon.png" alt=""  style="width:60px ;">
            <div><a href=""><b> One Piece</b> <br>Chapter 1033</a></div>
            <div class="r_c_wrap">
              <span class="r_c">07</span>
            </div>
            <img src="images/doraemon.png" alt="" style="width:60px ;">
            <div><a href=""><b> Doramon</b> <br>Chapter 1033</a></div>
          
            </ul>
          </div>
       
          <h2 >Bình Luận Mới</h2><hr>
        
        <div class="container" >
          <img src="./images/ricardo.png" alt="Avatar" class="right" style="width:40px ;height:40px" >>
          Ricardo Milos 09:15
          <p>Nhanh Ra tập mới chờ lâu quá ??????<br>
          Cảm ơn Admin</p>
        
        </div>
        <hr>
        <div class="container darker">
          <img src="images/fb.png" alt="Avatar" class="right" style="width:40px ;height:40px">
          Bùi Tiến 12:30
          <p>Hay vl<img src="./images/icon.png" alt="Avatar"  class="right" style="width:40px ;height:40px"></p>
          
        </div>
        <hr>
        <div class="container">
          <img src="images/fb1.png" alt="Avatar"  class="right" style="width:40px ;height:40px">
          Vũ Văn Duy 23:12
          <p>Hay quá đê, một lúc nào đó đi okinawa mới được :)) gặp lại mấy mén này ở phần 3 thôi</p>
          
        </div>
        <hr>
        <div class="container darker">
          <img src="./images/fb4.png" alt="Avatar" class="right" style="width:40px ;height:40px">
          Thành Hưng 03:26
          <p>nghe đâu tháng 12 chuẩn bị delay thêm 1 tập nữa     </p>
          
        </div><hr>
        <div class="container">
          <img src="./images/fb2.png" alt="Avatar"  class="right" style="width:40px ;height:40px"> Thành Hưng Nguyễn  13:24<br>
          
          <p>bao tuần rồi mà chưa có tập mới<img src="./images/111.png" alt="Avatar"  class="right" style="width:40px ;height:40px">  </p>
         
        </div><hr>
        <div class="container">
          <img src="./images/tym.jpg" alt="Avatar"  class="right" style="width:40px ;height:40px">
           Người Dùng FaceBook 23:59
          <p>Trầm cảm main bá quá buff  như hack </p>
          
        </div><hr>
        <div class="container">
          <img src="./images/fb5.png" alt="Avatar"  class="right" style="width:40px ;height:40px">
           Người Dùng FaceBook 00:15
          <p>như hạch đợi 1 tuần lễ coi recap má <img src="./images/000.png" alt="Avatar"  class="right" style="width:40px ;height:40px"></p>
          
        </div><hr>
        <div class="container">
          <img src="./images/itachi.png" alt="Avatar"  class="right" style="width:40px ;height:40px">
            Uchiha Itachi 00:01
          <p>đợi cả tuần để xem 86 với phim này rồi nhận được là 2 tập 7,5  <img src="./images/mophat.png" alt="Avatar"  class="right" style="width:40px ;height:40px"> </p>
          
         
        </div>

      </article>
     
    </div>
    <strong>
    <div aria-label="Page navigation example" style="margin-left: 35%;  margin-top:15px;">
      <ul class="pagination">
        
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">....</a></li>
        <li class="page-item"><a class="page-link" href="#">55</a></li>
        <li class="page-item"><a class="page-link" href="#">66</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </div> 
    <footer class="py-5">
    <img src="./images/footer.png" alt="Avatar"  style="width:200px ;height:70px;float:right">


</div>
    
      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
          <symbol id="bootstrap" viewBox="0 0 118 94">
            <title>Bootstrap</title>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
          </symbol>
          <symbol id="facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
          </symbol>
          <symbol id="instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
          </symbol>
          <symbol id="twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
          </symbol>
        </svg>
      <div class="container">
          <div class="row">
            <div class="col-2">
              <h5>Wibu Anime</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">anime vietsub</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">anime new</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">anime hot</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">anime thịnh hành</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">anime ngôn tình</a></li>
              </ul>
            </div>
            <div class="col-2">
              <h5>Bộ Truyện</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"> Truyện Hàn Quốc</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Truyện Nhật Bản</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Truyện Trung Quốc</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Phim Mỹ</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
              </ul>
            </div>
            <div class="col-2">
              <h5>Thể loại hay</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Hài hước</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kinh dị</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Hoạt hình</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Video Anime</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Ngôn Tình</a></li>
              </ul>
            </div>
            
            <div class="col-4 offset-1">
            <div>
            
              <form>
                <h5>Đăng Ký</h5>
                <p>Hãy để lại gmail của bạn để nhận phim mới nhất trong năm nay nhé</p>
                <div class="d-flex w-100 gap-2">
                  <label for="newsletter1" class="visually-hidden">Email address</label>
                  <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                  <button class="btn btn-primary" type="button">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
          <div class="d-flex justify-content-between py-4 my-4 border-top">
            <p>&copy; Copyright © ANME.wibu.net</p>
            <ul class="list-unstyled d-flex">
              <li class="ms-3"><a class="link-blue" href="#"><svg class="bi" width="24" height="26"><use xlink:href="#twitter"/></svg></a></li>
              <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
              <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
            </ul>
          </div>
      </div>
      

   </footer>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    
    </body>
</html>