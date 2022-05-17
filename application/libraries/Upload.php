<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');  
 
require_once APPPATH."/third_party/upload/UploadHandler.php";
class Upload extends UploadHandler {
    public function __construct($folder,$pagina) {
        parent::__construct(null,true,null,$folder,$pagina);
    }
}
