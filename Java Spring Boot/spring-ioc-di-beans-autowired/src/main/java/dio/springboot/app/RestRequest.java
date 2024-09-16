package dio.springboot.app;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;

@Component
public class RestRequest {

    public String request(String url) throws IOException {
        HttpURLConnection connection = (HttpURLConnection) new URL(url).openConnection();

        connection.setRequestMethod("GET");
        connection.setRequestProperty("Accept", "application/json");
        connection.setRequestProperty("Content-Type", "application/json");
        connection.connect();

        if(connection.getResponseCode() != 200) {
            System.out.println(connection.getResponseCode());
        }

        BufferedReader br = new BufferedReader(new InputStreamReader(connection.getInputStream()));
        String inputLine;
        StringBuffer content = new StringBuffer();
        while ((inputLine = br.readLine()) != null) {
            content.append(inputLine);
        }

        connection.disconnect();

        return content.toString();
    }
}
