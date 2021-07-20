<?php

require_once 'include/common.php';

$_SESSION['lastUrl'] = $_SERVER['REQUEST_URI'];
// if($_SESSION['userInfo']==null){
//   header("Location:login.php");
//   exit();
// }

?>

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/styles.css">
  <style>
    *{
      margin-left: auto;
      margin-right: auto;
      padding:5px;
    }
    .image {
  position: relative;
  width: 248px;
  max-width: 300px;
}
    .overlay {
      position:absolute;
  bottom: 0; 
  background: rgb(144, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 248px;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

.image:hover .overlay {
  opacity: 1;
}
  </style>

</head>
<body>
  
<nav class="navbar navbar-expand-lg ">
      <a class="navbar-brand" href="index.php">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <!-- <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li> -->
          <?php
          if($_SESSION['userInfo']==null){
            echo"          
            <li class='nav-item active'>
              <a class='nav-link' href='login.php'>Login<span class='sr-only'></span></a>
            </li>";
          }else{
            echo"          
            <li class='nav-item active'>
              <a class='nav-link' href='logoutAction.php'>Log out<span class='sr-only'></span></a>
            </li>";
          }


          ?>
          

        </ul>

      </div>
    </nav>
    <div class="container">

      <main>
        <form>
          <label for="search">Search</label>
          <input id="search" type="search" />
          <button id="btnSearch">Go</button>
        </form>
        <div id="images-wrapper"></div>
      </main>
      <script>
        let APIKEY = "tI5OhcW8bUfvnxQJlhshyefmf0F5VJrk";
        // you will need to get your own API KEY
        // https://developers.giphy.com/dashboard/
        document.addEventListener("DOMContentLoaded", init);
        function init() {
          document.getElementById("btnSearch").addEventListener("click", ev => {
            ev.preventDefault(); //to stop the page reload
            let url = `https://api.giphy.com/v1/gifs/search?api_key=${APIKEY}&q=`;
            let str = document.getElementById("search").value.trim();
            url = url.concat(str);
            console.log(url);
            fetch(url)
              .then(response => response.json())
              .then(content => {
                //  data, pagination, meta
                // let fig = document.createElement("figure");
                // let img = document.createElement("img");
                // let fc = document.createElement("figcaption")
                // img.src = content.data[0].images.downsized.url;
                console.log(content);
                let container = document.getElementById("images-wrapper");
                container.innerHTML = '';
                
                for(let i =0 ;i<content.data.length;i++){
                  let imgContainer = document.createElement("div");

                  let img=document.createElement("img");

                  img.src=content.data[i].images.downsized.url;
                  img.style="width:248px;";
                  imgContainer.classList.add("image");;

                  imgContainer.appendChild(img);

                  let title = document.createElement("p");
                  title.innerHTML =content.data[i].title;
                  title.style="font-size:10px ;"
                  title.classList.add("overlay");;
                  imgContainer.appendChild(title);
                  imgContainer.style="display: inline-block;";
                  container.appendChild(imgContainer);

                  
                }
              })
              .catch(err => {
                console.error(err);
              });
          });
        }
      </script>
    </div>
</body>
</html>

