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
			<h2>Add product</h2>
			<form class="form-horizontal" action=" {{url('/addProduct')}} ">
				  <div class="form-group">
					<label for="exampleInputEmail1"> Product name</label>
					<input type="text" class="form-control" name="name" id="name" placeholder=" Product name" required="true">
				  </div>
				  <div class="form-group">
					<label for="exampleInputPassword1"> Quantity in stock</label>
					<input type="number" class="form-control" name="qty_in_stock" id="qty_in_stock" placeholder=" Quantity in stock" required="true">
				  </div>
				   <div class="form-group">
					<label for="exampleInputPassword1">  Price per item</label>
					<input type="number" class="form-control" name="price_per_item" id="price_per_item" placeholder="Price per item" required="true">
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
			</form>
			<h2>Data</h2>
			<table class="table table-bordered">
				<tr>
				  <th class="">Product name</th>
				  <th class="">Quantity in stock</th>
				  <th class="">Price per item</th>
				  <th class="">Datetime submitted</th>
				  <th class="">Total value number</th>
				   <th class="">Action</th>
				</tr>
				@if(count($data)==0)
				<tr>
				  <td colspan="6">No Records available..!</td>
				</tr>
				@endif
				@if(count($data)>0)
				<?php $sum=0; ?>
					@foreach($data as $rec)
					<?php $sum += $rec['qty_in_stock']*$rec['price_per_item']; ?>
					<tr>
					  <td class="">{{ $rec['name']}}</td>
					  <td class="">{{ $rec['qty_in_stock']}}</td>
					  <td class="">{{ $rec['price_per_item']}}</td>
					  <td class="">{{ $rec['add_date']}}</td>
					  <td class="">{{  $rec['qty_in_stock']*$rec['price_per_item']}}</td>
					  <td class="">
						  <a href="{{ url('/edit/') }}/{{$rec['id']}}"><i class="fa fa-pencil"></i> Edit</a>
					  </td>
					</tr>
					@endforeach
					<tr>
					  <td colspan="4" align="right"> <b>Total</b></td>
					  <td class=""><b><?php echo @$sum;?></b></td>
					  <td ></td>
					</tr>
				@endif
			</table>
		 </div>
		 
		  

		</div>
		 <script src="https://code.jquery.com/jquery-3.2.1.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
