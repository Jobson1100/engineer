<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HOME</title>
	<link rel="stylesheet" href="flexible.css" />
	<link rel="stylesheet" href="boxicons/css/boxicons.min.css">
	<script>
// window.onload = function () {

// var chart = new CanvasJS.Chart("chartContainer", {
// 	animationEnabled: true,
// 	title:{
// 		text: "Project progress analysis",
// 		horizontalAlign: "left"
// 	},
// 	data: [{
// 		type: "doughnut",
// 		startAngle: 60,
// 		//innerRadius: 60,
// 		indexLabelFontSize: 17,
// 		indexLabel: "{label} - #percent%",
// 		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
// 		dataPoints: [
// 			{ y: 67, label: "Success" },
// 			{ y: 28, label: "Incomplete"},
// 			{ y: 10, label: "Fails" }
// 			// { y: 7, label: "Drafts"},
// 			// { y: 15, label: "Trash"},
// 			// { y: 6, label: "Spam"}
// 		]
// 	}]
// });
// chart.render();

// }


window.onload = function () {
   

    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        title: {
            text: "Project progress analysis",
            horizontalAlign: "right"
        },
        data: [{
            type: "doughnut",
            startAngle: 60,
            indexLabelFontSize: 17,
            indexLabel: "{label} - #percent%",
            toolTipContent: "<b>{label}:</b> {y} (#percent%)",
            dataPoints: [
				{ y: 30, label: "Success" },
				{ y: 18, label: "Incomplete"},
				{ y: 10, label: "Fails" }
                // { y: chartData.success, label: "success" },
                // { y: chartData.incomplete, label: "incomplete" },
                // { y: chartData.fails, label: "fails" }
            ]
        }]
    });
    chart.render();
}
</script>

</head>

<body>
	<div class='row'>
		<div class='header'>
			<img id="log" src=".png"><h1>Engineering Project Management System</h1>
		</div>
	</div>

	<div class='row'>

		<div class='col-12'>
			<div id='nav'>
				<ul>
					<li class="active"><a href="home_admin.php" ><i class='bx bxs-home'></i>HOME</a></li>
					<li><a href=tasks.php><i class='bx bxs-info-circle'></i>TASKS</a></li>
					<li><a href="view_clients.php"><i class='bx bxs-cog'></i>VIEW CLIENTS</a></li>
					<li><a href="view_reviews.php"><i class='bx bx-comment-detail'></i>READ REVIEW</a></li>	
					<li><a href="https://mail.google.com/mail/u/0/#inbox"><i class='bx bx-message'></i></i>EMAILS</a></li>
					<li><a href="https://dashboard.tawk.to/#/dashboard/64ff5a2a0f2b18434fd7edb5"><i class='bx bx-message'></i></i>VIEW MESSAGES</a></li>
					<li><a href="report.php"><i class='bx bx-objects-vertical-bottom'></i>REPORT</a></li>
					<li><a href="logout-user.php"><i class='bx bxs-tree'></i>LOG OUT</a></li>
				</ul>
			</div>
		</div>

	</div>


	<div class='row'>
		<div class='col-4'>
			<h2>Progress Form</h2>
			
			<form action="progress.php" method="POST">
				<label for="success">Progress:</label><br>
				<input type="text" id="success" name="success"><br>
				<label for="incomplete">Incomplete:</label><br>
				<input type="text" id="incomplete" name="incomplete"><br>
				<label for="fails">Fails:</label><br>
				<input type="text" id="fails" name="fails">
				<br>
				<br>
				<input type="submit" name="submit" value="Track Progress"> 
				<br>
			</form>
		
			</div>
			<div class='col-8'>
			<div id="chartContainer" style="height: 498px; width: 100%;"></div>
			<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

		</div>
		</div>

	</div>
	
	<div class="row">

	</div>

	<div class='row'>
		<div id='footer'>

			<div id="footerNav">
			<li class="active"><a href="home.php" >HOME</a></li>
					<li><a href=designs.php>DESIGNS</a></li>
					<li><a href="feature.php">FEATURES</a></li>
					<li><a href="user_reviews.php">REVIEW</a></li>	
					<li><a href="contact.php">CONTACT</a></li>
					<li><a href="about.php">ABOUT </a></li>
					<li><a href="logout-user.php">LOG OUT</a></li>
			</div>


			<a href=""><i class='bx bxl-facebook-circle'></i></a>
			<a href=""><i class='bx bxl-twitter'></i></a>
			<a href=""><i class='bx bxl-whatsapp'></i></a>
			<a href=""><i class='bx bxl-instagram'></i></a>
			<a href=""><i class='bx bxl-tiktok'></i></a>
			
			<h3>Engineering Project Management System &copy;copyrightsreserved </h3>

		</div>

	</div>
	</div>

	    </div>
	<script>
		var myIndex = 0;
		carousel();

		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			myIndex++;
			if (myIndex > x.length) { myIndex = 1 }
			x[myIndex - 1].style.display = "block";
			setTimeout(carousel, 6000);
		}
	</script>

</body>

</html>