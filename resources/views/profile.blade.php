<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
        img{
            margin-left: 650px;
            margin-top: 50px;
        }

    </style>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
        
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
         
        </style>
    </head>
   <body>
 
   
   <h1 style="color:blue;">
    <a href="{{url('/profile')}}">profile</a>
    <br>
    <a href="{{url('/')}}">home</a></h1>
       <h1>Profile page</h1>
       <img style="width: 130px; height:160px;" src="{{asset('img/b.jpg')}}" alt=""><br>
       <h1>Hellow my name is mhammad fateh and iam 25 years old and iam from kalar i studed in IT department 
           stage 3 and thanks.</h1>
           
       
   </body>
</html>