{"filter":false,"title":"edit.blade.php","tooltip":"/blog/resources/views/edit.blade.php","undoManager":{"mark":61,"position":61,"stack":[[{"start":{"row":0,"column":0},"end":{"row":99,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","","        <title>Laravel</title>","","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap\" rel=\"stylesheet\">","","        <!-- Styles -->","        <style>","            html, body {","                background-color: #fff;","                color: #636b6f;","                font-family: 'Nunito', sans-serif;","                font-weight: 200;","                height: 100vh;","                margin: 0;","            }","","            .full-height {","                height: 100vh;","            }","","            .flex-center {","                align-items: center;","                display: flex;","                justify-content: center;","            }","","            .position-ref {","                position: relative;","            }","","            .top-right {","                position: absolute;","                right: 10px;","                top: 18px;","            }","","            .content {","                text-align: center;","            }","","            .title {","                font-size: 84px;","            }","","            .links > a {","                color: #636b6f;","                padding: 0 25px;","                font-size: 13px;","                font-weight: 600;","                letter-spacing: .1rem;","                text-decoration: none;","                text-transform: uppercase;","            }","","            .m-b-md {","                margin-bottom: 30px;","            }","        </style>","    </head>","    <body>","        <div class=\"flex-center position-ref full-height\">","            @if (Route::has('login'))","                <div class=\"top-right links\">","                    @auth","                        <a href=\"{{ url('/home') }}\">Home</a>","                    @else","                        <a href=\"{{ route('login') }}\">Login</a>","","                        @if (Route::has('register'))","                            <a href=\"{{ route('register') }}\">Register</a>","                        @endif","                    @endauth","                </div>","            @endif","","            <div class=\"content\">","                <div class=\"title m-b-md\">","                    Laravel","                </div>","","                <div class=\"links\">","                    <a href=\"https://laravel.com/docs\">Docs</a>","                    <a href=\"https://laracasts.com\">Laracasts</a>","                    <a href=\"https://laravel-news.com\">News</a>","                    <a href=\"https://blog.laravel.com\">Blog</a>","                    <a href=\"https://nova.laravel.com\">Nova</a>","                    <a href=\"https://forge.laravel.com\">Forge</a>","                    <a href=\"https://vapor.laravel.com\">Vapor</a>","                    <a href=\"https://github.com/laravel/laravel\">GitHub</a>","                </div>","            </div>","        </div>","    </body>","</html>"],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":26,"column":7},"action":"insert","lines":["<!-- body内だけを表示しています。 -->","<body>","    <h1 class=\"title\">編集画面</h1>","    <div class=\"content\">","        <form action=\"/recipe/{{ $recipe->id }}\" method=\"POST\">","            @csrf","            @method('PUT')","            <div class='content__title'>","                <h2>タイトル</h2>","                <input type='text' name='recipe[title]' value=\"{{ $recipe->title }}\">","            </div>","            <div class='content__material'>","                <h2>材料</h2>","                <input type='text' name='recipe[material]' value=\"{{ $recipe->material }}\">","            </div>","            <div class=\"content__procedure\">","                <h4>手順</h4>","                <input type='text' name='recipe[procedure]'{{ $recipe->procedure}}/>","            </div>","            <div class=\"quote\">","                <h5>引用</h4>","                <input type='text' name='quote[quote]'{{ $recipe->quote}}/>","            </div>","            <input type=\"submit\" value=\"保存\">","        </form>","    </div>","</body>"],"id":3}],[{"start":{"row":17,"column":59},"end":{"row":17,"column":60},"action":"insert","lines":[" "],"id":4},{"start":{"row":17,"column":60},"end":{"row":17,"column":61},"action":"insert","lines":["v"]},{"start":{"row":17,"column":61},"end":{"row":17,"column":62},"action":"insert","lines":["a"]},{"start":{"row":17,"column":62},"end":{"row":17,"column":63},"action":"insert","lines":["l"]},{"start":{"row":17,"column":63},"end":{"row":17,"column":64},"action":"insert","lines":["u"]}],[{"start":{"row":17,"column":64},"end":{"row":17,"column":65},"action":"insert","lines":["e"],"id":5},{"start":{"row":17,"column":65},"end":{"row":17,"column":66},"action":"insert","lines":["="]},{"start":{"row":17,"column":66},"end":{"row":17,"column":67},"action":"insert","lines":["\""]}],[{"start":{"row":17,"column":90},"end":{"row":17,"column":91},"action":"insert","lines":["\""],"id":6}],[{"start":{"row":17,"column":91},"end":{"row":17,"column":92},"action":"remove","lines":["/"],"id":7}],[{"start":{"row":21,"column":73},"end":{"row":21,"column":74},"action":"remove","lines":["/"],"id":8}],[{"start":{"row":21,"column":73},"end":{"row":21,"column":74},"action":"insert","lines":["\""],"id":9}],[{"start":{"row":21,"column":54},"end":{"row":21,"column":55},"action":"insert","lines":["\""],"id":10}],[{"start":{"row":21,"column":54},"end":{"row":21,"column":55},"action":"insert","lines":[" "],"id":11},{"start":{"row":21,"column":55},"end":{"row":21,"column":56},"action":"insert","lines":["v"]},{"start":{"row":21,"column":56},"end":{"row":21,"column":57},"action":"insert","lines":["a"]},{"start":{"row":21,"column":57},"end":{"row":21,"column":58},"action":"insert","lines":["l"]},{"start":{"row":21,"column":58},"end":{"row":21,"column":59},"action":"insert","lines":["u"]},{"start":{"row":21,"column":59},"end":{"row":21,"column":60},"action":"insert","lines":["e"]}],[{"start":{"row":21,"column":60},"end":{"row":21,"column":61},"action":"insert","lines":["="],"id":12}],[{"start":{"row":4,"column":22},"end":{"row":4,"column":47},"action":"remove","lines":["/recipe/{{ $recipe->id }}"],"id":13}],[{"start":{"row":4,"column":22},"end":{"row":4,"column":23},"action":"insert","lines":["/"],"id":14},{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"insert","lines":["p"]}],[{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"insert","lines":["o"],"id":15},{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"insert","lines":["s"]},{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"insert","lines":["t"]},{"start":{"row":4,"column":27},"end":{"row":4,"column":28},"action":"insert","lines":["s"]}],[{"start":{"row":4,"column":27},"end":{"row":4,"column":28},"action":"remove","lines":["s"],"id":16},{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"remove","lines":["t"]},{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"remove","lines":["s"]},{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"remove","lines":["o"]},{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"remove","lines":["p"]},{"start":{"row":4,"column":22},"end":{"row":4,"column":23},"action":"remove","lines":["/"]}],[{"start":{"row":4,"column":22},"end":{"row":4,"column":47},"action":"insert","lines":["/recipe/{{ $recipe->id }}"],"id":17}],[{"start":{"row":4,"column":29},"end":{"row":4,"column":30},"action":"insert","lines":["s"],"id":18}],[{"start":{"row":4,"column":29},"end":{"row":4,"column":30},"action":"remove","lines":["s"],"id":19},{"start":{"row":4,"column":28},"end":{"row":4,"column":29},"action":"remove","lines":["e"]},{"start":{"row":4,"column":27},"end":{"row":4,"column":28},"action":"remove","lines":["p"]},{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"remove","lines":["i"]},{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"remove","lines":["c"]},{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"remove","lines":["e"]},{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"remove","lines":["r"]}],[{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"insert","lines":["p"],"id":20},{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"insert","lines":["o"]},{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"insert","lines":["s"]},{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"insert","lines":["t"]},{"start":{"row":4,"column":27},"end":{"row":4,"column":28},"action":"insert","lines":["s"]}],[{"start":{"row":4,"column":27},"end":{"row":4,"column":28},"action":"remove","lines":["s"],"id":21},{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"remove","lines":["t"]},{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"remove","lines":["s"]},{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"remove","lines":["o"]},{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"remove","lines":["p"]}],[{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"insert","lines":["r"],"id":22},{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"insert","lines":["e"]},{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"insert","lines":["c"]},{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"insert","lines":["i"]},{"start":{"row":4,"column":27},"end":{"row":4,"column":28},"action":"insert","lines":["p"]},{"start":{"row":4,"column":28},"end":{"row":4,"column":29},"action":"insert","lines":["e"]},{"start":{"row":4,"column":29},"end":{"row":4,"column":30},"action":"insert","lines":["w"]}],[{"start":{"row":4,"column":29},"end":{"row":4,"column":30},"action":"remove","lines":["w"],"id":23}],[{"start":{"row":4,"column":29},"end":{"row":4,"column":30},"action":"insert","lines":["s"],"id":24}],[{"start":{"row":4,"column":29},"end":{"row":4,"column":30},"action":"remove","lines":["s"],"id":25},{"start":{"row":4,"column":28},"end":{"row":4,"column":29},"action":"remove","lines":["e"]},{"start":{"row":4,"column":27},"end":{"row":4,"column":28},"action":"remove","lines":["p"]},{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"remove","lines":["i"]},{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"remove","lines":["c"]},{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"remove","lines":["e"]},{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"remove","lines":["r"]}],[{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"insert","lines":["s"],"id":26},{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"insert","lines":["h"]},{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"insert","lines":["o"]},{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"insert","lines":["w"]}],[{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"remove","lines":["w"],"id":27},{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"remove","lines":["o"]},{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"remove","lines":["h"]},{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"remove","lines":["s"]}],[{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"insert","lines":["r"],"id":28},{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"insert","lines":["e"]},{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"insert","lines":["c"]},{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"insert","lines":["i"]},{"start":{"row":4,"column":27},"end":{"row":4,"column":28},"action":"insert","lines":["p"]},{"start":{"row":4,"column":28},"end":{"row":4,"column":29},"action":"insert","lines":["e"]}],[{"start":{"row":4,"column":29},"end":{"row":4,"column":30},"action":"insert","lines":["s"],"id":29}],[{"start":{"row":4,"column":29},"end":{"row":4,"column":30},"action":"remove","lines":["s"],"id":30}],[{"start":{"row":4,"column":30},"end":{"row":4,"column":47},"action":"remove","lines":["{{ $recipe->id }}"],"id":31}],[{"start":{"row":4,"column":30},"end":{"row":4,"column":31},"action":"insert","lines":["1"],"id":32}],[{"start":{"row":4,"column":30},"end":{"row":4,"column":31},"action":"remove","lines":["1"],"id":33},{"start":{"row":4,"column":29},"end":{"row":4,"column":30},"action":"remove","lines":["/"]},{"start":{"row":4,"column":28},"end":{"row":4,"column":29},"action":"remove","lines":["e"]},{"start":{"row":4,"column":27},"end":{"row":4,"column":28},"action":"remove","lines":["p"]},{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"remove","lines":["i"]},{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"remove","lines":["c"]},{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"remove","lines":["e"]},{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"remove","lines":["r"]}],[{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"insert","lines":["c"],"id":34},{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"insert","lines":["r"]},{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"insert","lines":["e"]},{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"insert","lines":["a"]},{"start":{"row":4,"column":27},"end":{"row":4,"column":28},"action":"insert","lines":["t"]},{"start":{"row":4,"column":28},"end":{"row":4,"column":29},"action":"insert","lines":["e"]}],[{"start":{"row":4,"column":28},"end":{"row":4,"column":29},"action":"remove","lines":["e"],"id":35},{"start":{"row":4,"column":27},"end":{"row":4,"column":28},"action":"remove","lines":["t"]},{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"remove","lines":["a"]},{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"remove","lines":["e"]},{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"remove","lines":["r"]},{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"remove","lines":["c"]}],[{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"insert","lines":["r"],"id":36},{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"insert","lines":["e"]}],[{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"insert","lines":["c"],"id":37},{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"insert","lines":["i"]},{"start":{"row":4,"column":27},"end":{"row":4,"column":28},"action":"insert","lines":["p"]},{"start":{"row":4,"column":28},"end":{"row":4,"column":29},"action":"insert","lines":["e"]}],[{"start":{"row":4,"column":29},"end":{"row":4,"column":30},"action":"insert","lines":["/"],"id":38}],[{"start":{"row":4,"column":30},"end":{"row":4,"column":47},"action":"insert","lines":["{{ $recipe->id }}"],"id":39}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":25},"action":"remove","lines":["<!-- body内だけを表示しています。 -->"],"id":40},{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":7,"column":11},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>晩御飯</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>"],"id":41}],[{"start":{"row":7,"column":11},"end":{"row":8,"column":0},"action":"remove","lines":["",""],"id":42}],[{"start":{"row":7,"column":5},"end":{"row":7,"column":8},"action":"insert","lines":["   "],"id":43}],[{"start":{"row":7,"column":7},"end":{"row":7,"column":8},"action":"remove","lines":[" "],"id":44},{"start":{"row":7,"column":6},"end":{"row":7,"column":7},"action":"remove","lines":[" "]},{"start":{"row":7,"column":5},"end":{"row":7,"column":6},"action":"remove","lines":[" "]}],[{"start":{"row":11,"column":22},"end":{"row":11,"column":47},"action":"remove","lines":["/recipe/{{ $recipe->id }}"],"id":45}],[{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"insert","lines":["u"],"id":46}],[{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"remove","lines":["u"],"id":47}],[{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"insert","lines":["/"],"id":48},{"start":{"row":11,"column":23},"end":{"row":11,"column":24},"action":"insert","lines":["u"]},{"start":{"row":11,"column":24},"end":{"row":11,"column":25},"action":"insert","lines":["p"]}],[{"start":{"row":11,"column":25},"end":{"row":11,"column":26},"action":"insert","lines":["d"],"id":49},{"start":{"row":11,"column":26},"end":{"row":11,"column":27},"action":"insert","lines":["a"]},{"start":{"row":11,"column":27},"end":{"row":11,"column":28},"action":"insert","lines":["t"]},{"start":{"row":11,"column":28},"end":{"row":11,"column":29},"action":"insert","lines":["e"]}],[{"start":{"row":11,"column":23},"end":{"row":11,"column":29},"action":"remove","lines":["update"],"id":50},{"start":{"row":11,"column":23},"end":{"row":11,"column":29},"action":"insert","lines":["update"]}],[{"start":{"row":11,"column":28},"end":{"row":11,"column":29},"action":"remove","lines":["e"],"id":51}],[{"start":{"row":11,"column":28},"end":{"row":11,"column":74},"action":"insert","lines":["The PUT method is not supported for this route"],"id":52}],[{"start":{"row":11,"column":73},"end":{"row":11,"column":74},"action":"remove","lines":["e"],"id":53},{"start":{"row":11,"column":72},"end":{"row":11,"column":73},"action":"remove","lines":["t"]},{"start":{"row":11,"column":71},"end":{"row":11,"column":72},"action":"remove","lines":["u"]},{"start":{"row":11,"column":70},"end":{"row":11,"column":71},"action":"remove","lines":["o"]},{"start":{"row":11,"column":69},"end":{"row":11,"column":70},"action":"remove","lines":["r"]},{"start":{"row":11,"column":68},"end":{"row":11,"column":69},"action":"remove","lines":[" "]},{"start":{"row":11,"column":67},"end":{"row":11,"column":68},"action":"remove","lines":["s"]},{"start":{"row":11,"column":66},"end":{"row":11,"column":67},"action":"remove","lines":["i"]},{"start":{"row":11,"column":65},"end":{"row":11,"column":66},"action":"remove","lines":["h"]},{"start":{"row":11,"column":64},"end":{"row":11,"column":65},"action":"remove","lines":["t"]},{"start":{"row":11,"column":63},"end":{"row":11,"column":64},"action":"remove","lines":[" "]},{"start":{"row":11,"column":62},"end":{"row":11,"column":63},"action":"remove","lines":["r"]},{"start":{"row":11,"column":61},"end":{"row":11,"column":62},"action":"remove","lines":["o"]},{"start":{"row":11,"column":60},"end":{"row":11,"column":61},"action":"remove","lines":["f"]},{"start":{"row":11,"column":59},"end":{"row":11,"column":60},"action":"remove","lines":[" "]},{"start":{"row":11,"column":58},"end":{"row":11,"column":59},"action":"remove","lines":["d"]},{"start":{"row":11,"column":57},"end":{"row":11,"column":58},"action":"remove","lines":["e"]},{"start":{"row":11,"column":56},"end":{"row":11,"column":57},"action":"remove","lines":["t"]},{"start":{"row":11,"column":55},"end":{"row":11,"column":56},"action":"remove","lines":["r"]},{"start":{"row":11,"column":54},"end":{"row":11,"column":55},"action":"remove","lines":["o"]},{"start":{"row":11,"column":53},"end":{"row":11,"column":54},"action":"remove","lines":["p"]},{"start":{"row":11,"column":52},"end":{"row":11,"column":53},"action":"remove","lines":["p"]},{"start":{"row":11,"column":51},"end":{"row":11,"column":52},"action":"remove","lines":["u"]},{"start":{"row":11,"column":50},"end":{"row":11,"column":51},"action":"remove","lines":["s"]},{"start":{"row":11,"column":49},"end":{"row":11,"column":50},"action":"remove","lines":[" "]},{"start":{"row":11,"column":48},"end":{"row":11,"column":49},"action":"remove","lines":["t"]},{"start":{"row":11,"column":47},"end":{"row":11,"column":48},"action":"remove","lines":["o"]},{"start":{"row":11,"column":46},"end":{"row":11,"column":47},"action":"remove","lines":["n"]},{"start":{"row":11,"column":45},"end":{"row":11,"column":46},"action":"remove","lines":[" "]},{"start":{"row":11,"column":44},"end":{"row":11,"column":45},"action":"remove","lines":["s"]},{"start":{"row":11,"column":43},"end":{"row":11,"column":44},"action":"remove","lines":["i"]},{"start":{"row":11,"column":42},"end":{"row":11,"column":43},"action":"remove","lines":[" "]},{"start":{"row":11,"column":41},"end":{"row":11,"column":42},"action":"remove","lines":["d"]},{"start":{"row":11,"column":40},"end":{"row":11,"column":41},"action":"remove","lines":["o"]},{"start":{"row":11,"column":39},"end":{"row":11,"column":40},"action":"remove","lines":["h"]},{"start":{"row":11,"column":38},"end":{"row":11,"column":39},"action":"remove","lines":["t"]},{"start":{"row":11,"column":37},"end":{"row":11,"column":38},"action":"remove","lines":["e"]},{"start":{"row":11,"column":36},"end":{"row":11,"column":37},"action":"remove","lines":["m"]},{"start":{"row":11,"column":35},"end":{"row":11,"column":36},"action":"remove","lines":[" "]},{"start":{"row":11,"column":34},"end":{"row":11,"column":35},"action":"remove","lines":["T"]},{"start":{"row":11,"column":33},"end":{"row":11,"column":34},"action":"remove","lines":["U"]},{"start":{"row":11,"column":32},"end":{"row":11,"column":33},"action":"remove","lines":["P"]},{"start":{"row":11,"column":31},"end":{"row":11,"column":32},"action":"remove","lines":[" "]},{"start":{"row":11,"column":30},"end":{"row":11,"column":31},"action":"remove","lines":["e"]},{"start":{"row":11,"column":29},"end":{"row":11,"column":30},"action":"remove","lines":["h"]},{"start":{"row":11,"column":28},"end":{"row":11,"column":29},"action":"remove","lines":["T"]},{"start":{"row":11,"column":27},"end":{"row":11,"column":28},"action":"remove","lines":["t"]},{"start":{"row":11,"column":26},"end":{"row":11,"column":27},"action":"remove","lines":["a"]}],[{"start":{"row":11,"column":25},"end":{"row":11,"column":26},"action":"remove","lines":["d"],"id":54},{"start":{"row":11,"column":24},"end":{"row":11,"column":25},"action":"remove","lines":["p"]},{"start":{"row":11,"column":23},"end":{"row":11,"column":24},"action":"remove","lines":["u"]}],[{"start":{"row":11,"column":23},"end":{"row":11,"column":24},"action":"insert","lines":["r"],"id":55},{"start":{"row":11,"column":24},"end":{"row":11,"column":25},"action":"insert","lines":["e"]},{"start":{"row":11,"column":25},"end":{"row":11,"column":26},"action":"insert","lines":["c"]},{"start":{"row":11,"column":26},"end":{"row":11,"column":27},"action":"insert","lines":["i"]},{"start":{"row":11,"column":27},"end":{"row":11,"column":28},"action":"insert","lines":["p"]},{"start":{"row":11,"column":28},"end":{"row":11,"column":29},"action":"insert","lines":["e"]}],[{"start":{"row":11,"column":29},"end":{"row":11,"column":30},"action":"insert","lines":[" "],"id":56}],[{"start":{"row":11,"column":29},"end":{"row":11,"column":30},"action":"insert","lines":["/"],"id":57}],[{"start":{"row":11,"column":30},"end":{"row":11,"column":31},"action":"remove","lines":[" "],"id":58}],[{"start":{"row":11,"column":30},"end":{"row":11,"column":31},"action":"insert","lines":[" "],"id":59},{"start":{"row":11,"column":31},"end":{"row":11,"column":32},"action":"insert","lines":["{"]},{"start":{"row":11,"column":32},"end":{"row":11,"column":33},"action":"insert","lines":["{"]},{"start":{"row":11,"column":33},"end":{"row":11,"column":34},"action":"insert","lines":["}"]}],[{"start":{"row":11,"column":34},"end":{"row":11,"column":35},"action":"insert","lines":["}"],"id":60}],[{"start":{"row":11,"column":33},"end":{"row":11,"column":34},"action":"insert","lines":["$"],"id":61},{"start":{"row":11,"column":34},"end":{"row":11,"column":35},"action":"insert","lines":["r"]},{"start":{"row":11,"column":35},"end":{"row":11,"column":36},"action":"insert","lines":["e"]},{"start":{"row":11,"column":36},"end":{"row":11,"column":37},"action":"insert","lines":["c"]},{"start":{"row":11,"column":37},"end":{"row":11,"column":38},"action":"insert","lines":["i"]},{"start":{"row":11,"column":38},"end":{"row":11,"column":39},"action":"insert","lines":["p"]},{"start":{"row":11,"column":39},"end":{"row":11,"column":40},"action":"insert","lines":["e"]}],[{"start":{"row":11,"column":40},"end":{"row":11,"column":41},"action":"insert","lines":["-"],"id":62},{"start":{"row":11,"column":41},"end":{"row":11,"column":42},"action":"insert","lines":[">"]},{"start":{"row":11,"column":42},"end":{"row":11,"column":43},"action":"insert","lines":["i"]},{"start":{"row":11,"column":43},"end":{"row":11,"column":44},"action":"insert","lines":["d"]}],[{"start":{"row":11,"column":30},"end":{"row":11,"column":31},"action":"remove","lines":[" "],"id":63}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":26},"end":{"row":13,"column":26},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1637085066032,"hash":"2dedd7fd56a01c891c5dfb944b7357a835530ff5"}