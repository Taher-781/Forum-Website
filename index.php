<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Valotalk</title>
</head>

<body>

    <?php include 'partials/_header.php' ?>
    <?php include 'partials/_dbconnect.php' ?>

    <img src="https://gumlet.assettype.com/afkgaming%2Fimport%2Fmedia%2Fimages%2F97672-1f36a4f2cbf61c0fa45a7e242364aa02.jpeg?format=auto"
        class="img" alt="..." height=700 width=1500>


    <div class="container my-3">
        <h2 class="text-center my-3">Valotalk browse-categories</h2>
        <div class="row">



<?php 
$sql="SELECT * FROM `agent`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
    $id=$row['agent_id'];
    $name=$row['agent_name'];
    $disc=$row['agent_description'];
    $img=$row['agent_img'];
  echo '<div class="col-md-4 my-2">
  <div class="card" style="width: 18rem;">
  <h5 class="text-center"><a href="threadlist.php?catid=' .$id. '">'    .$name.  '</a></h5>
      <img src=' .$img. '  ,computer" class="card-img-top" alt="...">
      <div class="card-body">
      
          
          
          <p class="card-text">'.substr($disc,0,20).'...</p>
          <a href="threadlist.php?catid=' .$id. '" class="btn btn-success">Threads</a>
      </div>
  </div>
</div>';

}




?>







        </div>
    </div>




    <?php include 'partials/_footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>