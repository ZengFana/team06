<html>
    <body>


        <h1>
            品牌
        </h1>


        @for($i=0;$i<count(brands);$i++)
        {{$brands[$i]['brands']}}</br>
        {{$brands[$i]['headquarter']}}</br>
        {{$brands[$i]['area']}}</br>
        {{$brands[$i]['year']}}</br>
        {{$brands[$i]['html']}}</br></br>
        @endfor

    </body>
    
    <head>
<title>
    品牌
</title>
    </head>
</html>