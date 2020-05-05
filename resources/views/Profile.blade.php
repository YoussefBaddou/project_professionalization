<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Welcome-Page</title>
    <link rel="stylesheet" type="text/css" href="../Design/CSS/style-profile.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha256-L/W5Wfqfa0sdBNIKN9cG6QA5F2qx4qICmU2VgLruv9Y="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../Design/CSS/Welcome-Page.css" />
	<style type="text/css">
	
@media (max-width: 992px) {

nav .form-control{
  margin-right: 0px;
}
  .mobileMenu {
    -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
    position: fixed;
    top: 0px;
    bottom: 0;
    margin: auto;
    left: 0;
    -webkit-transition: all ease 0.25s;
    transition: all ease 0.25s;
  }
  .mobileMenu.open {
    -webkit-transform: translateX(0%);
            transform: translateX(0%);
  }
  .mobileMenu .navbar-nav {
    overflow-y: auto;
  }
  .overlay {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    background-color: rgba(0, 0, 0, 0.5);
    display: none;
  }
  .overlay.open {
    display: block;
    z-index: 1029;
  }
}
/*# sourceMappingURL=style.css.map */
      body {
  background-image: url("../images/Background.png");
   background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
.imgnav{
  padding-right: 80px;
}
.center{
background: rgb(0, 151, 19, 0.7); 
margin-top: 50px;}

p{
size: 14px;
}

h1{
size:20px;
}
footer{
  background-color: rgb(64, 64, 64);
}
/*Profile css part */
h3
{
	color:green;
	text-decoration:underline;
}
.profile
{
	margin:center;
}
label
{
	font-size:15px;
}
.btnvalider
{
	font-size:15px; 
}
.btndeco
{
	font-size:15px; 
	margin-left:68px;
}
hr
{
	background-color:black;
}
.img
{
	height:60px;
	width:60px;
	margin-left:200px;
}
.box select
{
	border:solid;
	background :skyblue;
	color: white;
	-webkit-apparance : button;
	height:40px;
}
.nav li
{
  display:inline-block;
}
.nav a
{
  text-decoration:none;
  width:100px;
  display:block;
  padding:15px;
  font-size:17px;
  font-family:Helvetica;
  transition:0;
}
    </style>
  </head>


  <body>
    <nav
      class="navbar navbar-expand-sm navbar-dark bg-dark"
    >
      <div class="container-fluid">
        <a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 mr-auto" href="#"
          ><img src="../images/ABT-Logo.png" class="imgnav"></a>
        <button class="navbar-toggler align-self-start" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>

 <form class="form-inline my-2 my-lg-0 align-self-stretch">
            <input
              class="form-control mr-sm-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
              Search
            </button>
          </form>


        <div
          class="collapse navbar-collapse bg-dark p-3 p-lg-0 mt-5 mt-lg-0 d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end mobileMenu"
          id="navbarSupportedContent" style="margin-right:430px">
          <ul class="navbar-nav align-self-stretch">
            <li class="nav-item active">
              <a class="nav-link" href="#">Editer <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Visualiser <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown" >
			      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" style="color:white;">Vous</a>
			      <div class="dropdown-menu" style="width:400px;">


      <!--Quand on click sur le bouton Profile -->
				
				<img src="../images/icon.jpg" class="img" style="margin-left:30px;">
				<br \>
				<div class="container" >
				<div class="form-group">
				
				<form method="post" action="">
				<h3>Info Personnelles</h3>	
				<label class="text-info" name="nom">Nom :</label>
				<input type="text" id="nom" name="nom" class="form-control" value="" placeholder="Your name">

				<label class="text-info">Prenom :</label>
				<input type="text" id="prenom" name="prenom" class="form-control" value="" placeholder="Your surname">

				<label class="text-info" name="email" >Email :</label>
				<input type="text" id="email" name="email" class="form-control" value="" placeholder="Your email">

				<label class="text-info" name="login"  >Login :</label>
				<input type="text" id="login" name="login" class="form-control" value="" placeholder="Your login">

				<label class="text-info" name="motdepasse" >MotDePasse :</label>
				<input type="text" id="motdepasse" name="motdepasse" class="form-control" value="" placeholder="Your Password">

				<label class="text-info" name="tel"  >Tel :</label>
				<input type="text" id="tel" name="tel" class="form-control" value="" placeholder="Your Phone">

				<label class="text-info" name="adresse"  >Adresse :</label>
				<input type="text" id="adresse" name="adresse" class="form-control" value="" placeholder="Your adresse">
				<br \>	
				<div class="btnvalider">	
				<button type="button" name="button" class="btn btn-outline-info btn-lg" href="#" >Valider</button>
				</div>

				<hr class="light">	


				<h3>Info Matières</h3>
				<label class="text-info" name="matiere">Matière :</label>	
				<div class="box">
				<select>
					<option>Language C</option>
					<option>Language JAVA</option>
					<option>Language Python</option>
					<option>Methodes Formelles</option>
					<option>Software Architecture</option>
				</select>
				</div>

				<br \>

				<div class="form-group">
				<form name="add_name" id="add_name">
					<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_field2">
							<tr>
								<td><input type="text" name="name[]" placeholder="Add Competence" class="form-control name_list" /></td>
								<td><button type="button" name="add2" id="add2" class="btn btn-success">+</button></td>
								<td><input type="button" name="submit2" id="submit2" class="btn btn-info" value="✓" /></td>
							</tr>
						</table>						
					</div>
				</form>
				</div>	

				<hr class="light">

				<h3>Info Matières</h3>

				<div class="form-group">
				<form name="add_name" id="add_name">
					<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_field">
							<tr>
								<td><input type="text" name="name[]" placeholder="Add Module" class="form-control name_list" /></td>
								<td><button type="button" name="add" id="add" class="btn btn-success">+</button></td>
								<td><input type="button" name="submit" id="submit" class="btn btn-info" value="✓" /></td>
							</tr>
						</table>
					</div>
				</form>
				</div>



				<div class="btnvalider">
				<button type="button" name="button" class="btn btn-outline-info btn-lg" href="#" >Valider</button>
				</div>	
				<hr class="light">
				<div  class="btndeco">
				<button type="button" name="button" class="btn btn-secondary" href="#" class="btndeco">Deconnexion</button>
				</div>	
	

				</form>
				</div>
				</div>
				</div>
				</div>
        </div>
				</li>
        </ul>
        <!-- End josef--> 

        <ul class="navbar-nav align-self-stretch">
            <li class="nav-item active">
              <a class="nav-link" href="#" style="margin-top:8.5px;">LogOut <span class="sr-only">(current)</span></a>
            </li>
    </nav>



    <div class="overlay"></div>
    <div class="container py-4 my-5">
      <div class="row">
        <div class="center">
        <div class="col-md-12">
          <h1> Welcome to Associated Beauty Therapists (ABT) </h1>
          <p>Whether you work from home, mobile or a salon location, Associated Beauty Therapists completely understands your business and treatment portfolio.  With a specialist understanding of the sector, staff that have previously worked in the industry and a dedicated team of professionals with over 50 years of beauty market experience, we work tirelessly to protect your business.

ABT is the largest beauty and insurance membership provider in the UK, with over 18,000 active and insured business owners.</p>
        <h1> Reasons Why You should join ABT</h1>
          <p>We aim to provide you with an affordable insurance solution which includes cover to work from home, salon or any other safe location in the UK or temporarily abroad (other than USA or Canada). In addition to the below, we give you unlimited defence costs per claim with an unlimited number of claims in a year.
ABT is the largest beauty and insurance membership provider in the UK, with over 18,000 active and insured business owners.</p>

		 <h1> Welcome to Associated Beauty Therapists (ABT) </h1>
          <p>Whether you work from home, mobile or a salon location, Associated Beauty Therapists completely understands your business and treatment portfolio.  With a specialist understanding of the sector, staff that have previously worked in the industry and a dedicated team of professionals with over 50 years of beauty market experience, we work tirelessly to protect your business.

ABT is the largest beauty and insurance membership provider in the UK, with over 18,000 active and insured business owners.</p>
        <h1> Reasons Why You should join ABT</h1>
          <p>We aim to provide you with an affordable insurance solution which includes cover to work from home, salon or any other safe location in the UK or temporarily abroad (other than USA or Canada). In addition to the below, we give you unlimited defence costs per claim with an unlimited number of claims in a year.

            <p>We aim to provide you with an affordable insurance solution which includes cover to work from home, salon or any other safe location in the UK or temporarily abroad (other than USA or Canada). In addition to the below, we give you unlimited defence costs per claim with an unlimited number of claims in a year.
ABT is the largest beauty and insurance membership provider in the UK, with over 18,000 active and insured business owners.</p>
    <p>We aim to provide you with an affordable insurance solution which includes cover to work from home, salon or any other safe location in the UK or temporarily abroad (other than USA or Canada). In addition to the below, we give you unlimited defence costs per claim with an unlimited number of claims in a year.
ABT is the largest beauty and insurance membership provider in the UK, with over 18,000 active and insured business owners.</p>
		<h1> Reasons Why You should join ABT</h1>
          <p>We aim to provide you with an affordable insurance solution which includes cover to work from home, salon or any other safe location in the UK or temporarily abroad (other than USA or Canada). In addition to the below, we give you unlimited defence costs per claim with an unlimited number of claims in a year.


        </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"
      integrity="sha256-OUFW7hFO0/r5aEGTQOz9F/aXQOt+TwqI1Z4fbVvww04="
      crossorigin="anonymous"
    ></script>

    <script src="../Design/JS/Welcome-Page.js"></script>
    <!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">
<div>
  <!-- Footer Elements -->
  <div class="container">

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-md-6 mb-4">

        <!-- Form -->
        <form class="form-inline">
          <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
            aria-label="Search">
          <i class="fas fa-search" aria-hidden="true"></i>
        </form>
        <!-- Form -->

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-6 mb-4">

        <form class="input-group">
          <input type="text" class="form-control form-control-sm" placeholder="Your email"
            aria-label="Your email" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-sm btn-outline-white my-0" type="button">Sign up</button>
          </div>
        </form>

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fma.linkedin.com%2Fin%2Flamnini-anas-4a8bb113b&psig=AOvVaw2qat_7UvvKApxcmhBe5q8x&ust=1583969271120000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCKDhjvz9kOgCFQAAAAAdAAAAABAE"> Anas Le Ponctinu</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
  </body>
</html>





<script>
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Add Module" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">x</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	$('#submit').click(function(){		
		$.ajax({
			url:"name.php",
			method:"POST",
			data:$('#add_name').serialize(),
			success:function(data)
			{
				alert(data);
				$('#add_name')[0].reset();
			}
		});
	});
	
});
</script>


<script>
$(document).ready(function(){
	var i=1;
	$('#add2').click(function(){
		i++;
		$('#dynamic_field2').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Add Competence" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">x</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	$('#submit2').click(function(){		
		$.ajax({
			url:"name.php",
			method:"POST",
			data:$('#add_name').serialize(),
			success:function(data)
			{
				alert(data);
				$('#add_name')[0].reset();
			}
		});
	});
	
});
</script>
