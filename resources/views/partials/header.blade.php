<nav class="header navbar">
    <div class="navbar-inner">
       <div class="navbar-toggler navbar-toggler-left hidden-md-up">
          <span></span>
       </div>
       <a class="navbar-brand mr-0 hidden-md-up" href="/">
       <img src="{{ asset('assets/img/logo.png') }}" alt="AVITA India Official Website"/>
       </a>
       <div class="navbar-collapse">
          <ul class="navbar-nav mr-auto d-md-flex flex-md-row align-items-md-center justify-content-md-between">
             <li class="hidden-sm-down">
                <a href="/"><img src="{{ asset('assets/img/logo.png') }}" alt="AVITA India Official Website"/></a>
             </li>
             <li class="nav-item has-dropdown">
                <input id="header_product" type="checkbox" hidden="">
                <a class="nav-link"><label for="header_product">Products</label></a>
                <div class="dropdown">
                   <ul class="list-unstyled">
                      <li class="nav-item has-dropdown">
                         <input id="header_product_liber" type="checkbox" hidden="">
                         <a class="nav-link px-md-4 py-2"><label for="header_product_liber" class="d-block mb-0">Laptops</label></a>
                         <div class="dropdown">
                            <ul class="list-unstyled">
                               <li class="nav-item">
                                  <a class="nav-link px-md-4 py-2" href="{{ route('admiror')}}">ADMIROR</a>
                               </li>
                               <li class="nav-item">
                                  <a class="nav-link px-md-4 py-2" href="{{ route('pura')}}">PURA </a>
                               </li>
                               <li class="nav-item">
                                  <a class="nav-link px-md-4 py-2" href="{{ route('liber-v14')}}">LIBER V14</a>
                               </li>
                               <li class="nav-item">
                                  <a class="nav-link px-md-4 py-2" href="{{ route('liber-v-gold')}}">LIBER V Gold</a>
                               </li>
                               <li class="nav-item">
                                  <a class="nav-link px-md-4 py-2" href="{{ route('magus')}}">MAGUS Lite</a>
                               </li>
                               <li class="nav-item">
                                  <a class="nav-link px-md-4 py-2" href="{{ route('essential')}}">Essential</a>
                               </li>
                               <li class="nav-item">
                                  <a class="nav-link px-md-4 py-2" href="{{ route('liber')}}">LIBER</a>
                               </li>
                            </ul>
                         </div>
                      </li>
                      <li class="nav-item has-dropdown">
                         <input id="header_product_device" type="checkbox" hidden="">
                         <a class="nav-link px-md-4 py-2"><label for="header_product_device" class="d-block mb-0">Smart Device</label></a>
                         <div class="dropdown">
                            <ul class="list-unstyled">
                               <li class="nav-item">
                                  <a class="nav-link px-md-4 py-2" href="{{ route('imago-series-smart-mirror')}}">IMAGO Series Smart Mirror</a>
                               </li>
                               <li class="nav-item">
                                  <a class="nav-link px-md-4 py-2" href="{{ route('modus-smart-scale')}}">MODUS Smart Scale</a>
                               </li>
                            </ul>
                         </div>
                      </li>
                      <li class="nav-item has-dropdown">
                         <input id="header_product_accessories" type="checkbox" hidden="">
                         <a class="nav-link px-md-4 py-2"><label for="header_product_accessories" class="d-block mb-0">Accessories</label></a>
                         <div class="dropdown">
                            <ul class="list-unstyled">
                               <li class="nav-item">
                                  <a class="nav-link px-md-4 py-2" href="{{ route('ubique-mouse')}}">UBIQUE MOUSE</a>
                               </li>
                            </ul>
                         </div>
                      </li>
                   </ul>
                </div>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="{{ route('news_event')}}">New</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="{{ route('wheretobuy')}}">Where to Buy</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="{{ route('support')}}">Service</a>
             </li>
             <li class="nav-item has-dropdown">
                <input id="header_buy_online" type="checkbox" hidden="">
                <a class="nav-link px-md-4 py-2"><label for="header_buy_online" class="d-block mb-0">Buy Online</label></a>
                <div class="dropdown">
                   <ul class="list-unstyled">
                      <li class="nav-item">
                         <a class="nav-link px-md-4 py-2" target="_blank" href="https://in.nexstmall.com/">NEXSTMALL</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link px-md-4 py-2" target="_blank" href="https://www.flipkart.com/search?q=avita+laptops&otracker=search&otracker1=search&marketplace=FLIPKART&p%5B%5D=facets.serviceability%5B%5D%3Dtrue&p%5B%5D=facets.brand%255B%255D%3DAvita">Flipkart</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link px-md-4 py-2"  target="_blank" href="https://www.amazon.in/s?k=avita+admiror">Amazon</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link px-md-4 py-2"  target="_blank" href="https://paytmmall.com/shop/search?q=avita&from=organic&child_site_id=6&site_id=2&page=1&brand=510306">Paytm Mall</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link px-md-4 py-2"  target="_blank" href="https://www.tatacliq.com/search/?searchCategory=all&text=avita">TATA Cliq</a>
                      </li>
                   </ul>
                </div>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="{{ route('blogs')}}">Blog</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="{{ route('sales-enquiry')}}">Sales Enquiry</a>
             </li>
             <!---- Language Dropdown --------->
             <!--- Language Dropdown ----->
          </ul>
       </div>
       <!-- <div id="overlay">
          </div> -->
    </div>
 </nav>
