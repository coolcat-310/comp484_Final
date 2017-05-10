<!DOCTYPE html>
<html>

<head>
    <title>Motion Fun</title>

    <meta name="Juan Navarrete and Gabriel Strutevant" content="Juan and Gabriel"/>
    <meta name="FINAL PROJECT" content="final project"/>

    <link rel="stylesheet" href="style/css.css" type="text/css"/>

</head>
<body>

<!------------------- AFTER HERE, DISPLAYS ON WEBPAGE ----------------------->
<div id="page">
    <div id="header_container">
        <a href="/" id="logoLink">
            <!------------------- LOGO HERE----------------------->
            <img src="images/logomotionfun.jpg" height="51" width="120" alt="Motion Fun Logo" id="logo"/>
        </a>
        <!----------------------- NAVIGATION ------------------------------>
        <div id="nav">
            <ul>

                <!----TEXT SPOT-TOP header: ABOUT ME will link to bottom/page2 ------>
                <li><a href="#about">About Us</a></li>
                <li><a href="#video">Video</a></li>
                <li><a href="#math">Math Functions</a></li>
                @if( Auth::user())
                    <li><a href="{{ url('docs') }}">Documentation</a></li>
                    <li><a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">{{ csrf_field() }}</form>
                @else
                    <li><a href="{{ url('login') }}">Log in</a></li>
                @endif
            </ul>
        </div>
    </div>


    <!-------------------- MAIN CONTENT  H2 -------------------------->
    <div id="content">
        <h3>Welcome to Motion Fun</h3>
        <br/>

        <p><img class="img-responsive" src="images/two.jpg" alt=""></p>
        <br/>


        <!----------------ACCORDION------------------------------------>

        <h2>ABOUT MOTION FUN</h2> <br/>
        <a name="about"></a>
        <br/>
        <br/>

        <button class="accordion">OUR GOAL</button>
        <div class="panel">
            <p>
            <div class="slide">
                <ul>
                    <li>GOAL: To achieve our goal we will use cheap and readily available hardware along with
                        open-source software. The open-source software will include Blender, and our own custom program.
                        Blender is an industry standard 3D animation suite, that is free for all users. Our own plugin
                        for Blender will be used to receive and interpret data from the Raspberry Pi.
                    </li>
                    <br/>
                </ul>
            </div>
            </p>
        </div>


        <button class="accordion">OVERVIEW</button>
        <div class="panel">
            <p>
            <div class="slide">
                <ul>
                    <li>The project that we are pursuing is an open-source implementation of interpreting real space
                        into a graphical representation. Current motion capturing technology is expensive and out of
                        reach for most people including students. For example, a two-camera Vicon system with one
                        software license is US$12,500 and MotionBuilder to map the capture data of a character, runs
                        about $4,200 per user. Having access to motion capture technology will facilitate learning for
                        students pursuing degrees in cinema, biology, robotics, kinesiology, physical therapy and many
                        more disciplines. Our goal is to make motion capture technology affordable for students and the
                        general public.
                    </li>
                    <br/>
                </ul>
            </div>

        </div>

        <button class="accordion">OUR MOTIVATION</button>
        <div class="panel">
            <p>
            <div class="slide">
                <ul>
                    <li>The initial cost of entry for motion capture technology via Vicon with MotionBuilder is
                        approximately $16,700. However, our expected initial cost to track one point in space is $332
                        which includes a set of light sensors, Raspberry Pi, battery, and an HTC Vive Lighthouse. Our
                        development team consist of six programmers, and each member needs their own minimum set of
                        equipment. Collaboration between members will be done simultaneously which is why each member
                        needs their own set up.
                    </li>
                    <br/>

                </ul>
            </div>
            </p>
        </div>

        <!----------------DON'T MOVE FROM THIS AREA !!!!------------------------------------>
        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].onclick = function () {
                    this.classList.toggle("active");
                    this.nextElementSibling.classList.toggle("show");
                }
            }
        </script>

        <br/><br/><br/>


        <!----------------ACCORDION------------------------------------>

        <h2>EQUIPMENT</h2> <br/>
        <a name="about"></a>

        <br/><br/>

        <button class="accordion">SOFTWARE</button>
        <div class="panel">
            <p>
            <div class="slide">
                <ul>
                    <li>Raspberry Pi (Original Model)
                        Python w/Flask
                        SSH & FTP (not really software but make sure your linux disc can do both protocols
                        Putty
                        Motion Fun Respository
                        Blender
                        A webGL enabled browser (google chrome is fine)
                    </li>
                    <br/>


                </ul>
            </div>
            </p>
        </div>


        <button class="accordion">HARDWARE</button>
        <div class="panel">
            <p>
            <div class="slide">
                <ul>
                    <li>Raspberry Pi (Original Model)
                        Tiny Breadboard (Optional)
                        Pi Breakout Cobbler (Optional)
                        8Gb SD Card
                        Wireless dongle
                        Adafruit 9DOF BNO055 Sensor
                        10 Jumper Wires
                        Soldering Iron w/solder
                    </li>
                    <br/>


                </ul>
            </div>

        </div>

        <button class="accordion">PLATFORMS</button>
        <div class="panel">
            <p>
            <div class="slide">
                <ul>
                    <li>Blender is a free and open source 3D creation suite. It supports the entirety of the 3D pipeline
                        modeling, rigging, animation, simulation, rendering, compositing and motion tracking, even video
                        editing and game creation.
                        Download:
                        Blender is a 3D animation suite that is perfect for beginners who want to try 3D modelling. This
                        is a free and open-source software created by Blender Organization, so it means that you don’t
                        need to spend money to purchase a 3D application to try it. Like most applications, to use
                        Blender, you first have to download and install it. Blender is available for the following
                        operating systems:
                        Windows Vista, 7, 8, 10 32-bit/64-bit
                        Mac OS X 10.6+ 64-bit only
                        GNU Linux 32-bit/64-bit
                        FreeBSD 64-bit only
                        https://www.blender.org/download/
                    </li>
                    <br/>


                </ul>
            </div>
            </p>
        </div>

        <!----------------DON'T MOVE WHATSOEVER !!!!------------------------------------>


        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].onclick = function () {
                    this.classList.toggle("active");
                    this.nextElementSibling.classList.toggle("show");
                }
            }
        </script>
        <br/><br/><br/>


        <!----------------VIDEO SECTION------------------------------------>
        <h2>VIDEOS</h2> <br/>
        <a name="video"></a>

        <table width="100%" cellpadding="15" cellspacing="0" align="center">
            <tr>
                <td width="33%">
                    <br/>
                    <iframe src="https://www.youtube.com/embed/LVmcA57MBFI?ecver=2"
                            width="100%" height="150" frameborder="0"
                            allowfullscreen>
                    </iframe>
                    <br/><br/><br/>
                    <h2><img src="images/sec1.jpg" height="50" width="50"
                             alt="description"/>SECTION 1 </h2>
                    <p>
                        This brief intro video will highlight :

                        Initial Set-Up
                        Sensor Calibration
                        Raspberry Pi Connection
                        Future Vision
                    </p>
                </td>
                <td width="33%">
                    <iframe src="https://www.youtube.com/embed/cUs9kpYyd5A?ecver=2"
                            width="100%" height="150" frameborder="0"
                            allowfullscreen>
                    </iframe>
                    <br/><br/><br/>
                    <h2><img src="images/sec2.jpg" height="50" width="50"
                             alt="description here"/>SECTION 2 </h2>
                    <p>
                        Program reads file and displays coordinates and then moves object to new coordinate position.
                    </p>
                </td>
                <td width="33%">
                    <iframe src="https://www.youtube.com/embed/MxXa0KTxzA8?ecver=2"
                            width="100%" height="150" frameborder="0"
                            allowfullscreen>
                    </iframe>
                    <br/><br/><br/>
                    <h2><img src="images/sec3.jpg" height="50" width="50"
                             alt="description here"/>SECTION 3 </h2>
                    <p> Progress Update 2:Program reads raw data and produces an animated video.
                    </p>
                </td>
                {{--</figure>--}}
            </tr>
        </table>
        <br/>
        <br/>
        <br/>
        <h3>Math Functions</h3>
        <a name="math"></a>
        <br/>
        <h2>N<sup>th</sup> Fibbonacci Number</h2>
        <input id="fib" type="text" placeholder="Please enter a number">
        <button id="fib_button">Submit</button>
        <div id="fib_result"></div>

        <br/>
        <h2>2<sup>n</sup> Calculator</h2>
        <input id="exp" type="text" placeholder="Please enter a number">
        <button id="exp_button">Submit</button>
        <div id="exp_result"></div>
        <!--------------------- COMMENTS END --------------------------->
        <br/><br/><br/><br/><br/><br/><br/><br/>


        <HR>
        <h2>CONTACT US ON GITHUB</h2>
        <a href="https://github.com/coolcat-310/comp484_Final">
            <img src="images/github.jpg" height="35" width="35" alt="description"/></a>
        <!--------------------- DON'T DELETE THESE DIVS !!!!!!!!--------------------------->
    </div>
</div>
<!--------------------- DONT' DELETE THESE DIVS !!!!! --------------------------->
<br/>
<script src="https://code.jquery.com/jquery-1.12.4.js"
        integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
        crossorigin="anonymous"></script>
<script src="script/logIn.js"></script>
</body>
</html>
