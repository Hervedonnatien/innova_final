<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('front.home');
    }

    public function service(){
        return view('front.service');
    }

    public function serviceDetail($slug){
        return view('front.service-development');
    }

    public function serviceDevelopment(){
        return view('front.service-development');
    }

    public function serviceBusiness(){
        return view('front.service-business');
    }

    public function serviceDesign(){
        return view('front.service-design');
    }

    public function serviceMarketing(){
        return view('front.service-marketing');
    }

    public function serviceTechnology(){
        return view('front.service-technology');
    }

    public function serviceContentStrategy(){
        return view('front.service-content-strategy');
    }

    public function portfolio(){
        return view('front.portfolio');
    }

    public function portfolio1(){
        return view('front.portfolio1');
    }

    public function portfolio2(){
        return view('front.portfolio2');
    }

    public function portfolio3(){
        return view('front.portfolio3');
    }

    public function portfolio4(){
        return view('front.portfolio4');
    }

    public function portfolio5(){
        return view('front.portfolio5');
    }

    public function portfolio6(){
        return view('front.portfolio6');
    }

    public function portfolioDetail($slug){
        return view('front.single-portfolio');
    }

    public function team(){
        return view('front.team');
    }

    public function teamDetail($slug){
        return view('front.single-team');
    }

    public function caseStudy(){
        return view('front.case-study');
    }

    public function caseStudyDetail($slug){
        return view('front.single-case-study');
    }

    public function client(){
        return view('front.our-clients');
    }

    public function testimonial(){
        return view('front.testimonial');
    }

    public function blog(){
        return view('front.blog');
    }

    public function blogCategory($slug){
        return view('front.blog-category');
    }

    public function blogDetail($slug){
        return view('front.single-blog');
    }

    public function notFound(){
        return view('front.404');
    }

    public function comingSoon(){
        return view('front.coming-soon');
    }

    public function about(){
        return view('front.about-us');
    }

    public function contact(){
        return view('front.contact');
    }

    public function termOfUse(){
        return view('front.terms-of-use');
    }

    public function privacyPolicy(){
        return view('front.privacy-policy');
    }
}
