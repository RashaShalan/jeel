@extends('layouts/main' )
@section('title') {{$campagin->name}} | @endsection

@section('content')
<section class="py-page">
  <div class="container-xl">
    <div class="row d-flex align-items-center">
      <div class="col-md-6 px-0">
        <div class="title__section">
          <div class="head">{{$campagin->title}}</div>
        </div>
        <div class="main-text mb-4">
          <p>
            {{$campagin->description}}
          </p>
        </div>
       {{--  <div class="btns-action template-btns">
          <button class="btn btn-primary">primary </button>
          <button class="btn btn-outlineprimary mx-3"> Secondary</button>
        </div> --}}
      </div>

      <div class="col-md-6">
        <div class="img-wrapper">
          @if($campagin->main_image)
          <img src="{{$campagin->main_image}}" on-error="images/temp.png">
          @endif
        </div>
      </div>

    </div>
  </div>
</section>
@if($campagin->subDetail!='')
<section>
  <div class="container-xl">
    <div class="row d-flex align-items-center">
      <div class="col-md-6">
        <div class="img-wrapper">
          @if($campagin->sub_image)
          <img src="{{$campagin->sub_image}}" on-error="images/temp.png">
          @endif
        </div>
      </div>
      <div class="col-md-6 px-0">
        <div class="title__section">
          <div class="subhead text-primarydark mb-2"><span> المميزات </span></div>
          <div class="head text-primary">{{$campagin->subTitle}}</div>
        </div>
        <div class="main-text">
          <p>
            {{$campagin->subDetail}}
          </p>
        </div>

      </div>
    </div>
  </div>
</section>
@endif

