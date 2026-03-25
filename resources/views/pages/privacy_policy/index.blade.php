@extends('layouts.app')
@section('content')
    {{-- Head banner --}}
    @include('components.head-banner')

    <div class="privacy-policy-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="privacy-content">
                        <div class="section-title-wrap mb-50" data-aos="fade-up" data-aos-delay="200">
                            <h2 class="section-title">Privacy Policy</h2>
                        </div>
                        <div class="main-content" data-aos="fade-up" data-aos-delay="300">
                            <p class="lead mb-4">Your privacy is important to us. This Privacy Policy explains how MOODMOD collects, uses, and protects your personal information.</p>
                            
                            <h3 class="mt-4">1. Information We Collect</h3>
                            <p>We collect information that you provide to us directly, such as when you create an account, make a purchase, or contact us for support. This may include your name, email address, shipping address, and payment information.</p>

                            <h3 class="mt-4">2. How We Use Your Information</h3>
                            <p>We use your information to process your orders, provide customer support, and improve our services. We may also use your email address to send you updates about your orders and promotional offers, which you can opt-out of at any time.</p>

                            <h3 class="mt-4">3. Data Security</h3>
                            <p>We implement a variety of security measures to maintain the safety of your personal information. Your personal information is contained behind secured networks and is only accessible by a limited number of persons who have special access rights to such systems.</p>

                            <h3 class="mt-4">4. Sharing Your Information</h3>
                            <p>We do not sell, trade, or otherwise transfer your personal information to outside parties except as necessary to provide our services (e.g., shipping companies, payment processors) or as required by law.</p>

                            <h3 class="mt-4">5. Cookies</h3>
                            <p>We use cookies to enhance your experience on our website. Cookies are small files that a site or its service provider transfers to your computer's hard drive through your Web browser that enables the site's or service provider's systems to recognize your browser and capture and remember certain information.</p>

                            <h3 class="mt-4">6. Your Rights</h3>
                            <p>You have the right to access, correct, or delete your personal information. You can manage your account settings on our website or contact us for assistance.</p>

                            <h3 class="mt-4">7. Changes to This Policy</h3>
                            <p>We may update our Privacy Policy from time to time. Any changes will be posted on this page, and the date of the last update will be adjusted accordingly.</p>

                            <hr class="mt-50 mb-50">
                            <p>If you have any questions about our Privacy Policy, please contact us at support@moodmod.store.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
