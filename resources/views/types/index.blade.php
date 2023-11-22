<html>
    <body>


        <h1>
            車型
        </h1>


        @for($i=0;$i<count(types);$i++)
        {{$types[$i]['car_sample']}}</br>
        {{$types[$i]['bid']}}</br>
        {{$types[$i]['car_modle']}}</br>
        {{$types[$i]['type']}}</br>
        {{$types[$i]['power_type']}}</br>
        {{$types[$i]['price']}}</br>
        {{$types[$i][''origin']}}</br>
        {{$types[$i]['car_door']}}</br>
        {{$types[$i]['exhaust_volume']}}</br></br>
        @endfor

    </body>
    
    <head>
<title>
    車型
</title>
    </head>
</html>