<?php

function Guid() {
    if (function_exists('com_create_guid') === true) {
        return trim(com_create_guid(), '{}');
    }

    return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
}

class Marker {
    public static $BuildingTypes = array('FaithGroup', 'TrainingCentre', 'ChildrensCentre', 'Leisure', 'TownHall', 'Education', 'TheHub', 'CommunityCentre', 'Parks', 'Shops');
    public $Id;
    public $Name;
    public $X;
    public $Y;
    public $Type;
    public $Address;
    public $Website;
    public $PhoneNumber;
    public $Description;

    public function __construct($name = "", $x = 0, $y = 0, $markerType = "", $address = "", $website = "", $phoneNumber = "", $descriptions = array()) {
        $this->Id = Guid();

        $this->Name = $name;
        $this->X = $x;
        $this->Y = $y;
        $this->Type = $markerType;
        $this->Address = $address;
        $this->Website = $website;
        $this->PhoneNumber = $phoneNumber;
        
        for ($i = 0; $i < count($descriptions); $i++) {
            $this->Description .= $descriptions[$i] . (($i + 1) === count($descriptions) ? '' : '\n');
        }
    }

}

?>