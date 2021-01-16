<?php


namespace patterns\Builder;


class User
{
    protected $age;

    protected $name;

    protected $height;

    protected $weight;

    protected $sex;


    protected $speciality;

    public function __construct(UserBuilder $builder)
    {
        $this->age = $builder->getAge();
        $this->name = $builder->getName();
        $this->height = $builder->getHeight();
        $this->weight = $builder->getWeight();
        $this->sex = $builder->getSex();
        $this->speciality = $builder->getSpeciality();
    }

    // ...
}