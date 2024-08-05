@extends('customer.layouts.app')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="my account, account settings, user settings, manage account">
<meta name="description"
    content="Manage your account settings on Vilva Business - B2B All-in-One Service Portal. Update personal information, change password, manage subscriptions, and access services such as app development, web development, hosting services, SEO services, and digital marketing solutions.">
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
                            <p><strong>Name:</strong> {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
                            </p>
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
                            @if($services->isEmpty())
                                <p>No services found.</p>
                            @else
                                <ul>
                                    @foreach($services as $service)
                                        <li>
                                            <strong>Name:</strong> {{ $service->name }}<br>
                                            <strong>Description:</strong> {{ $service->description ?? 'N/A' }}<br>
                                            <strong>Price:</strong> ${{ number_format($service->price, 2) ?? 'N/A' }}<br>
                                            <strong>Month:</strong> {{ $service->month ? $service->month->format('Y-m') : 'N/A' }}<br>
                                            <strong>Year:</strong> {{ $service->year ? $service->year->format('Y') : 'N/A' }}<br>
                                            <strong>Start Date:</strong> {{ $service->start_date ? $service->start_date->format('Y-m-d') : 'N/A' }}<br>
                                            <strong>End Date:</strong> {{ $service->end_date ? $service->end_date->format('Y-m-d') : 'N/A' }}<br>
                                            <form action="{{ route('pay') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="service_id" value="{{ $service->id }}">
                                                <button type="submit">Pay Now</button>
                                            </form>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>

                    <div class="acd-group">
                        <a href="#" class="acd-heading">MY Active Services </a>
                        <div class="acd-des">
                            @if($myservices->isEmpty())
                                <p>No Active Services found.</p>
                            @else
                                <ul>
                                    @foreach($myservices as $myservice)
                                        <li>
                                            <strong>Service Name:</strong> {{ $myservice->service_name }}<br>
                                            <strong>Start Date:</strong> {{ $myservice->start_date ? $myservice->start_date->format('Y-m-d') : 'N/A' }}<br>
                                            <strong>End Date:</strong> {{ $myservice->end_date ? $myservice->end_date->format('Y-m-d') : 'N/A' }}<br>
                                            <strong>Price:</strong> ${{ number_format($myservice->price, 2) }}<br>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
