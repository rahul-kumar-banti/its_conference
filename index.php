<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$login = false;
if (isset($_SESSION["id"])) {
  $login = true;
}

?>

<head>
  <meta charset="utf-8">
  <title>I.T.S. - National Conference 2020</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="NGCTND,ITS,ITS mohannagar,intstitute of technology and science,ngctnd2020" name="keywords">
  <meta content=" Two Days National Conference “Next Generation Computing Technologies and their role in Nation Development”
              is being organized by Institute of Technology & Science, Ghaziabad sponsored by All India Council
              Technical Education(AICTE), Technically Sponsored by Computer Society of India(CSI) ." name="description">

  <?php
  include_once("./includes/css-lib.php");
  ?>

  <script src="./js/login-process.js"></script>
</head>

<body>
  
  <!-- <div class="popfirst">
    <div class="popupcontent">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="card" style="width:400px">
            <span class="closepopup">&times;</span>
            <img class="card-img cimg profile-img" src="./assets/images/dummyperson.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title profile-name">John Doe</h4>
              <h6 class="profile-disc">gg</h6>
              <p class="card-text profile-line">Some example text.
                gggg
                fdfdf
                cdfd
              </p>

            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </div> -->
  <!--==========================
    Header
  ============================-->

  <?php
  include_once("./includes/header.php");

  ?>



  <!--==========================
    Intro Section
  ============================-->

  <section id="intro">
    <div class="intro-container wow fadeIn">
      <!-- <div class="eminent-speaker">
        <h6 id="btnShowPopup">Eminent Speaker</h6>
        <div class="card MyPopup " style="width:auto;margin-top: 0;">

          <img class="card-img-top spk-top-img" src="./assets/images/dummyperson.jpg" alt="Card image">
          <div class="card-body card-body-spk">
            <h4 class="card-title spk-txt">John Doe</h4>
            <div class=" spk-txt1">Update Soon.</div>
            <button class="btn btn-primary speaker-profile" id="1"> See Profile</button>
          </div>
        </div>
      </div> -->
      <br>
      <br>
      <h1 class="mb-4 pb-0">I.T.S. ,Ghaziabad</h1>
      <p style="color: yellow;font-size:25px"> <i>Announces</i> </p>
      <h1><span style="font-size:1.30em; color: white;">02</span> Days<br>National Conference</h1>
      <p class="mb-4 pb-0"><span style="color: yellow;">“Next Generation Computing Technologies and their role in Nation
          Development" <br>
          (NGCTND-2019) </span></p>
      <p class="mb-4 pb-0">20<sup>th</sup> - 21<sup>st</sup> March 2020</p>
      <h4 style="color: rgb(248,34,73)">Experience at I.T.S.</h4>
      <a href="https://www.youtube.com/watch?v=zQAyKi6CqAM" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <!--==========================
 Change  Section 1
  ============================-->
      <h2 style="color:white;" > IMPORTANT DATES</h2>
      <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#msgshowhome">Open Modal</button> -->
      <table class="table table-borderless table-responsive imp-dates-table">
        <tbody>
          <tr>
            <td class="table-content">Abstract Submission Deadline </td>
            <td class="table-content-data">31 <sup> st</sup> January,2020</td>
          </tr>
          <tr>
            <td class="table-content">Paper Submission Deadline </td>
            <td class="table-content-data">10<sup> th</sup> Feburary,2020</td>
          </tr>
          <tr>
            <td class="table-content">Notice of Acceptance </td>
            <td class="table-content-data">25<sup> th</sup> Feburary,2020</td>
          </tr>
          <tr>
            <td class="table-content">Last Date of Registration </td>
            <td class="table-content-data">10<sup> th</sup> March,2020</td>
          </tr>
          <tr>
            <td class="table-content">Conference Date </td>
            <td class="table-content-data">20<sup> th</sup>-21<sup> st</sup> March,2020</td>
          </tr>

        </tbody>
      </table>
      <!--==========================
 Change  Section 1 ends
  ============================-->

      <!-- <a href="#about" class="about-btn scrollto">About The Event</a> -->

<div id="about1"></div>
    </div>

  </section>

  <!-- /////////// -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">

