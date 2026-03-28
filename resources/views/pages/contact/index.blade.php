@extends('layouts.app')
@section('content')
    {{-- Head banner --}}
    @include('components.head-banner')

    <div class="contact-form-area pt-90 pb-100">
        <div class="container">
            <div class="section-title-4 text-center mb-55" data-aos="fade-up" data-aos-delay="200">
                <h2>Ask Us Anything Here</h2>
            </div>
            <div class="contact-form-wrap" data-aos="fade-up" data-aos-delay="200">
                <div class="contact-form-style" id="contact-form">
                    <div class="row">
                        <div class="col-lg-4">
                            <input name="name" type="text" placeholder="Name*">
                            <input name="email" type="email" placeholder="Email*">
                            <input name="subject" type="text" placeholder="Subject*">
                            <input name="phone" type="text" placeholder="Phone*">
                        </div>
                        <div class="col-lg-8">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12 contact-us-btn btn-hover">
                            <button class="submit" type="submit">Send Message</button>
                        </div>
                    </div>
                </div>
                <p class="form-messege"></p>
            </div>
        </div>
    </div>
    <div class="map pt-120" data-aos="fade-up" data-aos-delay="200">
        <iframe
            src="https://maps.google.com/maps?q=189%2F15%2C%20nr.%20Pazhassi%20East%20LP%20School%2C%20Mattannur%2C%20Kannur%2C%20Kerala%20670702&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
    </div>
@endsection
