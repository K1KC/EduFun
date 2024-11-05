<div class="post-card row p-5 ">
    <div class="col-4">
      <img class="rounded img-thumbnail img-fluid p-0 mx-auto d-block" src="{{ $thumbnail_link }}" alt="">  
    </div>
    <div class="col-8">
        <h1>{{ $title }}</h1>
        <p><span>{{ $upload_date }}</span> | by <span>{{ $writer }}</span></p>
        <p>{{ $description }}</p>
        <div class="d-grip d-md-flex justify-content-md-end">
            <p>{{ $viewers }}</p>
            <a href="{{ route('post', $title) }}">
               <button class="btn btn-dark rounded-pill p-3 btn-lg fs-5 text">Read more...</button>  
            </a>
        </div>
               
    </div>

</div>