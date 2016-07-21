<?php

/**
 * this script will make 5 new 99.9999999% likely unique images which
 * can be used to test alphabetical / sequential uploading etc
 *
 * old batches are moved to old/
 *
 * new batches are
 */

// $argv[0] // script
$scaleX = isset($argv[1]) ? (int) $argv[1] : 640;
$scaleY = isset($argv[2]) ? (int) $argv[2] : 480;
$count = isset($argv[3]) ? (int) $argv[3] : 5;

echo "\nSTART!\n";
echo "Generating {$count} PNGs at {$scaleX}x{$scaleY}\n";
echo "Moving previous batch to old/\n";

if (!is_dir('old'))
	mkdir('old');

if (!is_dir('current'))
	mkdir('current');

`mv current/*.png old/`;

echo "Generating fresh images..";

$batch = time();

for($filez = 0; $filez < $count; $filez ++ ) {

	// set scale
	$x = $scaleX;
	$y = $scaleY;

	// create image
	$image = imagecreatetruecolor($x, $y);

	// allocate colors
	$bg   = imagecolorallocate($image, rand(255,0), rand(255,0), rand(255,0));
	$fg = array();
	// fill the background
	imagefilledrectangle($image, 0, 0, $x, $y, $bg);

	// random number of loops
	$max2 = rand(1,4);

	// outer loop - how many times to do the whole proc
	for($outer = 0; $outer < $max2; $outer++) {

		echo ".";

		$values = array();

		$max = rand(3,7);

		// inner loop - how many points to add
		for($i = 0; $i < $max; $i++) {
			$values[] = rand( $x, 1 );
			$values[] = rand( $y, 1 );
		}

		$fg[$outer] = imagecolorallocatealpha($image, rand(255,0), rand(255,0), rand(255,0), rand(127,0));

		// draw a polygon
		imagefilledpolygon($image, $values, count( $values ) / 2, $fg[$outer]);

	}

	// flush image
	imagepng($image, "./current/{$batch}_{$filez}.png");
	imagedestroy($image);

	// echo "Wrote {$filez}\n";

	echo ".";

}

echo "\nAll set, thank you!\n\n";
