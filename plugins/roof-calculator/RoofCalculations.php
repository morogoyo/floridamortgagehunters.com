<?php

class RoofCalculations
{
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      int    $sqfField    field square foot.
     */
    private $sqfField = 1000;
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      int    $sqfParapet   parapet area square foot.
     */
    private $sqfParapet = 1000;
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      int    $coppingMetalStretch    copping metal linear square foot.
     */
    private $coppingMetalStretch;
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      int    $coppingMetallinearFoot    copping metal linear foot.
     */
    private $coppingMetallinearFoot;
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      int    $rtuLinearFoot    RTU linear foot.
     */
    private $rtuLinearFoot;
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      int    $outsideCorners    outside Corners count.
     */
    private $outsideCorners;
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      int    $drains    Drain count.
     */
    private $drains;
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      int    $vents    Vent count.
     */
    private $vents;
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      int    $splitBoots    Split boot count.
     */
    private $splitBoots;
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      int    $membraneStretch    Lenght of membrane base to the front of the building.
     */
    private $membraneStretch;
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $insulation_value    Insulations R-value.
     */
    private $insulation_value;
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $deckType    What type of decking surface are we dealing with?.
     */
    private $deckType;
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      int    $scuppers    Scuppers count.
     */
    private $scuppers;
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      int    $downSpoutLenght    Down spout length in ft.
     */
    private $downSpoutLenght;
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      int    $pitchPockets    How many poles are there on the roof.
     */
    private $pitchPockets;
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $materialType    Membrane type being used.
     */
    private $materialType;
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $attachementType    Attachement type mechanical or Self adhered.
     */
    private $attachementType;
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      int    $closedBoots    Boots needed for vents.
     */
    private $closedBoots;
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      int    $membraneThickness    membrane thickness in mils.
     */
    private $membraneThickness;
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      int    $walkpads    walkpads count.
     */
    private $walkpads;
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $warranty    warranty.
     */
    private $warranty;
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      int    $overflows    overflows count.
     */
    private $overflows;

    /**
     * @return int
     */
    public function getSqfField(): int
    {
        return $this->sqfField;
    }

    /**
     * @param int $sqfField
     */
    public function setSqfField(int $sqfField): void
    {
        $this->sqfField = $sqfField;
    }

    /**
     * @return int
     */
    public function getSqfParapet(): int
    {
        return $this->sqfParapet;
    }

    /**
     * @param int $sqfParapet
     */
    public function setSqfParapet(int $sqfParapet): void
    {
        $this->sqfParapet = $sqfParapet;
    }

    /**
     * @return int
     */
    public function getCoppingMetalStretch(): int
    {
        return $this->coppingMetalStretch;
    }

    /**
     * @param int $coppingMetalStretch
     */
    public function setCoppingMetalStretch(int $coppingMetalStretch): void
    {
        $this->coppingMetalStretch = $coppingMetalStretch;
    }

    /**
     * @return int
     */
    public function getCoppingMetallinearFoot(): int
    {
        return $this->coppingMetallinearFoot;
    }

    /**
     * @param int $coppingMetallinearFoot
     */
    public function setCoppingMetallinearFoot(int $coppingMetallinearFoot): void
    {
        $this->coppingMetallinearFoot = $coppingMetallinearFoot;
    }

    /**
     * @return int
     */
    public function getRtuLinearFoot(): int
    {
        return $this->rtuLinearFoot;
    }

    /**
     * @param int $rtuLinearFoot
     */
    public function setRtuLinearFoot(int $rtuLinearFoot): void
    {
        $this->rtuLinearFoot = $rtuLinearFoot;
    }

    /**
     * @return int
     */
    public function getOutsideCorners(): int
    {
        return $this->outsideCorners;
    }

    /**
     * @param int $outsideCorners
     */
    public function setOutsideCorners(int $outsideCorners): void
    {
        $this->outsideCorners = $outsideCorners;
    }

    /**
     * @return int
     */
    public function getDrains(): int
    {
        return $this->drains;
    }

    /**
     * @param int $drains
     */
    public function setDrains(int $drains): void
    {
        $this->drains = $drains;
    }

    /**
     * @return int
     */
    public function getVents(): int
    {
        return $this->vents;
    }

    /**
     * @param int $vents
     */
    public function setVents(int $vents): void
    {
        $this->vents = $vents;
    }

