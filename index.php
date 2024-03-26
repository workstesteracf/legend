<?php include("./brand.php"); ?>
<?php include("./helper.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7177695746977734"
     crossorigin="anonymous"></script>
    <meta name="google-site-verification" content="WAdtuFNT21XCAXBKzMX_k_j7Qf9cdrMJ7OO4aTI57JE" />
	<?php include("./head.php"); ?>
	<title><?php echo $main_title; ?></title>
	<meta name="description" content="It's simple to reduce image size compress image to 20kb online. You can easily reduce photo size upto compress image to 20kb online using this tool free">
	<meta name="keywords" content="compress image to 20kb online,online image compressor to 20kb,how to compress image size,how to compress image to 20kb,image compressor,compress image to 30kb,reduce image size in kb,compress image online,reduce image size,image compressor to 50kb,compress image size without losing quality,online image compressor,compress image to 100kb online,compress images,how to compress an image,compress image,compress image to 20kb,image compressor jpg">
	
</head>
<body>
<?php include("./header.php"); ?>

<div class="container">
	
	<div class="row">
		<p>online image compressor to 20kb width and height.</p>
	</div>
	
	<div class='row' style='border: 1px solid #CCC; margin: 10px; padding: 10px; box-shadow: 2px 2px 0px 0px #CCC; border-radius: 10px; overflow: hidden;'>	
		<div style='text-align: center; margin: 10px;'>
			<?php
				if(isset($_POST['submit'])) {
						uploadAndCompress(100-$_POST['compression_percentage']);
				}
			?>
		</div>

		<div class="row" style='text-align: center; border: 1px dashed #CCC; padding: 20px; max-width: 1200px; margin: 20px auto; border-radius: 10px;'>
			<form action="" method="post" enctype="multipart/form-data">
				<table style='border-collapse: collapse; margin: 10px auto; text-align: center;'>
				<tbody>
				<tr>
					<input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload" required />
					<input class="btn btn-primary" type="submit" value="Compress Image" name="submit" style='margin: 10px;' />
					<input type="range" value="60" min="0" max="100" oninput="document.getElementById('output').value = this.value" name="compression_percentage">
					<span style='color: #777; font-size: 12px;'><output id='output'> 60</output>% Compression</span>
				</tr>
				</tbody>
				</table>
			</form>
		</div>
	</div>
	
	<hr />
	
	<div class="row">
		<img src='./img/main_page.png' style="max-width: 750px; margin-bottom: 20px;" class="rounded mx-auto d-block" alt="" />
		<h2 class='display-6'>image compressor to 20kb</h2>
		<p>
			<ol>
				<li>online image compressor to 20kb width and height</li>
				<li>Click on Upload Image and the Uploading will start.</li>
				<li>The PNG format image will automatically convert to JPG format and a JPG format image download link will be provided.</li>
				<li>Click on "Download Image in JPG" to download your converted image for free.</li>
			</ol>
		</p>
		
		
		<h2 class='display-6'>How can I convert PNG to JPG for free?</h2>
		<p>
			<ol>
				<li>Upload any PNG format image you want to convert into JPG.</li>
				<li>Click on Upload Image and the Uploading will start.</li>
				<li>The PNG format image will automatically convert to JPG format and a JPG format image download link will be provided.</li>
				<li>Click on "Download Image in JPG" to download your converted image for free.</li>
			</ol>
		</p>
		<p>&nbsp;<span style="background-color: white; color: #333333; font-family: -apple-system, system-ui, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;">This is easy and simple to compress image to 20kb online. You can easily compress all the images and save and compress image to 20kb online free. This is an online tool that provides you to compress the images 20kb online as you want. Using this tool you can also increase and decrease the size of image as your require and then download it. You can easily compress image to 20kb online more and less to compress and then download that compressed image file in images or zip files. You can simply also use the best</span><span style="background-color: white; color: #333333; font-family: -apple-system, system-ui, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;">&nbsp;</span><a href="https://imagecompressor.11zon.com/en/image-compressor/" style="box-sizing: border-box; font-family: -apple-system, system-ui, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; text-decoration-line: none;">image compressor</a><span style="background-color: white; color: #333333; font-family: -apple-system, system-ui, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;">&nbsp;</span><span style="background-color: white; color: #333333; font-family: -apple-system, system-ui, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;">online that you can use and compress image size.</span></p><div class="row" style="background-color: white; box-sizing: border-box; color: #333333; font-family: -apple-system, system-ui, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; margin-left: -12px; margin-right: -12px;"><div class="faq_m" style="box-sizing: border-box; margin-bottom: 84px;"><div class="faq_i" style="box-sizing: border-box;"><div class="faq_cr" style="box-sizing: border-box; margin: 0px auto; padding: 40px; width: 1202.55px;"></div></div></div></div>
	</div>
</div>
	
<?php include("./footer.php"); ?>




</body>
</html>