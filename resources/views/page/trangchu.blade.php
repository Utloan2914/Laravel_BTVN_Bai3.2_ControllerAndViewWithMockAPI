<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @foreach ($slide as $sli)
    <ul>
        @foreach ( $sl as $slide)
            <li>
                <img src="source/image/slide/{{ $slide['image'] }}" alt="">
            </li>
        @endforeach
    </ul>
    @endforeach
</body>

</html>
