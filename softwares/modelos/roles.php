<?php
/**
 * @Entity @Table(name="Roles")
 */
class Roles
{
  /**
   *
   * @ManyToMany(targetEntity="Permisos")
   * @JoinTable(name="permisos_roles",
   *      joinColumns={@JoinColumn(name="roles_id", referencedColumnName="id")},
   *      inverseJoinColumns={@JoinColumn(name="permisos_id", referencedColumnName="id")}
   *      )
   */



  /** @Id @Column(type="integer") **/
  protected $id;
  /** @Column(type="string") **/
  protected $nombre;
  private $permisos;
  function __construct()
  {
    $this->$roles = new \Doctrine\Common\Collections\ArrayCollection();
  }
}

?>
