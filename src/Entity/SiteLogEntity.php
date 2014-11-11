<?php

namespace zaSkeleton\Entity;


/**
 * User
 *
 * @Table()
 * @Entity()
 */
class SiteLogEntity
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     *
     * */
    protected $id;


    /** @Column(type="string") * */
    protected $name;


} 