<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Menglin Wang's Personal Website</title>
    <link rel="stylesheet" href="css/styles.css">

    <link rel="icon" href="images/icon.png">
  </head>
    <body>

      <header id="header">
        <div class="item_active">
            <!-- Source: David Besh -->
            <img id="carousel-img0" class="bg" src="images/bg2.jpg">
            Source: <cite>David Besh</cite>
        </div>
        <script>
            var img0 = new Image();
            var imageTag0 = document.getElementById("carousel-img0");
            img0.src = imageTag0.src;
            img0.onload=function(){
            if (img0.width / img0.height <= document.body.clientWidth / document.body.clientHeight) {
              imageTag0.style.width = document.body.clientWidth + "px";
            } else {
              imageTag0.style.height = document.body.clientHeight + "px";
              imageTag0.style.marginLeft = -(document.body.clientHeight * img0.width / img0.height - document.body.clientWidth) / 2 + "px";
            }
          };
        </script>


        <div class="home" class="home">
          <div class="homelogobackup">
            <h1><a href="#content" id="logo"><font color="white">Menglin Wang</font></a></h1>
            <h3><font color="white">MS Student at </font><a href="https://www.mse.cornell.edu"><font color="white">Cornell MSE</font></a></h3>
          </div>
          <div class="homelogobackdown">
            <h4><font color="white">Software Engineering and Machine Learning</font></h4>
            <p><a href="https://github.coecis.cornell.edu/mw976" target="_blank">Github</a></p>
          </div>
        </div>

        <div class="intro-navigate">
          <p class="navigater-list">
              <a id="beautifont" class="main-nav-link" href="index.php">Hοme</a>

              <a id="beautifont" class="main-nav-link" href="about.php">Abοut</a>

              <a id="beautifont" class="main-nav-link" href="project.php">Project</a>

              <a id="beautifont" class="main-nav-link" href="https://github.coecis.cornell.edu/mw976">Github</a>
          </p>
        </div>

       </header>

        <div class="article-entry">
          <hr>
          <font size=5>
            <center>Welcome to Menglin Wang's page!</center>
          </font>
          <font size=1, color="red">
            <hr>
          </font>

          <div class="head" align="center">
            <!-- Source: Jinglin Li -->
            <img  src="images/head.png" height="200" width="200" >

          </div>

          <font size=3.9, color="black", align = "left">
            <ul>
            <li><p><font color="black">Hi! My name is Menglin Wang(ch:王梦麟). I am currently a Master student of <a target="_blank" rel="noopener" href="https://www.mse.cornell.edu/mse">Materials Science and Engineering</a> at <a target="_blank" rel="noopener" href="https://www.cornell.edu/">Cornell University</a>, working with <a target="_blank" rel="noopener" href="https://www.mae.cornell.edu/faculty-directory/jingjie-yeo">JJ Yeo</a>. I received my B.S. in <a target="_blank" rel="noopener" href="http://mse.ahu.edu.cn/">Materials Science and Enginnering</a> from <a target="_blank" rel="noopener" href="https://www.ahu.edu.cn/">Anhui University</a>, conducted my undergraduate research at <a target="_blank" rel="noopener" href="https://en.westlake.edu.cn">Westlake University</a>, with <a target="_blank" rel="noopener" href="https://scholar.google.com/citations?user=jZhLrpMAAAAJ&hl=en">Nanjia Zhou</a></p>
            </li>
            <li><p><font color="black">I am now working in J2 research group with focus on the machine learning for materials descovery. Specifically we are trying to design ML models like random forest to discover the high entropy alloys/ceremics. Check my past <a target="_blank" rel="noopener" href="project.html">projects</a>.</p>
            </li>
            <li><p><font color="black"><strong>Additionally I am seeking for Full-stack SDE(Software Development Engineering) internship now!</strong> I have a good foundation of object-oriented programming, and familar with HTML/CSS/Javascript. I am now learning  <a target="_blank" rel="noopener" href="https://classes.cornell.edu/browse/roster/SP22/class/CS/2300">Intermediate Design and Programming for the Web</a>. Feel free to <a target="_blank" rel="noopener" href="mailto:hz253@cornell.edu">reach out</a>:).</p>
            </li>
            <!-- Source: (Original work)Menglin Wang -->
            <li><p><a href="images/Menglin Wang-CV.pdf">Curriculum Vitae</a>.</p>
            </li>
            </ul>
        </div>
        <p style="text-align: right">favicon:Source: <cite><a href="https://favicon.io/">favicon</a></cite></p>
        <p style="text-align: right">background:Source: <cite>David Besh</cite></p>
        <p style="text-align: right">icon:Source: <cite>Jinglin Li</cite></p>




      <footer id="footer">

        <div class="container">
        	<div class="row">
            <p id="copyRightEn"> &copy; 2022 Menglin Wang, All Rights Reserved.</p>
            <p> <a target="_blank" rel="noopener" href="https://www.mse.cornell.edu/research/grad-students/menglin-wang">My Cornell Webpage</a> | <a target="_blank" rel="noopener" href="http://linkedin.com/in/menglin-wang-b46a891a5">My LinkedIn </a> |  <a target="_blank" rel="noopener" href="mailto:mw976@cornell.edu">E-mail me</a> </p>
          </div>
        </div>
      </footer>
   </body>
</html>
