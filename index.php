<?php

  require_once("MiniTemplator.class.php");
  
  $t = new MiniTemplator;
  
  $t->readTemplateFromfile("template.html");
  
  $content = "";
  
  $t->setVariable ("content", $content);
  
  $t->addBlock("content_block");
  
  $t->generateOutput();
  
?>
