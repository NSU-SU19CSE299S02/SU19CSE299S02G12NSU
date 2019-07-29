<?php
    if (!isset($_SESSION)) {
        session_start();
    
    }
?>
<?php
 
  include 'library.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>home page</title>
</head>

<body>
    <div class="hero">
        <div class="highway"></div>
        <div class="city"></div>
        <div class="car">
            <img src="img/car.png" alt="a car">
        </div>
        <div class="wheel">
            <img src="img/wheel.png"   class="back-wheel">
            <img src="img/wheel.png"   class="front-wheel">


            </div>   
             <div class="user_info">
            <div class="u_dp"><img src="img/user-512.png" alt=""></div>
            <h1 class="u_text">User Name</h1>
            
            
            
            <div class="u_his">
            
            
            
            <img src="img/download.png" alt="">
            </div>
            
            
            
            
        </div>
        
        
         <div class="search_form">
            <h1>Search Your Trip</h1>
             <form action="">
                <div class="location">
            <input type="text" name="Your_location" placeholder="location">
                </div>
                <div class="destination">
            <input type="text" name="Your_destination" placeholder="Destination">
                </div> 
                <div class="date">
            <input type="date" name="Your_tirp_date" placeholder="Date">
               
                </div>
                <div class="submit">
                    <button>Submit </button>
                </div>
                 
             </form>
         </div>

        </div>
    <nav>
  <ul>
    <li>
      <div class="home-icon">
        <div class="roof">
          <div class="roo2f-edge"></div>
        </div>
        <div class="front"></div>
      </div>
    </li>
    <li>
      <div class="about-icon">
        <div class="head">
          <div class="eyes"></div>
          <div class="beard"></div>
        </div>
      </div>
    </li>
    <li>
      <div class="work-icon">
        <div class="paper"></div>
        <div class="lines"></div>
        <div class="lines"></div>
        <div class="lines"></div>
      </div>
    </li>
    <li>
      <div class="mail-icon">
        <div class="mail-base">
          <div class="mail-top"></div>
        </div>
      </div>
    </li>
  </ul>
</nav>

</body>

</html>
