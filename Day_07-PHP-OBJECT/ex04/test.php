<?php

include_once('Lannister.class.php');
include_once('Jaime.class.php');
include_once('Tyrion.class.php');

class Stark {
}

class Cersei extends Lannister {
}

class Sansa extends Stark {
}

$j = new Jaime();
$c = new Cersei();
$t = new Tyrion();
$s = new Sansa();

$j->sleepWith($t);//Not event if I'm drunk !
$j->sleepWith($s);//Let's do this.
$j->sleepWith($c);//With pleasure, but only in a tower in Winterfell, then.

$t->sleepWith($j);//Not event if I'm drunk !
$t->sleepWith($s);//Let's do this.
$t->sleepWith($c);//Not event if I'm drunk !


// Not even if I'm drunk !
// Let's do this.
// With pleasure, but only in a tower in Winterfell, then.
// Not even if I'm drunk !
// Let's do this.
// Not even if I'm drunk !
?>
