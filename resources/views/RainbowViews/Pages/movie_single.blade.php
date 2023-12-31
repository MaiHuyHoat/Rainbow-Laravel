<!-- prs navigation End -->
<!-- prs title wrapper Start -->
<style>
    .date {
        font-size: 11px
    }

    .comment-text {
        font-size: 12px
    }

    .fs-12 {
        font-size: 12px
    }

    .shadow-none {
        box-shadow: none
    }

    .name {
        color: #007bff
    }

    .cursor:hover {
        color: blue
    }

    .cursor {
        cursor: pointer
    }

    .textarea {
        resize: none
    }
    .booking{
        float: left;
    width: 170px;
    height: 50px;
    text-align: center;
    line-height: 50px;
    background: var(--primary-color);
    border: 1px solid var(--primary-color);
    color: #ffffff;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -moz-transition: all 0.5s;
    transition: all 0.5s;
    }
    .booking:hover{
        background: transparent;
    color: #000000;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -moz-transition: all 0.5s;
    transition: all 0.5s;
    }
</style>
<div class="prs_title_main_sec_wrapper">
    <div class="prs_title_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="prs_title_heading_wrapper">
                    <h2>{{ $movieEx->Name }}</h2>
                    <ul>
                        <li><a href="#">Home</a>
                        </li>
                        <li>&nbsp;&nbsp; >&nbsp;&nbsp; Movie Single</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- prs title wrapper End -->
<!-- prs ms trailer wrapper Start -->
<div style="float: left;
    width: 100%;
    background: #f6f6f6;
    padding-top: 94px;">
    <div class="prs_booking_main_div_section_wrapper">
        <div class="prs_top_video_section_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="prs_heading_section_wrapper">
                                <div class="prs_heading_section_wrapper">
                                    <h2>Movie Trailer</h2>
                                </div>
                            </div>
                        </div>
                        <div class="st_video_slider_inner_wrapper float_left"
                            style="background-image: url('{{ $movieEx->photos[0]->Src }}')">
                            <div class="st_video_slider_overlay"></div>
                            <div class="st_video_slide_sec float_left">
                                <a rel='external' href='{{ $movieEx->VideoTrailer }}' title='title'
                                    class="test-popup-link">
                                    <img src="{{ $assetPathRainbow }}/images/index_III/icon.png" alt="img">
                                </a>
                                <h3>{{ $movieEx->Name }}</h3>
                                <p>ENGLISH, HINDI, TAMIL</p>
                                <h4>{{ $movieEx->movieCategory->Name }} </h4>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="prs_ms_trailer_vid_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="prs_heading_section_wrapper">
                    <div class="prs_heading_section_wrapper">
                        <h2>DateShow</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-lg-12 col-lg-12 col-lg-12">
                <div class="">
                    <div class=""></div>
                    <div class="">
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-lg-12 col-lg-12 col-lg-12">
                <div class="prs_ms_trailer_slider_main_wrapper">
                    <div class="prs_ms_trailer_slider_left_wrapper">
                        <div class="owl-carousel owl-theme">
                            @for ($i = 1; $i < sizeof($movieEx->photos); $i++)
                                <div class="item">
                                    <div class="prs_ms_trailer_slider_left_img_wrapper">
                                        <img src="{{ $movieEx->photos[$i]->Src }}" alt="vp_img">
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="prs_ms_trailer_slider_right_wrapper">
                        <h2>{{ $movieEx->DateShow }}</h2>
                        <p>{{ $movieEx->director->Name }} Presents</p>
                        <h1 style="color:red; padding-top:20px; font-weight: bold;text-transform: uppercase;">
                            {{ $movieEx->Name }}</h1>
                        @if (count($movieEx->performers) > 0)
                            <h5><span>Starring -</span>
                                {{-- @if (!empty($movieEx->performers)) --}}
                                @for ($i = 0; $i < sizeof($movieEx->performers); $i++)
                                    {{ $movieEx->performers[$i]->Name }} ,
                                @endfor
                            @else
                        @endif
                        <ul>
                            <li>Directed by - <span>{{ $movieEx->director->Name }}</span>
                            </li>
                            <li>Produced by - <span>{{ $movieEx->productor->Name }}</span>
                            </li>
                                <ul style="float: left;
                                width: 100%;margin-top:5px;">
                                    <li style="float: left;
                                    margin-right: 20px;font-weight:normal "><a class="booking" href="/rainbow/movie_booking/{{ $movieEx->Id }}">Booking Now</a>
                                    </li>
                                </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- prs ms trailer wrapper End -->
