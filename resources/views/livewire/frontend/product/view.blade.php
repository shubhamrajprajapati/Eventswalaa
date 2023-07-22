<style>
  /* rating */
  .rating-css div {
  color: #ffe400;
  font-size: 12px;
  font-family: sans-serif;
  font-weight: 800;
  /* text-align: center; */
  }
  .rating-css input {
  display: none;
  }
  .rating-css input + label {
  font-size: 30px;
  text-shadow: 1px 1px 0 #8f8420;
  cursor: pointer;
  }
  .rating-css input:checked + label ~ label {
  color: #b4afaf;
  }
  .rating-css label:active {
  transform: scale(0.8);
  transition: 0.3s ease;
  }
  /* End of Star Rating */
  .checked{
     color: #ffe400;
  }
</style>
{{-- {{ $product_other_details->good_for_occasions }} --}}
<div class="row">
  <div class="col-lg-12">
     <div class="mt-2 mb-2">
        <a href="{{ url('/')}}"> Home /</a> 
        <a href="{{ url('/venue/'.$product->category->slug)}}">{{ $product->category->name}}/</a> 
        <a href="{{ url('/')}}" class="text-dark"> {{ $product->name}}</a> 
     </div>
  </div>
  <div class="col-lg-12 mt-4">
   @if (session('message'))
       <div class="alert alert-success alert-dismissible fade show" role="alert">
           <h4 class="alert-heading">{{ session('message') }}</h4>
           <p>Call us now:- +91 - 88829 76880</p>
           <hr>
           <p class="mb-0">Email:- inquiry@eventswalaa.com</p>
   </div>
       {{-- <script>alert("{{ session('message') }}")</script> --}}
   @endif
