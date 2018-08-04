<?php
//   数据库操作类
class MainPDO
{
    private $debug=false;
    private $dbh = null;
    protected $ues_database="";
    function __construct($Config,$Debug="")
    {     $this->debug = $Debug;
        $user =$Config['dbuser'];
        $password =$Config['dbpassord'];
        $database=$Config['dbname'];
        $dsn = $Config['driver'].":dbhost=".$Config['dbhost'].";dbname=".$Config['dbname'];


        try {
            $this->dbh = new PDO($dsn, $user, $password);
        }
        catch (PDOException $e)
        {
            echo 'Connection failed: ' . $e->getMessage();
        }
        if ($this->debug)
        {
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }
    public function  getdata()
    {

    }
    public  function insert($data)
    {
        $addres = implode(",", array_keys($data));

        $val= $this->setValues(array_values($data));


        $query="INSERT INTO $this->ues_database($addres) values ($val)";
        try
        {
            $this->dbh->exec($query);
        }
        catch (PDOException $e)
        {
            if ($this->debug)
            {
                echo "小哥哥你出错了！";
                echo $query;
            }
        }
      echo "succeed";
    }
    public function setValues($value)
    {

        foreach ($value as $key => $value_) {
            if (is_string($value_)) {
                $value[$key] = "'".$value_."'";
            }
        }
        return implode(",", $value);
    }
    public  function  select()
    {
        $ues_database= $this->ues_database;
        $query="SELECT * FROM $ues_database ";
        $res= $this->selectpro($query);
        return $res;
    }
    public  function  find($req,$findfield)
    {
        $ues_database= $this->ues_database;

        $query="SELECT * FROM $ues_database WHERE find_in_set($req, $findfield); ";
        $res= $this->selectpro($query);
        return $res;
    }
    public  function  selectpro($query)
    {

        $res= $this->dbh->prepare($query);
        $res->execute();
        return $res->fetchAll();
    }
    public  function  update()
    {
        $ues_database= $this->ues_database;
        $res=$this->find(1,'yonghu_id');
        if(!(empty($res)))
        {
            $query="UPDATE $ues_database SET yonghu_passord = '1234' WHERE yonghu_id= 15";
            $upres= $this->dbh->prepare($query);
            $upres->execute();
        }
     }

}
