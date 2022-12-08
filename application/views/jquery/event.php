<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

    <h1>Belajar Jquery</h1>

    <div id="title">Selamat Datang JQuery</div>
    <div class="title">Selamat Datang JQuery</div>

    <div class="huruf">A</div>    
    <div class="huruf">B</div>    
    <div class="huruf">C</div>    
    <div class="huruf">D</div>    


</body>
</html>

<script>
    $(document).ready(function(){

        // Elemen
        $('h1').css('color','green');
        
        $('#title').css('color','blue');
        $('.title').css('color','grey');

        $('.huruf:first').css('color','blue');
        $('.huruf:last').css('color','yellow');
        $('.huruf:eq(1)').css('color','yellow');

        // Event
        $('h1').click(function(){
            $('h1').css('color','yellow');
        })
        $('h1').mouseleave(function(){
            $('h1').css('color','green');
        })


        $('.huruf').mouseenter(function(){
            $(this).css('color','yellow');
        })

        $('.huruf').mouseleave(function(){
            $(this).css('color','black');
        })


    })
</script>