<!--==============================Start Contact Section ==============================-->
<section class="contact-section mb-section py-section" id="joinsection">
  <div class="container-xl">
    <div class="row">
      <div class="col-md-12">
        <div class="title__section">
          <div class="subhead text-primarydark mb-2"><span>  {{translatePhrase('comunicate_with_us')}}</span></div>
          <div class="head text-primary"> {{translatePhrase('wish_communicate')}}</div>
          <div class="d-flex align-items-center justify-content-between">
            <h4>  {{translatePhrase('please_in')}}</h4>

            <div class="social-links">
              <ul class="d-flex align-items-center">
                @if($social->twitter)
                <li>
                  <a href="{{$social->twitter}}" target="_blank"
                    <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M18.5 35.7861C28.165 35.7861 36 27.9511 36 18.2861C36 8.62115 28.165 0.786133 18.5 0.786133C8.83502 0.786133 1 8.62115 1 18.2861C1 27.9511 8.83502 35.7861 18.5 35.7861Z" stroke="#88115F" stroke-width="1.5"/>
                      <path d="M24.2202 15.0508C24.139 14.959 24.0081 14.9359 23.9007 14.9926C23.8339 15.0277 23.7083 15.0739 23.5592 15.1195C23.7473 14.8623 23.8985 14.5743 23.9653 14.3154C23.9942 14.2039 23.952 14.0862 23.8601 14.0197C23.7682 13.9538 23.6458 13.9538 23.5539 14.0197C23.4091 14.1236 22.7102 14.4358 22.2683 14.5369C21.2696 13.6372 20.1074 13.5438 18.8992 14.2693C17.9171 14.859 17.7034 16.0582 17.7451 16.7892C15.4971 16.5666 14.0998 15.3454 13.3132 14.3347C13.2582 14.2638 13.1695 14.2264 13.0861 14.2319C12.9985 14.2385 12.9194 14.2885 12.8745 14.366C12.5026 15.0118 12.3995 15.7257 12.5774 16.4309C12.6747 16.8156 12.8446 17.1547 13.0418 17.4295C12.9472 17.3817 12.8558 17.3218 12.7698 17.2503C12.6907 17.1833 12.5801 17.1707 12.4866 17.2152C12.3936 17.2608 12.3343 17.3575 12.3343 17.4636C12.3343 18.6744 13.0706 19.4823 13.7583 19.9044C13.6472 19.8907 13.5312 19.8654 13.4142 19.8286C13.3138 19.7972 13.2048 19.8286 13.1353 19.9099C13.0658 19.9907 13.0493 20.1061 13.0926 20.2045C13.4789 21.0833 14.2109 21.6879 15.1166 21.9072C14.3258 22.3848 13.2673 22.6189 12.298 22.504C12.1724 22.4859 12.0527 22.5678 12.0132 22.692C11.9736 22.8162 12.0255 22.9525 12.1361 23.0163C13.6066 23.8654 14.936 24.1688 16.0849 24.1688C17.7568 24.1688 19.0472 23.5269 19.8327 22.9899C21.9503 21.5444 23.2701 18.9492 23.0863 16.6271C23.4256 16.3693 23.9333 15.8934 24.248 15.3817C24.3132 15.2783 24.3014 15.142 24.2202 15.0508Z" fill="#88115F"/>
                    </svg>

                  </a>
                </li>
                @endif
                @if($social->linkedin)
                <li>
                  <a href="{{$social->linkedin}}" target="_blank">
                    <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M18.5 35.7861C28.165 35.7861 36 27.9511 36 18.2861C36 8.62115 28.165 0.786133 18.5 0.786133C8.83502 0.786133 1 8.62115 1 18.2861C1 27.9511 8.83502 35.7861 18.5 35.7861Z" stroke="#88115F" stroke-width="1.5"/>
                      <path d="M14.4835 14.7532C15.3029 14.7532 15.9671 14.089 15.9671 13.2697C15.9671 12.4503 15.3029 11.7861 14.4835 11.7861C13.6642 11.7861 13 12.4503 13 13.2697C13 14.089 13.6642 14.7532 14.4835 14.7532Z" fill="#88115F"/>
                      <path d="M15.7198 15.7441H13.2473C13.1108 15.7441 13 15.8549 13 15.9914V23.4091C13 23.5456 13.1108 23.6564 13.2473 23.6564H15.7198C15.8563 23.6564 15.9671 23.5456 15.9671 23.4091V15.9914C15.9671 15.8549 15.8563 15.7441 15.7198 15.7441Z" fill="#88115F"/>
                      <path d="M23.088 15.333C22.0313 14.971 20.7094 15.289 19.9167 15.8592C19.8895 15.7529 19.7926 15.6737 19.6774 15.6737H17.2048C17.0683 15.6737 16.9575 15.7845 16.9575 15.921V23.3387C16.9575 23.4752 17.0683 23.586 17.2048 23.586H19.6774C19.8138 23.586 19.9246 23.4752 19.9246 23.3387V18.0079C20.3242 17.6637 20.839 17.5539 21.2603 17.7329C21.6688 17.9055 21.9027 18.3268 21.9027 18.8881V23.3387C21.9027 23.4752 22.0135 23.586 22.1499 23.586H24.6225C24.759 23.586 24.8698 23.4752 24.8698 23.3387V18.3901C24.8416 16.3582 23.8857 15.606 23.088 15.333Z" fill="#88115F"/>
                    </svg>


                  </a>
                </li>
                @endif
                @if($social->gmail)
                <li>
                  <a href="{{$social->gmail}}" target="_blank">
                    <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M18.5 35.7861C28.165 35.7861 36 27.9511 36 18.2861C36 8.62115 28.165 0.786133 18.5 0.786133C8.83502 0.786133 1 8.62115 1 18.2861C1 27.9511 8.83502 35.7861 18.5 35.7861Z" stroke="#88115F" stroke-width="1.5"/>
                      <path d="M11.2211 25.3001H13.9027V18.7875L10.0718 15.9143V24.1508C10.0718 24.7867 10.587 25.3001 11.2211 25.3001Z" fill="#88115F"/>
                      <path d="M23.0972 25.3001H25.7788C26.4148 25.3001 26.9281 24.7848 26.9281 24.1508V15.9143L23.0972 18.7875" fill="#88115F"/>
                      <path d="M23.0972 13.8073V18.7875L26.9281 15.9143V14.382C26.9281 12.9607 25.3057 12.1504 24.1698 13.0028" fill="#88115F"/>
                      <path d="M13.9033 18.7873V13.8071L18.5004 17.255L23.0976 13.8071V18.7873L18.5004 22.2352" fill="#88115F"/>
                      <path d="M10.0718 14.382V15.9143L13.9027 18.7875V13.8073L12.83 13.0028C11.6923 12.1504 10.0718 12.9607 10.0718 14.382Z" fill="#88115F"/>
                    </svg>

                  </a>
                </li>
                @endif
                @if($social->whatsapp)
                <li>
                  <a href="{{$social->whatsapp}}" target="_blank">
                    <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M18.5 35.7861C28.165 35.7861 36 27.9511 36 18.2861C36 8.62115 28.165 0.786133 18.5 0.786133C8.83502 0.786133 1 8.62115 1 18.2861C1 27.9511 8.83502 35.7861 18.5 35.7861Z" stroke="#88115F" stroke-width="1.5"/>
                      <path d="M10.4077 26.3849L11.5699 22.0676C10.6326 20.3858 10.3348 18.4233 10.7312 16.5401C11.1275 14.657 12.1914 12.9796 13.7276 11.8158C15.2637 10.6519 17.1691 10.0796 19.0942 10.204C21.0192 10.3283 22.8347 11.1409 24.2076 12.4927C25.5804 13.8444 26.4185 15.6447 26.5681 17.563C26.7177 19.4814 26.1686 21.3892 25.0218 22.9364C23.8749 24.4836 22.2071 25.5664 20.3245 25.986C18.4419 26.4057 16.4707 26.1341 14.7726 25.2211L10.4077 26.3849ZM14.9831 23.6055L15.253 23.7653C16.483 24.4924 17.9195 24.7934 19.3388 24.6211C20.7581 24.4489 22.0805 23.8132 23.0997 22.8131C24.119 21.813 24.778 20.5046 24.974 19.092C25.17 17.6793 24.8919 16.2416 24.1832 15.003C23.4745 13.7644 22.3749 12.7944 21.0558 12.2442C19.7368 11.6941 18.2723 11.5946 16.8906 11.9613C15.5089 12.328 14.2876 13.1403 13.417 14.2716C12.5465 15.4029 12.0756 16.7897 12.0777 18.2158C12.0766 19.3983 12.4044 20.5579 13.0248 21.5656L13.1941 21.844L12.5444 24.2536L14.9831 23.6055Z" fill="#88115F"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M21.5347 19.3244C21.3765 19.1971 21.1912 19.1074 20.993 19.0624C20.7948 19.0173 20.5888 19.0179 20.3909 19.0642C20.0935 19.1875 19.9013 19.653 19.7092 19.8857C19.6686 19.9415 19.6091 19.9806 19.5417 19.9958C19.4743 20.0109 19.4037 20.001 19.3431 19.9678C18.2544 19.5425 17.3417 18.7625 16.7535 17.7544C16.7033 17.6915 16.6796 17.6117 16.6873 17.5317C16.6949 17.4516 16.7334 17.3777 16.7947 17.3255C17.009 17.1138 17.1664 16.8517 17.2522 16.5633C17.2713 16.2452 17.1982 15.9284 17.0417 15.6506C16.9208 15.2611 16.6906 14.9143 16.3783 14.6511C16.2173 14.5789 16.0387 14.5546 15.8641 14.5814C15.6896 14.6081 15.5265 14.6846 15.3946 14.8017C15.1656 14.9988 14.9838 15.2446 14.8627 15.521C14.7415 15.7975 14.6841 16.0975 14.6946 16.399C14.6953 16.5683 14.7168 16.7369 14.7586 16.901C14.8649 17.2953 15.0283 17.672 15.2436 18.0191C15.399 18.2851 15.5685 18.5425 15.7515 18.7904C16.3461 19.6046 17.0935 20.2958 17.9522 20.8258C18.3832 21.0952 18.8437 21.3141 19.3248 21.4784C19.8246 21.7044 20.3764 21.7912 20.9216 21.7294C21.2323 21.6825 21.5266 21.5602 21.7787 21.3732C22.0308 21.1862 22.233 20.9402 22.3675 20.657C22.4464 20.4859 22.4704 20.2946 22.4361 20.1093C22.3537 19.7305 21.8459 19.5069 21.5347 19.3244Z" fill="#88115F"/>
                    </svg>


                  </a>
                </li>
                @endif
                @if($social->facebook)
                <li>
                  <a href="{{$social->facebook}}" target="_blank">
                    <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M18.5 35.7861C28.165 35.7861 36 27.9511 36 18.2861C36 8.62115 28.165 0.786133 18.5 0.786133C8.83502 0.786133 1 8.62115 1 18.2861C1 27.9511 8.83502 35.7861 18.5 35.7861Z" stroke="#88115F" stroke-width="1.5"/>
                      <path d="M20.0932 13.8064H21.7016C21.8495 13.8064 21.9696 13.6933 21.9696 13.5538V12.0382C21.9696 11.8988 21.8495 11.7856 21.7016 11.7856H20.0932C18.4677 11.7856 17.1445 13.032 17.1445 14.5642V16.3324H15.2681C15.1201 16.3324 15 16.4456 15 16.585V18.1006C15 18.24 15.1201 18.3532 15.2681 18.3532H17.1445V23.6577C17.1445 23.7972 17.2646 23.9103 17.4126 23.9103H19.0209C19.1689 23.9103 19.289 23.7972 19.289 23.6577V18.3532H21.1655C21.2807 18.3532 21.3831 18.2835 21.4201 18.1804L21.9562 16.6648C21.9836 16.588 21.9696 16.5032 21.9192 16.437C21.8683 16.3713 21.7879 16.3324 21.7016 16.3324H19.289V14.5642C19.289 14.1464 19.6498 13.8064 20.0932 13.8064Z" fill="#88115F" stroke="#88115F"/>
                    </svg>


                  </a>
                </li>
                @endif
              </ul>

            </div>
          </div>
        </div>

        <form class="row form-contact"  id="contactForm">
          @csrf
            <div class="col-sm-6 mb-3">
                <label class="form-label"> {{translatePhrase('name')}} </label>
                <input type="text" name="name" id="name" class="form-control" placeholder="{{translatePhrase('enter_name')}}">
            </div>
            <div class="col-sm-6 mb-3">
                <label class="form-label">{{translatePhrase('email')}}  </label>
                <input type="email"  name="email" id="email" class="form-control" placeholder=" example@gmail.com ">
            </div>
            <div class="col-sm-6 mb-3">
                <label class="form-label"> {{translatePhrase('phone')}}   </label>
                <div class="input-group tel mb-3">
                    <input type="phone"  id="phone" name="phone"  class="form-control" placeholder=" 0123456789 ">

                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">+02</button>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">+02</li>
                        <li class="dropdown-item">+02</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 mb-3">
                <label class="form-label"> {{translatePhrase('reason')}}  </label>
                <select class="form-select" required name="reason" id="reason">
                    <option value="" disabled="disabled" selected="selected">{{translatePhrase('enter_name')}}   </option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                </select>
            </div>
            <div class="col-12 mb-3">
                <label class="form-label">  {{translatePhrase('write_msg')}}  </label>
                <textarea class="form-control" name="msg" id="msg" placeholder=" {{translatePhrase('write_msg_here')}}  " rows="7"></textarea>
            </div>
            <div class="col-12 mb-3">
                <button class="btn btn-primary w-100" onclick="send_contact(event)">  {{translatePhrase('send_msg')}} </button>
            </div>
        </form>
      </div>
    </div>
  </div>



</section>
<!--==============================End Contact Section ==============================-->
<script type="text/javascript">
  function send_contact(e)
  {e.preventDefault();
      var Routeurl="{{url(app()->getLocale() .'/send_contactCampagin')}}";
      console.log(Routeurl)
      var Formdata=$('#contactForm').serialize();
      console.log(Formdata)
    //  debugger;
      $.ajax({
              url: Routeurl, // Changed to $(this)
              type: 'POST',
              data: Formdata,
              success: function (response) {
                Swal.fire({
                  title: "Good job!",
                  text: "You clicked the button!",
                  icon: "success"
                });
              },
              error: function (xhr, status, error) {
                  // Handle error response
                  console.error(xhr.responseText);
              }
  });
  return false;

  }
</script>

@endsection
