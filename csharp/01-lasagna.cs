class Lasagna
{
    private const int PreparationPerLayer = 2;

    public int ExpectedMinutesInOven(){
        return 40;
    }

    public int RemainingMinutesInOven(int minutesInOven){
        return ExpectedMinutesInOven() - minutesInOven;
    }

    public int PreparationTimeInMinutes(int layers){
        return PreparationPerLayer * layers;
    }

    public int ElapsedTimeInMinutes(int layers, int minutesInOven){
        return PreparationTimeInMinutes(layers) + minutesInOven;
    }
}
