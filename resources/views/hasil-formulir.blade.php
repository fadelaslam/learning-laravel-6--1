<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    header h1 {
            text-align: center;
    }

    main {
        padding: 50px;
        margin: 20px auto;
        display: flex;
    }

    main > .content {
        margin: auto;
        padding: 20px 100px;
        display: flex;
        flex-direction: column;
        background-color: #f2f2f2;
    }

    a {
        text-decoration: none;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: 2px solid #4CAF50;
        border-radius: 5px;
        cursor: pointer;
        text-align: center;
    }

    a:hover {
        background-color: white;
        color: #4CAF50;
    }

</style>
<body>
    <header>
        <h1>Exercise #4 | Request Data</h1>
    </header>
    <main>
        <div class="content">
            <h3>Nama : {{ $nama }}</h3>
            <h3>Alamat : {{ $alamat }}</h3>
            <a href="/formulir">Kembali</a>
        </div>
    </main>
</body>
</html>
