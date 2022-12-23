<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parsing Data From Controler #1</title>
</head>
<body>
    <h1 style="text-align: center;">Contoh Parsing Data From Controller to Views</h1>
    <br>
    <br>
    <h3 style="text-align: center;">Your Name is: {{ $nama }}</h3>
    <p style="text-align: center;">Your Sum is {{ $sum }}</p>
    <p style="text-align: center;">Contoh Array</p>
    <ul style="text-align: center;">
        @foreach($lemparanDataArray as $dataArray)
            <li>{{ var_dump($dataArray) }}</li>
        @endforeach
    </ul>
</body>
</html>
