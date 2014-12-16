<?php
function DbExecute($query, $params = null)
{
    global $db;
    try 
    {
        $statement = $db->prepare($query);
        
        if (is_array($params))
        {
            foreach ($params as $key => $value)
            {
                $statement->bindValue($key, $value);
            }
        }
        
        $statement->Execute();
    }
    catch (Exception $e)
    {
        echo "Database exception, try again later.";
        error_log($e);
        exit();
    }
}
