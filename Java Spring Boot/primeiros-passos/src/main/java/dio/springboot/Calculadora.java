package dio.springboot;

import org.springframework.stereotype.Component;

@Component
public class Calculadora {
    public int somar(int numero1, int numero2){
        return numero1 + numero2;
    }
}
