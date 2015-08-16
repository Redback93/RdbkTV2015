<?php

class Project 
{
	public $backgroundImage;
	public $logoImage;
	public $name;
	public $description;
	public $involvement;
	public $client;
	public $date;

	public function __construct($bgImage, $logoImage, $name, $involvement, $client, $description, $date)
	{
		$this->backgroundImage = $bgImage;
		$this->logoImage = $logoImage;
		$this->name = $name;
		$this->involvement = $involvement;
		$this->client = $client;
		$this->description = $description;
		$this->date = $date;
	}
}

return array (
	"projects" => array(
		//Market Monitor
		"marketmonitor" => new Project("marketmonitor-bg.jpg", "marketmonitor-logo.png", "Market Monitor", "App Design and Development", "Commissioned",
			"Commissioned by a stock broking technology firm, Market Monitor was designed as an iOS and Android app version of their existing desktop software. Market Monitor has its own database of stock market opening, closing and lunch times and notifies users of the markets' changes throughout the day and whether they are on holiday. It was created using Xamarin’s C# libraries and works for both platforms using native controls.",
		"August 2015"),

		//LoLShadow
		"lolshadow" => new Project("lolshadow-bg.jpg", "lolshadow-logo.png", "LoLShadow", "Server and Website Implementation", "Redback",
			"By request from the streamers at <a href=\"//twitch.tv\">Twitch</a>, LoLShadow was my cutting-edge implementation of my previous <a href=\"/lolalerter\">LoLAlerter</a>. LoLShadow aids in providing streamers with real-time information about their stream while inside a game of League of Legends. Implemented in Python, with a Laravel (PHP) website.", 
		"September 2014"),

		//LoLAlerter
		"lolalerter" => new Project("lolalerter-bg.jpg", "lolalerter-logo.png", "LoLAlerter", "Server and Website Implementation", "Redback",
			"Initially as a solution to an annoying problem, LoLAlerter has grown from a small, private program into a much more visible interaction on <a href=\"//twitch.tv\">Twitch</a>. LoLAlerter provides streamers with real-time information about their paying customers and donations while playing games. Implemented in Python, with a Laravel (PHP) website.", 
		"August 2014"),

		//Osu!Track
		"osutrack" => new Project("osutrack-bg.jpg", "osutrack-logo.png", "osu!Track", "Website Design and Development", "Ameobea",
			"osu!Track is a project originally started by an online friend of mine in order to watch his own progress in the game osu!. Upon helping fix design issues, I was invited to work with him on the project to design the database and improve website usability. Now frequented by hundreds of active users, this fully-vanilla PHP website is now a loved asset in the osu! community.", 
		"June 2014"),

		//Osu!RequestBot
		"orb" => new Project("orb-bg.jpg", "orb-logo.png", "ORB", "Application Development", "osu! Forums",
			"osu!RequestBot (or ORB) started as a revamped version of a program which was neglected by it's developer. ORB interacts with <a href=\"//twitch.tv\">Twitch</a> viewers watching osu! streams. The bot listens to their commands, and shares their song requests with the streamer. Implemented in C# with the DevExpress UI libraries.", 
		"December 2013"),

		//DonateBack
		"donateback" => new Project("donateback-bg.jpg", "donateback-logo.png", "DonateBack", "Application, Server and Website Implementation", "Mylixia",
			"DonateBack (formerly known as DonationMonitor) was a collaboration between <a href=\"/mylixia\">Mylixia's</a> ingenious idea and my programming know-how. DonateBack serves as a conduit between PayPal and <a href=\"//twitch.tv\">Twitch</a> streamers, relaying real-time information about their donations and viewer comments. DonateBack also serves a visual display when a user donates to the stream. This project is implemented in C# with a Laravel (PHP) website and backend.", 
		"October 2013"),

		//Mylixia
		"mylixia" => new Project("mylixia-bg.jpg", "mylixia-logo.png", "Mylixia", "Website Design and Development", "Mylixia",
			"Mylixia is an online friend of mine whom I met while visiting his League of Legends stream on <a href=\"//twitch.tv\">Twitch</a>. The project he gave me was to design and develop a website in his colours and to his specifications, while best utilising his brand image. The website became a hub for his social media and blog, while also combining elements of his stream schedule. Mylixia.com was fully created using CakePHP.", 
		"July 2013"),

		//SubscriberProcessor
		"subprocessor" => new Project("subprocessor-bg.jpg", "subprocessor-logo.png", "Subscriber Processor", "Application Development and Database Design", "Mylixia",
			"SubProcessor (short for SubscriberProcessor) is a custom made tool designed for <a href=\"/mylixia\">Mylixia</a> to track his new and expiring subscriptions from his <a href=\"//twitch.tv\">Twitch</a> channel. SubProcessor keeps his website up to date, displays incoming subscribers on his stream and watches for repeat subscriptions. It is also able to determine whether a subscription has run out. The desktop application was created with C#.", 
		"June 2013")
	)
);