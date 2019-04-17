<?php


interface CRUD
{
    function Create($O);
    function Read();
    function Update($O);
    function Delete($O);
    function FindById($ID);
}