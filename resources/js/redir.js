redirTime = "550";
redirURL = "<?php echo $redirect ?>";
function redirTimer() {
    self.setTimeout("self.location.href = redirURL;",redirTime); 
}
