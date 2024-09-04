import java.beans.XMLDecoder;
import java.io.*;
import java.util.Scanner;
import java.util.regex.MatchResult;
import java.lang.Math;

//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
public class Main {
    public static void main(String[] args) throws FileNotFoundException {
        //TIP Press <shortcut actionId="ShowIntentionActions"/> with your caret at the highlighted text
        // to see how IntelliJ IDEA suggests fixing it.
        //System.out.printf("Hello and welcome! " + args[0] + "\n");

        // First development test studies
        CreateWindowByXML createWindowByXML = new CreateWindowByXML();
        createWindowByXML.DevTest();

        File file = new File("C:\\Users\\wendersonanjos\\Desktop\\Projects\\JavaTests\\");
        if(file.exists()) {
            String[] files = file.list();
            for (int i = 0; i < files.length; i++)
                System.out.println("File exists: " + files[i] + "\n");
        }

    }
}

class GetFirstClassString{
    static String getFirstString(){
        return "The First String";
    }
}

class GetSecondClassString{
    static String getSecondString(){
        return "The Second String";
    }
}

class CreateWindowByXML{
    public CreateWindowByXML() throws FileNotFoundException {
        XMLDecoder decoder = new XMLDecoder(
                new BufferedInputStream(
                        new FileInputStream("C:\\Users\\wendersonanjos\\Desktop\\Projects\\JavaTests\\xmlencod.xml")
                ));
        Object o = decoder.readObject();
        decoder.close();
    }

    public void DevTest(){
        String wordsNumbers = "Lorem Ipsum Lorem Ipsum!";
        try (Scanner scanner = new Scanner(wordsNumbers)) {
            while (scanner.hasNextLine()) {
                String word = scanner.nextLine();
                System.out.printf("%s\n", word);
            }
        }

        try (Scanner scanner = new Scanner(wordsNumbers)) {
            scanner.findAll("Ipsum").map(MatchResult::end)
                    .forEach(System.out::println);
        }

        System.out.println(GetFirstClassString.getFirstString());
        System.out.println(GetSecondClassString.getSecondString());

        double rand_sin = Math.asin(Math.random());
        System.out.println("Value: " + rand_sin +
                "\nExponent: " + Math.getExponent(rand_sin) + "\n");

        int[] numbers = {10, 20, 30, 40, 50, 60, 70, 80, 90};

        Calculator calc = new Calculator();
        System.out.println(calc.average(numbers));
    }
}







