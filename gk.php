<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description"
	content="This website all about recent covid trends and update, here you can enroll for sars-cov2 Vaccination program. This is only for study purpose. Ashis Panda(wikivky) created this website.">
	<meta name="robots" content="index, follow" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<title>Welcome Quiz Section</title>
	<link rel="stylesheet" href="jqueryui/jquery-ui.css/">
	<link rel="stylesheet" href="jqueryui/jquery-ui.structure.css/" <link rel="stylesheet">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="styles.css">
</head>

<body
style="background:url(https://www.counterpointresearch.com/wp-content/uploads/2020/03/coronavirus-4833754_1920.jpg)" alink="
#017bf5" vlink="#000">



		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

			<div class="container-fluid">
				<a class="navbar-brand" href="#">Covid19 Quiz</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="start.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " aria-current="page" href="https://www.covid19india.org/"
								target="_blank">Covid in India </a>
						</li>
						<li class="nav-item">
							<a class="nav-link"
								href="https://ncdc.gov.in/index1.php?lang=1&level=1&sublinkid=703&lid=550"
								target="_blank">Guidelines</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="regin.php">Enroll for Vaccination</a>
						
						</li>

						




							</ul>
						</li>

					</ul>
					<form class="diplay:flex" class="form-control me-2" method="get"
						action="http://www.google.com/search">

						<div>
							<table border="0" align="center" cellpadding="0">
								<tr>
									<td>

										<input type="search" name="q" aria-label="Search" maxlength="255"
											value="Google search"
											onfocus="if(this.value==this.defaultValue)this.value=''; this.style.color='black';"
											onblur="if(this.value=='')this.value=this.defaultValue; " />
										<input type="submit" class="btn btn-outline-primary" value="Go" />


									</td>
								</tr>
							</table>
						</div>

					</form>
					<div class="mx-2">
					<button class="btn btn-outline-danger"  onclick="window.location.href='logout.php'">Logout</button>
					</div>
				</div>
			</div>
		</nav>
		
		<!-- Quiz code start from here -->
		<div class="start_btn" ><button>Start Quiz</button></div>
		<div class="info_box">
			<div class="info-title"><span>How Much Do You Really Know About Covid-19?</span></div>
			<div class="info-list">
				<h1 style="color: red">Some Rules of this Quiz</h1>
				<div class="info">1. You will have only <span>15 seconds</span> per each question.</div>
				<div class="info">2. Once you select your answer, it can't be undone.</div>
				<div class="info">3. You can't select any option once time goes off.</div>
				<div class="info">4. You can't exit from the Quiz while you're playing.</div>
				<div class="info">5. All questions are compulsory and each carry equal marks.</div>
			</div>
			<div class="buttons">
				<button class="quit">Exit Quiz</button>
				<button class="restart">Continue</button>
			</div>
		</div>
	
		<!-- Quiz Box -->
		<div class="quiz_box my-4" >
			<header>
				<div class="title">Do You Really Know About Covid19</div>
				<div class="timer">
					<div class="time_left_txt">Time Left</div>
					<div class="timer_sec">15</div>
				</div>
				<div class="time_line"></div>
			</header>
			<section>
				<div class="que_text">
					<!-- Here I've inserted question from JavaScript -->
				</div>
				<div class="option_list">
					<!-- Here I've inserted options from JavaScript -->
				</div>
			</section>
	
			<!-- footer of Quiz Box -->
			<footer>
				<div class="total_que">
					<!-- Here I've inserted Question Count Number from JavaScript -->
				</div>
				<button class="next_btn">Next</button>
				
			</footer>
		</div>
	
		<!-- Result Box -->
		<div class="result_box">
			<div class="icon">
				<i class="fas fa-crown"></i>
			</div>
			<div class="complete_text">You've completed the Quiz!</div>
			<div class="score_text">
				<!-- Here I've inserted Score Result from JavaScript -->
			</div>
			<div class="buttons">
				<button class="restart">Replay Quiz</button>
				<button class="quit">Quit Quiz</button>
			</div>
		
	
		<div class="container">
			<p class="text-center" style="color:red">wikivky|Copyright &copy;
				<script>
					var CurrentYear = new Date().getFullYear()
					document.write(CurrentYear)
				</script>
			</p>
		</div>
		</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
	crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"
	integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
	integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
<link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css">
<script src="quiz.js"></script>
		
</body>
	
	
	</html>