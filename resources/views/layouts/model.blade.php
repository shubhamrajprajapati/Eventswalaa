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
                                      <div class="form-group" required>
                                         <select name="occasion_type" id="" class="form-control" required>
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
                                        <input type="text" name="venue_address" id="" class="form-control" placeholder="Enter your address" required>
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
    
      <div class="col-lg-12">
        @if (session('message'))
            <script>alert("{{ session('message') }}")</script>
        @endif
    </div>
    <!-- Large modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> -->
     