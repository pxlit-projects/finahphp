<?php
class mysqli_ext extends mysqli
{
  private $cacheHandles      = false;
  private $prepareHandle     = array();
  private $result            = NULL;
  private $stmt              = NULL;
  private $debug             = 1;

  private $connection_failed = false;

  public function __construct($hostname, $username, $password, $database, $cachePrepare = 0)
    {
      if ($cachePrepare)
        {
          $this->cacheHandles = true;
        }
      
      parent::__construct($hostname, $username, $password, $database);
      
      if (mysqli_connect_errno())
        {
          $this->connection_failed = true;
          return;
        }
    }

  public function close()
    {
      parent::close();
    }

  public function prepare($sql)
    {
      if ($this->cacheHandles)
        {
          if (!is_object($this->prepareHandle[$sql]))
            {
              $this->prepareHandle[$sql] = new stmt_ext($this, $sql, true);
            }
          $stmt = $this->prepareHandle[$sql];
        } 
      else
        {
          $stmt = new stmt_ext($this, $sql, false);
        }

      if (mysqli_error($this))
        {
          $error = mysqli_error($this);
          $this->error("Prepare Failed", $error);
        }

      return $stmt;
    }

  public function select_first_row($sql, $paramtypes = null)
    {
      if ((stristr($sql, 'select') === FALSE) || (stristr($sql, 'from') === FALSE))
        {
          $error = mysqli_error($this);
          $this->error("Incorrect SQL", $error);
        }

      $stmt = $this->prepare($sql);

      if (isset($paramtypes))
        {
          $params = array(0 => $paramtypes);
          $paramcount = func_num_args();

          for ($i = 2; $i < $paramcount; $i++)
            {
              $tmp = func_get_arg($i);

              if (is_array($tmp))
                {
                  foreach($tmp as $k => $v)
                    {
                      $params[] = $v;
                    }
                }
              else
               {
                 $params[] = $tmp;
               }
            }

          $oject_params = array();
          foreach($params as $k => $v)
            $object_params[$k] = &$params[$k]; 

          if (!call_user_func_array(array($stmt, 'bind_param'), $object_params))
            {
              $error = mysqli_error($this);
              $this->error("Binding Failed", $error);
            }
        }
      $stmt->execute();

      if (mysqli_error($this))
        {
          $error = mysqli_error($this);
          $this->error("Execute Error", $error);
        }
      $stmt->store_result();
      if ($stmt->num_rows())
        {
          $obj = $stmt->fetch_object();
          $result = new StdClass();
          foreach ($obj as $key => $val)
            {
              $result->$key = $val;
            }
        }
      else
        {
          $result = null;
        }
      $stmt->close();
      return $result;
    }

  public function select($sql, $paramtypes = null)
    {
      if ((stristr($sql, 'select') === FALSE) || (stristr($sql, 'from') === FALSE))
        {
          $error = mysqli_error($this);
          $this->error("Incorrect SQL", $error);
        }
      $stmt = $this->prepare($sql);

      if (isset($paramtypes))
        {
          $params = array(0 => $paramtypes);
          $paramcount = func_num_args();

          for ($i = 2; $i < $paramcount; $i++)
            {
              $tmp = func_get_arg($i);

              if (is_array($tmp))
                {
                  foreach($tmp as $k => $v)
                    {
                      $params[] = $v;
                    }
                }
              else
               {
                 $params[] = $tmp;
               }
            }

          $oject_params = array();
          foreach($params as $k => $v)
            $object_params[$k] = &$params[$k]; 

          if (!call_user_func_array(array($stmt, 'bind_param'), $object_params))
            {
              $error = $stmt->error;
              $this->error("Binding Failed", $error);
            }
        }
      $stmt->execute();

      if (mysqli_error($this))
        {
          $error = mysqli_error($this);
          $this->error("Execute Error", $error);
        }
      $stmt->store_result();
      return $stmt;
    }

  public function execute_query($sql, $paramtypes = null)
    {
      $stmt = $this->prepare($sql);

      if (isset($paramtypes))
        {
          $params = array(0 => $paramtypes);
          $paramcount = func_num_args();

          for ($i = 2; $i < $paramcount; $i++)
            {
              $tmp = func_get_arg($i);

              if (is_array($tmp))
                {
                  foreach($tmp as $k => $v)
                    {
                      $params[] = $v;
                    }
                }
              else
               {
                 $params[] = $tmp;
               }
            }

          $oject_params = array();
          foreach($params as $k => $v)
            $object_params[$k] = &$params[$k]; 

          if (!call_user_func_array(array($stmt, 'bind_param'), $object_params))
            {
              $error = mysqli_error($this);
              $this->error("Binding Error", $error);
            }
        }
      $stmt->execute();

      if (mysqli_error($this))
        {
          $error = mysqli_error($this);
          $this->error("Execute Error", $error);
        }
      $stmt->store_result();

      if ((stristr($sql, 'select') === FALSE) || (stristr($sql, 'from') === FALSE))
        $result = $stmt->affected_rows;
      else
        $result = $stmt->num_rows;

      $stmt->close();
      return $result;
    }

