<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Available Web Pages</title>
</head>
<body>
    <h1>Eaglercraft Clients</h1>
    <ul>
        <?php
        // Open the current directory
        $dir = "./";
        if ($dh = opendir($dir)) {
            // Loop through all files in the folder
            while (($file = readdir($dh)) !== false) {
                // Only pull files ending in .html or .htm, ignoring hidden files
                if (pathinfo($file, PATHINFO_EXTENSION) == 'html' || pathinfo($file, PATHINFO_EXTENSION) == 'htm') {
                    echo "<li><a href='" . htmlspecialchars($file) . "'>" . htmlspecialchars($file) . "</a></li>";
                }
            }
            closedir($dh);
        }
        ?>
    </ul>
</body>
</html>