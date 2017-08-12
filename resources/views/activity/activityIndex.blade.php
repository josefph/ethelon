@extends('layouts.master')

@section('additional_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('cardExpansion/css/normalize.css').'?'.rand() }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('cardExpansion/fonts/font-awesome-4.3.0/css/font-awesome.min.css').'?'.rand() }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('cardExpansion/css/demo.css').'?'.rand() }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('cardExpansion/css/card.css').'?'.rand() }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('cardExpansion/css/pattern.css').'?'.rand() }}" />

    <script>
    if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
            var root = document.getElementsByTagName('html')[0];
            root.setAttribute('class', 'ff');
    };
    </script>
@endsection

@section('sidebar')
    @include('dashgumIncludes.sidebar')
@endsection

@section('content')
    <h3><i class="fa fa-angle-right"></i> EXCITING ACTIVITIES AHEAD</h3>
    <div class="row mt">
        <div class="pattern pattern--hidden"></div>
                                                <div class="wrapper">

                            <!-- trianglify pattern container -->
                    <!-- cards -->
                            <div class="card">
                                    <div class="card__container card__container--closed">
                                            <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
                                                    <defs>
                                                            <clipPath id="clipPath1">
                                                                    <!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
                                                                    <circle class="clip" cx="960" cy="250" r="992"></circle>
                                                            </clipPath>
                                                    </defs>
                                                    <image clip-path="url(#clipPath1)" width="1920" height="500" xlink:href="{{ asset('images/create.jpg')}}"></image>
                                            </svg>
                                            <div class="card__content">
                                                    <i class="card__btn-close fa fa-times"></i>
                                                    <div class="card__caption">
                                                            <h2 class="card__title">Create New Activity</h2>
                                                            <p class="card__subtitle">wowowowow</p>
                                                    </div>
                                                    <div class="card__copy">
<form class="form-horizontal" role="form" action="{{ url('/activity/store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Activity Name</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-xs-9">
                                            <input type="text" class="form-control" name="activityName" required="required">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Activity Skills</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-xs-9">
                                            <select data-placeholder=" " multiple class="chosen" style="width: 100%;" name="activitySkills[]" required="required">
                                                <option>Environmental</option>
                                                <option>Culinary</option>
                                                <option>Sports</option>
                                                <option>Education</option>
                                                <option>Charity</option>
                                                <option>Livelyhood</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Activity Banner</label>
                                <div class="col-sm-10">
                                    <span class="btn btn-danger fileinput-button">
                                        <i class="icon-plus"></i>
                                        <span>Add files...</span>
                                        <input type="file" name="file" multiple>
                                    </span>
                                </div>
                            </div>
                        
                        
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Activity Description</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-xs-9">
                                            <textarea class="bootstrap-wysiwyg" placeholder="" name="activityDescription" required="required"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Number of volunteers</label>
                    </div>
       
        <div class="form-group">
            <label class="col-sm-2 control-label">Start Date/Time</label>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-xs-9">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-2 control-label">End Date/Time</label>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-xs-9">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <div class="form-group">
        <label class="col-sm-2 control-label">Location</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-xs-9">
                    <!-- diri ang map -->
                    <div id="map" style="height:500px">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <!-- hidden input diri para long lat sa maps -->
    <input type="text" id="long" name="long" hidden="hidden">
    <input type="text" id="lat" name="lat" hidden="hidden">
    
    <button type="submit" class="btn btn-danger btn-lg btn-icon mr5"><i class="icon-plus"></i><span>Create Event</span></button>
