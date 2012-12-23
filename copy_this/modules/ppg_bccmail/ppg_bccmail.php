<?php

class ppg_bccmail extends ppg_bccmail_parent
{  
    /* Every Mail BCC to defined mail address */   
    public function send() {        
        $myConfig = $this->getConfig();
        $this->setBcc( $myConfig->getConfigParam("ppgBCCmailaddress") , 'Shop_BCC' );
        return parent::send(); 
    }
    
    public function setBcc( $sEmail = null, $sName = null )
    {
        try {
            parent::AddBCC( $sEmail, $sName );
        } catch( Exception $oEx ) {
        }
    }

} 