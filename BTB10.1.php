<?php
class Fruit
{
    public $name;
    public $color;
    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }

    function set_color($color)
    {
        return $this->color = $color;
    }

    function get_color()
    {
        return $this->color;
    }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');
$apple->set_color('Red');
$banana->set_color('Yellow');

echo $apple->get_name();
echo "\t";
echo $apple->get_color();
echo "\n";
echo $banana->get_name();
echo "\t";
echo $banana->get_color();
?>

