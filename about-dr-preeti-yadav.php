<?php 
$pageTitle = "Dr Preeti Yadav for Aesthetic Excellence in Cosmetic Surgery";
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
    <div class="container-xxl">
        <div class="row">
            <div class="col-md-6">
                <div class="">
                        <h6 class="text-uppercase main-color">About</h6>
                    <h2 class="h1 fw-bold text-uppercase">premier destination to enhance your inner beauty</h2>
                    <p class="lh">We specialize in personalized aesthetic solutions that combine artistry, precision, and robust technology.</p>

                   <div class="my-3">
                   <h5 class="text-uppercase ls2 mb-5">Advanced Cosmetic Treatments</h5>
                   <h5 class="text-uppercase ls2 mb-5">Natural-Looking Results</h5>
                   <h5 class="text-uppercase ls2 mb-5">Invasive/Non-Invasive Procedures</h5>
                   </div>

                   <p class=" mt-5"><a href="" class="btn-default">REACH US OUT</a></p>
                    
                </div>
            </div>
            <div class="col-md-6 aboutBg">
                   <div class="aboutOverlay d-none d-md-block bg-white py-5 px-5 mx-3">
                        <div class="row">
                                <div class="col-md-6">
                                        <p class="lh">Our mission is to offer world-class personalized services that focus on every patient's needs.</p>
                                        <h4 class="text-uppercase fw-bold">our mission</h4>
                                </div>
                                <div class="col-md-6">
                                <p class="lh">Our vision is to be a leader in delivering services that enhance both appearance and confidence.</p>
                                <h4 class="text-uppercase fw-bold">our vision</h4>
                                </div>
                        </div>
                   </div>
                   
            </div>
        </div>
    </div>
</section>

<?php 
        include('procedure.php');
        ?>
    
<!-- book -->
<?php 
include('book-your-slot.php')
?>


<!-- about dr. Preeti Section -->
<section class="x-section mainBorderBottom pb-0">
        <div class="container">
                <div class="row justify-content-between">
                        <div class="col-md-6">
                                <img src="./assets/images/heroSectionImage.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                                <h6 class="text-uppercase">Plastic Surgeon in Gurgaon</h6>
                                <h2 class="text-uppercase fw-bold">Dr. Preeti Yadav</h2>

                                <p class="lh">MBBS, MCh - Plastic Surgery, MS - General Surgery</p>

                                <ul class="lh ps-4">
                                        <li>Dr Preeti Yadav believes in delivering the highest calibre of expertise for every surgery she performs.</li>
                                        <li>Dr Preeti consistently invents and improves her surgical methods to give satisfying results.</li>
                                        <li>She stays updated and familiar with evolving technology to offer her prestigious clients the most advanced, high-tech solutions accessible.</li>
                                        <li>She adheres to the highest levels of international standards in terms of safeguarding patient privacy, sanitation, and post-surgery recovery assistance.</li>
                                        <li>Dr Preeti Yadav takes care of your psychological requirements before, during, and post the surgery.</li>
                                </ul>

                                <p class=" mt-5 text-center"><a href="tel:+918100600400" class="btn-default">CALL NOW - 081006 00400</a></p>
                        </div>
                </div>
        </div>
</section>


<!-- experience -->

<section class="x-section">
        <div class="container experienceContainer d-flex flex-wrap">
                <div class="numbers d-flex justify-content-center flex-column align-items-center">
                <div class="display-1 fw-bold dark-main ">
                        <span class="years">15</span>+
                </div>
                <span class="text-uppercase text-dark fw-bold">years</span>
                </div>
                <div class="numbers d-flex justify-content-center flex-column align-items-center">
                <div class="display-1 fw-bold dark-main ">
                        <span class="patients">5000</span>+
                </div>
                <span class="text-uppercase text-dark fw-bold">patients</span>
                </div>
                <div class="numbers d-flex justify-content-center flex-column align-items-center">
                <div class="display-1 fw-bold dark-main">
                        <span class="surgeries">36</span>+
                </div>
                <span class="text-uppercase text-dark fw-bold">surgeries</span>
                </div>
                <div class="numbers d-flex justify-content-center flex-column align-items-center">
                <div class="display-1 fw-bold dark-main ">
                     <span class="staff"> 23</span>
                       +
                </div>
                <span class="text-uppercase text-dark fw-bold">staff</span>
                </div>
        </div>
</section>


<section class="x-section aboutTestimonial">
        <div class="container">
        <div class="para1 text-uppercase text-center dark-main">reviews</div>
      <div class="para2 text-uppercase text-center sectionHeading fw-bold">Our Happy Patient Thoughts</div>

      <?php 
        include('reviews.php');
        ?>
        </div>
</section>



<?php
include('footer.php');
?>