<!-- prs theater Slider Start -->
{{-- @if (!empty($movieEx->performers)) --}}
@if (count($movieEx->performers) > 0)
    <div class="prs_movie_cast_main_slider_wrapper">
        <div class="prs_movie_cast_heading_wrapper">
            <h2>Movie Cast</h2>
        </div>
        <div class="wrap-album-slider container " style="width: 130vh">
            <ul class="movie-cast-slider">
                @for ($i = 0; $i < sizeof($movieEx->performers); $i++)
                    <li class="album-slider__item">
                        <figure class="album">
                            <div class="prs_ms_cast_slider_cont_wrapper">
                                <div class="prs_ms_cast_img_wrapper">
                                    <img src="{{ $movieEx->performers[$i]->AvatarURL }}" alt="cast_img">
                                </div>
                                <div class="prs_ms_cast_img_cont_wrapper">
                                    <h4><a href="#">{{ $movieEx->performers[$i]->Name }}</a></h4>
                                    <p>(Miano)</p>
                                </div>
                            </div>
                        </figure>
                        <!-- End album -->
                    </li>
                @endfor



                <!-- End album slider item -->
                <!-- End album slider item -->
            </ul>
            <!-- End slider -->
        </div>
    </div>
@else
@endif
<!-- prs theater Slider End -->
<!-- prs syn Slider Start -->

<div class="prs_upcome_tabs_wrapper" style="background: #f1f1f1;">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#best1" aria-controls="best" role="tab"
                data-toggle="tab">Synopsys</a>
        </li>
        <li role="presentation"><a href="#hot1" aria-controls="hot" role="tab" data-toggle="tab">Comments</a>
        </li>
    </ul>
</div>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="best1">
        <div class="prs_syn_main_section_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                        <div class="prs_syn_cont_wrapper">
                            <h3>Synopsis</h3>
                            <h4><span>Genre -</span> {{ $movieEx->movieCategory->Name }}</h4>
                            <p>{{ $movieEx->Description }}

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="prs_syn_img_wrapper">
                            <img src="{{ $movieEx->photos[0]->Src }}" alt="syn_img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="hot1">
        <div class="prs_syn_main_section_wrapper">
            <div class="container">
                <div class="row">
                    <div class="prs_syn_cont_wrapper">
                        <h3>Comments</h3>
                        <br>
                        <br>
                    </div>
                    <div class="container mt-5">
                        <div class="d-flex justify-content-center row">
                            <div class="col-md-8">
                                <div class="d-flex flex-column comment-section">
                                    @foreach ($comments as $comment)
                                        <div class="bg-white p-2">

                                            <div class="d-flex flex-row user-info" style="display: flex"><img
                                                    class="rounded-circle"
                                                    style="width: 40px;
											height: 40px;
											border-radius: 50%;"
                                                    src=" {{ $comment->user->Image == null ? ' https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcvT6QqjdH2mTk0Zpf84FLHDMX77xUTonQ0g&usqp=CAU' : $comment->user->Image }}"
                                                    width="40">
                                                <div class="d-flex flex-column justify-content-start ml-2"
                                                    style="margin-left: 10px"><span
                                                        class="d-block font-weight-bold name"
                                                        style="font-size: 16px;">{{ $comment->user->Name }}</span><br><span
                                                        class="date text-black-50"
                                                        style="font-size: 13px;">{{ $comment->Created_At }}</span>
                                                </div>
                                            </div>
                                            <div class="mt-2" style="padding: 10px">
                                                <p class="comment-text" style="font-size:18px">
                                                    {{ $comment->Content }}</p>
                                            </div>
                                        </div>
                                        <div class="bg-white" style="margin-bottom:15px">
                                            <div class="d-flex flex-row fs-12" style="display: flex">
                                                <div class="like p-2 cursor" style="margin-right: 20px "><i
                                                        class="fa fa-thumbs-o-up" style="margin-right:5px"></i><span
                                                        class="ml-1">Like</span></div>
                                                <div class="like p-2 cursor" style="margin-right: 20px"><i
                                                        class="fa fa-commenting-o" style="margin-right:5px"></i><span
                                                        class="ml-1">Comment</span></div>
                                                <div class="like p-2 cursor"><i class="fa fa-share"
                                                        style="margin-right:5px"></i><span class="ml-1">Share</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="bg-light p-2" id="userComment">
                                    <div class="d-flex flex-row align-items-start" style="display: flex"><img
                                            id="userAvatar" class="rounded-circle"
                                            style="width: 40px;
										height: 40px;
										border-radius: 50%; margin-right:5px"
                                            src="#" width="40">
                                        {{-- <form method="post"
                                            action="/rainbow/movie_single/updateCMT?movieId={{ $movieEx->Id }}"
                                            enctype="multipart/form-data">
                                            @csrf --}}
                                            <textarea id="commentContent" class="form-control" id="exampleFormControlTextarea1" rows="3" style="width:705px" name="Content"></textarea>
                                    </div>
                                    <div class="mt-2 text-right">
										<button 
										onclick="submitContent({{$movieEx->Id}})"
										id="btnSubmitComment"
										class="btn btn-primary btn-sm shadow-none"
                                            type="submit"
                                            style="width: 100px;height: 30px;border-radius: 5px;border: 1px solid #ddd;color: #fff;background-color: #0080ff;cursor: pointer;margin-top:5px">Post
                                            comment</button></div>
                                    {{-- </form> --}}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- prs syn Slider End -->
