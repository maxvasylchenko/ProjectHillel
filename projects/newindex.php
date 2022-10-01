<?php
/*
1.Создать родительский (главный) класс, который:
1)Должен содержать 2 свойства.
2)Каждое свойство должно иметь геттеры и сеттеры.
3)Должен содержать абстрактную функцию возведения в степень
*/
abstract class OldSchool
{
    public $x = 1;
    public function getTer()
    {
        return $this->x;
    }
    public function setTer($x)
    {
        $this->x = $x;
    }
    public $y = 2;
    public function getTer1()
    {
        return $this->y;
    }
    public function setTer1($y)
    {
        $this->y = $y;
    }
    abstract public function square($math);
}
/*
2.Создать 3 наследника родительского класса, которые:
1)Должны содержать одно свойство.
2)Каждое свойство должно иметь геттер и сеттер.
3)Должны реализовать по одному методу, который выполняет одно математическое действие. с данными родителя и своими данными
4)Один наследник не должен быть наследуемым.*/
class NewSchool extends OldSchool
{
    public $z;
    public function getTer2()
    {
        return $this->z;
    }
    public function setTer2($z)
    {
        $this->z = $z;
    }
    public function giveAway($z)
    {
        return $this->y*$z;
    }
    public function square ($math)
    {
        $square = $math * $math;
        return $square;
    }
}
$obj = new NewSchool;
$obj1 = new NewSchool;
echo $obj->giveAway(2)*$obj1->square(1);
class YoungSchool extends OldSchool
{
    public $w;
    public function getTer3()
    {
        return $this->w;
    }
    public function setTer3($w)
    {
        $this->w = $w;
    }
    public function giveAway2($w)
    {
        return $this->y/$w;
    }
    public function square ($math)
    {
        $square = $math * $math;
        return $square;
    }
}
$obj2 = new YoungSchool;
$obj3 = new YoungSchool;
echo $obj2->giveAway2(4)+$obj3->square(3);
final class SchoolJunior extends OldSchool
{
    public $u;
    public function getTer4()
    {
        return $this->u;
    }
    public function setTer4($u)
    {
        $this->u = $u;
    }
    public function giveAway3($u)
    {
        return $this->y*$u;
    }
    public function square ($math)
    {
        $square = $math * $math;
        return $square;
    }
}
$obj4 = new SchoolJunior;
$obj4 = new SchoolJunior;
echo $obj4->giveAway3(6)+$obj4->square(5);
/*
3.Создать по 2 наследника от наследников первого уровня:
1)Каждое свойство должно иметь геттер и сеттер.
2)Наследники должны реализовать по одному методу, который выполняет одно математическое действие с данными родителя и своими данными.
3)И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством.
 */
class NewestSchool extends NewSchool
{
    public $t;
    public function getTer5()
{
    return $this->t;
}
    public function setTer5($t)
{
    $this->t = $t;
}
    public function giveAway4($t)
{
    return $this->z*$t;
}
    public function giveAway5($t)
{
    return $this->y*$t;
}
    public function square ($math)
{
    $square = $math * $math;
    return $square;
}
}
$obj5 = new NewestSchool;
$obj5 = new NewestSchool;
$obj5 = new NewestSchool;
echo $obj5->giveAway4(9)+$obj5->square(8)+$obj5->giveAway5(7);
class CoolestSchool extends YoungSchool
{
    public $n;
    public function getTer6()
    {
        return $this->n;
    }
    public function setTer6($n)
    {
        $this->n = $n;
    }
    public function giveAway6($n)
    {
        return $this->x*$n;
    }
    public function giveAway7($n)
    {
        return $this->y*$n;
    }
    public function square ($math)
    {
        $square = $math * $math;
        return $square;
    }
}
$obj6 = new CoolestSchool;
$obj6 = new CoolestSchool;
$obj6 = new CoolestSchool;
echo $obj6->giveAway6(12)+$obj6->square(11)+$obj6->giveAway7(10);
