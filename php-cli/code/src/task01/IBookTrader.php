<?php

namespace App\Oop\task01;

interface IBookTrader
{
    function trade(DigitalBook $book, WebClient $client);
}