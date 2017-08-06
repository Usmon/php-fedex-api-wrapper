<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the type of adjustment was performed to the COD collection amount during rating.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class CodAdjustmentType extends AbstractSimpleType
{
    const _CHARGES_ADDED = 'CHARGES_ADDED';
    const _NONE = 'NONE';
}
