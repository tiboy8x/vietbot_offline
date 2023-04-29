<?php
// Read the contents of the JSON file into a variable
$jsonString = file_get_contents('example.json');

// Convert the JSON string to a PHP associative array
$data = json_decode($jsonString, true);

// Modify the data
$data['name'] = 'John Smith';
$data['age'] = 30;
$data['email'] = 'john.smith@example.com';

// Convert the data back to a JSON string
$newJsonString = json_encode($data, JSON_PRETTY_PRINT);

// Write the new JSON string to the file
$file = 'example.json';

if (file_exists($file)) {
    // Check if the file exists and is writable
    if (is_writable($file)) {
        // Open the file for writing
        $handle = fopen($file, 'w');

        // Write the new JSON string to the file
        fwrite($handle, $newJsonString);

        // Close the file handle
        fclose($handle);

        echo "Data written to $file successfully.";
    } else {
        echo "Unable to write to $file.";
    }
} else {
    echo "$file does not exist.";
}

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Json Edit Example</title>
    <style>
        /* CSS styles for the chat interface */
        #chat-box {
            width: 500px;
            height: 400px;
            overflow-y: scroll;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
        }

        .chat-message {
            margin-bottom: 10px;
        }

        .user-message {
            color: blue;
        }

        .bot-message {
            color: green;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
<center>
    <h1>Json Edit Example</h1>

    <div id="chat-box"></div>

</center>
</body>
</html>
