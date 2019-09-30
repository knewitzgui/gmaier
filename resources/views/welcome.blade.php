<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Guilherme Maier Knewitz - Web Developer</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="fullpage.css" />
        <link rel="stylesheet" type="text/css" href="css\main.css" />

        <script src="vendors/easings.min.js"></script>
        <script type="text/javascript" src="vendors/scrolloverflow.min.js"></script>
        <script type="text/javascript" src="fullpage.js"></script>
        <script data-main="src/main" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.3.5/require.min.js"></script>
        <script>
        $(document).ready(function() {
        	$('#fullpage').fullpage({
        		//options here
        		autoScrolling:true,
        		scrollHorizontally: true
        	});

        	//methods
        	$.fn.fullpage.setAllowScrolling(false);
        });
        </script>

    </head>
    <body>
      <div id="fullpage">
        <div class="section">Some section</div>
        <div class="section">Some section</div>
        <div class="section">Some section</div>
        <div class="section">Some section</div>
      </div>
    </body>
</html>
