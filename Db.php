<?php

$host = 'aws-0-ap-south-1.pooler.supabase.com';
$dbuser = 'postgres.jixvlhdlxufrpqjbthli';
$dbpassword = 'CoryInTheHouse2201837';

$conn = pg_connect("host=$host port=5432 dbname=postgres user =$dbuser password=$dbpassword sslmoderequire");

if(!$conn){
    exit("Error, Database Connection Fail");
}
?>
