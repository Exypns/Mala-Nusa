@extends('layouts.app')

@section('title', 'Home - Mala Nusa')

@section('content') 

    <section class="hero">
    <div class="hero-inner">
        <div class="hero-label">Travel · Empower · Restore</div>
        <h1>Regenerative travel in Warloka Pesisir, West Flores</h1>
        <p class="sub">
            Community-led experiences that put your visit to work — for local
            livelihoods and coastal conservation, honestly priced.
        </p>
        <div class="cta-row">
            <a href="{{ route('explore') }}" class="btn btn-primary">Explore Experiences</a>
            <a href="{{ route('about') }}" class="btn btn-white">Our Story</a>
        </div>
    </div>
</section>

@endsection
