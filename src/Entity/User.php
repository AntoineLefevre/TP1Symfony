<?php
/**
 * Created by PhpStorm.
 * User: antoine.lefevre
 * Date: 06/11/17
 * Time: 15:41
 */
namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
* Class User
* @package App\Entity
* @ORM\Entity
* @ORM\Table(name="user")
*/
class User
{

    /**
     * @var int
     * @ORM\Id()
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $nom;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $prenom;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $github;

    /**
     * @var string
     *
     * @ORM\Column(type="string",nullable=true)
     */
    protected $discord;

    /**
     * User constructor.
     * @param int $id
     * @param string $nom
     * @param string $prenom
     * @param string $email
     * @param string $github
     * @param string $discord
     */
    public function __construct($id, $nom, $prenom, $email, $github, $discord)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->github = $github;
        $this->discord = $discord;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getGithub(): string
    {
        return $this->github;
    }

    /**
     * @return string
     */
    public function getDiscord(): string
    {
        return $this->discord;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @param string $github
     */
    public function setGithub(string $github)
    {
        $this->github = $github;
    }

    /**
     * @param string $discord
     */
    public function setDiscord(string $discord)
    {
        $this->discord = $discord;
    }


}