<?php
/**
 * Representation of a user of the quiz site.
 * Has a username and password only.
 *
 * @author Edward Mendoza <edcmendoza94@gmail.com>
 * @copyright 2017
 */
class QuizUser
{
    //Class fields
    protected $userID;
    protected $username;
    protected $password;
    
    //Class constructor
    function __construct($userID, $username,
                         $password)
    {
        $this->userID = $userID;
        $this->username = $username;
        $this->password = $password;
    }
    
    //Setters and getters
    /**
     * Assign a name to a user
     *
     * @param String username
     */
    function setUsername($username)
    {
        $this->username = $username;
    }
    
    /**
     * Assign a password to a user
     *
     * @param String password
     */
    function setPassword($password)
    {
        $this->password = $password;
    }
    
    /**
     * Obtain a user's ID number
     *
     * @return int
     */
    function getUserID()
    {
        return $this->userID;
    }
    
    /**
     * Obtain a user's username
     *
     * @return String
     */
    function getUsername()
    {
        return $this->username;
    }
    
    /**
     * Obtain a user's password
     *
     * @return String
     */
    function getPassword()
    {
        return $this->password;
    }
}
?>