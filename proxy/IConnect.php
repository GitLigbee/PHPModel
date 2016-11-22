<?php
interface IConnect
{
    const HOST = 'localhost';
    const UNAME = 'root';
    const PW = 'root';
    const DBNAME = 'database';
    public function connect();
}