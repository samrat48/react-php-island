@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <h1>Contact Us</h1>
    <p>Email us at: info@example.com</p>

    <!-- React island: Contact form -->
    <div 
        data-react-component="ContactForm"
        data-props='{"csrfToken": "{{ csrf_token() }}"}'
    ></div>
@endsection