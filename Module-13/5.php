<?php
$uploadedFile = $request->file('avatar');

if ($uploadedFile) {
    $filePath = $uploadedFile->store('public/uploads');
    $fileName = $uploadedFile->getClientOriginalName();
    // Additional logic or actions with the uploaded file
}

?>