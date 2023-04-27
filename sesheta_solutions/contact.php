<?php include('includes/process.php');?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us | Will to Thrive</title>
  <meta name="description" content="Submittable form to contact site contributors">
  <link rel="stylesheet" href="css/style.css">
  <script src="javascripts/date.js"></script>
  <script src="javascripts/menu.js"></script>
</head>

<body>
<div class="content-wrapper">

<header class="banner">
	<?php include('includes/banner.php');?>
</header>

<main>

<h2>Contact Us</h2>
	
<?php print $formMessage;?>
	
<form class="contact-form" method="post">
		<label for="name">Name</label>
		<input type="text" id="name" name="name" value="" required>
		
		<label for="email">Email</label>
		<input type="text" id="email" name="email" value="" required>
		
	<!-- for-whom radio type -->	
	<fieldset>
			<legend>Are you reaching out for yourself or a loved one?</legend>
		
				<label>Myself<input type="radio" name="for-whom" value="myself" checked></label>
				<label>A loved one<input type="radio" name="for-whom" value="another"></label>
	</fieldset>
	
	<!-- storytype select list -->
	<label for="storytype">What would you to tell us about?</label>
	<select name="storytype" id="storytype">
		<option value="story">Personal story submission</option>
		<option value="book">Book recommendation</option>
		<option value="correction">Correction</option>
		<option value="other">Other</option>
	</select>	
		
	<!-- feedback text area -->		
	<label for="comments">Comments</label>
	<textarea name="comments" id="comments" placeholder="Tell us about it!"></textarea>
	
	<!-- buttons -->
	<input type="submit" value="submit form">
	<input type="reset" value="clear form">
</form>

</main>

<aside class="sidebar">

<h3 class="poems">I Wandered Lonely as a Cloud</h3>
<p class="authors">By William Wordsworth</p>

<p>I wandered lonely as a cloud<br>
That floats on high o'er vales and hills,<br>
When all at once I saw a crowd,<br>
A host, of golden daffodils;<br>
Beside the lake, beneath the trees,<br>
Fluttering and dancing in the breeze.</p>

<p>Continuous as the stars that shine<br>
And twinkle on the milky way,<br>
They stretched in never-ending line<br>
Along the margin of a bay:<br>
Ten thousand saw I at a glance,<br>
Tossing their heads in sprightly dance.</p>

<p>The waves beside them danced; but they<br>
Out-did the sparkling waves in glee:<br>
A poet could not but be gay,<br>
In such a jocund company:<br>
I gazed--and gazed--but little thought<br>
What wealth the show to me had brought:</p>

<p>For oft, wen on my couch I lie<br>
In vacant or in pensive mood,<br>
They flash upon that inward eye<br>
Which is the bliss of solitude;<br>
And then my heart with pleasure fills,<br>
And dances with the daffodils.</p>

<p><span class="emph">-Public domain</span></p>

</aside>

<footer class="site-footer">
	<?php include('includes/site-footer.php');?>
</footer>

</div> <!-- content wrapper -->
</body>