<?php

declare(strict_types=1);

class AnnalynsInfiltration
{
    // Task 1: Check if a fast attack can be made
    public static function canFastAttack($knightIsAwake)
    {
        // A fast attack can only be made if the knight is not awake
        return !$knightIsAwake;
    }

    // Task 2: Check if the group can be spied upon
    public static function canSpy($knightIsAwake, $archerIsAwake, $prisonerIsAwake)
    {
        // The group can be spied upon if at least one of the characters is awake
        return $knightIsAwake || $archerIsAwake || $prisonerIsAwake;
    }

    // Task 3: Check if the prisoner can be signalled
    public static function canSignalPrisoner($archerIsAwake, $prisonerIsAwake)
    {
        // The prisoner can be signalled if the archer is awake and the prisoner is not awake
        return $archerIsAwake && !$prisonerIsAwake;
    }

    // Task 4: Check if the prisoner can be freed
    public static function canFreePrisoner($knightIsAwake, $archerIsAwake, $prisonerIsAwake, $petDogIsPresent)
    {
        // The prisoner can be freed if the knight and archer are not awake and Annalyn's pet dog is present
        return !$knightIsAwake && !$archerIsAwake && !$prisonerIsAwake && $petDogIsPresent;
    }
}