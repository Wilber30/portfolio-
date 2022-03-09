<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="description" content="This portfolio contains links to my
  projects, explains my interest in web development and also includes a
  contact form.">
  <meta name="viewport" content="width=device-width,
  initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>William Sears Portfolio</title>
  <link rel="shortcut icon" type="image/png" href="Images/favicon-32x32.png"/>
  <!-- Stylesheet links -->
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" type="text/css" href="scss/styles.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <div id="top_navigation">

    <ul class="top_icons">
      <li class="william"><small>William Sears. 2021</small></li>
      <li class="media media-insta">
        <a href="https://github.com/Wilber30" target="_blank">
          <i class="fab fa-github"></i></a>
        <a href="https://www.instagram.com/bellybones_records/?hl=en-gb" target="_blank">
          <i class="fab fa-instagram"></i></a>
      </li>
    </ul>

    <div class="container">

      <div class="top_wrapper">
        <div id="cross">
          <i class="fas fa-times-circle"></i>
        </div>
        <a href="../index.php">
          <h1 class="sm-in">WS</h1>
        </a>

        <div class="links">
          <div class="hamburger">
            <i class="fas fa-bars"></i>
          </div>

          <div class="drop_menu">
            <ul class="drop_down">
              <li>
                <a class="drop_item" href="pages/about-me.html">About Me</a>
              </li>
              <li>
                <a class="drop_item" href="../index.php#port">My Portfolio</a>
              </li>
              <li>
                <a class="drop_item" href="../pages/coding_examples.html">Coding Examples</a>
              </li>
              <li>
                <a class="drop_item" href="pages/scs-scheme.html">SCS Scheme</a>
              </li>
              <li>
                <a class="drop_item" href="../index.php#contact">Contact Me</a>
              </li>
            </ul>
          </div>

        </div>
      </div>

    </div>

  </div> <!-- top_navigation end -->

  <!-- Side navigation -->
  <div class="navigation">
    <div class="nav-container">
      <div class="image-wrapper">
        <a href="../index.php">
          <h1 class="initials">WS</h1>
        </a>
      </div>

      <ul class="sidenav">
        <li>
          <a class="link_item" href="pages/about-me.html">About Me</a>
        </li>
        <li>
          <a class="link_item" href="#port">My Portfolio</a>
        </li>
        <li>
          <a class="link_item" href="pages/coding_examples.html">Coding Examples</a>
        </li>
        <li>
          <a class="link_item" href="pages/scs-scheme.html">SCS Scheme</a>
        </li>
        <li>
          <a class="link_item" href="#contact">Contact Me</a>
        </li>
      </ul>

      <ul class="social_media">
        <li class="media media-insta">
          <a href="https://github.com/Wilber30" target="_blank">
            <i class="fab fa-github"></i></a>
          <a href="https://www.instagram.com/bellybones_records/?hl=en-gb" target="_blank">
            <i class="fab fa-instagram"></i></a>
        </li>
      </ul>

      <p class="sears"><small>William Sears. 2021</small></p>

    </div>
  </div>

  <!-- Page content -->
  <main>
    <!-- <div id="full-page"> -->

      <div id="banner">

        <div class="type-container">

          <div id="arrow_alignment">
            <div id="close"><i class="fas fa-arrow-circle-up home_close"></i></div>
            <div id="reveal"><i class="fas fa-arrow-circle-down home_reveal"></i></div>
          </div>

          <div class="typewriter">
            <h1 id="app"></h1>
          </div>
          <div class="fade-in">
            <p class="me">I am a Web Developer</p>
          </div>

          <div class="align_scroll">

            <div class="scroll-down">
              <a href="#port">
                <p id="scroll">Scroll Down<br>
                  <i class="fas fa-chevron-down"></i>
                </p>
              </a>
            </div>

          </div>


        </div>
      </div>

    <!-- Project cards -->
    <div class="inner">
      <div class="container">

        <h1 id="port">Portfolio</h1>

        <div class="card_wrapper">

            <div class="card">
              <div class="img_container">
                <a href="https://arrayreflection.william-sears.netmatters-scs.co.uk/" target="_blank">
                  <img class="project" src="Images/arrayreflection.png" alt="Array Reflection">
                </a>
              </div>
                <div class="card_text">
                  <h3 class="project_title">Array Reflection</h3>
                    <p class="project_description">A JavaScript project that assigns <br> an email address to an image loaded from UnSplash API.</p>
                  <form >
                    <button class="project_link array_btn" formaction="https://arrayreflection.william-sears.netmatters-scs.co.uk/" formtarget="_blank">View Project</button>
                  </form>
                </div>
              </div>

                <div class="card">
                  <div class="img_container">
                    <a href="https://netmatters.william-sears.netmatters-scs.co.uk/" target="_blank">
                      <img class="project" src="Images/Placeholder-1.png" alt="Netmatters site">
                    </a>
                  </div>
                    <div class="card_text">
                        <h3 class="project_title">Netmatters Homepage</h3>
                          <p class="project_description">A reconstruction of the Netmatters homepage and contact page.</p>
                      <form >
                        <button class="project_link net_btn" formaction="https://netmatters.william-sears.netmatters-scs.co.uk/" formtarget="_blank">View Project</button>
                      </form>
                    </div>
                  </div>

                  <div class="card">
                    <div class="img_container">
                      <a href="https://wordpress.william-sears.netmatters-scs.co.uk/" target="_blank">
                        <img class="project" src="Images/Placeholder-4.png" alt="Wordpress reflection task">
                      </a>
                    </div>
                      <div class="card_text">
                          <h3 class="project_title">Wordpress Reflection</h3>
                            <p class="project_description axure">A site built using Wordpress themes and plugin architecture, with a paired database on the backend.</p>
                        <form >
                          <button class="project_link" formaction="https://wordpress.william-sears.netmatters-scs.co.uk/" formtarget="_blank">View Project</button>
                        </form>
                      </div>
                    </div>

                </div>

                <div class="card_wrapper">
                  <div class="card">
                    <div class="img_container">
                      <a href="https://3ny7nh.axshare.com/#id=w7l75t" target="_blank">
                        <img class="project" src="Images/Placeholder-3.png" alt="Axure shopping app">
                      </a>
                    </div>
                      <div class="card_text">
                          <h3 class="project_title">Axure Shopping App</h3>
                            <p class="project_description axure">A prototype for a shopping cart application, which I designed using Axure.</p>
                        <form >
                          <button class="project_link axure_btn" formaction="https://netmatters.william-sears.netmatters-scs.co.uk/" formtarget="_blank">View Project</button>
                        </form>
                      </div>
                    </div>

                    <div class="card">
                      <div class="img_container">
                        <a href="https://wordpress.william-sears.netmatters-scs.co.uk/" target="_blank">
                          <img class="project" src="Images/Placeholder-4.png" alt="Wordpress reflection task">
                        </a>
                      </div>
                        <div class="card_text">
                            <h3 class="project_title">Wordpress Reflection</h3>
                              <p class="project_description axure">A site built using Wordpress themes and plugin architecture, with a paired database on the backend.</p>
                          <form >
                            <button class="project_link" formaction="https://wordpress.william-sears.netmatters-scs.co.uk/" formtarget="_blank">View Project</button>
                          </form>
                        </div>
                      </div>

          </div>


        <div class="blank_space">&nbsp;</div>

      </div>
    </div>

    <!-- Contact -->
    <div class="contact_section">
      <div class="inner">
        <div class="container contact_container">

          <div class="sm_contact_text">
            <h2>Get In Touch</h2>
            <p><b>Email address:</b> william.sears@netmatters-scs.com</p>
            <p class="contact_detail">You can also contact me via the above email address.</p>
          </div>

          <div id="contact" class="contact_wrapper">

            <div class="contact_text">
              <h2 class="contact_header">Get In Touch</h2>
              <p class="info">Please feel free to get in touch with me via the contact form.</p>
              <h3 class="email_header">Email address:</h3>
              <a class="email_address" href="mailto:william.sears@netmatters-scs.com">william.sears@netmatters-scs.com</a>
              <p class="contact_detail">You can also contact me via the above email address.</p>
            </div>

            <div id="form">
              <div id="response"></div>
              <div id="error"></div>
              <div class="user">
                <input id="name" type="text" name="name" placeholder="Name:" required="required">
                <input id="email" name="email" type="text" placeholder="Email:" required="required">
              </div>
              <input id="cc" class="input" name="cc" placeholder="Cc:">
              <input id="subject" class="input" type="text" name="subject" placeholder="Subject" required="required">
              <textarea id="message" name="message" rows="8" cols="80" placeholder="Message:" required/></textarea>
              <button id="sub_btn" type="submit" name="Submit">Submit</button>
            </div>

          </div> <!-- contact_wrapper end -->

        </div>
      </div>
    </div>
  </main>
  <footer>

    <div class="inner">
      <div class="container">
        <a id="up" href="#">
          <p class="up"><i class="fas fa-chevron-up"></i>
            Back to the top<br></p>
        </a>
      </div>
    </div>

  </footer>
  <script src="dist/core.js"></script>
  <script src="main.js"></script>
</body>

</html>
