@extends('layouts.app')

@section('title', 'Homepage')
@section('description', 'Welcome to our store')

@section('content')
    <h1>Welcome to our store</h1>
    <p>This is SEO-friendly content rendered by Laravel.</p>

    <!-- React island: Newsletter signup -->
    <div data-react-component="NewsletterSignup"></div>
@endsection