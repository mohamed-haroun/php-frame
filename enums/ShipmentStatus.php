<?php
declare(strict_types=1);
namespace enums;

enum ShipmentStatus: string
{
    case Created = 'Created';
    case Packed = 'Packed';
    case Loaded = 'Loaded';
    case Delayed = 'Delayed';
    case Arrived = 'Arrived';
    case Delivered = 'Delivered';
    case Rejected = 'Rejected';
    case Edited = 'Edited';
    case Invoiced = 'Invoiced';
}
