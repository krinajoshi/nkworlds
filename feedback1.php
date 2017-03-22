<!DOCTYPE html>
<html>
<head>
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #E74C3C;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #E74C3C;
    color: white;
}

.element	
{ 
position:fixed; top:90%; left:2%; 
    padding: 10px;
	 -webkit-animation-name: bounce;
  animation-name: bounce;
  -webkit-transform-origin: center bottom;
  -ms-transform-origin: center bottom;
  transform-origin: center bottom;
  -webkit-animation-duration:3s;
  animation-duration:3s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  animation-iteration-count:infinite;
  }
  @-webkit-keyframes bounce {
  0%, 20%, 53%, 80%, 100% {
  -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
  }
  40%, 43% {
  -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
  transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
  -webkit-transform: translate3d(0, -30px, 0);
  transform: translate3d(0, -30px, 0);
  }
  70% {
  -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
  transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
  -webkit-transform: translate3d(0, -15px, 0);
  transform: translate3d(0, -15px, 0);
  }
  90% {
  -webkit-transform: translate3d(0,-4px,0);
  transform: translate3d(0,-4px,0);
  }
  }
  
  @keyframes bounce {
  0%, 20%, 53%, 80%, 100% {
  -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
  }
  40%, 43% {
  -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
  transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
  -webkit-transform: translate3d(0, -30px, 0);
  transform: translate3d(0, -30px, 0);
  }
  70% {
  -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
  transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
  -webkit-transform: translate3d(0, -15px, 0);
  transform: translate3d(0, -15px, 0);
  }
  90% { -webkit-transform: translate3d(0,-4px,0); transform: translate3d(0,-4px,0);
  }
	
}
</style>
</head>
<body>


<!-- Trigger/Open The Modal -->
<div class="element">
<img id="myBtn" src="images/happy.png" width="50" height="50">
</div>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">x</span>
      <h4>Your Feedback Is Valuable</h4>
    </div>
    <div class="modal-body">
      <p>  <form action="#" method="post">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="firstname">

    <label for="lname">Email</label>
    <input type="text" id="lname" name="lastname">

    <label for="feedback">Feedback</label>
	<br>
    <textarea name="feedback" style="width:100%" rows="4">
	</textarea>
  <br><br>
    <input type="submit" value="Submit">
  </form></p>
    </div>
    <div class="modal-footer">
	<h3></h3>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>

<?php 
$firstname=$_POST['firstname'];
$email= $_POST['lastname'];
$feedback= $_POST['feedback'];
$to = "info@nkworlds.com";
$subject = "Feedback:NkWorlds";
$txt = "Name: ".$firstname. "\r\n";
$txt .= "Email: ". $email . "\r\n";
$txt .= "Feedback: ".$feedback. "\r\n";

$headers = "From: growth@nkworlds.com";

mail($to,$subject,$txt,$headers);
?>