<?php
defined("BASEPATH") or exit('No direct access allowed');

class Crud_helper
{
    public static $database;
    public static $response;
   
    public static function validate_columns($tablename, $data)
    {
       
        $fields = self::$database->db->list_fields($tablename);
        foreach ($data as $key => $value) {
            if (!in_array($key, $fields)) {

                return $key;
            }
        }
        return 1;
    }
    public static function setDatabse()
    {
       
        self::$database = &get_instance();
        // self::$database->load->database();
    }

   
    public static function table_exists($tablename)
    {
        self::setDatabse();

        $query = self::$database->db->query("SHOW TABLES LIKE '" . self::$database->db->escape_str($tablename) . "'");
        return $query->num_rows() > 0;
    }
    public static function add($tablename, $data) //tablename-> 'user' $data as an array $data['id'=>1,'user_name'=>'Abhishek'.....]
    {
        self::setDatabse();

        if (!self::table_exists($tablename)) {
            self::$response = ["status" => false,"data"=>array(), "message" => "Table is not found !"];
            return self::$response;
        }
        try {
            $is_validate = self::validate_columns($tablename, $data);
            if ($is_validate == 1) {
                self::$database->db->insert($tablename, $data);
                if (self::$database->db->affected_rows() > 0) {
                    self::$response = ["status" => true, "message" => "successfully  submitted !"];
                    return self::$response;
                } else {self::$response = ["status" => false,"data"=>array(), "message" => "Not Submitted !"];
                    return self::$response;}
            } else {
                self::$response = ["status" => false,"data"=>array(), "message" => "$is_validate columns is not present in this table !"];
                return self::$response;

            }
        } catch (Exception $error) {
            self::$response = ["status" => false,"data"=>array(), "message" => "Error: " . $error->getMessage()];
            return self::$response;
        }

    }

    public static function update($tablename, $where, $data) //tablename,$where=array(),$limit=10
    {
        self::setDatabse();

        if (!self::table_exists($tablename)) {
            self::$response = ["status" => false,"data"=>array(), "message" => "Table is not found !"];
            return self::$response;
        }

        try {
            $is_validate = self::validate_columns($tablename, $data);
            if ($is_validate == 1) {
                self::$database->db->where($where);
                self::$database->db->set($data);
                $result = self::$database->db->update($tablename);
                if (self::$database->db->affected_rows() > 0) {
                    self::$response = ["status" => true, "message" => "successfuly updated !"];
                    return self::$response;
                } else {
                    self::$response = ["status" => false,"data"=>array(), "message" => "Not updated !"];
                    return self::$response;
                }
            } else {
                self::$response = ["status" => false,"data"=>array(), "message" => "$is_validate columns is not present !"];
                return self::$response;
            }

        } catch (Exception $error) {
            self::$response = ["status" => false,"data"=>array(), "message" => "Error: " . $error->getMessage()];
            return self::$response;
        }

    }

    public static function delete($tablename, $where) //tablename,,$where=array()
    {
        self::setDatabse();

        if (!self::table_exists($tablename)) {
            self::$response = ["status" => false,"data"=>array(), "message" => "Table is not found !"];
            return self::$response;
        }
        try {
            $is_validation = self::validate_columns($tablename, $where);
            if ($is_validation == 1) {
                self::$database->db->where($where);
                self::$database->db->delete($tablename);
                if (self::$database->db->affected_rows() > 0) {
                    self::$response = ["status" => true, "message" => "successfully deleted !"];
                    return self::$response;
                } else {self::$response = ["status" => false,"data"=>array(), "message" => "Not Deleted !"];
                    return self::$response;}
            } else {
                self::$response = ['status' => false,"data"=>array(), 'message' => "$is_validation column is not present in this table !"];
                return self::$response;
            }

        } catch (Exception $error) {
            self::$response = ["status" => false,"data"=>array(),"message" => "Error: " . $error->getMessage()];
            return self::$response;
        }
    }

    public static function fetch($tablename,$select="*", $where=[], $limit=NULL) //tablename,$select='id,username...',$where=array(),$limit=10
    {
        self::setDatabse();

        if (!self::table_exists($tablename)) {
            self::$response = ["status" => false,"data"=>array(), "message" => "Table is not found !"];
            return self::$response;
        }

        try {
            $is_validation = self::validate_columns($tablename, $where);
            if ($is_validation == 1) {
                self::$database->db->select($select);
                if(!empty($where))
                {
                    self::$database->db->where($where);
                }
                if(!is_null($limit)){
                    self::$database->db->limit($limit);
                }
                $result = self::$database->db->get($tablename)->result_array();

                if (!empty($result)) {
                    self::$response = ['status' => true, 'data' => $result];
                    return self::$response;
                } else {
                    self::$response = ['status' => false,"data"=>array(), 'message' => "Data Not Found !"];
                    return self::$response;
                }
            } else {
                self::$response = ['status' => false,"data"=>array(), 'message' => "$is_validation column is not present in this table !"];
                return self::$response;
            }

        } catch (Exception $error) {
            self::$response = ["status" => false,"data"=>array(), "message" => "Error: " . $error->getMessage()];
            return self::$response;
        }
    }

    

}