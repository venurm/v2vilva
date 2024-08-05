@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="my account, account settings, user settings, manage account">
<meta name="description" content="Manage your account settings on Vilva Business - B2B All-in-One Service Portal. Update personal information, change password, manage subscriptions, and access services such as app development, web development, hosting services, SEO services, and digital marketing solutions.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>My Account - Vilva Business</title>
@endsection

@section('content')

<section class="page-section-ptb">
    <div class="container">
        <div class="row mt-50">
            <div class="col-lg-12">
                <div class="title mb-30">
                    <h5>My Account</h5>
                </div>
                <div class="accordion gray plus-icon round mb-30">
                    <div class="acd-group">
                        <a href="#" class="acd-heading">Personal Information</a>
                        <div class="acd-des">
                            <p><strong>Name:</strong> {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</p>
                            <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                            <p><strong>Mobile:</strong> {{ auth()->user()->mobile }}</p>
                        </div>
                    </div>
                    <div class="acd-group">
                        <a href="#" class="acd-heading">Account Settings</a>
                        <div class="acd-des">
                            <p>You can update your account settings here.</p>
                        </div>
                    </div>

                    <div class="acd-group">
                        <a href="#" class="acd-heading">Services</a>
                        <div class="acd-des">
                            <p>You can update your account settings here.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
