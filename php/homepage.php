/*
@author: lxynox
@date: 20, Aug, 2015
@desc: 
	use php to create static html-based website;
	encapsulation makes it easier for maintainence && expanding functionalities
  shortens the period of updating contents, thus creates a more robust and more
  flexible software systems. 
*/
<php
class Homepage {
	// member variables
	public $title;
	public $navigator;
  public $footer;
  public $home-carouse;
	public $home-content;

	// public functions
  public function Display() {
    DisplayTitle();
    DisplayStyles();
    DisplayNavigator();
    DisplayHomeCarouse();
    DisplayHomeContent();
    DisplayFooter();
  }

  // private functions 
	protected function DisplayTitle() {
		echo "<title>" . $title . "</title>";	
	}
	protected function DisplayStyles() {
?>
<style>
	/*style contents go here */
</style>
<php	
	}
	protected function DisplayNavigator() {
?>
<!-- Nav Bar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Xuanyu's Home</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <!-- nav items -->
          <li><a href="#about-me">about me</a></li>
          <li><a href="#contact">contact</a></li>
          <li><a href="#android">android</a></li>
          <li><a href="#software-engineering">software engineering</a></li>
          <li><a href="#resume">resume</a></li>
<!-- TODO: dropdown section to be extended 
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section61">Section 4-1</a></li>
              <li><a href="#section62">Section 4-2</a></li>
            </ul>
          </li> -->
        </ul>
      </div>
    </div>
  </div>
</nav>

<php
	}
	protected function DisplayHomeCarouse() {
?>
<!-- main page(first page) - jumbotron -->
<div class="jumbotron"  style="margin-bottom:0">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/wpi.jpg" alt="Chania">
      </div>

      <div class="item">
        <img src="images/bit.jpg" alt="Chania">
      </div>

      <div class="item">
        <img src="images/yangzhou.jpg" alt="my undergraduate school">
      </div>

      <div class="item">
        <img src="images/beijing.jpg" alt="my graduate school">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- container class within the jumbotron -->
  <div class="container">
    <h1><small>Welcome to Xuanyu's home</small></h1>   
    <!-- column seperators: divide into to 4 columns, with width of 3-units each -->
    <div class="row">
      <div class="col-md-3">
        <p>Worcester Polytechnic Institute(WPI) - my graduate school</p>
      </div>
      <div class="col-md-3">        
        <p>Beijing Institute of Technology(BIT) - my undergraduate school</p>      
      </div>
      <div class="col-md-3">        
        <p>Yangzhou(city) - my hometown</p>      
      </div>
      <div class="col-md-3">        
        <p>China - my homeland</p>
      </div>
    </div>
    <!-- progress bar: striped + scrolling active -->
  <!--   <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
      <p><i>continue on updating ......</i></p>
    </div> -->
  </div>
</div>

<php
	}
	protected function DisplayHomeContent() {
?>
<!-- about me -->
<div id="about-me" class="container-fluid"> 
  <h1>About Me</h1>
  <div class="container">
    <div id="about-me-wrapper" class="content-wrapper">
      <h2>Who Am I ?</h2>
      <div id="head_image">
          <img src="images/me.jpg" alt="images/me.png" width="150" height="150"> 
      </div>
      <p>I'm <b>Xuanyu Li</b>.</p> 
      <p>I'm currently working on the field of <b>Software Engineering</b> (J2EE && Android development).</p>
      <p>I'm a big fan of software and technology and their magical power that changes people's lives.</p>
      <p>
        Graduate student majoring in Electrical and Computer Engineering (ECE).
        Not okay with Analogs, interested in DSP, passonionate about software.
        Quick learner and qualified team worker all the time
      </p> 
      <h2>What Do I Like To Do ?</h2>
      <p>As a passionate coder, coding is always my passion <br>
        As a sports lover, both doing sports and watching games make me feel excited <br>
        As a chess player, thinking and analyzing always give me fun
      </p> 
      <h2>How To Contact Me ?</h2>
      <p>You can call me at (774)5785918 &nbsp; / &nbsp; mail me at <a href="mailto:xli6@wpi.edu">xli6@wpi.edu</a> <br>
        If you want to see some of my code, here is my <a href="http://www.github.com/lxynox">Github</a>
      </p>
      <h2>My Profile</h2>
      <p>Refer to my <a href="#resume">resume</a>, thx </p> 
      <h2>Photos && Works</h2>
      <!-- scroll image container -->
      <div id="image_slide">
        <ul>
          <li><a href="images/scroll_img/1.jpg">
            <img src="images/scroll_img/1.jpg" 
            alt="my family members" width="200" height="200"/></a>
          </li>
          <li><a href="images/scroll_img/2.jpg">
            <img src="images/scroll_img/2.jpg" 
            alt="https://www.github.com./lxynox/Writing-In-Air.git" width="200" height="200"/></a>
          </li>
          <li><a href="images/scroll_img/3.jpg">
            <img src="images/scroll_img/3.jpg"
            alt="https://github.com/lxynox/flight_ticket_search.git" width="200" height="200"/></a>
          </li>
          <li><a href="images/scroll_img/5.jpg">
            <img src="images/scroll_img/5.jpg" 
            alt="http://www.wpi.edu/" width="200" height="200"/></a>
          </li>
          <li><a href="images/scroll_img/4.jpg">
            <img src="images/scroll_img/4.jpg"
            alt="http://www.bit.edu.cn/" width="200" height="200"/></a>
          </li>
        </ul>
      </div>
      <!-- <div class="empty-spacing"></div> -->
    </div>
    <!-- empty spacing size of: 100px -->
    <div class="empty-spacing"></div>
  </div>
</div>
<!-- contact using php -->
<div id="contact" class="container-fluid">
  <h1>Contact</h1>
  <div id="contact-wrapper" class="content-wrapper">
      <div id="contact_nav">
        <ul>
          <li style="background-color:#750F19" 
            id="comments_leave_nav">Leave Comments</li>
          <li id="comments_view_nav" class="btn disabled">View Comments</li>
        </ul>
      </div>

      <div id="comments_leave_container" class="selector">
        <form action="" method="get" class="basic-grey">
          <h1>Contact Form
            <span>Please fill all the texts in the fields.</span>
          </h1>
          <label>
            <span>Your Name :</span>
            <input id="name" type="text" name="name" placeholder="Your Full Name" />
          </label>
          <label>
            <span>Your Email :</span>
            <input id="email" type="email" name="email" placeholder="Valid Email Address" />
          </label>
          <label>
            <span>Message :</span>
            <textarea id="message" name="message" placeholder="Your Message"></textarea>
          </label>
          <label>
            <span>Subject :</span>
            <select name="subject">
              <option value="Advice">Advice</option>
              <option value="Job Inquiry">Job Inquiry</option>
              <option value="No Subject">No Subject</option>
            </select>
          </label>
          <label>
            <span>&nbsp;</span>
            <input type="button" class="button" onclick="showComments()" value="Send" />
          </label>
        </form>
      </div>
      <div class="empty-spacing"></div>
  </div>
</div>
<!-- android -->
<div id="android" class="container-fluid">
  <h1>Android</h1>
  <div class="container">
    <div id="android-wrapper" class="content-wrapper">
      <div id="artifact">
          <!-- artifact 1 -->
          <h2 style="border-radius:20px 20px 0 0">Writing In Air</h2>
            <h3>User Interface</h3> 
            <ul class="ui_list">
              <li style="background:lightgrey">Home</li>
              <li>User Manual</li>
              <li>Background Service</li>
            </ul>
            <div class="artifact_image_frame">
              <ul class="artifact_image_container" id="artifact_image_container1">
                <li><img width="300px" height="400px" src="images/android/page1.jpg" alt="home ui"/></li>
                <li><img width="300px" height="400px" src="images/android/page2.jpg" alt="user manual"/></li>
                <li><img width="300px" height="400px" src="images/android/page3.jpg" alt="background service"/></li>
              </ul>
            </div>
            <!-- para to remove float style -->
          <p style="clear:right"></p>
          <!-- introduction -->
          <h3>Introduction</h3>
            <p>
              It's an app designed to give its clients a brand new way of input, instead of some traditional ones like keyboard inputs and voice inputs, you only have to wave your hand in the air to get your input.<br>
              It works fine when the inputs are single alphabet and needs to be improved under other circumstances.<br>
              Still not available on android market.<br>
              <a href="doc/proposal.doc" class="doc_source">view Proposal here</a>
            </p>
          <!-- group member -->
          <h3>Group Member</h3>
            <p> 
              Chen lin &nbsp&nbsp Muxi Qi &nbsp&nbsp Xuanyu Li<br>
          <!--    You can call me at (774)5785918 &nbsp; / &nbsp; --> 
              <a href="doc/ppt.pptx" class="doc_source">view PPT here</a>
            </p>
          <!-- responsibilities -->
          <h3>My Responsibility</h3>
            <p>
              App logo design</br>
              App UI design</br>
              Multi-thread seperation implementation
            </p> 
          <!-- video demo -->
          <h3>Video Demo</h3>
            <div class="video-wrapper">
              <video width="50%" height="50%" id="writing-in-air-movie" controls>
                <source src="video/writing-in-air.mp4"/>
                <source src="video/writing-in-air.webm"
                  type="video/webm; codecs='vp8, vorbis'"/>
                <source src="video/writing-in-air.ogv"
                  type="video/ogg; codecs='theora, vorbis'"/>
                <p>Download movie as 
                  <a href="video/writing-in-air.mp4">MP4</a>
                  <a href="video/writing-in-air.webm">WebM</a>
                  or <a href="video/writing-in-air.ogv">Ogg</a>
              </video>
            </div>  
          <!-- code for reference -->
          <h3>Code</h3>
            <p>
              <a href="https://www.dropbox.com/s/xo5fge648m3b6mo/Writing-In-Air--Final2015Spring.zip?dl=0" class="doc_source">view Code here</a>
            </p>

          <!-- artifact 2 -->
          <h2>Step Counter</h2>
          <h3>Introduction</h3>
            <p>
              It's an android app that keeps track of user's position in real-time and reflects its changes on google map</br>
              It counts the number of user steps at a constant interval</br>
            </p> 
              
          <h3>My Responsibility</h3>
            <p>
              Google Maps Android API v2 applied and used</br>
              SQLite database to store user data</br>
            </p> 

          <h3>Video Demo</h3>
            <div class="video-wrapper">
              <video width="60%" height="60%" id="step-counter-movie" controls>
                <source src="video/step-counter.mp4"/>
                <source src="video/step-counter.webm"
                  type="video/webm; codecs='vp8, vorbis'"/>
                <source src="video/step-counter.ogv"
                  type="video/ogg; codecs='theora, vorbis'"/>
                <p>Download movie as 
                  <a href="video/step-counter.mp4">MP4</a>
                  <a href="video/step-counter.webm">WebM</a>
                  or <a href="step-counter.ogv">Ogg</a>
              </video>
            </div>

          <h3>Code</h3>
            <p>
              <a href="https://github.com/lxynox/cs528_project3.git" class="doc_source">view Code here</a>
            </p> 
          <!-- scroll image container -->
          <!-- empty div for spacing -->
          <div class="empty_spacing_div"></div>
        </div>
    </div>
    <div class="empty-spacing"></div>
  </div>
</div>
<!-- software engineering -->
<div id="software-engineering" class="container-fluid">
  <h1>Software Engineering</h1>
  <div class="container">
    <div id="software-engineering-wrapper" class="content-wrapper">
      <div id="artifact">
          <!-- artifact 1 -->
          <h2>Airline Reservation System Demo</h2>
          <h3>User Interface</h3> 
          <ul class="ui_list">
            <li style="background:lightgrey">homepage</li>
            <li>flight search</li>
            <li>flight reserve</li>
          </ul>
          <div id="airline_image_frame">
            <ul id="airline_image_container">
              <li><img width="400px" height="300px" src="images/software/page1.jpg" alt="homepage"/></li>
              <li><img width="400px" height="300px" src="images/software/page2.jpg" alt="search flight page"/></li>
              <li><img width="400px" height="300px" src="images/software/page3.jpg" alt="purchase flight page"/></li>
            </ul>
          </div>
          <!-- para to remove float style -->
          <p style="clear:right"></p>
          <!-- RAD -->
          <h3>RAD (requirement analysis document)</h3>
            <p>
              User Story + Use Case + Class Diagram<br>
              <a href="doc/RAD.pdf" class="doc_source">view RAD here</a>
            </p>
          <!-- Prototype -->
          <h3>Prototype</h3>
            <p> 
              Model to code + Interface + Task Management<br>
          <!--    You can call me at (774)5785918 &nbsp; / &nbsp; --> 
              <a href="doc/prototype.pdf" class="doc_source">view Prototype here</a>
            </p>
          <!-- Test -->
          <h3>Test</h3>
            <p>
              Test Plan + Test Case + Test Result<br>
              <a href="doc/test.pdf" class="doc_source">view Test here</a>
            </p> 

          <h3>Source</h3>
          <p>
            <a href="https://github.com/lxynox/flight_ticket_search.git" class="doc_source">view Code here</a>
          </p> 
          <!-- empty div for spacing -->
          <div class="empty_spacing_div"></div>
        </div>
    </div>
    <div class="empty-spacing"></div>
  </div>
</div>
<!-- resume section -->
<div id="resume" class="container-fluid">
  <h1>Resume</h1>
  <div class="container">
    <div id="resume-wrapper" class="content-wrapper">
      <div id="header">
        <div id="header_img">
          <img src="images/resume/resume_head.jpg" alt="me.jpg" width="100" height="100">
        </div>
        <div id="header_text">
          <h1>XUANYU LI</h1>
          <p>22 homestreet, apt1<br>
             xli6@wpi.edu &nbsp&nbsp&nbsp (774)5785918<br>
          </p>
        </div>
      </div>

      <div id="contents">
      <!-- contents about myself go here -->
        <h2>OBJECTIVE</h2>
        <div class="section_content">
          <p>seeking for an internship on software enigneering</p>
        </div>
      <!--  education section -->
        <h2>EDUCATION</h2>
        <div class="section_content"> 
          <h3>Worcester Polytechnic Institute, Worcester, MA
            <span class= "date">May, 2016</span>
          </h3>
          <p>Master of Science, <i>Electrical and Computer Engineering</i>
            <span>
              <img src="images/resume/wpi_stamp.png" alt="WPI badge" 
              width="50" height="50"/>
            </span>
          </p> 
          <br><br>
          <h3>Beijing Institute of Technology, Beijing, China
            <span class= "date">July, 2014</span>
          </h3>
          <p>Bachelor of Engineering, <i>Mechatronical Engineering</i>
            <span>
              <img src="images/resume/bit_stamp.png" alt="BIT badge" 
              width="50" height="50"/>
            </span>
          </p> 
        </div>
      <!-- skills section -->
        <h2>COMPUTER SKILLS</h2>
        <div class="section_content"> 
          <ul type="circle" style="border-width:0">
            <li>Programming Language: Java, Python, Javascript, JQuery, Ajax, SQL</li>
            <li>Software: Eclipse, Android Studio, Git, Github, Tomcat, MySQL, Vim</li>
            <li>Foreign Language: Mandarin(fluent), German(limited), English(fluent)</li>
          </ul>
        </div>
      <!-- Projects section -->
        <h2>PROJECTS</h2>
        <div class="section_content"> 
          <!-- Independent projects -->
          <h3><i>Independent Projects</i><h3>
            <!-- project 1 -->
          <h4>Interactive Programming Using Python
            <span class="date">Nov, 2014</span>
          </h4>
          <button class="view_button" id="proj1_button" onclick="showDetail(1)">view detail</button>
          <ul type="circle" id="project1">
            <li>Based on the "Spaceship Craft" as a prototype, under browser-based environment, customized the GUI of the game through multiple built-in packages</li>
            <li>Applied the OOD && OOP concepts to accomplish the interaction between different objects ships, missiles, and rocks (obstacles) using python to program in a more readable and concise way</li>
          </ul>
            <!-- project 2 -->
          <h4>Simplified Search Engine Project
            <span class="date">Sept, 2014</span>
          </h4>
          <button class="view_button" id="proj2_button" onclick="showDetail(2)">view detail</button>
          <ul type="circle" id="project2">
            <li>Applied web-crawler method (using the BFS algorithm) to extract keywords and traverse through all the web pages (URLs) from a seed website</li>
            <li>Computed the relevancy of URL (roughly linear to its frequency in the website) to its keyword with simplified ranking function algorithm as approximation, used hash table to store the keywords and its mapping URLs</li>
            <li>Retrieved the relevant webpages sorted in a descending order as response to the input keyword</li>
          </ul>
          <!-- Class projects -->
          <h3><i>Class Projects</i><h3>   
            <!-- project 3 -->
          <h4>Online Flight Reservation System, Worcester MA 
            <span class="date">Apr, 2015</span>
          </h4>
          <ul type="circle">
            <li>Achieved the mapping from problem domain to solution domain according to RAD (requirement analysis doc) and decomposed the system using UML</li>
            <li>Implemented the system design using java servlet and jsp under MVC framework with multiple design patterns to loose coupling</li>
            <li>Applied unit and integration tests and designed different test cases and drivers during the process of system testing and validation</li>
          </ul>
            <!-- project 4 -->
          <h4>Writing In Air (android application), Worcester, MA 
            <span class="date">Apr, 2015</span>
          </h4>
          <ul type="circle">
            <li>Designed an android app to keep track of user writing gestures (single alphabetical) and displayed an image of the target alphabet as output</li>
            <li>Applied multiple sensors (including linear acceleration, gravity, magnetic) to convert the user input to digital signals and used filters to decrease noise</li>
            <li>Implemented the UI design and used multiple threads for user interaction, sensor event monitoring (handler), and back-end access (IntentService)</li>
          </ul>
            <!-- project 5 -->
          <h4>Computer Architecture Project, Worcester, MA 
            <span class="date">Nov, 2014</span>
          </h4>
          <ul type="circle">
            <li>Compared the performance (speed up which is around 10 times) of GPU (64cores) over CPU (single core) through matrix multiplication programming in C under a linux server</li>
            <li>Optimized the code with different algorithms and improved the performance of the whole CUDA program</li>
          </ul>
        </div>
      <!-- Oversea Experience section -->
        <h2>OVERSEA EXPERIENCE</h2>
        <div class="section_content"> 
          <p>Studied in a German primary school for 2 years, Ulm, Germany
            <span class="date">Jun, 2000 ~ Jun, 2002</span> 
          </p>
          <!-- bottom spacing of the main content -->
          <div class="empty_spacing_div"></div>
        </div>
      </div>
    </div>
    <div class="empty-spacing"></div>
  </div>
</div>

<php
	}
	protected function DisplayFooter() {
?>
<div id="footer">
  <p id="copyright"></p>
</div>
<php
	}
}	
?>
