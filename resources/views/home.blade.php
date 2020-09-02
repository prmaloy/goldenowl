@extends('layout')


@section('hero')

<div id="hero-text">
    <div class="container">
        <h1>Hello.. I Am Max Gehring</h1>
        <h2>I Create Artistic Custom Wooden Pieces</h2>
        <h5>AWARD WINNING WOOD TURNER  / WOOD WORKER / ARTIST</h5>
    </div>
</div>

@endsection


@section('homepage')

<section class="gallery">
      <div class="container-fluid">
        <div class="row">
          <!-- Mixit Up Controls -->
          <div class="controls">
            
            <button type="button" class="control" data-filter="all">All</button>
            <button type="button" class="control" data-filter=".product">Product</button>
            <button type="button" class="control" data-filter=".learn">Learn</button>
            <button type="button" class="control" data-filter=".portrait">Portrait</button>
            
          </div>
        </div>

        <div class="row">
          <div class="fw mix-container home-gallery">
              <div class="mix product">
               <a href="product" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Wooden Mortars</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/freshwoodenmortar.jpg" alt="Wooden mortar"/>
                  </div>
               </a>
            </div>
            <div class="mix product">
               <a href="product2" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Custom Bowls</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/woodbowl.jpg" alt="wood bowl"/>
                  </div>
               </a>
            </div>
            <div class="mix product">
               <a href="/product3" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Wooden Kitchen</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/woodkitchen.jpg" alt=""/>
                  </div>
               </a>
            </div>
            <div class="mix landscape portrait">
               <a href="/product12" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Rustic Kitchen Ware</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/rusticwoodenbowl.jpg" alt="rustic bowl"/>
                  </div>
               </a>
            </div>
            <div class="mix learn">
               <a href="/learn2" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Workbench</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/workbench.jpg" alt="workbench"/>
                  </div>
               </a>
            </div>

            <div class="mix landscape portrait">
               <a href="/learn3" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Custom Picture Frames</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/workingwood.jpg" alt="working wood"/>
                  </div>
               </a>
            </div>
            <div class="mix learn">
               <a href="learn" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Handsome Carpenter</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/handsomecarpenter.jpg" alt=""/>
                  </div>
               </a>
            </div>
            <div class="mix landscape portrait">
               <a href="/learn4" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Carpenter</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/carpenterworking.jpg" alt="carpenter"/>
                  </div>
               </a>
            </div>
            <div class="mix landscape portrait">
               <a href="/product11" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Wooden Gavel</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/set3.jpg" alt="wooden gavel"/>
                  </div>
               </a>
            </div>
            <div class="mix landscape portrait product">
               <a href="/product8" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Dish Sets</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/set.jpg" alt="Wooden dish set"/>
                  </div>
               </a>
            </div>
            <div class="mix landscape">
               <a href="/product9" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Salad Sets</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/set4.jpg" alt="wooden salad set"/>
                  </div>
               </a>
            </div>
            <div class="mix landscape portrait">
               <a href="/product10" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Custom Spoons</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/set5.jpg" alt="spoon"/>
                  </div>
               </a>
            </div>
            <div class="mix portrait product">
               <a href="/product4" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Custom Utensils</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/woodenutensils.jpg" alt="Wooden Utensils"/>
                  </div>
               </a>
            </div>
            <div class="mix product">
               <a href="/product5" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Plates</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/woodenbowl2.jpg" alt="plates"/>
                  </div>
               </a>
            </div>
            <div class="mix landscape">
               <a href="/product6" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Sauce Dish</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/blueberries.jpg" alt="Sauce Dish"/>
                  </div>
               </a>
            </div>
            <div class="mix portrait">
               <a href="/product7" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3>Custom Dishes</h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/woodenplate.jpg" alt=""/>
                  </div>
               </a>
            </div>
          </div>
            
        </div>
      </div>
      
    </section>

@endsection