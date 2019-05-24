<html>
  <head>
    <!-- Bootstrap core CSS -->
  <link href="cover/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="coverall.min.css" rel="stylesheet">
<link rel="stylesheet" href="cover/simple-line-icons.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

<!-- Plugin CSS -->
<link rel="stylesheet" href="cover/device-mockups.min.css">

<!-- Custom styles for this template -->
<link href="cover/new-age.min.css" rel="stylesheet">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">Kritsada Kh.</a>
      </div>
  </nav>

  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-7 my-auto">
          <div class="header-content mx-auto">
            <h1 class="mb-5">อันนยองฮาเซโย! <br>ปาร์คจีแมนอิมนีดา <br> เน มาอึม ซอเก ชอจัง! <br> คัมซาฮัมนีดา!</h1>
            <a href="index.html" class="btn btn-outline btn-xl js-scroll-trigger" target="_blank">WelCome To My World</a>
            <a href="Project/pjphp/index.php" class="btn btn-outline btn-xl js-scroll-trigger" target="_blank" >Term Project</a>
            
          </div>
        </div>
        <div class="col-lg-5 my-auto">
          <div class="device-container">
            <div class="device-mockup iphone6_plus portrait white">
              <div class="device">
                <div class="screen">
                <div id = "slide1">
                <div class="w3-content w3-section" style="max-width:300px">
                  <img class="mySlides" src="IMG/T1.jpg" style="width:100%">
                  <img class="mySlides" src="IMG/T2.jpg" style="width:100%">
                  <img class="mySlides" src="IMG/T3.jpg" style="width:100%">
                  <img class="mySlides" src="IMG/T4.jpg" style="width:100%">
                  <img class="mySlides" src="IMG/T5.jpg" style="width:100%">
                  <img class="mySlides" src="IMG/T6.jpg" style="width:100%">
                  <img class="mySlides" src="IMG/T7.jpg" style="width:100%"> 
                  <img class="mySlides" src="IMG/T8.jpg" style="width:100%">
                  <img class="mySlides" src="IMG/T9.jpg" style="width:100%">
                </div>
              </div>
      
              <script>
                var myIndex = 0;
                carousel();
                
                function carousel() {
                  var i;
                  var x = document.getElementsByClassName("mySlides");
                  for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                  }
                  myIndex++;
                  if (myIndex > x.length) {myIndex = 1}    
                  x[myIndex-1].style.display = "block";  
                  setTimeout(carousel, 2000); // Change image every 2 seconds
                }
                </script>
                
                </div>
                
                <div class="button">
                  <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  


            <marquee scrolldelay="50" direction="left">Im Nayeon,Yoo Jeongyeon,Momo jjang,Sana jjang,Park Jihyo,Mina jjang,Kim Dahyun,Son Chaeyoung,Zhou Tzuyu,TWICE!</marquee>            
            
</div>
</body>
</html>
