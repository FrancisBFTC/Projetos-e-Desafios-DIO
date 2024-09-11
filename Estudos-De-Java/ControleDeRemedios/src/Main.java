import br.com.boundary.UI.LoginUI;
import br.com.boundary.UI.EstoqueUI;
import br.com.control.DEMASControl;
import br.com.entity.Dados;
import com.google.gson.Gson;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;


//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
public class Main {
    public static EstoqueUI remedios;
    public static LoginUI login;

    public static String systemName = "Controle de Remédios";

    public static void main(String[] args) throws IOException {
        login = new LoginUI(systemName + " - Login");
        DEMASControl demas = new DEMASControl();

        demas.listaAtendimentos(84, 1);

    }
}