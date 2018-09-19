<?php

/**
 * @Entity @Table(name="Permisos")
 */
class Permisos
{
  /** @Id @Column(type="integer") @GeneratedValue **/
  protected $id;
  /** @Column(type="string") **/
  protected $nombre;
  function __construct()
  {
    // code...
  }
}


 ?>
