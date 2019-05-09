<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<meta charset="utf-8">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jexcel/1.5.0/js/jquery.jexcel.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jexcel/1.5.0/js/excel-formula.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jexcel/1.5.0/css/jquery.jexcel.min.css" type="text/css" />

	<style>
		body
		{
		  font:14px Helvetica;
		}
	</style>

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-csv/0.8.3/jquery.csv.min.js"></script>
</head>
<body>
	<div class="container" style="width: 100%; margin-top: 10px;">
		<div style="margin-bottom: 10px;">
			<button class="btn btn-primary" onclick="$('#my').jexcel('insertRow'); event.preventDefault(); return false;">Thêm</button>
				<button id="json" class="btn btn-success">Cập nhật</button>
		</div>
		<div id="my"></div>
	</div>
	
	<script>
	$(document).ready(function()
	{
		$('#my').jexcel({
			//data:res,
			url:'lib/getStudents.php',
			csvHeaders:true,
    tableOverflow:true,
    tableHeight:'300px',
			colHeaders:  [ 'Họ tên', 'Ngày sinh', 'Điện thoại', 'Địa chỉ', 'Lớp hiện tại' ],
			colWidths: [ 300, 80, 100, 180, 200 ],
			columns: [
				{ type: 'text'},
				{ type: 'text' },
				{ type: 'text' },
				{ type: 'text' },
				{ type: 'autocomplete', url:'lib/classes.php' },
			]
			});	
	});

	/*json export*/
	$('#json').on('click', function () {
	  var data = $('#my').jexcel('getData');
	  var v = JSON.stringify(data);

		/*var ajaxRequest= $.post( "lib/setstudents.php",v, function(data) {
			  alert( v );
			})
			  .fail(function() {
			    alert( "error" );
			  })
			  .always(function() {
			    alert( "finished" );
			});*/

		$.ajax({
    url: 'users.php',
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
    data: JSON.stringify(data),
    processData: false,
    success: function( data, textStatus, jQxhr ){
        $('#response pre').html( JSON.stringify( data ) );
    },
    error: function( jqXhr, textStatus, errorThrown ){
        console.log( errorThrown );
    }
});

	});


</script>

</body>
</html>