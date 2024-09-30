<?php
$pageTitle = 'Home';
ob_start();
?>
<div class="container-fluid">
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.pexels.com/photos/8939268/pexels-photo-8939268.jpeg?auto=compress&cs=tinysrgb&w=600" class="d-block w-100" alt="Not found" height="350px">
    </div>
    <div class="carousel-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8c-i2pulDaSi4awZlJmIuRBNcw6O9269ycQ&s" class="d-block w-100" alt="Not found" height="350px">
    </div>
    <div class="carousel-item">
      <img src="https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="d-block w-100" alt="Not found" height="350px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>



<div class="album py-5 bg-light container-fluid shadow">
 <nav class="navbar bg-body-tertiary">
    <div class="container-fluid d-flex justify-content-center">
      <form class="d-flex position-relative" role="search">
        <input id="search-input" class="form-control me-5 w-7 shadow-lg" type="search" placeholder="Search" aria-label="Search" autocomplete="off">
        <div id="suggestions" class="list-group position-absolute w-100" style="display: none;"></div>
      </form>
    </div>
  </nav>
        <div class="container" >
          <div class="row" id="food-cards">
            <div class="col-md-4" data-name="Idli">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuzz1yWc17_FkazqWp6yvaUxFkgV-xofMalg&s" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Idli</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn m-2 btn-sm btn-outline-secondary">Cart</button>
                      <button type="button" class="btn m-2 btn-sm btn-outline-secondary" onclick="buyNow('Idli', 69)"><a href="./payment.php">Buy Now</a></button>
                    </div>
                    <small class="text-muted"><b>₹69</b></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-name="Burger King">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTW30bc6gIoddi1IWE8_t4xT0c6PmGPOMTbGw&s" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Burger King</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn m-2 btn-sm btn-outline-secondary">Cart</button>
                      <button type="button" class="btn m-2 btn-sm btn-outline-secondary">Buy Now</button>
                    </div>
                    <small class="text-muted"><b>₹129</b></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-name="Mendu bada">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmESssoJrsLLGrsz044BHDToiSWHBAxEs_mw&s" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Mendu bada</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn m-2 btn-sm btn-outline-secondary">Cart</button>
                      <button type="button" class="btn m-2 btn-sm btn-outline-secondary">Buy Now</button>
                    </div>
                    <small class="text-muted"><b>₹209</b></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-name="Microny">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" 
                src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2023/11/21/FNK_Intsant-Pot-Texas-Style-Chili-Mac_H1.jpg.rend.hgtvcom.1280.960.suffix/1700604212111.jpeg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Microny</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button"  class="btn m-2 btn-sm btn-outline-secondary">Cart</button>
                      <button type="button"  class="btn m-2 btn-sm btn-outline-secondary">Buy Now</button>
                    </div>
                    <small class="text-muted"><b>₹99</b></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-name="Samosa">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ3jHuexo98MOv0hbzwpNwjO3vHhcHtcT6CQ&s" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Samosa</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm m-2 btn-outline-secondary">Cart</button>
                      <button type="button" class="btn btn-sm m-2 btn-outline-secondary">Buy Now</button>
                    </div>
                    <small class="text-muted"><b>₹40</b></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-name="Jalebi">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKmkGpUoaX5mJRbkpX5VeOs06YiBHUNsA2BA&s" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Jalebi 250g</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm m-2 btn-outline-secondary">Cart</button>
                      <button type="button" class="btn btn-sm m-2 btn-outline-secondary">Buy Now</button>
                    </div>
                    <small class="text-muted"><b>₹50</b></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-name="Pizza">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLJ2J1aC4U1wzKSeEJfihOaly5m1I-Hr2gUw&s" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Pizza-Pizza 1pcs</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm m-2 btn-outline-secondary">Cart</button>
                      <button type="button" class="btn btn-sm m-2 btn-outline-secondary">Buy Now</button>
                    </div>
                    <small class="text-muted"><b>₹199</b></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-name="Burger bread microny">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOyCl8hoQ6AdHwoUwUhV2RritNgN1wjc3zGg&s" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Burger-Microny-Bread</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm m-2 btn-outline-secondary">Cart</button>
                      <button type="button" class="btn btn-sm m-2 btn-outline-secondary">Buy Now</button>
                    </div>
                    <small class="text-muted"><b>₹149</b></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-name="chicken tikka">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://img.bestrecipes.com.au/iyddCRce/br/2019/02/1980-crunchy-chicken-twisties-drumsticks-951509-1.jpg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Chicken-Tikka</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm m-2 btn-outline-secondary">Cart</button>
                      <button type="button" class="btn btn-sm m-2 btn-outline-secondary">Buy Now</button>
                    </div>
                    <small class="text-muted"><b>₹299</b></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-name="Dhosa">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQq5BEV91QzGsbN70YnoaehHAfIkk05LVRDsA&s" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Dhosa</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm m-2 btn-outline-secondary">Cart</button>
                      <button type="button" class="btn btn-sm m-2 btn-outline-secondary">Buy Now</button>
                    </div>
                    <small class="text-muted"><b>₹99</b></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-name="Pau Bhaji">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1b_FOBgouyPPDPOKpZ1KihH8in0hDNmUZvA&s" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Pau Bhaji</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm m-2 btn-outline-secondary">Cart</button>
                      <button type="button" class="btn btn-sm m-2 btn-outline-secondary">Buy Now</button>
                    </div>
                    <small class="text-muted"><b>₹49</b></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-name="Pani Puri">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuiOwNf5TP9VJ4XvB9TQoGLEU4tzcBtksFKQ&s" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Pani Puri</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm m-2 btn-outline-secondary">Cart</button>
                      <button type="button" class="btn btn-sm m-2 btn-outline-secondary">Buy Now</button>
                    </div>
                    <small class="text-muted"><b>₹39</b></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-name="Dhokla">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhe1ERCasiq33WnyWzqYAAm5exb2sSlGg3mw&s" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Dhokla</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm m-2 btn-outline-secondary">Cart</button>
                      <button type="button" class="btn btn-sm m-2 btn-outline-secondary">Buy Now</button>
                    </div>
                    <small class="text-muted"><b>₹89</b></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-name="khandvi">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR87sZS95hgsmMRT31JrLLtSCs8G6Ly-adXAw&s" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Khandvi</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm m-2 btn-outline-secondary">Cart</button>
                      <button type="button" class="btn btn-sm m-2 btn-outline-secondary">Buy Now</button>
                    </div>
                    <small class="text-muted"><b>₹199</b></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-name="Fafda">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://images.squarespace-cdn.com/content/v1/603bc7becf34a07d765fc033/1619450639807-OVLC8PXFAB1W4LME01RQ/fafda+vb.JPG" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Fafda Jalebi</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm m-2 btn-outline-secondary">Cart</button>
                      <button type="button" class="btn btn-sm m-2 btn-outline-secondary">Buy Now</button>
                    </div>
                    <small class="text-muted"><b>₹259</b></small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>

function buyNow(name, price) {
    sessionStorage.setItem('itemName', name);
    sessionStorage.setItem('itemPrice', price);
}

      </script>
      <?php
$content = ob_get_clean();
include 'base.php';
?>
