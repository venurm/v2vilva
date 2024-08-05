<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\AuthController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\LeadController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Customer\ServicesController;

// Route::get('/', function () {
//     return view('customer.pages.index');
// });

Route::get('/', function () {
    return view('customer.newpages.newindex');
});

//products
Route::get('products', function () {
    return view('customer.newpages.ourproduct');
});

//growsuite
Route::get('growsuite', function() {
    return view('customer.newpages.growsuite');
});

//ecommerce solution
Route::get('magento-solutions', function () {
    return view('customer.newpages.magento-solutions');
});

Route::get('opencart-solutions', function () {
    return view('customer.newpages.opencart-solutions');
});

Route::get('wordpress-solutions', function () {
    return view('customer.newpages.wordpress-solutions');
});

Route::get('shopify-solutions', function () {
    return view('customer.newpages.shopify-solutions');
});

Route::get('android-solutions', function () {
    return view('customer.newpages.android-solutions');
});

Route::get('ios-solutions', function () {
    return view('customer.newpages.ios-solutions');
});

//industry
//andiord app
Route::get('app-for-boutiques', function () {
    return view('customer.newpages.app-for-boutiques');
});

Route::get('app-for-restaurants', function () {
    return view('customer.newpages.app-for-restaurants');
});

Route::get('app-for-hotels', function () {
    return view('customer.newpages.app-for-hotels');
});

Route::get('app-for-shops', function () {
    return view('customer.newpages.app-for-shops');
});
Route::get('app-for-ecommerce', function () {
    return view('customer.newpages.app-for-ecommerce');
});

Route::get('app-for-groceries', function () {
    return view('customer.newpages.app-for-groceries');
});

Route::get('app-for-fruits-vegetables', function () {
    return view('customer.newpages.app-for-fruits-vegetables');
});

Route::get('app-for-wholesalers', function () {
    return view('customer.newpages.app-for-wholesalers');
});

//accounting solution
Route::get('gst-registration', function() {
    return view('customer.newpages.gst-registration');
});
Route::get('gst-filings', function() {
    return view('customer.newpages.gst-filings');
});

Route::get('accounting-softwares', function() {
    return view('customer.newpages.accounting-softwares');
});


//banking solutions

Route::get('oracle-plsql-webservices', function() {
    return view('customer.newpages.oracle-plsql-webservices');
});

Route::get('payment-gateway-solutions', function() {
    return view('customer.newpages.payment-gateway-solutions');
});

Route::get('payment-collection-services', function() {
    return view('customer.newpages.payment-collection-services');
});
Route::get('bank-verification-api', function() {
    return view('customer.newpages.bank-verification-api');
});

Route::get('aadhar-pan-verification-api', function() {
    return view('customer.newpages.aadhar-pan-verification-api');
});

Route::get('virtual-api-accounts', function() {
    return view('customer.newpages.virtual-api-accounts');
});
Route::get('virtual-current-accounts', function() {
    return view('customer.newpages.virtual-current-accounts');
});

Route::get('corporate-cards-expense-cards', function() {
    return view('customer.newpages.corporate-cards-expense-cards');
});

//services
Route::get('ai-ml', function() {
    return view('customer.newpages.aiml');
});
Route::get('fintechsolution', function() {
    return view('customer.newpages.fintechsolution');
});
Route::get('cybersecurity', function() {
    return view('customer.newpages.cybersecurity');
});
Route::get('kycverification', function() {
    return view('customer.newpages.kycverification');
});
// technology
Route::get('technologies', function() {
    return view('customer.newpages.ourtechnology');
});

//marketing
//whatsapp-marketing
Route::get('vliva-biz-sender-pro', function() {
    return view('customer.newpages.vliva-biz-sender-pro');
});

Route::get('bulk-whatsapp', function() {
    return view('customer.newpages.bulk-whatsapp-marketing');
});

Route::get('whatsapp-business-api', function() {
    return view('customer.newpages.whatsapp-business-api');
});

Route::get('official-whatsapp-facebook-business', function() {
    return view('customer.newpages.official-whatsapp-facebook-business');
});

Route::get('email-marketing', function() {
    return view('customer.newpages.email-marketing');
});

Route::get('sms-marketing', function() {
    return view('customer.newpages.sms-marketing');
});

//voice marketing
Route::get('bulk-voice-calling', function() {
    return view('customer.newpages.bulk-voice-calling');
});

Route::get('custom-voice-calling', function() {
    return view('customer.newpages.custom-voice-calling');
});

Route::get('api-voice-calling', function() {
    return view('customer.newpages.api-voice-calling');
});

//digital marketing
Route::get('facebook-instagram-marketing', function() {
    return view('customer.newpages.facebook-instagram-marketing');
});

Route::get('linkedin-marketing', function() {
    return view('customer.newpages.linkedin-marketing');
});

