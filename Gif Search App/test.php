<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

.container {
  position: relative;
  width: 50%;
  max-width: 300px;
}



.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
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

.container:hover .overlay {
  opacity: 1;
}
</style>
</head>
<body>

<h2>Image Overlay Title</h2>
<p>Hover over the image to see the effect.</p>

<div class="container">
<img src="https://media4.giphy.com/media/9C1nyePnovqlpEYFMD/giphy.gif?cid=725e4eed161pc5uyutub9fz9p28dffb6jprrsrqeo6pvy2qh&amp;rid=giphy.gif&amp;ct=g" style="width: 248px; display: inline;" class="image">
  <div class="overlay">My Name is John</div>

</div>
<div class="container">
<img src="https://media4.giphy.com/media/9C1nyePnovqlpEYFMD/giphy.gif?cid=725e4eed161pc5uyutub9fz9p28dffb6jprrsrqeo6pvy2qh&amp;rid=giphy.gif&amp;ct=g" style="width: 248px; display: inline;" class="image">
  <div class="overlay">My Name idsdsJohn</div>

</div>
</body>
</html>
