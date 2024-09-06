package br.com.entity;

public class Pacientes {
    private String nome;
    private String cpf;
    private String rg;
    private String nascimento;
    private String sexo;
    private String email;
    private String telefone;
    private String endereco;

    public Pacientes(){
        this.nome = "";
        this.cpf = "";
        this.rg = "";
        this.nascimento = "";
        this.sexo = "";
        this.email = "";
        this.telefone = "";
        this.endereco = "";
    }

    public Pacientes(String nome, String cpf, String rg, String nascimento,
                     String sexo, String email, String telefone, String endereco){
        this.nome = nome;
        this.cpf = cpf;
        this.rg = rg;
        this.nascimento = nascimento;
        this.sexo = sexo;
        this.email = email;
        this.telefone = telefone;
        this.endereco = endereco;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getCpf() {
        return cpf;
    }

    public void setCpf(String cpf) {
        this.cpf = cpf;
    }

    public String getRg() {
        return rg;
    }

    public void setRg(String rg) {
        this.rg = rg;
    }

    public String getNascimento() {
        return nascimento;
    }

    public void setNascimento(String nascimento) {
        this.nascimento = nascimento;
    }

    public String getSexo() {
        return sexo;
    }

    public void setSexo(String sexo) {
        this.sexo = sexo;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getTelefone() {
        return telefone;
    }

    public void setTelefone(String telefone) {
        this.telefone = telefone;
    }

    public String getEndereco() {
        return endereco;
    }

    public void setEndereco(String endereco) {
        this.endereco = endereco;
    }
}
