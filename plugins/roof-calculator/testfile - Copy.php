<?php

require("RoofCalculations.php");


$roofCalculations = new RoofCalculations();


echo $roofCalculations->getSqfField() . "</br>";
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
    <script src="calculations.js"></script>

</head>
<body>


<div class="container-md">
    <h2>Low Slope Roof Calculations</h2>
    <hr>
    <form action="/action_page.php">
        <div class="row">
            <div class="col-2">
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" class="form-control" id="brand" placeholder="" name="brand">
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
                    <label for="membraneThickness">Membrane Thickness</label>
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
                    <input type="text" class="form-control" id="parapetAreSqf" placeholder="" name="parapetAreSqf">
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
                    <label for="coppingMetalStretch">Copping metal stretch</label>
                    <input type="number" class="form-control" id="coppingMetalStretch" placeholder=""
                           name="coppingMetalStretch">
                </div>
                <div class="form-group">
                    <label for="coppingMetalLFT">Copping Metal Linear foot</label>
                    <input type="number" class="form-control" id="coppingMetalLFT" placeholder=""
                           name="coppingMetalLFT">
                </div>

                <div class="form-group">
                    <label for="collectorHeadCount">Collector Heads Count</label>
                    <input type="number" class="form-control" id="collectorHeadCount" placeholder=""
                           name="collectorHeadCount">
                </div>
                <div class="form-group">
                    <label for="downSpoutLFT">Down spout Lenght</label>
                    <input type="number" class="form-control" id="downSpoutLFT" placeholder="" name="downSpoutLFT">
                </div>

            </div>
            <div class="col-2">
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


                <div class="form-group">
                    <label for="downSpoutLFT">Down spout Lenght</label>
                    <input type="number" class="form-control" id="downSpoutLFT" placeholder="" name="downSpoutLFT">
                </div>
            </div>
            <div class="col-2">
                <div class="row">
                    <label for="deckSQ">Deck SQ</label>
                    <p id="deckSQ" class="answer">0</p>
                </div>
                <label for="parapetSQ">Parapet SQ</label>
                <p id="parapetSQ" class="answer">0</p>
                <label for="totalSQ">Total Roof SQ</label>
                <p id="totalSQ" class="answer">0</p>

                <label for="totalRoofSqf">Total Roof sqf</label>
                <p id="totalRoofSqf" class="answer">0</p>
                <label for="screwSize">Screw Size</label>
                <p id="screwSize" class="answer">0</p>
                <label for="screwType">Screw Type</label>
                <p id="screwType" class="answer">0</p>

            </div>

            <div class="col-2">
                <label for="insulationBoardCount">Insulation Board Count</label>
                <p id="insulationBoardCount" class="answer">0</p>
                <label for="insulationScrewsShow">Insulation Screw Count</label>
                <p id="insulationScrewsShow" class="answer"></p>
                <label for="insulationPlatesShow">Insulation Plates</label>
                <p id="insulationPlatesShow" class="answer">0</p>

                <label for="fieldScrews">Field Screws</label>
                <p id="fieldScrews" class="answer">0</p>
                <label for="fieldScrewsPlates">Field Screws Cleat plates</label>
                <p id="fieldScrewsPlates" class="answer">0</p>


            </div>
            <div class="col-2">
                <div class="row">
                    <label for="fieldRolls">Field Rolls</label>
                    <p id="fieldRollsShow" class="answer">0</p>

                    <label for="pictureFrameRolls">Picture Frame Rolls</label>
                    <p id="pictureFrameRollsShow" class="answer">0</p>

                    <label for="terminationBar">Termination Bar</label>
                    <p id="terminationBarShow" class="answer">0</p>

                    <label for="mastic">Mastic</label>
                    <p id="masticShow" class="answer">0</p>

                    <label for="splitBoots">Split Boots</label>
                    <p id="splitBootsShow" class="answer">0</p>
                </div>
            </div>
            <div class="col-2">
                <label for="pictureFrameScrews">Picture Frame Screws</label>
                <p id="pictureFrameScrews" class="answer">0</p>



                <label for="totalScrews">Total Screws</label>
                <p id="totalScrewsShow" class="answer">0</p>
            </div>
            <div class="col-2">

                <label for="wallPlates">Wall Plates</label>
                <p id="wallPlates" class="answer">0</p>

            </div>
            <div class="col-2">
                <label for="pictureFrameScrews">Picture Frame Screws</label>
                <p id="pictureFrameScrews" class="answer">0</p>
            </div>
            <div class="col-2">
                <label for="closeBootsShow">Close Boot</label>
                <p id="closeBootsShow" class="answer">0</p>
            </div>
        </div>


</div>


</div>

<label for="fieldScrews">Field Screws</label>
<p id="fieldScrews" class="answer">0</p>

</body>


<div class="checkbox">
    <label><input type="checkbox" name="remember"> Remember me</label>
</div>
<button type="button" class="btn btn-warning">Submit</button>
</form>
</div>


</body>
</html>
