<?php

namespace App\Tests;

class
public function testTextRepresentation()
{
    $s1 = new Student();
    $s1 -> setName("Svetlana") -> setLastName("Antonova") -> setFaculty("FMiIT") -> setCourse(4) -> setGroup(402);
    $this -> assertSame(
        "Id: 1" . "\n" .
        "Фамилия: Ariskin" . "\n" .
        "Имя: Nikolay" . "\n" .
        "Факультет: FMiIT" . "\n" .
        "Курс: 3" . "\n" .
        "Группа: 302",
        $s1 -> __toString()
    );
}

public function testGetFuntions()
{
    $s1 = new Student();
    $s1 -> setName("Nikolay") -> setLastName("Antonova") -> setFaculty("FMiIT") -> setCourse(4) -> setGroup(402);
    $this ->  assertSame("Nikolay", $s1 -> getName());
    $this ->  assertSame("Ariskin", $s1 -> getLastName());
    $this ->  assertSame("FMiIT", $s1 -> getFaculty());
    $this ->  assertSame(4, $s1 -> getCourse());
    $this ->  assertSame(402, $s1 -> getGroup());
}