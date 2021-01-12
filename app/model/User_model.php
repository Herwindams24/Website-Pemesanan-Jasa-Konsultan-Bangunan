<?php

class User_model
{
    private $nama = 'Winda';

    public function getUser()
    {
        return $this->nama;
    }

    public function __construct()
    {
        $this->db = new Database;
    }

    public function saveRequestPelanggan($request, $id_user)
    {
        //var_dump($request);
        //die();
        $q = "INSERT INTO request (id_pelanggan, nama, phone, services, building, budget_min, budget_max, location, timeline, message) 
        VALUES (:id_pelanggan, :nama, :phone, :services, :building, :budget_min, :budget_max, :location, :timeline, :message)";
        $this->db->query($q);

        $this->db->bind(':id_pelanggan', $id_user);
        $this->db->bind(':nama', $request['nama']);
        $this->db->bind(':phone', $request['phone']);
        $this->db->bind(':services', $request['services']);
        $this->db->bind(':building', $request['building']);
        $this->db->bind(':budget_min', $request['budget_min']);
        $this->db->bind(':budget_max', $request['budget_max']);
        $this->db->bind(':location', $request['location']);
        $this->db->bind(':timeline', $request['timeline']);
        $this->db->bind(':message', $request['message']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getRequestPelanggan($id_user)
    {
        //var_dump($request);
        //die();
        $this->db->query("SELECT t1.id_user, t2.* FROM user t1 JOIN request t2 ON t1.id_user=t2.id_pelanggan WHERE t1.id_user=$id_user ");
        $this->db->bind(':id_user', $id_user);
        return $this->db->resultSet();
    }

    public function masukOrder()
    {
        $this->db->query("SELECT t1.id_user, t2.* FROM user t1 JOIN request t2 ON t1.id_user = t2.id_pelanggan AND status = 1");
        return $this->db->resultSet();
    }

    public function updateStatus($id_request, $status)
    {
        $this->db->query("UPDATE request SET status = :status WHERE id_request = :id_request");
        $this->db->bind(':status', $status);
        $this->db->bind('id_request', $id_request);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function accStatus()
    {
        $this->db->query("SELECT t1.id_user, t2.* FROM user t1 JOIN request t2 ON t1.id_user = t2.id_pelanggan AND status = 2");
        return $this->db->resultSet();
    }
    public function rejectStatus()
    {
        $this->db->query("SELECT t1.id_user, t2.* FROM user t1 JOIN request t2 ON t1.id_user = t2.id_pelanggan AND status = 3");
        return $this->db->resultSet();
    }
}
