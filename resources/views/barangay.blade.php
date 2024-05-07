<!DOCTYPE html>
<html lang="en">

<head>
  <title>Brangay Profiling</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href=" {{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
  <script src="{{ asset('assets/js/jquery.js') }}"></script>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/307a1a6a59.js" crossorigin="anonymous"></script>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: "poppins", sans-serif; } /*home start*/ /*start of navbar*/ .header { position: sticky; top: 0; left: 0; width: 100%; padding: 0.75rem 10%; padding-top: 1rem; display: flex; justify-content: center; align-items: center; border-radius: 5rem; z-index: 100; } .transition-element { transition-timing-function: ease; } .header::before { content: ""; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: #0c2d57; z-index: -1; transition: background 0.3s ease; } /*login start*/ .btn-div { display: flex; flex-wrap: nowrap; gap: 10px; } .btnLogin-popup { width: 120px; height: 40px; background: transparent; border: 2px solid #fbb040; outline: none; border-radius: 6px; cursor: pointer; font-size: 1em; color: #fbb040; font-weight: bold; } .btnContact-popup { width: 120px; height: 40px; background: transparent; border: 1px solid #fbb040; outline: none; border-radius: 6px; cursor: pointer; font-size: 1em; color: #fbb040; font-weight: bold; } .btn-popup { display: block; cursor: pointer; outline: none; overflow: hidden; position: relative; box-shadow: 0 5px 15px rgba(0,0,0,0.20); } .btn-popup span { position: relative; z-index: 1; } .btn-popup:after { content: ""; position: absolute; left: 0; top: 0; height: 320%; width: 140%; background: #fbb040; -webkit-transition: all .5s ease-in-out; transition: all .5s ease-in-out; -webkit-transform: translateX(-98%) translateY(-25%) rotate(45deg); transform: translateX(-98%) translateY(-25%) rotate(45deg); } .btn-popup:hover{ color: #0C2D57; } .btn-popup:hover:after { -webkit-transform: translateX(-9%) translateY(-25%) rotate(45deg); transform: translateX(-9%) translateY(-25%) rotate(45deg); } .container-wrapper { display: flex; justify-content: center; align-items: center; } .wrapper { position: fixed; top: 20%; width: 600px; height: 440px; background: transparent; border: 2px solid rgba(255, 255, 255, 0.5); border-radius: 20px; backdrop-filter: blur(20px); box-shadow: 0 0 30px rgba(171, 160, 4, 0.5); display: flex; justify-content: center; align-items: center; overflow: hidden; transform: scale(0); transition: transform 0.5s ease, height 0.2s ease; z-index: 1; } .wrapper.active-popup { transform: scale(1); } .wrapper.active { height: 520px; } .wrapper .form-box { width: 100%; padding: 40px; } .wrapper .form-box.login { transition: transform 0.18s ease; transform: translateX(0); } .wrapper.active .form-box.login { transition: none; transform: translateX(-600px); } .wrapper .form-box.contact { transition: transform 0.18s ease; transform: translateX(0); } .wrapper.active .form-box.contact { transition: none; transform: translateX(-600px); } .wrapper .icon-close { position: absolute; top: 0; right: 0; width: 45px; height: 45px; background: #162938; font-size: 2em; color: #fbb040; display: flex; justify-content: center; align-items: center; border-bottom-left-radius: 20px; cursor: pointer; z-index: 1; } .form-box h2 { font-size: 2em; color: #fbb040; text-align: center; } .input-box { position: relative; width: 100%; height: 50px; border-bottom: 2px solid #fbb040; margin: 30px 0; } .wrappers { height: 600px; top: 15%; background-color: #0c2d57; } .text-area { position: relative; width: 100%; height: 150px; border-bottom: 2px solid #fbb040; overflow: auto; resize: none; background-color: #0c2d57; outline: none; border: 2px solid #fbb040; border-radius: 10px; color: white; padding: 2px; } ::-webkit-scrollbar { width: 15px; } /* Track */ ::-webkit-scrollbar-track { box-shadow: inset 0 0 5px #0c2d57; } /* Handle */ ::-webkit-scrollbar-thumb { background: #fbb040; border-radius: 5px; } .area-box { margin-bottom: 30px; height: 150px; border: none; } .input-box label { position: absolute; top: 50%; left: 5px; transform: translateY(-50%); font-size: 1em; color: #fbb040; font-weight: 500; pointer-events: none; transition: 0.5s; } .input-box input:focus~label, .input-box input:valid~label { top: -5px; } .input-box input { width: 100%; height: 100%; background: transparent; border: none; outline: none; font-size: 1em; color: #fbb040; font-weight: 600; padding: 0 35px 0 5px; } .btn { width: 100%; height: 45px; background: transparent; border: 1px solid #fbb040; outline: none; border-radius: 6px; cursor: pointer; font-size: 1em; color: #fbb040; font-weight: 500; } .btn:hover { color: #fbb040; } /*login end*/ .nav a { font-size: 1rem; color: rgb(255, 255, 255); text-decoration: none; font-weight: 500; margin-left: 1rem; margin-right: 1rem; padding-left: 1rem; transition: transform 0.3s ease, opacity 0.3s ease; display: flex; justify-content: center; align-items: center; transition: all 0.3s ease ; } .nav { width: 50%; display: flex; justify-content: center; margin-left: 40px; flex-wrap: nowrap; transition: all 0.3s ease; } .nav a:hover{ font-size: 1.2rem; color: #fbb040; font-weight: bolder; text-shadow: 0 0 5px gold, 0 0 10px firebrick, 0 0 20px pink; } #check { display: none; transition: transform 0.3s ease, opacity 0.3s ease; } .icon { position: absolute; right: 5%; font-size: 2.15rem; color: #fbb040; cursor: pointer; display: none; } @media (max-width: 1500px) { .nav { width: auto; transition: transform 0.3s ease; } } @media (max-width: 742px) { header { height: 50px; } .wrapper { left: auto; width: 400px; max-width: fit-content; background-color: #0c2d57; } .btn-div { display: flex; flex-direction: row; justify-content: flex-start; width: 100%; padding-top: 10px; padding-bottom: 10px; gap: 5px; } .btnLogin-popup { width: auto; padding: 5px 20px; height: 30px; margin-left: 0; font-size: small; } .btnContact-popup { width: auto; padding: 0 10px; height: 30px; margin-left: 0; font-size: small; } .icon { display: inline-block; } #check:checked~.icon #menu-icon { display: none; } .icon #close-icon { display: none; } #check:checked~.icon #close-icon { display: block; } .nav { position: absolute; top: 100%; left: 0; width: 20%; height: 0; background: #0c2d57; backdrop-filter: blur(50px); border-radius:0 0 0 10%  ; box-shadow: 0  0.5rem rgba(0, 0, 0, 0.1); overflow: hidden; transition: all 0.3s ease; margin-left: 80%; } #check:checked~.nav { display: block; height: auto; overflow-y: auto; } .nav a { display: block; font-size: 1rem; margin: 1rem 0; text-align: center; transform: translateY(-50px); opacity: 0; transition: 0.3 ease; } #check:checked~.nav a { transform: translateY(0); opacity: 1; transition-delay: calc(0.2s * var(--i)); } .about-div div h1 { text-align: justify; } .about-div p { text-align: justify; } } /*end of navbar*/ /*main start*/ .container { display: flex; height: 100%; } .div-1 { display: flex; flex-direction: column; width: 50%; align-items: flex-start; gap: 3rem; } .div-2 { display: flex; flex-direction: row; width: 50%; height: 100%; } .captain-pic { width: auto; height: auto; display: flex; justify-content: center; padding-bottom: 1rem; padding-top: 1rem; transition: 0.7s; transform: translatex(40px); } .cap-img { width: auto; height: auto; -webkit-filter: drop-shadow(5px 5px 5px #fbb040); filter: drop-shadow(5px 0 5px #fbb040); border-bottom: 2px solid white; border-right: 2px solid white; box-shadow: rgba(251, 176, 64, 0.4) 5px 5px, rgba(251, 176, 64, 0.3) 10px 10px; transition: 0.7s; } .logo { width: 100%; max-width: 15rem; min-width: auto; } .logo-text { display: flex; background-color: #0c2d57; height: 90vh; flex-direction: column; } .logo-div { width: 100%; height: auto; display: flex; justify-content: flex-start; } .text-main { height: 100%; width: 100%; display: flex; flex-direction: column; justify-content: flex-start; padding: 0 1.5rem; } .text-main, h1 { color: #fbb040; text-align: start; font-weight: bolder; margin-bottom: 1rem; } .para-1 { font-size: smaller; } .para-2 { text-align: justify; width: 100%; } .main-icon .social-links a{ display: inline-block; height: 40px; width: 40px; background-color: rgba(255,255,255,0.2); margin:10px 10px 10px 0; text-align: center; line-height: 40px; border-radius: 50%; color: #ffffff; transition: all 0.5s ease; } .main-icon .social-links a:hover{ color: #24262b; background-color: #ffffff; } .text-main, p { color: white; margin-bottom: 0; } @media (max-width: 742px) { .div-2 { display: none; } .div-1 { width: 100%; } .logo-div { justify-content: center; } .logo { width: 100%; max-width: 15rem; } .rectangle { display: none; } } /*home end*/ /*about start*/ .about-div { display: flex; flex-direction: column; justify-content: center; text-align: center; color: #0c2d57; padding: 100px 50px 10px 50px; } .about-content { gap: 20px; } .about-content:nth-child(odd) { align-items: center; } .rectangle { width: 50px; height: 15px; background-color: #0c2d57; } .about-div p { color: #0c2d57; } .about-div p:nth-child(1) { text-align: start; font-size: small; font-weight: bold; } .about-line { display: flex; flex-direction: row; align-items: center; gap: 10px; } .line-p { width: 100px; height: 5px; background-color: #0c2d57; } .about-div h1 { text-align: center; } /*carousel start*/ .carousel-item { height: 35rem; } .carouse { padding-left: 3rem; } @media (max-width: 742px) { .carousel-item { height: auto; } } .carousel-inner { border-radius: 20px; } /*carousel end*/ /*b-mission start*/ .barangay-div { background-color: #0C2D57; height: 100vh; margin-top: 8rem; } .div-about { display: flex; flex-direction: column; justify-content: center; gap: 1.5rem; } .about-mis { width: 100%; height: 300px; padding: 1rem; background: rgba(0,0,0,0.5); border-radius: 20px; backdrop-filter: blur(10px); color: #fbb040; overflow: hidden; } .text-ca { height: 250px; } .text-cont { display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 1rem 5rem; text-align: justify; } .text-cont h5, .who-cont h5 { color: #ffffff; font-size: 1em; } @media (max-width: 770px) { .text-cont { padding: 0 1rem 3rem 1rem; } .b-who .who-cont { padding: 0 1rem; } .text-cont h5 { font-size: .85em; } .b-who .who-cont h5 { font-size: .85em; } } @media (max-width: 300px) { .text-cont { padding: 1rem 1rem 3rem 1rem; } .b-who .who-cont { padding: 0 1rem; } .text-cont h5 { font-size: .75em; } .b-who .who-cont h5 { font-size: .75em; } } .b-who { display: flex; flex-direction: column; justify-content: center; } .who-cont { padding: 0 5rem; } .who-cont h5 { text-align: justify; } /*b-mission end*/ /*service start*/ .title-word { animation: color-animation 4s linear infinite; } .title-word-1 { --color-1: #fbb040; --color-2: #0c2d57; --color-3: #e9322f; } .title-word-2 { --color-1: #DBAD4A; --color-2: #ACCFCB; --color-3: #17494D; } .title-word-3 { --color-1: #ACCFCB; --color-2: #E4A9A8; --color-3: #ACCFCB; } .title-word-4 { --color-1: #3D8DAE; --color-2: #DF8453; --color-3: #E4A9A8; } @keyframes color-animation { 0% { color: var(--color-1) } 32% { color: var(--color-1) } 33% { color: var(--color-2) } 65% { color: var(--color-2) } 66% { color: var(--color-3) } 99% { color: var(--color-3) } 100% { color: var(--color-1) } } .title { font-family: "Montserrat", sans-serif; font-weight: 800; text-transform: uppercase; } .title-head { display: flex; justify-content: center; align-items: center; } .service-main { padding-top: 1rem; display: flex; flex-direction: column; } .service-div { width: 100%; height: 100vh; display: flex; flex-wrap: wrap; gap: 2rem; row-gap: 3rem; padding: 1rem 3rem; justify-content: center; align-items: center; align-content: flex-start; overflow: auto; } .services { display: flex; flex-direction: column; justify-content: center; align-items: center; border-radius: 20% 10%; padding: 1rem; height: 80%; width: 80%; max-width: 250px; max-height: 300px; box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset; transition: max-width 0.3s ease, max-height 0.3s ease, transform 0.3s ease; } .services:hover { transform: translatey(-20px); } .serv-img { height: auto; width: auto; padding: .5rem; border-radius: 20% 10%; border: 3px solid #fbb040; } .serv-img img { aspect-ratio: 4/3; object-fit: contain; } .serv-cont { display: flex; justify-content: center; align-items: center; width: 100%; height: 20%; } .serv-cont h5 { font-size: 1em; font-weight: bold; text-transform: capitalize; } .custom-shape-divider-top-1710351725 { top: 0; left: 0; width: 100%; overflow: hidden; line-height: 0; } .custom-shape-divider-top-1710351725 svg { position: relative; display: block; width: calc(100% + 1.3px); height: 214px; } .custom-shape-divider-top-1710351725 .shape-fill { fill: #0c2d57; } .custom-shape-divider-bottom-1710438899 { bottom: 0; left: 0; width: 100%; overflow: hidden; line-height: 0; transform: rotate(180deg); } .custom-shape-divider-bottom-1710438899 svg { position: relative; display: block; width: calc(100% + 1.3px); height: 178px; } .custom-shape-divider-bottom-1710438899 .shape-fill { fill: #0C2D57; } .serv-icon { display: flex; justify-content: center; align-items: center; width: 100%; } .icon-serv { display: flex; justify-content: center; align-items: center; width: 50px; height: 50px; padding: 1px 0 0 0; border: 5px solid #fbb040; border-radius: 50%; } .icon-serv i { font-size: 3em; color: #0c2d57; } @media (max-width: 1000px) { .service-div { height: auto; padding: 1rem 5px; gap: 1rem; } .services { flex-direction: row; border-radius: 10%; gap: 20px; padding: 1rem; max-width: 300px; max-height: 100px; } .services:hover { transform: translatey(0); } .serv-cont h5 { font-size: 1em; } .icon-serv { border: none; } .serv-img { border: none; } } /*service end*/ /*map start*/ .map-main{ background-color: #0C2D57; } .map-div{ display: flex; justify-content: center; align-items: center; width: 100%; height:auto; padding: 3rem 0; } .div-map{ width: 100%; height: 100%; padding:0 1rem 3rem 1rem; } .map iframe{ width: 100%; height: 85vh; border-radius: 10px; } .map-title{ display: flex; flex-direction: column; justify-content: center; align-items: center; padding:1rem; } .map-title p:nth-child(1){ font-size: 50px; font-weight: bold; text-transform: capitalize; color: #fbb040; } .map-title p{ text-transform: uppercase; } /*map end*/ /*footer*/ .footer .container{ display: block; } .footer-con{ margin:auto; } .con-row{ display: flex; margin: 0; justify-content: center; } .footer-ul{ list-style: none; padding: 0; } .footer{ background-color: #24262b; padding: 70px 0; } .footer-col{ width: 25%; padding: 0 15px; } .footer-col h4{ font-size: 18px; color: #ffffff; text-transform: capitalize; margin-bottom: 35px; font-weight: 500; position: relative; } .footer-col h4::before{ content: ''; position: absolute; left:0; bottom: -10px; background-color: #DBAD4A; height: 2px; box-sizing: border-box; width: 50px; } .footer-col .footer-ul li:not(:last-child){ margin-bottom: 10px; } .footer-col .footer-ul li a{ font-size: 16px; text-transform: capitalize; color: #ffffff; text-decoration: none; font-weight: 300; color: #bbbbbb; display: block; transition: all 0.3s ease; } .footer-col .footer-ul li a:hover{ color: #ffffff; padding-left: 8px; } .footer-col .social-links a{ display: inline-block; height: 40px; width: 40px; background-color: rgba(255,255,255,0.2); margin:0 10px 10px 0; text-align: center; line-height: 40px; border-radius: 50%; color: #ffffff; transition: all 0.5s ease; } .footer-icons{ width: 200px ; min-width: 100px; } .footer-col .social-links a:hover{ color: #24262b; background-color: #ffffff; } .footer-logo-div{ width: 100%; max-width: 15rem; min-width: auto; } .logo-footer { width: 100%; height: auto; display: flex; justify-content: flex-start; } .div-log{ width: 100%; max-width:17rem; min-width: 10rem; padding: 0; } /*responsive*/ @media(max-width: 992px){ .footer-logo-div{ width: 100%; max-width: 10rem; } .div-log{ width: 100%; max-width:10rem; min-width: 6rem; } } @media(max-width: 768px){ .footer-col{ width: 50%; margin-bottom: 30px; } .div-log{ display: none; } .con-row{ justify-content: start; } } @media(max-width: 574px){ .footer-col{ width: 100%; } }
  </style>
