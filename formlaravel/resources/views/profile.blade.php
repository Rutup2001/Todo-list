<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="register.css" />

<style>
    * {
    font-family: sans-serif;

}




body {

    background-attachment: fixed;
    object-fit: cover;
    color: black;
    background-size: cover;
    background-attachment: fixed;
}

.background {


    /* background: url(https://images.pexels.com/photos/1103970/pexels-photo-1103970.jpeg?) center bottom; */
     /* background-attachment: fixed;
    object-fit: cover;
    background-size: cover;
    background-attachment: fixed; */

    /* if you don't use the body selector then use it👆👆👆👆👆 */


    margin: 0%;
    padding: 0%;
    position: fixed;
    margin-top: -0.4%;
    margin-left: -0.4%;
    height: 100vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;

}


.transparent{
    height: 500px;
    width: 350px;
    margin: auto;
    border: 1px solid white;
    justify-content: center;
    text-align: left;
     background-attachment: fixed;
    object-fit: cover;
    background-size: cover;
    background-attachment: fixed;
    box-shadow: 0px 0px 70px grey;
    border-radius: 10px;
    padding: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;

}

p {
    color: black;
    text-align: center;
    font-size: 20px;
    line-height: 0.01px;
}
.log {
    display: inline-block;
    padding: 10px 30px;
    background-color: rgb(0, 95, 95);
    border-radius: 50px;
    text-decoration: none;
    color: white;
    margin: auto;
    font-size: 30px;
    border: 2px solid white;
    margin-top: 12%;

}
.log:hover {
    background: none;
}
img {
    height: 100px;
    width: 100px;
    object-fit: cover;
    border-radius: 50%;
    border: 2px solid white;

}

.premmium {
    color: blue;
}
</style>
    </head>

  <body>
  <div class="background">
    <div class="transparent">
      <img src="https://media.istockphoto.com/id/1388253782/photo/positive-successful-millennial-business-professional-man-head-shot-portrait.jpg?s=612x612&w=0&k=20&c=uS4knmZ88zNA_OjNaE_JCRuq9qn3ycgtHKDKdJSnGdY=" alt="profile picture">

      <p><b>Your name</b></p>
      <p>example@gmail.com</p>
      <p>+91 8156458755</p>
      <p>15<sup>jan</sup>2002</p>
      <p class="premmium">premium member</p>

      <a href="#" class="log">Log out</a>
    </div>

  </div>
  </body>
</html>
