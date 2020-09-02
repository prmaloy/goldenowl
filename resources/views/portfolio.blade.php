@extends('layout')

@section('portfolio')

<div class="section-title">
      <h2>Portfolio.!</h2>
      <p>Some Of My Recent Works</p>
    </div>

    <section class="gallery">
      <div class="container-fluid">
        <div class="row">
          <!-- Mixit Up Controls -->
          <div class="controls">
            <button type="button" class="control" data-filter="all">All</button>
            <button type="button" class="control" data-filter=".landscape">Landscape</button>
            <button type="button" class="control" data-filter=".portrait">Portrait</button>
            <button type="button" class="control" data-filter=".product">Product</button>
          </div>
        </div>

        <div class="row">
          <div class="fw mix-container home-gallery">
              <div class="mix portrait">
               <a href="project-1.html" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Happy Girl</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/by-magdalena-roeseler.jpg" alt=""/>
                  </div>
               </a>
            </div>
            <div class="mix landscape portrait product">
               <a href="project-slider.html" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>The Sigar Men</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/cigar.jpg" alt=""/>
                  </div>
               </a>
            </div>
            <div class="mix landscape product">
               <a href="project-video.html" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Yoga/Meditation</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/yoga.jpg" alt=""/>
                  </div>
               </a>
            </div>
            <div class="mix landscape portrait">
               <a href="project-1.html" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Shoes on Tracks</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/shoes.jpg" alt=""/>
                  </div>
               </a>
            </div>
            <div class="mix landscape product">
               <a href="project-slider.html" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Happy FaceUp</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/grimace.jpg" alt=""/>
                  </div>
               </a>
            </div>

            <div class="mix portrait">
               <a href="project-video.html" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Lemon Face</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/lemon.jpg" alt=""/>
                  </div>
               </a>
            </div>
            <div class="mix portrait product">
               <a href="project-1.html" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Hunger Man</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/hunger.jpg" alt=""/>
                  </div>
               </a>
            </div>
            <div class="mix landscape portrait product">
               <a href="project-slider.html" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Photo By Photographer</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/photographer-f.jpg" alt=""/>
                  </div>
               </a>
            </div>
            <div class="mix landscape portrait">
               <a href="project-video.html" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Vintage Camera</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/camera.jpg" alt=""/>
                  </div>
               </a>
            </div>
            <div class="mix landscape portrait product">
               <a href="project-1.html" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Camera Frame</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/frame.jpg" alt=""/>
                  </div>
               </a>
            </div>
            <div class="mix landscape">
               <a href="project-slider.html" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Girl In Garden</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/girl-indark.jpg" alt=""/>
                  </div>
               </a>
            </div>
            <div class="mix portrait">
               <a href="project-video.html" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Girl Portrait B/W</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/woman.jpg" alt=""/>
                  </div>
               </a>
            </div>
            <div class="mix portrait product">
               <a href="project-1.html" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Retro Photographer</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/photographer.jpg" alt=""/>
                  </div>
               </a>
            </div>
            <div class="mix landscape product portrait">
               <a href="project-slider.html" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Spiral View</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/nautre-view.jpg" alt=""/>
                  </div>
               </a>
            </div>
            <div class="mix landscape product">
               <a href="project-video.html" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Happy Clouds</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/way.jpg" alt=""/>
                  </div>
               </a>
            </div>
            <div class="mix portrait">
               <a href="project-1.html" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Photographer Phose</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/girl-with-camera.jpg" alt=""/>
                  </div>
               </a>
            </div>
            <div class="mix portrait product">
               <a href="project-slider.html" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Mr. Photographer</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/pug-801826.jpg" alt=""/>
                  </div>
               </a>
            </div>
            <div class="mix landscape product portrait">
               <a href="project-video.html" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Mountain</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/mountain-690104.jpg" alt=""/>
                  </div>
               </a>
            </div>
            <div class="mix portrait">
               <a href="project-1.html" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Writer</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/man-505353.jpg" alt=""/>
                  </div>
               </a>
            </div>
            <div class="mix portrait landscape product">
               <a href="project-slider.html" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Blue Mountain</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/mountain.jpg" alt=""/>
                  </div>
               </a>
            </div>
          </div>
            
        </div>
      </div>
      
    </section>
@endsection