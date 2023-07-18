public class AnnalynsInfiltration {
    // Task 1: Check if a fast attack can be made
    public static boolean canFastAttack(boolean knightIsAwake) {
        return !knightIsAwake;
    }

    // Task 2: Check if the group can be spied upon
    public static boolean canSpy(boolean knightIsAwake, boolean archerIsAwake, boolean prisonerIsAwake) {
        return !knightIsAwake && archerIsAwake && !prisonerIsAwake;
    }

    // Task 3: Check if the prisoner can be signalled
    public static boolean canSignalPrisoner(boolean archerIsAwake, boolean prisonerIsAwake) {
        return !archerIsAwake && prisonerIsAwake;
    }

    // Task 4: Check if the prisoner can be freed
    public static boolean canFreePrisoner(boolean knightIsAwake, boolean archerIsAwake, boolean prisonerIsAwake, boolean petDogIsPresent) {
        return !knightIsAwake && archerIsAwake && !prisonerIsAwake && petDogIsPresent;
    }
}
