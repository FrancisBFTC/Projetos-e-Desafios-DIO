package br.com.control;

import br.com.entity.Pacientes;

import javax.swing.*;

public class PacientesControl {
    private static Pacientes[] pacientes;
    private static int index = 0;

    // Implementando o padrão Singleton (Design Patterns)
    public static Pacientes[] pacientesInit(){
        if(getPacientes() == null)
            pacientes = new Pacientes[10];

        return pacientes;
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
        pacientes[index] = new Pacientes();
        pacientes[index].setNome(nome);
        pacientes[index].setCpf(cpf);
        pacientes[index].setRg(rg);
        pacientes[index].setNascimento(nasc);
        pacientes[index].setSexo(sexo);
        pacientes[index].setEmail(email);
        pacientes[index].setTelefone(telefone);
        pacientes[index].setEndereco(endereco);

        System.out.println("Paciente " + index + " cadastrado com sucesso!");
        index++;
    }

    public static void listarPacientesConsole(){
        for(int i = 0; i < index; i++){
            System.out.println("Nome do Paciente: " + pacientes[i].getNome());
            System.out.println("CPF: " + pacientes[i].getCpf());
            System.out.println("RG: " + pacientes[i].getRg());
            System.out.println("Nascimento: " + pacientes[i].getNascimento());
            System.out.println("Sexo: " + pacientes[i].getSexo());
            System.out.println("Email: " + pacientes[i].getEmail());
            System.out.println("Telefone: " + pacientes[i].getTelefone());
            System.out.println("Endereco: " + pacientes[i].getEndereco());
            System.out.println();
        }
    }

    public static void listarPacientesGUI(JPanel listarPanel, JLabel[] labelsNome, JLabel[] labelsCpf, JLabel[] labelsRG,
                                        JLabel[] labelsNasc, JLabel[] labelsSexo, JLabel[] labelsEmail, JLabel[] labelsTelefone,
                                        JLabel[] labelsEndereco, int pos_y){
        for(int i = 0; i < index; i++){
            labelsNome[i] = new JLabel();
            labelsNome[i].setText("Nome: " + pacientes[i].getNome());
            labelsNome[i].setBounds(20, pos_y+=20, labelsNome[i].getText().length() * 8, 20);
            listarPanel.add(labelsNome[i]);

            labelsCpf[i] = new JLabel();
            labelsCpf[i].setText("CPF: " + pacientes[i].getCpf());
            labelsCpf[i].setBounds(20, pos_y+=20, labelsCpf[i].getText().length() * 8, 20);
            listarPanel.add(labelsCpf[i]);

            labelsRG[i] = new JLabel();
            labelsRG[i].setText("RG: " + pacientes[i].getRg());
            labelsRG[i].setBounds(20, pos_y+=20, labelsRG[i].getText().length()  * 8, 20);
            listarPanel.add(labelsRG[i]);

            labelsNasc[i] = new JLabel();
            labelsNasc[i].setText("Nascimento: " + pacientes[i].getNascimento());
            labelsNasc[i].setBounds(20, pos_y+=20, labelsNasc[i].getText().length()  * 8, 20);
            listarPanel.add(labelsNasc[i]);

            labelsSexo[i] = new JLabel();
            labelsSexo[i].setText("Sexo: " + pacientes[i].getSexo());
            labelsSexo[i].setBounds(20, pos_y+=20, labelsSexo[i].getText().length()  * 8, 20);
            listarPanel.add(labelsSexo[i]);

            labelsEmail[i] = new JLabel();
            labelsEmail[i].setText("Email: " + pacientes[i].getEmail());
            labelsEmail[i].setBounds(20, pos_y+=20, labelsEmail[i].getText().length()  * 8, 20);
            listarPanel.add(labelsEmail[i]);

            labelsTelefone[i] = new JLabel();
            labelsTelefone[i].setText("Telefone: " + pacientes[i].getTelefone());
            labelsTelefone[i].setBounds(20, pos_y+=20, labelsTelefone[i].getText().length()  * 8, 20);
            listarPanel.add(labelsTelefone[i]);

            labelsEndereco[i] = new JLabel();
            labelsEndereco[i].setText("Endereco: " + pacientes[i].getEndereco());
            labelsEndereco[i].setBounds(20, pos_y+=20, labelsEndereco[i].getText().length()  * 8, 20);
            listarPanel.add(labelsEndereco[i]);

            pos_y += 10;
        }
    }
}
