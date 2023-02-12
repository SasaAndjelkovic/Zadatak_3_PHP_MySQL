<?php

abstract class BasicInformation {
    protected int $id;
    protected string $username;

    public function __construct($id, $username)
    {
        $this->id = $id;
        $this->username = $username;
    }

    abstract public function getId();
    abstract public function setId($id_variable);
    abstract public function getName();
    abstract public function setName($name_variable);
}