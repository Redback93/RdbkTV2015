@extends('layouts.default')

@section('content')
<div class="full-container">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<h1>Hi. I'm Redback, an Australian web and Windows developer who enjoys working on interesting, innovative and interactive projects.</h1>
			</div>
		</div>
	</div>
</div>
<section id="intro" class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1><span class="quote-title">&ldquo;If I have seen further it is by standing on the shoulders of giants.&rdquo;</span> &mdash; Isaac Newton</h1>
		</div>
	</div>
</section>
<section id="projects" class="dark-bg">
	<div class="container">
		<div class="row">

			@foreach(Config::get('projects.projects') as $key=>$project)
			<div class="col-md-6">
				<div class="project" style="background-image: url(img/projects/bg/{{{$project->backgroundImage}}});">
					<a href="/{{{$key}}}">
						<div class="project-logo">
							<img src="img/projects/logo/{{{$project->logoImage}}}" width="64" height="64" alt="{{{$project->name}}} Logo">
						</div>
						<div class="project-info">
							<h2>{{{$project->name}}}</h2>
							<p>{{{$project->involvement}}}</p>
						</div>
					</a>
				</div>
			</div>
			@endforeach

		</div>
	</div>
</section>
@stop