<div class="container">


  <div class="row">
    <div class="col-lg-8">
      <h2 class="content-center"><span class="contentabout">About The Event</span></h2>
      <p class="aboutits1">
        Two Days National Conference “Next Generation Computing Technologies and their role in Nation Development”
        is being organized by Institute of Technology & Science, Ghaziabad sponsored by All India Council
        Technical Education(AICTE), Technically Sponsored by Computer Society of India(CSI) .
        <br> The aim of Conference (NGCTND-2020) is to bring academicians, researchers, scholars, professionals,
        executives and practitioners of different disciplines together, to discuss and deliberate on new ideas and
        issues, finding out the solution for real environment problems breeding new trends on the theme of the
        conference i.e. Next Generation Computing Technologies and their role in Nation Development.


        <!-- </div>

    <div class="col-lg-4">-->
        <!-- <p class="aboutits1"> -->
        In recent times, the IT has had a great influence on every walk of human life including business,
        education and society. The penetration of IT-based solution is spreading by leaps and bounds in the
        developing countries like India. The recent technological innovations and developments have transformed
        the way we transact, communicate and share information resources. IT enthusiasts consider this
        transformation as one of the important solution for global challenge of 21st century for continuous growth
        of nation. This conference will comprise of talks delivered by experts from Academia, Government
        Organizations, Industry & Technology leaders and will contain technical sessions for research paper
        presentations.
      </p>
    </div>
    <div class="col-lg-4">
      <h3>Venue</h3>
      <p>Institute of Technology & Science, Ghaziabad</p>
      <hr>
      <h3>Event Date</h3>
      <p>Thursday & Friday<br>20<sup>th</sup>-21<sup>st</sup> March,2020</p>
      <div class="row">
        <div class="col-md-12">
          <div class="carousel-wrap">
            <div class="owl-carousel">
              <div class="item"><img src="./assets/images/cxo 4 2019.JPG"></div>
              <div class="item"><img src="./assets/images/cxo1.JPG"></div>
              <div class="item"><img src="./assets/images/cxo 2019.JPG"></div>
              <div class="item"><img src="./assets/images/cxo2 2019.JPG"></div>
              <div class="item"><img src="./assets/images//cxo3.JPG"></div>
              <!-- <div class="item"><img src="http://placehold.it/150x150"></div>
                  <div class="item"><img src="http://placehold.it/150x150"></div>
                  <div class="item"><img src="http://placehold.it/150x150"></div>
                  <div class="item"><img src="http://placehold.it/150x150"></div>
                  <div class="item"><img src="http://placehold.it/150x150"></div>
                  <div class="item"><img src="http://placehold.it/150x150"></div>
                  <div class="item"><img src="http://placehold.it/150x150"></div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


</div>

