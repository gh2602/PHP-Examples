<?php
// URL: http://php.net/manual/en/language.constants.predefined.php
echo '__LINE__: '.__LINE__.'<br>';
echo '__FILE__: '.__FILE__.'<br>';
echo '__DIR__: '.__DIR__.'<br>';
echo '__FUNCTION__: '.__FUNCTION__.'<br>';
echo '__CLASS__: '.__CLASS__.'<br>';
echo '__TRAIT__: '.__TRAIT__.'<br>';
echo '__METHOD__: '.__METHOD__.'<br>';
echo '__NAMESPACE__	: '.__NAMESPACE__	.'<br>';
$str = ClassName::class;
echo 'ClassName::class	: '.$str.'<br>';//not work