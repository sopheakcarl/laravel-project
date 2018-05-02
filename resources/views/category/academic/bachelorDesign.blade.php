@extends('.layouts.master')
@section('title','Associate Page')
@section('content')


<section class="home">
	<div class="container">

		<div class= "row">
			<div class ="col-md-12 col-sm-12 col-xs-12">
						<!-- include slide show from view/include/slideshow.blade.php -->
				<div class="thanuk">
						@include('.includes.slideshow')
				</div>
						<!-- end slide show-->
			</div>
		</div>
				
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="line"><div>Latest News</div></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
<!-- content here-->

<div class="panel panel-primary">
  <div class="panel-heading"><h3><center>Design</center></h3></div>
  	<div class="panel-body">
  <!-- start panel content-->
		<div clas="row"
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-4">
						<img src="{{asset('/images/mis_small.png')}}"width="70%">
					</div>
					<!--row 1 col 2-->
					<div class="col-md-8">
						<p><h4>
						What is “Design”?
						Design is a project organized by the creative and innovation! You plan and design a blueprint brought 
						<ul>
						<li>- Aesthetics worthy and harmony </li>
						<li>- Predominant modern and updated </li>
						<li>- Pride and confidence </li>
						<li>- Watershed of style and period </li>
						<li>- Preliminary predictions of the future of the popular </li>
						<li>- Happiness and harmony </li>
						</ul>
						You plan and organize resources become more important for developed and developing countries
						</h4></p>
						<div class="block">
							<h2 class="block-title">Photos</h2>
								<div class="block-body">
									<ul class="item-list-round" data-magnific="gallery">
										<li><a href="{{asset('/images/mis/mis (1).jpg')}}" style="background-image: url('{{asset('/images/mis/mis (1).jpg')}}');"></a></li>
										<li><a href="{{asset('/images/mis/mis (2).jpg')}}" style="background-image: url('{{asset('/images/mis/mis (2).jpg')}}');"></a></li>
										<li><a href="{{asset('/images/mis/mis (3).jpg')}}" style="background-image: url('{{asset('/images/mis/mis (3).jpg')}}');"></a></li>
										<li><a href="{{asset('/images/mis/mis (4).jpg')}}" style="background-image: url('{{asset('/images/mis/mis (4).jpg')}}');"></a></li>
										<li><a href="{{asset('/images/mis/mis (5).jpg')}}" style="background-image: url('{{asset('/images/mis/mis (5).jpg')}}');"></a></li>
										<li><a href="{{asset('/images/mis/mis (6).jpg')}}" style="background-image: url('{{asset('/images/mis/mis (6).jpg')}}');"></a></li>
										<li><a href="{{asset('/images/mis/mis (7).jpg')}}" style="background-image: url('{{asset('/images/mis/mis (7).jpg')}}');"><div class="more">+4</div></a></li>
										<li class="hidden"><a href="{{asset('/images/mis/mis (8).jpg')}}" style="background-image: url('{{asset('/images/mis/mis (8).jpg')}}');"></a></li>
										<li class="hidden"><a href="{{asset('/images/mis/mis (9).jpg')}}" style="background-image: url('{{asset('/images/mis/mis (9).jpg')}}');"></a></li>
										<li class="hidden"><a href="{{asset('/images/mis/mis (10).jpg')}}" style="background-image: url('{{asset('/images/mis/mis (10).jpg')}}');"></a></li>
										<li class="hidden"><a href="{{asset('/images/mis/mis (11).jpg')}}" style="background-image: url('{{asset('/images/mis/mis (11).jpg')}}');"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>



				<div class="row"
					<div class="col-md-12">

						<img src="{{asset('/images/mis/mis.png')}}">
					</div>
				</div>
			</div>
		</div>

		


</div>

<!-- close content-->
						</div>
					</div>

				</div>
			</div>
								
		</div>
	</div>
</section>
@endsection