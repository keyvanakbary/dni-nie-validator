<?php

class DniNieValidatorTest extends \PHPUnit_Framework_TestCase
{
    private $validator;

    public function setUp()
    {
        $this->validator = new \DniNieValidator;
    }

    /**
     * @test
     * @dataProvider validDniNieStrings
     */
    public function shouldBeValid($string)
    {
        $this->assertTrue($this->validator->isValid($string));
    }

    public function validDniNieStrings()
    {
        return array(
            array('51820536H'),
            array('82332890C'),
            array('75064218S'),
            array('29950685Q'),
            array('81160236K'),
            array('75156946F'),
            array('03729526F'),
            array('63436158L'),
            array('74237653R'),
            array('14405878N'),
            array('X2135862J'),
            array('Z4186300R'),
            array('Y4158856L'),
            array('X2507208R'),
            array('Y5275298H'),
            array('Y1978104N'),
            array('Z7602845B'),
            array('X9055789E'),
            array('Y0336441C'),
            array('X2826429M')
        );
    }

    /**
     * @test
     * @dataProvider invalidDniNieStrings
     */
    public function shouldBeInvalid($string)
    {
        $this->assertFalse($this->validator->isValid($string));
    }

    public function invalidDniNieStrings()
    {
        return array(
            array('5180536J'),
            array('51820536J'),
            array('Y336441C'),
            array('X28264299M')
        );
    }
}