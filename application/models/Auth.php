<?php

class Auth extends Model
{
    public function checkUser( $user )
    {
        $user['password'] = md5($user['password' ]);

        $sth = $this->db->prepare( 'SELECT * FROM user WHERE username= :login AND password = :password' );
        $sth->bindParam( ':login', $user[ 'login' ] );
        $sth->bindParam( ':password', $user[ 'password' ] );
        $sth->execute();
        return $sth->fetch();
    }

    public function register($user = array())
    {
        $user['password'] = md5($user['password' ]);

        $sth = $this->db->prepare( 'INSERT INTO user (`username`, `password`) VALUES (:username, :password)' );
        $sth->bindParam( ':username', $user['username'] );
        $sth->bindParam( ':password', $user['password'] );
        $sth->execute();
    }
}