  public function raw_query($sql)
    {
      $this->query($sql);

      if (mysqli_error($this))
        {
          $error = mysqli_error($this);
          $this->error("Execute Error", $error);
        }
      return;
    }

  public function insert($sql, $paramtypes = null)
    {
      if ((stristr($sql, 'insert') === FALSE) || (stristr($sql, 'into') === FALSE))
        {
          $error = mysqli_error($this);
          $this->error("Incorrect SQL", $error);
        }
      $stmt = $this->prepare($sql);

      if (isset($paramtypes))
        {
          $params = array(0 => $paramtypes);
          $paramcount = func_num_args();

          for ($i = 2; $i < $paramcount; $i++)
            {
              $tmp = func_get_arg($i);

              if (is_array($tmp))
                {
                  foreach($tmp as $k => $v)
                    {
                      $params[] = $v;
                    }
                }
              else
               {
                 $params[] = $tmp;
               }
            }

          $oject_params = array();
          foreach($params as $k => $v)
            $object_params[$k] = &$params[$k]; 

          if (!call_user_func_array(array($stmt, 'bind_param'), $object_params)) 
            {
              $error = mysqli_error($this);
              $this->error("Binding Error", $error);
            }
        }
      $stmt->execute();

      if (mysqli_error($this))
        {
          $error = mysqli_error($this);
          $this->error("Execute Error", $error);
        }
      $stmt->store_result();

      $result = ($stmt->insert_id > 0)?$stmt->insert_id:null;
      $stmt->close();
      return $result;
    }

  public function error($str, $error = "")
    {
      if (strlen($str) > 0)
        {
          if (strlen($error) > 0)
            {
              echo "<BR><BR><font color=\"#ff0000\"><B>Database Error: $str</b></font><BR><BR>\n";
            }
          else
            {
              echo "<BR><BR><font color=\"#ff0000\"><B>Database Error: $str - $error</b></font><BR><BR>\n";
            }
        }
      exit;
    }
}

class stmt_ext extends mysqli_stmt
{
  private $varsBound    = false;
  private $cacheHandles = false;
  private $results      = NULL;

  public function __construct($link, $query, $cachePrepare = false)
    {
      if ($cachePrepare)
        {
          $this->cacheHandles = true;
        }
      parent::__construct($link, $query);
    }

  public function __destruct()
    {
      if ($this->cacheHandles)
        {
          parent::close();
        }
    }

  public function close()
    {
      if ($this->cacheHandles)
        {
          $this->free_result();
        }
      else
        {
          parent::close();
        }
    }

  public function fetch_object()
    {
      if (!$this->varsBound)
        {
          $meta = $this->result_metadata();

          $seen = array();
          while ($column = $meta->fetch_field())
            {
              $columnName = $column->name;

              $columnName = str_replace(' ', '_', $columnName);
              $columnName = str_replace('(*)', '', $columnName);
              $columnName = str_replace('(', '_', $columnName);
              $columnName = str_replace(')', '', $columnName);

              if (in_array($columnName, $seen))
                {
                  $count = 2;
                  $test_name = $columnName . "_" .$count;

                  while (in_array($test_name, $seen))
                    {
                      $count = $count + 1;
                      $test_name = $columnName . "_" .$count;
                    }
                  $columnName = $test_name;
                }
              array_push($seen, $columnName);

              $bindVarArray[] = &$this->results[$columnName];
            }
          call_user_func_array(array($this, 'bind_result'), $bindVarArray);
          $this->varsBound = true;
        }
      if ($this->fetch() != null)
        {
          $results = new StdClass();

          foreach ($this->results as $k => $v)
            {
              $results->$k = $v;
            }
          return $results;
        } 
      else
        {
          return null;
        }
    }

  public function fetch_assoc()
    {
      if (!$this->varsBound)
        {
          $meta = $this->result_metadata();

          $seen = array();
          while ($column = $meta->fetch_field())
            {
              $columnName = $column->name;

              $columnName = str_replace(' ', '_', $columnName);
              $columnName = str_replace('(*)', '', $columnName);
              $columnName = str_replace('(', '_', $columnName);
              $columnName = str_replace(')', '', $columnName);

              if (in_array($columnName, $seen))
                {
                  $count = 2;
                  $test_name = $columnName . "_" .$count;

                  while (in_array($test_name, $seen))
                    {
                      $count = $count + 1;
                      $test_name = $columnName . "_" .$count;
                    }
                  $columnName = $test_name;
                }
              array_push($seen, $columnName);

              $bindVarArray[] = &$this->results[$columnName];
            }
          call_user_func_array(array($this, 'bind_result'), $bindVarArray);
          $this->varsBound = true;
        }
      if ($this->fetch() != null)
        {
          foreach ($this->results as $k => $v)
            {
              $results[$k] = $v;
            }
          return $results;
        }
      else
        {
          return null;
        }
    }

  public function error($str, $error = "")
    {
      if (strlen($str) > 0)
        {
          if (strlen($error) > 0)
            {
              echo "<BR><BR><font color=\"#ff0000\"><B>Database Error: $str</b></font><BR><BR>\n";
            }
          else
          {
              echo "<BR><BR><font color=\"#ff0000\"><B>Database Error: $str - $error</b></font><BR><BR>\n";
            }
        }
      exit;
    }
}

?>
