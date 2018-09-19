<?php
/**
 * @Entity @Table(name="Usuarios")
 */
class Usuarios
{
  /**
   *
   * @ManyToMany(targetEntity="Roles")
   * @JoinTable(name="usuarios_roles",
   *      joinColumns={@JoinColumn(name="usuario_id", referencedColumnName="id")},
   *      inverseJoinColumns={@JoinColumn(name="roles_id", referencedColumnName="id")}
   *      )
   */

  /** @Id @Column(type="integer") @GeneratedValue **/
  protected $id;
  /** @Column(type="string") **/
  protected $email;
  /** @Column(type="string") **/
  protected $username;
  /** @Column(type="integer") **/
  protected $activo;
  /** @Column(type="datetime") **/
  protected $updated_at;
  /** @Column(type="datetime") **/
  protected $created_at;
  /** @Column(type="string") **/
  protected $first_name;
  /** @Column(type="string") **/
  protected $last_name;
  private $roles;
  function __construct()
  {
    $this->$roles = new \Doctrine\Common\Collections\ArrayCollection();
  }
}






 ?>
