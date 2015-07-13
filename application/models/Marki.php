<?php
class Marki extends Model{

    public function getMarki()
    {
        $sth = $this->db->prepare('SELECT marki_id, marki_nazwa FROM marki');
        $sth->execute();
        return $sth->fetchAll();
    }

    public function deleteMarki($idMarki)
    {
        $sth = $this->db->prepare('DELETE FROM marki WHERE marki_id =:marki_id');
        $sth->bindParam(':marki_id', $idMarki, PDO::PARAM_STR);
        $sth->execute();
    }

    /*public function countDataMarki()
    {
        $sth = $this->db->prepare( 'SELECT COUNT(*) AS count FROM marki' );
        $sth->execute();
        $result = $sth->fetch();
        return $result[ 'count' ];
    }*/

    public function getMarkiLimit($from, $limit)
    {
        $sth = $this->db->prepare('SELECT marki.* FROM marki ORDER BY marki_id DESC LIMIT '.$from.', '.$limit.'');
        $sth->execute();
        return $sth->fetchAll();
    }

    public function countData()
    {
        $sth = $this->db->prepare( 'SELECT COUNT(*) AS count FROM marki' );
        $sth->execute();
        $result = $sth->fetch();
        return $result[ 'count' ];
    }

    public function addMarki($marka)
    {
        $sth = $this->db->prepare('INSERT INTO marki (marki_nazwa) VALUES (:marka)');
        $sth->bindParam(':marka', $marka, PDO::PARAM_STR);
        $sth->execute();
    }
}

