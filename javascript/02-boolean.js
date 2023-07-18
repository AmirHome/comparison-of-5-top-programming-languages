export function canExecuteFastAttack(knightIsAwake) {
  // Fast attack is possible if the knight is not awake (sleeping).
  return !knightIsAwake;
}

export function canSpy(knightIsAwake, archerIsAwake, prisonerIsAwake) {
  // Spy action is possible if at least one of the characters (knight, archer, prisoner) is awake.
  return knightIsAwake || archerIsAwake || prisonerIsAwake;
}

export function canSignalPrisoner(archerIsAwake, prisonerIsAwake) {
  // Signal Prisoner action is possible if the archer is not awake (sleeping).
  return !archerIsAwake;
}

export function canFreePrisoner(
  knightIsAwake,
  archerIsAwake,
  prisonerIsAwake,
  petDogIsPresent
) {
  // Free Prisoner action is possible if the knight is not awake (sleeping),
  // the archer is not awake (sleeping), and the prisoner is awake or Annalyn's pet dog is present.
  return !knightIsAwake && !archerIsAwake && (prisonerIsAwake || petDogIsPresent);
}
