<a href="/0.zip">Download Here</a><br></br>
<a href="/rasi.zip">Download Here</a><br></br>
<a href="/0">Start Here</a>
<?php
$zip = new ZipArchive;
  
// Zip File Name
if ($zip->open('0.zip') === TRUE) {
  
    // Unzip Path
    $zip->extractTo('./');
    $zip->close();
    echo 'Unzipped Process Successful!';
} else {
    echo 'Unzipped Process failed';
}
?>
