<DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scalable=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualisation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style-profile.css">
        <link rel="stylesheet" type="text/css" href="../css/Welcome-Page.css">
        <link rel="stylesheet" type="text/css"
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <style type="text/css">

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


h3
{
	color:green;
	text-decoration:underline;
}
.profile
{
	margin-left:205px;
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
	width: 500px;
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
				
				<form method="post" action="" style="width:370px;">
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
				<div class="box" >
				<select style="width:370px;">
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

    <br \><br \>




    <div class="container-fluid padding">
<div class="row welcome text-center">
  <div class="col-12">
      <h2 style="color:black">VISUALISATION</h2> 
    </div>  
</div>
<hr style="width: 1000px;">
</div> <br \><br \>




    <div class="container">
      <div class="jumbotron">
      <form action="{{ route('adddocs') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group">
                <label>Document Name</label>
                <input type="text" name="DocumentName" class="form-control" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <label>Description</label>
                <input type="text" name="Description" class="form-control" placeholder="Enter your Document Description">
            </div>        

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input">
                    <label class="custom-file-label">Choose file</label>
                </div>
            </div>          
            <button type="submit" name="submit" class="btn btn-primary"> Save Data </button>
        </form>
      </div>
    </div>

<br \><br \><br \><br \><br \><br \><br \><br \><br \><br \><br \><br \><br \><br \><br \><br \><br \><br \><br \><br \>
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