<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>晩御飯</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>晩御飯、なんでもいいや・・・</h1>
        <div class='list'>
            @foreach($recipe as $recipe)
                <div class='recipe'/>
                    <a href="/recipe/{{ $recipe->id }}">{{ $recipe->title }}</a>
                    <a href="/recipe/{{ $recipe->id }}">{{ $recipe->material }}</a>
                </div>
            @endforeach
            
        </div>
    </body>
</html>