<div id="SideMenu" class="slideMenuBar d-none d-lg-block d-xl-block">
               <div class="burgerBox">
                  <div id="closeIcon" class="burgerBoxInner burgerBoxInnerOut">
                     <div class="iconBox">

                        <span class="burgerIcon cursor-pointer" onclick="hamburgerClick()">

                        <!-- <span onclick="hamburgerClick()" class="burgerIcon cursor-pointer"> -->

                           <svg class="svg-32" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <g fill-rule="evenodd">
                                 <path fill="none" d="M0 0h24v24H0z"></path>
                                 <path class="dot-fill" d="M12 17.333A1.333 1.333 0 1112 20a1.333 1.333 0 010-2.667zm6.667 0a1.333 1.333 0 110 2.667 1.333 1.333 0 010-2.667zm-13.334 0a1.333 1.333 0 110 2.667 1.333 1.333 0 010-2.667zM12 10.667a1.333 1.333 0 110 2.666 1.333 1.333 0 010-2.666zm-6.667 0a1.333 1.333 0 110 2.666 1.333 1.333 0 010-2.666zm13.334 0a1.333 1.333 0 110 2.666 1.333 1.333 0 010-2.666zM12 4a1.333 1.333 0 110 2.667A1.333 1.333 0 0112 4zM5.333 4a1.333 1.333 0 110 2.667 1.333 1.333 0 010-2.667zm13.334 0a1.333 1.333 0 110 2.667 1.333 1.333 0 010-2.667z"></path>
                              </g>
                           </svg>
                        </span>

                        <span class="closeIcon cursor-pointer" onclick="menuClose()">

                        <!-- <span onclick="menuClose()" class="closeIcon cursor-pointer"> -->

                           <svg class="svg-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                              <path class="dot-fill" d="M19.18 5.18l-.35-.36a.51.51 0 00-.71 0L12 10.94 5.89 4.82a.51.51 0 00-.71 0l-.35.36a.48.48 0 000 .7L11 12l-6.17 6.12a.48.48 0 000 .7l.35.36a.51.51 0 00.71 0L12 13.06l6.11 6.12a.51.51 0 00.71 0l.35-.36a.48.48 0 000-.7L13.07 12l6.11-6.12a.48.48 0 000-.7z"></path>
                           </svg>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
            <div id="hiddenSlider" class="hidden-Slider">
               <div id="overlayDiv" class="sliding-menu-overlay"></div>
               <div id="slidingMenu" class="d-flex flex-column p-4 sliding-menu">
                  <div class="align-items-center d-flex justify-content-between">
                     <div class="checkBox-cover invisible">
                        <input type="checkbox" class="checkbox" id="checkbox">
                        <label for="checkbox" class="label">
                           <i class="fa fa-moon-o"></i><i class="fa fa-sun-o"></i>
                           <div class="ball"></div>
                        </label>
                     </div>
                     <div class="buttonRect ">
                        <svg viewBox="0 0 140 60" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px">
                           <defs>
                              <linearGradient id="id-light-2" x1="0" y1="0.8" x2="1" y2="0.2" spreadMethod="pad">
                                 <stop offset="0" stop-color="black" stop-opacity="1"></stop>
                                 <stop offset="10%" stop-color="black" stop-opacity="0"></stop>
                                 <stop offset="90%" stop-color="black" stop-opacity="0"></stop>
                                 <stop offset="100%" stop-color="black" stop-opacity="1"></stop>
                              </linearGradient>
                              <filter id="id-glow-2" x="-40%" y="-40%" width="180%" height="180%">
                                 <feColorMatrix type="matrix" values="0 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 1 0"></feColorMatrix>
                                 <feGaussianBlur stdDeviation="4" result="coloredBlur"></feGaussianBlur>
                                 <feMerge>
                                    <feMergeNode in="coloredBlur"></feMergeNode>
                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                 </feMerge>
                              </filter>
                           </defs>
                           <g filter="url(#id-glow-2)">
                              <path class="border" width="100%" height="100%" fill="transparent" stroke="rgba(69, 114, 211, 0.3)" stroke-width="1" d="M134.9,37.4c0,9.4-7.6,16.9-16.9,16.9H36.7H6.9V35.8V23.1c0-9.4,7.6-16.9,16.9-16.9h82.9h28.2v18.8V37.4z"></path>
                              <path class="light" width="100%" height="100%" fill="transparent" stroke="url(#id-light-2)" stroke-width="2" d="M134.9,37.4c0,9.4-7.6,16.9-16.9,16.9H36.7H6.9V35.8V23.1c0-9.4,7.6-16.9,16.9-16.9h82.9h28.2v18.8V37.4z"></path>
                           </g>
                        </svg>
                        <a class="link_button" href="https://symbiogetquote.co.uk/">Get Quote</a>
                     </div>
                     <span class="cursor-pointer d-lg-none d-xl-none">
                        <svg class="svg-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                           <path class="dot-fill" d="M19.18 5.18l-.35-.36a.51.51 0 00-.71 0L12 10.94 5.89 4.82a.51.51 0 00-.71 0l-.35.36a.48.48 0 000 .7L11 12l-6.17 6.12a.48.48 0 000 .7l.35.36a.51.51 0 00.71 0L12 13.06l6.11 6.12a.51.51 0 00.71 0l.35-.36a.48.48 0 000-.7L13.07 12l6.11-6.12a.48.48 0 000-.7z"></path>
                        </svg>
                     </span>
                  </div>
                  <div class="d-flex flex-column menu-box overflow-auto px-0 py-5 text-capitalize undefined">
                     <div class="d-flex flex-column menu-item undefined">
                        <div class="cursor-pointer d-flex menu-title py-3 align-items-center">
                           <span class="flex-grow-1 font-weight-bold">Connect with us</span>
                           <span class="expand-submenu">
                              <svg class="svg-closed" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <rect y="12" width="28" height="4" rx="2" fill="black"></rect>
                                 <rect x="16" width="28" height="4" rx="2" transform="rotate(90 16 0)" fill="black"></rect>
                              </svg>
                              <svg class="svg-open" width="28" height="4" viewBox="0 0 28 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <rect width="28" height="4" rx="2" fill="white"></rect>
                              </svg>
                           </span>
                        </div>
                        <div class="d-flex flex-column font-weight-bold menu-dropdown"><a class="py-3 text-decoration-none" href="/residential">Residential Energy</a><a class="py-3 text-decoration-none" href="/business">Business Energy</a></div>
                     </div>
                     <div class="d-flex flex-column menu-item undefined">
                        <div class="cursor-pointer d-flex menu-title py-3 align-items-center">
                           <span class="flex-grow-1 font-weight-bold">Why us</span>
                           <span class="expand-submenu">
                              <svg class="svg-closed" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <rect y="12" width="28" height="4" rx="2" fill="black"></rect>
                                 <rect x="16" width="28" height="4" rx="2" transform="rotate(90 16 0)" fill="black"></rect>
                              </svg>
                              <svg class="svg-open" width="28" height="4" viewBox="0 0 28 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <rect width="28" height="4" rx="2" fill="white"></rect>
                              </svg>
                           </span>
                        </div>
                        <div class="d-flex flex-column font-weight-bold menu-dropdown"><a class="py-3 text-decoration-none" href="/about-symbio">About us</a><a class="py-3 text-decoration-none" href="/why-symbio">Why symbio</a></div>
                     </div>
                     <div class="d-flex flex-column menu-item undefined">
                        <div class="cursor-pointer d-flex menu-title py-3 align-items-center">
                           <span class="flex-grow-1 font-weight-bold">Support</span>
                           <span class="expand-submenu">
                              <svg class="svg-closed" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <rect y="12" width="28" height="4" rx="2" fill="black"></rect>
                                 <rect x="16" width="28" height="4" rx="2" transform="rotate(90 16 0)" fill="black"></rect>
                              </svg>
                              <svg class="svg-open" width="28" height="4" viewBox="0 0 28 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <rect width="28" height="4" rx="2" fill="white"></rect>
                              </svg>
                           </span>
                        </div>
                        <div class="d-flex flex-column font-weight-bold menu-dropdown"><a class="py-3 text-decoration-none" href="/faqs">FAQs</a><a class="py-3 text-decoration-none" href="/emergencies">Emergencies</a><a class="py-3 text-decoration-none" href="/contact">Contact us</a><a class="py-3 text-decoration-none" href="/blog">Blog</a></div>
                     </div>
                     <div class="d-flex flex-column menu-item undefined">
                        <div class="cursor-pointer d-flex menu-title py-3 align-items-center">
                           <span class="flex-grow-1 font-weight-bold">My account</span>
                           <span class="expand-submenu">
                              <svg class="svg-closed" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <rect y="12" width="28" height="4" rx="2" fill="black"></rect>
                                 <rect x="16" width="28" height="4" rx="2" transform="rotate(90 16 0)" fill="black"></rect>
                              </svg>
                              <svg class="svg-open" width="28" height="4" viewBox="0 0 28 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <rect width="28" height="4" rx="2" fill="white"></rect>
                              </svg>
                           </span>
                        </div>
                        <div class="d-flex flex-column font-weight-bold menu-dropdown"><a class="py-3 text-decoration-none" href="https://symbiocustomersportal.co.uk/">Customer portal</a><a class="py-3 text-decoration-none" href="https://directdebit.symbioenergy.co.uk/">Setup direct debit</a></div>
                     </div>
                  </div>
                  <div class="d-flex justify-content-end">
                     <div class="buttonRect">
                        <svg viewBox="0 0 140 60" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px">
                           <defs>
                              <linearGradient id="id-light-temp" x1="0" y1="0.8" x2="1" y2="0.2" spreadMethod="pad">
                                 <stop offset="0" stop-color="black" stop-opacity="1"></stop>
                                 <stop offset="10%" stop-color="black" stop-opacity="0"></stop>
                                 <stop offset="90%" stop-color="black" stop-opacity="0"></stop>
                                 <stop offset="100%" stop-color="black" stop-opacity="1"></stop>
                              </linearGradient>
                              <filter id="id-glow-temp" x="-40%" y="-40%" width="180%" height="180%">
                                 <feColorMatrix type="matrix" values="0 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 1 0"></feColorMatrix>
                                 <feGaussianBlur stdDeviation="4" result="coloredBlur"></feGaussianBlur>
                                 <feMerge>
                                    <feMergeNode in="coloredBlur"></feMergeNode>
                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                 </feMerge>
                              </filter>
                           </defs>
                           <g filter="url(#id-glow-temp)">
                              <path class="border" width="100%" height="100%" fill="transparent" stroke="rgba(69, 114, 211, 0.3)" stroke-width="1" d="M134.9,37.4c0,9.4-7.6,16.9-16.9,16.9H36.7H6.9V35.8V23.1c0-9.4,7.6-16.9,16.9-16.9h82.9h28.2v18.8V37.4z"></path>
                              <path class="light" width="100%" height="100%" fill="transparent" stroke="url(#id-light-temp)" stroke-width="2" d="M134.9,37.4c0,9.4-7.6,16.9-16.9,16.9H36.7H6.9V35.8V23.1c0-9.4,7.6-16.9,16.9-16.9h82.9h28.2v18.8V37.4z"></path>
                           </g>
                        </svg>
                        <div style="float: left; position: relative; top: -30px;">Today's Weather</div>
                        <a href="#" class="link_button">9℃</a>
                     </div>
                  </div>
               </div>
            </div>