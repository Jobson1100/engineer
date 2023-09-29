<?php
	session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DESIGNS</title>
	<link rel="stylesheet" href="flexible.css" />
	<link rel="stylesheet" href="boxicons/css/boxicons.min.css">

    <style>

    .hidden {
    display: none;
    }

    </style>
</head>

<body>
	<div class='row'>
		<div class='header'>
		<img id="log" src="logo.png"><h1>Engineering Project Management System</h1>
		</div>
	</div>

	
	
	<div class=row>

		<div class=col-8>
        <div id=budget>
		<h1>Quotation</h1> <br>
		<div class="report-area">
		<table>
        <tr>
            <th>Item</th>
            <th>Description</th>
            <th>Cost (in USD)</th>
			<th>Duration</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Foundation</td>
            <td>500,000</td>
			<td>1 month</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Frame and Structure</td>
            <td>800,000</td>
			<td>3 weeks</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Roofing</td>
            <td>300,000</td>
			<td>6 weeks</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Interior Finishing</td>
            <td>600,000</td>
			<td>2 months</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Electrical and Plumbing</td>
            <td>400,000</td>
			<td>1 week</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Exterior and Landscaping</td>
            <td>200,000</td>
			<td>4 weeks</td>
        </tr>
        <tr>
            <td colspan="2">Total Cost</td>
            <td>3,890,000</td>
        </tr>
    </table>
        <div class="buttons">
            <button id="accept">Accept quotation</button>
            <button id="reject">Reject quotation</button>
        </div>

            <!-- Add a container to display the message box -->
            <div id="messageBox" class="hidden">
                <p>Do you want to accept the quotation?</p>
                <button id="yes">Yes</button>
                <button id="no">No</button>
            </div>
				
		</div>
	</div>
<script>
        // Get references to the elements
var acceptButton = document.getElementById("accept");
var messageBox = document.getElementById("messageBox");
var yesButton = document.getElementById("yes");
var noButton = document.getElementById("no");

// Add click event listener to the Accept button
acceptButton.addEventListener("click", function () {
    // Show the message box
    messageBox.classList.remove("hidden");
});

// Add click event listener to the Yes button in the message box
yesButton.addEventListener("click", function () {
    // Send an AJAX request to save "accept" to the user's session
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "saveAccept.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle the response from the server (if needed)
            alert("Accepted: Yes");
            
    // Redirect to another page after clicking "Yes"
         window.location.href = "home.php"; // Replace with the URL of the page you want to redirect to
        }
    };

    xhr.send("choice=accept");
});

// Add click event listener to the No button in the message box
noButton.addEventListener("click", function () {
    // Hide the message box
    messageBox.classList.add("hidden");
});

</script>

	
	
</body>
</html>