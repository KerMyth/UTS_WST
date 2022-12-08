<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>

    <h2>Selamat Datang</h2>

    <form>
        <input type="text" id="txt_input">
        <input type="submit">
    </form>

    <h1>Hasil</h1>
    
</body>
</html>

<script>
    $('form').submit(function(){
        var input=$('#txt_input').val();
        $('h1').text(input);

        // Menghentikan load pages
        event.preventDefault();
    })

    
</script>