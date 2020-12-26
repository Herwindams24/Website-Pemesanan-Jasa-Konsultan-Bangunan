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

    public function saveRequestPelanggan($id_user)
    {
        $q = "INSERT INTO request (id_pelanggan, nama, phone, services, building, budget, location, timeline, message) 
        VALUES (:id_pelanggan, :nama, :phone, :services, :building, :budget, :location, :timeline, :message)";
        $this->db->query($q);

        $this->db->bind(':id_pelanggan', $id_user);
        $this->db->bind(':nama', $nama);
        $this->db->bind(':phone', $phone);
        $this->db->bind(':services', $services);
        $this->db->bind(':building', $building);
        $this->db->bind(':budget', $budget);
        $this->db->bind(':location', $location);
        $this->db->bind(':timeline', $timeline);
        $this->db->bind(':message', $message);
        $this->db->execute();
        return $this->db->rowCount();
        /*$this->db->query(INSERT INTO 
        request (id_request, id_pelanggan, phone, services, building, budget, location, timeline, message));
        $this->db->bind(':id_pelanggan', $id_user);
        return $this->db->resultSet();*/
    }

    public function cekRequestPelanggan($id_user){
        $this->db->query("SELECT * FROM request WHERE id_pelanggan = :id_pelanggan");
        $this->db->bind(':id_pelanggan', $id_user);
        return $this->db->resultSet();
    }
}