<div id="about1"></div>
</section>

    <!-- about us and its section=============================== -->

  
    <div class="cta aboutus" id="ITS">

      <div class="container">
        <div class="row">
          <div class="col-md-12 aboutus-section-1 jumbotron-fluid justify-content-around">

            <div class="section-header1">
              <h2><span class="contentabout">About I.T.S. The Education Group</span></h2>
            </div>
            <div class="aboutus-content">
              <div class="row">
                <div class="col-md-5">
                  <img src="./assets/images/its_esucation_group.jpg" class="img-fluid">
                </div>

                <div class="col-md-7">
                  I.T.S. – The Education Group, under Durga Charitable Society,
                  established its first campus at Mohan Nagar, Ghaziabad in 1995.
                  The group is committed to its vision of creating a thinking professional order.
                  The group has eminent field specialists and acclaimed management gurus as faculty
                  and guest faculty, perseverant and committed set of students, alumni network and a
                  strong corporate nexus that has helped in building I.T.S., a premier group of institutions.
                  I.T.S. takes pride in providing knowledge and competencies in the areas of Management,
                  Information Technology, Dental Science , Engineering , Biotechnology, Paramedical
                  Sciences and Pharmacy. click here for: <a href="https://www.its.edu.in" target="_blank">
                    more details</a>)
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>
    </div>
    <!-- </div> -->

    <div class="cta aboutus" id="ITSI">


      <div class="container">
        <div class="row">
          <div class="col-md-12 aboutus-section-1 jumbotron-fluid justify-content-around">
            <div class="section-header1">
              <h2><span class="contentabout">About Institute of Technology & Science (I.T.S.)</span></h2>
            </div>
            <div class="aboutus-content">
              <div class="row">
                <div class="col-md-5">
                  <video autoplay="" muted="" loop="" class="img-fluid">
                    <source src="https://pg.its.edu.in/sites/all/themes/extrude/video/New_Tour.mp4" type="video/mp4">
                  </video>
                </div>

                <div class="col-md-7">
                  Institute of Technology & Science is a dynamic and innovative institute recognized as a leading
                  education provider in the domain of Management Studies and Information technology education was
                  established in the year 1995. The group is a name to reckon with in the ﬁeld of higher education and
                  has been consistently rated as one of India's Best Business Schools. The Institute is Accredited by
                  NAAC with 'A' Grade and 2nd in Ghaziabad, in Top 10 in UP and in Top 100 in India by NIRF Ranking.
                  I.T.S. is an ISO 9001-2015 certiﬁed institute.
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  Post Graduate Diploma in Management (PGDM) at I.T.S. is approved by AICTE, Ministry of HRD, Government
                  of India and was started in 1996. At I.T.S., the PGDM program has been created from the feedback, ideas
                  and inputs given by leading practicing managers and academicians’ world- wide, who are experts in
                  cross-functional areas. The Institute conducts MBA and MCA Programmes afﬁliated to AKTU, Lucknow. MCA
                  Program at I.T.S. is NBA Accredited. The institute offers its UG programme of BBA & BCA courses under
                  its academic portfolio affiliated to C.C.S University, Meerut.
                  <br>I.T.S. follows university pattern for curriculum delivery blended with students' access to state of
                  the art facilities and strong Industry Interface. I.T.S. focuses on high quality teaching and a
                  supportive learning environment. The Institute's aim is to help students achieve their goals by
                  developing their skills and giving them the opportunities to grow and become a better human being. The
                  Institute is committed to provide practice-oriented learning and a contemporary industry-focused
                  curriculum, driven by strong industry interface.


                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>

    </div>

    <!--==========================
      Speakers Section
    ============================-->

    <section id="invitedspeakers" class="wow fadeInUp c-justify-in-mobile">
      <div class="container">

        <div class="row" style="display: none;">
          <div class="col-lg-12 inspk">
            <div class="section-header1">
              <h2><span class="contentabout">Invited Speakers</span></h2>
              <!-- <p>Here are some of our speakers</p> -->
            </div>

            <div class="row">
              <div class="card-deck">
                <div class="card" style="width:400px">
                  <img class="card-img-top" src="./assets/images/dummyperson.jpg" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Update Soon.</p>
                    <button class="btn btn-primary speaker-profile" id="1"> See Profile</button>
                  </div>
                </div>
                <div class="card" style="width:400px">
                  <img class="card-img-top" src="./assets/images/dummyperson.jpg" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Update Soon.</p>
                    <button class="btn btn-primary speaker-profile" id="2">See Profile</button>
                  </div>
                </div>
                <div class="card" style="width:400px">
                  <img class="card-img-top" src="./assets/images/dummyperson.jpg" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Update Soon.</p>
                    <button class="btn btn-primary speaker-profile" id="3">See Profile</button>
                  </div>
                </div>
                <div class="card" style="width:400px">
                  <img class="card-img-top" src="./assets/images/dummyperson.jpg" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Update Soon.</p>
                    <button class="btn btn-primary speaker-profile" id="4">See Profile</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!--==========================
      Schedule Section
    ============================-->




    <!----<section id="schedule" class="section-with-bg">
      <div class="container2 wow fadeInUp">
        <div class="section-header">
          <h2>Event Schedule</h2>
          <p>Here is our event schedule</p>
        </div>

        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="./index.php#day-1" role="tab" data-toggle="tab">Day 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index.php#day-2" role="tab" data-toggle="tab">Day 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index.php#day-3" role="tab" data-toggle="tab">Day 3</a>
          </li>
        </ul>

        <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
          necessitatibus voluptatem quis labore perspiciatis quia.</h3> 

      <div class="tab-content row justify-content-center">
   

            <div class="calendar" id="events">
                <div class="container1">
                  <div class="row" >
                      <div class="col-xl-6 calendar_col">
                          <div class="calendar_container">
                            <div class="calendar_title_bar d-flex flex-row align-items-center justify-content-start">
                              <div>
                                <div class="calendar_icon"><img src="./assets/images/calendar.svg" alt=""></div>
                              </div>
                              <div class="calendar_title">23 april events calendar</div>
                            </div>
                            <div class="calendar_items">
        
                              <div
                                class="calendar_item d-flex flex-row align-items-center justify-content-start">
                                <div>
                                  <div class="calendar_item_image"><img src="./assets/images/event_8.jpg"
                                      alt=""></div>
                                </div>

                                <div class="calendar_item_time">
                                  <div>20:00</div>
                                  <div>Auditorium</div>
                                </div>
                                <div class="calendar_item_text">
                                  <div>Drinks and dinner</div>
                                  <div>08 AM - 04 PM</div>
                                  <div>Speaker: Daniel Hill</div>
                                </div>
                              </div>
        
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-6 calendar_col">
                            <div class="calendar_container">
                              <div class="calendar_title_bar d-flex flex-row align-items-center justify-content-start">
                                <div>
                                  <div class="calendar_icon"><img src="./assets/images/calendar.svg" alt=""></div>
                                </div>
                                <div class="calendar_title">23 april events calendar</div>
                              </div>
                              <div class="calendar_items">
          
                                <div
                                  class="calendar_item d-flex flex-row align-items-center justify-content-start">
                                  <div>
                                    <div class="calendar_item_image"><img src="./assets/images/event_8.jpg"
                                        alt=""></div>
                                  </div>
  
                                  <div class="calendar_item_time">
                                    <div>20:00</div>
                                    <div>Auditorium</div>
                                  </div>
                                  <div class="calendar_item_text">
                                    <div>Drinks and dinner</div>
                                    <div>08 AM - 04 PM</div>
                                    <div>Speaker: Daniel Hill</div>
                                  </div>
                                </div>
          
                              </div>
                            </div>
                          </div>
    
                  
                    </div>
    
                  </div>
                </div>
              </div>-->


    <!-- Schdule Day 1 -->
    <!----     <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

            <div class="row schedule-item">
              <div class="col-md-2"><time>09:30 AM</time></div>
              <div class="col-md-10">
                <h4>Registration</h4>
                <p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/1.jpg" alt="Brenden Legros">
                </div>
                <h4>Keynote <span>Brenden Legros</span></h4>
                <p>Facere provident incidunt quos voluptas.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                </div>
                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                </div>
                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                </div>
                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
                </div>
                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/6.jpg" alt="Willow Trantow">
                </div>
                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
              </div>
            </div>  

          </div>
         

        </div>

    </section> -->



    <section id="events" class="section-with-bg c-justify-in-mobile">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2><span class="contentabout">Event Schedule</span></h2>


        </div>
        <div class="row">
          <div class="col">
            <h4 class="updatesoon">Updated Soon...</h4>
          </div>
        </div>

        <!-- <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="./index.php#day-1" role="tab" data-toggle="tab">Day 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index.php#day-2" role="tab" data-toggle="tab">Day 2</a>
          </li>
         
        </ul> -->

        <!-- <h3 class="sub-heading" style="color:white">Next Generation Computing Technologies and their role in Nation Development<br> (NGCTND-2019)</h3> -->

        <div class="tab-content row justify-content-center">

          <!-- Schdule Day 1 -->
          <!-- <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

            <div class="row schedule-item">
              <div class="col-md-2"><time>08:30 AM Onwards</time></div>
              <div class="col-md-10">
                <h4>Registration</h4>
                             </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>9:30 AM </time></div>
              <div class="col-md-10">
                <h4>Inaugural Session <span style="color:white;font-size:16px"><br>	Welcome Address <br>
                    Event briefing <br>
                    Address by Chief Guest<br>
                    Address by Guest of Honour<br>
                    Address by Key note Speaker<br>
                    Release of Proceedings<br>
                    Vote of thanks 
                    </span></h4>
                              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:45 AM </time></div>
              <div class="col-md-10">
                <h4> Morning Tea & Refreshment
                
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:15 AM</time></div>
              <div class="col-md-10">
                <h4>Technical Panel Sessions 
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>01:45 PM</time></div>
              <div class="col-md-10">
                
                <h4>Sessions for Paper Presentation </h4>
                              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
              
                <h4>Technical Panel Sessions<span></h4>
              
              </div>
            </div>

                
          </div> -->
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->

          <!-- <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-2">

              <div class="row schedule-item">
                <div class="col-md-2"><time>08:30 AM Onwards</time></div>
                <div class="col-md-10">
                  <h4>Registration</h4>
                               </div>
              </div>
  
              <div class="row schedule-item">
                <div class="col-md-2"><time>9:30 AM </time></div>
                <div class="col-md-10">
                  <h4>Inaugural Session <span style="color:white;font-size:16px"><br>	Welcome Address <br>
                      Event briefing <br>
                      Address by Chief Guest<br>
                      Address by Guest of Honour<br>
                      Address by Key note Speaker<br>
                      Release of Proceedings<br>
                      Vote of thanks 
                      </span></h4>
                                </div>
              </div>
  
              <div class="row schedule-item">
                <div class="col-md-2"><time>10:45 AM </time></div>
                <div class="col-md-10">
                  <h4> Morning Tea & Refreshment
                  
                </div>
              </div>
  
              <div class="row schedule-item">
                <div class="col-md-2"><time>11:15 AM</time></div>
                <div class="col-md-10">
                  <h4>Technical Panel Sessions 
                </div>
              </div>
  
              <div class="row schedule-item">
                <div class="col-md-2"><time>01:45 PM</time></div>
                <div class="col-md-10">
                  
                  <h4>Sessions for Paper Presentation </h4>
                                </div>
              </div>
  
              <div class="row schedule-item">
                <div class="col-md-2"><time>04:00 PM</time></div>
                <div class="col-md-10">
                
                  <h4>Valedictory Session, Best Paper Award and<br> Certificate Distribution Ceremony<span></h4>
                
                </div>
              </div>
  
          </div>-->
          <!-- End Schdule Day 2 -->


        </div>

      </div>

    </section>

    <!--==========================
      Venue Section
    ============================-->


    <!-- <section id="venue" class="wow fadeInUp">

      <div class="container-fluid">

        <div class="section-header">
          <h2>Event Venue</h2>
          <p>Event venue location info and gallery</p>
        </div>

        <div class="row no-gutters">
          <div class="col-lg-6 venue-map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
              frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6 venue-info">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-8">
                <h3>Downtown Conference Center, New York</h3>
                <p>Iste nobis eum sapiente sunt enim dolores labore accusantium autem. Cumque beatae ipsam. Est quae sit
                  qui voluptatem corporis velit. Qui maxime accusamus possimus. Consequatur sequi et ea suscipit enim
                  nesciunt quia velit.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="container-fluid venue-gallery-container">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/1.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/2.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/3.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/4.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/5.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/6.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/7.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/8.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>
      </div>

    </section> -->

    <!--==========================
      Hotels Section
    ============================-->
    <!-- <section id="hotels" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Hotels</h2>
          <p>Her are some nearby hotels</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="img/hotels/1.jpg" alt="Hotel 1" class="img-fluid">
              </div>
              <h3><a href="./index.php#">Hotel 1</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>0.4 Mile from the Venue</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="img/hotels/2.jpg" alt="Hotel 2" class="img-fluid">
              </div>
              <h3><a href="./index.php#">Hotel 2</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
              </div>
              <p>0.5 Mile from the Venue</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="img/hotels/3.jpg" alt="Hotel 3" class="img-fluid">
              </div>
              <h3><a href="./index.php#">Hotel 3</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>0.6 Mile from the Venue</p>
            </div>
          </div>

        </div>
      </div>

    </section> -->

    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery" class="wow fadeInUp">

      <div class="container">
        <div class="row">
          <div class="col">
            <div class="section-header">
              <h2><span class="contentabout">Gallery</span></h2>
            </div>

          </div>
        </div>

        <div class="owl-carousel gallery-carousel">


          <a href="./assets/images/gallery12.jpeg" class="venobox" data-gall="gallery-carousel"><img
              src="./assets/images/gallery12.jpeg" alt=""></a>
          <a href="./assets/images/gallery13.jpeg" class="venobox" data-gall="gallery-carousel"><img
              src="./assets/images/gallery13.jpeg" alt=""></a>
          <a href="./assets/images/gallery14.JPpeg" class="venobox" data-gall="gallery-carousel"><img
              src="./assets/images/gallery14.jpeg" alt=""></a>

          <a href="./assets/images/gallery7.JPG" class="venobox" data-gall="gallery-carousel"><img
              src="./assets/images/gallery7.JPG" alt=""></a>
          <a href="./assets/images/gallery8.JPG" class="venobox" data-gall="gallery-carousel"><img
              src="./assets/images/gallery8.JPG" alt=""></a>

          <a href="./assets/images/gallery1.JPG" class="venobox" data-gall="gallery-carousel"><img
              src="./assets/images/gallery1.JPG" alt=""></a>
          <a href="./assets/images/gallery2.JPG" class="venobox" data-gall="gallery-carousel"><img
              src="./assets/images/gallery2.JPG" alt=""></a>
          <a href="./assets/images/gallery3.JPG" class="venobox" data-gall="gallery-carousel"><img
              src="./assets/images/gallery3.JPG" alt=""></a>
          <a href="./assets/images/gallery4.JPG" class="venobox" data-gall="gallery-carousel"><img
              src="./assets/images/gallery4.JPG" alt=""></a>
          <a href="./assets/images/gallery11.jpeg" class="venobox" data-gall="gallery-carousel"><img
              src="./assets/images/gallery11.jpeg" alt=""></a>
          <a href="./assets/images/gallery9.JPG" class="venobox" data-gall="gallery-carousel"><img
              src="./assets/images/gallery9.JPG" alt=""></a>
          <a href="./assets/images/gallery10.JPG" class="venobox" data-gall="gallery-carousel"><img
              src="./assets/images/gallery10.JPG" alt=""></a>
        </div>


    </section>
    </div>

    <!--==========================
      Guideline Section
    ============================-->




    <section id="guidelines" class="c-justify-in-mobile" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header1">
              <h2><span class="contentabout">Guidelines</span></h2>
            </div>
            <div class="call-for-paper-table" style="overflow:scroll">
              <h5 class="call-for-paper-heading" style="margin: 2%;color: ./index.php#505bda; text-align: center;">
                <b> Authors are invited for paper submission in different categories concerning theory, practices and
                  applications of emerging computing technologies including, but not limited to:</b>

              </h5>
              <table class="table table-borderless text-center small guidelines-table table-responsive  table-striped " style="margin-left:2%;">
                <tbody>
                  <tr>
                    <td>ICT</td>
                    <td>E Governance</td>
                    <td>Artificial Neural Networks</td>
                  </tr>
                  <tr>
                    <td>Mobile computing</td>
                    <td>Soft Computing</td>
                    <td>Knowledge Management</td>
                  </tr>
                  <tr>
                    <td>Bio Informatics</td>
                    <td>Software Engineering</td>
                    <td>Agile Computing</td>
                  </tr>
                  <tr>
                    <td>Expert Systems</td>
                    <td>Image Processing</td>
                    <td>ICT in Nation Building</td>
                  </tr>
                  <tr>
                    <td>E-Commerce</td>
                    <td>ERP and CRM</td>
                    <td>Knowledge Mining</td>
                  </tr>
                  <tr>
                    <td>Robotics</td>
                    <td>Signal Processing</td>
                    <td>Systems Modelling</td>
                  </tr>
                  <tr>
                    <td>Web Mining</td>
                    <td>Cloud Computing</td>
                    <td>Autonomic Computing</td>
                  </tr>
                  <tr>
                    <td>Grid Computing</td>
                    <td>Ubiquitous Computing</td>
                    <td>Data Science</td>
                  </tr>
                  <tr>
                    <td>IoT</td>
                    <td>Green Computing</td>
                    <td>Recent Trends in Databases and Future Directions</td>

                  </tr>
                  <tr>
                    <td>IT & its Impact on core business Functions </td>
                    <td>IT in Business Soluctions </td>
                    <td>Innovation & Entrepreneur </td>
                  </tr>
                  <tr>
                    <td>Data Mining and Business Intelligence</td>
                    <td>Any real life aspects of communication technologies</td>
                    <td>Knowledge discovery</td>
                  </tr>
                </tbody>
              </table>
              <h6 class="text-center font-weight-bold" style="color: black;"><sup>*</sup> For Paper Guideline ,Click <a href="./assets/download/Conference-template.doc" download>Conference Template </a></h6>
            </div>
          </div>
        </div>
         </section> <!--==========================Buy Ticket Section============================-->
          <section id="fees" class="section-with-bg wow fadeInUp">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="section-header1">
                    <h2><span class="contentabout">Registration Fees</span></h2>
                  </div>
                </div>
              </div>

              <div class="row">

                <div class="col-lg-4">
                  <div class="card mb-5 mb-lg-0 text-center">
                    <div class="card-header text-primary">
                      <b>academician</b>
                    </div>
                    <div class="card-body">
                      <!-- <h5 class="card-title text-uppercase text-center" style="color:./index.php#505bda">
                  </h5>
                <hr> -->

                      <table class="table table-borderless guide-table">
                        <tbody>
                          <tr>
                            <td>Paper Presentation</td>
                            <td>Rs. 1500/-</td>
                          </tr>
                          <tr>
                            <td>Poster Presentation</td>
                            <td>Rs. 750/-</td>
                          </tr>


                        </tbody>
                      </table>


                      <!-- <h6 class="card-title text-muted text-uppercase text-center"> </h6> -->
                      <!----<div class="text-center">
                  <button type="button" class="btn" data-toggle="modal" data-target="./index.php#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
                </div>-->
                    </div>
                    <div class="card-footer text-primary ">
                      <b><sup>*</sup>Extra Proceedings cost Rs.
                        500/- </b>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card mb-5 mb-lg-0 text-center">
                    <div class="card-header text-primary">
                      <b>Student/Research Scholor</b>
                    </div>
                    <div class="card-body">
                      <!-- <h5 class="card-title text-uppercase text-center" style="color:./index.php#505bda">
                 </h5>
                <hr> -->

                      <table class="table table-borderless guide-table">
                        <tbody>
                          <tr>
                            <td>Paper Presentation</td>
                            <td>Rs. 750/-</td>
                          </tr>
                          <tr>
                            <td>Poster Presentation</td>
                            <td>Rs. 500/-</td>
                          </tr>


                        </tbody>
                      </table>



                      <!----<div class="text-center">
                    <button type="button" class="btn" data-toggle="modal" data-target="./index.php#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
                  </div>-->
                    </div>
                    <div class="card-footer text-primary ">
                      <b><sup>*</sup>Extra Proceedings cost Rs.
                        500/- </b>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card mb-5 mb-lg-0 text-center">
                    <div class="card-header text-primary">
                      <b>Industry Deligates</b>
                    </div>
                    <div class="card-body">

                      <table class="table table-borderless guide-table">
                        <tbody>
                          <tr>
                            <td>Paper Presentation</td>
                            <td>Rs. 2000/-</td>
                          </tr>
                          <tr>
                            <td>Poster Presentation</td>
                            <td>Rs. 1000/-</td>
                          </tr>


                        </tbody>
                      </table>

                      <!----<div class="text-center">
                      <button type="button" class="btn" data-toggle="modal" data-target="./index.php#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
                    </div>-->
                    </div>
                    <div class="card-footer text-primary ">
                      <b><sup>*</sup>Extra Proceedings cost Rs.
                        500/- </b>
                    </div>
                  </div>
                </div>


          </section>
          <!--==========================
      Payment Details Section
    ============================-->
          <section id="paymentdetails">
            <div class="container wow fadeInUp">
              <div class="row ">
                <div class="col">
                  <div class="section-header1">
                    <h2><span class="contentabout">Payment Details</span></h2>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 payment-details text-center">
                  <h4 style="color:#505bda;">Registration fees should be paid through Demand Draft/ NEFT</h4>
                  <ul type="none" style="color:black">
                    <l1> <b>Demand Draft</b> Should be drawn in favor of
                      “Institute of Technology & Science, Payable at Delhi”</l1>
                    <li>
                      <b>For NEFT:</b>
                    </li>
                  </ul>
                  <div class="row">
                    <div class="col-md-6">
                    <table class="table table-borderless small imp-dates-table1 table-responsive">
                    <tbody>
                      <tr>
                        <td class="table-content1">Detail of bank Account </td>
                        <td class="table-content-data1"> Ghaziabad</td>
                        
                      </tr>
                      <tr>

                      </tr>
                      <tr>
                        <td class="table-content1">Address of Bank </td>
                        <td class="table-content-data1">Syndicate Bank, Navyug Market, Ghaziabad</td>
                       
                      </tr>
                      <tr>

                      </tr>
                      <tr>

                        <td class="table-content1">IFSC Code </td>
                        <td class="table-content-data1">SYNB0008556</td>
                      </tr>

                    </tbody>
                  </table>
                    </div>
                    <div class="col-md-6">
                    <table class="table table-borderless small imp-dates-table1 table-responsive">
                    <tbody>
                      <tr>
                        
                        <td class="table-content1">Name of the account </td>
                        <td class="table-content-data1"> Institute of Technology and science</td>
                      </tr>
                      <tr>

                      </tr>
                      <tr>
                        
                        <td class="table-content1">A/C No </td>
                        <td class="table-content-data1">85563060000023</td>
                      </tr>
                      <tr>

                      </tr>
                     

                    </tbody>
                  </table>
                    </div>
                  </div>
                  
                  <h5>In case of ay query, pl email us at <a href="mailto:ngcnd2020@its.edu.in">ngcnd2020@its.edu.in.</a></h5>
                </div>
              </div>
            </div>
          </section>
          <!--==========================
      Committee Members Section
    ============================-->
    <section id="committee">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="section-header1">
                    <h2><span class="contentabout">Committees</span></h2>
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="col-md-3 col-lg-3">
                  <h3 class="committee-heading">Chief Patrons</h3>
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="./assets/images/comm1.jpg">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Dr. R.P. Chadha</h3>
                      <h4 class="title">Chairman <br>I.T.S. - The Education Group</h4>
                    </div>
                    <ul class="social">


                    </ul>
                  </div>


                </div>
                <div class="col-md-6 col-lg-6">
                  <h3 class="committee-heading">Patrons</h3>
                  <div class="row">

                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="our-team">
                        <div class="picture">
                          <img class="img-fluid" src="./assets/images/comm2.jpg">
                        </div>
                        <div class="team-content">
                          <h3 class="name">Shri Arpit Chadha</h3>
                          <h4 class="title"> Vice Chairman<br>I.T.S. - The Education Group</h4>
                        </div>
                        <ul class="social">


                        </ul>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="our-team">
                        <div class="picture">
                          <img class="img-fluid" src="./assets/images/comm3.jpg">
                        </div>
                        <div class="team-content">
                          <h3 class="name">Shri B.K. Arora </h3>
                          <h4 class="title">Secretary<br>I.T.S. - The Education Group</h4>
                        </div>
                        <ul class="social">

                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col=lg-3">
                  <h3 class="committee-heading">Conference Chair</h3>
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="./assets/images/comm4.jpg">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Dr. Sunil Kumar Pandey</h3>
                      <h4 class="title"> Director(IT)<br>I.T.S., Ghaziabad</h4>
                    </div>
                    <ul class="social">


                    </ul>
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="col">
                  <h2 class="committee-heading">Conveners</h2>
                </div>
              </div>
              <div class="row">
                
                    <div class="special1"></div>
                <div class=" col-sm-6 col-md-4 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="./assets/images/Dr Umang.png">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Dr. Umang</h3>
                      <h4 class="title">Associate Professor,<br>I.T.S.,Ghaziabad</h4>
                    </div>
                    <ul class="social">


                    </ul>
                  </div>
                </div>
                <div class=" col-sm-6 col-md-4 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="./assets/images/tyz.jpeg">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Dr. Tazyn Rahman</h3>
                      <h4 class="title">Associate Professor,<br>I.T.S.,Ghaziabad</h4>
                    </div>
                    <ul class="social">


                    </ul>
                  </div>
                </div>
               
              </div>
              <div class="row">
                <div class="col">
                  <h2 class="committee-heading">Core Organization Committee </h2>
                </div>
              </div>
              <div class="row">
                <div class=" col-sm-6 col-md-3 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="./assets/images/Prof Abhay Ray.png">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Prof. Abhay Kr. Ray</h3>
                      <h4 class="title">Asstt. Professor</h4>
                    </div>
                    <ul class="social">


                      <li><a href="mailto: abhayray@its.edu.in" class=" fa fa-envelope" aria-hidden="true"></a></li>

                    </ul>
                  </div>
                </div>

                <div class=" col-sm-6 col-md-3 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="./assets/images/KPS.jpg">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Prof. K.P. Singh</h3>
                      <h4 class="title">Asstt. Professor</h4>
                    </div>
                    <ul class="social">


                      <li><a href="mailto:kpsingh@its.edu.in" class=" fa fa-envelope" aria-hidden="true"></a></li>

                    </ul>
                  </div>
                </div>
                <div class=" col-sm-6 col-md-3 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="./assets/images/144.png">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Prof. Puja Dhar</h3>
                      <h4 class="title">Asstt. Professor</h4>
                    </div>
                    <ul class="social">


                      <li><a href="mailto:pujadhar@its.edu.in" class=" fa fa-envelope" aria-hidden="true"></a></li>

                    </ul>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="./assets/images/123456.jpg">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Prof. Saurabh Saxena</h3>
                      <h4 class="title">Asstt. Professor</h4>
                    </div>
                    <ul class="social">


                      <li><a href="mailto:saurabhsaxena@its.edu.in" class=" fa fa-envelope" aria-hidden="true"></a></li>

                    </ul>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class=" col-sm-6 col-md-3 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="./assets/images/129.png">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Prof. Smita Kansal</h3>
                      <h4 class="title"> Asstt. Professor </h4>
                    </div>
                    <ul class="social">


                      <li><a href="mailto: smitakansal@its.edu.in" class="fa fa-envelope" aria-hidden="true"></a></li>

                    </ul>
                  </div>
                </div>

                <div class=" col-sm-6 col-md-3 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="./assets/images/Vijay.jpg">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Dr. Vijay Prakash Gupta</h3>
                      <h4 class="title">Asstt. Professor</h4>
                    </div>
                    <ul class="social">


                      <li><a href="mailto:vijayprakashgupta@its.edu.in" class="fa fa-envelope" aria-hidden="true"></a>
                      </li>

                    </ul>
                  </div>
                </div>
                <div class=" col-sm-6 col-md-3 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="./assets/images/126.png">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Prof. Varun Arora</h3>
                      <h4 class="title">Asstt. Professor</h4>
                    </div>
                    <ul class="social">


                      <li><a href="mailto:varunarora.ka@its.edu.in" class="fa fa-envelope" aria-hidden="true"></a></li>

                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="./assets/images/Yamini.jpg">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Dr. Yamini Negi</h3>
                      <h4 class="title">Asstt. Professor</h4>
                    </div>
                    <ul class="social">


                      <li><a href="mailto:yamininegi@its.edu.in" class="fa fa-envelope" aria-hidden="true"></a></li>

                    </ul>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <h2 class="committee-heading">Advisory Board</h2>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <h2 class="committee-heading">Technical Program Committee</h2>
                </div>
              </div>

            </div>
      </div>

      <!-- <div class="container">
        <div class="section-header">
          <h2>COMMITTEE</h2>
          <p>Here is our committee members</p>
        </div>


        <div class="row committee-heading">
          <div class="col-md-12"> PATRON </div>
        </div>
        <div class="row committee-content">
          <div class="col-md-3"><b>Dr. R.P Chadha</b> <br> Chairman<br> I.T.S. - The Education Group </div>
          <div class="col-md-3"><b>Shri. Arpit Chadha</b> <br> Vice Chairman<br> I.T.S. - The Education Group </div>
          <div class="col-md-3"><b> Shri B.K Arora</b> <br> Secretary<br> I.T.S. - The Education Group </div>
          <div class="col-md-3"><b>Shri S.K Sood</b><br> Director(PR)<br> I.T.S. - The Education Group </div>
        </div>

        <div class="row committee-heading">
          <div class="col-md-12">CONVENER </div>

        </div>
        <div class="row committee-content">
          <div class="col-md-12"><b>Dr. Sunil Kr. Pandey</b><br> Director IT<br> I.T.S. Mohan Nagar ,Ghaziabad </div>

        </div>

      </div> -->
    </section>

