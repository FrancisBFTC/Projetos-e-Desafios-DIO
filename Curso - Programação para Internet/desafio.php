<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Primeiro Desafio com JQuery UI Accordion & UI Effects</title>
	<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="/resources/demos/style.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

	<script type="text/javascript">
		$(function(){
			$("#accordion").accordion();
		});
	</script>

  <script>
  $( function() {
    var state1 = true;
    $( ".button1" ).on( "click", function() {
      if ( state1 ) {
        $( ".effect1" ).animate({
          backgroundColor: "#00aa00",
          color: "#fff",
          width: 500
        }, 1000 );
      } else {
        $( ".effect1" ).animate({
          backgroundColor: "#fff",
          color: "#000",
          width: 240
        }, 1000 );
      }
      state1 = !state1;
    });

     var state2 = true;
    $( ".button2" ).on( "click", function() {
      if ( state2 ) {
        $( ".effect2" ).animate({
          backgroundColor: "#0000aa",
          color: "#fff",
          width: 500
        }, 1000 );
      } else {
        $( ".effect2" ).animate({
          backgroundColor: "#fff",
          color: "#000",
          width: 240
        }, 1000 );
      }
      state2 = !state2;
    });

     var state3 = true;
	    $( ".button3" ).on( "click", function() {
	      if ( state3 ) {
	        $( ".effect3" ).animate({
	          backgroundColor: "#aa0000",
	          color: "#fff",
	          width: 500
	        }, 1000 );
	      } else {
	        $( ".effect3" ).animate({
	          backgroundColor: "#fff",
	          color: "#000",
	          width: 240
	        }, 1000 );
	      }
	      state3 = !state3;
	    });
  } );


  </script>

	<style type="text/css">
		div{
			width: 50%;
		}

		.toggler{
			width: 500px;
			height: 200px;
			position: relative;
		}
		button{
			padding: .5em 1em;
			text-decoration: none;
		}
		.effect1 .effect2 .effect3{
			width: 240px;
			height: 170px;
			padding: 0.4em;
			position: relative;
			background: #fff;
		}
		h3{
			margin: 0;
			padding: 0.4em;
			text-align: center;
		}
	</style>
</head>
<body>
	<div id="accordion">
		<h3> Seção 1</h3>
		<div>
			<p>
				Primeira seção de teste...
				<button class="button1" class="ui-state-default ui-corner-all">Toggle Effect</button>

				<div class="toggler">
					<div class="effect1" class="ui-widget-content ui-corner-all">
						<h3 class="ui-widget-header ui-corner-all">Animação</h3>
						<p>
							Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
						</p>
					</div>
				</div>
			</p>
		</div>
		<h3> Seção 2</h3>
		<div>
			<p>
				Segunda seção de teste...
				<button class="button2" class="ui-state-default ui-corner-all">Toggle Effect</button>
				
				<div class="toggler">
					<div class="effect2" class="ui-widget-content ui-corner-all">
						<h3 class="ui-widget-header ui-corner-all">Animação</h3>
						<p>
							Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
						</p>
					</div>
				</div>
			</p>
		</div>
		<h3> Seção 3</h3>
		<div>
			<p>
			 	Terceira seção de teste...
			 	<button class="button3" class="ui-state-default ui-corner-all">Toggle Effect</button>
				
				<div class="toggler">
					<div class="effect3" class="ui-widget-content ui-corner-all">
						<h3 class="ui-widget-header ui-corner-all">Animação</h3>
						<p>
							Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
						</p>
					</div>
				</div>
			</p>
		</div>
	</div>

</body>
</html>