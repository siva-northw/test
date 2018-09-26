<!doctype html>  
<html lang="en">  
    <head>

    </head>
    <body>
        <h1>Hello World!</h1>
        <div id="future"></div>
        <form id="form" id="chat_form">
            <input id="chat_input" type="text">
            <input type="submit" value="Send">
        </form>
         <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="socket.io.js"></script>
        <script>  
            var socket = io.connect('http://localhost:8081');
            socket.on('connect', function(data) {
               socket.emit('join', 'Hello World from client');
            });
            socket.on('broad', function(data) {
                    $('#future').append(data+ "<br/>");
              });
           
            $('form').submit(function(e){
                e.preventDefault();
                var message = $('#chat_input').val();
                socket.emit('messages', message);
            });
           </script>  
    </body>
</html>  