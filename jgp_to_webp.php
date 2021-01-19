<?php



// $imgLocationBefore = "nice.jpg";

// $imgLocationAfter = "nice1.webp";

// $img = imagecreatefromjpeg($imgLocationBefore);

// imagepalettletotruecolor($img);

// imagealphablending($img, blendmode: true);

// imagesavealpha($img, saveflag: true);

// imagewebp($img, $imgLocationAfter, quality:60);

// imagedestroy($img);





	function compress($source, $destination, $quality) {

		$info = getimagesize($source);

		if ($info['mime'] == 'image/jpeg') 
			$image = imagecreatefromjpeg($source);

		elseif ($info['mime'] == 'image/gif') 
			$image = imagecreatefromgif($source);

		elseif ($info['mime'] == 'image/png') 
			$image = imagecreatefrompng($source);

		imagejpeg($image, $destination, $quality);

		return $destination;
	}

	$source_img = 'ceo_sir.png';
	$destination_img = 'destination.webp';

	$d = compress($source_img, $destination_img, 40);






?>
