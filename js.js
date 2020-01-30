<html>
    <head>
        <style>
            .hide{
                display:none;
            }
            .show{
                display: block;
                margin-left: 30%;
                transform: scale(1.4);
            }
        </style>
    </head>
    <body>
        <div id="body" class=""></div>
        <button onclick="hideDiv()">Hide</button>
        <button onclick="showDiv()">show</button>
    </body>
    <script>
        var body = document.querySelector('#body');
        console.log(body);
       body.innerHTML="How are you?";
       const hideDiv = ()=>{
           body.classList.remove('show')
           body.classList.add('hide');
       }
        const showDiv = ()=>{
           body.classList.add('show');
       }
    </script>
</html>
