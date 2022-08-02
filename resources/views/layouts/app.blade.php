<html>
  <head>
    <title>@yield('title')</title>
    <style>
      body{
        font-family: sans-serif
      }
      .carpost{
        font-size: 20px;
        border: none;
        color: black
      }
      
      h1{
        position: absolute;
        color: white ;
        margin: auto;
        top:50%;
        left:0;
        bottom: 50%;
        right: 0;
        text-align: right;
        margin-top: 3px
      }
      
      footer{
        position: absolute;
      }
      a{
        display: inline;
        margin: 0px 10px
      }
      h4,p{
        padding: 0;
        
        display: inline-block
      }
      p{
        margin-left: 3px;
      }
      .bod{
      border: 2px solid white;
      padding-bottom: 10px;
      text-align: center;
      position: relative;
      }
      h5{
        padding: 0;
      }
      .cars{
        padding-left: 10px;
        margin-right: 200px;
        margin-left: 200px;
        margin-bottom: 50px;
        text-align: center;
        border: 1px solid black;
        background-color: paleturquoise ;
      }
      h2{
        margin-top: 100px
      }
      a{
        text-decoration: none;
        border-radius: 3px;
        border: 1px solid black;
        padding: 5px 10px;
        color: black;
      }
      a:hover{
        background-color: gray   
      }
      .editbut:hover, .deletebut:hover{
        background-color:transparent;
      }
    </style>
    
  </head>

  <body>
    <header style="position: relative">
      <h1>@yield('header')</h1>
    </header>
    
    
    <div class="bod">
      @if (!empty($page))
      <h2>This is {{$page}}</h2>
          
      @else
          @yield('cars')
      
      @endif
    </div>
    <footer>
       
    </footer>
  </body>
</html>