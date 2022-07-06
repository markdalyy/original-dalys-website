<!DOCTYPE html>
<html lang="en-gb" dir="ltr">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="initial-scale=1.0, width=device-width" />
		<base href="https://www.dalyslimerick.com/upload" />
		<title>Upload</title>
		<link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png" />
		<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png" />
		<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png" />
		<link rel="manifest" href="/site.webmanifest" />
	</head>
	<body>
		<?php
		$inputErr = $input = "";
		if (isset($_POST['submit'])) {

			if (empty($_POST["Input"])) {
				$inputErr = "Field is required";
			} else {
				$input = $_POST["Input"];
				if ($input != "insert password here") {
				  $inputErr = "Input Error";
				}
			}
			
			if (!$inputErr) {
			
				function resize_image($img, $ext, $max_resolution) {
					if($ext == 'png') {
						$original_image = imagecreatefrompng($img);
					} else {
						$original_image = imagecreatefromjpeg($img);
					}
					$original_width = imagesx($original_image);
					$original_height = imagesy($original_image);
					if ($original_width > $original_height) {
						$ratio = $max_resolution / $original_width;
						$new_width = $max_resolution;
						$new_height = $original_height * $ratio;
					} else {
						$ratio = $max_resolution / $original_height;
						$new_height = $max_resolution;
						$new_width = $original_width * $ratio;
					}
					$new_image = imagecreatetruecolor($new_width, $new_height);
					imagecopyresampled($new_image, $original_image,0,0,0,0, $new_width,$new_height,$original_width, $original_height);
					if($ext == 'png') {
						imagepng($new_image, $img);
					} else {
						imagejpeg($new_image, $img);
					}
					
				}
				
				$countfiles = count($_FILES['img']['name']);
				for($i=0;$i<$countfiles;$i++){

					$img = $_FILES['img'][$i];
					
					$fileName = $_FILES['img']['name'][$i];
					$fileTmpName = $_FILES['img']['tmp_name'][$i];
					$fileSize = $_FILES['img']['size'][$i];
					$fileError = $_FILES['img']['error'][$i];
					$fileType = $_FILES['img']['type'][$i];
				
				
					$fileExt = explode('.', $fileName);
					$fileActualExt = strtolower(end($fileExt));
					
					$allowed = array('jpg', 'jpeg', 'png');
					
					if (in_array($fileActualExt, $allowed)) {
						if ($fileError === 0) {
							$fileDestination = 'products/'.$fileName;
							if(!file_exists($fileDestination)) {
								move_uploaded_file($fileTmpName, $fileDestination);
								resize_image($fileDestination, $fileActualExt, "200");
								header("Location: in-demand.php?uploadsuccess");
							} else {
								echo "Filename already exists.";
							}
						} else {
							echo "There was an error uploading your file!";
						}
					} else {
						echo "You cannot upload files of this type!";
					}
				}
			}
		}
		?>
		<form action="" method="POST" enctype="multipart/form-data">
			<input type="file" name="img[]" multiple=""/><br>
			<i><?php echo $inputErr;?></i><br>
			<input type="text" name="Input" />
			<input type="submit" name="submit" value="UPLOAD"><br><br><br>
		</form>
		<form action="" method="POST">
			<input type="submit" name="Clean" value="Clean"></button>
		</form>
		<?php
		if (isset($_POST['Clean'])) {
			$PATH = "in-demand.php";
			
			$pattern = '/"(\s+)data-src="(.+)"/';
			$replacement = '"';
			$file_contents = file_get_contents($PATH);
			$file_contents = preg_replace($pattern, $replacement, $file_contents);
			file_put_contents($PATH,$file_contents);
			
			$pattern = '/<figure>(\s*)<img(\s*)src="(.+)"(\s*)\/>(\s*)<\/figure>/';
			$replacement = '<figure><img data-src="$3" /></figure>';
			$file_contents = file_get_contents($PATH);
			$file_contents = preg_replace($pattern, $replacement, $file_contents);
			file_put_contents($PATH,$file_contents);
			
			$find = ' style="display: flex"';
			$replace = '';
			$file_contents = file_get_contents($PATH);
			$file_contents = str_replace($find, $replace, $file_contents);
			file_put_contents($PATH,$file_contents);
		}
		?>
	</body>
</html>
