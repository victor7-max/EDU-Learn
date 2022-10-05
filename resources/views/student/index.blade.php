@extends('layouts.dashboard')
@section('content')

                <!-- Page Content Wrapper Start -->
                <div class="main-content-wrapper">
                    <div class="container-fluid">
                        <h4 class="title">Welcome Student</h4>
                        <!-- Student Top Start -->
                        <div class="admin-top-bar students-top">
                            <div class="courses-select">
                                <select>
                                    <option data-display="All Courses">All Courses</option>
                                    <option value="1">option</option>
                                    <option value="2">option</option>
                                    <option value="3">option</option>
                                    <option value="4">Potato</option>
                                </select>
                                <div class="overview-box">
                                    <div class="single-box">
                                        <h5 class="title">Total Revenue</h5>
                                        <div class="count">$568.00</div>
                                        <p><span>$235.00</span> This months</p>
                                    </div>

                                    <div class="single-box">
                                        <h5 class="title">Total Enrollment’s</h5>
                                        <div class="count">2,570</div>
                                        <p><span>345</span> This months</p>
                                    </div>

                                    <div class="single-box">
                                        <h5 class="title">Instgructor Rating</h5>
                                        <div class="count">
                                            4.5

                                            <span class="rating-star">
                                                    <span class="rating-bar" style="width: 80%;"></span>
                                            </span>
                                        </div>
                                        <p><span>58</span> This months</p>
                                    </div>
                                </div>
                                <h4 class="title">Meet people taking your courses</h4>
                            </div>

                            <div class="student-box">
                                <h5 class="title">Total Revenue</h5>
                                <div class="count">2,698</div>
                            </div>
                        </div>
                        <!-- Student Top End -->

                        <!-- Student's Wrapper Start -->
                        <div class="students-wrapper students-active">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Single Student Start -->
                                        <div class="single-student">
                                            <div class="student-images">
                                                <img src="assets/images/author/author-01.jpg" alt="Author">
                                            </div>
                                            <div class="student-content">
                                                <h5 class="name">Margarita James</h5>
                                                <span class="country"><img src="assets/images/flag/flag-1.png" alt="Flog"> Brazil</span>
                                                <p>Data Science and Machine learning</p>
                                                <span class="date"><i class="icofont-ui-calendar"></i> 28.03.2021</span>
                                            </div>
                                        </div>
                                        <!-- Single Student End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Student Start -->
                                        <div class="single-student">
                                            <div class="student-images">
                                                <img src="assets/images/author/author-02.jpg" alt="Author">
                                            </div>
                                            <div class="student-content">
                                                <h5 class="name">Stanley Castro</h5>
                                                <span class="country"><img src="assets/images/flag/flag-1.png" alt="Flog"> Brazil</span>
                                                <p>Data Science and Machine learning</p>
                                                <span class="date"><i class="icofont-ui-calendar"></i> 28.03.2021</span>
                                            </div>
                                        </div>
                                        <!-- Single Student End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Student Start -->
                                        <div class="single-student">
                                            <div class="student-images">
                                                <img src="assets/images/author/author-07.jpg" alt="Author">
                                            </div>
                                            <div class="student-content">
                                                <h5 class="name">Beatrice Summers</h5>
                                                <span class="country"><img src="assets/images/flag/flag-1.png" alt="Flog"> Brazil</span>
                                                <p>Data Science and Machine learning</p>
                                                <span class="date"><i class="icofont-ui-calendar"></i> 28.03.2021</span>
                                            </div>
                                        </div>
                                        <!-- Single Student End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Student Start -->
                                        <div class="single-student">
                                            <div class="student-images">
                                                <img src="assets/images/author/author-08.jpg" alt="Author">
                                            </div>
                                            <div class="student-content">
                                                <h5 class="name">Beatrice Summers</h5>
                                                <span class="country"><img src="assets/images/flag/flag-1.png" alt="Flog"> Brazil</span>
                                                <p>Data Science and Machine learning</p>
                                                <span class="date"><i class="icofont-ui-calendar"></i> 28.03.2021</span>
                                            </div>
                                        </div>
                                        <!-- Single Student End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Student Start -->
                                        <div class="single-student">
                                            <div class="student-images">
                                                <img src="assets/images/author/author-09.jpg" alt="Author">
                                            </div>
                                            <div class="student-content">
                                                <h5 class="name">Beatrice Summers</h5>
                                                <span class="country"><img src="assets/images/flag/flag-1.png" alt="Flog"> Brazil</span>
                                                <p>Data Science and Machine learning</p>
                                                <span class="date"><i class="icofont-ui-calendar"></i> 28.03.2021</span>
                                            </div>
                                        </div>
                                        <!-- Single Student End -->
                                    </div>
                                </div>

                                <div class="students-arrow">
                                    <!-- Add Pagination -->
                                    <div class="swiper-button-prev"><i class="icofont-rounded-left"></i></div>
                                    <div class="swiper-button-next"><i class="icofont-rounded-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <!-- Student's Wrapper End -->

                        <!-- Student's Map Start -->
                        <div class="students-map">
                            <h4 class="title">Student's locations and languages.</h4>

                            <div class="map">
                                <div id="vmap"></div>
                            </div>
                        </div>
                        <!-- Student's Map End -->

                        <!-- Student's Widget Start -->
                        <div class="students-widget">
                            <div class="row">
                                <div class="col-xxl-4">
                                    <!-- Student's Widget Start -->
                                    <div class="single-student-widget widget-color-01">
                                        <h4 class="widget-title">95 Country</h4>

                                        <div class="widget-items">

                                            <!-- Single Item Start -->
                                            <div class="single-item">
                                                <div class="item-flag">
                                                    <div class="flag">
                                                        <img src="assets/images/flag/flag-2.png" alt="Flag">
                                                    </div>
                                                    <div class="title">Bangladesh</div>
                                                </div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 80%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>80%</span> (722)</p>
                                                </div>
                                            </div>
                                            <!-- Single Item End -->

                                            <!-- Single Item Start -->
                                            <div class="single-item">
                                                <div class="item-flag">
                                                    <div class="flag">
                                                        <img src="assets/images/flag/flag-3.png" alt="Flag">
                                                    </div>
                                                    <div class="title">Pakistan</div>
                                                </div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 15%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>15%</span> (284)</p>
                                                </div>
                                            </div>
                                            <!-- Single Item End -->

                                            <!-- Single Item Start -->
                                            <div class="single-item">
                                                <div class="item-flag">
                                                    <div class="flag">
                                                        <img src="assets/images/flag/flag-4.png" alt="Flag">
                                                    </div>
                                                    <div class="title">USA</div>
                                                </div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 30%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>30%</span> (306)</p>
                                                </div>
                                            </div>
                                            <!-- Single Item End -->

                                            <!-- Single Item Start -->
                                            <div class="single-item">
                                                <div class="item-flag">
                                                    <div class="flag">
                                                        <img src="assets/images/flag/flag-1.png" alt="Flag">
                                                    </div>
                                                    <div class="title">Brazil</div>
                                                </div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 90%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>90%</span> (835)</p>
                                                </div>
                                            </div>
                                            <!-- Single Item End -->

                                            <!-- Single Item Start -->
                                            <div class="single-item">
                                                <div class="item-flag">
                                                    <div class="flag">
                                                        <img src="assets/images/flag/flag-5.png" alt="Flag">
                                                    </div>
                                                    <div class="title">Belgium</div>
                                                </div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 10%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>10%</span> (152)</p>
                                                </div>
                                            </div>
                                            <!-- Single Item End -->

                                            <!-- Single Item Start -->
                                            <div class="single-item">
                                                <div class="item-flag">
                                                    <div class="flag">
                                                        <img src="assets/images/flag/flag-6.png" alt="Flag">
                                                    </div>
                                                    <div class="title">Azerbaijan</div>
                                                </div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 50%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>50%</span> (635)</p>
                                                </div>
                                            </div>
                                            <!-- Single Item End -->

                                        </div>

                                        <!-- Page Pagination End -->
                                        <div class="page-pagination">
                                            <ul class="pagination justify-content-center">
                                                <li><a href="#"><i class="icofont-rounded-left"></i></a></li>
                                                <li><a class="active" href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- Page Pagination End -->
                                    </div>
                                    <!-- Student's Widget End -->
                                </div>

                                <div class="col-xxl-4">
                                    <!-- Student's Widget Start -->
                                    <div class="single-student-widget widget-color-02">
                                        <h4 class="widget-title">30 Languages</h4>

                                        <div class="widget-items">

                                            <!-- Single Item Start -->
                                            <div class="single-item">
                                                <div class="title">1. English</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 80%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>80%</span> (538)</p>
                                                </div>
                                            </div>
                                            <!-- Single Item End -->

                                            <!-- Single Item Start -->
                                            <div class="single-item">
                                                <div class="title">2. Spanish</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 2.5%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>2.5%</span> (189)</p>
                                                </div>
                                            </div>
                                            <!-- Single Item End -->

                                            <!-- Single Item Start -->
                                            <div class="single-item">
                                                <div class="title">3. French</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 6.8%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>6.8%</span> (263)</p>
                                                </div>
                                            </div>
                                            <!-- Single Item End -->

                                            <!-- Single Item Start -->
                                            <div class="single-item">
                                                <div class="title">4. Arabic</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 92%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>92%</span> (794)</p>
                                                </div>
                                            </div>
                                            <!-- Single Item End -->

                                            <!-- Single Item Start -->
                                            <div class="single-item">
                                                <div class="title">5. Greek</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 9.2%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>9.2%</span> (212)</p>
                                                </div>
                                            </div>
                                            <!-- Single Item End -->

                                            <!-- Single Item Start -->
                                            <div class="single-item">
                                                <div class="title">6. Russian</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 83%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>83%</span> (516)</p>
                                                </div>
                                            </div>
                                            <!-- Single Item End -->

                                        </div>

                                        <!-- Page Pagination End -->
                                        <div class="page-pagination">
                                            <ul class="pagination justify-content-center">
                                                <li><a href="#"><i class="icofont-rounded-left"></i></a></li>
                                                <li><a class="active" href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- Page Pagination End -->
                                    </div>
                                    <!-- Student's Widget End -->
                                </div>

                                <div class="col-xxl-4">
                                    <!-- Student's Widget Start -->
                                    <div class="single-student-widget widget-color-03">
                                        <h4 class="widget-title">Additional Student Interests</h4>

                                        <div class="widget-items">

                                            <!-- Single Item Start -->
                                            <div class="single-item">
                                                <div class="title">1. WordPress</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 80%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>80%</span> (538)</p>
                                                </div>
                                            </div>
                                            <!-- Single Item End -->

                                            <!-- Single Item Start -->
                                            <div class="single-item">
                                                <div class="title">2. SEO</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 25%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>25%</span> (189)</p>
                                                </div>
                                            </div>
                                            <!-- Single Item End -->

                                            <!-- Single Item Start -->
                                            <div class="single-item">
                                                <div class="title">3. Python</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 60%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>60%</span> (263)</p>
                                                </div>
                                            </div>
                                            <!-- Single Item End -->

                                            <!-- Single Item Start -->
                                            <div class="single-item">
                                                <div class="title">4. Marketing</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 92%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>92%</span> (794)</p>
                                                </div>
                                            </div>
                                            <!-- Single Item End -->

                                            <!-- Single Item Start -->
                                            <div class="single-item">
                                                <div class="title">5. Development</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 39%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>39%</span> (212)</p>
                                                </div>
                                            </div>
                                            <!-- Single Item End -->

                                            <!-- Single Item Start -->
                                            <div class="single-item">
                                                <div class="title">6. UX Design</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 83%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>83%</span> (516)</p>
                                                </div>
                                            </div>
                                            <!-- Single Item End -->

                                        </div>

                                        <!-- Page Pagination End -->
                                        <div class="page-pagination">
                                            <ul class="pagination justify-content-center">
                                                <li><a href="#"><i class="icofont-rounded-left"></i></a></li>
                                                <li><a class="active" href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- Page Pagination End -->
                                    </div>
                                    <!-- Student's Widget End -->
                                </div>
                            </div>
                        </div>
                        <!-- Student's Widget End -->

                        <!-- New Courses Start -->
                        <div class="new-courses" style="background-image: url(assets/images/new-courses-banner.jpg);">
                            <div class="new-courses-title">
                                <h3 class="title">Your students want to learn more. <br> Consider creating new courses to meet that deman.</h3>
                            </div>
                            <img class="shape d-none d-xl-block" src="assets/images/shape/shape-27.png" alt="Shape">
                            <div class="new-courses-btn">
                                <a href="#" class="btn">Create New Course <i class="icofont-rounded-right"></i></a>
                            </div>
                        </div>
                        <!-- New Courses End -->

                    </div>
                </div>
                <!-- Page Content Wrapper End -->


@endsection
