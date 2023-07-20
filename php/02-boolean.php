<?php

declare(strict_types=1);

class AnnalynsInfiltration
{
    // Task 1: Check if a fast attack can be made
    public static function CanFastAttack($knightIsAwake) {
        return !$knightIsAwake;
    }

    // Task 2: Check if the group can be spied upon
    public static function CanSpy($knightIsAwake, $archerIsAwake, $prisonerIsAwake) {
        return $knightIsAwake || $archerIsAwake || $prisonerIsAwake;
    }

    // Task 3: Check if the prisoner can be signalled
    public static function CanSignalPrisoner($archerIsAwake, $prisonerIsAwake) {
        return !$archerIsAwake && $prisonerIsAwake;
    }

    // Task 4: Check if the prisoner can be freed
    public static function CanFreePrisoner($knightIsAwake, $archerIsAwake, $prisonerIsAwake, $petDogIsPresent) {
        if ($petDogIsPresent) {
            return !$archerIsAwake && $prisonerIsAwake;
        } else {
            return !$knightIsAwake && !$archerIsAwake && $prisonerIsAwake;
        }
    }
}