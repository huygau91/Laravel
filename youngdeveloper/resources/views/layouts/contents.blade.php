@extends('index')

@section('content')


<section id="services">
	<!-- Page Content -->
		<div class="row">

			<!-- Blog Entries Column -->
			<div class="col-md-8">

				<h1 class="page-header">
					Top Post <small>Secondary Text</small>
				</h1>

				<!-- First Blog Post -->
				<h2>
					<a href="#">Blog Post Title</a>
				</h2>
				<p class="lead">
					by <a href="index.php">Start Bootstrap</a>
				</p>
				<p>
					<span class="glyphicon glyphicon-time"></span> Posted on August 28,
					2013 at 10:00 PM
				</p>
				<hr>
				<img class="img-responsive"
					src="{{ URL::asset('images/writer.jpg') }}" alt="">
				<hr>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore,
					veritatis, tempora, necessitatibus inventore nisi quam quia
					repellat ut tempore laborum possimus eum dicta id animi corrupti
					debitis ipsum officiis rerum.</p>
				<a class="btn btn-primary" href="#">Read More <span
					class="glyphicon glyphicon-chevron-right"></span></a>

				<hr>

				<!-- Second Blog Post -->
				<h2>
					<a href="#">Blog Post Title</a>
				</h2>
				<p class="lead">
					by <a href="index.php">Start Bootstrap</a>
				</p>
				<p>
					<span class="glyphicon glyphicon-time"></span> Posted on August 28,
					2013 at 10:45 PM
				</p>
				<hr>
				<img class="img-responsive"
					src="{{ URL::asset('images/bang.jpg') }}" alt="">
				<hr>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
					Quibusdam, quasi, fugiat, asperiores harum voluptatum tenetur a
					possimus nesciunt quod accusamus saepe tempora ipsam distinctio
					minima dolorum perferendis labore impedit voluptates!</p>
				<a class="btn btn-primary" href="#">Read More <span
					class="glyphicon glyphicon-chevron-right"></span></a>

				<hr>

				<!-- Third Blog Post -->
				<h2>
					<a href="#">Blog Post Title</a>
				</h2>
				<p class="lead">
					by <a href="index.php">Start Bootstrap</a>
				</p>
				<p>
					<span class="glyphicon glyphicon-time"></span> Posted on August 28,
					2013 at 10:45 PM
				</p>
				<hr>
				<img class="img-responsive"
					src="{{ URL::asset('images/flower.jpg') }}" alt="">
				<hr>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
					Cupiditate, voluptates, voluptas dolore ipsam cumque quam veniam
					accusantium laudantium adipisci architecto itaque dicta aperiam
					maiores provident id incidunt autem. Magni, ratione.</p>
				<a class="btn btn-primary" href="#">Read More <span
					class="glyphicon glyphicon-chevron-right"></span></a>

				<hr>
			</div>
			@include('layouts.sidebar') 
		</div>
		<hr>
</section>
@endsection
