@extends('layouts.app')
@section('content')
    {{-- Head banner --}}
    @include('components.head-banner')

    <div class="about-us-area pt-100 pb-100">
        <div class="container">
            {{-- Hero Section --}}
            <div class="row align-items-center mb-100">
                <div class="col-lg-6 mb-30" data-aos="fade-right">
                    <div class="about-content">
                        <div class="section-title-wrap mb-30">
                            <h2 class="section-title">The Art of Intentional Living</h2>
                        </div>
                        <p class="lead mb-4">MOODMOD was not created to follow a market. It was created to redefine one.</p>
                        <p>In an era where furniture is mass-produced, loudly marketed, and quickly replaced, we chose a different path rooted in discipline, restraint, and intention.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-30" data-aos="fade-left">
                    <div class="about-img">
                        <img src="{{ asset('aboutus/ab-1.jpeg') }}" alt="MOODMOD Intentional Living" class="w-100 rounded shadow-lg">
                    </div>
                </div>
            </div>

            {{-- Core Values Grid --}}
            <div class="row mb-100">
                <div class="col-lg-3 col-md-6 mb-30" data-aos="fade-up" data-aos-delay="100">
                    <div class="single-feature-wrap text-center p-4 border rounded">
                        <h4 class="mb-3">Intentional Design</h4>
                        <p class="mb-0">Form follows feeling with measured restraint.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30" data-aos="fade-up" data-aos-delay="200">
                    <div class="single-feature-wrap text-center p-4 border rounded">
                        <h4 class="mb-3">Material Integrity</h4>
                        <p class="mb-0">Hand-selected textures that age with dignity.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30" data-aos="fade-up" data-aos-delay="300">
                    <div class="single-feature-wrap text-center p-4 border rounded">
                        <h4 class="mb-3">Ergonomic Precision</h4>
                        <p class="mb-0">Engineered to support posture over time.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30" data-aos="fade-up" data-aos-delay="400">
                    <div class="single-feature-wrap text-center p-4 border rounded">
                        <h4 class="mb-3">Responsible Build</h4>
                        <p class="mb-0">Durability-first decisions with less waste.</p>
                    </div>
                </div>
            </div>

            {{-- Our Origin --}}
            <div class="row align-items-center mb-100 flex-row-reverse">
                <div class="col-lg-6 mb-30" data-aos="fade-left">
                    <div class="about-content pl-50">
                        <h3 class="mb-30">Our Origin</h3>
                        <p>MOODMOD began with a single question: What if seating could transform not just posture, but perception? What if comfort did more than relax the body? What if design did more than fill a room? What if silence itself could be engineered?</p>
                        <p>From this inquiry emerged a design philosophy that merges engineering precision with quiet emotional resonance. Every collection begins not with shape, but with experience. Not with appearance, but with sensation.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-30" data-aos="fade-right">
                    <div class="about-img">
                        <img src="{{ asset('aboutus/ab-2.jpeg') }}" alt="MOODMOD Origin" class="w-100 rounded shadow-lg">
                    </div>
                </div>
            </div>

            {{-- Philosophy Section --}}
            <div class="row mb-100">
                <div class="col-lg-12" data-aos="fade-up">
                    <div class="philosophy-wrap text-center mb-50">
                        <h3 class="mb-30 text-uppercase letter-spacing-2">Our Philosophy</h3>
                    </div>
                </div>
                <div class="col-lg-6 mb-30" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-4 border-left">
                        <h4>Presence Over Performance</h4>
                        <p>Performance matters. But presence matters more. At MOODMOD, engineering discipline forms the foundation. Every structure is ergonomically studied to support the human spine, distribute weight intelligently, and reduce physical strain over extended use.</p>
                        <p>True luxury emerges when performance disappears. When structure becomes invisible. When the user no longer notices mechanics, only ease. This is the precise moment performance dissolves into presence.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-30" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-4 border-left">
                        <h4>Material as Identity</h4>
                        <p>We believe materials are not components. They are character. Our teak is chosen for integrity, grain continuity, density, and maturity. The wood is seasoned carefully for structural stability and natural longevity.</p>
                        <p>Teak offers more than durability. It offers warmth. It offers depth. It ages with dignity. No two grains are identical. Each carries subtle tonal differences, flowing patterns, and organic textures. These are not imperfections. They are signatures. We do not mask the material. We reveal it.</p>
                    </div>
                </div>
            </div>

            {{-- Visual Showcase --}}
            <div class="row mb-100">
                <div class="col-md-6 mb-30" data-aos="zoom-in">
                    <img src="{{ asset('aboutus/ab-3.jpeg') }}" alt="Craftsmanship" class="w-100 rounded shadow">
                </div>
                <div class="col-md-6 mb-30" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('aboutus/ab-4.jpeg') }}" alt="Detail" class="w-100 rounded shadow">
                </div>
            </div>

            {{-- Discipline and Ergonomics --}}
            <div class="row align-items-center mb-100">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="about-content pr-50">
                        <h3 class="mb-30">The Discipline of Detail</h3>
                        <p>Luxury is not decoration. It is discipline. Every silhouette at MOODMOD undergoes meticulous refinement. Edges are softened where comfort demands. Lines are sharpened where structure requires strength. Angles are adjusted not for trend, but for balance.</p>
                        <p>We obsess over proportions because proportion creates harmony. Structural reinforcements are integrated without visual interruption. Comfort mechanisms are engineered into the form itself. Nothing appears technical. Everything feels natural.</p>
                        
                        <h3 class="mt-50 mb-30">Ergonomics Reimagined</h3>
                        <p>Comfort should not be accidental. Our design process integrates rigorous ergonomic study, including posture alignment, lumbar support, weight distribution, and relaxation angles. True luxury is when the spine feels understood.</p>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-up">
                    <div class="featured-list p-5 bg-light rounded">
                        <h4 class="mb-4">Our Promise</h4>
                        <ul class="list-unstyled">
                            <li class="mb-3"><i class="fa fa-check-circle text-primary mr-2"></i> Precision engineering</li>
                            <li class="mb-3"><i class="fa fa-check-circle text-primary mr-2"></i> Hand-selected materials</li>
                            <li class="mb-3"><i class="fa fa-check-circle text-primary mr-2"></i> Timeless aesthetic clarity</li>
                            <li class="mb-3"><i class="fa fa-check-circle text-primary mr-2"></i> Structural durability</li>
                            <li><i class="fa fa-check-circle text-primary mr-2"></i> Emotional resonance</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Final Statement --}}
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center" data-aos="fade-up">
                    <div class="final-content py-5">
                        <h3 class="mb-30">Quiet Luxury</h3>
                        <p class="lead">There is a difference between wealth and refinement. We design for refinement. Quiet luxury is not about display. It is about awareness. It is the confidence to let quality speak without volume.</p>
                        <hr class="my-5">
                        <p>MOODMOD exists for individuals who understand that the environment they inhabit shapes the quality of their inner life. A chair is not simply a structure of wood and fabric. It is a place where thought slows down. Where posture aligns with peace. Where silence becomes meaningful.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
