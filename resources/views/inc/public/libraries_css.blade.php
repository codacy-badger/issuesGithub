@if(App::environment('production'))
	{{-- bootstrap.min.css 3.3.6 --}}
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
	{{-- font-awesome.min.css 4.5.0 --}}
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">
@else
	{{-- bootstrap.min.css 3.3.6 --}}
	<link rel="stylesheet" type="text/css" href="{{config('custom.site_url')}}css/bootstrap.min.css">
	{{-- font-awesome.min.css 4.5.0 --}}
	<link rel="stylesheet" type="text/css" href="{{config('custom.site_url')}}css/font-awesome.min.css">
@endif