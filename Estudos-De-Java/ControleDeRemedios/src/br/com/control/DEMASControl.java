package br.com.control;

import br.com.entity.Dados;
import com.google.gson.Gson;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;

public class DEMASControl {

    public DEMASControl(){

    }

    public void listaAtendimentos(int codigo_unidade, int limit) throws IOException {
        String url = "https://apidadosabertos.saude.gov.br/cnes/estabelecimentos?codigo_tipo_unidade=" + codigo_unidade + "&limit= " + limit + "&offset=1";
        HttpURLConnection conn = (HttpURLConnection) new URL(url).openConnection();

        conn.setRequestMethod("GET");
        conn.setRequestProperty("Accept", "application/json");
        conn.setRequestProperty("Content-Type", "application/json");
        conn.connect();

        if(conn.getResponseCode() != 200)
            System.out.println("Error: " + conn.getResponseCode() + " " + conn.getResponseMessage() + "\n");

        BufferedReader br = new BufferedReader(new InputStreamReader(conn.getInputStream()));
        String output = "";
        String line;
        while ((line = br.readLine()) != null) {
            output += line;
        }

        conn.disconnect();

        Gson gson = new Gson();
        Dados dados = gson.fromJson(output, Dados.class);

        for(int i = 0; i < dados.estabelecimentos.length; i++){
            System.out.println("Codigo CNES: " + dados.estabelecimentos[i].codigo_cnes);
            System.out.println("Razão Social: " + dados.estabelecimentos[i].nome_razao_social);
            System.out.println("Turno de Atendimento: " + dados.estabelecimentos[i].descricao_turno_atendimento);
        }
    }
}
