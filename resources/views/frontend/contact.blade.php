@extends('layouts.app')


@section('title',"Contact")

@section('content')


<div id="contact" class="contact-us section">
    <div class="container">
        <div class="row">
        <div class="col-lg-7">
            <div class="section-heading">
            <h2><em>Contact</em> us via the <span>Email</span></h2>
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13190.823358534495!2d-6.628232575745663!3d34.25604897432207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda75976848e63cb%3A0xbab8bbdcdda49e50!2sMosqu%C3%A9e%20El%20Houda!5e0!3m2!1sen!2sma!4v1676066281518!5m2!1sen!2sma" width="100%" height="360px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>
            <div class="info">
                <span><i class="fa fa-phone"></i> <a href="#" class="py-2">+2126-03676440</a></span>
                <span><i class="fa fa-envelope"></i> <a href="https://gmail.com" class="py-2">saidelhabhab@gmail.com</a></span>
            </div>
            </div>
        </div>
        <div class="col-lg-5 align-self-center">

            @if(Session::has('message_sent'))
            <div class="alert alert-success">
                {{ Session::get('message_sent') }}
            </div>
            @endif
            <form id="contact" action="{{route('contact_send')}}" method="POST">
                @csrf
            <div class="row">
                <div class="col-lg-12">
                <fieldset>
                    <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                </fieldset>
                </div>

                <div class="col-lg-12">
                <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
                </div>
                <div class="col-lg-12">
                <fieldset>
                    <input type="text" name="message"  placeholder="Your Message" required="">

                </fieldset>

                </div>
                <div class="col-lg-12">
                <fieldset>
                    <button type="submit" id="form-submit" class="main-button">Submit </button>
                </fieldset>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
    <div class="contact-dec">
        <img src="{{ asset('new/assets/images/contact-dec.png')}}" alt="">
    </div>
    <div class="contact-left-dec">
        <img src="{{ asset('new/assets/images/contact-left-dec.png')}}" alt="">
    </div>
    </div>

    @endsection
