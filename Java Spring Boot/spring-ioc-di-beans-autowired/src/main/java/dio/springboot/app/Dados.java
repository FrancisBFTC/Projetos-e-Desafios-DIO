package dio.springboot.app;

import org.springframework.beans.factory.annotation.Value;
import org.springframework.boot.context.properties.ConfigurationProperties;
import org.springframework.context.annotation.Configuration;

@Configuration
@ConfigurationProperties(prefix = "dados")
public class Dados {
    private String canal;
    private String area;
    private String contato;
    private String rede;

    public String getCanal() {
        return canal;
    }

    public void setCanal(String canal) {
        this.canal = canal;
    }

    public String getArea() {
        return area;
    }

    public void setArea(String area) {
        this.area = area;
    }

    public String getContato() {
        return contato;
    }

    public void setContato(String contato) {
        this.contato = contato;
    }

    public String getRede() {
        return rede;
    }

    public void setRede(String rede) {
        this.rede = rede;
    }

    @Override
    public String toString() {
        return "Dados{" + "canal=" + canal + ", area=" + area + ", contato=" + contato + ", rede=" + rede + '}';
    }
}
