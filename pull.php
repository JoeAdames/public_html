<?php// Use in the “Post-Receive URLs” section of your GitHub repo.
if ( $_POST['payload']  || true ) {   echo shell_exec('cd ~/public_html && git pull');}