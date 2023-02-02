<?php

require("RoofCalculations.php");
////require("Services/RoofCalculationService.php");
//
//
//$roofCalculations = new RoofCalculations();
//$roofCalculationsService = new RoofCalculationService();
//
//
//echo $roofCalculations->getSqfField() . "</br>";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Low Slope Roof Calculations</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="./look.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="./calculations.js"></script>

</head>
<body>


<div class="container-md container-fluid">
    <h2>Low Slope Roof Calculations</h2>
    <hr>
    <form action="./testfile.php">
        <div class="row">
            <div class="col-2">
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" class="form-control" id="brand" placeholder="" name="brand"
                           >
                </div>
                <div class="form-group">
                    <label for="Warranty">Warranty</label>
                    <input type="text" class="form-control" id="Warranty" placeholder="" name="Warranty">
                </div>
                <div class="form-group">
                    <label for="attachmentType">Attachment Type</label>
                    <input type="text" class="form-control" id="attachmentType" placeholder="" name="attachmentType">
                </div>
                <div class="form-group">
                    <label for="insulationValue">Insulation R-value</label>
                    <input type="number" class="form-control" id="insulationValue"
                           placeholder="Only the number for R-value"
                           name="insulationValue">
                </div>
                <div class="form-group">
                    <label for="deckType">Deck Type</label>
                    <input type="text" class="form-control" id="deckType" placeholder="" name="deckType">
                </div>
                <div class="form-group">
                    <label for="membraneThickness">Membrane Mils</label>
                    <input type="number" class="form-control" id="membraneThickness" placeholder=""
                           name="membraneThickness">
                </div>
                <div class="form-group">
                    <label for="splitBoots">Split Boots</label>
                    <input type="number" class="form-control" id="splitBoots" placeholder="" name="splitBoots">



                </div>

            </div>
            <div class="col-2">

                <div class="form-group">
                    <label for="deckAreaSqf">Deck Area Sqf:</label>
                    <input type="text" class="form-control " id="deckAreaSqf" placeholder="" name="deckAreaSqf">
                </div>
                <div class="form-group">
                    <label for="parapetAreSqf">Parapet Area Sqf</label>
                    <input type="number" class="form-control" id="parapetAreSqf" placeholder="" name="parapetAreSqf">
                </div>
                <div class="form-group">
                    <label for="rtuLFT">RTU's Linear Foot</label>
                    <input type="number" class="form-control" id="rtuLFT" placeholder="" name="rtuLFT">
                </div>
                <div class="form-group">
                    <label for="outsideCorners">Outside Corners</label>
                    <input type="number" class="form-control" id="outsideCorners" placeholder="" name="outsideCorners">
                </div>
                <div class="form-group">
                    <label for="coppingMetalStretch">Copping stretch</label>
                    <input type="number" class="form-control" id="coppingMetalStretch" placeholder=""
                           name="coppingMetalStretch">
                </div>
                <div class="form-group">

                    <label for="coppingMetalLFT">Copping lf<br>

                    </label>
                    <input type="number" class="form-control" id="coppingMetalLFT" placeholder=""
                           name="coppingMetalLFT">
                </div>


                <div class="form-group">
                    <label for="downSpoutLFT">Down spout</label>
                    <input type="number" class="form-control" id="downSpoutLFT" placeholder="" name="downSpoutLFT">
                </div>

                <div class="form-group"></div>

            </div>
            <div class="col-2">

                <label for="collectorHeadCount"> Collector Heads</label>

                <input type="number" class="form-control" id="collectorHeadCount" placeholder=""
                       name="collectorHeadCount">
                <div class="form-group">
                    <label for="membraneStretch">Membrane Stretch</label>
                    <input type="number" class="form-control" id="membraneStretch" placeholder=""
                           name="membraneStretch">
                </div>
                <div class="form-group">
                    <label for="pitchPockets">Pitch Pockets</label>
                    <input type="number" class="form-control" id="pitchPockets" placeholder="" name="pitchPockets">
                </div>

                <div class="form-group">
                    <label for="closeBoots">Close boots</label>
                    <input type="number" class="form-control" id="closeBoots" placeholder="" name="closeBoots">
                </div>

                <div class="form-group">
                    <label for="drains">Drains</label>
                    <input type="number" class="form-control" id="drains" placeholder="" name="drains">
                </div>
                <div class="form-group">
                    <label for="vents">Vents</label>
                    <input type="number" class="form-control" id="vents" placeholder="" name="vents">
                </div>
                <div class="form-group">
                    <label for="walkpads">Walkpads</label>
                    <input type="number" class="form-control" id="walkpads" placeholder="" name="walkpads">
                </div>



            </div>
            <div class="col-2">
                <div class="row">
                    <label for="deckSQ">Deck SQ</label>

                    <p id="deckSQ" class="answer"></p>

                </div>
                <label for="parapetSQShow">Parapet SQ</label>
                <p id="parapetSQShow" class="answer"></p>
                <label for="totalSQ">Total Roof SQ</label>
                <p id="totalSQ" class="answer"></p>

                <label for="totalRoofSqf">Total Roof sqf</label>
                <p id="totalRoofSqf" class="answer"></p>
                <label for="screwSize">Screw Size</label>
                <p id="screwSize" class="answer"></p>
                <label for="screwType">Screw Type</label>

                <p id="screwType" class="answer"></p>
                <label for="closeBootsShow">Close Boot</label>
                <p id="closeBootsShow" class="answer"></p>

            </div>

            <div class="col-2">
                <label for="insulationBoardCount">Iso Board</label>
                <p id="insulationBoardCount" class="answer"></p>
                <label for="insulationScrewsShow">Iso Screw Count</label>
                <p id="insulationScrewsShow" class="answer"></p>
                <label for="insulationPlatesShow">Iso Plates</label>
                <p id="insulationPlatesShow" class="answer"></p>

                <label for="fieldScrews">Field Screws</label>
                <p id="fieldScrews" class="answer"></p>
                <label for="fieldScrewsPlates">Cleat plates</label>

                <p id="fieldScrewsPlates" class="answer"></p>
                <label for="pictureFrameScrewsShow">Picture Frame Screws</label>
                <p id="pictureFrameScrewsShow" class="answer"></p>
                <label for="fieldScrews">Field Screws</label>
                <p id="fieldScrews" class="answer"></p>



            </div>
            <div class="col-2">
                <div class="row">

                    <label for="fieldRolls">Field Rolls</label>
                    <p id="fieldRollsShow" class="answer"></p>


                    <label for="pictureFrameRolls">Picture Frame Rolls</label>
                    <p id="pictureFrameRollsShow" class="answer"></p>

                    <label for="terminationBar">Termination Bar</label>
                    <p id="terminationBarShow" class="answer"></p>

                    <label for="mastic">Mastic</label>
                    <p id="masticShow" class="answer"></p>

                    <label for="splitBoots">Split Boots</label>
                    <p id="splitBootsShow" class="answer"></p>
                </div>
                <label for="wallPlates">Wall Plates</label>

                <p id="wallPlates" class="answer">0</p>
                <label for="pictureFrameScrews">Picture Frame Screws</label>
                <p id="pictureFrameScrews" class="answer">0</p>
            </div>
