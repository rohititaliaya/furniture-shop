@extends('layouts.app')
@section('content')
    {{-- Head banner --}}
    @include('components.head-banner')

    <div class="terms-conditions-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="terms-content">
                        <div class="section-title-wrap mb-50" data-aos="fade-up" data-aos-delay="200">
                            <h2 class="section-title">Terms & Conditions</h2>
                        </div>
                        <div class="main-content" data-aos="fade-up" data-aos-delay="300">
                            <p class="lead mb-4">Welcome to MOODMOD. By using our website and purchasing our products, you agree to the following terms and conditions.</p>
                            
                            <h3 class="mt-4">1. General Terms</h3>
                            <p>These terms and conditions govern your use of the MOODMOD website and the purchase of products from us. By accessing our site, you agree to be bound by these terms.</p>

                            <h3 class="mt-4">2. Product Information</h3>
                            <p>We strive to provide accurate information about our products, including descriptions, pricing, and availability. However, we do not warrant that product descriptions or other content are accurate, complete, reliable, current, or error-free.</p>

                            <h3 class="mt-4">3. Orders and Payment</h3>
                            <p>All orders are subject to acceptance and availability. Prices are subject to change without notice. Payment must be made in full at the time of purchase using our supported payment methods.</p>

                            <h3 class="mt-4">4. Shipping and Delivery</h3>
                            <p>Shipping times and costs vary depending on your location and the products ordered. We are not responsible for delays caused by shipping carriers or customs. Risk of loss and title for products pass to you upon delivery to the carrier.</p>

                            <h3 class="mt-4">5. Returns and Refunds</h3>
                            <p>Please refer to our Return Policy for information on returns and refunds. We reserve the right to refuse returns that do not meet our policy requirements.</p>

                            <h3 class="mt-4">6. Intellectual Property</h3>
                            <p>All content on our website, including text, images, logos, and designs, is the property of MOODMOD and is protected by intellectual property laws. You may not use our content without our express written permission.</p>

                            <h3 class="mt-4">7. Limitation of Liability</h3>
                            <p>MOODMOD shall not be liable for any direct, indirect, incidental, special, or consequential damages resulting from your use of our website or products.</p>

                            <h3 class="mt-4">8. Governing Law</h3>
                            <p>These terms and conditions are governed by the laws of India. Any disputes arising from these terms shall be resolved in the courts of Gandhinagar, Gujarat.</p>

                            <hr class="mt-50 mb-50">
                            <p>If you have any questions about our Terms & Conditions, please contact us at support@moodmod.store.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
