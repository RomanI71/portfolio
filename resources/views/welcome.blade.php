@extends('layouts.website')


@section('maincontent')
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a>

    @include('websitepart.header')

    @include('websitepart.navbar')

    @include('websitepart.about')

    <!--Resume Section-->
    @include('websitepart.resume')

    @include('websitepart.countdown')

    @include('websitepart.service')

    @include('websitepart.price')

    @include('websitepart.hire')

    <!-- Portfolio Section -->
    @include('websitepart.portfolio')
    <!-- End of portfolio section -->

    @include('websitepart.news')

    @include('websitepart.contact')
    @include('websitepart.footer')

@endsection
