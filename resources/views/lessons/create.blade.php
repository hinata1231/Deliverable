<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>My_Path</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <x-app-layout>
        <x-slot name="main-page">
        </x-slot>
        <body class="antialiased">
            <h1>授業登録・変更</h1>
            <form action="/teacher/lessons" method="POST">
            @csrf
                <div class="students">
                    <h2>生徒を選ぶ</h2>
                    <select name="lesson[student_id]">
                        @foreach($students as $student)
                        <option class='student' value={{$student->id}}>
                         {{$student->name}}   
                        </option>
                        @endforeach
                    </select>
                </div>
                
                 <div class="date">
                    <h2>授業のURL</h2>
                    <input type="url" name="lesson[zoom_url]"  placeholder="zoomのリンク"/>
                     <p class='zoom_url__error' style="color:red">{{ $errors->first('lesson.zoom_url')}}</p>
                </div> 
                
                <div class="date">
                    <h2>授業の日にち</h2>
                    <input type="date" name="date" placeholder="授業の日にち"/>
                </div>
                
                <div class="time">
                    <h2>開始時間</h2>
                    <input type="time" name="time" placeholder="開始時間"/>
                </div>
                
                 <button class="bg-sky-500/100"><input type="submit" value="保存"></button>
            </form>
            
      <div class='footer'>
          <button class="bg-sky-500/100"><a href="/teacher/lesson">戻る</a></button>
      </div>
    </body>
    </x-app-layout>
</html>

