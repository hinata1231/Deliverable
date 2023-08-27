<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>My_Path</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       
    </head>
    <body class="antialiased">
       <h1>My_Path 日本語教室（にほんごきょうしつ）</h1>
       <div class='lessons'>
            @foreach($lessons as $lesson)
               <div class='lesson'>
                 <h2 class=''>{{ $teacher->name }}</h2>
                  <p class='gender'>{{ $teacher->gender }}</p>
               </div>
            @endforeach
       </div>
       <div class='paginate'>
            {{ $teachers->links() }}
        </div>
    </body>
</html>


