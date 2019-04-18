@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.headerClimat')
    <section class="climatDetail">
        <div class="climatDetail__main">
            <div class="climatDetail__gallery">
                <div class="climatDetail__gallery-list">

                </div>
                <div class="climatDetail__gallery-preview">
                    <img src="" alt="">
                    <div class="climatDetail__controls">
                        <a class="climatDetail__comparison" href="javascript:void(0);">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="11" height="12" viewBox="0 0 11 12">
                               <defs><path id="hpyza" d="M150.5 1094v4"></path><path id="hpyzb" d="M155.5 1088v10"></path><path id="hpyzc" d="M160.5 1090v8"></path></defs>
                               <g>
                                   <g transform="translate(-150 -1087)">
                                       <g>
                                           <g>
                                               <g><use fill="#fff" fill-opacity="0" stroke="" stroke-linecap="round" stroke-miterlimit="50" xlink:href="#hpyza"></use></g>
                                               <g><use fill="#fff" fill-opacity="0" stroke="" stroke-linecap="round" stroke-miterlimit="50" xlink:href="#hpyzb"></use></g>
                                               <g><use fill="#fff" fill-opacity="0" stroke="" stroke-linecap="round" stroke-miterlimit="50" xlink:href="#hpyzc"></use></g>
                                           </g>
                                       </g>
                                   </g>
                               </g>
                            </svg>
                            <span>К сравнению</span>
                        </a>
                        <a class="climatDetail__favourites" href="javascript:void(0);">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="12" viewBox="0 0 15 12">
                               <defs><path id="6fhha" d="M307.005 1088.02a3.296 3.296 0 0 0-1.164-.77 3.654 3.654 0 0 0-1.325-.25c-.45 0-.892.084-1.325.25a3.295 3.295 0 0 0-1.165.77l-.931.918-.932-.917a3.295 3.295 0 0 0-1.164-.77 3.654 3.654 0 0 0-1.325-.251c-.45 0-.891.084-1.325.25a3.296 3.296 0 0 0-1.164.77c-.386.381-.675.81-.867 1.29a3.904 3.904 0 0 0 0 2.949c.192.484.481.917.867 1.297l5.209 5.154a.993.993 0 0 0 1.402 0l5.21-5.154c.385-.38.674-.813.866-1.297a3.904 3.904 0 0 0 0-2.95 3.787 3.787 0 0 0-.867-1.288z"></path>
                                   <clipPath id="6fhhb"><use fill="#fff" xlink:href="#6fhha"></use></clipPath>
                               </defs>
                               <g>
                                   <g transform="translate(-294 -1087)">
                                       <g>
                                           <g>
                                               <g><use fill="#fff" fill-opacity="0" stroke="" stroke-linejoin="round" stroke-miterlimit="50" stroke-width="2" clip-path="url(&quot;#6fhhb&quot;)" xlink:href="#6fhha"></use></g>
                                           </g>
                                       </g>
                                   </g>
                               </g>
                            </svg>
                            <span>В избранное</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="climatDetail__info">

            </div>
        </div>
        <div class="climatDetail__additional">

        </div>
    </section>
    @include('common.gui.footer')
@endsection
