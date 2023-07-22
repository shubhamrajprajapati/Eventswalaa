
@extends('layouts.frontend')
@section('title')Events walaa - FAQ @endsection
@section('keywords')Events walaa - FAQ @endsection
@section('description')Events walaa - FAQ @endsection

@section('content')
<style>
    /* .myaccordion .card-header {
        border-bottom-color: #EDEFF0;
        background: transparent;
    } */

    .myaccordion .fa-stack {
        font-size: 18px;
    }

    .myaccordion .btn {
        width: 100%;
        font-weight: bold;
        padding: 0;
        color: #9e721d;
        background: linear-gradient(#9e721d, #feffc2);
        background: -webkit-linear-gradient(#9e721d, #feffc2);
        -webkit-background-clip: text;
    }

    .myaccordion .btn-link:hover,
    .myaccordion .btn-link:focus {
        text-decoration: none;
    }

    .myaccordion li+li {
        margin-top: 10px;
    }
</style>
    <section class="main-wrapper">
        <div class="pt-5"></div>
            <div class="container  pb-4">
                <div class="row justify-content-center pt-4">
                    <div class="col-sm-6 border-radious1 box-shadow">
                        <div class="text-justify  p-3">
                            <div data-aos="fade-down" class="mb-4 h4">
                                  FAQs of the event walaa
                            </div>
                            <div class="my-4 aos-init" data-aos="fade-up">
                                
                                <div id="accordion" class="myaccordion">
                                    <div class="card mb-2">
                                      <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                          <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Heading 1
                                            <span class="fa-stack fa-sm">
                                              <i class="fa fa-circle fa-stack-2x"></i>
                                              <i class="fa fa-stack-1x fa-inverse fa-plus"></i>
                                            </span>
                                          </button>
                                        </h2>
                                      </div>
                                      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, ullam nihil tenetur consectetur quis cumque odio quae ea necessitatibus harum provident, consequuntur, tempore adipisci veritatis voluptatibus ducimus recusandae soluta magni.

                                        </div>
                                      </div>
                                    </div>
                                    <div class="card mb-2">
                                      <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                          <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Heading 1
                                            <span class="fa-stack fa-2x">
                                              <i class="fa fa-circle fa-stack-2x"></i>
                                              <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
                                            </span>
                                          </button>
                                        </h2>
                                      </div>
                                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, ullam nihil tenetur consectetur quis cumque odio quae ea necessitatibus harum provident, consequuntur, tempore adipisci veritatis voluptatibus ducimus recusandae soluta magni.

                                        </div>
                                      </div>
                                    </div>
                                    <div class="card mb-2">
                                        <div class="card-header" id="headingThree">
                                          <h2 class="mb-0">
                                            <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Heading 1
                                              <span class="fa-stack fa-2x">
                                                <i class="fa fa-circle fa-stack-2x"></i>
                                                <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
                                              </span>
                                            </button>
                                          </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                          <div class="card-body">
                                                <div>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, ullam nihil tenetur consectetur quis cumque odio quae ea necessitatibus harum provident, consequuntur, tempore adipisci veritatis voluptatibus ducimus recusandae soluta magni.

                                                </div>
                                          </div>
                                        </div>
                                      </div>
    
                                      <div class="card mb-2">
                                        <div class="card-header" id="headingFour">
                                          <h2 class="mb-0">
                                            <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Heading 1
                                              <span class="fa-stack fa-2x">
                                                <i class="fa fa-circle fa-stack-2x"></i>
                                                <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
                                              </span>
                                            </button>
                                          </h2>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                          <div class="card-body">
                                            <div>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, ullam nihil tenetur consectetur quis cumque odio quae ea necessitatibus harum provident, consequuntur, tempore adipisci veritatis voluptatibus ducimus recusandae soluta magni.

                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card mb-2">
                                        <div class="card-header" id="headingFive">
                                          <h2 class="mb-0">
                                            <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Heading 1
                                              <span class="fa-stack fa-2x">
                                                <i class="fa fa-circle fa-stack-2x"></i>
                                                <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
                                              </span>
                                            </button>
                                          </h2>
                                        </div>
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                          <div class="card-body">
                                            <div>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, ullam nihil tenetur consectetur quis cumque odio quae ea necessitatibus harum provident, consequuntur, tempore adipisci veritatis voluptatibus ducimus recusandae soluta magni.

                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card mb-2">
                                        <div class="card-header" id="headingSix">
                                          <h2 class="mb-0">
                                            <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Heading 1
                                              <span class="fa-stack fa-2x">
                                                <i class="fa fa-circle fa-stack-2x"></i>
                                                <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
                                              </span>
                                            </button>
                                          </h2>
                                        </div>
                                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                          <div class="card-body">
                                            <div>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, ullam nihil tenetur consectetur quis cumque odio quae ea necessitatibus harum provident, consequuntur, tempore adipisci veritatis voluptatibus ducimus recusandae soluta magni.

                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card mb-2">
                                        <div class="card-header" id="headingSeven">
                                          <h2 class="mb-0">
                                            <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                Heading 1
                                              <span class="fa-stack fa-2x">
                                                <i class="fa fa-circle fa-stack-2x"></i>
                                                <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
                                              </span>
                                            </button>
                                          </h2>
                                        </div>
                                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                                          <div class="card-body">
                                            <div>
                                                <strong>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, ullam nihil tenetur consectetur quis cumque odio quae ea necessitatibus harum provident, consequuntur, tempore adipisci veritatis voluptatibus ducimus recusandae soluta magni.

                                                </strong>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
    
                                      <div class="card mb-2">
                                        <div class="card-header" id="headingEight">
                                          <h2 class="mb-0">
                                            <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                Heading 1
                                              <span class="fa-stack fa-2x">
                                                <i class="fa fa-circle fa-stack-2x"></i>
                                                <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
                                              </span>
                                            </button>
                                          </h2>
                                        </div>
                                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                                          <div class="card-body">
                                            <div>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, ullam nihil tenetur consectetur quis cumque odio quae ea necessitatibus harum provident, consequuntur, tempore adipisci veritatis voluptatibus ducimus recusandae soluta magni.

                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card mb-2">
                                        <div class="card-header" id="headingNine">
                                          <h2 class="mb-0">
                                            <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                Heading 1
                                              <span class="fa-stack fa-2x">
                                                <i class="fa fa-circle fa-stack-2x"></i>
                                                <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
                                              </span>
                                            </button>
                                          </h2>
                                        </div>
                                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                                          <div class="card-body">
                                            <div>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, ullam nihil tenetur consectetur quis cumque odio quae ea necessitatibus harum provident, consequuntur, tempore adipisci veritatis voluptatibus ducimus recusandae soluta magni.

                                            </div>
                                          </div>
                                        </div>
                                      </div>
    
                                  </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="col-lg-6">
                    <div class="h4 mt-5 text-center">
                        Try Events walaa today
                    </div>
                    <div class="mt-4 text-center">
                        <a href="{{ url('/list-your-business')}}" class="btn btn-primary col-lg-4">List your business</a> 
                        <a href="#" data-toggle="modal" data-target="#inqueryModal"
                         class="ml-4 btn btn-primary col-lg-4">Request to Book</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.model')
@endsection



@section('scripts')

   
    
@endsection
 