<!--            <div class="col-2">-->
<!--                <label for="totalScrews">Total Screws</label>-->
<!--                <p id="totalScrewsShow" class="answer">0</p>-->
<!--                <label for="fieldScrews">Field Screws</label>-->
<!--                <p id="fieldScrews" class="answer">0</p>-->
<!--                <label for="closeBootsShow">Close Boot</label>-->
<!--                <p id="closeBootsShow" class="answer">0</p>-->
<!--            </div>-->

                <p id="wallPlates" class="answer"></p>
                <label for="totalScrews">Total Screws</label>
                <p id="totalScrewsShow" class="answer"></p>

            </div>


            <div class="col-2"></div>
            <div class="col-2"></div>
            <div class="col-2"></div>
        </div>


</div>


</div>

</body>


<div class="checkbox">
    <label><input type="checkbox" name="remember"> Remember me</label>
</div>

<button type="button" class="btn btn-warning">View All Values</button>

</form>
</div>
<div>
    <?php
    echo "<pre>";
    echo 'test';
//    print_r($GLOBALS['_GET']);
//
//
//
//    $roofcalcRene = $roofCalculations->getCollectorHeadCount();
//    echo $roofcalcRene;
//   print($roofCalculations->getCollectorHeadCount());



    $roofCalculations->setBrand($GLOBALS['_GET']['brand']);
    $roofCalculations->setWarranty($GLOBALS['_GET']['Warranty']);
    $roofCalculations->setAttachementType($GLOBALS['_GET']['attachementType']);
    $roofCalculations->setInsulationValue($GLOBALS['_GET']['insulationValue']);
    $roofCalculations->setMembraneThickness($GLOBALS['_GET']['membraneThickness']);
    $roofCalculations->setSplitBoots($GLOBALS['_GET']['splitBoots']);
    $roofCalculations->setDownSpoutLenght($GLOBALS['_GET']['downSpoutLFT']);
    $roofCalculations->setDeckAreaSqf($GLOBALS['_GET']['deckAreaSqf']);
    $roofCalculations->setSqfParapet($GLOBALS['_GET']['parapetAreSqf']);
    $roofCalculations->setRtuLinearFoot($GLOBALS['_GET']['rtuLFT']);
    $roofCalculations->setOutsideCorners($GLOBALS['_GET']['outsideCorners']);
    $roofCalculations->setCoppingMetalStretch($GLOBALS['_GET']['coppingMetalStretch']);
    $roofCalculations->setCoppingMetallinearFoot($GLOBALS['_GET']['coppingMetalLFT']);
    $roofCalculations->setCollectorHeadCount($GLOBALS['_GET']['collectorHeadCount']);
    $roofCalculations->setMembraneStretch($GLOBALS['_GET']['membraneStretch']);
    $roofCalculations->setPitchPockets($GLOBALS['_GET']['pitchPockets']);
    $roofCalculations->setClosedBoots($GLOBALS['_GET']['closeBoots']);
    $roofCalculations->setDrains($GLOBALS['_GET']['drains']);
    $roofCalculations->setVents($GLOBALS['_GET']['vents']);
    $roofCalculations->setWalkpads($GLOBALS['_GET']['walkpads']);