Route::get('google-youtube-marketing', function() {
    return view('customer.newpages.google-youtube-marketing');
});

Route::get('app-installs-marketing', function() {
    return view('customer.newpages.app-installs-marketing');
});

Route::get('sales-converstion-marketing', function() {
    return view('customer.newpages.sales-converstion-marketing');
});

Route::get('lead-generation-marketing', function() {
    return view('customer.newpages.lead-generation-marketing');
});

Route::get('event-signup-ticket-sales-marketing', function() {
    return view('customer.newpages.event-signup-ticket-sales-marketing');
});

Route::get('social-media-management-marketing', function() {
    return view('customer.newpages.social-media-management-marketing');
});

//partners
Route::get('partners', function() {
    return view('customer.newpages.ourpartner');
});




Route::get('login', [CustomerController::class, 'showLoginForm'])->name('login');
Route::post('login', [CustomerController::class, 'login']);
Route::get('register', [CustomerController::class, 'showRegisterForm'])->name('register');
Route::post('register', [CustomerController::class, 'register']);

Route::middleware(['auth:web'])->group(function () {
    Route::post('logout', [CustomerController::class, 'logout']);
    Route::get('/account', [CustomerController::class, 'account']);
});

Route::get('contact', [LeadController::class, 'showContactForm'])->name('contact');
Route::post('contact', [LeadController::class, 'store']);
 
//Route::post('/pay', [ServicesController::class, 'store'])->name('pay');


//Pages

   Route::get('blog', function () {
    return view('customer.blog.index');
});

Route::get('blog/{param}', function () {
    return view('customer.blog.detailedview');
});

// Route::get('products', function () {
//     return view('customer.pages.ourproduct');
// });

// Route::get('technologies', function() {
//     return view('customer.pages.ourtechnology');
// });

// Route::get('partners', function() {
//     return view('customer.pages.ourpartner');
// });



//growsuite
// Route::get('growsuite', function () {
//     return view('customer.pages.growsuite');
// });

//ecommerce solution
// Route::get('magento-solutions', function () {
//     return view('customer.pages.magento-solutions');
// });

// Route::get('opencart-solutions', function () {
//     return view('customer.pages.opencart-solutions');
// });

// Route::get('wordpress-solutions', function () {
//     return view('customer.pages.wordpress-solutions');
// });

// Route::get('shopify-solutions', function () {
//     return view('customer.pages.shopify-solutions');
// });

// Route::get('android-solutions', function () {
//     return view('customer.pages.android-solutions');
// });

// Route::get('ios-solutions', function () {
//     return view('customer.pages.ios-solutions');
// });
//industry
//andiord app
// Route::get('app-for-boutiques', function () {
//     return view('customer.pages.app-for-boutiques');
// });

// Route::get('app-for-restaurants', function () {
//     return view('customer.pages.app-for-restaurants');
// });

// Route::get('app-for-hotels', function () {
//     return view('customer.pages.app-for-hotels');
// });

// Route::get('app-for-shops', function () {
//     return view('customer.pages.app-for-shops');
// });
// Route::get('app-for-ecommerce', function () {
//     return view('customer.pages.app-for-ecommerce');
// });

// Route::get('app-for-groceries', function () {
//     return view('customer.pages.app-for-groceries');
// });

// Route::get('app-for-fruits-vegetables', function () {
//     return view('customer.pages.app-for-fruits-vegetables');
// });

// Route::get('app-for-wholesalers', function () {
//     return view('customer.pages.app-for-wholesalers');
// });

//clothing
// Route::get('supply-of-shoes', function () {
//     return view('customer.pages.supply-of-shoes');
// });
// Route::get('manufacture-supply-for-brands', function () {
//     return view('customer.pages.manufacture-supply-for-brands');
// });

// Route::get('clothing-for-men', function () {
//     return view('customer.pages.clothing-for-men');
// });

// Route::get('clothing-for-women', function () {
//     return view('customer.pages.clothing-for-women');
// });
// Route::get('clothing-for-children', function () {
//     return view('customer.pages.clothing-for-children');
// });

// Route::get('tshirts-for-office', function () {
//     return view('customer.pages.tshirts-for-office');
// });

// Route::get('tshirts-for-promotions', function () {
//     return view('customer.pages.tshirts-for-promotions');
// });
// Route::get('tshirts-for-schools', function () {
//     return view('customer.pages.tshirts-for-schools');
// });

// Route::get('uniforms-for-companies', function() {
//     return view('customer.pages.uniforms-for-companies');
// });

// //offset & digital priting
// Route::get('visiting-cards', function() {
//     return view('customer.pages.visiting-cards');
// });

// Route::get('brochures', function() {
//     return view('customer.pages.brochures');
// });
// Route::get('letterhead', function() {
//     return view('customer.pages.letterhead');
// });