    /**
     * @return int
     */
    public function getSplitBoots(): int
    {
        return $this->splitBoots;
    }

    /**
     * @param int $splitBoots
     */
    public function setSplitBoots(int $splitBoots): void
    {
        $this->splitBoots = $splitBoots;
    }

    /**
     * @return int
     */
    public function getMembraneStretch(): int
    {
        return $this->membraneStretch;
    }

    /**
     * @param int $membraneStretch
     */
    public function setMembraneStretch(int $membraneStretch): void
    {
        $this->membraneStretch = $membraneStretch;
    }

    /**
     * @return string
     */
    public function getInsulationValue(): string
    {
        return $this->insulation_value;
    }

    /**
     * @param string $insulation_value
     */
    public function setInsulationValue(string $insulation_value): void
    {
        $this->insulation_value = $insulation_value;
    }

    /**
     * @return string
     */
    public function getDeckType(): string
    {
        return $this->deckType;
    }

    /**
     * @param string $deckType
     */
    public function setDeckType(string $deckType): void
    {
        $this->deckType = $deckType;
    }

    /**
     * @return int
     */
    public function getScuppers(): int
    {
        return $this->scuppers;
    }

    /**
     * @param int $scuppers
     */
    public function setScuppers(int $scuppers): void
    {
        $this->scuppers = $scuppers;
    }

    /**
     * @return int
     */
    public function getDownSpoutLenght(): int
    {
        return $this->downSpoutLenght;
    }

    /**
     * @param int $downSpoutLenght
     */
    public function setDownSpoutLenght(int $downSpoutLenght): void
    {
        $this->downSpoutLenght = $downSpoutLenght;
    }

    /**
     * @return int
     */
    public function getPitchPockets(): int
    {
        return $this->pitchPockets;
    }

    /**
     * @param int $pitchPockets
     */
    public function setPitchPockets(int $pitchPockets): void
    {
        $this->pitchPockets = $pitchPockets;
    }

    /**
     * @return string
     */
    public function getMaterialType(): string
    {
        return $this->materialType;
    }

    /**
     * @param string $materialType
     */
    public function setMaterialType(string $materialType): void
    {
        $this->materialType = $materialType;
    }

    /**
     * @return string
     */
    public function getAttachementType(): string
    {
        return $this->attachementType;
    }

    /**
     * @param string $attachementType
     */
    public function setAttachementType(string $attachementType): void
    {
        $this->attachementType = $attachementType;
    }

    /**
     * @return int
     */
    public function getClosedBoots(): int
    {
        return $this->closedBoots;
    }

    /**
     * @param int $closedBoots
     */
    public function setClosedBoots(int $closedBoots): void
    {
        $this->closedBoots = $closedBoots;
    }

    /**
     * @return int
     */
    public function getMembraneThickness(): int
    {
        return $this->membraneThickness;
    }

    /**
     * @param int $membraneThickness
     */
    public function setMembraneThickness(int $membraneThickness): void
    {
        $this->membraneThickness = $membraneThickness;
    }

    /**
     * @return int
     */
    public function getWalkpads(): int
    {
        return $this->walkpads;
    }

    /**
     * @param int $walkpads
     */
    public function setWalkpads(int $walkpads): void
    {
        $this->walkpads = $walkpads;
    }

    /**
     * @return string
     */
    public function getWarranty(): string
    {
        return $this->warranty;
    }

    /**
     * @param string $warranty
     */
    public function setWarranty(string $warranty): void
    {
        $this->warranty = $warranty;
    }

    /**
     * @return int
     */
    public function getOverflows(): int
    {
        return $this->overflows;
    }

    /**
     * @param int $overflows
     */
    public function setOverflows(int $overflows): void
    {
        $this->overflows = $overflows;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////

//Questions needed to get measurements

    /*
     *  Field area in sqf x
     *  parapet area in sqf x
     *  Copping metal stretch x
     *  Copping Metal Linear foot x
     *  RTU's Linear Foot x
     *  Outside Corners x
     *  Drains x
     *  Vents x
     *  Warranty x
     *  Membrane Stretch x
     *  Insulation R-value x
     *  Deck Type x
     *  Scuppers / overflows x
     *  Collector Heads Count x
     *  Down spout Lenght x
     *  Split Boots x
     *  Pitch Pockets x
     *  Material Type x
     *  Attachment Type x
     *  Close boots x
     *  Membrane Thickness x
     *  Walkpads x
     */



}
