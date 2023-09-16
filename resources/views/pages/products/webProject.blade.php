@extends('master')

@section('title')
   Xcellence Technology || Our Projects
@endsection

@section('mainContent')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2> Our Works </h2>
                        <ul>
                            <li><a href="{{route('welcomePage')}}">Home</a></li>
                            <li> Our Works </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->


    <!-- Start Project Section -->
    <section class="project-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title">
                        <h6>Recent Works</h6>
                        <h2>Our Rorks</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="project-list">
                        <ul class="nav" id="project-flters">
                            <li class="filter filter-active" data-filter=".all">all</li>
                            <li class="filter" data-filter=".webdesign">WEB</li>
                            <li class="filter" data-filter=".graphics">Graphics</li>
                            <li class="filter" data-filter=".data">Data Entry</li>
                        </ul>
                    </div>
                </div>
                <div class="project-container">

                        {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  webdesign">
                        <a href="https://devsalient.com/mdh/">
                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/1.png')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>My Debt Help</p>
                                    <h3> Web Application</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                          {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  webdesign">
                        <a href="https://devsalient.com/infosol/">
                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/2.png')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>Infosol</p>
                                    <h3> Web Application</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                          {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  webdesign">
                        <a href="https://golfchateaucartier.com/">
                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/3.png')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>Golf Chateau Cartier</p>
                                    <h3> Web Application</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                          {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  webdesign">
                        <a href="https://www.ottawa-attorneys.ca/">
                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/4.png')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>Ottawa-Attorneys</p>
                                    <h3> Web Application</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                          {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  webdesign">
                        <a href="https://ottawadisabilitylawyers.com/">
                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/5.png')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>Ottawa Disability Lawyers</p>
                                    <h3> Web Application</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                          {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  webdesign">
                        <a href="https://ottawavalleyinjurylawyer.com/">
                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/6.png')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>Ottawa Valleyinjury Lawyer</p>
                                    <h3> Web Application</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                          {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  webdesign">
                        <a href="https://ottawainsurancelawyer.com/">
                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/7.png')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>Ottawa Insurance Lawyer</p>
                                    <h3> Web Application</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                           {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  webdesign">
                        <a href="https://www.personal-injury-ottawa.ca/">
                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/8.png')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>Personal-Injury-Ottawa</p>
                                    <h3> Web Application</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                           {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  webdesign">
                        <a href="https://ottawaaccidentattorney.ca/">
                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/9.png')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>Ottawa Accident Attorney</p>
                                    <h3> Web Application</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                           {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  webdesign">
                        <a href="https://ottawaaccidentlawyer.ca/">
                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/10.png')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>Ottawa Accident Lawyer</p>
                                    <h3> Web Application</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                              {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  webdesign">
                        <a href="https://accidentsottawa.com/">
                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/11.png')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>Accidents Ottawa</p>
                                    <h3> Web Application</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  webdesign">
                        <a href="https://www.firstlineeducation.com/">
                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/12.png')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>First Line Education</p>
                                    <h3> Web Application</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  webdesign">
                        <a href="https://devsalient.com/femme/">
                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/13.png')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>Devsalient</p>
                                    <h3> Web Application</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                 {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  webdesign">
                        <a href="https://revieweasy.ca/dumpster/london/">
                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/14.png')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>Revieweasy</p>
                                    <h3> Web Application</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  webdesign">
                        <a href="https://revieweasy.ca/dumpster/calgary/">
                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/15.png')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>Revieweasy</p>
                                    <h3> Web Application</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  webdesign">
                        <a href="https://insurancelawyerottawa.com/">
                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/16.png')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>Insurance Lawyer Ottawa</p>
                                    <h3> Web Application</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  webdesign">
                        <a href="https://jobsoutlet.net/">
                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/JobsOutlet.jpg')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>JobsOutlet</p>
                                    <h3> Web Application</h3>
                                </div>
                            </div>
                        </a>
                    </div>






                          {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  graphics">

                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/creative_desgin 1.png')}}" alt="image">
                                <div class="project-content-overlay">

                                    <h3>Graphics Design</h3>
                                </div>
                            </div>

                    </div>

                        {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all graphics">

                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/creative_desgin 2.png')}}" alt="image">
                                <div class="project-content-overlay">

                                    <h3>Graphics Design</h3>
                                </div>
                            </div>

                    </div>

                        {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all graphics">

                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/creative_desgin 3.png')}}" alt="image">
                                <div class="project-content-overlay">

                                    <h3>Graphics Design</h3>
                                </div>
                            </div>

                    </div>

                        {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all graphics">

                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/creative_desgin 4.png')}}" alt="image">
                                <div class="project-content-overlay">

                                    <h3>Graphics Design</h3>
                                </div>
                            </div>

                    </div>

                        {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all graphics">

                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/creative_desgin 5.png')}}" alt="image">
                                <div class="project-content-overlay">

                                    <h3>Graphics Design</h3>
                                </div>
                            </div>

                    </div>

                        {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all graphics">

                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/creative_desgin 6.png')}}" alt="image">
                                <div class="project-content-overlay">

                                    <h3>Graphics Design</h3>
                                </div>
                            </div>

                    </div>

                        {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all graphics">

                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/creative_desgin 7.png')}}" alt="image">
                                <div class="project-content-overlay">

                                    <h3>Graphics Design</h3>
                                </div>
                            </div>

                    </div>

                        {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all graphics">

                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/creative_desgin 8.png')}}" alt="image">
                                <div class="project-content-overlay">

                                    <h3>Graphics Design</h3>
                                </div>
                            </div>

                    </div>
       {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all graphics">

                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/logo01.jpg')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>Logo</p>
                                    <h3>Graphics Design</h3>
                                </div>
                            </div>

                    </div>
       {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all graphics">

                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/logo02.jpg')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>Logo</p>
                                    <h3>Graphics Design</h3>
                                </div>
                            </div>

                    </div>
       {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all graphics">

                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/logo03.jpg')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>Logo</p>
                                    <h3>Graphics Design</h3>
                                </div>
                            </div>

                    </div>

                    {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all data">

                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/data1.png')}}" alt="image">
                                <div class="project-content-overlay">

                                    <h3>Data Entry</h3>
                                </div>
                            </div>

                    </div>








                </div>
            </div>
        </div>
    </section>
    <!-- End Project Section -->


@endsection
