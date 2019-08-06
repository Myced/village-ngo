@extends('layouts.front')

@section('title')
    {{ __("titles.contact_us") }}
@endsection

@section('content')
    <div class="hero-wrap"
        style="background-image: url('/front/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>

        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center"
                    data-scrollax=" properties: { translateY: '70%' }">

                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    {{ __('titles.contact_us') }}
                </h1>
            </div>
            </div>
        </div>
    </div>


<section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h4">{{ __("phrases.contact_information") }}</h2>
            </div>

            <div class="w-100"></div>

            <div class="col-md-3">
                <p>
                    <span>{{ __('words.address') }}:</span>
                    Diocèse de Kribi Cameroun
                </p>
            </div>

            <div class="col-md-3">
                <p>
                    <span>{{ __('words.telephone') }}:</span>
                    <a href="tel://1234567920">+ 1235 2355 98</a>
                </p>
            </div>

            <div class="col-md-3">
                <p>
                    <span>{{ __('words.email') }}:</span>
                    <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                </p>
            </div>

            <div class="col-md-3">
                <p>
                    <span>{{ __('words.website') }}</span>
                    <a href="#">yoursite.com</a>
                </p>
            </div>
        </div>

        <div class="row block-9">
            <div class="col-md-6 pr-md-5">
                <h4 class="mb-4">{{ __('phrases.do_you_have_questions') }}</h4>

                <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="{{ __('phrases.your_name') }}"
                            name="name" required>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control"
                            placeholder="{{ __('phrases.your_email') }}"
                            name="email" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control"
                            placeholder="{{ __('words.subject') }}"
                            name="subject" required>
                    </div>

                    <div class="form-group">
                        <textarea id="" cols="30" rows="7" class="form-control"
                            placeholder="{{ __('words.message') }}"
                            name="message" required></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="{{ __('phrases.send_message') }}" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

        </div>
    </div>
</section>
@endsection
