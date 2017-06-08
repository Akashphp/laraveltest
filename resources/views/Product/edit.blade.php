<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Demo</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
      
    </head>
    <body>

		<div class="container">  
			@if(@$message != "")
					<div class="alert alert-success">
						{{ $message }}
					</div>
			@endif	
		  <div class="row">
			<h2>Edit Data</h2>
			<form class="form-horizontal" action=" {{url('/editProduct')}} ">
				  <div class="form-group">
					<label for="exampleInputEmail1"> Product name</label>
					<input type="text" class="form-control" name="name" id="name" placeholder=" Product name" required="true" value="{{$data['name']}}">
				  </div>
				  <div class="form-group">
					<label for="exampleInputPassword1"> Quantity in stock</label>
					<input type="number" class="form-control" name="qty_in_stock" id="qty_in_stock" placeholder=" Quantity in stock" required="true" value="{{$data['qty_in_stock']}}">
				  </div>
				   <div class="form-group">
					<label for="exampleInputPassword1">  Price per item</label>
					<input type="number" class="form-control" name="price_per_item" id="price_per_item" placeholder="Price per item" required="true" value="{{$data['price_per_item']}}">
				  </div>
				  <input type="hidden" class="form-control" name="id" id="id" value="{{$data['id']}}">
				 
				  <button type="submit" class="btn btn-default">Submit</button>
			</form>
			
		  </div>
		</div>
		<script   src="https://code.jquery.com/jquery-3.2.1.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
