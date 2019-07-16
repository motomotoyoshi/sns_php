<?php

  namespace MyApp\Exception;

  class InvalidPassword extends \Exception {
    protected $message = 'Email/Password do nor match';
  }