<?php
    //Header 
    require_once ('./header.php');
?>

<main>
    <!-- First Parallax Section -->
    <!-- First Image Section -->
    <div class="jumbotron sectionImg imageSec1">
        <h1 class="display-3 pt-1">Welcome to<br>Lpu Grievance Management System</h1>
        <p class="lead">Got Complaints, We are here to Assist.</p>
        <p class="lead">
            <a class="btn btn-danger btn-lg btn-md" href="http://localhost/ComplaintSystem-master/dashboard/#complaints" role="button">File a Complaint</a>
            <a class="btn btn-primary btn-lg btn-md" href="http://localhost/ComplaintSystem-master/dashboard/#" role="button">Check Status</a>
        </p>
    </div>

    <!-- First Content Section -->
    <div class="jumbotron sectionContent contentSec" id="announcements">
        <h1 class="display-3">Announcements Section</h1>
        <p class="lead">Date 13-10-22 classes will be suspended after 2:00 pm.</p>
    </div>
    <!-- End First Parallax Section -->
     
    <!-- Second Parallax Section -->
    <!-- Second Image Section -->
    <div class="jumbotron sectionImg imageSec2">
        <h1 class="display-3">Announcements</h1>
        <p class="lead"></p>
        <p class="lead">
            <a class="btn btn-success btn-lg btn-md" href="https://happenings.lpu.in" role="button">Check Announcements</a>
        </p>
    </div>

    <!-- Second Content Section -->
    <div class="jumbotron sectionContent contentSec" id="about">
        <h1 class="display-3">About the Project</h1>
        <p class="lead">We maintain and manages all the complaints.<br>
        This LPU grievance Management System check where staff and students are facing common issues.</p>
    </div>
    
</main>

<?php
    // Footer
    require_once ('./footer.php');
?>