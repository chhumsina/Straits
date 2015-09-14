@section('title', 'Detail')
@section('content')
    <?php
    $baseUrl = URL::to('/');
    ?>
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="blog_large">
                <article class="post">
                    <figure class="post_img">
                        <img src="{{$baseUrl}}/assets/images/upload/{{$item->image}}">
                    </figure>
                    <div class="post_date">
                        <span class="day">{{date('d', strtotime($item->created_at))}}</span>
                        <span class="month">{{date('M', strtotime($item->created_at))}}</span>
                    </div>
                    <div class="post_content">
                        <div class="post_meta">
                            <h2>
                                <a href="#">{{$item->title}}</a>
                            </h2>
                            <div class="metaInfo">
                                <span><i class="fa fa-calendar"></i> <a href="#">{{date('d/M/Y H:m:s', strtotime($item->created_at))}}</a> </span>
                            </div>
                        </div>
                        {{$item->description}}
                    </div>
                    <ul class="shares">
                        <li class="shareslabel"><h3>Share</h3></li>
                        <li><a class="twitter" href="#" data-placement="bottom" data-toggle="tooltip" title="Twitter"></a></li>
                        <li><a class="facebook" href="#" data-placement="bottom" data-toggle="tooltip" title="Facebook"></a></li>
                        <li><a class="gplus" href="#" data-placement="bottom" data-toggle="tooltip" title="Google Plus"></a></li>
                      </ul>
                </article>
            </div>
        </div>

        <!--Sidebar Widget-->
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="sidebar">
                <div class="widget widget_search">
                    <div class="site-search-area">
                        <?php echo Form::open(array('url' => $baseUrl.'/service','id'=>'site-searchform')) ?>
                            <div>
                                <input type="text" placeholder="Enter Search keywords..." id="s" name="title" class="input-text">
                                <input type="submit" value="Search" id="searchsubmit">
                            </div>
                        <?php echo Form::close();?>
                    </div><!-- end site search -->
                </div>

                <div class="widget widget_categories">
                    <div class="widget_title">
                        <h4><span>More News</span></h4>
                    </div>
                    <ul class="arrows_list list_style">
                        @foreach($items as $item)
                            <li><a href="{{$baseUrl}}/service/detail/{{$item->id}}" title="{{$item->title}}">{{$item->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div><!--/.row-->
@stop