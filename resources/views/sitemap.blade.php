<?xml version="1.0" encoding="UTF-8" ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    
     @foreach($magazine as $list)
    <url>
        <loc>{{ url('/magazine/' . $list->slug) }}</loc>
        <lastmod>{{ $list->created_at->toDateString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1</priority>
    </url>
    @endforeach
    
     @foreach($feature as $list)
    <url>
        <loc>{{ url('/feature/' . $list->url) }}</loc>
        <lastmod>{{ $list->created_at->toDateString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    @endforeach
    
     @foreach($coverstory as $list)
    <url>
        <loc>{{ url('/cover-story/' . $list->slug) }}</loc>
        <lastmod>{{ $list->created_at->toDateString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach
    
    
       @foreach($pressrelease as $list)
    <url>
        <loc>{{ url('/'.$list->category.'/' . $list->slug) }}</loc>
        <lastmod>{{ $list->created_at->toDateString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach
    
    
    @foreach($article as $list)
    <url>
        <loc>{{ url('/article/' . $list->slug) }}</loc>
        <lastmod>{{ $list->created_at->toDateString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach
    
    
      @foreach($business as $list)
    <url>
        <loc>{{ url('/'.$list->category.'/' . $list->slug) }}</loc>
        <lastmod>{{ $list->created_at->toDateString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.7</priority>
    </url>
    @endforeach
    
     
    
    
     
    
    
        
      @foreach($industry as $list)
    <url>
        <loc>{{ url('/'.$list->category.'/' . $list->slug) }}</loc>
        <lastmod>{{ $list->created_at->toDateString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach
    
    
       @foreach($technology as $list)
    <url>
        <loc>{{ url('/'.$list->category.'/' . $list->slug) }}</loc>
        <lastmod>{{ $list->created_at->toDateString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.5</priority>
    </url>
    @endforeach
    
       @foreach($startup as $list)
    <url>
        <loc>{{ url('/'.$list->category.'/' . $list->slug) }}</loc>
        <lastmod>{{ $list->created_at->toDateString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach
    
    
    
    
    
</urlset>
