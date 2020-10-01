<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}

	td {
		border: 1px solid black;
		padding: 5px;
	}
	</style>
</head>
<body>

<div id="container">
	<h1 align="center">Students List</h1>

	<div id="body">
		<table style="border: 2px solid black;" width="60%" border="1" cellspacing="5" cellpadding="5" align="center">
			<tr style="background: #4CAF50;color: #fff;">
				<td>Sr</td>
				<td>Name</td>
				<td>Class</td>
				<td>Percentage</td>
				<td>Action</td>
			</tr>

			<?php
				if(isset($std) && is_array($std) && count($std))
				{
					$sr = 1;
					foreach($std as $row)
					{
						$id         = $row->id;
				?>		

						<tr id="recordId-<?=$id;?>">

							
					  		<td><?php echo $sr; ?></td>
					        <td><?php echo $row->stdName; ?></td>
					        <td><?php echo $row->stdClass; ?></td>
					        <td><?php echo $row->stdPercentage; ?></td>
							<td>
								<a href="http://localhost/studentDemo/Student/stdEdit/<?= $id;?>">
									Edit
								</a>
								&nbsp; || &nbsp; 
								<!-- <a href="javascript:void(0);" class="delete-emp" data-id="<?= $id;?>"> -->
									<a href="http://localhost/studentDemo/Student/stdDelete/<?= $id; ?>">
									Delete
								</a>
							</td>
						</tr>
				<?php
					$sr++;
					}
				}
			?>
		</table>
	</div>
</div>
</body>