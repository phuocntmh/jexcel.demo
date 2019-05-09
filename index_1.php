<html>
<head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--
<script src="http://cdn.bossanova.uk/js/jquery.jexcel.js"></script>
<script src="http://cdn.bossanova.uk/js/jquery.jcalendar.js"></script>
<link rel="stylesheet" href="http://cdn.bossanova.uk/css/jquery.jexcel.css" type="text/css" />
<link rel="stylesheet" href="http://cdn.bossanova.uk/css/jquery.jcalendar.css" type="text/css" />
-->
<script src="dist/js/jquery.jexcel.js"></script>
<script src="dist/js/jquery.jcalendar.js"></script>
<link rel="stylesheet" href="dist/css/jquery.jexcel.css" type="text/css" />
<link rel="stylesheet" href="dist/css/jquery.jcalendar.css" type="text/css" />

<style>
body
{
  font:14px Helvetica;
}
</style>
</head>
<body>

<div id="my"></div>
<script>
$(document).ready(function()
{	
/*data;
	
	function getComment(){
		
		$.get('lib/getData.php',info,function(data)
		{     
			//c = json_decode(data);
			alert(data);				
			$('#comment').html(data);
			//alert(info);
			//var dat = $.parseJSON(data);
			//alert(dat);
    	});		
	}	
	//gọi làm hàm getComment()
	getComment();	
*/	
data = [

    ['BZ', 'Classe A', 'Cheese', 1, '2017-01-12'],
    ['US', 'Classe B', 'Apples', 1, '2017-01-12'],
    ['VN', 'Classe A', 'Carrots', 1, '2017-01-12'],
    ['CA', 'Classe C', 'Oranges', 0, '2017-01-12'],
];

$('#my').jexcel({
	
			  //data:data,
				url:'lib/getData.php',
				colHeaders:  [ 'Country', 'Description', 'Type', 'Stock', 'Next purchase' ],
				colWidths: [ 300, 80, 100, 60, 120 ],
				columns: [
					/*{ type: 'dropdown', source:[ 'Apples','Bananas','Carrots','Oranges','Cheese','Pears' ] },*/
					 { type: 'dropdown', url:'data/countries' },
					{ type: 'text' },
					{ type: 'dropdown', source:[ {'id':'1', 'name':'Fruits'}, {'id':'2', 'name':'Legumes'}, {'id':'3', 'name':'General Food'} ] },
					{ type: 'checkbox' },
					{ type: 'calendar' },
				]
				/*,
				onload: function() {
					$('#my').append('<div>your new div</div>');
				}
				*/
			});
			
			
    	//});	
		
		
  
	
	
});
/*
$('#my').jexcel({
    data:data,
    colHeaders:  [ 'Country', 'Description', 'Type', 'Stock', 'Next purchase' ],
    colWidths: [ 300, 80, 100, 60, 120 ],
    columns: [
        { type: 'autocomplete', url:'/jexcel/countries' },
        { type: 'text' },
        { type: 'dropdown', source:[ {'id':'1', 'name':'Fruits'}, {'id':'2', 'name':'Legumes'}, {'id':'3', 'name':'General Food'} ] },
        { type: 'checkbox' },
        { type: 'calendar' },
    ]
});
*/
</script>
</body>


</html>