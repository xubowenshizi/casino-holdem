<?php

namespace Cysha\Casino\Holdem\Tests\Exceptions;

use Cysha\Casino\Game\Chips;
use Cysha\Casino\Holdem\Exceptions\RoundException;
use PHPUnit_Framework_TestCase;

class RoundExceptionTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function the_flop_has_been_dealt_can_accept_custom_messages()
    {
        $expectedException = new RoundException('custom message');
        $this->assertEquals($expectedException, RoundException::flopHasBeenDealt('custom message'));
    }

    /** @test */
    public function the_turn_has_been_dealt_can_accept_custom_messages()
    {
        $expectedException = new RoundException('custom message');
        $this->assertEquals($expectedException, RoundException::turnHasBeenDealt('custom message'));
    }

    /** @test */
    public function the_river_has_been_dealt_can_accept_custom_messages()
    {
        $expectedException = new RoundException('custom message');
        $this->assertEquals($expectedException, RoundException::riverHasBeenDealt('custom message'));
    }

    /** @test */
    public function the_invalid_button_position_can_accept_custom_messages()
    {
        $expectedException = new RoundException('custom message');
        $this->assertEquals($expectedException, RoundException::invalidButtonPosition('custom message'));
    }

    /** @test */
    public function cant_check_with_bet_active_can_accept_custom_messages()
    {
        $expectedException = new RoundException('custom message');
        $this->assertEquals($expectedException, RoundException::cantCheckWithBetActive('custom message'));
    }

    /** @test */
    public function cant_raise_lower_amount_than_highest_bet_custom_message()
    {
        $expectedException = new RoundException('custom message');
        $raise = Chips::fromAmount(10);
        $bet = Chips::fromAmount(20);
        $this->assertEquals($expectedException, RoundException::raiseNotHighEnough($raise, $bet, 'custom message'));
    }
}
