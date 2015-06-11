<!DOCTYPE html>
<html lang="en">
<head>

    <<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Cabin" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css" >



    <title><?php echo htmlspecialchars( $results['pageTitle'] )?></title>



</head>
<body>
    
<div class="wrapper">
	<nav>
		<ul>
			<li class="logo"><a href="#home" onclick="smoothScroll(document.getElementById('home'))"><img id="ctclogo" src="images/ctcLogo1.png"/></a></li>
            <a href="#about" onclick="smoothScroll(document.getElementById('about'))"><li>About</li></a>
            <a href="#events" onclick="smoothScroll(document.getElementById('events'))"><li>Events</li></a>
            <a href="#past" onclick="smoothScroll(document.getElementById('past'))"><li>Past Projects</li></a>
            <a href="#sponsors"  onclick="smoothScroll(document.getElementById('sponsors'))"><li>Sponsorship</li></a>
            <a href="#register" onclick="smoothScroll(document.getElementById('register'))"><li>Register</li></a>
            <a href="#contact" onclick="smoothScroll(document.getElementById('contact'))"><li>Contact</li></a>
		</ul>
	</nav>
    <div class="jumbotron" id="home">
        <p>Coding for Social</p><p></p><p>Change<span>.</span></p>
    </div>
    <div id="about">
        <div class="row">
            <h1>About<span>.</span></h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>
                    Code the Change: Queen’s Chapter is a student run club on campus whose mandate is to empower
                    computer scientists and engineers to use their technical skills for social change. We run
                    events that let students program in small groups for non-profit organizations from within
                    the Kingston community. Our goal is to give students the opportunity to learn more about
                    programming and interact with other programmers while making a meaningful contribution to
                    the community. Code the Change: Queen’s Chapter is composed of an executive team who plan,
                    organize,and run code jams every year. At each Code Jam students can sign up in small groups or
                    individually to work on a specific project for a social change organization. The social
                    change organizations involved are generally based in Kingston and are in need of help
                    through either web development or mobile app design. By participating in these code jams
                    not only do you get to improve your technical skills as a programmer, but use these skills
                    for a greater cause.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="exec">
        <div class="row">
            <div class="col-md-4 one">
                <span class="text-content">
                    <span>
                        <h2>Megan Shipton</h2>
                        <h3>Events Coordinator (Code Jam)</h3>
                        <p>I'm a 4th year Electrical Engineering student who enjoys putting technology to use
                            for the benefit of others. This is exactly what Code the Change does during the Code
                            Jam. I appreciate the skills that Code Jam devolops as they can be utilized for future
                            projects and employment. I'm very excited to see how many more non-profit organizations
                            we are able to help this year!</p>
                    </span>
                </span>
            </div>
            <div class="col-md-4 two">
                <span class="text-content">
                    <span>
                        <h2>Alice Wang</h2>
                        <h3>Vice President</h3>
                        <p>I'm a 4th year Electrical Engineer who really enjoys programming and playing games.
                            I've volunteered for various organizations over the past few years, and I feel
                            Code the Change's vision of volunteering via coding skills is an ingenious idea.
                            I hope anyone who knows even a little bit of code will help non-profit organizations
                            keep up with the changing technology and help those in need.</p>
                    </span>
                </span>
            </div>
            <div class="col-md-4 three">
                <span class="text-content">
                    <span>
                        <h2>Alyssa Kim</h2>
                        <h3>Sponsorship</h3>
                        <p>Hi, I am a 3rd year Mathematics and Engineering student specializing in computing
                            and communications. I like data, reading the news, and computers. I also love the
                            saturation of curious and talented people in the Queen's community who believe
                            in civic betterment. To me, Code the Change is a great connector to bring these
                            people together and a great avenue for focusing all this cognitive surplus towards
                            a common good.</p>
                    </span>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 four">
                <span class="text-content">
                    <span>
                        <h2>Harry Lewis</h2>
                        <h3>Events Coordinator (Workshops)</h3>
                        <p>I'm currently in my 3rd year of Electrical Engineering, and in the past 4 years I
                            have taught myself how to code. Doing so has shown me how accessible the world is
                            through coding, and how Code the Change is tapping into this reality by bringing
                            coding to people that would otherwise not have a chance to use it. It is my hope
                            that an event like Code the Change will inspire people to start coding, and bring
                            their creative and life-changing ideas to the world.</p>
                    </span>
                </span>
            </div>
            <div class="col-md-4 five">
                <span class="text-content">
                    <span>
                        <h2>Danny Patterson</h2>
                        <h3>President</h3>
                        <p>I'm currently in my 3rd year of Electrical Engineering, and in the past 4 years I
                            have taught myself how to code. Doing so has shown me how accessible the world is
                            through coding, and how Code the Change is tapping into this reality by bringing
                            coding to people that would otherwise not have a chance to use it. It is my hope
                            that an event like Code the Change will inspire people to start coding, and bring
                            their creative and life-changing ideas to the world</p>
                    </span>
                </span>
            </div>
            <div class="col-md-4 six">
                <span class="text-content">
                    <span>
                        <h2>Sommer Shurbaji</h2>
                        <h3>Director of Projects</h3>
                        <p>I'm a 3rd year Computer Science student. I have interests in coding, robotics, geology,
                            and volunteering in the community. I love coding and using my knowledge of computer science
                            to help make a difference in the community. I joined Code the Change because it is a
                            great way to bring together students of different faculties who enjoy coding and want
                            to help make a positive change in their community.</p>
                    </span>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 seven">
                <span class="text-content">
                    <span>
                        <h2>Chris Cartwright</h2>
                        <h3>Sponsorship</h3>
                        <p>Hi, I am a fourth year computer engineering student. I am interested in algorithm design and analysis with an
                            emphasis on machine learning</p>
                    </span>
                </span>
            </div>
            <div class="col-md-4 eight">
                <span class="text-content">
                    <span>
                        <h2>Julie Lycklama</h2>
                        <h3>Sponsorship</h3>
                        <p>sfaffgdgfgad
                            bsdbfgfdhghsfg
                            gbsfgbgbgfhgshsg</p>
                    </span>
                </span>
            </div>
            <div class="col-md-4 nine">
                <span class="text-content">
                    <span>
                        <h2>Krystina Correa</h2>
                        <h3>Director of Projects</h3>
                        <p>sfaffgdgfgad
                            bsdbfgfdhghsfg
                            gbsfgbgbgfhgshsg</p>
                    </span>
                </span>
            </div>
        </div>
    </div>

    <div id="events">
        <div class="container">
            <h1>Events<span>.</span></h1>
            <div class="row">
                <div class="col-md-12">
                    <h2>Web Basics</h2>
                    <h3>November 21st, 2015. 6:30pm-9:30pm in the JDUC room 341</h3>
                    <p>The first workshop will be an introduction to web development. We will go over the basics
                    of HTML, CSS and JavaScript. We will also introduce some frameworks like Bootstrap. By the
                    end of this session you will be able to create a basic web site. This is one of
                    the most important sessions for people new to web development.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2>PHP, Databases and Servers</h2>
                    <h3>November 21st, 2015. 6:30pm-9:30pm in the JDUC room 341</h3>
                    <p>Here we will have a nice description of the first event. It will go over what to bring
                        and what skills are going to be taught. It will talk about how this will help with the code
                        jam and what type of person it will be most beneficial to</p>
                </div>
            </div>
        </div>
    </div>

    <div id="past">
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
<<<<<<< HEAD
						<div class="projectInfo">
						<h2>Kingston Youth Strategy</h2>
						<p>Developed an interactive website that serves as an easily accessible hub for the youth of Kingston. The site allows for the easy creation of calendar events and blog posts that can be added by from multiple different organizations. The goal of this project was to give youth a place to be easily updated on events that are occurring in the community! Check it out here:</p>
						</div>
                        <img src="images/PastY2K.png" class="pastPhotos"/>
