```php
$file = fopen("test.txt", "r+");
if ($file) {
    while (($line = fgets($file)) !== false) {
        // Process each line
        if (feof($file)) {
            //handle end of file
            break;
        }
        //check for errors during line processing
        if (!processLine($line)) {
            // Handle line processing error
            echo "Error processing line: " . $line . "\n";
            fclose($file);
            exit(1); //Exit with an error code
        }
    }
    if (!feof($file)) {
        //Handle any error during reading the file
        echo "Error reading file.";
    }
    fclose($file);
} else {
    // Handle file opening error
    echo "Error opening file.";
}

function processLine(string $line): bool
{
    //Process each line appropriately and return true if successful
    //return false if any error occurs during line processing
    return true; //replace with your processing logic
}
```