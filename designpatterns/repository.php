<?php
// in real world projects, there are patterns you can use to manipulate the database operations
// popular ones -> Table Gateaway Pattern, Object Relational Mapping (ORM) Pattern
// These technologies are known as Data Layers or Data Abstraction
// Repository pattern is a layer between data manipulation to data from the database and using data in the project

class Model
{
    public function save()
    {
        echo "Saving $this->name and $this->age";
    }
}

class Repository
{
    public function update($data)
    {
        $model = new Model;
        $model->name = $data['name'];
        $model->name = $data['age'];
        $model->save();
    }
}

class App
{
    public function __construct(Repository $repo)
    {
        $this->repo = repo;
    }

    public function update($data)
    {
        $this->repo->update($data);
    }
}

$app = new App(new Repository);
$app->update(["name" => "Alice", "age" => 22]);
// Saving Alice and 22

// this technique gives u 2 pros 
// 1) Details won't be implemented in App and instead it is referred to Repository
// 2) You used Repository as Dependency Injection. That's why if you need to use other data layer instead of model, you can simply use it
// Reminder: real world implementation would be different


