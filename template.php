<?php
$body = "<!doctype html>
<html lang='en'>

<head>
    <title>ELS - Express Logistics Solution</title>
    <style>
        * {
            margin: 0 !important;
            padding: 0 !important;
        }
        
        body {
            background-color: #f9f9f9;
        }
        
        .main-table {
            width: 100%;
            border: 1px solid #fff;
            border-spacing: 0;
            border-collapse: collapse;
			letter-spacing: 1px;
			margin: auto !important;
        }
        
        .main-table .header td {
            font-size: 16px;
			font-weight: 600;
			padding: 10px !important;
			border: 1px solid #cccccc;
			text-align: center;
        }
        
        .main-table th {
			font-size: 12px;
			padding: 5px !important;
			border: 1px solid #cccccc;
			text-transform: capitalize;
			text-align: center;
        }
        
        .main-table td {
            font-size: 12px;
			padding: 5px !important;
			border: 1px solid #cccccc;
			text-transform: capitalize;
        }

		.main-table td a {
			text-transform: lowercase;
			text-decoration: none;
			color: #013c79;
        }
    </style>
</head>

<body>
    <table class='main-table'>
		<colgroup>
			<col style='width:20%'></col>
			<col style='width:20%'></col>
			<col style='width:20%'></col>
			<col style='width:20%'></col>
			<col style='width:20%'></col>
		</colgroup>
        <tr class='header'>
            <td colspan='5'>ELS - Enquiry</td>
        </tr>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>
        <tr>
            <td>$name</td>
            <td>$email</td>
            <td>$mobile</td>
            <td>$subject</td>
            <td>$message</td>
        </tr>
    </table>
</body>
</html>";

$body1 = "<!doctype html>
<html lang='en'>

<head>
    <title>ELS - Express Logistics Solution</title>
    <style>
        * {
            margin: 0 !important;
            padding: 0 !important;
        }
        
        body {
            background-color: #f9f9f9;
        }
        
        .main-table {
            width: 100%;
            border: 1px solid #fff;
            border-spacing: 0;
            border-collapse: collapse;
			letter-spacing: 1px;
			margin: auto !important;
        }
        
        .main-table .header td {
            font-size: 16px;
			font-weight: 600;
			padding: 10px !important;
			border: 1px solid #cccccc;
			text-align: center;
        }
        
        .main-table th {
			font-size: 12px;
			padding: 5px !important;
			border: 1px solid #cccccc;
			text-transform: capitalize;
			text-align: center;
        }
        
        .main-table td {
            font-size: 12px;
			padding: 5px !important;
			border: 1px solid #cccccc;
			text-transform: capitalize;
        }

		.main-table td a {
			text-transform: lowercase;
			text-decoration: none;
			color: #013c79;
        }
    </style>
</head>

<body>
    <table class='main-table'>
		<colgroup>
			<col style='width:20%'></col>
			<col style='width:20%'></col>
			<col style='width:20%'></col>
			<col style='width:20%'></col>
			<col style='width:20%'></col>
		</colgroup>
        <tr class='header'>
            <td colspan='5'>ELS - Contact</td>
        </tr>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>
        <tr>
            <td>$name</td>
            <td>$email</td>
            <td>$mobile</td>
            <td>$subject</td>
            <td>$message</td>
        </tr>
    </table>
</body>
</html>";
?>