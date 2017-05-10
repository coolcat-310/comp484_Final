<!DOCTYPE html>
<html>

<head>
    <title>Motion Fun - Documentation</title>

    <meta name="Juan Navarrete and Gabriel Strutevant" content="Juan and Gabriel"/>
    <meta name="FINAL PROJECT" content="final project"/>

    <link rel="stylesheet" href="style/css.css" type="text/css"/>

    <!-------------------------- CSS IN HEAD------------------->


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
            <li><a href="{{url('/')}}">home</a></li>
            <li><a href="{{ url('/') }}#about">About Us</a></li>
            <li><a href="{{ url('/') }}#video">Video</a></li>
            <li><a href="{{ url('/') }}#math">Math Functions</a></li>
            <li><a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  style="display: none;">{{ csrf_field() }}</form>
        </ul>
    </div>


    <!-------------------- MAIN CONTENT  H2 -------------------------->
    <div id="content">
        <h3>OUR DOCUMENTATION</h3>
        <br/>


        <div id="page">


            <p><img class="img-responsive" src="images/two.jpg" alt=""></p>


            <h2>Documentation</h2>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>
                            Motion fun is an affordable open source solution to tracking motion and orientation. Motion
                            fun is an implementation of interpreting real space into a graphical representation.
                            Current motion capturing technology is expensive and out of reach for most people including
                            students. For example, a two-camera Vicon system with one software license is US$12,500 and
                            MotionBuilder to map the capture data of a character, runs about $4,200 per user.
                            Having access to motion capture technology will facilitate learning for students pursuing
                            degrees in cinema, biology, robotics, kinesiology, physical therapy and many more
                            disciplines.
                            Our application is able to move rendered 3D objects inside blender. It is an add-on that
                            utilizes a Raspberry PI to capture motion and orientation. Our goal is to make motion
                            capture
                            technology affordable for students and the general public.
                        </p>
                        <p><b>Equipment:</b></p>
                        <ul>
                            <li>Raspberry Pi</li>
                            <li>Pi Breakout Cobbler</li>
                            <li>8Gb SD card</li>
                            <li>Wireless dongl</li>
                            <li>Adafruit 9DOF BNO055 Sensor</li>
                            <li>10 Jumper Wires</li>
                            <li>Soldering Iron s/solder</li>
                        </ul>
                        <p><b>Software Dependence:</b></p>
                        <ul>
                            <li>Rasbian Jessie Linux Operating System</li>
                            <li>Python w/Flask</li>
                            <li>SSH & FTP not really software but make sure your linux disc can do both protocols</li>
                            <li>Putty</li>
                            <li>Motion Fun Repository</li>
                            <li>Blender</li>
                            <li>A webGL enabled brower - *google chrome is fine</li>
                        </ul>
                        <br/>
                        <p><b>Blender:</b></p>
                        <p>
                            Blender is a free and open source 3D creation suite. It supports the entirety of the 3D
                            pipeline modeling, rigging, animation, simulation, rendering, compositing and motion
                            tracking,
                            even video editing and game creation.
                        </p>
                        <p><b>Download:</b></p>
                        <p>
                            Blender is a 3D animation suite that is perfect for beginners who want to try 3D modelling.
                            This is a free and open-source software created by Blender Organization, so it means that
                            you do not
                            need to spend money to purchase a 3D application to try it. Like most applications, to use
                            Blender,
                            you first haveto download and install it. Blender is available for the following operating
                            systems:
                        </p>
                        <ul>
                            <li>Windows Vista, 7, 8, 10 32-bit/64-bit</li>
                            <li>Mac OS X 10.6+ 64-bit only</li>
                            <li>GNU Linux 32-bit/64-bit</li>
                            <li>FreeBSD 64-bit only</li>
                            <a href="https://www.blender.org/download/">https://www.blender.org/download/</a>
                        </ul>
                        <p><br/>
                            Run installer it will usually be located at your download folder
                        </p>
                        <img class="toggle" src="images/blendersetup1.jpg" alt="some_text"
                             style="width:504px;height:378px;"><br/><br/>
                        <img class="toggle" src="images/blender2.jpg" alt="some_text"
                             style="width:504px;height:378px;"><br/><br/>
                        <img class="toggle" src="images/blender3.jpg" alt="some_text"
                             style="width:504px;height:378px;"><br/><br/>
                        <img class="toggle" src="images/blender4.jpg" alt="some_text"
                             style="width:504px;height:378px;"><br/><br/>
                        <img class="toggle" src="images/blender5.jpg" alt="some_text"
                             style="width:504px;height:378px;"><br/><br/>

                        <p>
                            Ubuntu
                        </p>
                        <img class="toggle" src="images/ubuntu-blender.png" alt="some_text"
                             style="width:504px;height:378px;"><br/><br/>
                        <p>
                            Run the command shown above.
                            Blender is now installed
                        </p>

                        <br/>
                        <p><b>Clone repository:</b></p>
                        <ol>
                            <li class="num">On GitHub, navigate to the main page of the repository</li>
                            <li class="num">Under the repository name, click Clone or download</li>
                            <li class="num">In the clone with HTTPs section, click the clipboard icon to copy the clone
                                repository
                            </li>
                            <li class="num">Open git bash</li>
                            <li>Change the current working directory to the location where you want the cloned directory
                                to be made
                            </li>
                            <li class="num">Type git clone, and then paste the URL you copied from step2</li>
                            <li class="num">Press enter, Your local clone will be created!!</li>
                            <li class="num">blender files -> autoload.py => set up fix the relative path (line 20)</li>
                            <li class="num">f = open("yourpath.txt", "r")</li>
                        </ol>
                        <p><b>Sample Code:</b></p>
                        <p>Sample data is a predefine motion that is safe as a text file in datalog.txt</p>

                        <img src="images/gnu6.png" alt="some_text" style="width:900px;height:460px;"><br/><br/>

                    </div>
                </div>
            </div>
            <br/>

        </div>
        <!--End of Page-->


        <HR>
        <h2>CONTACT US ON GITHUB</h2>
        <a href="https://github.com/coolcat-310/comp484_Final">
            <img src="images/github.jpg" height="35" width="35" alt="description"/>
        </a>
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
