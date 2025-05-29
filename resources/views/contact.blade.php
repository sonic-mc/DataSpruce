@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<h2>Contact Us</h2>

<p>If you'd like to contact us, tap one of the buttons below. You can send us an email or message us on WhatsApp directly.</p>

<!-- Email Button -->
<!-- Add this in your blade view -->
<div class="contact-buttons">
    <a href="mailto:allysonmachaka@gmail.com?subject=Contact%20Request&body=Hi,%20I%20would%20like%20to%20get%20in%20touch%20with%20you."
       class="contact-btn email">
      📧 Email Us
    </a>
  
    <a href="https://wa.me/263772131956"
       target="_blank"
       class="contact-btn whatsapp">
      💬 Message Us on WhatsApp
    </a>
  </div>
@endsection
