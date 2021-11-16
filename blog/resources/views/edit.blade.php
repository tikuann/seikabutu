<!-- body内だけを表示しています。 -->
<body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/recipe/{{ $recipe->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='recipe[title]' value="{{ $recipe->title }}">
            </div>
            <div class='content__material'>
                <h2>材料</h2>
                <input type='text' name='recipe[material]' value="{{ $recipe->material }}">
            </div>
            <div class="content__procedure">
                <h4>手順</h4>
                <input type='text' name='recipe[procedure]'{{ $recipe->procedure}}/>
            </div>
            <div class="quote">
                <h5>引用</h4>
                <input type='text' name='quote[quote]'{{ $recipe->quote}}/>
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
</body>
