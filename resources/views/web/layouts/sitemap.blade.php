<?php echo '<?xml version="1.0" encoding="UTF-8"?>';
    $date = date("Y-m-d");
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ $date }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>

    @foreach ($pages as $page)
        @if ($page->url == '/' || $page->title=='404')
            @continue
        @endif
            <url>
                <loc>{{ url('/') }}/{{ $page->url }}</loc>
                <lastmod>{{ $date }}</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.8</priority>
            </url>
    @endforeach

    {{-- @foreach ($blogs as $blog)
        <url>
            <loc>{{ url('/blogs') }}/{{ $blog->slug }}</loc>
            <lastmod>{{ $date }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach --}}
    
    {{-- @foreach ($course_categories as $category)
        <url>
            <loc>{{ url('/category') }}/{{ $category->slug }}</loc>
            <lastmod>{{ $date }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        @foreach ($category->course as $course_data)
            <url>
                <loc>{{ url($course_data->slug) }}</loc>
                <lastmod>{{ $date }}</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.8</priority>
            </url>
            @foreach ($course_data->cityCourses as $data)
                @php
                    $city_course_data = App\Models\CityCourse::where('id', $data->id)->first();
                    if($city_course_data!=null)
                    {
                        if ($city_course_data->type == 0) {
                            $city = null;
                            if($city_course_data->country!=null)
                            {
                                $country = App\Models\Country::where('id',$city_course_data->country)->first();
                            }else{
                                $country =null;
                            }
                        } else {
                            $city = App\Models\City::where('id',$city_course_data->city)->first();
                            if($city!=null)
                            {
                                $country = App\Models\Country::where('id',$city->country)->first();
                            }else{
                                $country =null;
                            }
                        }
                    }
                @endphp
                @if ($city_course_data != null && $country!=null)
                    <url>
                        <loc>{{ url('/') }}/{{ $data->url }}</loc>
                        <lastmod>{{ $date }}</lastmod>
                        <changefreq>weekly</changefreq>
                        <priority>0.8</priority>
                    </url>
                @endif
            @endforeach
        @endforeach
    @endforeach
    
    @foreach ($quiz_categories as $quiz_category)
        <url>
            <loc>{{ url('/quiz') }}/{{ $quiz_category->url }}</loc>
            <lastmod>{{ $date }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    
    @foreach ($quiz_topics as $topic)
        <url>
            <loc>{{ url('/quiz') }}/{{ $topic->quizCategory->url }}/{{$topic->slug}}</loc>
            <lastmod>{{ $date }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

    @foreach ($webinars as $webinar)
        @if ($webinar->webinar_type == 1)
            <url>
                <loc>{{ url('/webinar') }}/{{ $webinar->slug }}</loc>
                <lastmod>{{ $date }}</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.8</priority>
            </url>
        @endif
    @endforeach
    
    @foreach ($workshops as $workshop)
        <url>
            <loc>{{ url('/workshop') }}/{{ $workshop->slug }}</loc>
            <lastmod>{{ $date }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach --}}
</urlset>
