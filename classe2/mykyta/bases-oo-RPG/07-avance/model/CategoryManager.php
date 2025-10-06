<?php

namespace model;



class CategoryManager implements ManagerInterface, CrudInterface
{
    private PDO $db;
     public function __construct(PDO $connect){
        $this->db = $connect;
    }

    use SlugifyTrait;

    
}