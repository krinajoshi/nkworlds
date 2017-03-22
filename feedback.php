<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
    <link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css"
        rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        $(function () {
            $("#dialog").dialog({
                modal: true,
                autoOpen: false,
                title: "Your Feedback Is Valuable",
                width: 100%; /* Full width */
				height: 100%; /* Full height */
				overflow: auto;
				});
            $("#btnShow").click(function () {
                $('#dialog').dialog('open');
            });
        });
    </script>
	
<style>

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

	<div class="element"><img id="btnShow" src="images/happy.png" width="50" height="50"></div>
    <div id="dialog" style="display: none" align="center">


<div>
  <form action="#"  method="get">
    <label for="firstname">Name</label>
    <input type="text" id="firstname" name="firstname">

    <label for="email">Email</label>
    <input type="text" id="email" name="lastname">

    <label for="feedback">Feedback</label>
	<br>
    <textarea name="feedback" cols="56" rows="4">
	</textarea>
  <br><br>
    <input type="submit" value="Submit">
  </form>
</div>

</div>
</body>
</html>

<?php 
echo $firstname=$_POST['firstname'];
echo $email= $_POST['lastname'];
echo $feedback= $_POST['feedback'];
$to = "krinajoshi@rocketmail.com";
$subject = "Feedback:NkWorlds";
$txt = "Name: ".$firstname. "\r\n";
$txt .= "Email: ". $email . "\r\n";
$txt .= "Feedback: ".$feedback. "\r\n";

$headers = "From: info@nkworlds.com";

mail($to,$subject,$txt,$headers);
?>