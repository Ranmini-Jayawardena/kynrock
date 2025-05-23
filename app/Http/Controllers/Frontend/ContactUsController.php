<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BottomBanner;
use App\Models\ContactUsDetail;
use App\Models\Country;
use App\Models\Enquiry;
use App\Models\Inquiry;
use App\Models\TopBanner;
use App\Rules\ReCaptcha;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactUsController extends Controller
{
    public function index()
    {

        $topBanner = TopBanner::where('id', 8)->first();
        $contactDetails = ContactUsDetail::first();
        $bottomBanner = BottomBanner::where('id', 4)->first();


        // dd($testimonials);

        return view('frontend.contact_us', compact('topBanner', 'contactDetails','bottomBanner'));
    }

    public function store(Request $request)


    {
        // dd('hi');
        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'subject' => 'required',
            'message' => 'required',
           
        ], [
            'full_name.required' => 'Full name field is required.',
            'email.required' => 'Email field is required.',
            'tel.required' => 'Mobile No field is required.',
            'subject' => 'Subject is required.',
            'message.required' => 'Message is required.',

        ]);
        $contactDetails = ContactUsDetail::first();


        // dd('test34');
        // \DB::enableQueryLog();

        $inquiry = new Enquiry();
        $inquiry->full_name = $request->full_name;
        $inquiry->email = $request->email;
        $inquiry->tel = $request->tel;
        $inquiry->subject = $request->subject;
        $inquiry->message = $request->message;
        $inquiry->save();

        // dd(\DB::getQueryLog());

        \Mail::send(
            'frontend.mail.inquirymail',
            ['inquirydetails' => $inquiry, 'contactsdetails' => $contactDetails],
            function ($message) use ($contactDetails) {
                $message->from('devtekgeeks@gmail.com');
                $message->to('ranminijayawardena@gmail.com')->subject('Goodwood - New Enquiry');
            }
        );

        return redirect()->route('contact-us')->with('success', 'Enquiry submitted successfully.');
    }
}
