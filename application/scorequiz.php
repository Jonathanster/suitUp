<html>
<head>
	<title> Suit-Up Style Quiz</title>
</head>
<body>

<FORM METHOD="post" ACTION="http://htmlpreview.github.io/?https://github.com/Jonathanster/suitUp/blob/master/application/scorequiz.php">
<!--This is where your questions go-->

<p><b>What are you likely to wear to keep you warm when it is chilly out?<BR></b>
<INPUT TYPE="radio" NAME="a" VALUE="1">Hoodie.<BR>
<INPUT TYPE="radio" NAME="a" VALUE="2">Cardigan.<BR>
<INPUT TYPE="radio" NAME="a" VALUE="3">Leather Jacket.<BR>
<INPUT TYPE="radio" NAME="a" VALUE="4">Blazer.</p>

<p><b>When do you wear a blazer?<BR></b>
<INPUT TYPE="radio" NAME="b" VALUE="1">When I have a banquet or a meeting.<BR>
<INPUT TYPE="radio" NAME="b" VALUE="2">As little as possible.<BR>
<INPUT TYPE="radio" NAME="b" VALUE="3">Over a black tee now and again.<BR>
<INPUT TYPE="radio" NAME="b" VALUE="4">All the time!</p>

<p><b>Who is your style icon?<BR></b>
<INPUT TYPE="radio" NAME="c" VALUE="1"> Jay-Z. <BR>
<INPUT TYPE="radio" NAME="c" VALUE="2"> George Clooney. <BR>
<INPUT TYPE="radio" NAME="c" VALUE="3"> Adam Levigne. <BR>
<INPUT TYPE="radio" NAME="c" VALUE="4"> Brad Pitt. </p>

<p><b>How would you describe your overall look?<BR></b>
<INPUT TYPE="radio" NAME="d" VALUE="1"> Comfortable. <BR>
<INPUT TYPE="radio" NAME="d" VALUE="2"> Relaxed. <BR>
<INPUT TYPE="radio" NAME="d" VALUE="3"> Eclectic, sometimes crazy. <BR>
<INPUT TYPE="radio" NAME="d" VALUE="4"> Thought through and coordinated.</p>

<p><b>What do you wear to work?<BR></b>
<INPUT TYPE="radio" NAME="e" VALUE="1"> Jeans and a shirt. <BR>
<INPUT TYPE="radio" NAME="e" VALUE="2"> Work boots and khakis. <BR>
<INPUT TYPE="radio" NAME="e" VALUE="3"> It is different everyday. <BR>
<INPUT TYPE="radio" NAME="e" VALUE="4"> Suit and tie. </p>

<p><b>What do you wear on the weekend? <BR></b>
<INPUT TYPE="radio" NAME="f" VALUE="1"> Jeans and a polo. <BR>
<INPUT TYPE="radio" NAME="f" VALUE="2"> Combat boots and a t-shirt. <BR>
<INPUT TYPE="radio" NAME="f" VALUE="3"> I put things together in unusual ways. <BR>
<INPUT TYPE="radio" NAME="f" VALUE="4"> smart casual. </p>



<INPUT TYPE="submit" name="submit" VALUE="Score Quiz!" >
<BR><BR>
</FORM>

<?php
if (isset($_POST['submit']))
{
echo $radio_value = $_POST["d"]; 

}

?>

</body>
</html>