</head>

<body>
  <!--home start-->
  <div id="home" class="invi-div"></div>
  <header class="header">
    <input type="checkbox" id="check" />
    <label for="check" class="icon">
      <i class="bx bx-menu" id="menu-icon"></i>
      <i class="bx bx-right-arrow-circle" id="close-icon"></i>
    </label>
    <nav class="nav">
      <a href="#home" style="--i: 0">Home</a>
      <a href="#about" style="--i: 1">About</a>
      <a href="#service" style="--i: 2">Service</a>
      <a href="#map" style="--i: 3">Map</a>
      <a href="{{ URL('faq') }}" style="--i: 4">FAQ</a>
    </nav>
    <div class="btn-div">
      <button class="btnLogin-popup btn-popup"><span>Login</span></button>
      <button class="btnContact-popup btn-popup"><span>Contact us</span></button>
    </div>
  </header>
  <div class="container-wrapper">
    <div class="wrapper">
      <span class="icon-close">
        <ion-icon name="close-outline"></ion-icon>
      </span>

      <div class="form-box login">
        <h2><b>Employee Login</b></h2>
        <form class="" action="" method="post" autocomplete="off">
          <div class="input-box">
            <input type="text" name="usernameemail" required value="">
            <label for="">Username</label>
          </div>
          <div class="input-box">
            <input type="password" name="password" required value="">
            <label for="">Password</label>
          </div>
          <button type="submit" class="btn" id="btn-con" name="submit">Login</button>
        </form>
      </div>
    </div>
  </div>

  <div class="container-wrapper">
    <div class="wrapper wrappers">
      <span class="icon-close closes">
        <ion-icon name="close-outline"></ion-icon>
      </span>

      <div class="form-box contact">
        <h2><b>Get in touch to us</b></h2>
        <form id="con-form" action="https://api.web3forms.com/submit" method="POST">
          <input type="hidden" name="access_key" value="b2279cbc-c09a-4c6a-b047-372d74c39efd">
          <div class="input-box">
            <input id="name-con" name="Name" type="text" required autocomplete="off" />
            <label>Name</label>
          </div>
          <div class="input-box">
            <input id="email-con" name="Email" type="email" required autocomplete="off" />
            <label>Email</label>
          </div>
          <div class="input-box">
            <input id="number-con" name="Number" type="text" required autocomplete="off" />
            <label>Phone number</label>
          </div>
          <div class="input-box area-box">
            <textarea class="text-area" name="Message" id="message" rows="4" placeholder="Tell us your concern..."></textarea>
          </div>
          <button type="submit" class="btn" id="btn-con" onclick="clearContact( )">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <div class="p-1 text-white text-center logo-text">
    <div class="container">
      <div class="p-1 div-1">
        <div class="p-1 logo-div">
          
          <img  class="logo img-responsive" src="{{ URL('assets/images/LOGO.png') }}" alt="logo">
        </div>

        <div class="text-main">
          <p class="para-1">Discover the -</p>
          <h1>
            Barangay profiling<br />
            Davao City
          </h1>
          <p class="para-2">
            The most exciting district of Matina, Davao, get your opportunity
            to move forward together.
          </p>
          <div class="main-icon">
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="p-1 div-2">
        <div class="img-fluid captain-pic">
          <img class="cap-img" src="{{ URL('assets/images/grim.png') }}" alt="" />
        </div>
      </div>
    </div>
  </div>
  <!--home end-->

  <!--about start-->
  <div id="about" class="container mt-5 landing about-div">
    <div class="container about-content">
      <div class="container rectangle left"></div>
      <div>
        <div class="about-line">
          <p>
            About us
          <div class="line-p"></div>
          </p>
        </div>
        <h1>If you change your city, you're changing the world</h1>
        <p>Barangay Matina is determined to address everything that hinder its way to be the best.</p>
      </div>
      <div class="container rectangle right"></div>
    </div>
  </div>

  <div class="container mt-5 carouse">
    <div class="row container">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ URL('assets/images/hong3.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2>First slide label</h2>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ URL('assets/images/hong2.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2>Second slide label</h2>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ URL('assets/images/hong3.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2>Third slide label</h2>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

  <div id="mission" class="p-1 text-white text-center barangay-div">
    <div class="container div-about">
      <div class="about-mis">
        <h2><b>Our Barangay</b></h2>

        <div id="carouselExampleCaptionss" class="carousel slide text-ca" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptionss" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptionss" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptionss" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item text-ab active">

              <div class="text-cont">
                <h2>Goal</h2>
                <h5>Our overarching goal is to create a dynamic and inclusive
                  community where every resident feels empowered to actively participate in
                  shaping the future of Barangay [Name]. By fostering a culture of inclusivity,
                  accountability, and shared responsibility, we aim to build strong social connections,
                  promote civic engagement, and inspire positive change that enhances the quality of life
                  for all residents. Through collaborative efforts and collective action, we believe that Barangay
                  [Name] can truly thrive as a beacon of progress and prosperity in our region.</h5>
              </div>
            </div>
            <div class="carousel-item  text-ab">

              <div class="text-cont">
                <h2>Mission</h2>
                <h5>Barangay [Name] is committed to realizing the following key goals: to create a dynamic and inclusive
                  community where every resident feels empowered to actively participate in shaping the future of
                  Barangay [Name]. Through proactive engagement, transparent governance, and collaboration with
                  stakeholders, we strive to establish an environment where residents are encouraged to voice their
                  opinions, contribute their skills, and work towards common goals that benefit the entire community.</h5>
              </div>
            </div>
            <div class="carousel-item  text-ab">

              <div class="text-cont">
                <h2>Vission</h2>
                <h5>At Barangay [Name], our vision is to cultivate a thriving and harmonious community,
                  where every resident is empowered to contribute towards sustainable progress. We envision
                  a place where individuals from diverse backgrounds come together, fostering a sense of unity,
                  cooperation, and collective responsibility towards building a better future for generations to come.</h5>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptionss" data-bs-slide="prev">
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptionss" data-bs-slide="next">
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="about-mis">
        <div class="b-who">
          <div class="who-cont">
            <h2><b>Who we are</b></h2>
          </div>
          <div class="who-cont">
            <h5>Barangay [Name] is a vibrant community, rich in history and culture, founded on [Date].
              \Our residents, diverse in background and united in purpose, form the heart and soul of our barangay.
              Together, we celebrate our traditions, support one another, and work towards common goals. With
              a spirit of inclusivity and cooperation, we strive to create a welcoming environment where every
              voice is heard and every individual is valued. In Barangay [Name], we are committed to building a
              brighter future for all, guided by the principles of unity, integrity, and progress.</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--about end-->

  <!--service start-->

  <div id="service" class="custom-shape-divider-top-1710351725">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
      <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
      <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
    </svg>
  </div>

  <div class="container service-main">

    <div class="container title-head">
      <h1 class="title">
        <span class="title-word title-word-1">visit</span>
        <span class="title-word title-word-2">our</span>
        <span class="title-word title-word-3">online</span>
        <span class="title-word title-word-4">service</span>
      </h1>
    </div>

    <div class="service-div">
      <div class="services">

        <div class="serv-img ">
          <img class="img-fluid" src="{{ URL('assets/images/cert.svg') }}" alt="">
        </div>

        <div class="serv-cont">
          <h5>barangay Certification</h5>
        </div>

        <div class="serv-icon">
          <div class="icon-serv">
            <a href="{{ URL('clearance') }}"><i class='bx bx-chevron-right'></i></a>
          </div>
        </div>

      </div>

      <div class="services">

        <div class="serv-img">
          <img class="img-fluid " src="{{ URL('assets/images/cert2.svg') }}" alt="">
        </div>

        <div class="serv-cont">
          <h5>Business permit</h5>
        </div>

        <div class="serv-icon">
          <div class="icon-serv">
            <a href="{{ URL('bussiness') }}"><i class='bx bx-chevron-right'></i></a>
          </div>
        </div>

      </div>

      <div class="services">

        <div class="serv-img">
          <img class="img-fluid" src="{{ URL('assets/images/cert3.svg') }}" alt="">
        </div>

        <div class="serv-cont">
          <h5>certificate of indigency</h5>
        </div>

        <div class="serv-icon">
          <div class="icon-serv">
            <a href="{{ URL('indegency') }}"><i class='bx bx-chevron-right'></i></a>
          </div>
        </div>

      </div>

      <div class="services">

        <div class="serv-img">
          <img class="img-fluid" src="{{ URL('assets/images/cert5.svg') }}" alt="">
        </div>

        <div class="serv-cont">
          <h5>Certificate of Residency</h5>
        </div>

        <div class="serv-icon">
          <div class="icon-serv">
            <a href="{{ URL('residence') }}"><i class='bx bx-chevron-right'></i></a>
          </div>
        </div>

      </div>

      <div class="services">

        <div class="serv-img">
          <img class="img-fluid" src="{{ URL('assets/images/cert6.svg') }}" alt="">
        </div>

        <div class="serv-cont">
          <h5>barangay ID</h5>
        </div>

        <div class="serv-icon">
          <div class="icon-serv">
            <a href="{{ URL('ID') }}"><i class='bx bx-chevron-right'></i></a>
          </div>
        </div>

      </div>


    </div>
  </div>

  <div id="map" class="custom-shape-divider-bottom-1710438899">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
      <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
      <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
    </svg>
  </div>


  <div class="map-main">

    <div class="container map-title">
      <p>Visit us</p>
      <p>you can get in touch to us onsite</p>
    </div>

    <div class="container map-div">
      <div class="div-map">
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4708.6937741997335!2d125.5921364935042!3d7.065109550355031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d65ac7d3493%3A0xa54471a513d5fc70!2sUniversity%20of%20Mindanao%20-%20Matina!5e0!3m2!1sen!2sph!4v1710439952235!5m2!1sen!2sph" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>


  <footer class="footer">
    <div class="container footer-con">
      <div class="row con-row">

        <div class="div-log">
          <div class="footer-col footer-logo-div">
            <img class="logo-footer img-responsive" src="{{ URL('assets/images/LOGO.png') }}" alt="logo" />
          </div>
        </div>

        <div class="footer-col">
          <h4>Page</h4>
          <ul class="footer-ul">
            <li><a href="#about">about us</a></li>
            <li><a href="#service">our services</a></li>
            <li><a href="#map">map</a></li>
            <li><a href="#mission">mission</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>get help</h4>
          <ul class="footer-ul">
            <li><a href="{{ URL('faq') }}">FAQ</a></li>
            <li><a href="{{ URL('terms') }}">Terms & Conditions</a></li>
            <li><a href="{{ URL('disclaimer') }}">Disclaimer</a></li>
            <li><a href="{{ URL('privacy') }}">privacy policy</a></li>
          
           
          </ul>
        </div>

        <div class="footer-col footer-icons">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="https://smtpjs.com/v3/smtp.js"></script>
  <script>
    const wrapper = document.querySelector(".wrapper");
    const wrappers = document.querySelector(".wrappers");
    const btnPopup = document.querySelector(".btnLogin-popup");
    const btnPopupContact = document.querySelector(".btnContact-popup");
    const iconClose = document.querySelector(".icon-close");
    const closes = document.querySelector(".closes");

    function clearContact() {
      const formContact = document.getElementById('con-form');
      formContact.submit();
      formContact.reset();
    }

    btnPopup.addEventListener("click", () => {
      wrapper.classList.add("active-popup");
      wrappers.classList.remove("active-popup");
    });
    btnPopupContact.addEventListener("click", () => {
      wrappers.classList.add("active-popup");
      wrapper.classList.remove("active-popup");
    });
    iconClose.addEventListener("click", () => {
      wrapper.classList.remove("active-popup");
    });
    closes.addEventListener("click", () => {
      wrappers.classList.remove("active-popup");
    });
  </script>
</body>

</html>