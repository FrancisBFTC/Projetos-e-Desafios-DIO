package br.com.control;

import br.com.entity.Login;

public class LoginControl {
    private static Login login;
    public static int Session = 0;

    public static void loginInit(){
        login = new Login("Admin", "1234");
    }

    public static Login getLogin(){
        return login;
    }

    public static boolean validarCamposLogin(String usuario, String senha){
        if(usuario.isEmpty() || senha.isEmpty()){
            System.out.println("Preencha os campos de login!");
            return false;
        }

        return true;
    }

    public static boolean autenticarLogin(String usuario, String senha){
        if(usuario.equals(login.getUsuario()) && senha.equals(login.getSenha()))
            return true;

        System.out.println("Os dados estão inválidos!");
        return false;
    }
}
