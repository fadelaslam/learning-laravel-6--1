<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise #4 | Request Data</title>
    <style>
        header h1 {
            text-align: center;
        }

        main {
            width: 50%;
            height: 700px;
            margin: 20px auto;
            border: solid 2px black;
            border-radius: 5px;
            display: flex;
        }

        main > form {
            margin: auto;
        }

        input[type= text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            width: 100%;
            height: 150px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            resize: none;
        }

        input[type = submit]{
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: 2px solid #4CAF50;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type = submit]:hover {
            background-color: white;
            color: #4CAF50;
        }
    </style>
</head>
<body>

    <header>
        <h1>Exercise #4 | Request Data</h1>
    </header>
    <main>
       <form action="/formulir/formulir-proses" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

            <label>Nama: </label>
            <input type="text" name="nama">

            <label>Alamat: </label>
            <textarea name="alamat" cols="30" rows="10"></textarea>

            <input type="submit" value="Simpan">

       </form>
    </main>

</body>
</html>
