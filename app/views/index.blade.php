@extends('layouts.default')

@section('content')
<div class="full-container">
	<div class="container">
		<div class="row">
			<div class="col-md-4 text-center">
				<h1>This is a short list of some of the technologies I am familiar with.</h1>
			</div>
			<div class="col-md-4 col-md-offset-2">
				<div id="home-page-splash-shuffle">
					<p>Python 3</p>
					<p>Python 2</p>
					<p>Java</p>
					<p>PHP</p>
					<p>C#</p>
					<p>REST</p>
					<p>Illustrator</p>
					<p>Apache</p>
					<p>Windows</p>
					<p>Visual Studio</p>
					<p>Git</p>
					<p>SASS</p>
					<p>JQuery</p>
					<p>Photoshop</p>
					<p>Laravel</p>
					<p>MySQL</p>
				</div>
			</div>
		</div>
	</div>
</div>
<section id="intro" class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Hi. I'm Redback, an Australian web and Windows developer who enjoys working on interesting, innovative and interactive projects.</h1>
			<hr>
			<h1><blockquote class="blockquote-reverse">&ldquo;If I have seen further it is by standing on the shoulders of giants.&rdquo;</span> <br/>&mdash; Isaac Newton</h1>
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