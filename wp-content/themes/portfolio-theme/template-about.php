<?php
/**
 * Template Name: About
 */

/**
 * get header.php
 */
get_header(); ?>


<nav id="navbar-main" class="navbar navbar--fixed-top">
  <ul>
    <li><a href="index.html#portfolio">PORTFOLIO</a></li>
    <li><a href="index.html"><img src="assets/images/logo.png" class="logo"/></a></li>
    <li><a href="about.html">ABOUT ME</a></li>
  </ul>
</nav>

<section class="about">
  <div class="about-background">
    <div class="container">
      <div class="about-content">
        <div class="about-content--left">
          <img src="assets/images/moi.png" />
          <p>Hi! My name is <span class="text--bold">Jonathan</span>, and I’m a 25 year old Web Developer living in Dublin. In May 2016, I graduated from Dun Laoghaire Institute of Art, Design and Technology with my <span class="text--bold">BSc (Honours) in Multimedia Systems/Web Engineering with a Second Class Honours Grade 1 (2:1)</span>, exciting stuff!</p>
          <p>At the end of June 2017, I finished working as a <span class="text--bold">Junior Web Developer</span> at Viralbamboo, developing web applications in both back-end and front-end using HTML, Sass/CSS, JavaScript, jQuery, PHP, WordPress and Laravel 5, and using Photoshop/Illustrator for creating assets. I also manage and maintain multiple web servers using WHM/cPanel.</p>
          <p>When I’m not spending time working on projects I can be found roaming the streets of Dublin on my trusty bicycle, sitting in front of my piano learning new songs, playing some video games on my Xbox or taking care of my two awesome cats.</p>
        </div>

        <div class="about-content--right">
          <h1>WANNA CHAT?</h1>
          <div class="about__icons">
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 438.536 438.536">
                <g>
                  <path d="M414.41,24.123C398.333,8.042,378.963,0,356.315,0H82.228C59.58,0,40.21,8.042,24.126,24.123   C8.045,40.207,0.003,59.576,0.003,82.225v274.084c0,22.647,8.042,42.018,24.123,58.102c16.084,16.084,35.454,24.126,58.102,24.126   h274.084c22.648,0,42.018-8.042,58.095-24.126c16.084-16.084,24.126-35.454,24.126-58.102V82.225   C438.532,59.576,430.49,40.204,414.41,24.123z M133.618,367.157H67.666V169.016h65.952V367.157z M127.626,132.332   c-6.851,6.567-15.893,9.851-27.124,9.851h-0.288c-10.848,0-19.648-3.284-26.407-9.851c-6.76-6.567-10.138-14.703-10.138-24.41   c0-9.897,3.476-18.083,10.421-24.556c6.95-6.471,15.942-9.708,26.98-9.708c11.039,0,19.89,3.237,26.553,9.708   c6.661,6.473,10.088,14.659,10.277,24.556C137.899,117.625,134.477,125.761,127.626,132.332z M370.873,367.157h-65.952v-105.92   c0-29.879-11.036-44.823-33.116-44.823c-8.374,0-15.42,2.331-21.128,6.995c-5.715,4.661-9.996,10.324-12.847,16.991   c-1.335,3.422-1.999,8.75-1.999,15.981v110.775h-65.952c0.571-119.529,0.571-185.579,0-198.142h65.952v27.974   c13.867-21.681,33.558-32.544,59.101-32.544c22.84,0,41.21,7.52,55.104,22.554c13.895,15.037,20.841,37.214,20.841,66.519v113.64   H370.873z" fill="#FFFFFF"/>
                </g>
              </svg>
            </a>

            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 438.536 438.536">
                <g>
                  <path d="M414.41,24.123C398.326,8.042,378.964,0,356.309,0H82.225C59.577,0,40.208,8.042,24.123,24.123    C8.042,40.207,0,59.576,0,82.225v274.088c0,22.65,8.042,42.017,24.123,58.098c16.084,16.084,35.454,24.126,58.102,24.126h63.953    c4.184,0,7.327-0.144,9.42-0.424c2.092-0.288,4.184-1.526,6.279-3.717c2.096-2.187,3.14-5.376,3.14-9.562    c0-0.568-0.05-7.046-0.144-19.417c-0.097-12.375-0.144-22.176-0.144-29.41l-6.567,1.143c-4.187,0.76-9.469,1.095-15.846,0.999    c-6.374-0.096-12.99-0.76-19.841-1.998c-6.855-1.239-13.229-4.093-19.13-8.562c-5.898-4.477-10.085-10.328-12.56-17.559    l-2.856-6.571c-1.903-4.373-4.899-9.229-8.992-14.554c-4.093-5.332-8.232-8.949-12.419-10.852l-1.999-1.428    c-1.331-0.951-2.568-2.098-3.711-3.429c-1.141-1.335-1.997-2.669-2.568-3.997c-0.571-1.335-0.097-2.43,1.427-3.289    c1.524-0.855,4.281-1.279,8.28-1.279l5.708,0.855c3.808,0.76,8.516,3.042,14.134,6.851c5.614,3.806,10.229,8.754,13.846,14.843    c4.38,7.806,9.657,13.75,15.846,17.843c6.184,4.097,12.419,6.143,18.699,6.143s11.704-0.476,16.274-1.424    c4.565-0.954,8.848-2.385,12.847-4.288c1.713-12.751,6.377-22.559,13.988-29.41c-10.848-1.143-20.602-2.854-29.265-5.14    c-8.658-2.286-17.605-5.995-26.835-11.136c-9.234-5.14-16.894-11.512-22.985-19.13c-6.09-7.618-11.088-17.61-14.987-29.978    c-3.901-12.375-5.852-26.652-5.852-42.829c0-23.029,7.521-42.637,22.557-58.814c-7.044-17.32-6.379-36.732,1.997-58.242    c5.52-1.714,13.706-0.428,24.554,3.855c10.85,4.286,18.794,7.951,23.84,10.992c5.046,3.042,9.089,5.614,12.135,7.71    c17.705-4.949,35.976-7.423,54.818-7.423c18.841,0,37.115,2.474,54.821,7.423l10.849-6.852c7.426-4.57,16.18-8.757,26.269-12.562    c10.088-3.806,17.795-4.854,23.127-3.14c8.562,21.51,9.328,40.922,2.279,58.241c15.036,16.179,22.559,35.786,22.559,58.815    c0,16.18-1.951,30.505-5.852,42.969c-3.898,12.467-8.939,22.463-15.13,29.981c-6.184,7.519-13.894,13.843-23.124,18.986    c-9.232,5.137-18.178,8.853-26.84,11.132c-8.661,2.286-18.414,4.004-29.263,5.147c9.891,8.562,14.839,22.072,14.839,40.538v68.238    c0,3.237,0.472,5.852,1.424,7.851c0.958,1.998,2.478,3.374,4.571,4.141c2.102,0.76,3.949,1.235,5.571,1.424    c1.622,0.191,3.949,0.287,6.995,0.287h63.953c22.648,0,42.018-8.042,58.095-24.126c16.084-16.084,24.126-35.454,24.126-58.102    V82.225C438.533,59.576,430.491,40.204,414.41,24.123z" fill="#FFFFFF"/>
                </g>
              </svg>
            </a>

            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.51 21.51" width="30px" height="30px">
                <g>
                  <path d="M0,2.963v15.584h21.51V2.963H0z M15.722,3.511l-4.969,4.966L5.206,3.511H15.722z M2.912,5.993   l5.992,5.19l-5.992,4.589C2.912,15.772,2.912,5.993,2.912,5.993z M18.597,18.033H2.912v-1.41l6.403-4.926l1.438,1.438l1.507-1.438   l6.337,4.926V18.033z M18.597,15.772l-5.822-4.725l5.822-5.755V15.772z" fill="#FFFFFF"/>
                </g>
              </svg>
            </a>
          </div>

          <form id="form" action="/jd-website/wp-content/themes/portfolio-theme/contact-form-submission.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Name" required /><br />
            <input type="email" name="email" placeholder="Email" required /><br />
            <textarea rows="10" name="message" placeholder="Message" required></textarea>

            <label style="display:none" for="address">Address</label>
            <input style="display:none" type="text" id="address" name="address" />
            <p style="display:none" >Please leave this field blank</p>

            <button class="button button__submit" type="submit" name="submit">SUBMIT</button>
          </form>

          <div class="form-submission--success">
            <p>THANK YOU FOR YOUR SUBMISSION!</p>
          </div>

          <div class="form-submission--fail">
            <p>OOPS... LOOKS LIKE SOMETHING WENT WRONG :(</p>
            <p>PLEASE TRY AGAIN LATER!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
/**
 * get header.php
 */
get_footer();
