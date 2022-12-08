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

    <h1>Selamat Datang</h1>

    <form>
        <label>Panjang</label><input type="text" id="txt_panjang">
        <label>Lebar</label><input type="text" id="txt_lebar">
        <input type="submit">
        <label>Hasil</label><input type="text" id="hasil">
    </form>
    
</body>
</html>

<script>
    $('form').submit(function(){
        var panjang=$('#txt_panjang').val();
        var lebar=$('#txt_lebar').val();
        var luas=panjang*lebar;
        $('#hasil').val(luas);

        // Menghentikan load pages
        event.preventDefault();
    })

    
</script>