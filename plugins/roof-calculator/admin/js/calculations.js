// document ready block


$(document).ready(function () {
    console.log("This bitch is ready to rock and roll");

    const infoArray = ['#brand', '#Warranty', '#attachmentType', '#splitBoots', '#outsideCorners',
        '#collectorHeadCount', '#pitchPockets', '#closeBoots', '#drains', '#scupper',
        '#vents', '#walkpads','#membraneThickness', '#splitBootsShow','#wallPlates', '#coppingMetalLFT', '#overflow','#fieldRollsShow', '#fieldRolls'];

    _restoreAllValues(infoArray);



    // deck area
    $('#deckAreaSqf').change(function () {
        _deckAreaCalculations();
    })

     // parapet area
    $('#parapetAreSqf').change(function () {
        _parapetCalculations();

    })






    // Total Roof Sqf to include parapets
    $('#parapetAreSqf').change(function () {
        // $('#totalSQ').text($('#deckAreaSqf').val() + $('#parapetAreSqf').val());
        let totalRoofsqf = parseInt($('#deckAreaSqf').val()) + parseInt($('#parapetAreSqf').val());
        _saveAllValuesLocaly('#totalRoofSqf', totalRoofsqf);
        return $('#totalRoofSqf').html(totalRoofsqf);
    })

    // Select screw for deck type
    $('#deckType').change(function () {
        let deckType = $('#deckType').val();
        let screw = '';
        console.log(deckType);
        if (deckType === 'metal') {
            screw = '#15 screw';
        } else {
            screw = '#14 screw';
        }
        $('#screwType').html(screw);
        _saveAllValuesLocaly('#screwType', screw);
    })

    // Rtu Mastic and termination bar calculations
    $('#rtuLFT').change(function () {
        let rtu = $('#rtuLFT').val();
        let mastic = Math.ceil(_mastic(rtu)) + " Buckets";
        let tbs = Math.ceil(_termBar(rtu)) + " Bars";
        $('#terminationBarShow').text(tbs);
        $('#masticShow').text(mastic);

        _saveAllValuesLocaly('#terminationBarShow', tbs);
        _saveAllValuesLocaly('#masticShow', mastic);

    })

    // Screw selection based on insulation R value
    $('#insulationValue').change(function () {
        let value = $('#insulationValue').val();
        let screwSize
        if (value === 25) {
            screwSize = '5" screw';
        } else {
            screwSize = '6" screw'
        }
        console.log(screwSize);
        _saveAllValuesLocaly('#screwSize', screwSize);
        $('#screwSize').text(screwSize)

    })

    // Insulation Board count


    // Close boot count
    $('#closeBoots').change(function () {
        let boot = parseInt($('#closeBoots').val())
        $('#closeBootsShow').text(boot);
        _saveAllValuesLocaly('#closeBootsShow', boot);
    })

    // Insulation Screws and plates
    $('#coppingMetalStretch').change(function () {
        let deckSq = $('#deckSQ').html();
        console.log(deckSq);
        console.log(typeof deckSq);
        let screw = _insulationBoardScrews(deckSq)
        $('#insulationScrewsShow').text(screw);
        $('#insulationPlatesShow').text(screw);
        _saveAllValuesLocaly('#insulationScrewsShow', screw);
        _saveAllValuesLocaly('#insulationPlatesShow', screw);
    })

    // Field  Screws
    $('#coppingMetalLFT').change(function () {
        let deckSQ = $('#deckSQ').html();
        let screw = _fieldScrews(deckSQ)
        $('#fieldScrews').text(screw);
        $('#fieldScrewsPlates').text(screw);
        _saveAllValuesLocaly('#fieldScrews', screw);
        _saveAllValuesLocaly('#fieldScrewsPlates', screw);
    })

    // Picture frame
    $('#coppingMetalLFT').change(function () {
        let frame = $('#coppingMetalLFT').val();
        let screw = _pictureFrameScrews(frame);
        _saveAllValuesLocaly('#pictureFrameScrews', screw);
        let plates = screw + parseInt(localStorage.getItem('#fieldScrewsPlates'));
        console.log(plates);
        let pfss = parseInt(localStorage.getItem('#pictureFrameScrews'))
        console.log(pfss);
        _saveAllValuesLocaly('#fieldScrewsPlates', plates);
        $('#totalScrewsShow').text(plates);
        $('#pictureFrameScrewsShow').text(pfss);
    })

    $('#coppingMetalLFT').change(function () {
        let cmlf = $('#coppingMetalLFT').val();
        let fieldRolls = _fieldRolls(cmlf);
        $('#fieldRollsShow').text(fieldRolls)
    })

    // Close boot count
    $('#scuppers').change(function () {
        let scuppers = parseInt($('#scuppers').val())
        console.log(scuppers)
        _saveAllValuesLocaly('#scupperShow', scuppers);
        $('#scupperShow').text(scuppers);

    })

    $('#overflow').change(function () {
        let overflow = parseInt($('#overflow').val())
        console.log(overflow)
        _saveAllValuesLocaly('#overflowhow', overflow);
        $('#overflowShow').text(overflow);

    })

    // General roof Info
    $('input').keyup(function () {

        let brand = $('#brand').val();
        let warranty = $('#Warranty').val();
        let attachement = $('#attachmentType').val();
        let split = $('#splitBoots').val();
        let outsideCorners = $('#outsideCorners').val();
        let collectorHeadCount = $('#collectorHeadCount').val();
        let pitchPockets = $('#pitchPockets').val();
        let closeBoots = $('#closeBoots').val();
        let drains = $('#drains').val();
        let vents = $('#vents').val();
        let walkpads = $('#walkpads').val();
        let membraneThickness = $('#membraneThickness').val();
        let wallPlates = $('#wallPlates').val();
        let splitBootsShow = $('#splitBootsShow').val();
        let coppingMetalLFT = $('#coppingMetalLFT').val();
        let scupper = $('#scupper').val();
        let overflow = $('#overflow').val();
        let fieldRolls = $('#fieldRolls').val();
        let fieldRollsShow = $('#fieldRollsShow').val();
        let deckSqf = $('#deckAreaSqf').val();
        let parapetSqf = $('#parapetAreSqf').val();


        localStorage.setItem('#brand', brand);
        localStorage.setItem('#warranty', warranty);
        localStorage.setItem('#attachmentType', attachement);
        localStorage.setItem('#splitBoots', split);
        localStorage.setItem('#outsideCorners', outsideCorners);
        localStorage.setItem('#collectorHeadCount', collectorHeadCount);
        localStorage.setItem('#pitchPockets', pitchPockets);
        localStorage.setItem('#closeBoots', closeBoots);
        localStorage.setItem('#drains', drains);
        localStorage.setItem('#vents', vents);
        localStorage.setItem('#walkpads', walkpads);
        localStorage.setItem('#membraneThickness', membraneThickness);
        localStorage.setItem('#splitBootsShow', splitBootsShow);
        localStorage.setItem('#wallPlates', wallPlates);
        localStorage.setItem('#coppingMetalLFT', coppingMetalLFT);
        localStorage.setItem('#scupper', scupper);
        localStorage.setItem('#overflow', overflow);
        localStorage.setItem('#fieldRolls', fieldRolls);
        localStorage.setItem('#fieldRollsShow', fieldRollsShow);
        localStorage.setItem('#deckAreaSqf', deckSqf);
        localStorage.setItem('#parapetAreSqf', parapetSqf);

        console.log(attachement);

        const infoArray = ['#brand', '#Warranty', '#attachmentType', '#splitBoots', '#outsideCorners',
            '#collectorHeadCount', '#pitchPockets', '#closeBoots', '#drains', '#scupper',
            '#vents', '#walkpads','#membraneThickness', '#splitBootsShow','#wallPlates', '#coppingMetalLFT', '#overflow','#fieldRollsShow', '#fieldRolls'];

        _restoreAllValues(infoArray);



    })


    function _deckAreaCalculations(){
        let deckSQ = $('#deckAreaSqf').val();
        console.log(deckSQ);
        let pvcVents = _pvcVents(deckSQ); // find pvc vent count
        let sqconvert = _toSquares(deckSQ); // conver sqf to squares
        let deckArea = parseInt($('#deckAreaSqf').val());
        let board = _insulationBoardCount(deckArea);
        let deckRolls = _totalRollCount(deckSQ)

        $('#insulationBoardCount').html(board);
        $('#deckSQ').text(sqconvert);
        _saveAllValuesLocaly();
        _saveAllValuesLocaly();

    }

    function  _parapetCalculations(){
            let parapetSQ = $('#parapetAreSqf').val();
            let value = _toSquares(parapetSQ);
            $('#parapetSQShow').text(value);

            let deckAreaSqf = $('#deckAreaSqf').val();
            let parapetAreSqf = $('#parapetAreSqf').val();
            let totalSQ = _combinedSquares(deckAreaSqf, parapetAreSqf);
            _saveAllValuesLocaly('#totalSQ', totalSQ);
            _saveAllValuesLocaly('#deckAreaSqf', deckAreaSqf);
            _saveAllValuesLocaly('#parapetAreSqf', parapetAreSqf);
            $('#totalSQ').text(totalSQ);
    }

    function _totalRoofSquares(){
             // Total Roof Sqf to Squares
            let deckArea = $('#deckAreaSqf').val();
            let parapetArea = $('#parapetAreSqf').val();
            let totalSQ = _combinedSquares(deckArea, parapetArea);
            _saveAllValuesLocaly('#totalSQ', totalSQ);
            $('#totalSQ').text(totalSQ);
        }


    function _pictureFramedRolls(cmlf) {


    }

    function _fieldRolls(cmlf) {
        let pfr = Math.ceil(cmlf / 100);
        let deck = localStorage.getItem(deckSQ);
        let fieldRolls = deck - pfr
        _saveAllValuesLocaly('#fieldRolls', fieldRolls);
    }

    function _pictureFrameScrews(frame) {
        let screws = Math.ceil((frame / 100) * 200);
        return screws;
    }

    function _fieldScrews(deckSQ) {

        return Math.ceil((deckSQ * 100) / 1000 * 200);

        // return ((parseInt(totalSQ) - parseInt(parapetSQ)) * 100  ) * 200;
        // return 'test';
    }

    // utility methods
    function _toSquares(value) {
        console.log(value + " value from to squares");
        return Math.ceil(value / 100);
    }

    function _combinedSquares(value1, value2) {
        console.log(Math.ceil((parseInt(value1) + parseInt(value2)) / 100));
        return Math.ceil((parseInt(value1) + parseInt(value2)) / 100);
    }

    function _insulationBoardCount(deckArea) {
        // var ibc = $('#insulationBoardCount').val();
        console.log(typeof deckArea);
        console.log(deckArea);
        return Math.ceil(_toSquares(deckArea) * 6.25);
    }

    function _insulationBoardScrews(deckArea) {
        console.log(typeof deckArea)
        console.log(parseInt(deckArea))
        return Math.ceil((deckArea * 3.12) * 5);
    }


    function _mastic(rtu) {
        return rtu / 350;
    }

    function _termBar(rtu) {
        return rtu / 10;
    }


    // Need to add a flag to decide if this is needed
    function _pvcVents(deckSQ) {
        return Math.ceil(deckSQ / 1000);
    }

    function _walkpads(walkpadStretch) {
        return ((walkpadStretch /12) / 60) * 12;
    }

    function _restoreAllValues(answersArray) {
        // console.log(answersArray.toString());
        for (const x of answersArray) {
            console.log(x);
            $(x).text(localStorage.getItem(x));
        }
    }

    function _saveAllValuesLocaly(key, value) {
        localStorage.setItem(key, value)
    }

    function _clearAllValuesLocaly() {
        localStorage.clear();
    }

    function _totalRollCount(deckSQ){
        // let totalDeckSquares = localStorage.getItem('#');
        return ((totalDeckSquares * 100) / 1000);
    }

    function _screwCount() {
        let totalSquares = localStorage.getItem('#totalSQ');
        return ((totalSquares * 100) / 1000) * 200;
    }


// end of document ready block

})
