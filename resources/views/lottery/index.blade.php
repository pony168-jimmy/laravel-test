<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lottery</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div class="container-fluid">
        <div class="btn_box mx-auto" role="group" aria-label="First group">
            @for ($i = 1; $i < 43; $i++)
            <button type="button" class="num_btn btn btn-secondary" value={{ $i }}>{{ $i }}</button>
            @endfor
        </div>
        <div class="num_result mx-auto">
        </div>
    </div>
    <script>
        
        function choose_lottery (e){
            document.querySelector('.btn_box').addEventListener('click',(e)=>{
                if(e.target.nodeName === 'BUTTON'){
                    const arr = [];

                    e.target.classList.toggle('chose');

                    console.log(e.target.classList.contains('chose'))
                }
            })
            
        }
    </script>
</body>
</html>