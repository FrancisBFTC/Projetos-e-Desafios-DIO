package br.com.control;

import br.com.entity.Pacientes;

public class PacientesControl {
    public static Pacientes[] pacientes;
    private static int index = 0;

    public static void pacientesInit(){
        pacientes = new Pacientes[10];
    }

    public static Pacientes[] getPacientes(){
        return pacientes;
    }

    public static boolean validarCamposPacientes(String nome, String cpf, String rg, String nasc,
                                                String sexo, String email, String telefone, String endereco){
        if(nome.isEmpty() || cpf.isEmpty() || rg.isEmpty() || nasc.isEmpty()
        || sexo.isEmpty() || email.isEmpty() || telefone.isEmpty() || endereco.isEmpty()) {
            return false;
        }
        return true;
    }

    public static void cadastrarPacientes(String nome, String cpf, String rg, String nasc,
                                          String sexo, String email, String telefone, String endereco){
        pacientes[index] = new Pacientes(nome, cpf, rg, nasc, sexo, email, telefone, endereco);

        System.out.println("Paciente " + index + " cadastrado com sucesso!");
        index++;
    }
}
