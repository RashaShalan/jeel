<footer class="">
  <div class="container-xl">
      <div class="row justify-content-between">
          <div class="col-auto">
              <div class="jeellogo mb-3">
                  <img src="{{ asset('front-assets/images/logo-footer.svg')}}">

              </div>
              <ul class="pages-links">
                  <li>
                      <a href="{{url(app()->getLocale().'/Aboutus')}}">
                        {{ translatePhrase('About_jeel') }}
                      </a>
                  </li>
                  <li>
                      <a href="{{url(app()->getLocale().'/Contact-us')}}">
                        {{ translatePhrase('contact_us') }}
                      </a>
                  </li>
                  <li>
                      <a href="{{url(app()->getLocale().'/FAQS')}}">
                        {{ translatePhrase('faq_questions') }}
                      </a>
                  </li>
                  <li>
                    <a href="{{url(app()->getLocale().'/Terms-and-conditions')}}">
                      {{ translatePhrase('terms_and_usage') }}
                    </a>
                </li>
              </ul>
              <div class="social-links my-4">
                  <ul class="d-flex align-items-center">
                      <li>
                          <a href="javascript:;">
                              <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M18.5 36.3562C28.165 36.3562 36 28.5212 36 18.8562C36 9.19122 28.165 1.3562 18.5 1.3562C8.83502 1.3562 1 9.19122 1 18.8562C1 28.5212 8.83502 36.3562 18.5 36.3562Z" fill="white" stroke="white" stroke-width="1.5"/>
                                  <path d="M14.4835 15.3233C15.3029 15.3233 15.9671 14.6591 15.9671 13.8398C15.9671 13.0204 15.3029 12.3562 14.4835 12.3562C13.6642 12.3562 13 13.0204 13 13.8398C13 14.6591 13.6642 15.3233 14.4835 15.3233Z" fill="white"/>
                                  <path d="M15.7198 16.3142H13.2473C13.1108 16.3142 13 16.425 13 16.5615V23.9792C13 24.1157 13.1108 24.2265 13.2473 24.2265H15.7198C15.8563 24.2265 15.9671 24.1157 15.9671 23.9792V16.5615C15.9671 16.425 15.8563 16.3142 15.7198 16.3142Z" fill="white"/>
                                  <path d="M23.088 15.9031C22.0313 15.5411 20.7094 15.8591 19.9167 16.4293C19.8895 16.3229 19.7926 16.2438 19.6774 16.2438H17.2048C17.0683 16.2438 16.9575 16.3546 16.9575 16.4911V23.9088C16.9575 24.0453 17.0683 24.1561 17.2048 24.1561H19.6774C19.8138 24.1561 19.9246 24.0453 19.9246 23.9088V18.5779C20.3242 18.2337 20.839 18.124 21.2603 18.303C21.6688 18.4756 21.9027 18.8969 21.9027 19.4582V23.9088C21.9027 24.0453 22.0135 24.1561 22.1499 24.1561H24.6225C24.759 24.1561 24.8698 24.0453 24.8698 23.9088V18.9602C24.8416 16.9282 23.8857 16.1761 23.088 15.9031Z" fill="white"/>
                              </svg>


                          </a>
                      </li>
                      <li>
                          <a href="javascript:;">
                              <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M18.5 36.3562C28.165 36.3562 36 28.5212 36 18.8562C36 9.19122 28.165 1.3562 18.5 1.3562C8.83502 1.3562 1 9.19122 1 18.8562C1 28.5212 8.83502 36.3562 18.5 36.3562Z" fill="white" stroke="white" stroke-width="1.5"/>
                                  <path d="M20.0932 14.3765H21.7016C21.8495 14.3765 21.9696 14.2633 21.9696 14.1239V12.6083C21.9696 12.4689 21.8495 12.3557 21.7016 12.3557H20.0932C18.4677 12.3557 17.1445 13.602 17.1445 15.1343V16.9025H15.2681C15.1201 16.9025 15 17.0156 15 17.1551V18.6707C15 18.8101 15.1201 18.9233 15.2681 18.9233H17.1445V24.2278C17.1445 24.3672 17.2646 24.4804 17.4126 24.4804H19.0209C19.1689 24.4804 19.289 24.3672 19.289 24.2278V18.9233H21.1655C21.2807 18.9233 21.3831 18.8535 21.4201 18.7505L21.9562 17.2349C21.9836 17.1581 21.9696 17.0732 21.9192 17.0071C21.8683 16.9414 21.7879 16.9025 21.7016 16.9025H19.289V15.1343C19.289 14.7165 19.6498 14.3765 20.0932 14.3765Z" fill="white" stroke="white"/>
                              </svg>



                          </a>
                      </li>
                      <li>
                          <a href="javascript:;">
                              <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M18.5 36.3562C28.165 36.3562 36 28.5212 36 18.8562C36 9.19122 28.165 1.3562 18.5 1.3562C8.83502 1.3562 1 9.19122 1 18.8562C1 28.5212 8.83502 36.3562 18.5 36.3562Z" fill="white" stroke="white" stroke-width="1.5"/>
                                  <path d="M24.2202 15.6209C24.139 15.5291 24.0081 15.506 23.9007 15.5626C23.8339 15.5978 23.7083 15.644 23.5592 15.6896C23.7473 15.4324 23.8985 15.1444 23.9653 14.8855C23.9942 14.7739 23.952 14.6563 23.8601 14.5898C23.7682 14.5239 23.6458 14.5239 23.5539 14.5898C23.4091 14.6937 22.7102 15.0059 22.2683 15.107C21.2696 14.2073 20.1074 14.1139 18.8992 14.8393C17.9171 15.4291 17.7034 16.6283 17.7451 17.3593C15.4971 17.1367 14.0998 15.9155 13.3132 14.9047C13.2582 14.8338 13.1695 14.7965 13.0861 14.802C12.9985 14.8086 12.9194 14.8586 12.8745 14.9361C12.5026 15.5819 12.3995 16.2958 12.5774 17.0009C12.6747 17.3857 12.8446 17.7248 13.0418 17.9996C12.9472 17.9518 12.8558 17.8919 12.7698 17.8204C12.6907 17.7534 12.5801 17.7407 12.4866 17.7852C12.3936 17.8309 12.3343 17.9276 12.3343 18.0337C12.3343 19.2444 13.0706 20.0524 13.7583 20.4745C13.6472 20.4607 13.5312 20.4354 13.4142 20.3986C13.3138 20.3673 13.2048 20.3986 13.1353 20.48C13.0658 20.5608 13.0493 20.6762 13.0926 20.7746C13.4789 21.6534 14.2109 22.2579 15.1166 22.4772C14.3258 22.9549 13.2673 23.189 12.298 23.0741C12.1724 23.056 12.0527 23.1379 12.0132 23.2621C11.9736 23.3863 12.0255 23.5226 12.1361 23.5864C13.6066 24.4355 14.936 24.7389 16.0849 24.7389C17.7568 24.7389 19.0472 24.0969 19.8327 23.56C21.9503 22.1145 23.2701 19.5193 23.0863 17.1972C23.4256 16.9394 23.9333 16.4634 24.248 15.9517C24.3132 15.8484 24.3014 15.7121 24.2202 15.6209Z" fill="white"/>
                              </svg>

                          </a>
                      </li>
                      <li>
                          <a href="javascript:;">
                              <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M18.5 36.3562C28.165 36.3562 36 28.5212 36 18.8562C36 9.19122 28.165 1.3562 18.5 1.3562C8.83502 1.3562 1 9.19122 1 18.8562C1 28.5212 8.83502 36.3562 18.5 36.3562Z" fill="white" stroke="white" stroke-width="1.5"/>
                                  <path d="M11.2211 25.8702H13.9027V19.3576L10.0718 16.4844V24.7209C10.0718 25.3568 10.587 25.8702 11.2211 25.8702Z" fill="white"/>
                                  <path d="M23.0972 25.8702H25.7788C26.4148 25.8702 26.9281 25.3549 26.9281 24.7209V16.4844L23.0972 19.3576" fill="white"/>
                                  <path d="M23.0972 14.3774V19.3576L26.9281 16.4844V14.952C26.9281 13.5308 25.3057 12.7205 24.1698 13.5729" fill="white"/>
                                  <path d="M13.9033 19.3574V14.3772L18.5004 17.825L23.0976 14.3772V19.3574L18.5004 22.8052" fill="white"/>
                                  <path d="M10.0718 14.952V16.4844L13.9027 19.3576V14.3774L12.83 13.5729C11.6923 12.7205 10.0718 13.5308 10.0718 14.952Z" fill="white"/>
                              </svg>



                          </a>
                      </li>
                      <li>
                          <a href="javascript:;">
                              <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M18.5 36.3562C28.165 36.3562 36 28.5212 36 18.8562C36 9.19122 28.165 1.3562 18.5 1.3562C8.83502 1.3562 1 9.19122 1 18.8562C1 28.5212 8.83502 36.3562 18.5 36.3562Z" fill="white" stroke="white" stroke-width="1.5"/>
                                  <path d="M10.4077 26.9549L11.5699 22.6376C10.6326 20.9558 10.3348 18.9933 10.7312 17.1102C11.1275 15.2271 12.1914 13.5497 13.7276 12.3858C15.2637 11.222 17.1691 10.6497 19.0942 10.774C21.0192 10.8984 22.8347 11.711 24.2076 13.0627C25.5804 14.4145 26.4185 16.2147 26.5681 18.1331C26.7177 20.0515 26.1686 21.9593 25.0218 23.5065C23.8749 25.0537 22.2071 26.1364 20.3245 26.5561C18.4419 26.9758 16.4707 26.7042 14.7726 25.7912L10.4077 26.9549ZM14.9831 24.1756L15.253 24.3353C16.483 25.0625 17.9195 25.3634 19.3388 25.1912C20.7581 25.019 22.0805 24.3833 23.0997 23.3832C24.119 22.383 24.778 21.0747 24.974 19.662C25.17 18.2494 24.8919 16.8117 24.1832 15.5731C23.4745 14.3345 22.3749 13.3645 21.0558 12.8143C19.7368 12.2641 18.2723 12.1646 16.8906 12.5313C15.5089 12.898 14.2876 13.7103 13.417 14.8416C12.5465 15.973 12.0756 17.3597 12.0777 18.7859C12.0766 19.9684 12.4044 21.128 13.0248 22.1356L13.1941 22.414L12.5444 24.8237L14.9831 24.1756Z" fill="white"/>
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M21.5347 19.8944C21.3765 19.7671 21.1912 19.6775 20.993 19.6324C20.7948 19.5874 20.5888 19.588 20.3909 19.6343C20.0935 19.7575 19.9013 20.223 19.7092 20.4558C19.6686 20.5116 19.6091 20.5507 19.5417 20.5658C19.4743 20.5809 19.4037 20.571 19.3431 20.5379C18.2544 20.1126 17.3417 19.3325 16.7535 18.3245C16.7033 18.2616 16.6796 18.1817 16.6873 18.1017C16.6949 18.0217 16.7334 17.9478 16.7947 17.8955C17.009 17.6839 17.1664 17.4218 17.2522 17.1334C17.2713 16.8153 17.1982 16.4985 17.0417 16.2206C16.9208 15.8312 16.6906 15.4843 16.3783 15.2212C16.2173 15.1489 16.0387 15.1247 15.8641 15.1514C15.6896 15.1782 15.5265 15.2547 15.3946 15.3718C15.1656 15.5689 14.9838 15.8147 14.8627 16.0911C14.7415 16.3676 14.6841 16.6676 14.6946 16.9691C14.6953 17.1384 14.7168 17.307 14.7586 17.4711C14.8649 17.8654 15.0283 18.242 15.2436 18.5892C15.399 18.8551 15.5685 19.1126 15.7515 19.3605C16.3461 20.1746 17.0935 20.8659 17.9522 21.3959C18.3832 21.6652 18.8437 21.8842 19.3248 22.0485C19.8246 22.2745 20.3764 22.3612 20.9216 22.2995C21.2323 22.2526 21.5266 22.1303 21.7787 21.9433C22.0308 21.7562 22.233 21.5103 22.3675 21.227C22.4464 21.0559 22.4704 20.8646 22.4361 20.6794C22.3537 20.3006 21.8459 20.077 21.5347 19.8944Z" fill="white"/>
                              </svg>


                          </a>
                      </li>
                  </ul>

              </div>
          </div>

          <div class="col-auto">
              <div class="jeellogo mb-3">
                  <img src="{{ asset('front-assets/images/logo-footer.svg')}}">

              </div>
              <ul class="apps-links">
                  <li>
                      <a href="javascript:;">
                          <img src="{{ asset('front-assets/images/download.svg')}}">
                      </a>
                  </li>
                  <li>
                      <a href="javascript:;">
                          <img src="{{ asset('front-assets/images/google-play.svg')}}">

                      </a>
                  </li>
                  <li>
                      <a href="javascript:;">
                          <img src="{{ asset('front-assets/images/apple.svg')}}">

                      </a>
                  </li>
              </ul>

          </div>
          <div class="col-auto">
              <div class="company-name">
                  الشركة المالكة: روتس انتجريتد

              </div>
              <div>
                  <img src="{{ asset('front-assets/images/roots.svg')}}">
              </div>
          </div>
          <div class="col-auto">
              <div class="company-name">
                  المنتج المنفذ
              </div>
              <div>
                  <img src="{{ asset('front-assets/images/ealamy.svg')}}">
              </div>
          </div>
      </div>
      <div class="row justify-content-center bottom-part">
          <div class="text-center">
              <div class="mb-2">
                  <img src="{{ asset('front-assets/images/roots-sm.svg')}}">

              </div>
              <p class="copyright">
                  © 2024. All Rights Reserved.
              </p>
          </div>

      </div>



</div>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/67542ecd2480f5b4f5a985b1/1iegddlg9';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
</footer>