//    echo $roofCalculations->getBrand();

    print($roofCalculations->getBrand());

    echo $roofCalculations->getDeckAreaSqf();
    echo $roofCalculations->getSqfField();
    echo $roofCalculations->getAttachementType();
    echo $roofCalculations->getClosedBoots();
    echo $roofCalculations->getCoppingMetallinearFoot();
    echo $roofCalculations->getAttachementType();
    echo $roofCalculations->getCoppingMetalStretch();
    echo $roofCalculations->getDeckType();
    echo $roofCalculations->getDownSpoutLenght();
    echo $roofCalculations->getDrains();
    echo $roofCalculations->getInsulationValue();
    echo $roofCalculations->getMaterialType();
    echo $roofCalculations->getOutsideCorners();
    echo $roofCalculations->getMembraneStretch();
    echo $roofCalculations->getMembraneThickness();
    echo $roofCalculations->getOverflows();
    echo $roofCalculations->getPitchPockets();
    echo $roofCalculations->getRtuLinearFoot();
    echo $roofCalculations->getVents();
    echo $roofCalculations->getScuppers();
    echo $roofCalculations->getSplitBoots();
    echo $roofCalculations->getSqfParapet();
    echo $roofCalculations->getWalkpads();
    echo $roofCalculations->getWarranty();
        echo "this is some shit";

//
//
//
//
    echo "</pre>";

    echo "<pre>  test the pre </pre>";
    ?>

</div>

</body>

</html>
