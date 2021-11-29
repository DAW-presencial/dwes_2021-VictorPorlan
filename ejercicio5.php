<?php
class male{

    public $values = array(
        "foo" => "bar",
        "bar" => "foo",
    );
    public function __get( $key )
    {
        return $this->values[ $key ];
    }

    public function __set( $key, $value )
    {
        $this->values[ $key ] = $value;
    }

}

class sigma extends male{

}

$clase = new male();
echo($clase->__get("foo"). "<br>");
$clase1 = new sigma();
echo($clase1->__get("bar"));

//Aqui podemos ver como tanto la clase padre como la hija pueden usar __get() sin la necesidad de definirlas en la clase hija.
?>
