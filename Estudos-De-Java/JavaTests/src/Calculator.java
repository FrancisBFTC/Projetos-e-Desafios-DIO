public class Calculator {
    public double average(int[] numbers){
        int sum = 0;
        for(int number : numbers){
            sum += number;
        }
        double avg;
        avg = (double) sum / numbers.length;
        return avg;
    }
}
