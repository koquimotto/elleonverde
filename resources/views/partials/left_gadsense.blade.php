                    <!-- Google Adsense -->
                    <div class="col-xl-4">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__search">
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Buscar">
                                    <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <br>
                            @php
                                $adsM = \App\Models\Curso::inRandomOrder()->first();
                                $vImage = rand(1,2);
                            @endphp
                            <div style="text-align: center; border: 1px solid rgba(0,0,0,0.15)">
                                <a href="{{ $adsM->url }}">
                                    <img src="{{ asset('uploads/courses/'.$adsM->slug.'-'.$vImage.'.jpg') }}" alt="{{ $adsM->curso }}" style="max-width:360px">
                                </a>
                            </div>
                        </div>
                        <!-- <div class="blog_two_right wow fadeInRight" data-wow-delay="300ms">
                            <div class="blog_three_single">
                                <ul class="list-unstyled blog-three_meta">
                                    <li><a href="news_detail.html"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><a href="news_detail.html"><i class="far fa-comments"></i> 2 Comments</a></li>
                                </ul>
                                <h3><a href="news_detail.html" class="blog_three_title">Amount of Freak Bread or Other
                                        Fruits</a></h3>
                            </div>
                        </div> -->
                    </div>
                    <!-- Google Adsense -->