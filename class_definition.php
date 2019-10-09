<?php
class Cars {

   function gretting(){
       
    

   } 
   function GoodBy(){
       
    

} 


}

$the_methods = get_class_methods('Cars');

foreach($the_methods as $methods){
    echo $methods.'<br>';
}







/*
$my_classes = get_declared_classes();

foreach($my_classes as $class)
{

    echo $class.'<br>';

}
*/
?>