<!-- ====================
paper submission process
======================== -->

<section id="paper_submission">
      <div class="container">
        <div class="row">
          <div class="col-md-12 aboutus-section-1 jumbotron-fluid justify-content-around">
            <div class="section-header1">
              <h2><span class="contentabout">Paper Submission Process</span></h2>
            </div>
            <div class="aboutus-content">
              <div class="row">
                <div class="col-md-5">
<img src="./assets/images/conv.jpeg" class="img img-fluid">
                </div>

                <div class="col-md-7 aboutits1">
                  Guidelines for formatting the paper template can be downloaded from <b>“Download Section”
                    <a href="./assets/download/Conference-template.doc"
                      download="Conference_Tempelate">www.its.edu.in/ngctnd2020</a>.</b>
                  Each submitted paper should contain an Abstract of not more than 200 words and should be uploaded
                  online
                  as per template after doing Login.
                  In case of any query, author can directly <b>E-mail at the <a href="mailto:ngctnd2020@its.edu.in">
                      Ngctnd2020@its.edu.in.</a></b>
                  All submitted papers will be reviewed by paper reviewing committee. All the contributors whose papers
                  are
                  approved by the review committee shall be intimated and all such contributors would be required to
                  register themselves by sending the duly filled-in registration form and 
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 aboutits1">
                copyright form(Available at
                  Download Section) along with the required registration fee on or before due
                  date for registration to ensure its presentation and inclusion in the Proceedings being published for
                  this
                  conference.
                  ll the accepted papers may be edited, if required, by the Editorial Team. Authors must note that
                  submitted paper should not have published/ submitted/ accepted in any other journal/conference.
                  Selected papers will be published in the proceeding hard copy of the conference bearing a unique ISBN
                  number. After the conference, selected/extended version of papers shall be published in bestowed with
                  all
                  Journals indexing privileges in academic databases
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="row">
          <div class="col">
            <div class="section-header1">
              <h2><span class="contentabout">Contact Us</span></h2>
            </div>
          </div>
        </div>

        <div class="row contact-info" style="color:white;">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>
                Institute of Technology & Science,<br> Mohan Nagar, Ghaziabad
                <br> GT Road, 201007
              </address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+91 8447744063">8447744063</a></p>
              <p><a href="tel:+919910055457">9910055457</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:ngctnd2020@its.edu.in">ngctnd2020@its.edu.in</a></p>
            </div>
          </div>

        </div>
        <div class="row">

          <div class="col-sm-12">
            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Institute%20of%20Technology%20and%20Science%20%20Mohan%20Nagar%2C%20Ghaziabad-201007&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="350" style="border:0; margin-top:20px;" allowfullscreen=""></iframe>


          </div>
        </div>

        <!-- <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                  data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required"
                data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div> -->

      </div>
    </section><!-- ./index.php#contact -->

  </main>


  <!--==========================
    Footer
  ============================-->
  <?php
  include_once("./includes/footer.php");
  ?>


</body>

</html>