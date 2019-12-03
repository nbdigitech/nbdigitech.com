


<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vision API</title>
    <meta name="description" content="Marshall - Ultimate Coming Soon Template by pixiefy">
    <meta name="author" content="pixiefy">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
.wrapper{
  width:100%;
  height:100%;
  display:flex;
  align-items:center;
  justify-content:center;
  }

  .file-upload{
    height:200px;
    width:200px;
    border-radius: 100px;
    position:relative;
    display: block;
    cursor: pointer;
    display:flex;
    justify-content:center;
    align-items: center;  

    border:4px solid #FFFFFF;
    overflow:hidden;
    background-image: linear-gradient(to bottom, #2590EB 50%, #FFFFFF 50%);
    background-size: 100% 200%;
    transition: all 1s;
    color: #FFFFFF;
    font-size:100px;
}
    input[type='file']{

      height:200px;
      width:200px;
      position:absolute;
      top:0;
      left:0;

      opacity:0;
      cursor:pointer;

    }

    #f:hover{

      background-position: 0 -100%;

      color:#2590EB;

    }


  }
}

	</style>
</head>
<body class="mrs-v18 mrs-white">
	<div class="container-fluid">
		<div class="row" style="height: 100vh;">

			<div class="col-sm-6 col-md-6 col-lg-6" style="height: 100vh; background: #2590EB;">
<img src="https://www.nbdigitech.com/assets/img/logo.png" style="position: absolute; margin-top: 10px;">
				<div class="wrapper">

					 <h1 style="margin-top: 150px;  font-weight: bold;color: white; position: absolute;">Image To Text API</h1>
					 <h4 style="color:white; font-weight: bold; position: absolute; margin-top: 220px; text-align: center; line-height: 30px;">Creates an image from scratch from a text description</h4>
  <div class="file-upload">
    <form action="result.php" method="post" enctype="multipart/form-data" id="form_id">
    <input type="file" id="f" multiple="true" name="file" />
  </form>
    <i class="fa fa-arrow-up"></i>
  </div>



</div>

			</div>

			<div class="col-sm-6 col-md-6 col-lg-6" style="background: #1B222C; height: 100vh;">
				<img src="images/rocket.gif"  style="width: 100%; margin-top: 100px;">
			</div>
		</div>
	</div>
</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#f").change(function(){
      document.getElementById("form_id").submit();
    });
  });
</script>
</html>