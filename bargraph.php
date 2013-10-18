<html>
<head>
<script type="text/javascript" src="http://www.workshop.rs/jqbargraph/jquery.js"></script>
<script type="text/javascript" src="http://www.workshop.rs/jqbargraph/jqBarGraph.js"></script>
<link rel="stylesheet" href="http://www.workshop.rs/jqbargraph/styles.css" type="text/css" />
<script type="text/javascript" src="../js/vote_graph.js"></script>
</head>
<body>
   <div id="divForGraph" style="width:100%; height:100%; ">
   </div>
   <div id="response"></div>
   
<script type="text/javascript">

var t = $('#response').html;
var d = 3;
var f = 1;
var g = 4;

arrayOfData = new Array(
     [t,'Bugs Bunny','#ffff00'],
     [d,'Daffy Duck','#006600'],
     [f,'Foghorn Leghorn','#000000'],
     [g, 'Gossamer','#000000']
);
  
$('#divForGraph').jqBarGraph({ data: arrayOfData ,  sort: 'desc' });

</script>
 </body>
</html>