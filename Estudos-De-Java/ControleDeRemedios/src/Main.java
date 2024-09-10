import br.com.boundary.UI.LoginUI;
import br.com.boundary.UI.EstoqueUI;
import br.com.entity.Dados;
import br.com.entity.TipoUnidades;
import com.google.gson.Gson;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.ArrayList;

//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
public class Main {
    public static EstoqueUI remedios;
    public static LoginUI login;

    public static String systemName = "Controle de Remédios";

    public static void main(String[] args) throws IOException {
        login = new LoginUI(systemName + " - Login");

        String url = "https://apidadosabertos.saude.gov.br/cnes/tipounidades";
        HttpURLConnection  conn = (HttpURLConnection) new URL(url).openConnection();

        conn.setRequestMethod("GET");
        conn.setRequestProperty("Accept", "application/json");
        conn.setRequestProperty("Content-Type", "application/json");
        conn.connect();

        if(conn.getResponseCode() != 200) {
            System.out.println("Error: " + conn.getResponseCode());
            System.out.println(conn.getResponseMessage());
        }

        BufferedReader br = new BufferedReader(new InputStreamReader(conn.getInputStream()));
        String output = "";
        String line;
        while ((line = br.readLine()) != null) {
            output += line;
        }

        conn.disconnect();

        Gson gson = new Gson();

        Dados dados = new Dados();
        dados = gson.fromJson(output, Dados.class);

       System.out.println(dados.tipoUnidades[0].getDescricao_tipo_unidade());

    }
}