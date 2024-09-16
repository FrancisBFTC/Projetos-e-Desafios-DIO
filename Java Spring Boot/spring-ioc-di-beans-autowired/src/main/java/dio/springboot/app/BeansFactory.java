package dio.springboot.app;

import com.google.gson.Gson;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.context.annotation.Scope;

@Configuration
public class BeansFactory {
    @Bean
    public Gson gson() {
        return new Gson();
    }

    @Bean
    @Scope("prototype")
    public Dados dados(){
        System.out.println("CRIANDO OBJETO DE DADOS PADRÃO 'PROTOTYPE'...");
        Dados dados = new Dados();
        return dados;
    }

    @Bean
    @Scope("prototype")
    public ApiData apiData(){
        ApiData apiData = new ApiData();
        return apiData;
    }
}
