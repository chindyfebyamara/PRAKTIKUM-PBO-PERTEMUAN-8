<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$chindy = new Person("Chindy", "bengkulu");

// tambahkan value nama di object
$chindy->nama = "chindy";

// panggil function sayHelloNull dengan parameter
$chindy->sayHelloNull("Kic");

// buat object dari kelas person
$feby = new Person("feby", "jambi");

// tambahkan value nama di object
$feby->nama = "feby";

// panggil function sayHelloNull dengan parameter null
$feby->sayHelloNull(null);
