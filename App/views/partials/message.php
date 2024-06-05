<?php
declare(strict_types=1);

use Framework\Session;
?>

<?php
$successMessage = Session::getFlashMessage('success_message');
if(isset($successMessage)){
?>
     <div class="message bg-green-100 p-3 my-3">
        <?= $successMessage ?>
    </div>
<?php } ?>

<?php
$errorMessage = Session::getFlashMessage('error_message');
if(isset($errorMessage)){
?>
     <div class="message bg-red-100 p-3 my-3">
        <?= $errorMessage ?>
    </div>
<?php } ?>
