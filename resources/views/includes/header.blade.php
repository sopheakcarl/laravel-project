<header class="primary">
			<div class="firstbar">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="brand">
								<a href="index.html">
							
									<img src="images/logo.png" alt=" ">
								</a>
							</div>						
						</div>
						<div class="col-md-6 col-sm-12">
							<form class="search" autocomplete="off">
								<div class="form-group">
									<div class="input-group">
										<input type="text" name="q" class="form-control" placeholder="Search">									
										<div class="input-group-btn">
											<button class="btn btn-primary"><i class="ion-search"></i></button>
										</div>
									</div>
								</div>
								<div class="help-block">
									<div>Popular:</div>
									<ul>
										<li><a href="#">HTML5</a></li>
										<li><a href="#">CSS3</a></li>
										<li><a href="#">Bootstrap 3</a></li>
										<li><a href="#">jQuery</a></li>
										<li><a href="#">AnguarJS</a></li>
									</ul>
								</div>
							</form>								
						</div>
						<div class="col-md-3 col-sm-12 text-right">
							<ul class="nav-icons">
								<li><a href="register.html"><i class="ion-person-add"></i><div>Registerr</div></a></li>
								<li><a href="login.html"><i class="ion-person"></i><div>Login</div></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>




			<!-- Start Menu -->
			<nav class="menu">
				<div class="container">
					<div class="brand">
						<a href="#">
							<img src="images/logo.png" alt="Magz Logo">
						</a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
					</div>
					<div id="menu-list">
						<ul class="nav-list">
							<li class="for-tablet nav-title"><a>Menu</a></li>
							<li class="for-tablet"><a href="login.html">LogOut</a></li>
							<li class="for-tablet"><a href="register.html">Register</a></li>


							<!--Start SETEC Intitute-->
							<li><a href=""><i class="fa fa-building fa-lg"></i> SETEC INSTITUTE</a></li>
							<!--End SETEC Intitute-->


							<!--Start Academic-->
							<li class="dropdown magz-dropdown">
								<a href=""><i class="fa fa-book fa-lg"></i> ACADEMIC <i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									<li><a href="{{ url('/academic/foundation')}}">Foundation Year </a></li>
									
									<li><a href="{{ url('/academic/associate')}}">Associate Bachelor Degree </a></li>
									<li class="dropdown magz-dropdown">
										<a href="{{ url('/academic/bachelor')}}">Bachelor Degree <i class="ion-ios-arrow-right"></i></a>
										<ul class="dropdown-menu">
											<li><a href="{{ url('/academic/bachelor/mis')}}">MIS</a></li>
											<li><a href=" ">Desgin</a></li>
											<li><a href=" ">Business IT</a></li>
								
										</ul>
									</li>
									<li class="dropdown magz-dropdown">
										<a href="{{ url('/academic/master')}}">Master Degree<i class="ion-ios-arrow-right"></i></a>
										<ul class="dropdown-menu">
											<li><a href="403.html">Master of IT</a></li>
											<li><a href="404.html">Master of Design</a></li>
										
										</ul>
									</li>
									<li><a href="{{ url('/academic/bridging')}}">Bridging Course</a></li>

								</ul>
							</li>
							<!--End Academic-->


							<!--Start IT Learning-->
							<li class="dropdown magz-dropdown"><a href="#"><i class="fa fa-address-book fa-lg"></i> IT Learning<i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
								
									<li class="dropdown magz-dropdown"><a href="category.html">Programming<i class="ion-ios-arrow-right"></i></a>
										<ul class="dropdown-menu">
											
											<li><a href="category.html">C Programming</a></li>	
											<li><a href="category.html">C++ Programming</a></li>
											<li><a href="category.html">C#Programming</a></li>
											<li><a href="category.html">Javascript programming</a></li>
											<li><a href="category.html">Java Programming</a></li>
										</ul>
									</li>
						
									<li class="dropdown magz-dropdown"><a href="#">Network Administator<i class="ion-ios-arrow-right"></i></a>
										<ul class="dropdown-menu">
											<li><a href="category.html">Basic Network</a></li>
											<li><a href="category.html">Window Server</a></li>
											<li><a href="category.html">Exchange Server</a></li>
											<li><a href="category.html">Linux Administator</a></li>
											<li><a href="category.html">Mikrotik</a></li>
										</ul>
									</li>

									<li class="dropdown magz-dropdown"><a href="#">Design<i class="ion-ios-arrow-right"></i></a>
										<ul class="dropdown-menu">
											<li><a href="category.html">Adobe Photoshop</a></li>
											<li><a href="category.html">Adobe Illustrator</a></li>
											<li><a href="category.html">Adobe Indesign</a></li>
											<li><a href="category.html">Adobe Premiere</a></li>
											<li><a href="category.html">Adobe After Effect</a></li>
											<li><a href="category.html">Autodesk 3d Mark</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<!--End IT Learning-->
							

							<!--Start Activities-->
							<li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="#"><i class="fa fa-calendar fa-lg"></i> Activitis<i class="ion-ios-arrow-right"></i> <div class="badge">Khmer</div></a>
								<div class="dropdown-menu megamenu">
									<div class="megamenu-inner">
										<div class="row">
											<div class="col-md-3">
												<div class="row">
													<div class="col-md-12">
														<h2 class="megamenu-title">Ceremony</h2>
													</div>
												</div>
												<ul class="vertical-menu">
													<li><a href="#"><i class="ion-ios-circle-outline"></i> Chinese New Year</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> Khmer New Year</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> Pchum Ben</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> Certificate</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> Meeting </a></li>
												</ul>
											</div>
							

											<div class="col-md-9">
												<div class="row">
													<div class="col-md-12">
														<h2 class="megamenu-title">Event For New</h2>
													</div>
												</div>
												<div class="row">
													<article class="article col-md-4 mini">
														<div class="inner">
															<figure>
																<a href="single.html">
																	<img src="images/news/img10.jpg" alt="Sample Article">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time">Apr 14-15-16, 2018</div>
																
																</div>
																<h2><a href="single.html">Happy Khmer New Year</a></h2>
															</div>
														</div>
													</article>
													<article class="article col-md-4 mini">
														<div class="inner">
															<figure>
																<a href="single.html">
																	<img src="images/news/img11.jpg" alt="Sample Article">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time">December 13, 2016</div>
																	<div class="category"><a href="category.html">Lifestyle</a></div>
																</div>
																<h2><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
															</div>
														</div>
													</article>
													<article class="article col-md-4 mini">
														<div class="inner">
															<figure>
																<a href="single.html">
																	<img src="images/news/img14.jpg" alt="Sample Article">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time">December 14, 2016</div>
																	<div class="category"><a href="category.html">Travel</a></div>
																</div>
																<h2><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
															</div>
														</div>
													</article>
												</div>
											</div>
										</div>								
									</div>
								</div>
							</li>
							<!--End Activities-->


							<!--Start Internship-->
							<li><a href="{{ url('/internship')}}"><i class="fa fa-briefcase fa-lg"></i> Internship</a></li>
							<!--End Internship-->


							<!--Start Fancilities-->
							<li><a href="{{ url('/facilites')}}"><i class="fa fa-laptop fa-lg"></i> Facilites</a></li>
							<!--End Fancilities-->


							<!--Start Structure-->
							<li><a href="{{ url('/structure')}}"><i class="fa fa-sitemap fa-lg"></i> Structure</a></li>
							<!--End Structure-->


							<!--Start About Us-->
							<li><a href="{{ url('/about')}}"><i class="fa fa-user fa-lg"></i> About Us</a></li>
							<!--End About Us-->


						</ul>
					</div>
				</div>
			</nav>
			<!-- End Menu-->
		</header>