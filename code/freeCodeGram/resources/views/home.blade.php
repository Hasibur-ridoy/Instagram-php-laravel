@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
    <div class="col-3 p-5">
        <img src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/ikqra03zdnggljdu5vv0" style="height:100px;" class="rounded-circle" >
    </div>
    <div class="col-9 pt-5">
        <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pe-3"><strong>551</strong> posts</div>
                <div class="pe-3"><strong>136k</strong> followers</div>
                <div class="pe-3"><strong>395</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
    </div>
   </div>

   <div class="row pt-5">
    <div class="col-4">
        <img src="https://d.newsweek.com/en/full/1570075/demon-slayer.jpg?w=1600&h=1200&q=88&f=2dfa0b4013039f387efc2c0adc4f785b" class="w-100">
    </div>
    <div class="col-4">
        <img src="https://www.gannett-cdn.com/presto/2021/04/26/NABH/5f2656c6-8420-49d7-a46d-f422afd4cb95-GAATH-Demon_Slayer.jpg" class="w-100">
    </div>
    <div class="col-4">
        <img src="https://occ-0-420-358.1.nflxso.net/dnm/api/v6/9pS1daC2n6UGc3dUogvWIPMR_OU/AAAABYvpIoehxFBM8-xrn2ALzsRSsBxqLPtv8PWlEmX_rvfbeKo_qc2Wp1UW2vUdjahkU5skCu6MeFvU3fvUFb4XK2t6R55p_NW6mJL6xA3ev8r1BNH1AMvyZes3.jpg?r=a4d" class="w-100">
    </div>
   </div>
</div>
@endsection