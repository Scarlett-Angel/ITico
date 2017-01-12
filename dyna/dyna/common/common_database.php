<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of common_model
 *
 * @author user
 */
class common_database extends common_class {

    public function id_to_value($id, $query) {
        if ($stmt = DB::cxn()->prepare($query)) {
            $binder = $stmt->bind_param('s', $id);
            if ($binder) {
                if ($stmt->bind_param('s', $id)) {
                    $executer = $stmt->execute();
                    if ($executer) {
                        $resulter = $stmt->bind_result($value);
                        if ($resulter) {
                            if ($stmt->fetch()) {
                                return isset($value) ? $value : error_handler($this->get_set_location() . " nothing returned from $query with parameter $id");
                            } else {
                                error_handler($this->get_set_location() . " can't fetch result $query with parameter $id");
                            }
                        } else {
                            error_handler($this->get_set_location() . " can't bind result $query with parameter $id");
                        }
                    } else {
                        error_handler($this->get_set_location() . " can't execute query $query with parameter $id");
                    }
                } else {
                    error_handler($this->get_set_location() . " cant bind parameter $id on query $query");
                }
            } else {
                error_handler($this->get_set_location() . " cant prepare $query");
            }
        }
    }
    
    public function id_to_values($id, $query) {
        if ($stmt = DB::cxn()->prepare($query)) {
            $binder = $stmt->bind_param('s', $id);
            if ($binder) {
                if ($stmt->bind_param('s', $id)) {
                    $executer = $stmt->execute();
                    if ($executer) {
                        $resulter = $stmt->bind_result($value);
                        if ($resulter) {
                            while ( $row = $stmt->fetch()) {
                                $row_set[]= $value;
                            } if (!isset($row_set;)) {
                                error_handler($this->get_set_location() . " can't fetch result $query with parameter $id");
                            }
                        } else {
                            error_handler($this->get_set_location() . " can't bind result $query with parameter $id");
                        }
                    } else {
                        error_handler($this->get_set_location() . " can't execute query $query with parameter $id");
                    }
                } else {
                    error_handler($this->get_set_location() . " cant bind parameter $id on query $query");
                }
            } else {
                error_handler($this->get_set_location() . " cant prepare $query");
            }
        }
    }

}
