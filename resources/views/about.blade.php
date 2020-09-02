@extends('layout')


@section('about')

<section class="about-me">
      <div class="container">
        <div class="section-title">
          <h2>About me</h2>
          <p>The Story Of Golden Owl Designs</p>
        </div>
        <div class="col-md-6 offset-md-3">
            <img src="images/max.jpg" alt="Jhon Das - Photographer" class="img-fluid img-center">
        </div>
        <div class="row">
          <div class="col-md-12 my-name">
            <h2>My Name is Max!</h2>
          </div>
          <div class="col-md-4 offset-md-2">
            <p class="text-justify">I am from Provo Utah, My hobbies are woodworking, wood turning, and sculpting. I was exposed to wood turning at 11 years old and immediately loved it.</p>
          </div>
          <div class="col-md-4">
            <p class="text-justify">I am fortunate I had adults around me that encouraged me and provided the necessary opportunities for me to grow in my craft. See the look on someones face</p>
          </div>

          <div class="col-md-8 offset-md-2">
            <div class="progress-bars">
              <div class="p-bar" style="width:100%">
                <p>Wood Turning</p>
                  <p class="text-right">100%</p>
              </div>
              <div class="p-bar" style="width:85%">
                <p>Carpentry</p>
                  <p class="text-right">85%</p>
              </div>
              <div class="p-bar" style="width:90%">
                <p>Custom Staining</p>
                  <p class="text-right">90%</p>
              </div>
              <div class="p-bar" style="width:95%">
                <p>Restoration</p>
                  <p class="text-right">95%</p>
              </div>
            </div>
            
          </div>
        </div>

      </div>
    </section>



@endsection