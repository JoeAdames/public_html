<?php// Use in the “Post-Receive URLs” section of your GitHub repo.
$output = shell_exec('cd ~/public_html && git pull');
echo $output;