<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <style media="screen">
     ul a{
       text-decoration: none;

     }
     ul li {
       font-size: 25pt;
       display: inline-block;
       background: grey;
       border-radius: 1px;
     }
     ul{
       width: 30%;
       margin:0px auto;
     }
     @yield("style")

    </style>
  </head>
  <body>
    <ul>
      <a href="{{url("/")}}"> <li>Home</li></a>
        <a href="{{url("/about")}}"> <li>About</li></a>
            <a href="/contact"> <li>Contact</li></a>
    </ul>
    @yield('exemplo')
  </body>
</html>
