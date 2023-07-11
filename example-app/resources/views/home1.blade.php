<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
 
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
            font-family: 'Poppins', sans-serif;
        }
  
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 120px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
        }
  
        .logo {
            font-size: 25px;
            color: #080808;
            text-decoration: none;
            font-weight: 600;
        }
 
        nav a {
            font-size: 18px;
            color: #080808;
            text-decoration: none;
            font-weight: 500;
            margin-left: 35px;
            transition: .3s;
        }
 
        nav a:hover,
        nav a.active {
            color: #0ef;
        }
 
        .blue-div {
            margin-top: 10%;
            background-color: rgb(163, 204, 243);
            margin-left: 100px;
            margin-right: 100px;
            height: 500px;
            display: flex;
        }
 
        .left-div,
        .right-div {
            flex: 1;
        }
 
        .right-div {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
 
        .right-div h1 {
            font-weight: bold;
            font-size: 45px;
            margin-bottom: 10px;
        }
 
        .right-div p {
            font-size: 20px;
            display: block;
        }
 
        .button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #04664d;
            color: #000000;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            border-radius: 5px;
        }
         img {
  width: 60px;
  height: 60px;
  transition: transform 0.3s ease;
  animation: moveLeftRight 2s linear infinite;
}

@keyframes moveLeftRight {
  0% {
    transform: translateX(0);
  }
  50% {
    transform: translateX(20px);
  }
  100% {
    transform: translateX(0);
  }
}

 img:hover {
  transform: translateX(-10px);
}


.circle-container {
  position: relative;
  width: 200px; 
  height: 200px; 
  overflow: hidden;
}

.half-circle {
  position: absolute;
  width: 100%;
  height: 50%;
  overflow: hidden;
  transform-origin: bottom;
  animation: moveUpAndDown 2s ease-in-out infinite;
}

.half-circle img {
  display: block;
  width: 100%;
  height: auto;
}

@keyframes moveUpAndDown {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
  100% {
    transform: translateY(0);
  }
}

.card-item {
  margin-top: 10%;
  margin-left: 100px;
  margin-right: 100px;
  padding: 10px;
  border: none;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease-in-out;
  width: 400px;
}
.card-item:hover {
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
  transform: translateY(-2px);
}
.card-item-description {
  font-size: 15px;
  margin-bottom: 10px;
  color: rgb(53, 48, 48);
}
.card-item-description p{
  font-size: 25px;
  color: #383333;
}
.card-body {
  margin-left: 2%;
}
ul {
  list-style-type: none;
}
.card-body  h1{
margin-bottom:5%;
font-size: 50px;
color: #04664d;
text-align: center;
}
.card-body h2{
font-size: 30px;
color: #222525;
}
.card-body {
    margin-top: 5%;
  margin-left: 2%;
  display: flex; 
}

.card-list {
  flex: 1; 
  margin-right: 3px; /*  espacement entre les éléments */
}

    </style>
</head>
<body>
    <header>
        <a href="#" class="logo">CMS.</a>
 
        <nav>
            <a href="#home" class="active">Home</a>
            <a href="#about">About Us</a>
            <a href="#services">Features</a>
            <a href="#portfolio">Pricing</a>
            <a href="#contact">Blogs</a>
            <a href="#contact">Contact Us</a>
            <a href="#contact">Marketplace</a>
            <a href="#contact">Login</a>
        </nav>
    </header>
    <div class="blue-div">
        <div class="left-div">
            <div class="circle-container">
                <div class="half-circle">
                  <img src="kisspng-semicircle-geometric-shape-geometry-free-range-eggs-5ae911ac678113.977680541525223852424.png" alt="Votre image">
                </div>
              </div>
              

            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_tco2osel.json" background="transparent" speed="1" style="width: 500px; height: 500px;"></lottie-player>
        </div>
        
        <div class="right-div">
            <img src="cube-png-18939.png" alt="Votre image">
            <h1>Grow up your business with MailPlus Landing Page.</h1>
            <p>The simplest and fastest way to build a website for saas, software & startup.</p>
            <button class="button">Get started</button>
        </div>
    </div>


    <div class="card-body">
          <ul class="card-list">
            <li class="card-item">
              <h1 class="card-item-title">95%</h1>
              <h2>Happy Customer.</h2>
              <p class="card-item-description"><strong>Progressively maintain extensive infomediaries via extensible niches. Dramatically disseminate standardized metrics after resource-leveling processes.</strong></p>
    
            </li>
           </ul>
           <ul class="card-list">
            <li class="card-item">
              <h1 class="card-item-title">99%</h1>
              <h2>Project Success.</h2>
              <p class="card-item-description"><strong>Distinctively re-engineer revolutionary meta-services and premium architectures. Intrinsically incubate intuitive opportunities and real-time potentialities.</strong></p>
    
            </li>
           </ul>
    </div>
    


</body>
</html>
