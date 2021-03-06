<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>TWS</title>
        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
		<!-- MyMC CSS -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- FontAwesome CSS -->
        <link href="assets/css/mymc.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
                    <a class="navbar-brand" href="index.php">TWS</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="rules.php"><i class="fa fa-info-circle"></i> Rules</a></li>
                        <li><a href="staff.php"><i class="fa fa-star"></i> Staff</a></li>
                        <li class="active"><a href="nations.php"><i class="fa fa-check"></i> Nations</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
            <div class="container">
			<h1 class="page-header">Nations Of The Week</h1>
				<div id="carousel-example-generic" interval="pause" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
					<div class="item active">
					  <iframe class="vote-item" src="http://www.serverpact.com/vote-1"></iframe>
					  <div class="carousel-caption">
						<h3 class="vote-name">Nation</h3>
					  </div>
					</div>
					<div class="item">
					  <iframe class="vote-item" src="http://www.serverpact.com"></iframe>
					  <div class="carousel-caption">
						<h3 class="vote-name">Nation</h3>
					  </div>
					</div>
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
				<hr />
				<div class="row">
					<div class="col-md-3">
						<div class="well">
							<h4 class="server-name-card">Soon</h4>
							<a href="#" class="btn btn-info btn-block">info</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="well">
							<h4 class="server-name-card">Soon</h4>
							<a href="#" class="btn btn-info btn-block">info</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /.container -->
        <div class="container">
            <hr>
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills bottom">
						  <li role="presentation"><a href="staff.php">Staff</a></li>
						  <li role="presentation"><a href="rules.php">Rules</a></li>
						  <li class="pull-right">&copy;2022 TWS</li>
						</ul>
					</div>
                </div>
            </footer>
        </div>
        <!-- /.container -->
        <!-- JavaScript -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <script src="assets/js/bootstrap.js"></script>
    </body>
</php>
