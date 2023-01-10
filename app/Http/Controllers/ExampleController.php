<?php

interface Users
{
    public function sayHello();
}

class NaturalUser implements Users
{
    public function sayHello()
    {
        return 'Hello world from natural user';
    } 
}

class BussinesUser implements Users
{
    public function sayHello()
    {
        return 'Hello world from bussines user';
    } 
}

class AdminUser implements Users
{
    public function sayHello()
    {
        return 'Hello world from admin user';
    } 
}

class UserImplementation
{
    public function identifyUser(Users $users)
    {
        $users->sayHello();
    }
}