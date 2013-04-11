<html>
<head>
<title>Invoice</title>
<style type="text/css">
	#page-wrap {
		width: 700px;
		margin: 0 auto;
	}
	.center-justified {
		text-align: justify;
		margin: 0 auto;
		width: 30em;
	}
	table.outline-table {
		border: 1px solid;
		border-spacing: 0;
	}
	tr.border-bottom td, td.border-bottom {
		border-bottom: 1px solid;
	}
	tr.border-top td, td.border-top {
		border-top: 1px solid;
	}
	tr.border-right td, td.border-right {
		border-right: 1px solid;
	}
	tr.border-right td:last-child {
		border-right: 0px;
	}
	tr.center td, td.center {
		text-align: center;
		vertical-align: text-top;
	}
	td.pad-left {
		padding-left: 5px;
	}
	tr.right-center td, td.right-center {
		text-align: right;
		padding-right: 50px;
	}
	tr.right td, td.right {
		text-align: right;
	}
	.grey {
		background:grey;
	}
</style>
</head>
<body>
	<div id="page-wrap">
		<table width="100%">
			<tbody>
				<tr>
					<td width="30%">
						<!-- <img src="http://exotel.in/wp-content/uploads/2013/03/exotel.png"> Your logo here -->
					</td>
					<td width="70%">
						<h2>Tax Invoice</h2><br>
						<strong>Date:</strong> <?php echo date('d/M/Y');?><br>
						<strong>Billing Cycle:</strong> 01/01/2013 to 01/02/2013
						<strong>Invoice Number:</strong> BF123
						<strong>Due Date:</strong> 10/01/2013
					</td>
				</tr>
				<tr>
					<td colspan="2">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="center-justified">
							<strong>Invoice To:</strong> FooBar
							<strong>Invoice Amount:</strong> Rs. 11,236
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<p>&nbsp;</p>
		<table width="100%" class="outline-table">
			<tbody>
				<tr class="border-bottom border-right grey">
					<td colspan="3"><strong>Summary</strong></td>
				</tr>
				<tr class="border-bottom border-right center">
					<td width="45%"><strong>Activity</strong></th>
					<td width="25%"><strong>Tax</strong></th>
					<td width="30%"><strong>Amount (INR)</strong></th>
				</tr>
				<tr class="border-right">
					<td class="pad-left">Summary Line item 1</td>
					<td class="center">Tax percent (12.36%)</td>
					<td class="right-center">Rs. 11,236</td>
				</tr>
				<tr class="border-right">
					<td class="pad-left">&nbsp;</td>
					<td class="right border-top">Subtotal</td>
					<td class="right border-top">Rs. 10,000</td>
				</tr>
				<tr class="border-right">
					<td class="pad-left">&nbsp;</td>
					<td class="right border-top">Tax</td>
					<td class="right border-top">Rs. 1236</td>
				</tr>
				<tr class="border-right">
					<td class="pad-left">&nbsp;</td>
					<td class="right border-top">Total</td>
					<td class="right border-top">Rs. 11,236</td>
				</tr>
			</tbody>
		</table>
		<p>&nbsp;</p>
		<table width="100%" class="outline-table">
			<tbody>
				<tr class="border-bottom border-right grey">
					<td colspan="3"><strong>Usage Line Item 1</strong></td>
				</tr>
				<tr class="border-bottom border-right center">
					<td width="45%"><strong>Description</strong></th>
					<td width="25%"><strong>Date</strong></th>
					<td width="30%"><strong>Amount (INR)</strong></th>
				</tr>
				
				<tr class="border-right">
					<td class="pad-left">Line item 1.1 desc</td>
					<td class="center">Usage date</td>
					<td class="right-center">Amount</td>
				</tr>
				
			</tbody>
		</table>
		<p>&nbsp;</p>
		
		<table width="100%">
			<tbody>
				<tr>
					<td width="50%">
						<div class="center-justified"><strong>To make a payment:</strong><br>
							Your payment options
							<strong>ST Reg no:</strong> Your service tax number<br>
							<strong>Service Category:</strong> Service tax category<br>
							<strong>Service category code:</strong> Service tax code<br>
						</div>
					</td>
					<td width="50%">
						<div class="center-justified">
						Your address
					</td>
				</tr>
			</tbody>
		</table>
		<p>&nbsp;</p>
		<table>
			<tbody>
				<tr>
					<td>
						No human was involved in creating this invoice, so, no signature is needed
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>
