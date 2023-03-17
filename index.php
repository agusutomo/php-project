<?php
echo "<h3>Hello World, let's test our Kinsta Cloud (PHP) App!</h3>";
echo "-------------";
$get_var = getenv('CUSTOM_PHPVAR');
echo "<div><h4>Get custom Environment variables: [" . $get_var . "]</h4></div>";
echo "<br/>";
echo "<br/>";
echo "Docker Version";
$dockerver = shell_exec('docker --version');
echo "<pre>$dockerver</pre>";
echo "<br/>";
echo "<br/>";
echo "Linux O/S version";
$linuxver = shell_exec('lsb_release -a');
echo "<pre>$linuxver</pre>";
echo "<br/>";
echo "<br/>";
echo "K8s / Kubernetes version";
$k8sver = shell_exec('kubectl version');
echo "<pre>$k8sver</pre>";
echo "<br/>";
echo "<br/>";
echo "shell exec report:<br/>";
echo "-------------";
$output = shell_exec('w; echo " "; ls -lart; echo " "; lscpu; echo " "; free -mth; echo "composer.json file:"; cat composer.json; echo " "; whereis php; echo ""; php -v; echo ""; cat composer.lock;');
echo "<pre>$output</pre>";
echo "-------------";
phpinfo();
?>
