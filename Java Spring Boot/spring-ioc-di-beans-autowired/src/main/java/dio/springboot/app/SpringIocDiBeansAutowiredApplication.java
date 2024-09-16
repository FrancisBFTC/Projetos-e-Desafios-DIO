package dio.springboot.app;

import com.google.gson.Gson;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.boot.context.properties.ConfigurationProperties;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.context.annotation.Scope;

@SpringBootApplication
public class SpringIocDiBeansAutowiredApplication {

	@Autowired
	public RestRequest req;
	@Autowired
	public Gson gson;
	@Autowired
	public ApiData cep;

	public static void main(String[] args) {
		SpringApplication.run(SpringIocDiBeansAutowiredApplication.class, args);
	}

	@Bean
	public CommandLineRunner run(ConversorJson conversor, SistemaMessagem sistema) throws Exception {

		return args -> {
			String json = req.request(cep.getApi());
			ViaCepResponse response = conversor.converter(json);
			response.listarDados();

			sistema.defineYoutube();
			sistema.defineThreads();
			sistema.showYoutubeData();
			sistema.showThreadsData();
			sistema.showStandardValues();

		};
	}

}