=======
                        <div class="carousel-caption">

                        </div>
>>>>>>> origin/master
                    </div>
					<div class="item">
					<div class="projectInfo">
						<h2>EngLinks Tutors</h2>
						<p>EngLinks is the academic support service of the Engineering Society of Queen’s University. They help engineering students succeed in their studies. EngLinks offers one-on-one tutoring, course-specific group workshops and online resources. Code the Change developed a web application for engineering students to request tutoring from qualified upper-years and be matched to their own tutor. </p>
						</div>
					<img src="images/PastEngLinks.png" class="pastPhotos"/>
                    </div>
                    <div class="item">
					<div class="projectInfo">
						<h2>The Food Bank</h2>
						<p>Developed an interactive donation service where users are able to shop for a hamper full of non-perishable donations online in a virtual store and then donate the equivalent monetary value through the online donation portal. </p>
						</div>
                       <img src="images/PastFoodBank.png" class="pastPhotos"/>
                    </div>
					<div class="item">
					<div class="projectInfo">
						<h2>Robogals</h2>
						<p>This Code the Change project is created a website that engages and inspires girls in the Kingston area to pursue STEM careers. The website is also a tool to identify the supporters of Robogals Queen’s.</p>
						</div>
                        <img src="images/PastRobogals.png" class="pastPhotos"/>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div> <!-- Carousel -->
