<section>
                        <div class="container">
                            <div class="main-container fl-wrap">
                            
                                <!--grid-post-wrap-->
                                <div class="grid-post-wrap gallery-items">

                                 @foreach($data as $items)
                                    <!--grid-post-item-->
                                    <div class="gallery-item">
                                          @php
                                            $slug = strtolower($items->slug);
                                          @endphp
                                        <div class="grid-post-item  bold_gpi  fl-wrap">
                                            <div class="grid-post-media">
                                                <a href="/{{ $items->category }}/{{ $slug }}" class="gpm_link">
                                                    <div class="">
                                                       
                                                        <div class="bg" data-bg="">

                                                        <img style="width: 100%; height: 100%; object-fit: cover;" src="{{ url('public/assets/media/news_image/'.$items->image) }}" alt="{{$items->image_alt}}">


                                                        </div>

                                                    </div>
                                                </a>
                                                <span class="post-media_title">{{$items->image_alt}}</span>
                                            </div>
                                            <!-- <a class="post-category-marker purp-bg" href="category.html">Sports</a> -->
                                            <div class="grid-post-content">
                                                <h3><a href="/{{ $items->category }}/{{ $slug }}">{{$items->title}}</a></h3>
                                                <!--<span class="post-date"><i class="far fa-clock"></i>  {{ $items->formattedDate }}</span>-->

                                                <p>{!! Illuminate\Support\Str::limit(strip_tags($items->details), $limit = 250, $end = '...') !!} </p>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <!--grid-post-item end-->

                                    @endforeach


                                    
                                </div>
                                <!--grid-post-wrap end-->
                                <div class="clearfix"></div>
                                <div class="load-more_btn"><i class="fal fa-undo"></i>Load More</div>
                                <!--pagination-->
                                
                                <div class="pagination">
                                    @if ($data->currentPage() > 1)
                                        <a href="{{ $data->previousPageUrl() }}" class="prevposts-link"><i class="fas fa-caret-left"></i></a>
                                    @endif

                                    @foreach (range(1, $data->lastPage()) as $page)
                                        @if ($page == $data->currentPage())
                                            <a href="#" class="current-page">{{ $page }}.</a>
                                        @else
                                            <a href="{{ $data->url($page) }}">{{ $page }}.</a>
                                        @endif
                                    @endforeach

                                    @if ($data->hasMorePages())
                                        <a href="{{ $data->nextPageUrl() }}" class="nextposts-link"><i class="fas fa-caret-right"></i></a>
                                    @endif
                                </div>
                                <!--pagination end-->						
                            </div>
                        </div>
                    </section>