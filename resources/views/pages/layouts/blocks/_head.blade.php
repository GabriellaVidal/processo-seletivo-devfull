<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="description" content="@yield('APP_DESCRIPTION', env('APP_DESCRIPTION', 'A description of the page'))">

	<meta name="subject" content="@yield('APP_DESCRIPTION', env('APP_DESCRIPTION', 'A description of the page'))">

	<meta name="abstract" content="@yield('APP_PURPOSE', env('APP_PURPOSE', 'A description of the page'))">

	<meta name="topic" content="@yield('APP_TOPIC', env('APP_TOPIC', 'A description of the page'))">
	
	<meta name="summary" content="@yield('APP_SUMMARY', env('APP_SUMMARY', 'A description of the page'))">
	
	{{-- Document Title --}}
	<title>@yield('PAGE_TITLE', env('APP_NAME', 'SITE'))</title>
	
	{{-- Base URL to use for all relative URLs contained within the document --}}
	<base href="{{ env('APP_URL') }}/">

	{{-- Helps prevent duplicate content issues --}}
	<link rel="canonical" href="@yield('CANONICAL_URL', request()->fullUrl())">
	
	{{-- Links to the author of the document --}}
	<link rel="author" href="Rits">

	<link rel="stylesheet" href="/css/app.css">

</head>