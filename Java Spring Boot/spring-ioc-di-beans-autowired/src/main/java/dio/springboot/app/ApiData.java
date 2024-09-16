package dio.springboot.app;

import org.springframework.boot.context.properties.ConfigurationProperties;
import org.springframework.context.annotation.Configuration;

@Configuration
@ConfigurationProperties(prefix = "springapp")
public class ApiData {
    private String api;

    public String getApi() {
        return api;
    }

    public void setApi(String api) {
        this.api = api;
    }
}
