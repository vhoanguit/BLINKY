@extends('copy_layout')
@section('blog')
<div class="post_main">
    <!-- <div class="relation ">
        <div class="relate_header">
            <h2><b>Bài viết khác</b></h2>            
        </div>
        
        <div style="background-color:rgb(206, 91, 56);height:2px;margin-left:4rem"></div>     
        <div class="related_link">
            <ul>
                @foreach($lienquan as $key => $baiviet_lienquan)
                <div style="display:flex">
                    <img style="width:6rem; height:6rem;margin-right:1.3rem" src="{{asset('public/uploads/post/'.$baiviet_lienquan->post_image)}}" alt="{{$baiviet_lienquan->post_slug}}"/>
                    <li style="list-style:none; font-size:18px">
                        <a href="{{url('/bai-viet/'.$baiviet_lienquan->post_slug)}}"><b>{{$baiviet_lienquan->post_title}}</b></a>
                        <div style="overflow:hidden">{!!$baiviet_lienquan->post_desc!!}</div>
                    </li>                   
                </div>
                <hr>
                @endforeach
            </ul>
        </div>
    </div> -->
    
    <div class="post_layout">
        <div class="post_header">
            <h1><b> {{$meta_title}}</b></h1>
        </div>
        <div class="post_contents">
        @foreach($post as $key=>$p)
            <div>
                {!!$p->post_content!!}                             
            </div>
        @endforeach
        </div> 
    </div>
    <div class="sidebar_post">
            <div class="social">
                <div class="social_link">
                <h2 style="color:#5f4100;"><b>SOCIAL</b></h2>                
            </div>
                
                <div class="groupicon">
                    <ul class="social_icons">
                        <li style="--clr: #333333;">
                            <a href="">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                        </li>
                        <li style="--clr: #3491d8;">
                            <a href="https://www.facebook.com/profile.php?id=100028951819543&mibextid=LQQJ4d">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                        <li style="--clr: #ff4d86;">
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                
            </div>
            <hr>
            <div class="foru">
                <div class="foru_header"><h2 style="color:#5f4100;"><b>FOR YOU</b></h2></div>
                <div class="foru_links">
                    <ul>                       
                        @foreach($category_post as $key => $danhmucbaiviet)
                        <li>
                        <i class="fa-solid fa-angles-left" style="color:rgb(206, 158, 56)"></i>
                            <a href="{{URL::to('/danh-muc-bai-viet/'.$danhmucbaiviet->cate_post_slug)}}"><b>{{$danhmucbaiviet->cate_post_name}}</b></a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <hr>
            <div class="relation">
                <div class="relate_header">
                    <h2><b>Bài viết khác</b></h2>            
                </div>
                
                <div style="background-color:rgb(206, 91, 56);height:2px;margin-left:4rem"></div>     
                <div class="related_link">
                    <ul>
                        @foreach($lienquan as $key => $baiviet_lienquan)
                        <div style="display:flex">
                            <img style="width:6rem; height:6rem;margin-right:1.3rem" src="{{asset('public/uploads/post/'.$baiviet_lienquan->post_image)}}" alt="{{$baiviet_lienquan->post_slug}}"/>
                            <li style="list-style:none; font-size:18px">
                                <a href="{{url('/bai-viet/'.$baiviet_lienquan->post_slug)}}"><b>{{$baiviet_lienquan->post_title}}</b></a>
                                <div style="overflow:hidden">{!!$baiviet_lienquan->post_desc!!}</div>
                            </li>                   
                        </div>
                        <hr>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- <div class="watch_most">
                <div class="watch_most_header"><h2>Xem nhiều</h2></div>
                <div class="watch_most_links">
                   
                </div>
            </div> -->
            

        </div>
    
    
</div>   
@endsection