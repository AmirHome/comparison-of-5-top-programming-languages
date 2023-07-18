public class Lasagna {

    private static final int PREPARATION_PER_LAYER = 2;  

    
    public int expectedMinutesInOven(){
        return 40;
    }


    public int remainingMinutesInOven(int minutesInOven){
        return expectedMinutesInOven() - minutesInOven;
    }


    public int preparationTimeInMinutes(int layers){
        return layers * PREPARATION_PER_LAYER;
    }

    public int totalTimeInMinutes(int layers, int minutesInOven){
        return preparationTimeInMinutes(layers) + minutesInOven;
    }
}