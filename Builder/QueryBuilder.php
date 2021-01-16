<?php


namespace patterns\Builder;


class QueryBuilder
{
    /*protected $sql = 'SELECT FROM ';

    public function table($table)
    {
        $this->sql .= $table;

        return $this;
    }

    public function where($where)
    {
        $this->sql .= $where;

        return $this;
    }

    public function order($order)
    {
        $this->sql .= $order;

        return $this;
    }

    public function getSql()
    {
        return $this->sql;
    }*/

    protected $select = '*';

    protected $table;

    protected $where;

    protected $order;

    public function table(string $table)
    {
        $this->table = $table;

        return $this;
    }

    public function where(string $where)
    {
        $this->where = $where;

        return $this;
    }

    public function order(string $order)
    {
        $this->order = $order;

        return $this;
    }

    public function build()
    {
        $sql = 'SELECT ' . $this->select . ' FROM ';
        if (empty($this->table)) {
            throw new \Exception('Table is required');
        }

        return $sql;
    }
}

$builder = new QueryBuilder();
$builder->where('where');
$builder->table('users');
$builder->order('order');

$builder = modify($builder);
$sql = $builder->build();

$results = $db->query($sql);



function modify($builder)
{
    $builder->select(['id', 'name']);
    return $builder;
}

/**/

//$builder->table('users')->where('where')->order('order');

$db = App::getInstance()->get('db');
$sql = $db->getQueryBuilder()->table()->where()->one();