// Route::get('pamphlets', function() {
//     return view('customer.pages.pamphlets');
// });

// Route::get('calendars', function() {
//     return view('customer.pages.calendars');
// });
// Route::get('dairies-planners', function() {
//     return view('customer.pages.dairies-planners');
// });

// Route::get('photo-albums', function() {
//     return view('customer.pages.photo-albums');
// });
// //corpate-gifiting
// Route::get('customized-keychains', function() {
//     return view('customer.pages.customized-keychains');
// });

// Route::get('customized-tshirts', function() {
//     return view('customer.pages.customized-tshirts');
// });
// Route::get('customized-dairies', function() {
//     return view('customer.pages.customized-dairies');
// });

// Route::get('customized-wallets', function() {
//     return view('customer.pages.customized-wallets');
// });

// Route::get('customized-idcards', function() {
//     return view('customer.pages.customized-idcards');
// });
// Route::get('customized-lanyards', function() {
//     return view('customer.pages.customized-lanyards');
// });

// Route::get('customized-caps', function() {
//     return view('customer.pages.customized-caps');
// });
// //law & legal registration
// Route::get('trademark-registration', function() {
//     return view('customer.pages.trademark-registration');
// });
// Route::get('copyrights-registration', function() {
//     return view('customer.pages.copyrights-registration');
// });

// Route::get('company-filings', function() {
//     return view('customer.pages.company-filings');
// });
// //accounting solution
// Route::get('gst-registration', function() {
//     return view('customer.pages.gst-registration');
// });
// Route::get('gst-filings', function() {
//     return view('customer.pages.gst-filings');
// });

// Route::get('accounting-softwares', function() {
//     return view('customer.pages.accounting-softwares');
// });
 
 
//banking solutions

// Route::get('oracle-plsql-webservices', function() {
//     return view('customer.pages.oracle-plsql-webservices');
// });

// Route::get('payment-gateway-solutions', function() {
//     return view('customer.pages.payment-gateway-solutions');
// });

// Route::get('payment-collection-services', function() {
//     return view('customer.pages.payment-collection-services');
// });
// Route::get('bank-verification-api', function() {
//     return view('customer.pages.bank-verification-api');
// });

// Route::get('aadhar-pan-verification-api', function() {
//     return view('customer.pages.aadhar-pan-verification-api');
// });

// Route::get('virtual-api-accounts', function() {
//     return view('customer.pages.virtual-api-accounts');
// });
// Route::get('virtual-current-accounts', function() {
//     return view('customer.pages.virtual-current-accounts');
// });

// Route::get('corporate-cards-expense-cards', function() {
//     return view('customer.pages.corporate-cards-expense-cards');
// });

//marketing
//whatsapp-marketing
// Route::get('vliva-biz-sender-pro-whatsapp-marketing', function() {
//     return view('customer.pages.vliva-biz-sender-pro-whatsapp-marketing');
// });

// Route::get('bulk-whatsapp-marketing', function() {
//     return view('customer.pages.bulk-whatsapp-marketing');
// });

// Route::get('whatsapp-business-api', function() {
//     return view('customer.pages.whatsapp-business-api');
// });

// Route::get('official-whatsapp-business-facebook-business', function() {
//     return view('customer.pages.official-whatsapp-business-facebook-business');
// });

// Route::get('email-marketing', function() {
//     return view('customer.pages.email-marketing');
// });

// Route::get('sms-marketing', function() {
//     return view('customer.pages.sms-marketing');
// });
//voice marketing
// Route::get('bulk-voice-calling', function() {
//     return view('customer.pages.bulk-voice-calling');
// });

// Route::get('custom-voice-calling', function() {
//     return view('customer.pages.custom-voice-calling');
// });

// Route::get('api-voice-calling', function() {
//     return view('customer.pages.api-voice-calling');
// });

//digital marketing
// Route::get('facebook-instagram-marketing', function() {
//     return view('customer.pages.facebook-instagram-marketing');
// });

// Route::get('linkedin-marketing', function() {
//     return view('customer.pages.linkedin-marketing');
// });

// Route::get('google-youtube-marketing', function() {
//     return view('customer.pages.google-youtube-marketing');
// });

// Route::get('app-installs-marketing', function() {
//     return view('customer.pages.app-installs-marketing');
// });

// Route::get('sales-converstion-marketing', function() {
//     return view('customer.pages.sales-converstion-marketing');
// });

// Route::get('lead-generation-marketing', function() {
//     return view('customer.pages.lead-generation-marketing');
// });

// Route::get('event-signup-ticket-sales-marketing', function() {
//     return view('customer.pages.event-signup-ticket-sales-marketing');
// });

// Route::get('social-media-management-marketing', function() {
//     return view('customer.pages.social-media-management-marketing');
// });

