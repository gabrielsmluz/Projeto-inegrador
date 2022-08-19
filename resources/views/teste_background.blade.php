<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>Teste Background</title>
    <style>
    @import url(//fonts.googleapis.com/css?family=Lato:300:400);

body {
margin:0;
}

h1 {
font-family: 'Lato', sans-serif;
font-weight:300;
letter-spacing: 2px;
font-size:48px;
}
p {
font-family: 'Lato', sans-serif;
letter-spacing: 1px;
font-size:14px;
color: #333333;
}

.header {
position:relative;
text-align:center;
background: linear-gradient(60deg, rgba(84,58,183,1) 0%, rgba(0,172,193,1) 100%);
color:white;
}
.logo {
width:50px;
fill:white;
padding-right:15px;
display:inline-block;
vertical-align: middle;
}

.inner-header {
height:65vh;
width:100%;
margin: 0;
padding: 0;
}

.flex { /*Flexbox for containers*/
display: flex;
justify-content: center;
align-items: center;
text-align: center;
}

.waves {
position:relative;
width: 100%;
height:15vh;
margin-bottom:-7px; /*Fix for safari gap*/
min-height:100px;
max-height:150px;
}

.content {
position:relative;
height:20vh;
text-align:center;
background-color: white;
}

/* Animation */

.parallax > use {
animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
}
.parallax > use:nth-child(1) {
animation-delay: -2s;
animation-duration: 7s;
}
.parallax > use:nth-child(2) {
animation-delay: -3s;
animation-duration: 10s;
}
.parallax > use:nth-child(3) {
animation-delay: -4s;
animation-duration: 13s;
}
.parallax > use:nth-child(4) {
animation-delay: -5s;
animation-duration: 20s;
}
@keyframes move-forever {
0% {
 transform: translate3d(-90px,0,0);
}
100% {
  transform: translate3d(85px,0,0);
}
}
/*Shrinking for mobile*/
@media (max-width: 768px) {
.waves {
  height:40px;
  min-height:40px;
}
.content {
  height:30vh;
}
h1 {
  font-size:24px;
}
}
    </style>
  </head>
  <body>
    <!--Hey! This is the original version
of Simple CSS Waves-->

<div class="header">

<!--Content before waves-->
<div class="inner-header flex">
<!--Just the logo.. Don't mind this-->
<svg version="1.1" class="logo" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" xml:space="preserve">
<path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283" />
<g><path fill="#fff"
d="M250.4,0.8C112.7,0.8,1,112.4,1,250.2c0,137.7,111.7,249.4,249.4,249.4c137.7,0,249.4-111.7,249.4-249.4
C499.8,112.4,388.1,0.8,250.4,0.8z M383.8,326.3c-62,0-101.4-14.1-117.6-46.3c-17.1-34.1-2.3-75.4,13.2-104.1
c-22.4,3-38.4,9.2-47.8,18.3c-11.2,10.9-13.6,26.7-16.3,45c-3.1,20.8-6.6,44.4-25.3,62.4c-19.8,19.1-51.6,26.9-100.2,24.6l1.8-39.7		c35.9,1.6,59.7-2.9,70.8-13.6c8.9-8.6,11.1-22.9,13.5-39.6c6.3-42,14.8-99.4,141.4-99.4h41L333,166c-12.6,16-45.4,68.2-31.2,96.2	c9.2,18.3,41.5,25.6,91.2,24.2l1.1,39.8C390.5,326.2,387.1,326.3,383.8,326.3z" />
</g>
</svg>

<main class="form-signin w-25 d-flex justify-content-center bg-light bg-gradient bg-opacity-25 border-primary border-opacity-25 border border-3 p-3 container-lg rounded">
  <div class="d-flex justify-content-center">
    <form class="p-3">
      <h1 class="fw-bold text-black h3 mb-3 fw-normal">Login do Gerente Responsável</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="InputLogin" placeholder="seu.login.123">
        <label class="text-black" for="floatingInput">Login</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="sua.senha.321">
        <label class="text-black" for="floatingPassword">Senha</label>
      </div>

      <div class="checkbox d-flex mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembre-se
        </label>
      </div>
      <div class="d-flex flex-row justify-content-between">
        <a class="w-1 btn btn-lg btn-warning" href="cadastro.html" role="button">Cadastrar-se</a>
        <button class="w-1 btn btn-lg btn-success" type="submit">Entrar</button>
      </div>
    </form>
</main>





</div>

<!--Waves Container-->
<div>
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
<defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
<g class="parallax">
<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
</g>
</svg>
</div>
<!--Waves end-->

</div>
<!--Header ends-->

<!--Content starts-->
<div class="content flex">
  <p>By.Goodkatz | Free to use </p>
</div>
<!--Content ends-->

  </body>
</html>