</div>
  <div class="col-lg-8">
     {{-- Slider  --}}
     {{-- 
     <div wire::ignore>
        @if (!empty($product->productImages))
        <div class="exzoom" id="exzoom">
           <div class="exzoom_img_box">
              <ul class='exzoom_img_ul'>
                 @foreach ($product->productImages as $itemImage)
                 <li><img src="{{ asset($itemImage->image) }}" class="mx-auto d-block img-fluid" alt="{{ $product->name}}"  
                    style=""/></li>
                 @endforeach
              </ul>
           </div>
           <div class="exzoom_nav"></div>
           <p class="exzoom_btn">
              <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
              <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
           </p>
        </div>
        @else
        <div></div>
        @endif
     </div> 
     --}}
      @if (!empty($product->productImages))
      <div id="myCarousel" class="carousel slide bg-inverse ml-auto mr-auto" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            @foreach($product->productImages as $key => $itemImage)
            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                <img src="{{ asset($itemImage->image) }}" class="d-block w-100" alt="{{ $product->name}}" > 
            </div>
            @endforeach
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
          </a>
      </div>
      @else
      <img src="{{ asset('assets/images/no-images.png') }}" 
          alt=" {{ $product->name }}" class="mx-auto d-block img-fluid p-2">
      @endif
      <div class="mt-4"></div>
     {{-- End Slider --}}
     <div class="card box-shadow border-none mb-4">
        <div class="card-header card-header bg-default text-white border-none">
           <div class="h6">
              {{$product->name}}
           </div>
        </div>
        <div class="row">
           <div class="col-lg-8">
              <div class="card-body border-none">
                 <div class="mb-1">
                    @if (!empty($product->hall_one))
                    <i class="fa fa-university text-default fa-lg" aria-hidden="true"></i> {{ $product->hall_one}} (More space)
                    @else
                    @endif
                 </div>
                 <div>
                    @if (!empty($product->city))
                    {{ $product->city}},
                    @else
                    @endif
                    @if ($product->state)
                    {{ $product->state}}
                    @else
                    @endif
                 </div>
                 <div>
                    {{ $product->full_address}}
                 </div>
              </div>
           </div>
           <div class="col-lg-4">
             <!-- Modal -->
             <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                 <div class="modal-content">
                  
                   <div class="modal-body">
                     <form action="{{ url('/add-rating') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product->id }}">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Rate {{ $product->name }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="rating-css mt-2 ">
                            <div class="star-icon ">

                                 @if ($user_rating)
                                    @for ($i=1;$i<=$user_rating->stars_rated; $i++)
                                       <input type="radio" value="{{$i}}" name="product_rating" checked id="rating{{$i}}">
                                       <label for="rating{{$i}}" class="fa fa-star "></label>
                                    @endfor
                                    @for ($j = $user_rating->stars_rated+1; $j<=5;$j++)
                                       <input type="radio" value="{{$j}}" name="product_rating"  id="rating{{$j}}">
                                       <label for="rating{{$j}}" class="fa fa-star "></label>
                                    @endfor
                                     
                                 @else
                                    <input type="radio" value="1" name="product_rating" checked="" id="rating1">
                                    <label for="rating1" class="fa fa-star"></label>
                                    <input type="radio" value="2" name="product_rating" id="rating2">
                                    <label for="rating2" class="fa fa-star"></label>
                                    <input type="radio" value="3" name="product_rating" id="rating3">
                                    <label for="rating3" class="fa fa-star"></label>
                                    <input type="radio" value="4" name="product_rating" id="rating4">
                                    <label for="rating4" class="fa fa-star"></label>
                                    <input type="radio" value="5" name="product_rating" id="rating5">
                                    <label for="rating5" class="fa fa-star"></label>
                                 @endif

                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="heading">Rate Heading</label>
                                <input type="text" name="star_heading" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="heading">What do you like about this cake?(Rate Description)  </label>
                                <textarea name="star_description" class="form-control" cols="5" rows="5" required></textarea>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                   </div>
                 </div>
               </div>
             </div>
                  @php $ratenum = number_format($rating_value) @endphp
                  <div class="mt-3 header-section">
                     @for ($i=1;$i<=$ratenum; $i++)
                        <i class="fa fa-star checked"></i>
                     @endfor
                     @for ($j = $ratenum+1; $j<=5;$j++)
                        <i class="fa fa-star"></i>
                     @endfor
                     @if ($ratings->count() > 0)

                     <span class="user-home-header">
                        <a href="#" class="ml-4 Over-View" >{{ $ratings->count() }} Reviews</a>
                     </span>
                     @else
                        No Reviews
                     @endif
                      
                    <div class="user-home-header">
                        <a href="#" class="" data-toggle="modal" data-target="#exampleModal">Write Reviews</a>
                    </div>
                  </div>
                  <div class="mt-2 mb-4 ">
                    <a href="#" data-toggle="modal" data-target="#inqueryModal" class="col-lg-10 btn btn-primary">Request to Book</a>
                </div>
           </div>
        </div>
     </div>
  {{-- @if ()
  @else
  @endif --}}
  @if (!empty($product->description))
  <div class="card box-shadow border-none">
     <div class="card-header card-header bg-default text-white border-none">
       About {{$product->name}}
     </div>
     <div class="card-body border-none">
        @php
        echo $product->description
        @endphp
     </div>
  </div>
  @else
  <div></div>
  @endif



  <div class="card box-shadow border-none mt-4">
      <div class="card-header card-header bg-default text-white border-none">
         {{$product->all_party}}
      </div>
      <div class="card-body border-none">
         {{-- table --}}
         <div class="table-responsive">
            <table class="table table-striped ">
               <tbody>
                  <tr>
                  <td>Space Name</td>
                  <td>Min Capacity</td>
                  <td>Max Capacity</td>
                  <td>Food Price</td>
                  </tr>
                  @if (!empty($product->hall_one))
                     <tr>
                        <td>
                           <a class="" href="#">
                           {{ $product->hall_one}}
                           </a>
                        </td>
                        <td> {{ $product->mincapacity_one}}</td>
                        <td> {{ $product->maxcapacity_one}}</td>
                        <td>
                        <span class="fa-stack other_food">
                        <i class="fa fa-square-o fa-stack-2x yellow-symbol"></i>
                        <i class="fa fa-circle fa-stack-1x yellow-sym"></i>
                        </span>
                        <font class="other_price">Veg : <i class="fa fa-inr" aria-hidden="true"></i></font>
                          {{ $product->veg_sell_price_one}} - {{ $product->vegprice_one}} 
                        <br>
                        <span class="fa-stack other_food">
                        <i class="fa fa-square-o fa-stack-2x red-symbol"></i>
                        <i class="fa fa-circle fa-stack-1x red-sym"></i>
                        </span> <font class="other_price">NonVeg : <i class="fa fa-inr" aria-hidden="true"></i></font>
                         {{ $product->non_sell_price_one}} - {{ $product->nonprice_one}} 
                        </td>
                     </tr>
                  @else
                     
                  @endif
                  @if (!empty($product->hall_two))
                  <tr>
                     <td>
                        <a class="" href="#">
                        {{ $product->hall_two}}
                        </a>
                     </td>
                     <td> {{ $product->mincapacity_two}}</td>
                     <td> {{ $product->maxcapacity_two}}</td>
                     <td>
                     <span class="fa-stack other_food">
                     <i class="fa fa-square-o fa-stack-2x yellow-symbol"></i>
                     <i class="fa fa-circle fa-stack-1x yellow-sym"></i>
                     </span>
                     <font class="other_price">Veg : <i class="fa fa-inr" aria-hidden="true"></i></font>
                      {{ $product->veg_sell_price_two}} - {{ $product->vegprice_two}} 
                     <br>
                     <span class="fa-stack other_food">
                     <i class="fa fa-square-o fa-stack-2x red-symbol"></i>
                     <i class="fa fa-circle fa-stack-1x red-sym"></i>
                     </span> <font class="other_price">NonVeg : <i class="fa fa-inr" aria-hidden="true"></i></font>
                       {{ $product->non_sell_price_two}} - {{ $product->nonprice_two}} 
                     </td>
                  </tr>
               @else
                  
               @endif
               @if (!empty($product->hall_three))
               <tr>
                  <td>
                     <a class="" href="#">
                     {{ $product->hall_three}}
                     </a>
                  </td>
                  <td> {{ $product->mincapacity_three}}</td>
                  <td> {{ $product->maxcapacity_three}}</td>
                  <td>
                  <span class="fa-stack other_food">
                  <i class="fa fa-square-o fa-stack-2x yellow-symbol"></i>
                  <i class="fa fa-circle fa-stack-1x yellow-sym"></i>
                  </span>
                  <font class="other_price">Veg : <i class="fa fa-inr" aria-hidden="true"></i></font>
                    {{ $product->veg_sell_price_three}} - {{ $product->vegprice_three}}
                  <br>
                  <span class="fa-stack other_food">
                  <i class="fa fa-square-o fa-stack-2x red-symbol"></i>
                  <i class="fa fa-circle fa-stack-1x red-sym"></i>
                  </span> <font class="other_price">NonVeg : <i class="fa fa-inr" aria-hidden="true"></i></font>
                   {{ $product->non_sell_price_three}} - {{ $product->nonprice_three}}
                  </td>
               </tr>
            @else
               
            @endif

            @if (!empty($product->hall_four))
            <tr>
               <td>
                  <a class="" href="#">
                  {{ $product->hall_four}}
                  </a>
               </td>
               <td> {{ $product->mincapacity_four}}</td>
               <td> {{ $product->maxcapacity_four}}</td>
               <td>
               <span class="fa-stack other_food">
               <i class="fa fa-square-o fa-stack-2x yellow-symbol"></i>
               <i class="fa fa-circle fa-stack-1x yellow-sym"></i>
               </span>
               <font class="other_price">Veg : <i class="fa fa-inr" aria-hidden="true"></i></font>
                 {{ $product->veg_sell_price_four}} -  {{ $product->vegprice_four}}
               <br>
               <span class="fa-stack other_food">
               <i class="fa fa-square-o fa-stack-2x red-symbol"></i>
               <i class="fa fa-circle fa-stack-1x red-sym"></i>
               </span> <font class="other_price">NonVeg : <i class="fa fa-inr" aria-hidden="true"></i></font>
                 {{ $product->non_sell_price_four}} - {{ $product->nonprice_four}}
               </td>
            </tr>
         @else
            
         @endif

         @if (!empty($product->hall_five))
         <tr >
            <td>
               <a class="" href="#">
               {{ $product->hall_five}}
               </a>
            </td>
            <td> {{ $product->mincapacity_five}}</td>
            <td> {{ $product->maxcapacity_five}}</td>
            <td>
            <span class="fa-stack other_food">
            <i class="fa fa-square-o fa-stack-2x yellow-symbol"></i>
            <i class="fa fa-circle fa-stack-1x yellow-sym"></i>
            </span>
            <font class="other_price">Veg : <i class="fa fa-inr" aria-hidden="true"></i></font>
            {{ $product->veg_sell_price_five}} - {{ $product->vegprice_five}}  
            <br>
            <span class="fa-stack other_food">
            <i class="fa fa-square-o fa-stack-2x red-symbol"></i>
            <i class="fa fa-circle fa-stack-1x red-sym"></i>
            </span> <font class="other_price">NonVeg : <i class="fa fa-inr" aria-hidden="true"></i></font>
             {{ $product->non_sell_price_five}} - {{ $product->nonprice_five}} 
            </td>
         </tr>
      @else
         
      @endif
            </tbody>
         </table>
      </div>
       
       {{-- end table --}}
      </div>
   </div>

   @if (!empty($product->space_capacity))
   <div class="card box-shadow border-none mt-4">
      <div class="card-header card-header bg-default text-white border-none">
         Space Capacity 
      </div>
      <div class="card-body border-none">
         <div class="row">
            <div class="col-lg-8">
               Space Capacity 
               @php
               echo $product->space_capacity
               @endphp
            </div>
            <div class="col-lg-4">
               <a href="#" data-toggle="modal" data-target="#inqueryModal" class="col-lg-10 btn btn-primary ">Request to Book</a>
            </div>
         </div>
      </div>
   </div>
      @else
      <div></div>
      @endif

   
      @if (!empty($product_other_details->heading_occasions))
      <div class="card box-shadow border-none mt-4 ">
         <div class="card-header card-header bg-default text-white border-none">
            {{$product_other_details->heading_occasions}} 
               <span class="text-end text-right float-right">
                   Operating Time {{$product_other_details->operating_time}}
               </span>
         </div>
         <div class="card-body border-none">
            <div class="span4 collapse-group">
               @php
               echo $product_other_details->good_for_occasions
               @endphp
                  {{-- <p>
                    <div class="collapse" id="viewdetails3"> 
                     @php
                     echo $product->good_for_occasions
                     @endphp
                    </div> <a data-toggle="collapse" data-target="#viewdetails3">
                       More... &raquo;
                    </a>
                 </p> --}}
           </div>
         
         </div>
      </div>
      
      @else
         
      @endif

     
      @if (!empty($product_other_details->heading_cuisines))
      <div class="card box-shadow border-none mt-4 ">
         <div class="card-header card-header bg-default text-white border-none">
            {{$product_other_details->heading_cuisines}} 
         </div>
         <div class="card-body border-none">
            <div class="span4 collapse-group">
               @php
               echo $product_other_details->cuisines_served
               @endphp
           </div>
         </div>
      </div>
      @else
      @endif
      @if (!empty($product_other_details->heading_facilities))
      <div class="card box-shadow border-none mt-4 ">
         <div class="card-header card-header bg-default text-white border-none">
            {{$product_other_details->heading_facilities}} 
         </div>
         <div class="card-body border-none">
            <div class="span4 collapse-group">
               @php
               echo $product_other_details->facilities
               @endphp
           </div>
         </div>
      </div>
      @else
      @endif
      @if (!empty($product_other_details->heading_space))
      <div class="card box-shadow border-none mt-4 ">
         <div class="card-header card-header bg-default text-white border-none">
            {{$product_other_details->heading_space}} 
         </div>
         <div class="card-body border-none">
            <div class="span4 collapse-group">
               @php
               echo $product_other_details->space_type
               @endphp
           </div>
         </div>
      </div>
      @else
      @endif

      @if (!empty($product_other_details->heading_parking))
      <div class="card box-shadow border-none mt-4 ">
         <div class="card-header card-header bg-default text-white border-none">
            {{$product_other_details->heading_parking}} 
         </div>
         <div class="card-body border-none">
            <div class="span4 collapse-group">
               @php
               echo $product_other_details->car_parking
               @endphp
           </div>
         </div>
      </div>
      @else
      @endif
      @if (!empty($product_other_details->heading_information))
      <div class="card box-shadow border-none mt-4 ">
         <div class="card-header card-header bg-default text-white border-none">
            {{$product_other_details->heading_information}} 
         </div>
         <div class="card-body border-none">
            <div class="span4 collapse-group">
               @php
               echo $product_other_details->more_information
               @endphp
           </div>
         </div>
      </div>
      @else
      @endif

      @if (!empty($product_other_details->heading_usps))
      <div class="card box-shadow border-none mt-4 ">
         <div class="card-header card-header bg-default text-white border-none">
            {{$product_other_details->heading_usps}} 
         </div>
         <div class="card-body border-none">
            <div class="span4 collapse-group">
               @php
               echo $product_other_details->usps_power
               @endphp
           </div>
         </div>
      </div>
      @else
      @endif
      @if (!empty($product_other_details->heading_room))
      <div class="card box-shadow border-none mt-4 ">
         <div class="card-header card-header bg-default text-white border-none">
            {{$product_other_details->heading_room}} 
         </div>
         <div class="card-body border-none">
            <div class="span4 collapse-group">
               @php
               echo $product_other_details->room_details
               @endphp
           </div>
         </div>
      </div>
      @else
      @endif

      @if (!empty($product_other_details->heading_summary))
      <div class="card box-shadow border-none mt-4 ">
         <div class="card-header card-header bg-default text-white border-none">
            {{$product_other_details->heading_summary}} 
         </div>
         <div class="card-body border-none">
            <div class="span4 collapse-group">
               @php
               echo $product_other_details->summary_event_space
               @endphp
           </div>
         </div>
      </div>
      @else
      @endif

  </div>{{-- col-lg-8 --}}
  <div class="col-lg-4">
   <div class="card box-shadow border-none">
      <div class="card-body border-none">
         <div class="row">
               <div class="col-lg-12">
                  <td>
                     @if (!empty( $product->veg_sell_price_one))
                        <span class="fa-stack other_food">
                        <i class="fa fa-square-o fa-stack-2x yellow-symbol"></i>
                        <i class="fa fa-circle fa-stack-1x yellow-sym"></i>
                        </span>
                        <font class="other_price">Veg : <i class="fa fa-inr" aria-hidden="true"></i></font>
                        {{ $product->veg_sell_price_one}} - {{ $product->vegprice_one}}
                     @endif
                       <br>
                     @if (!empty($product->non_sell_price_one))
                        <span class="fa-stack other_food">
                        <i class="fa fa-square-o fa-stack-2x red-symbol"></i>
                        <i class="fa fa-circle fa-stack-1x red-sym"></i>
                        </span> <font class="other_price">NonVeg : <i class="fa fa-inr" aria-hidden="true"></i></font>
                        {{ $product->non_sell_price_one}} - {{ $product->nonprice_one}}
                     @endif
                        
                  </td>
               </div>
               @if (!empty($product->space_capacity))
                  <div class="col-lg-12"> 
                     <div class="mt-2">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        Capacity 
                        @php
                        echo $product->space_capacity
                        @endphp
                     </div>
                  </div>
               @endif
               <div class="col-lg-12">
                  <div class="text-center mt-4">
                     <a href="#" data-toggle="modal" data-target="#inqueryModal" class="col-lg-10 btn btn-primary ">Request to Book</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <div class="card box-shadow border-none mt-4 ">
         <div class="card-header card-header bg-default text-white border-none">
           Call {{$product->name}} 
         </div>
         <div class="card-body border-none">
            <div class="span4 collapse-group">
               <div class="h5">
                 +91 - 88829 76880
               </div>
           </div>
         </div>
      </div>
      <div class="card box-shadow border-none mt-4 bg-light">
         <div class="card-body border-none">
            <div class="span4 collapse-group">
               <div class="h6 mb-4">
                  Check availability & price
               </div>
               <div>
                  <form action="{{ route('contact-form.store') }}" method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="row">
                        <div class="col-lg-12">
                           <input type="hidden" name="product_id" value="{{$product->id }} ">
                           <div class="form-group"  >
                              <select name="occasion_type" required id="" class="form-control" >
                                 <option value=""> Select Your Event</option>
                                
                                 <option value="Wedding Ceremony"> Wedding Ceremony</option>
                                 <option value="Wedding Reception"> Wedding Reception</option>
                                 <option value="Engagement Ceremony"> Engagement Ceremony</option>
                                 <option value="Wedding Anniversary"> Wedding Anniversary</option>
                                 <option value="Birthday Party"> Birthday Party </option>
                                 <option value="Birthday Party for Kids"> Birthday Party for Kids</option>
                                 <option value="Corporate party">Corporate party</option>
                                 <option value="Corporate Training"> Corporate Training </option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="form-group">
                             <input type="date" name="date" id="" placeholder="Select Occasion Date *" class="form-control" required>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="form-group">
                             <input type="text" readonly name="venue_address" id="" class="form-control"  value="{{ $product->name}} - {{ $product->full_address}}">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <input type="number" name="no_guests" class="form-control" placeholder="No Of guests *" required>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <select name="budget_range" class="form-control" required>
                                 <option  value="" >Select Budget Range</option>
                                 <option value="1800+">1800+</option>
                                 <option value="1600-1800">1600-1800 </option>
                                 <option value="1400-1600">1400-1600 </option>
                                 <option value="1200-1400">1200-1400 </option>
                                 <option value="1000-1200">1000-1200 </option>
                                 <option value="800-1000">800-1000 </option>
                                 <option value="600-800">600-800 </option>
                                 <option value="400-600">400-600 </option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <select class="form-control" name="req_meal" required>
                                 <option value="Veg">Only Veg</option>
                                 <option value="Non Veg">Both Veg and Non Veg</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <select class="form-control" name="req_drinks" required>
                                 <option value="No Alcohol">Soft Drinks</option>
                                 <option value="Alcohol">Alcoholic Drinks</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="form-group">
                              <input type="text" name="name" class="form-control" placeholder="Enter your name *" id="" required>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="form-group">
                              <input type="number" name="mobile" class="form-control" placeholder="Enter your mobile *" id="" required>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="form-group">
                              <input type="email" name="email" class="form-control" placeholder="Enter your email" id="">
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="form-group">
                              <textarea name="notes" placeholder="Notes" class="form-control" rows="2"></textarea>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="form-group">
                              <button type="submit" class="btn btn-primary btn-md col-md-12">Check availability</button>
                           </div>
                        </div>
                     </div> {{-- Row --}}
                  </form>
               </div>
           </div>
         </div>
      </div>

      @if (!empty($product_other_details->heading_landmark))
      <div class="card box-shadow border-none mt-4 ">
         <div class="card-header card-header bg-default text-white border-none">
            {{$product_other_details->heading_landmark}} 
         </div>
         <div class="card-body border-none">
            <div class="span4 collapse-group">
               @php
               echo $product_other_details->nearest_landmark
               @endphp
           </div>
         </div>
      </div>
      @else
      @endif

      @if (!empty($product_other_details->heading_terms))
      <div class="card box-shadow border-none mt-4 ">
         <div class="card-header card-header bg-default text-white border-none">
            {{$product_other_details->heading_terms}} 
         </div>
         <div class="card-body border-none">
            <div class="span4 collapse-group">
               @php
               echo $product_other_details->policy_terms
               @endphp
           </div>
         </div>
      </div>
      @else
      @endif
      @if (!empty($product_other_details->heading_disclaimer))
      <div class="card box-shadow border-none mt-4 ">
         <div class="card-header card-header bg-default text-white border-none">
            {{$product_other_details->heading_disclaimer}} 
         </div>
         <div class="card-body border-none">
            <div class="span4 collapse-group">
               @php
               echo $product_other_details->disclaimer
               @endphp
           </div>
         </div>
      </div>
      @else
      @endif

  </div> {{-- Col-lg-4 --}}
</div>{{-- row --}}
<div class="row" id="overview_details">
   <div class="col-lg-12">
      <div class="mt-5">
         <div class="h4">
            Reviews and ratings of {{ $product->name}} 
         </div>
         <div>
            <a href="#" class="" data-toggle="modal" data-target="#exampleModal">Write Reviews</a>
         </div>
      </div>
   </div>
   @foreach ($ratings_show as $showitem)
      <div class="col-lg-4 mb-4">
         <div class="card box-shadow border-none mt-4 h-100">
            <div class="card-header card-header bg-default text-white border-none">
               {{$showitem->star_heading}} 
            </div>
             <div class="ml-3 h6 mt-2">
               {{$showitem->user->name}}
             </div>
             <div class="ml-3">
               Reviewed on : {{$showitem->created_at->format('d-m-Y')}} 
             </div>
            @if (!empty($showitem->stars_rated>=5))
               <div class="ml-3">
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
               </div>
            @elseif (!empty($showitem->stars_rated>=4))
               <div class="ml-3">
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
               </div>
               @elseif (!empty($showitem->stars_rated>=3))
               <div class="ml-3">
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
               </div>
               @elseif (!empty($showitem->stars_rated>=2))
               <div class="ml-3">
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
               </div>
               @elseif (!empty($showitem->stars_rated>=1))
               <div class="ml-3">
                  <i class="fa fa-star checked"></i>
               </div>
            @else
               
            @endif
            <div class="card-body border-none">
               <div class="">
                  @php
                  echo $showitem->star_description
                  @endphp
              </div>
            </div>
         </div>
      </div>
   @endforeach
   
</div>


{{-- Model start--}}
<!-- Button trigger modal -->
    {{-- 
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
    </button> 
    --}}
    <!-- Modal -->
    <div class="modal fade " id="inqueryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-header">
              <h6 class="modal-title" id="exampleModalLabel">
                  <div class="h6 mb-4">
                      Check availability &amp; price
                   </div>
                </h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="">
                  <div class="card box-shadow border-none ">
                      <div class="card-body border-none">
                         <div class="span4 collapse-group">
                           <form action="{{ route('contact-form.store') }}" method="post" enctype="multipart/form-data">
                              @csrf
                              <div class="row">
                                 <div class="col-lg-12">
                                      <input type="hidden" name="product_id" value="{{$product->id }} ">
                                    <div class="form-group"  >
                                       <select name="occasion_type" required id="" class="form-control" >
                                          <option value=""> Select Your Event</option>
                                         
                                          <option value="Wedding Ceremony"> Wedding Ceremony</option>
                                          <option value="Wedding Reception"> Wedding Reception</option>
                                          <option value="Engagement Ceremony"> Engagement Ceremony</option>
                                          <option value="Wedding Anniversary"> Wedding Anniversary</option>
                                          <option value="Birthday Party"> Birthday Party </option>
                                          <option value="Birthday Party for Kids"> Birthday Party for Kids</option>
                                          <option value="Corporate party">Corporate party</option>
                                          <option value="Corporate Training"> Corporate Training </option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                      <input type="date" name="date" id="" placeholder="Select Occasion Date *" class="form-control" required>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                      <input type="text" readonly name="venue_address" id="" class="form-control"  value="{{ $product->name}} - {{ $product->full_address}}">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <input type="number" name="no_guests" class="form-control" placeholder="No Of guests *" required>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <select name="budget_range" class="form-control" required>
                                          <option  value="" >Select Budget Range</option>
                                          <option value="1800+">1800+</option>
                                          <option value="1600-1800">1600-1800 </option>
                                          <option value="1400-1600">1400-1600 </option>
                                          <option value="1200-1400">1200-1400 </option>
                                          <option value="1000-1200">1000-1200 </option>
                                          <option value="800-1000">800-1000 </option>
                                          <option value="600-800">600-800 </option>
                                          <option value="400-600">400-600 </option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <select class="form-control" name="req_meal" required>
                                          <option value="Veg">Only Veg</option>
                                          <option value="Non Veg">Both Veg and Non Veg</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <select class="form-control" name="req_drinks" required>
                                          <option value="No Alcohol">Soft Drinks</option>
                                          <option value="Alcohol">Alcoholic Drinks</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <input type="text" name="name" class="form-control" placeholder="Enter your name *" id="" required>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <input type="number" name="mobile" class="form-control" placeholder="Enter your mobile *" id="" required>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <input type="email" name="email" class="form-control" placeholder="Enter your email" id="">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <textarea name="notes" placeholder="Notes" class="form-control" rows="2"></textarea>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <button type="submit" class="btn btn-primary btn-md col-md-12">Check availability</button>
                                    </div>
                                 </div>
                              </div> {{-- Row --}}
                           </form>
                        </div>
                      </div>
                   </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
          </div>
        </div>
      </div>
    </div>
  
  <!-- Large modal -->
  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> -->
   
{{-- End Model --}}


@section('scripts')
<script>
  $(function(){
    $("#exzoom").exzoom({
    // thumbnail nav options
    "navWidth": 60,
    "navHeight": 60,
    "navItemNum": 5,
    "navItemMargin": 7,
    "navBorder": 1,
    // autoplay
    "autoPlay": false,
    // autoplay interval in milliseconds
    "autoPlayTimeout": 2000
    });
  });
 
   $('.Over-View').on('click', function() {
      $('html, body').animate({
         scrollTop: $('#overview_details').offset().top - $('.header-section .user-home-header').outerHeight(true)
      }, 2000);
   });

</script>

@if (session('ratingmessage'))
    <script>alert("{{ session('ratingmessage') }}")</script> 
@endif
@endsection