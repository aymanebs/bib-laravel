<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    @if($age>18)
        <div>Major</div>
    @elseif($age<18)
    <div>Minor</div>
    @endif

    @for($i=0;$i<=10;$i++)
    <div>the current value is {{$i}}</div>
    @endfor

    @foreach($fruits as $fruit)
    <div>fruits : {{$fruit}} </div>
    @endforeach

</body>
</html>