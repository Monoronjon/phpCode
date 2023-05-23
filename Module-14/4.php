<?php
$responseData = [
    'message' => 'Success',
    'data' => [
        'name' => 'John Doe',
        'age' => 25
    ]
];

return response()->json($responseData);
?>
