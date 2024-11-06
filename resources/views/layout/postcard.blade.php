<div class="post-card row p-5 ">
    <div class="col-4">
      <img class="rounded img-thumbnail img-fluid p-0 mx-auto d-block" src="{{ asset($thumbnail_link) }}" alt="">  
    </div>
    <div class="col-8">
        <h2>{{ $title }}</h2>
        <p><span>{{ $upload_date }}</span> | by <span>{{ $writer }}</span></p>
        <p>{{ $description }}</p>
        <p>Viewers: {{ $viewers }}</p>
        <div class="d-grip d-md-flex justify-content-md-end">
            <a href="{{ route('post', $post_id) }}">
               <button class="btn btn-dark rounded-pill p-3 btn-lg fs-5 text">Read more...</button>  
            </a>
        </div>
               
    </div>

</div>