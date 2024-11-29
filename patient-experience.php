<?php 
$pageTitle = "Plastic Surgeon Testimonials – Patient Experiences & Success Stories";
$pageDescription="";
$pageKeyword = "";
include('header.php');
?>

<section class="section-heading">
    <div class="overlay">
        <div class="container-xxl">
            <h1>About Dr. Preeti Yadav</h1>
            <span class="text-warning">About Dr. Preeti Yadav</span>
        </div>
    </div>
</section>

<section class="x-section">
        <div class="container">
      <div class="para2 text-uppercase text-center sectionHeading fw-bold">Patient Experiences from Our Valued Patients</div>

      <?php 
        include('reviews.php');
        ?>
        </div>
</section>


<section class="x-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6"> <iframe class="default-frame" src="https://youtube.com/embed/D_IPL1n7Wiw"></iframe></div>
            <div class="col-md-6"></div>
        </div>
   
    </div>
</section>


<?php
include('footer.php');
?>