</form>
                                                    </div>
                                            </div>
                                    </div>
                            </div>
                    <!-- /cards -->
            <!-- Related demos -->
        @if($activities)
        <?php
            $count = 2;
        ?>
        @foreach($activities as $activity)
                    <!-- trianglify pattern container -->
                    <!-- cards -->
                            <div class="card">
                                    <div class="card__container card__container--closed">
                                            <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
                                                    <defs>
                                                            <clipPath id="clipPath<?php echo $count;?>">
                                                                    <!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
                                                                    <circle class="clip" cx="960" cy="250" r="992"></circle>
                                                            </clipPath>
                                                    </defs>
                                                    <image clip-path="url(#clipPath<?php echo $count;?>)" width="1920" height="500" xlink:href="{{ $activity->image_url }}"></image>
                                            </svg>
                                            <div class="card__content">
                                                    <i class="card__btn-close fa fa-times"></i>
                                                    <div class="card__caption">
                                                            <h2 class="card__title">{{ $activity->name }}</h2>
                                                            <p class="card__subtitle">When it's too hot to think</p>
                                                    </div>
                                                    <div class="card__copy">
                                                            <div class="meta">
                                                                    <img class="meta__avatar" src="{{ asset('cardExpansion/img/authors/6.png') }}" alt="author06" />
                                                                    <span class="meta__author">Tom Goldman</span>
                                                                    <span class="meta__date">06/10/2015</span>
                                                            </div>
                                                            <p>Business model canvas bootstrapping deployment startup. In A/B testing pivot niche market alpha conversion startup down monetization partnership business-to-consumer success for investor mass market business-to-business.</p>
                                                            <p>Release creative social proof influencer iPad crowdsource gamification learning curve network effects monetization. Gamification business plan mass market www.discoverartisans.com direct mailing ecosystem seed round sales long tail vesting period.</p>
                                                            <p>Product management ramen bootstrapping seed round venture holy grail technology backing partner network entrepreneur beta marketing value proposition. Android stealth conversion scrum project network effects. Creative alpha long tail conversion stealth growth hacking iteration investor A/B testing prototype customer. Startup www.discoverartisans.com direct mailing launch party partnership market ramen metrics focus value proposition.</p>
                                                            <p>Stock infrastructure seed round sales paradigm shift technology user experience focus gamification. Partnership metrics business plan stealth business-to-business. Deployment graphical user interface monetization. Twitter incubator scrum project entrepreneur branding burn rate ramen backing paradigm shift virality crowdsource.</p>
                                                            <p>Social proof MVP ecosystem. Ramen launch party pitch deployment stealth. Vesting period MVP equity. Focus creative partnership founders iteration agile development infographic.</p>
                                                            <p>Low hanging fruit burn rate innovator user experience niche market A/B testing creative launch party product management release. Www.discoverartisans.com influencer business model canvas user experience gamification paradigm shift startup research &amp; development iPad agile development. Strategy incubator infographic success marketing buzz A/B testing responsive web design. Traction research &amp; development pitch seed money venture niche market accelerator network effects.</p>
                                                    </div>
                                            </div>
                                    </div>
                            </div>
                    <!-- /cards -->
            <!-- Related demos -->
                    <?php 
            $count++;
        ?>
            @endforeach<!-- trianglify pattern container -->
            @endif
                                </div>
           
            <section class="content content--related">
                    
            </section>
    </div>
@endsection

@section('additional_scripts')
    <script src="{{ asset('cardExpansion/js/vendors/trianglify.min.js').'?'.rand() }}"></script>
    <script src="{{ asset('cardExpansion/js/vendors/TweenMax.min.js').'?'.rand() }}"></script>
    <script src="{{ asset('cardExpansion/js/vendors/ScrollToPlugin.min.js').'?'.rand() }}"></script>
    <script src="{{ asset('cardExpansion/js/vendors/cash.min.js').'?'.rand() }}"></script>
    <script src="{{ asset('cardExpansion/js/Card-circle.js').'?'.rand() }}"></script>
    <script src="{{ asset('cardExpansion/js/demo.js').'?'.rand() }}"></script>
    <script>
        //custom select box

        $(function(){
            $('select.styled').customSelect();
        });

    </script>
@endsection