@extends('layouts.front')

@section('title')
    {{ __("navigation.gallery") }}
@endsection

@section('styles')
<link rel="stylesheet" href="/front/plugins/light-gallery/css/lightgallery.css">
<style media="screen">
    @import url(https://fonts.googleapis.com/css?family=Raleway);

    *, *:before, *:after{
        margin: 0;
        padding: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing:border-box;
        box-sizing: border-box;
    }

    .main-title{
        color: #2d2d2d;
        text-align: center;
        text-transform: capitalize;
        padding: 0.7em 0;
    }

    .image-container{
        padding: 1em 0;
        float: left;
        width: 50%;
    }
    @media screen and (max-width: 640px){
            .image-container{
            display: block;
            width: 100%;
        }
    }

    @media screen and (min-width: 900px){
        .image-container{
            width: 100%;
        }
    }

    .image-container .title{
        color: #1a1a1a;
        text-align: center;
        margin-bottom: 10px;
    }

    .content {
        position: relative;
        width: 90%;
        max-width: 400px;
        margin: auto;
        overflow: hidden;
    }

    .content .content-overlay {
        background: rgba(0,0,0,0.7);
        position: absolute;
        height: 99%;
        width: 100%;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        opacity: 0;
        -webkit-transition: all 0.4s ease-in-out 0s;
        -moz-transition: all 0.4s ease-in-out 0s;
        transition: all 0.4s ease-in-out 0s;
    }

    .content:hover .content-overlay{
        opacity: 1;
    }

    .content-image{
        width: 100%;
    }

    .content-details {
        position: absolute;
        text-align: center;
        padding-left: 1em;
        padding-right: 1em;
        width: 100%;
        top: 50%;
        left: 50%;
        opacity: 0;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-transition: all 0.3s ease-in-out 0s;
        -moz-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
    }

    .content:hover .content-details{
        top: 50%;
        left: 50%;
        opacity: 1;
    }

    .content-details h3{
        color: #fff;
        font-weight: 500;
        letter-spacing: 0.15em;
        margin-bottom: 0.5em;
        text-transform: uppercase;
    }

    .content-details p{
        color: #fff;
        font-size: 0.8em;
    }

    .fadeIn-bottom{
        top: 80%;
    }

    .fadeIn-top{
        top: 20%;
    }

    .fadeIn-left{
        left: 20%;
    }

    .fadeIn-right{
        left: 80%;
    }
    .p-20
    {
        padding: 20px;
    }
    .p-10
    {
        padding: 10px;
    }
</style>

@endsection

@section('content')
<?php $numbers = [1]; ?>

<div class="hero-wrap" style="background-image: url('/front/images/bg_7.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>

    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-3 bread"
                    data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    {{ __('navigation.gallery') }}
                </h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-gallery">
    	<div class="container">
            <div class="row" id="aniimated-thumbnials">
                
                

                <div class="col-md-4 p-10">
                    <div class="content">
                        <a href="/front/images/ddd1.jpg"
                            data-sub-html="Description">

                            <div class="content-overlay"></div>

                            <img class="content-image" src="/front/images/ddd1.jpg">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Bagyeli Community</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 p-10">
                    <div class="content">
                        <a href="/front/images/ddd5.jpg"
                            data-sub-html="Checking the Health of the Bagyeli">

                            <div class="content-overlay"></div>

                            <img class="content-image" src="/front/images/ddd5.jpg">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Helping Health</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 p-10">
                    <div class="content">
                        <a href="/front/images/ddd7.jpg"
                            data-sub-html="Checking the Health of the Bagyeli">

                            <div class="content-overlay"></div>

                            <img class="content-image" src="/front/images/ddd7.jpg">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Helping Health</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 p-10">
                    <div class="content">
                        <a href="/front/images/dd6.jpg"
                            data-sub-html="Checking the Health of the Bagyeli">

                            <div class="content-overlay"></div>

                            <img class="content-image" src="/front/images/dd6.jpg">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Helping Health</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 p-10">
                    <div class="content">
                        <a href="/front/images/ddd.jpg"
                            data-sub-html="Checking the Health of the Bagyeli">

                            <div class="content-overlay"></div>

                            <img class="content-image" src="/front/images/ddd.jpg">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Helping Health</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 p-10">
                    <div class="content">
                        <a href="/front/images/ddd3.jpg"
                            data-sub-html="Checking the Health of the Bagyeli">

                            <div class="content-overlay"></div>

                            <img class="content-image" src="/front/images/ddd3.jpg">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Helping Health</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 p-10">
                    <div class="content">
                        <a href="/front/images/ddd2.jpg"
                            data-sub-html="Sign Board indicating you are about to enter the Bagyeli">

                            <div class="content-overlay"></div>

                            <img class="content-image" src="/front/images/ddd2.jpg">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Entrance into the Community</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 p-10">
                    <div class="content">
                        <a href="/front/images/dd2.jpg"
                            data-sub-html="Checking the Health of the Bagyeli">

                            <div class="content-overlay"></div>

                            <img class="content-image" src="/front/images/dd2.jpg">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Bagyeli</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 p-10">
                    <div class="content">
                        <a href="/front/images/dd3.jpg"
                            data-sub-html="Checking the Health of the Bagyeli">

                            <div class="content-overlay"></div>

                            <img class="content-image" src="/front/images/dd3.jpg">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Helping Health</h3>
                            </div>
                        </a>
                    </div>
                </div>


            </div>



	    </div>
    </section>
@endsection

@section('scripts')
    <script src="/front/plugins/light-gallery/js/lightgallery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#aniimated-thumbnials').lightGallery({
                thumbnail: true,
                selector: 'a'
            });
        })
    </script>
@endsection
