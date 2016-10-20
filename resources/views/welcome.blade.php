<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        
<script src="http://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
        

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>

            <a id="open" href="#">ver</a>
        </div>
    </body>

<script>
            

            /*$('#open').click(function() {
                var id = 5;
                var ajaxurl = {{ URL::to('computer/id') }};
                ajaxurl = ajaxurl.replace(':id', id);
                $.ajax({
                    url: ajaxurl,
                    type: "GET",
                    success: function(data){
                        $data = $(data); // the HTML content that controller has produced
                        $('#item-container').hide().html($data).fadeIn();
                    }
                });

                conslole.log('hola');
            });*/

            $('body').on('click', '#open', function(){
                console.log('hola');
                var id = 5;
                
                var ajaxurl = 'computer/' + id;
                ajaxurl = ajaxurl.replace(':id', id);
                $.ajax({
                    url: ajaxurl,
                    type: "GET",
                    success: function(data){
                        $data = $(data); // the HTML content that controller has produced
                        console.log(data);
                    }
                });
            });

        </script>



</html>