<!-- prs videos&photos slider Start -->
<div class="prs_vp_main_section_wrapper prs_about_vp_main_section_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="prs_heading_section_wrapper">
                    <h2>Video & photos</h2>
                </div>
            </div>
            <div class="prs_vp_main_slider_wrapper">
                <div class="prs_vp_left_slidebar_wrapper">
                    <div class="wrap-album-slider ">
                        <ul class="prs_vp_left_slider">
                            <li class="album-slider__item prs_vp_hover_overlay">
                                <figure class="album">
                                    <div class="prs_vp_img_overlay">
                                        <img src="{{ $assetPathRainbow }}/images/content/vp1.jpg" alt="vp_img"> <a
                                            href="images/content/vp1.jpg" class="venobox info"
                                            data-title="PORTFOLIO TITTLE" data-gall="gall12"><i
                                                class="fa fa-search"></i></a>
                                    </div>
                                </figure>
                                <!-- End album -->
                            </li>
                            <li class="album-slider__item prs_vp_hover_overlay">
                                <figure class="album">
                                    <div class="prs_vp_img_overlay">
                                        <img src="{{ $assetPathRainbow }}/images/content/vp2.jpg" alt="vp_img"> <a
                                            href="images/content/vp2.jpg" class="venobox info"
                                            data-title="PORTFOLIO TITTLE" data-gall="gall12"><i
                                                class="fa fa-search"></i></a>
                                    </div>
                                </figure>
                                <!-- End album -->
                            </li>
                            <li class="album-slider__item prs_vp_hover_overlay">
                                <figure class="album">
                                    <div class="prs_vp_img_overlay">
                                        <img src="{{ $assetPathRainbow }}/images/content/vp3.jpg" alt="vp_img"> <a
                                            href="images/content/vp3.jpg" class="venobox info"
                                            data-title="PORTFOLIO TITTLE" data-gall="gall12"><i
                                                class="fa fa-search"></i></a>
                                    </div>
                                </figure>
                                <!-- End album -->
                            </li>
                            <li class="album-slider__item prs_vp_hover_overlay">
                                <figure class="album">
                                    <div class="prs_vp_img_overlay">
                                        <img src="{{ $assetPathRainbow }}/images/content/vp4.jpg" alt="vp_img"> <a
                                            href="images/content/vp4.jpg" class="venobox info"
                                            data-title="PORTFOLIO TITTLE" data-gall="gall12"><i
                                                class="fa fa-search"></i></a>
                                    </div>
                                </figure>
                                <!-- End album -->
                            </li>
                            <li class="album-slider__item prs_vp_hover_overlay">
                                <figure class="album">
                                    <div class="prs_vp_img_overlay">
                                        <img src="{{ $assetPathRainbow }}/images/content/vp5.jpg" alt="vp_img"> <a
                                            href="images/content/vp5.jpg" class="venobox info"
                                            data-title="PORTFOLIO TITTLE" data-gall="gall12"><i
                                                class="fa fa-search"></i></a>
                                    </div>
                                </figure>
                                <!-- End album -->
                            </li>
                            <li class="album-slider__item prs_vp_hover_overlay">
                                <figure class="album">
                                    <div class="prs_vp_img_overlay">
                                        <img src="{{ $assetPathRainbow }}/images/content/vp6.jpg" alt="vp_img"> <a
                                            href="images/content/vp6.jpg" class="venobox info"
                                            data-title="PORTFOLIO TITTLE" data-gall="gall12"><i
                                                class="fa fa-search"></i></a>
                                    </div>
                                </figure>
                                <!-- End album -->
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="prs_vp_center_slidebar_wrapper">
                    <div class="prs_vp_center_slider">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="prs_vp_center_slider_img_wrapper">
                                    <img src="{{ $assetPathRainbow }}/images/content/vp7.jpg" alt="vp_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_vp_center_slider_img_wrapper">
                                    <img src="{{ $assetPathRainbow }}/images/content/vp7.jpg" alt="vp_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_vp_center_slider_img_wrapper">
                                    <img src="{{ $assetPathRainbow }}/images/content/vp7.jpg" alt="vp_img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="prs_vp_right_slidebar_wrapper">
                    <div class="wrap-album-slider">
                        <ul class="prs_vp_right_slider">
                            <li class="album-slider__item prs_vp_hover_overlay">
                                <figure class="album">
                                    <div class="prs_vp_img_overlay">
                                        <img src="{{ $assetPathRainbow }}/images/content/vp6.jpg" alt="vp_img"> <a
                                            href="images/content/vp6.jpg" class="venobox info"
                                            data-title="PORTFOLIO TITTLE" data-gall="gall12"><i
                                                class="fa fa-search"></i></a>
                                    </div>
                                </figure>
                                <!-- End album -->
                            </li>
                            <li class="album-slider__item prs_vp_hover_overlay">
                                <figure class="album">
                                    <div class="prs_vp_img_overlay">
                                        <img src="{{ $assetPathRainbow }}/images/content/vp5.jpg" alt="vp_img"> <a
                                            href="images/content/vp5.jpg" class="venobox info"
                                            data-title="PORTFOLIO TITTLE" data-gall="gall12"><i
                                                class="fa fa-search"></i></a>
                                    </div>
                                </figure>
                                <!-- End album -->
                            </li>
                            <li class="album-slider__item prs_vp_hover_overlay">
                                <figure class="album">
                                    <div class="prs_vp_img_overlay">
                                        <img src="{{ $assetPathRainbow }}/images/content/vp4.jpg" alt="vp_img"> <a
                                            href="images/content/vp4.jpg" class="venobox info"
                                            data-title="PORTFOLIO TITTLE" data-gall="gall12"><i
                                                class="fa fa-search"></i></a>
                                    </div>
                                </figure>
                                <!-- End album -->
                            </li>
                            <li class="album-slider__item prs_vp_hover_overlay">
                                <figure class="album">
                                    <div class="prs_vp_img_overlay">
                                        <img src="{{ $assetPathRainbow }}/images/content/vp3.jpg" alt="vp_img"> <a
                                            href="images/content/vp3.jpg" class="venobox info"
                                            data-title="PORTFOLIO TITTLE" data-gall="gall12"><i
                                                class="fa fa-search"></i></a>
                                    </div>
                                </figure>
                                <!-- End album -->
                            </li>
                            <li class="album-slider__item prs_vp_hover_overlay">
                                <figure class="album">
                                    <div class="prs_vp_img_overlay">
                                        <img src="{{ $assetPathRainbow }}/images/content/vp2.jpg" alt="vp_img"> <a
                                            href="images/content/vp2.jpg" class="venobox info"
                                            data-title="PORTFOLIO TITTLE" data-gall="gall12"><i
                                                class="fa fa-search"></i></a>
                                    </div>
                                </figure>
                                <!-- End album -->
                            </li>
                            <li class="album-slider__item prs_vp_hover_overlay">
                                <figure class="album">
                                    <div class="prs_vp_img_overlay">
                                        <img src="{{ $assetPathRainbow }}/images/content/vp1.jpg" alt="vp_img"> <a
                                            href="images/content/vp1.jpg" class="venobox info"
                                            data-title="PORTFOLIO TITTLE" data-gall="gall12"><i
                                                class="fa fa-search"></i></a>
                                    </div>
                                </figure>
                                <!-- End album -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- prs videos&photos slider End -->
