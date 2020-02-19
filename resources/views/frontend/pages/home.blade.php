@extends('frontend.layout.app')
@section('content')

<div class="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="heading" style="padding: 125px 0px 0px 50px;">
                    <h5>helping Companies</h5>
                    <h2>Hi there, my name is Hanapp!</h2>
                    <p>I’m a freelancer Graphic & UI/UX Design based in Dallast.I a very creative individual with 
                        excellent graphic design and illustration skills.</p>
                    <a href="#">Contact me</a>
                    <span>bearsthemes@gmail.com</span>
                </div>
            </div>
             <div class="col-md-6" style="padding-right: 0px;">
                <div class="back-img">
                    <img src="{{ asset('public/frontend/assets/images/background3.png') }}" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
</div



<!--======================PROJECT SLIDER================== -->
<section class="project-slider">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
      <section class="wrapper">
          <div class="container2">
    
            <div class="slideDiv">
        <article class="slide active">
         <img src="{{ asset('public/frontend/assets/images/development.png') }}">
          <h1>WEB DEVELOPMENT</h1>
        </article>

         <article class="slide">
         <img src="{{ asset('public/frontend/assets/images/development.png') }}">
         <h1>WEB DEVELOPMENT</h1>
        </article>

         <article class="slide">
         <img src="{{ asset('public/frontend/assets/images/development.png') }}">
          <h1>WEB DEVELOPMENT</h1>
        </article>
        
            </div>  
      
            <nav class="controls">
                <button class="button selected" type="button" aria-label="Go to first image"></button>
                <button class="button" type="button" aria-label="Go to second image"></button>
                <button class="button" type="button" aria-label="Go to third image"></button>
                <!-- <button class="button" type="button" aria-label="Go to fourth image"></button>
   -->      </nav>
            <a href="#" class="hire">Hire Us</a>
          </div>  <!-- /container -->
        </section>  <!-- /wrapper -->
<!-- partial -->
      </div>
      <div class="col-md-6">
        <div class="details">
            <h1>get your<br>
              Project started now
            </h1>
            <p>Aliquam vulputate, tortor nec commodo ultricies, vitae viverra urna nulla sed turpis. Nullam lacinia faucibus risus, a euismod lorem tincidunt id. Vestibulum imperdiet nibh vel magna lacinia ultrices. Nam ac elit a ante commodo tristique</p>
        </div>
      </div>
    </div>    
  </div>
</section>


<!--======================PROJECT SLIDER end================== -->

<!-- =====================GALLERY============================== -->
<section class="gallery">
    <!-- MAIN (Center website) -->
    <div class="main2">


        <div id="myBtnContainer" class="center-tab">
            <button class="btn active" onclick="filterSelection('all')">All</button>
            <button class="btn" onclick="filterSelection('web')">WEB DESIGN</button>
            <button class="btn" onclick="filterSelection('branding')">Branding</button>
            <button class="btn" onclick="filterSelection('graphic')"> Graphic Design</button>
            <button class="btn" onclick="filterSelection('other')"> other</button>
        </div>

        <!-- Portfolio Gallery Grid -->
        <div class="row2">
            <div class="column2 web">
                <div class="content">
                    <img src="{{ asset('public/frontend/assets/images/download.jpg') }}" alt="Mountains" style="width:100%">
                    <h4>Open Imagination</h4>
                    <p>Consultant Photography</p>
                </div>
            </div>
            <div class="column2 web">
                <div class="content">
                    <img src="{{ asset('public/frontend/assets/images/download.jpg') }}" alt="Lights" style="width:100%">
                    <h4>Open Imagination</h4>
                    <p>Consultant Photography</p>
                </div>
            </div>
            <div class="column2 web">
                <div class="content">
                    <img src="{{ asset('public/frontend/assets/images/download.jpg') }}" alt="Nature" style="width:100%">
                    <h4>Open Imagination</h4>
                    <p>Consultant Photography</p>
                </div>
            </div>

            <div class="column2 branding">
                <div class="content">
                    <img src="{{ asset('public/frontend/assets/images/download.jpg') }}" alt="Car" style="width:100%">
                    <h4>Open Imagination</h4>
                    <p>Consultant Photography</p>
                </div>
            </div>
            <div class="column2 branding">
                <div class="content">
                    <img src="{{ asset('public/frontend/assets/images/download.jpg') }}" alt="Car" style="width:100%">
                    <h4>Open Imagination</h4>
                    <p>Consultant Photography</p>
                </div>
            </div>
            <div class="column2 branding">
                <div class="content">
                    <img src="{{ asset('public/frontend/assets/images/download.jpg') }}" alt="Car" style="width:100%">
                    <h4>Open Imagination</h4>
                    <p>Consultant Photography</p>
                </div>
            </div>

            <div class="column2 graphic">
                <div class="content">
                    <img src="{{ asset('public/frontend/assets/images/download.jpg') }}" alt="Car" style="width:100%">
                    <h4>Open Imagination</h4>
                    <p>Consultant Photography</p>
                </div>
            </div>
            <div class="column2 graphic">
                <div class="content">
                    <img src="{{ asset('public/frontend/assets/images/download.jpg') }}" alt="Car" style="width:100%">
                    <h4>Open Imagination</h4>
                    <p>Consultant Photography</p>
                </div>
            </div>
            <div class="column2 graphic">
                <div class="content">
                    <img src="{{ asset('public/frontend/assets/images/download.jpg') }}" alt="Car" style="width:100%">
                    <h4>Open Imagination</h4>
                    <p>Consultant Photography</p>
                </div>
            </div>

            <div class="column2 other">
                <div class="content">
                    <img src="{{ asset('public/frontend/assets/images/download.jpg') }}" alt="Car" style="width:100%">
                    <h4>Open Imagination</h4>
                    <p>Consultant Photography</p>
                </div>
            </div>
            <!-- END GRID -->
        </div>

        <!-- END MAIN -->
    </div>

</section>
<!-- =====================GALLERY end============================== -->


<!-- =======================SKILLS ================================== -->
<section class="skills-section">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">

                <div class="skills" data-percent="95%">
                    <div class="title-bar">
                        <h5>Marketing Online</h5>
                    </div>
                    <span>95%</span>
                    <div class="skillbar"></div>  
                </div>
                <div class="skills" data-percent="60%">
                    <div class="title-bar">
                        <h5>Marketing Online</h5>
                    </div>
                    <span>60%</span>
                    <div class="skillbar"></div>  
                </div>
                <div class="skills" data-percent="85%">
                    <div class="title-bar">
                        <h5>Marketing Online</h5>
                    </div>
                    <span>85%</span>
                    <div class="skillbar"></div>  
                </div>

            </div>
            <div class="col-md-5">
                <div class="skill-details">
                    <h1>We are the best consulting</h1> 
                    <h2>Company business and innovation marketing.</h2>
                    <a href="#" class="join-us"> Join us now</a>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>  
    </div>
</section>

<!-- =======================SKILLS end ================================== -->
@endsection
