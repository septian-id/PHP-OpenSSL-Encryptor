<?php
   class Encryptor{
      public $ciphering;
      public $iv_length;
      public $options;
      public $encryption_iv;
      public $encryption_key;
      
      function __construct(){
         $this->ciphering = "AES-128-CTR";
         $this->iv_length = openssl_cipher_iv_length($this->ciphering);
         $this->options = 0;
         $this->encryption_iv = "9845436754107643";
         $this->encryption_key = "septian-id";
      }
      
      function encrypt($str){
         return openssl_encrypt(
               $str,
               $this->ciphering,
               $this->encryption_key,
               $this->options,
               $this->encryption_iv
            );
      }
      
      function decrypt($str){
         return openssl_decrypt(
               $str,
               $this->ciphering,
               $this->encryption_key,
               $this->options,
               $this->encryption_iv
            );
      }
   }