<?php
header('Refresh: 0.05; URL=http://plantiverse.ezyro.com/confirmation.php');
include("connection.inc.php");
$sql = "SELECT sl.total_revenue as total, i.name as name, i.price as price, i.invoice_id as invoice_id, i.order_ref as order_ref, i.qty as quantity, i.fname as fname, i.lname as lname, i.address as address, i.city as city, i.street as street, i.created_at as created_at, i.vat as vat, i.amount_total as total_price, sl.country as country, sl.email as email, sl.SKU as SKU FROM invoice i LEFT JOIN sale_orderline sl on sl.order_reference = i.order_ref WHERE i.order_ref = (SELECT MAX(order_reference) FROM sale_orderline) AND sl.name <> i.name;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$order_ref = $row['order_ref'];
?>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Invoice</title>
    <link rel="stylesheet" href="invoice/css/styles_invoice.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	</head>
	<body id="InvoicePDF">
    
<div  class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title" background-image:url("https://i.ibb.co/ZW4BG2T/Picsart-22-01-11-02-01-01-511.png")>
									Plantiverse
								</td>

								<td class="top_text">
									<br />Potsdamer Str. 42<br>
									Berlin<br>
                  Germany<br>
									01324
								</td>
							</tr>
						</table>
					</td>
				</tr>
				</div>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>

								<td>
									<strong>
									</strong><br><br>
                                    <br>
									<br>
                                    <br>
                                    
								</td>

								<td>
									<br>
									<br>
									<br>
                  
								</td>
							</tr>
						</table>
                        
					</td>
				</tr>
                
				<tr class="heading">
          <div style="overflow-x:auto;">

            <table class="tabless">
           
              <tr class="tr">
                <th>ITEMS</th>
                <th>ITEM NUMBER</th>
                <th>QUANTITY</th>
                <th>PRICE</th>
                <th>TAX</th>
                <th>AMOUNT</th>
              </tr>

              <?php
                while($row = mysqli_fetch_assoc($result)){?>
              <tr class="td">
                <td><?= $row['name'] ?></td>
                <td><?= $row['SKU'] ?></td>
                <td><?= $row['quantity'] ?></td>
                <td>€<?= $row['price'] ?></td>
                <td>€<?= $row['vat'] ?></td>
                <td>€<?= $row['total_price'] ?></td>
                <td><h3 style="position:absolute;top:23%;left:0%;margin-left:6%;">Order Reference: <?= $row['order_ref'] ?></h3></td>
                <td><p style="position:absolute;top:26%;left:0%;margin-left:6%;"><?= $row['fname'] ?> <?= $row['lname'] ?></p></td>
                <td><p style="position:absolute;top:29%;left:0%;margin-left:6%;"><?= $row['address'] ?> <?= $row['street'] ?></p></td>
                <td><p style="position:absolute;top:32%;left:0%;margin-left:6%;"><?= $row['city'] ?> <?= $row['country'] ?></p></td>
                <td><h3 style="position:absolute;top:32%;right:0%;margin-right:6%;">Invoice #<?= $row['order_ref']-301 ?></h3></td>
                <td><h1 style="position:absolute;top:75%;right:0%;margin-right:6%;">Invoice Total: <?= $row['total'] ?></h1></td>
              </tr> 
              <?php }?>
              
            </table>

<table>
              <tr class="total">
          <td></td>

        </tr>
            </table>
            

            <br><br><br><br><br><br><br><br><br><br><br>
          </div>
		</div>

		<script type="text/javascript">
				var element = document.getElementById('InvoicePDF');
				function printInvoice(){
					html2pdf(element);
				}
				html2pdf(element)
				</script>

	</body>
</html>
