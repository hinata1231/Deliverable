<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>My_Path</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       
    </head>
     <body class="antialiased">
       <h1>先生からのお知らせ</h1>
        <from action="/teachers" method="POST">
            @csrf
            <div class="title">
                 <h2>お知らせ</h2>
                 <input type="text" name="post[title]" placeholder="〇月〇日はテストをします"/>
            </div>
             <input type="submit" value="store"/>
            </from>
      <div class='footer'>
          <a href="/lesson">戻る</a>
      </div>
    </body>
</html>


