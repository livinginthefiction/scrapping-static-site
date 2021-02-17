<?php include '../components/header.php';?>            
<?php include '../components/navigation.php';?>            
<?php include '../components/sidemenu.php';?> 

<div class="container ">
   <section class="py-5">
      <h1 class="font-weight-bolder text-center text-uppercase text-white font-family-san-serif font-size-3pt5rem px-3">Page Not Found</h1>
   </section>
   <section class="py-3 row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pull-left" style="float: inherit;">
         <section class="page_404">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 ">
                     <div class="text-center">
                        <div class="four_zero_four_bg">
                           <h1 class="text-center ">404</h1>
                        </div>
                        <div class="contant_box_404">
                           <h3 class="h2">Look like you're lost</h3>
                           <p>the page you are looking is not available!</p>
                           <div class="buttonRect">
                              <svg viewBox="0 0 140 60" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px">
                                 <defs>
                                    <linearGradient id="id-light-contactUS" x1="0" y1="0.8" x2="1" y2="0.2" spreadMethod="pad">
                                       <stop offset="0" stop-color="black" stop-opacity="1"></stop>
                                       <stop offset="10%" stop-color="black" stop-opacity="0"></stop>
                                       <stop offset="90%" stop-color="black" stop-opacity="0"></stop>
                                       <stop offset="100%" stop-color="black" stop-opacity="1"></stop>
                                    </linearGradient>
                                    <filter id="id-glow-contactUS" x="-40%" y="-40%" width="180%" height="180%">
                                       <feColorMatrix type="matrix" values="0 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 1 0"></feColorMatrix>
                                       <feGaussianBlur stdDeviation="4" result="coloredBlur"></feGaussianBlur>
                                       <feMerge>
                                          <feMergeNode in="coloredBlur"></feMergeNode>
                                          <feMergeNode in="SourceGraphic"></feMergeNode>
                                       </feMerge>
                                    </filter>
                                 </defs>
                                 <g filter="url(#id-glow-contactUS)">
                                    <path class="border" width="100%" height="100%" fill="transparent" stroke="rgba(69, 114, 211, 0.3)" stroke-width="1" d="M134.9,37.4c0,9.4-7.6,16.9-16.9,16.9H36.7H6.9V35.8V23.1c0-9.4,7.6-16.9,16.9-16.9h82.9h28.2v18.8V37.4z"></path>
                                    <path class="light" width="100%" height="100%" fill="transparent" stroke="url(#id-light-contactUS)" stroke-width="2" d="M134.9,37.4c0,9.4-7.6,16.9-16.9,16.9H36.7H6.9V35.8V23.1c0-9.4,7.6-16.9,16.9-16.9h82.9h28.2v18.8V37.4z"></path>
                                 </g>
                              </svg>
                              <a aria-current="page" class="link_button active" href="/" style="background: transparent; border-color: transparent;">Home</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </section>
</div>           
<?php include '../components/footer.php';?>