<<<<<<< HEAD
</div>
</div>
=======

        </div>
    </div>
>>>>>>> origin/master

    <div id="sponsors">
        <div class="container">
            <h1>Sponsorship<span>.</span></h1>
            <div class="row">
                <div class="col-md-4">
                    <h3>This years sponsors</h3>
                    <p></p>
                    <img src="images/koala.jpg" height="100" width="150"/>
                    <img src="images/koala.jpg" height="100" width="150"/>
                    <p></p>
                    <img src="images/koala.jpg" height="100" width="150"/>
                    <img src="images/koala.jpg" height="100" width="150"/>
                </div>
                <div class="col-md-8">
                    <p>We have two levels of sponsorship for companies interested in supporting the success of Code the Change:</p>
                    <p><strong>Silver</strong> – $250 – At the silver level, your company logo will be featured in all promotional material for
                        Code Jam 2015, including the event itinerary. Your company will also be identified during our lunch
                        and dinner breaks. You also have the option to contribute one company logo’d item in the participant packages.</p>
                    <p><strong>Gold</strong> – $500 – At the gold level, your logo will be featured in all promotional material, including the event
                        itinerary, large sized posters at the event and our promotional video that will be shown to hundreds of
                        engineering, computer science, and mathematics students. You will also have access to the full day event,
                        providing your company with a unique and exclusive opportunity to connect with some of Canada’s brightest
                        young programming talent.</p>
                        <p>If you are interested in providing financial support and/or sending a recruiter to the Code Jam, please email us at sponsorship@queenscodethechange.com for more information. Limited sponsorships are available, and any companies interested in sending a recruiter or company representative must confirm attendance by November 30th, 2014.</p>
                </div>

            </div>
        </div>
    </div>

      <!--  <div id="register">
            <?php //include "project.php" ?>
        </div> -->

    <div id="contact">
        <div class="container">
            <h1>Contact Us<span>.</span></h1>
            <div class="row">
                <div class="col-md-4">
                    <h2>Sponsorship Coordinators Email:</h2>
                    <h2>Project Coordinator Email:</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
window.smoothScroll = function(target) {
    var scrollContainer = target;
    do { //find scroll container
        scrollContainer = scrollContainer.parentNode;
        if (!scrollContainer) return;
        scrollContainer.scrollTop += 1;
    } while (scrollContainer.scrollTop == 0);
    
    var targetY = 0;
    do { //find the top of target relatively to the container
        if (target == scrollContainer) break;
        targetY += target.offsetTop;
    } while (target = target.offsetParent);
    
    scroll = function(c, a, b, i) {
        i++; if (i > 30) return;
        c.scrollTop = a + (b - a) / 30 * i;
        setTimeout(function(){ scroll(c, a, b, i); }, 20);
    }
    // start scrolling
    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}
</script>

<script type="text/javascript" src="jquery.js"></script>

<script>
   $(document).ready(function(){
	   $(window).bind('scroll', function() {
	   var navHeight = $( window ).height() - 90;
			 if ($(window).scrollTop() > navHeight) {
				 $('nav').addClass('fixed');
			 }
			 else {
				 $('nav').removeClass('fixed');
			 }
		});
	});
</script>

<?php include "templates/include/footer.php" ?>