<!-- prs ms scene slider Start -->
<div class="prs_ms_scene_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="prs_heading_section_wrapper">
                    <h2>behind the scenes</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="prs_ms_scene_slider_wrapper">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="prs_ms_scene_slider_img">
                                        <img src="{{ $assetPathRainbow }}/images/content/movie_single/sc1.jpg"
                                            alt="scene_img">
                                        <div class="prs_ms_scene_img_overlay"> <a
                                                href="images/content/movie_single/sc1.jpg" class="venobox info"
                                                data-title="PORTFOLIO TITTLE" data-gall="gall12"><i
                                                    class="flaticon-tool"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="prs_ms_scene_slider_img prs_ms_scene_slider_img2">
                                        <img src="{{ $assetPathRainbow }}/images/content/movie_single/sc4.jpg"
                                            alt="scene_img">
                                        <div class="prs_ms_scene_img_overlay"> <a
                                                href="images/content/movie_single/sc4.jpg" class="venobox info"
                                                data-title="PORTFOLIO TITTLE" data-gall="gall12"><i
                                                    class="flaticon-tool"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="prs_ms_scene_slider_img">
                                        <img src="{{ $assetPathRainbow }}/images/content/movie_single/sc2.jpg"
                                            alt="scene_img">
                                        <div class="prs_ms_scene_img_overlay"> <a
                                                href="images/content/movie_single/sc2.jpg" class="venobox info"
                                                data-title="PORTFOLIO TITTLE" data-gall="gall12"><i
                                                    class="flaticon-tool"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="prs_ms_scene_slider_img prs_ms_scene_slider_img2">
                                        <img src="{{ $assetPathRainbow }}/images/content/movie_single/sc5.jpg"
                                            alt="scene_img">
                                        <div class="prs_ms_scene_img_overlay"> <a
                                                href="images/content/movie_single/sc5.jpg" class="venobox info"
                                                data-title="PORTFOLIO TITTLE" data-gall="gall12"><i
                                                    class="flaticon-tool"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="prs_ms_scene_slider_img">
                                        <img src="{{ $assetPathRainbow }}/images/content/movie_single/sc3.jpg"
                                            alt="scene_img">
                                        <div class="prs_ms_scene_img_overlay"> <a
                                                href="images/content/movie_single/sc3.jpg" class="venobox info"
                                                data-title="PORTFOLIO TITTLE" data-gall="gall12"><i
                                                    class="flaticon-tool"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="prs_ms_scene_slider_img prs_ms_scene_slider_img2">
                                        <img src="{{ $assetPathRainbow }}/images/content/movie_single/sc6.jpg"
                                            alt="scene_img">
                                        <div class="prs_ms_scene_img_overlay"> <a
                                                href="images/content/movie_single/sc6.jpg" class="venobox info"
                                                data-title="PORTFOLIO TITTLE" data-gall="gall12"><i
                                                    class="flaticon-tool"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- prs ms scene slider End -->
