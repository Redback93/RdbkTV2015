@extends('layouts.default')

@section('content')
<div class="static-bg">
	<img src="img/projects/bg/{{{$project->backgroundImage}}}">
</div>
<section class="project-header">
	<div class="logo-part">
		<div class="bg"></div>
		<div class="solid" style="background-image: url(img/projects/logo/{{{$project->logoImage}}});">
		</div>
	</div>
</section>
<section class="portfolio-info dark-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h2>{{{$project->name}}}</h2>
				<p>{{$project->description}}</p>
			</div>
			<div class="col-md-4 facts">
				<div class="fact">
					<span class="fact-head">CLIENT</span>
					<p>{{{$project->client}}}</p>
				</div>
				<div class="fact">
					<span class="fact-head">ROLE</span>
					<p>{{{$project->involvement}}}</p>
				</div>
				<div class="fact">
					<span class="fact-head">DATE</span>
					<p>{{{$project->date}}}</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="portfolio-display">
	<div class="container">
		@foreach($images as $image)
		@if(strpos($image, '-website') !== FALSE)
		<div class="website-display">
			<div class="website-bar">
				<div class="website-buttons"><span class="glyphicon glyphicon-arrow-left"></span><span class="glyphicon glyphicon-arrow-right"></span><span class="glyphicon glyphicon-refresh"></span></div>
			</div>
			<img src="{{{$imageDir}}}/{{{$image}}}">
		</div>
		@else
		<img src="{{{$imageDir}}}/{{{$image}}}" class="program-display">
		@endif
		@endforeach
	</div>
</section>
@stop