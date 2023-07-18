public static class QuestLogic
{
    // Task 1: Check if a fast attack can be made
    public static bool CanFastAttack(bool knightIsAwake)
    {
        // A fast attack can only be made if the knight is not awake
        return !knightIsAwake;
    }

    // Task 2: Check if the group can be spied upon
    public static bool CanSpy(bool knightIsAwake, bool archerIsAwake, bool prisonerIsAwake)
    {
        // The group can be spied upon if at least one of the characters is awake
        return knightIsAwake || archerIsAwake || prisonerIsAwake;
    }

    // Task 3: Check if the prisoner can be signalled
    public static bool CanSignalPrisoner(bool archerIsAwake, bool prisonerIsAwake)
    {
        // The prisoner can be signalled if both the archer and the prisoner are awake
        return archerIsAwake && prisonerIsAwake;
    }

    // Task 4: Check if the prisoner can be freed
    public static bool CanFreePrisoner(bool knightIsAwake, bool archerIsAwake, bool prisonerIsAwake, bool petDogIsPresent)
    {
        // The prisoner can be freed if the knight is not awake, the archer is awake,
        // the prisoner is awake, and Annalyn's pet dog is present
        return !knightIsAwake && archerIsAwake && prisonerIsAwake && petDogIsPresent;
    }
}