<!-- prs ms crew Start -->
<div class="prs_ms_crew_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="prs_heading_section_wrapper">
                    <h2>Our Crew</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="prs_ms_crew_left_cont_wrapper">
                    <ul>
                        <li>Director & Screenplay: <span>Johan Doe</span>
                        </li>
                        <li>Presented by: <span>Sandeep S</span>
                        </li>
                        <li>Producers: <span>Farhan S</span>
                        </li>
                        <li>Story: <span>Ajay S</span>
                        </li>
                        <li>Director of Photography: <span>Akshay H</span>
                        </li>
                        <li>Production Designer: <span>Johan Doe</span>
                        </li>
                        <li>Music Composer: <span>Farhan S</span>
                        </li>
                        <li>VFX Supervisor: <span>Shruti J</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="prs_ms_crew_left_cont_wrapper prs_ms_crew_left_cont_wrapper2">
                    <ul>
                        <li>Sound Design: <span>Johan Doe</span>
                        </li>
                        <li>Stunt Choreography: <span>Sandeep S</span>
                        </li>
                        <li>Additional Stunts: <span>Farhan S</span>
                        </li>
                        <li>Dance Choreographers: <span>Ajay S</span>
                        </li>
                        <li>Editor: <span>Akshay H</span>
                        </li>
                        <li>Costume Designers: <span>Johan Doe</span>
                        </li>
                        <li>Dialogues: <span>Farhan S</span>
                        </li>
                        <li>Music Composer: <span>Shruti J</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- prs ms crew End -->
