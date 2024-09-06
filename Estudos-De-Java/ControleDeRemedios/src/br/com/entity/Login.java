package br.com.entity;

public class Login {
    private String usuario;
    private String senha;
    private int session = 0;

    public Login(){
        this.usuario = "";
        this.senha = "";
        this.session = 0;
    }

    public Login(String usuario, String senha) {
        this.usuario = usuario;
        this.senha = senha;
        this.session = 0;
    }

    public String getUsuario() {
        return usuario;
    }

    public void setUsuario(String usuario) {
        this.usuario = usuario;
    }

    public String getSenha() {
        return senha;
    }

    public void setSenha(String senha) {
        this.senha = senha;
    }

    public int getSession() {
        return session;
    }

    public void setSession(int session) {
        this.session = session;
    }

}
