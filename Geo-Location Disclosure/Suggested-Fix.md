# Suggested Fix

***1-download the latest version from ImageMagick***

***2-use stripImage() method to strip this metadata from images:***

```php
<?php
$imageFilePath = ‘uploaded image’;
$img = new imagick();
$img->readImage($imageFilePath);
$img->stripImage();
$img->writeImage($imageFilePath);
$img->destroy();
?>
```