<!-- prs related movie slider Start -->
<div class="prs_ms_rm_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="prs_heading_section_wrapper">
                    <h2>Director Related Movies</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="prs_ms_rm_slider_wrapper">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="prs_upcom_movie_box_wrapper">
                                <div class="prs_upcom_movie_img_box">
                                    <img src="{{ $assetPathRainbow }}/images/content/up1.jpg" alt="movie_img" />
                                    <div class="prs_upcom_movie_img_overlay"></div>
                                    <div class="prs_upcom_movie_img_btn_wrapper">
                                        <ul>
                                            <li><a href="#">View Trailer</a>
                                            </li>
                                            <li><a href="#">View Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="prs_upcom_movie_content_box">
                                    <div class="prs_upcom_movie_content_box_inner">
                                        <h2><a href="#">Busting Car</a></h2>
                                        <p>Drama , Acation</p> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="prs_upcom_movie_content_box_inner_icon">
                                        <ul>
                                            <li><a href="movie_booking.html"><i
                                                        class="flaticon-cart-of-ecommerce"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="prs_upcom_movie_box_wrapper">
                                <div class="prs_upcom_movie_img_box">
                                    <img src="{{ $assetPathRainbow }}/images/content/up2.jpg" alt="movie_img" />
                                    <div class="prs_upcom_movie_img_overlay"></div>
                                    <div class="prs_upcom_movie_img_btn_wrapper">
                                        <ul>
                                            <li><a href="#">View Trailer</a>
                                            </li>
                                            <li><a href="#">View Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="prs_upcom_movie_content_box">
                                    <div class="prs_upcom_movie_content_box_inner">
                                        <h2><a href="#">Busting Car</a></h2>
                                        <p>Drama , Acation</p> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="prs_upcom_movie_content_box_inner_icon">
                                        <ul>
                                            <li><a href="movie_booking.html"><i
                                                        class="flaticon-cart-of-ecommerce"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="prs_upcom_movie_box_wrapper">
                                <div class="prs_upcom_movie_img_box">
                                    <img src="{{ $assetPathRainbow }}/images/content/up3.jpg" alt="movie_img" />
                                    <div class="prs_upcom_movie_img_overlay"></div>
                                    <div class="prs_upcom_movie_img_btn_wrapper">
                                        <ul>
                                            <li><a href="#">View Trailer</a>
                                            </li>
                                            <li><a href="#">View Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="prs_upcom_movie_content_box">
                                    <div class="prs_upcom_movie_content_box_inner">
                                        <h2><a href="#">Busting Car</a></h2>
                                        <p>Drama , Acation</p> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="prs_upcom_movie_content_box_inner_icon">
                                        <ul>
                                            <li><a href="movie_booking.html"><i
                                                        class="flaticon-cart-of-ecommerce"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="prs_upcom_movie_box_wrapper">
                                <div class="prs_upcom_movie_img_box">
                                    <img src="{{ $assetPathRainbow }}/images/content/up4.jpg" alt="movie_img" />
                                    <div class="prs_upcom_movie_img_overlay"></div>
                                    <div class="prs_upcom_movie_img_btn_wrapper">
                                        <ul>
                                            <li><a href="#">View Trailer</a>
                                            </li>
                                            <li><a href="#">View Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="prs_upcom_movie_content_box">
                                    <div class="prs_upcom_movie_content_box_inner">
                                        <h2><a href="#">Busting Car</a></h2>
                                        <p>Drama , Acation</p> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="prs_upcom_movie_content_box_inner_icon">
                                        <ul>
                                            <li><a href="movie_booking.html"><i
                                                        class="flaticon-cart-of-ecommerce"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- prs related movie slider End -->
<!-- prs patner slider Start -->
<div class="prs_patner_main_section_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="prs_heading_section_wrapper">
                    <h2>Our Patner’s</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="prs_pn_slider_wraper">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="prs_pn_img_wrapper">
                                <img src="{{ $assetPathRainbow }}/images/content/p1.jpg" alt="patner_img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="prs_pn_img_wrapper">
                                <img src="{{ $assetPathRainbow }}/images/content/p2.jpg" alt="patner_img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="prs_pn_img_wrapper">
                                <img src="{{ $assetPathRainbow }}/images/content/p3.jpg" alt="patner_img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="prs_pn_img_wrapper">
                                <img src="{{ $assetPathRainbow }}/images/content/p4.jpg" alt="patner_img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="prs_pn_img_wrapper">
                                <img src="{{ $assetPathRainbow }}/images/content/p5.jpg" alt="patner_img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="prs_pn_img_wrapper">
                                <img src="{{ $assetPathRainbow }}/images/content/p6.jpg" alt="patner_img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- prs patner slider End -->
<!-- prs Newsletter Wrapper Start -->
<div class="prs_newsletter_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="prs_newsletter_text">
                    <h3>Get update sign up now !</h3>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <div class="prs_newsletter_field">
                    <input type="text" placeholder="Enter Your Email">
                    <button type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- prs Newsletter Wrapper End -->
