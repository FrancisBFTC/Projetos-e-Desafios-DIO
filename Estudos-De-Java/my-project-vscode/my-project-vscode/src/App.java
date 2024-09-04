import java.net.URL;
import java.io.*;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.*;

public class App {
    private static String lines;
    public static void main(String[] args) throws Exception {
        System.out.println("Hi, World! Initializing Servlet...");
        ClientesServlet client = new ClientesServlet() {
            
        };
        client.init();
 
    }

    public static String restConnection(String file) throws IOException{
        String path = "file:///C:/Users/wendersonanjos/Desktop/Projects/my-project-vscode/my-project-vscode/lib/" + file;
        URL url = new URL(path);
        InputStream inputStream = url.openConnection().getInputStream();
        BufferedReader bufferedReader = new BufferedReader(new InputStreamReader(inputStream));

        String line = null;
        while((line = bufferedReader.readLine()) != null){
            System.out.println(line);
            lines += line;
        }
        return lines;
    }
}

@WebServlet(urlPatterns = "/clientes", loadOnStartup = 1)
abstract class ClientesServlet extends HttpServlet{
    private String clientes;

    @Override
    protected void doGet(HttpServletRequest req, HttpServletResponse res)
        throws ServletException, IOException {
            res.getWriter().print(clientes);
        }

    @Override
    public void init() throws ServletException {
        try {
            clientes = App.restConnection("clientes.xml");
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
