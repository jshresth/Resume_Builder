<!DOCTYPE html>
<html>

<head>
    <title>Sexysphere</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/sexysphere.css">
</head>
<?php
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$add= $_POST['add'];
$city= $_POST['city'];
$state= $_POST['state'];
$zcode= $_POST['zcode'];
$profile= $_POST['profile'];
$phone= $_POST['phone'];
$email= $_POST['email'];
?>
<body>
	<div class="content_body">
    <div class="resume_pt1">
        <div class="intro">

        	<?php
            '<h2 class="name">'. echo $fname.'</h2>
            <p class="address">
                <i class="fas fa-location-arrow"></i>'.$add.','.$city.','.$state.
                '<p>
                    <p class="email">
                        <i class="fas fa-envelope"></i>'.$email.
                    '</p>
                    <p class="phone">
                        <i class="fas fa-phone-alt"></i>'.$phone.
                    '</p>
        </div>

        <div class="bio">
            <h3 class="topic"><i class="fas fa-edit"></i>Professional summary</h3>
            <p class="bio_text">'.$profile.
            '</p>'
            ?>
        </div>

        <div class="job_history">
            <h3 class="topic"><i class="fas fa-briefcase"></i> Employment history
            </h3>

            <div class="jobs">
                <h4 class="job_head">My Employment 1</h4>
                <h5 class="job_date">May 2017 - Current</h5>
                <ul class="job_desc">
                    <li>Head of FrontEnd Designing</li>
                    <li>Recruitment Assistant</li>
                </ul>
            </div>
            <div class="jobs">
                <h4 class="job_head">My Employment 1</h4>
                <h5 class="job_date">May 2017 - Current</h5>
                <ul class="job_desc">
                    <li>Head of FrontEnd Designing</li>
                    <li>Recruitment Assistant</li>
                </ul>
            </div>
            <div class="jobs">
                <h4 class="job_head">My Employment 1</h4>
                <h5 class="job_date">May 2017 - Current</h5>
                <ul class="job_desc">
                    <li>Head of FrontEnd Designing</li>
                    <li>Recruitment Assistant</li>
                </ul>
            </div>
            <div class="jobs">
                <h4 class="job_head">My Employment 1</h4>
                <h5 class="job_date">May 2017 - Current</h5>
                <ul class="job_desc">
                    <li>Head of FrontEnd Designing</li>
                    <li>Recruitment Assistant</li>
                </ul>
            </div>
            <div class="jobs">
                <h4 class="job_head">My Employment 1</h4>
                <h5 class="job_date">May 2017 - Current</h5>
                <ul class="job_desc">
                    <li>Head of FrontEnd Designing</li>
                    <li>Recruitment Assistant</li>
                </ul>
            </div>

            <div class="jobs">
                <h4 class="job_head">My Employment 2</h4>
                <h5 class="job_date">October 2015 - April 2016</h5>
                <ul class="job_desc">
                    <li>Python Web Developer</li>
                    <li>Cloud Development</li>
                </ul>
            </div>
        </div>

        <div class="education_history">
            <h3 class="topic"><i class="fas fa-graduation-cap"></i>Education</h3>

            <div class="edu">
                <h4 class="job_head">Bsc Birendra College</h4>
                <h5 class="job_date">May 2017 - Current</h5>
            </div>

            <div class="edu">
                <h4 class="job_head">High School Valmiki School</h4>
                <h5 class="job_date">April 2015 - March 2017</h5>
            </div>
        </div>
    </div>


    <div class="resume_pt2">
        <div class="honors_history">
            <h3 class="topic"><i class="fas fa-award"></i>Honors</h3>
            <div class="his1">
                <h4 class="job_head">President of Eco Club</h4>
                <h5 class="job_date">June 2015 - Current</h5>
            </div>
        </div>

        <div class="skills_history">
            <h3 class="topic"><i class="fas fa-user-cog"></i>Skills</h3>

            <div class="skills_set">
                <ul class="skills">
                    <li>Python</li>
                    <li>JavaScript</li>
                    <li>Java</li>
                    <li>CSS</li>
                </ul>
            </div>
        </div>

        <div class="hobbies_history">
            <h3 class="topic"><i class="fas fa-heart"></i>Hobbies</h3>

            <div class="hobbies_set">
                <ul class="hobbies">
                    <li>Photography</li>
                    <!-- <progress value = "65" min = "0" max = "100"/> -->
                    <li>Video Editing</li>
                    <li>Chess</li>
                    <li>CallBreak</li>
                    <div class="progress-bar"></div>
                </ul>
            </div>
        </div>

        <div class="lang_history">
            <h3 class="topic"><i class="fas fa-globe-americas"></i>Languages</h3>

            <div class="lan_set">
                <ul class="languages">
                    <li>English</li>
                    <li>Nepali</li>
                    <li>Hindi</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html