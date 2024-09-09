import br.com.boundary.UI.LoginUI;
import br.com.boundary.UI.EstoqueUI;

//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
public class Main {
    public static EstoqueUI remedios;
    public static LoginUI login;

    public static String systemName = "Controle de Remédios";

    public static void main(String[] args) {
        login = new LoginUI(systemName + " - Login");

    }
}