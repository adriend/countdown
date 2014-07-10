<html>
    <head>
        <!--  
            Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
            and GPL-3.0 (http://opensource.org/licenses/GPL-3.0) licenses.
        
            @source: https://github.com/patrick-mota/countdown/
            @author Patrick Mota <patrick@zendlabs.com>
        -->

        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="jquery/jquery.countdown.js"></script>
    </head>    
    <body>
        <script>
            $(document).ready(function() {
                function setCountdownDate() {
                    $.ajax({
                        url: "ajax.php",
                    }).done(function(val) {
                        // call ajax.php to get next friday date
                        $('#input').countdown({
                            date: val,
                            onEnd: function() {
                                // when the countdown ends call again setCountdownDate to get next friday date
                                setCountdownDate();
                            }
                        });
                    });
                }

                // first call
                setCountdownDate();

            })
        </script>
        <div id="input"></div>
    </body>
</html>
