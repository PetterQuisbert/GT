<!DOCTYPE html>
<html>
	<head>
		<title>Phalcon PHP Framework</title>
        {{ assets.outputCss() }}
	</head>


	<body>
		{{ content() }}

        {{ assets.outputJs() }}

        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    </body>
</html>