<?php
require_once 'src/ChangeMaker.php';

	class ChangeMakerTest extends PHPUnit_Framework_TestCase
	{

		function test_makeChange_zeroCents()
		{
    		//Arrange
            $test_makeChange = new ChangeMaker;
            $centsTotal = 0;

    		//Act
    		$result = $test_makeChange->makeChange($centsTotal);

    		//Assert
    		$this->assertEquals(array(0,0,0,0), $result);
		}

        function test_makeChange_justQuarters()
		{
    		//Arrange
            $test_makeChange = new ChangeMaker;
            $centsTotal = 25;

    		//Act
    		$result = $test_makeChange->makeChange($centsTotal);

    		//Assert
    		$this->assertEquals(array(1,0,0,0), $result);
		}

        function test_makeChange_dimesQuarters()
		{
    		//Arrange
            $test_makeChange = new ChangeMaker;
            $centsTotal = 35;

    		//Act
    		$result = $test_makeChange->makeChange($centsTotal);

    		//Assert
    		$this->assertEquals(array(1,1,0,0), $result);
		}
        function test_makeChange_dimesQuartersNickels()
		{
    		//Arrange
            $test_makeChange = new ChangeMaker;
            $centsTotal = 40;

    		//Act
    		$result = $test_makeChange->makeChange($centsTotal);

    		//Assert
    		$this->assertEquals(array(1,1,1,0), $result);
		}
        function test_makeChange_allChange()
		{
    		//Arrange
            $test_makeChange = new ChangeMaker;
            $centsTotal = 41;

    		//Act
    		$result = $test_makeChange->makeChange($centsTotal);

    		//Assert
    		$this->assertEquals(array(1,1,1,1), $result);
		}

    }
?>
